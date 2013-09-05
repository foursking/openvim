<?php

/**
 *
 **/
class User extends CI_controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('array','url','form','op'));
        $this->load->library(array('form_validation','session'));
        $this->load->model(array('user_model','email_model','url_model'));



    }


   public function register()
    {
        define('WB_AKEY' , 1513079542);
        define('WB_SKEY' , 'e18589bc7961d5acc88ee3e3bd38e19b');

    	$options = array(
			'client_id' => WB_AKEY,
			'client_secret' =>WB_SKEY,
		//	'access_token' => NULL,
		//	'refresh_token' => NULL
		);

        $this->load->library('weibo_oauth' , $options);
        $data['weibo_login_url'] = $this->weibo_oauth->getAuthorizeURL("http://wb.foursk.com");


        $this->load->view('header_view');
        $this->load->view('register_view' , $data);

        if (!$this->input->post())
        {
            return false;
        }

        //添加用户
        $user_id = $this->user_model->append_user($this->input->post());

        //判断添加用户成功
        if ($user_id)
         {
             //添加激活邮件url
            $Ram = $this->input->post();
            $Ram['urlUid'] = $user_id;
            $user_uuid = $this->url_model->append_url($Ram);

         }

        //发送邮件

        $send_email_config = array(
            'email_type' => 1,
            'email_receiver' => $this->input->post('register_username'),
            'email_receiver_address' => $this->input->post('register_email'),
            'user_uuid' =>$user_uuid,
            'user_id' =>$user_id,
        );

        $this->email_model->send_user_email($send_email_config);


        redirect('/user/postsuccess');


    }




    public function useractive()
    {
        $Ram = $this->uri->segment(3);
        $user_info = $this->url_model->split_useractive_code($Ram);
        $active_flag = $this->url_model->user_email_active($user_info);

        $user_name = $this->user_model->get_userName_by_userId($user_info['user_id']);

        if($active_flag)
        {
            $site_url        = site_url('tips/index');
            $afresh_login    = site_url('user/login');
            $data['title']   = '激活成功';
            $data['message'] = '欢迎您 '.$user_name.' , 您的帐号已经激活';
            $data['action']  = "<a href='$site_url'>《 回到首页</a> 或者 <a href = '$afresh_login'>重新登陆 》</a>";

        }
        else
        {
            $data['title'] = '激活失败';
            $data['message'] = '欢迎您 '.$user_name.' , 您的帐号激活码失效，我们已经重新发送了一封邮件，请查收!';
            $data['action'] = "<a href='$site_url'>《 回到首页</a> 或者 <a href='$afresh_login'>登陆邮箱 》</a>";

        }

            $this->load->view('header_view');
            $this->load->view('active_success_view' , $data);

    }




   public function postsuccess()
    {
        $this->load->view('header_view');
        $this->load->view('register_success_view');
    }

    public function activesuccess()
    {
        $this->load->view('header_view');
        $this->load->view('active_success_view');
    }


    public function login()
    {
        $this->load->view('header_view');
        $this->load->view('login_view');
        $this->load->view('footer_view');
    }

    public function test()
    {
        $this->load->library('parser');
        $data['title'] = 1;
        $data['body'] = 2;
        $data['ttt'] = 2;
        $this->parser->parse('smartytest');
    }



}





?>
