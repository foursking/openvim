<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 **/
class Tips extends CI_Controller
{
    private $per_page      = 8;
    private $top_tags_num  = 7;
    private $uri_segment_3 = 3;
    private $uri_segment_4 = 4;
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
        $this->load->model('comments_model');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->library('pagination');
    }

    public function index()
    {
        //当前页
        $current_page = intval($this->uri->segment(3));
        //排序类型
        $sort_type = $this->uri->segment(2);
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
        $data['sort_type'] = 'newest';
        $this->load->view('header_view');
        $this->load->view("tips_generalize_view" , $data);
        $this->load->view("tips_sidebar_view");
        $this->load->view('footer_view');
    }

    public function post()
    {
        $data['tips_detail'] = $this->tips_model->show_tips_detail($this->uri->segment(3));
        $data['top_tags'] = $this->tips_model->show_top_tags($this->top_tags_num);
        $Ram['tips_id'] = $this->uri->segment(3);
        $data['tips_comments'] = $this->comments_model->show_comments($Ram);
        $this->load->view('header_view');
        $this->load->view('tips_append_view' , $data);
       // $this->load->view("tips_detail_sidebar_view" , $data);
        $this->load->view('footer_view');
    }

    public function comments()
    {
        if (!$this->session->userdata('user_id'))
         {
            redirect('/');
         }

        $Ram['user_id'] = $this->session->userdata('user_id');
        $Ram['user_name'] = $this->session->userdata('user_name');
        $Ram['tips_id'] = $this->input->post('tips_id');
        $Ram['content'] = html_escape($this->input->post('content'));
        $Ram['comment_id'] = $this->comments_model->append_comments($Ram);

        if ($Ram['comment_id'])
         {
             $this->comments_model->append_comments_relationship($Ram);
             $this->comments_model->renew_tips_comments_num($Ram);
         }

    }

    public function vote()
    {

        $this->load->library('pagination');
        //当前页
        $current_page = intval($this->uri->segment(3));
        //排序类型
        $sort_type = $this->uri->segment(2);
        //页面地址
        $this->pagination_config['base_url']    = site_url('tips/vote');
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


        $data['tips_generalize'] = $this->tips_model->show_tips_generalize($current_page, $this->per_page , $sort_type);
        $data['top_tags']        = $this->tips_model->show_top_tags($this->top_tags_num);
        $data['sort_type'] = $sort_type;
        $this->load->view('header_view');
        $this->load->view("tips_generalize_view" , $data);
        $this->load->view("tips_sidebar_view");
        $this->load->view('footer_view');
    }

    public function tag()
    {
        //当前页
        $current_page = intval($this->uri->segment(4));
        //标签名
        $tags_name = $this->uri->segment(3);
        //页面地址
        $this->pagination_config['base_url']    = site_url("tips/tag/".$tags_name);
        //每页条数
        $this->pagination_config['per_page']    = $this->per_page;
        //参数
        $this->pagination_config['uri_segment'] = $this->uri_segment_4;
        //分页数量
        $this->pagination_config['num_links']   = $this->num_links;
        //总数
        $this->pagination_config['total_rows']  = $this->tips_model->count_tips_all();
        //分页初始化
        $this->pagination->initialize($this->pagination_config);


        $data['tips_generalize'] = $this->tips_model->show_tips_generalize_by_tagsName($current_page, $this->per_page , $tags_name);

        //总数
        $this->pagination_config['total_rows']  = count($data['tips_generalize']);
        //分页初始化
        $this->pagination->initialize($this->pagination_config);

        $data['top_tags']        = $this->tips_model->show_top_tags($this->top_tags_num);
        $data['sort_type'] = 'newest';
        $this->load->view('header_view');
        $this->load->view("tips_generalize_view" , $data);
        $this->load->view("tips_sidebar_view");
        $this->load->view('footer_view');
    }


    public function append()
    {
        $this->load->view('header_view');
        $this->load->view('footer_view');
    }


}
