<?php

/**
 *
 **/
class User_model extends CI_model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    public function append_user()
    {
        if ($this->input->post('submit'))
        {
            $user_username = $this->input->post('username');
            $user_email    = $this->input->post('email');
            $user_password = md5($this->input->post('password'));
            $querySql = "INSERT INTO `op_user` ( id,op_username,op_email,op_password) VALUES( '' , '{$user_username}' , '{$user_email}' , '{$user_password}')";
            $this->db->query($querySql);
            return $this->db->affected_rows();
         }
    }

    public function FunctionName()
    {
        // code...
    }





}



?>
