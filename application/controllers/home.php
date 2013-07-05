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
    }

    public function index()
    {
        $this->load->model('home_model');
        $data['category'] = $this->home_model->get_category();
        #pretty_print($data['category']);
        $this->load->view('header_view');
        $this->load->view('category_view' , $data);
        $this->load->view('body_view');
        $this->load->view('footer_view');

    }


    public function fetch_category()
    {
        // code...
    }



}



?>
