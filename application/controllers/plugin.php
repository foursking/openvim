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

       private $uri_segment_3 = 3;
       private $uri_segment_4 = 4;
       private $per_page      = 7;
       private $num_links     = 2;
       private $plugin_config = array(
        'prev_link'       => '上一页',
        'next_link'       => '下一页',
        'first_link'      => '首页',
        'last_link'       => '尾页',
        'full_tag_open'   => '<div class = "pagination"><ul>',
        'full_tag_close'  => '</div></ul>',
        'first_tag_open'  => '<li>',
        'first_tag_close' => '</li>',
        'last_tag_open'   => '<li>',
        'last_tag_close'  => '</li>',
        'prev_tag_open'   => '<li>',
        'prev_tag_close'  => '</li>',
        'next_tag_open'   => '<li>',
        'next_tag_close'  => '</li>',
        'num_tag_open'    => '<li>',
        'num_tag_close'   => '</li>',
        'cur_tag_open'    => '<li class = "active"><a>',
        'cur_tag_close'   => '</a></li>'
    );


    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('op');
        $this->load->model('plugin_model');
        $this->load->library('pagination');
        $this->load->library('session');
    }

    public function index()
    {
        //当前页
        $current_page = intval($this->uri->segment(3));
        //页面地址
        $this->plugin_config['base_url']    = site_url('plugin/index');
        //每页条数
        $this->plugin_config['per_page']    = $this->per_page;
        //参数
        $this->plugin_config['uri_segment'] = $this->uri_segment_3;
        //分页数量
        $this->plugin_config['num_links']   = $this->num_links;
        //总数
        $this->plugin_config['total_rows']  = $this->plugin_model->count_plugin_all();
        //分页初始化
        $this->pagination->initialize($this->plugin_config);
        $data['plugin_generalize']    = $this->plugin_model->show_plugin_generalize($typeId = 0 , $current_page, $this->per_page);
        $data['plugin_type_category'] = $this->plugin_model->show_type_category();
        $this->load->view('header_view');
        $this->load->view('plugin_index_view' , $data);
        $this->load->view('footer_view');
    }

    public function type()
    {
        $typeId = $this->uri->segment(3);
        $current_page = $this->uri->segment(4);
        //页面地址
        $this->plugin_config['base_url'] = site_url('plugin/index');
        //页面条数
        $this->plugin_config['per_page'] = $this->per_page;
        //参数
        $this->plugin_config['uri_segment'] = $this->uri->segment(4);
        //总数
        $this->plugin_config['total_rows'] = $this->plugin_model->count_plugin_all();

        //分页初始化
        $this->pagination->initialize($this->plugin_config);

        $data['plugin_generalize']    = $this->plugin_model->show_plugin_generalize($typeId , $config['per_page'] , $this->uri->segment(3));

        $data['plugin_type_category'] = $this->plugin_model->show_type_category();

        $this->load->view('header_view');
        $this->load->view('plugin_index_view' , $data);
        $this->load->view('footer_view');
    }

}



?>
