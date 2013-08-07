<?php

/**
 *
 **/
class Login extends CI_controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('array_helper','url','form','op'));
        $this->load->library(array('form_validation','session'));
        $this->load->model('user_model');
        $this->load->model('email_model');
        $this->load->model('url_model');

    }


    public function index()
    {
        if (true)  //如果用户登陆正确
         {
             $session_data = array(
                   'user_name'  => 'foursking',
                   'user_email' => 'lyf021408@163.com',
                   'user_id'  => '11',
                   'is_login'  => TRUE,
                   'user_last_login' => date("Y-m-d H:i:s"),
             );

             $this->session->set_userdata($session_data);

        $this->redirect('tips');

         }
    }


    public function loginout()
    {
        $this->session->sess_destroy();
        redirect('/');
    }


}





?>
