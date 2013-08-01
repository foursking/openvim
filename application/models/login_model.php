<?php
/**
 * 平台用户
 *
 *
 */
class Login_model extends CI_Model
{

    private $_tables = array(
        'user' => 'user',
    );


	function __construct()
    {
        parent::__construct();
        $this->load->database();
    }



    public function check_user_name()
    {
        // code...
    }

    public function check_user_email()
    {
        // code...
    }


}
