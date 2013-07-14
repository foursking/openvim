<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 **/
/**
 *
 **/
class Plugin extends CI_controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('array_helper');
    }

    public function index()
    {
        $this->load->view('header_view');
        $this->load->view('plugin_index_view');
    }

}



?>
