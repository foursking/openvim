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

        $Ram['login_email'] = $this->input->post('login_email');
        $Ram['login_password'] = $this->input->post('login_password');

        $Bull = $this->user_model->check_user_password($Ram);



        if (count($Bull))  //如果用户登陆正确
         {
             $session_data = array(
                   'user_name'  => $Bull[0]['userName'],
                   'user_email' => $Bull[0]['userEmail'],
                   'user_id'  => $Bull[0]['userId'],
                   'is_login'  => TRUE,
                   'user_last_login' => date("Y-m-d H:i:s"),
             );

             $this->session->set_userdata($session_data);

             $return = 'yes';
             die($return);


         }
        else
        {
            $return = 'no';
            die($return);
         }
    }


    public function loginout()
    {
        $this->session->sess_destroy();
        redirect('/');
    }


}






?>
