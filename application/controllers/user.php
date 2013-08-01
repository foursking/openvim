<?php

/**
 *
 **/
class User extends CI_controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('array_helper');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('op');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('user_model');
        $this->load->model('email_model');
        $this->load->model('url_model');



    }


   public function register()
    {
        $this->load->view('header_view');
        $this->load->view('register_view');

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
        $Ram = $this->url_model->split_useractive_code($Ram);

        pretty_print($Ram);



        //redirect('/');


    }

   public function postsuccess()
    {
        $this->load->view('header_view');
        $this->load->view('register_success_view');
    }


    public function login()
    {
        $this->load->view('header_view');
        $this->load->view('login_view');
    }


}





?>
