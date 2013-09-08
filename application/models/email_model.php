<?php
header("content-type:text/html;charset=utf-8");

class email_model extends CI_Model
{


	var $url_uuid;
    //收件人
	var $email_receiver;
    //收件人地址
	var $email_receiver_address;

	var $email_subject;

    var $user_uuid;

    	//邮件信息 1注册 2找回密码 3账户关联

	var $email_message;


	var $web_url = "http://dev.openvim.com";
    var $hello_time = '';

	//操作url
	var $action_url ;

    var $email_server_list = array(
        'qq'      => 'http://mail.qq.com/',
        'hotmail' => 'http://mail.hotmail.com/',
        'sina'    => 'http://mail.sina.com.cn/',
        '163'     => 'http://mail.163.com/',
        '126'     => 'http://mail.126.com/',
    );


	function __construct()
    {
        parent::__construct();

		$this->load->library('email');
        $this->load->helper('op');
    }



    /**
	 * 邮件发送
	 */
	public function send_user_email($send_email_config = array())
    {

        // 收件人 收件人地址
        if( !is_numeric($send_email_config['email_type']) OR empty($send_email_config['email_receiver']) OR empty($send_email_config['email_receiver_address']))
		{
            return false;
        }

        //邮件收件人
        $this->email_receiver = $send_email_config['email_receiver'];
        //邮件收件地址
		$this->email_receiver_address = $send_email_config['email_receiver_address'];
        //邮件unique id
        $this->user_uuid = $send_email_config['user_uuid'];
        //邮件用户id
        $this->user_id = $send_email_config['user_id'];

        //设置邮件参数
        $this->email_config(intval($send_email_config['email_type']));
        //设置邮件换行
		$this->email->set_newline("\r\n");
        //设置发送邮件地址
		$this->email->from('openvim@163.com', 'OpenVim');
        //设置接受邮件地址
		$this->email->to($send_email_config['email_receiver_address']);
        //设置email主题
		$this->email->subject($this->email_subject);
        //设置email正文
		$this->email->message($this->email_message);
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
        		$this->email_subject = "openvim新用户注册";
        		$this->action_url	 = site_url('user/useractive/') . '/' . $this->user_uuid . '-' .$this->user_id;
        		$this->email_message =
                                       "
                                       {$this->get_hello_time()},{$this->email_receiver},恭喜您成为openvim新用户

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
        		$this->email_subject = "用户忘记密码";
        		$this->action_url	 = site_url('getpwd')."?action=getpwd&isactive=1&urlkey={$this->url_uuid}";
        		$this->email_message =
                                       "
                                       {$this->get_hello_time()},{$this->email_receiver}

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
        		$this->email_subject = "邀请";
        		$this->action_url	 = site_url('main-home-booktobook')."?action=booktobook&isactive=1&urlkey={$this->url_uuid}";

        		$_user = $this->customer_model->load($this->session->userdata('user_id'));

        		$_book = $this->book_model->load($this->session->userdata('user_open_book_id'));

        		$this->email_message =
                                       "
                                       {$this->get_hello_time()},{$this->email_receiver}

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




    private function get_email_server($register_email_address = '')
    {

        $Ram = explode('@' , $register_email_address);
        $email_server_name = substr($Ram[1] , 0 , strpos($Ram[1] , '.'));
        return $register_email_address_server = empty($this->email_server_list[$email_server_name]) ? 'http://dev.openvim.com' : $this->email_server_list[$email_server_name];
    }


    private function get_hello_time()
    {
        return hello_time();
    }










}
