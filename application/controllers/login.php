<?php

/**
 *
 **/
class Login extends MY_Controller
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

        $user_info = $this->user_model->check_user_password($Ram);



        if (count($user_info))  //如果用户登陆正确
         {
             $session_data = array(
                   'user_name'  => $user_info[0]['userName'],
                   'user_email' => $user_info[0]['userEmail'],
                   'user_id'  => $user_info[0]['userId'],
                   'is_login'  => TRUE,
                   'is_active' => $user_info[0]['userIsActive'],
                   'user_last_login' => date("Y-m-d H:i:s"),
             );

             $this->session->set_userdata($session_data);
             $return['login_flag']= TRUE;

         }
        else
        {
            $return['login_flag'] = FALSE;
        }
            die(json_encode($return));
    }


    public function loginout()
    {
        $this->session->sess_destroy();
        redirect('tips/index');
    }


}






?>
