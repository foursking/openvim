<?php

class Comments_model extends CI_Model {

 	private $_tables = array(
		'comment' => 'comment',
		'tags_relationships'   => 'tags_relationships',
		'comments_relationships'   => 'comments_relationships',
	);


    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
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
         *  INSERT INTO `op_comments` (`userId` , `username` , `tipsId` , `content` , `commCtime` , `commUtime`)
         *  VALUES(userId, username , tipsId , content , commCtime , commUtime)
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
         *  SQL INSERT INTO `op_comments_relationships` (`tipsId` , `userId` , `commId`) VALUES(tipsId , userId , commId)
         */
        $this->db->insert($this->_tables['comments_relationships'] , $append_data);

        return $this->db->insert_id();

    }

    /**
	 * 更新Tips评论数
	 * @param int $data
	 * @return int
	 */
    public function renew_tips_comments_num( $data )
    {

        /**
         *  SQL UPDATE `op_tips`  SET `tipsCommNum` = `tipsCommNum`+1  WHERE `tipsId` = $tipsId
         */
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
         *  SELECT  `commId`
         *  FROM `op_comments_relationships`
         *  WHERE `tipsId` = tipsId
         */
        $queryResult = $this->db->select("commId")
                            ->from("{$this->_tables['comments_relationships']}")
                            ->where('tipsId' , $data['tips_id'])
                            ->get()
                            ->result_array();


        if ( !is_array($queryResult) OR count($queryResult) < 1) {
             return false;
         }


        foreach ($queryResult as $key=>$value) {
             $commId = $value['commId'];
         }

        /**
         *  SQL
         *  SELECT `commId`,`userId`,`username`,`tipsId`,`content`,`commCtime`,`commUtime`
         *  FROM `op_comments_relationships`
         *  WHERE commId IN ($comId)
         */
        return  $this->db->select("commId , userId , username , tipsId , content , commCtime , commUtime")
                         ->from("{$this->_tables['comment']}")
                         ->where_in('commId' , $commId)
                         ->get()
                         ->result_array();



    }

}




?>
