<?php


class C extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('array_helper');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $this->load->view('home');
    }


    public function fetch_category()
    {
        // code...
    }



}



?>
