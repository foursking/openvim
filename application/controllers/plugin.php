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
        $this->load->helper('op');
    }

    public function index()
    {
        $this->load->model('plugin_model');
        $data['plugin_generalize']    = $this->plugin_model->show_plugin_generalize_all();
        $data['plugin_type_category'] = $this->plugin_model->show_type_category();
        pretty_print($data['plugin_type_category']);
        $this->load->view('header_view');
        $this->load->view('plugin_index_view' , $data);
    }

}



?>
