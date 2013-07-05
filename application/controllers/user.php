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

    public function sign_in()
    {

    }

    public function sign_up()
    {

        if($this->input->post('submit'))
        {
            $this->load->model('user_model');
            $data['return'] = $this->user_model->append_user();
        }

        $this->load->view('sign_up_view');
    }






}





?>
