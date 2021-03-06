<?php

class Tips_model extends CI_Model {

    private $_tables = array(
        'tips' => 'tips',
        'tags' => 'tags',
        'comment' => 'comment',
        'tags_relationships'   => 'tags_relationships',
        'comments_relationships'   => 'comments_relationships',
        'categories'   => 'categories',
    );


    function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }


    /**
     * 获取VimTips概括
     * @param int $num tips数量
     * @param int $offset 分页数
     * @return array
     */

    public function showTipsGeneralize($num , $offset , $sort='newest')
    {

        $zodiac = array(
            'Ram'      => 'Aries',
            'Bull'     => 'Taurus',
            'Twins'    => 'Gemini',
            'Crab'     => 'Cancer',
            'Lion'     => 'Leo',
            'Virgin'   => 'Virgo',
            'Balance'  => 'Libra',
            'Scorpion' => 'Scorpio',
            'Archer'   => 'Sagittarius',
            'Goat'     => 'Capricorn',
            'Bearer'   => 'Aquarius',
            'Fishes'   => 'Pisces'
        );


        if ($sort == 'newest') {
            $querySql = $this->db->order_by('tipsUtime' , 'desc')->get('tips' , $offset, $num);
        }
        else if($sort == 'vote') {
            $querySql = $this->db->order_by('tipsCommNum' , "desc")->get('tips' , $offset, $num);
        }


        $Ram = $querySql->result_array();

        $tipsId = '';

        foreach ($Ram as $key=>$value) {
            $tipsId .= $value['tipsId'] . ',';
        }


        $tipsId = rtrim($tipsId , ',');

        $querySql = $this->db->query("SELECT * FROM `op_tags_relationships` WHERE tipsId IN ({$tipsId})");

        $Bull = $querySql->result_array();

        if (empty($Bull)) return $Ram;

        foreach ($Bull as $key=>$value) {
            $tagsId[] = $value['tagsId'];
        }

        $tagsId = implode(',' , array_flip(array_flip($tagsId)));

        $querySql = $this->db->query("SELECT * FROM `op_tags` WHERE tagsId IN ({$tagsId})");

        $Twins = $querySql->result_array();

        foreach ($Twins as $key=>$value) {
            $tagsName[$value['tagsId']] = $value['tagsName'];
        }

        foreach ($Ram as $key=>$value) {
            foreach ($Bull as $k=>$v) {
                if ($v['tipsId'] == $value['tipsId']) {
                    $Ram[$key]['tags'][$v['tagsId']] = $tagsName[$v['tagsId']];
                } else {
                    continue;
                }
            }
        }
        return $Ram;
    }

    /**
     * 获取VimTips最热标签
     * @param int $num 最热标签数
     * @return array
     */
    public function showTopTags($num = 7)
    {


        /**
         *  SQL
         *
         *  SELECT a.tagsId, COUNT(a.tagsId) AS tagsCount,b.tagsName
         *  FROM op_tags_relationships AS a join op_tags as b
         *  On a.tagsId = b.tagsId
         *  GROUP BY a.tagsId
         *  ORDER BY tagsCount DESC
         *  LIMIT 0 , $num
         */


        return  $this->db->select("a.tagsId,count(a.tagsId) as tagsCount,b.tagsName")
                         ->from("{$this->_tables['tags_relationships']} as a")
                         ->join("{$this->_tables['tags']} as b" , "a.tagsId = b.tagsId")
                         ->group_by("a.tagsId")
                         ->order_by("tagsCount" , "desc")
                         ->limit($num)
                         ->get()
                         ->result_array();


    }



    public function showTipsDetail($tipsId = '')
    {


        $Ram = $this->db->select("a.tipsId , a.tipsUid , a.tipsTitle , a.tipsContent , a.tipsCtime , a.tipsUtime")
            ->from("op_tips as a")
            ->where('a.tipsId' , $tipsId)
            ->get()
            ->row_array();

        $tipsId = $Ram['tipsId'];

        $querySql = $this->db->query("SELECT * FROM `op_tags_relationships` WHERE tipsId IN ({$tipsId})");

        $Bull = $querySql->result_array();

        if (empty($Bull)) return $Ram;

        foreach ($Bull as $key=>$value) {
            $tagsId[] = $value['tagsId'];
        }

        $tagsId = implode(',' , array_flip(array_flip($tagsId)));

        $querySql = $this->db->query("SELECT * FROM `op_tags` WHERE tagsId IN ({$tagsId})");

        $Twins = $querySql->result_array();

        foreach ($Twins as $key=>$value) {
            $tagsName[$value['tagsId']] = $value['tagsName'];
        }


        foreach ($Bull as $k=>$v) {
            if ($v['tipsId'] == $Ram['tipsId']) {
                $Ram['tags'][$v['tagsId']] = $tagsName[$v['tagsId']];
            } else {
                continue;
            }
        }

        return $Ram;
    }

    public function countTipsAll()
    {
        return  $this->db->count_all($this->_tables['tips']);
    }

    public function countTipsByTagsName($tags_name)
    {
        //通过tags_name 获取 tagsId
        $tags_id = $this->_getTagsId($tags_name);

        return $this->db->from($this->_tables['tags_relationships'])
                        ->where("tagsId" , $tags_id['tagsId'])
                        ->count_all_results();

    }



    public function showTipsGeneralizeByTagsName($num = '' , $offset = '' , $tags_name = '')
    {
        //通过tags_name 获取 tagsId
        $tags_id = $this->_getTagsId($tags_name);

        //分页获取 tipsId
        $tipsId = $this->db->select("tipsId")
            ->from($this->_tables['tags_relationships'])
            ->where("tagsId" , $tags_id['tagsId'])
            ->limit($offset , $num)
            ->get()
            ->result_array();

        if (empty($tipsId))
            return false;

        $_tipsId = array();

        foreach ($tipsId as $key=>$value)
        {
            $_tipsId[] = $value['tipsId'];
        }



        $Ram = $this->db->select("tipsId , tipsUid , tipsTitle , tipsContent , tipsCtime , tipsUtime")
                        ->from("{$this->_tables['tips']}")
                        ->where_in('tipsId' , $_tipsId)
                        ->get()
                        ->result_array();



        $Bull = $this->db->select("tipsId , tagsId")
                         ->from("{$this->_tables['tags_relationships']}")
                         ->where_in('tipsId' , $_tipsId)
                         ->get()
                         ->result_array();


        if (empty($Bull)) return $Ram;

        $_tagsId = array();

        foreach ($Bull as $key=>$value) {
            $_tagsId[] = $value['tagsId'];
        }

        $_tagsId = array_flip(array_flip($_tagsId));




        $Twins = $this->db->select("tagsId , tagsName")
                      ->from("{$this->_tables['tags']}")
                      ->where_in("tagsId" , $_tagsId)
                      ->get()
                      ->result_array();


        foreach ($Twins as $key=>$value) {
            $tagsName[$value['tagsId']] = $value['tagsName'];
        }

        foreach ($Ram as $key=>$value) {
            foreach ($Bull as $k=>$v) {
                if ($v['tipsId'] == $value['tipsId']) {
                    $Ram[$key]['tags'][$v['tagsId']] = $tagsName[$v['tagsId']];
                } else {
                    continue;
                }
            }
        }

        return $Ram;

    }





    public function getTagByPress( $data )
    {
        return $this->db->select("tagsId , tagsName")
            ->from($this->_tables['tags'])
            ->like('tagsName' , $data)
            ->limit(10)
            ->get()
            ->result_array();
    }


    public function appendTips( $data )
    {
        $insert_data = array(
            'tipsUid'     => 1,
            'tipsTitle'    => $data['tips_title'],
            'tipsContent' => $data['tips_content'],
            'tipsCtime' => date("Y-m-d H:i:s" , time()),
            'tipsUtime' => date("Y-m-d H:i:s" , time()),
        );


        $this->db->insert($this->_tables['tips'] , $insert_data);

        return $this->db->insert_id();
    }


    public function appendTagsRelationship( $data )
    {
        $insert_data = array();

        foreach ($data['tags'] as $key=>$value) {
            $insert_data[$key]['tipsId'] = $data['tipsId'];
            $insert_data[$key]['tagsId'] = $value;
        }

        $this->db->insert_batch($this->_tables['tags_relationships'] , $insert_data);

        return $this->db->insert_id();
    }

    private function _getTagsId( $data )
    {
        return $this->db->select("tagsId")
            ->from($this->_tables['tags'])
            ->where("tagsName" , $data)
            ->get()
            ->row_array();
    }


    /**
	 *
     * list Node
     * @return array
	 *
     */

	public function listNode() {
		$rawNodeList = $this->db->select("cid , pid , cname , content")
			->from('categories')
			->get()
			->result_array();

		$nodeList = array();

		foreach ($rawNodeList as $node) {
			if (0 == $node['pid']) {
				$nodeList[$node['cid']]['info'] = $node;
			} else {
				$nodeList[$node['pid']]['children'][] = $node;
			}
		}
		return $nodeList;
	}

}




?>
