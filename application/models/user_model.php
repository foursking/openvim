<?php

/**
 * 平台用户
 */
class User_model extends CI_Model
{

    private $_tables = array(
        'user' => 'user',
    );


    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /**
     * 添加用户
     * @param array $data 插入数据
     * @return int userId
     */

    function append_user( $data )
    {

        $insert_data = array(
            'userName'     => $data['register_username'],
            'userEmail'    => $data['register_email'],
            'userPassword' => md5($data['register_password']),
            'userIsActive' => isset($data['userIsActive']) ? $data['userIsActive'] : 0,
        );


        $this->db->insert($this->_tables['user'] , $insert_data);

        return $this->db->insert_id();

    }


    /**
     * 查询该用户，返回用户信息
     */
    function check_user_password( $data )
    {

        $Ram = $this->db->select("userId , userName , userEmail , userIsActive")
            ->from("{$this->_tables['user']}")
            ->where('userEmail' , $data['login_email'])
            ->where('userPassword' , md5($data['login_password']))
            ->get()
            ->result_array();

        return $Ram;

    }

    /**
     * 通过用户ID获取用户名
     * @param  int  $data 用户ID
     * @return array userId
     */

    public function get_userName_by_userId( $data )
    {
       return $this->db->select("userId , userName , userEmail , userIsActive")
                   ->from("{$this->_tables['user']}")
                   ->where('userId' , $data )
                   ->get()
                   ->row_array();

    }




}
