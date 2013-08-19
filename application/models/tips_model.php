<?php

class Tips_model extends CI_Model {

 	private $_tables = array(
        'tips' => 'tips',
		'tags' => 'tags',
		'comment' => 'comment',
		'tags_relationships'   => 'tags_relationships',
		'comments_relationships'   => 'comments_relationships',
	);


    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }


    /**
	 * 获取VimTips概括
	 * @param int $num tips数量
	 * @param int $offset 分页数
	 * @return array
	 */

    public function show_tips_generalize($num , $offset , $sort='newest')
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


        if ($sort == 'newest')
         {
            $querySql = $this->db->order_by('tipsUtime' , 'desc')->get('tips' , $offset, $num);
         }
        else if($sort == 'vote')
        {
            $querySql = $this->db->order_by('tipsCommNum' , "desc")->get('tips' , $offset, $num);
        }


        $Ram = $querySql->result_array();

        $tipsId = '';

        foreach ($Ram as $key=>$value)
        {
            $tipsId .= $value['tipsId'] . ',';
        }


        $tipsId = rtrim($tipsId , ',');

        $querySql = $this->db->query("SELECT * FROM `op_tags_relationships` WHERE tipsId IN ({$tipsId})");

        $Bull = $querySql->result_array();

        if (empty($Bull))
            return $Ram;

        foreach ($Bull as $key=>$value)
        {
            $tagsId[] = $value['tagsId'];
        }

        $tagsId = implode(',' , array_flip(array_flip($tagsId)));

        $querySql = $this->db->query("SELECT * FROM `op_tags` WHERE tagsId IN ({$tagsId})");

        $Twins = $querySql->result_array();

        foreach ($Twins as $key=>$value)
        {
            $tagsName[$value['tagsId']] = $value['tagsName'];
        }

        foreach ($Ram as $key=>$value)
        {
            foreach ($Bull as $k=>$v)
            {
                if ($v['tipsId'] == $value['tipsId'])
                {
                    $Ram[$key]['tags'][$v['tagsId']] = $tagsName[$v['tagsId']];
                }
                else
                {
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
    public function show_top_tags($num = 7)
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


        $Ram = $this->db->select("a.tagsId,count(a.tagsId) as tagsCount,b.tagsName")
                        ->from("{$this->_tables['tags_relationships']} as a")
                        ->join("{$this->_tables['tags']} as b" , "a.tagsId = b.tagsId")
                        ->group_by("a.tagsId")
                        ->order_by("tagsCount" , "desc")
                        ->limit($num)
                        ->get()
                        ->result_array();

        return $Ram;

    }



    public function show_tips_detail($tipsId = '')
    {


        $Ram = $this->db->select("a.tipsId , a.tipsUid , a.tipsTitle , a.tipsContent , a.tipsCtime , a.tipsUtime")
            ->from("op_tips as a")
            ->where('a.tipsId' , $tipsId)
            ->get()
            ->row_array();

        $tipsId = $Ram['tipsId'];

        $querySql = $this->db->query("SELECT * FROM `op_tags_relationships` WHERE tipsId IN ({$tipsId})");

        $Bull = $querySql->result_array();

        if (empty($Bull))
            return $Ram;

        foreach ($Bull as $key=>$value)
        {
            $tagsId[] = $value['tagsId'];
        }

        $tagsId = implode(',' , array_flip(array_flip($tagsId)));

        $querySql = $this->db->query("SELECT * FROM `op_tags` WHERE tagsId IN ({$tagsId})");

        $Twins = $querySql->result_array();

        foreach ($Twins as $key=>$value)
        {
            $tagsName[$value['tagsId']] = $value['tagsName'];
        }


        foreach ($Bull as $k=>$v)
        {
            if ($v['tipsId'] == $Ram['tipsId'])
            {
                $Ram['tags'][$v['tagsId']] = $tagsName[$v['tagsId']];
            }
            else
            {
                continue;
            }
        }

        return $Ram;
    }

    public function count_tips_all()
    {
        $Ram = $this->db->count_all($this->_tables['tips']);
        return $Ram;
    }


    /**
     * 添加评论
     * @ param array $data
     * @ return int
     */

    public function append_comments($data)
    {
        $append_data = array(
            'userId' => $data['user_id'],
            'tipsId'=> $data['tips_id'],
            'content' =>$data['content'],
            'commCtime' => date("Y-m-d H:i:s"),
            'commUtime' => date("Y-m-d H:i:s"),
            'username' => $data['user_name'],
        );

       /**
         *  SQL
         *
         *  INSERT INTO `op_comments` (`userId` , `username` , `tipsId` , `content` , `commCtime` , `commUtime`)
         *  VALUES(userId, username , tipsId , content , commCtime , commUtime)
         *
         */

        $this->db->insert($this->_tables['comment'] , $append_data);

        return $this->db->insert_id();

    }



    /**
	 * 添加Tips 评论
	 * @param array $data
	 * @return array
	 */

    public function append_comments_relationship($data)
    {
        $append_data = array(
            'tipsId' => $data['tips_id'],
            'userId' => $data['user_id'],
            'commId' => $data['comment_id'],
        );

        /**
         *  SQL
         *
         *  INSERT INTO `op_comments_relationships` (`tipsId` , `userId` , `commId`)
         *  VALUES(tipsId , userId , commId)
         *
         */

        $this->db->insert($this->_tables['comments_relationships'] , $append_data);

        return $this->db->insert_id();

    }

    public function renew_tips_comments_num( $data )
    {

        $this->db->set('tipsCommNum' , 'tipsCommNum+1' , false)
                 ->where('tipsId' , $data['tips_id'])
                 ->update($this->_tables['tips']);

        return $this->db->affected_rows();

    }


    /**
	 * 显示Tips 评论
	 * @param array $data
	 * @return array
	 */


    public function show_comments( $data )
    {


        /**
         *  SQL
         *
         *  SELECT  `commId`
         *  FROM `op_comments_relationships`
         *  WHERE `tipsId` = tipsId
         *
         */

        $Ram = $this->db->select("commId")
                        ->from("{$this->_tables['comments_relationships']}")
                        ->where('tipsId' , $data['tips_id'])
                        ->get()
                        ->result_array();

        if (empty($Ram))
         {
             return false;
         }


        foreach ($Ram as $key=>$value)
         {
             $Bull[] = $value['commId'];
         }



        //SQL
        $Ram = $this->db->select("commId , userId , username , tipsId , content , commCtime , commUtime")
                         ->from("{$this->_tables['comment']}")
                         ->where_in('commId' , $Bull)
                         ->get()
                         ->result_array();

        return $Ram;



    }







}




?>
