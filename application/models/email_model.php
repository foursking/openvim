<?php
header("content-type:text/html;charset=utf-8");
/**
 * 邮件模型
 *	1.设置邮件信息,2 发送邮件
 *	sendemail($name,1);
 *	url记录添加
 */
class email_model extends CI_Model
{


	var $url_uuid;
	var $openvim_user;
	var $openvim_email;
	var $op_email_subject;

    	//邮件信息 1注册 2找回密码 3账户关联

	var $op_email_message;


	var $web_url = "http://dev.openvim.com";
    var $hello_time = '';


	//操作url
	var $action_url ;


	function __construct()
    {
        parent::__construct();
        //配置smtp服务器
        $config_email = array(
		'protocol'	=>	'smtp',
		'smtp_host'	=>  'smtp.163.com',
		'smtp_port'	=>	25,
		'smtp_user'	=>	'openvim@163.com',
		'smtp_pass'	=>	'openvim@163'
		);

		$this->load->library('email',$config_email);
        $this->load->helper('op_helper');
        $this->hello_time = hello_time();
    }



    /**
	 * 邮件发送
	 */
	public function send_user_email($email_type = 0 , $email_receiver = '' , $email_receiver_address = '')
    {

        // 收件人 收件人地址
		if(!is_numeric($email_type) || !$email_receiver || !$email_receiver_address)
		{
            return false;
        }

        $this->openvim_user  = $email_receiver;
		$this->openvim_email = $email_receiver_address;



        //设置邮件参数
        $this->email_config(intval($email_type));
        //设置邮件换行
		$this->email->set_newline("\r\n");
        //设置发送邮件地址
		$this->email->from('openvim@163.com', 'OpenVim');
        //设置接受邮件地址
		$this->email->to($email_receiver_address);
        //设置email主题
		$this->email->subject($this->op_email_subject);
        //设置email正文
		$this->email->message($this->op_email_message);
        //发送邮件
        $this->email->send();
        //清空email配置
        $this->email->clear();

    }

    /**
	 * 获取邮件参数
	 */
    function email_config($email_type = 0)
    {
    	if(!is_numeric($email_type))
        {
            return false;
        }
        switch(intval($email_type))
        {
        	case 1:
        		$this->op_email_subject = "openvim新用户注册";
        		$this->action_url	 = 'http://www.openvim.com';
        		$this->op_email_message =
                                       "
                                       {$this->hello_time},{$this->openvim_user},恭喜您成为openvim新用户

                                       ----------------------------------------------------------------------
                                       详情点击
                                       ----------------------------------------------------------------------

                                       {$this->action_url}

                                       感谢您的访问，祝您使用愉快！

                                       此致！

                                       openvim  管理团队！

                                       {$this->web_url}
                                       ";
      			break;
        	case 2:
        		$this->op_email_subject = "用户忘记密码";
        		$this->action_url	 = site_url('getpwd')."?action=getpwd&isactive=1&urlkey={$this->url_uuid}";
        		$this->op_email_message =
                                       "
                                       {$this->hello_time},{$this->openvim_user}

                                       您好像忘记密码了~~

                                       您可以重新设置您的密码

                                       ----------------------------------------------------------------------
                                       详情点击
                                       ----------------------------------------------------------------------

                                       {$this->action_url}

                                       感谢您的访问，祝您使用愉快！

                                       此致！

                                       openvim  管理团队！

                                       {$this->web_url}
                                       ";
        		break;
        	case 3:
        		$this->op_email_subject = "邀请";
        		$this->action_url	 = site_url('main-home-booktobook')."?action=booktobook&isactive=1&urlkey={$this->url_uuid}";

        		$_user = $this->customer_model->load($this->session->userdata('user_id'));

        		$_book = $this->book_model->load($this->session->userdata('user_open_book_id'));

        		$this->op_email_message =
                                       "
                                       {$this->hello_time},{$this->openvim_user}

                                       这是一份来自openvim[{$_user['user_name']}]的邀请信

                                       邀请您与他共同使用vim[{$_book['book_name']}]

                                       ----------------------------------------------------------------------
                                       详情点击
                                       ----------------------------------------------------------------------

                                       {$this->action_url}

                                       感谢您的访问，祝您使用愉快！

                                       此致！

                                       openvim  管理团队！

                                       {$this->web_url}
                                       ";
        		break;

        	default:
        		break;

        }
    }


    //记录action url
    private function create_url($email_type = 0)
    {
    	if(!is_numeric($email_type))
        {
            return false;
        }
        switch(intval($email_type))
        {
        	case 1:
        			$this->db->set('url_uuid',$this->url_uuid);
        			$this->db->set('url_action','1');
					$this->db->set('url_status','1');
					$this->db->set('url_string',$this->action_url);
					$this->db->set('url_email',$this->openvim_email);
        			return $this->db->insert('url');
        			break;
        	case 2:
        			$this->db->set('url_uuid',$this->url_uuid);
        			$this->db->set('url_action','2');
					$this->db->set('url_status','1');
					$this->db->set('url_string',$this->action_url);
					$this->db->set('url_email',$this->openvim_email);
					return $this->db->insert('url');
					break;
        	case 3:
        		//记录user_id
        			$this->db->set('url_uuid',$this->url_uuid);
        			$this->db->set('url_action','3');
					$this->db->set('url_status','1');
					$this->db->set('url_string',$this->action_url);
					$_user = $this->customer_model->load($this->session->userdata('user_id'));
					//发信人的name
					$this->db->set('url_email',$this->session->userdata('user_email'));
					$this->db->set('openvim_bookuser',$this->session->userdata('bookuesr_id'));
					return $this->db->insert('url');
					break;
        	default:
        		break;



        }

    }

    //查看一条url的状态  得到用户的email,update密码
    function load_url($url_uuid)
    {
		if (!$url_uuid)
        {
            return array();
        }

        $query = $this->db->get_where('url',array('url_uuid' => $url_uuid));
		if ($row = $query->row_array())
        {
            	return $row;
       	}

   	return array();

    }



    //根据book_user_id查看url信息
    /*
     * bookuser
     */
    function load_urlbybookuser($bookuser)
    {
   		 if (!$bookuser)
        {
            return array();
        }

        $query = $this->db->get_where('url',array('openvim_bookuser' => $bookuser));
		if ($row = $query->row_array())
        {
            	return $row;
       	}
    }
    //check_url是否有效
 private  function check_url($url_uuid)
    {
    	$query = $this->db->get_where('url',array('url_uuid' => $url_uuid,'url_status' => '1'));
		if ($row = $query->row_array())
        {
            return true;
        }
        return false;
    }



    //修改一条url的状态   是链接失效
   private function update_url($url_uuid)
    {
		if(!$url_uuid)
		{
			return false;
		}
		//使url失效
    	$this->db->set('url_status', '2');
        $this->db->where('url_uuid', $url_uuid);
        return $this->db->update('url');

    }


    //修改user_isactive的状态为2
    private function update_Userisacitve($bookuser)
    {
    	if(!$bookuser)
    	{
    		return false;
    	}
    	$this->db->set('user_isactive','2');
    	$this->db->where('book_user_id',$bookuser);
    	return $this->db->update('book_user');
    }



    //修update_bookuser
    private function update_bookuser($bookuser,$url_uuid)
    {
		if(!$bookuser)
		{
			return false;
		}
		if(!$url_uuid)
		{
			return false;
		}
		//更新为 bookuser表insertid
    	$this->db->set('openvim_bookuser', $bookuser);
        $this->db->where('url_uuid', $url_uuid);
        return $this->db->update('url');
    }
}
