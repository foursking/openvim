<?php

/**
 *
 **/
class MY_Email extends CI_Email
{

    function __construct()
    {
        parent::__construct();
    	$this->protocol  = 'smtp';
		$this->smtp_host = 'smtp.163.com';
		$this->smtp_port = 25;
		$this->smtp_user = 'openvim@163.com';
		$this->smtp_pass = 'openvim@163';
    }
}



?>
