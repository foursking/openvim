<?php

class Topic_model extends CI_Model {

    private $_tables = array(
        'topics'   => 'topics',
    );


    function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }


	public function listNodeTopic($num, $offset, $nodeId = 1) {

		$rawTopicList = $this->db->select("id , nid , uid, title , content")
		    ->from("{$this->_tables['topics']}")
            ->where('nid' , $nodeId)
			->limit($offset , $num)
			->get()
			->result_array();
		return $rawTopicList;
	}


    public function countNodeTopic($nodeId) {
		return  $this->db->from("{$this->_tables['topics']}")
						->where("nid" , $nodeId)
						->count_all_results();
    }




    /**
     * 获取VimTips概括
     * @param int $num tips数量
     * @param int $offset 分页数
     * @return array
     */

    public function showTipsGeneralize($num , $offset , $sort='newest') {

	}


           /**
     * 获取VimTips最热标签
     * @param int $num 最热标签数
     * @return array
     */
    public function showTopTags($num = 7) {

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

    public function countTipsAll() {
        return  $this->db->count_all_results();
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

	public function listNode($num , $offset ) {
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
