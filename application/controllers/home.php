<?php

/**
 *
 **/
class Home extends CI_controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('array_helper');
        $this->load->helper('url_helper');
    }

    public function index()
    {
       $this->load->view('header_view');
       $this->load->view('footer_view');

    }


    public function fetch_category()
    {

    }



}



?>
