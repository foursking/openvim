<?php
/**
 * 平台用户
 *
 *
 */
class User_model extends Model
{

    var $name;

	var $email;

	var $password;

    var $is_sendemail;


	function __construct()
    {
        parent::Model();
    }


    /**
	 * 添加新客户
	 */
	function create()
    {
		$datetime = date('Y-m-d H:i:s');
		if($this->check_name($this->name)||$this->check_email($this->email))
		{
			redirect('login/register/register');
		}

        $this->db->set('user_name', $this->name);
		$this->db->set('user_email', $this->email);
		$this->db->set('user_pwd', md5($this->password));
		$this->db->set('register_at', $datetime);
		$this->db->set('updated_at', $datetime);
        $this->db->set('is_active','1');
        return $this->db->insert('customer');
    }

    // --------------------------------------------------------------------

    /**
	 * 查询该用户名是否存在
	 *
	 *
	 */
	function check_name($name)
	{
		$query = $this->db->get_where('customer',array('user_name' => $name));
        if ($row = $query->row_array())
        {
            return true;
        }
        return false;
	}

	// --------------------------------------------------------------------

    /**
	 * 查询该邮箱是否存在
	 *
	 *
	 */
	function check_email($email)
	{
		$query = $this->db->get_where('customer',array('user_email' => $email));
        if ($row = $query->row_array()){
            return true;
        }
        return false;
	}

   // --------------------------------------------------------------------

    /**
	 * 查询该用户，返回用户信息
	 *
	 *
	 */
	function check_customer()
	{
        $query = $this->db->get_where('customer',array('user_email' => $this->email,'user_pwd' => md5($this->password)));
        if ($row = $query->row_array())
        {
            return $row;
        }
        return array();
	}

	// --------------------------------------------------------------------

    /**
	 * load by id
	 *
	 *
	 */
    function load($id)
    {
        if (!$id){
            return array();
        }

        $query = $this->db->get_where('customer',array('user_id' => $id));

        if ($row = $query->row_array()){
            return $row;
        }

        return array();
    }

    // email读取用户信息
    function loadbyemail($email)
    {
    	if (!$email){
            return array();
        }

        $query = $this->db->get_where('customer',array('user_email' => $email));

        if ($row = $query->row_array()){
            return $row;
        }

        return array();
    }
    // --------------------------------------------------------------------

    /**
	 * 更新客户信息
	 *
	 *
	 */
	function update($id)
    {
        $datetime = date('Y-m-d H:i:s');
		$this->db->set('useremail', $this->email);
		$this->db->set('updated_at', $datetime);
		$this->db->where('user_id', $id);
        return $this->db->update('customer');
    }

    // --------------------------------------------------------------------

    /**
	 * 查询密码是否正确
	 *
	 *
	 */
    function check_pwd($password)
	{
		$query = $this->db->get_where('customer',array('user_pwd' => md5($password)));
		if ($row = $query->row_array())
        {
            return true;
        }
        return false;
	}


	// --------------------------------------------------------------------

    /**
	 * 更新密码
	 *
	 *
	 */
	function update_pwd($id,$pwd)
    {
		//直接update，email形式的
    	$this->db->set('user_pwd', md5($pwd));
        $this->db->where('user_id', $id);
        return $this->db->update('customer');
    }
	function update_getpwd($email,$pwd)
    {
		//直接update，email形式的
    	$this->db->set('user_pwd', md5($pwd));
        $this->db->where('user_email', $email);
        return $this->db->update('customer');
    }
	// --------------------------------------------------------------------

    /**
	 * 更新最后登录时间
	 *
	 *
	 */
    function update_last_login($customer_id)
	{
		$datetime = date('Y-m-d H:i:s');
		$this->db->set('last_login_at', $datetime);
		$this->db->set('last_login_ip',	getIp());
        $this->db->where('user_id', $customer_id);
        return $this->db->update('customer');
	}
	/*
	 * 用户权限判断
	 * @param $user_id
	 */
	function User_validate($user_id)
	{
		/*
		 * is_active 	激活
		 * is_operate	是否可操作
		 */
		$_Userinfo = array(
		'is_active'		=>		0,
		'is_operate'	=>		0);
		if(!$user_id)
		{
			return $_Userinfo;
		}
		//查看用户是否激活
		$_Customer = $this->load($user_id);
		if($_Customer['is_active'] == 1)
		{
			$_Userinfo['is_active'] = 1;
		}

		//查看对当前账本的操作权限
		$this->load->model("book_model");
		$_Bookoptions = array(
    		'conditions' 	=>   array('user_id'	=>$this->session->userdata('user_id'),'user_isactive'	=>	'1','book_id' =>$this->session->userdata('user_open_book_id')),
    		'order'			=>	'book_user_id');
		$_Book = $this->book_model->findBookusers($options);
		if(!empty($_Book))
		{
			$_Userinfo['is_operate'] = 1;
		}

		return $_Userinfo;
	}
}
