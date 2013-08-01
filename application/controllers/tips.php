<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 **/
class Tips extends CI_Controller
{
    private $per_page      = 8;
    private $top_tags_num  = 7;
    private $uri_segment_3 = 3;
    private $num_links     = 4;

    private $pagination_config = array(
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
        $this->load->helper('array_helper');
        $this->load->model('tips_model');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->library('pagination');
        //当前页
        $current_page = intval($this->uri->segment(3));
        //页面地址
        $this->pagination_config['base_url']    = site_url('tips/index');
        //每页条数
        $this->pagination_config['per_page']    = $this->per_page;
        //参数
        $this->pagination_config['uri_segment'] = $this->uri_segment_3;
        //分页数量
        $this->pagination_config['num_links']   = $this->num_links;
        //总数
        $this->pagination_config['total_rows']  = $this->tips_model->count_tips_all();
        //分页初始化
        $this->pagination->initialize($this->pagination_config);


        $data['tips_generalize'] = $this->tips_model->show_tips_generalize($current_page, $this->per_page);
        $data['top_tags']        = $this->tips_model->show_top_tags($this->top_tags_num);
        $this->load->view('header_view');
        $this->load->view("tips_generalize_view" , $data);
        $this->load->view("tips_sidebar_view");
        $this->load->view('footer_view');
    }

    public function post()
    {
        $data['tips_detail'] = $this->tips_model->show_tips_detail($this->uri->segment(3));
        $this->load->view('header_view');
        $this->load->view('tips_detail_view' , $data);
        $this->load->view("tips_sidebar_view");
        $this->load->view('footer_view');
    }


}
