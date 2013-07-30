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
    }


   public function register()
    {
        $this->load->view('header_view');
        $this->load->view('register_view');
    }

    public function sendmail()
    {
        $this->load->model('email_model');
        $this->email_model->send_user_email(1 , 'foursking' , 'lyf021408@163.com');
    }




}





?>
