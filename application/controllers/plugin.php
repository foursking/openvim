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

     	private $offset = 8;



    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('op');
    }

    public function index($typeId = '' , $pluginNum= '' , $pluginOffset = '')
    {

        $this->load->library('pagination');
        $this->load->model('plugin_model');

        $config['base_url'] = site_url('plugin/index');
        $config['pre_page'] = 5;
        $config['uri_segment'] = 3;
        $config['total_rows'] = $this->plugin_model->count_plugin_all();

        $this->pagination->initialize($config);

        $data['plugin_generalize']    = $this->plugin_model->show_plugin_generalize($typeId , $config['pre_page'] , $this->uri->segment(3));

        $data['plugin_type_category'] = $this->plugin_model->show_type_category();



        $this->load->view('header_view');
        $this->load->view('plugin_index_view' , $data);
        $this->load->view('footer_view');
    }

    public function type()
    {

        $this->load->library('pagination');
        $this->load->model('plugin_model');

        $config['base_url'] = site_url('plugin/index');
        $config['pre_page'] = 5;
        $config['uri_segment'] = 3;
        $config['total_rows'] = $this->plugin_model->count_plugin_all();

        #echo $this->uri->segment(1);
        #echo $this->uri->segment(2);
        echo $this->uri->segment(3);

        $this->pagination->initialize($config);

        $data['plugin_generalize']    = $this->plugin_model->show_plugin_generalize($typeId , $config['pre_page'] , $this->uri->segment(3));

        $data['plugin_type_category'] = $this->plugin_model->show_type_category();

        $this->load->view('header_view');
        $this->load->view('plugin_index_view' , $data);
        $this->load->view('footer_view');
    }

}



?>
