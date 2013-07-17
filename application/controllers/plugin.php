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

     	private $pagesize = 2;



    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('op');
    }

    public function index()
    {

        $this->load->library('pagination');
        $this->load->model('plugin_model');

        $config['base_url']    = site_url('plugin/index');
        $pagenum = $this->uri->segment(3);
        $per_page = empty($pagenum) ? 0 : (intval($pagenum) - 1) * $this->pagesize;
        $config['per_page'] = $this->pagesize;
        $config['uri_segment'] = 3;
        $config['num_links']   = 2;
        $config['total_rows']  = $this->plugin_model->count_plugin_all();

        $config['full_tag_open'] = '<div class="pagination"><ul>';
        $config['full_tag_close'] = '</div></ul>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['prev_link'] = '«';
        $config['next_link'] = '»';
        $config['cur_tag_open'] = '<li><a class="active">';
        $config['cur_tag_close'] = '</a></li>';

        $this->pagination->initialize($config);
        $typeId = 0;
        $data['plugin_generalize']    = $this->plugin_model->show_plugin_generalize($typeId , $per_page , $this->pagesize);
        pretty_print($this->pagination->per_page);
        echo $this->pagination->create_links();
        pretty_print($data);

        echo $this->db->last_query();

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


        $this->pagination->initialize($config);

        $data['plugin_generalize']    = $this->plugin_model->show_plugin_generalize($typeId , $config['pre_page'] , $this->uri->segment(3));

        $data['plugin_type_category'] = $this->plugin_model->show_type_category();

        $this->load->view('header_view');
        $this->load->view('plugin_index_view' , $data);
        $this->load->view('footer_view');
    }

}



?>
