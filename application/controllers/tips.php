<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 **/

class Tips extends MY_controller
{
    private $per_page      = 8;
    private $top_tags_num  = 7;
    private $uri_segment_3 = 3;
    private $uri_segment_4 = 4;
    private $num_links     = 4;

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('array','url'));
        $this->load->model(array('tips_model','comments_model'));
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

        $template['pagination_link'] = $this->pagination->create_links();

        $template['tips_generalize'] = $this->tips_model->show_tips_generalize($current_page, $this->per_page);
        $template['top_tags']        = $this->tips_model->show_top_tags($this->top_tags_num);
        $template['sort_type'] = 'newest';

        $this->parser->parse('header_view');
        $this->parser->parse("tips_generalize_view" , $template);
        $this->parser->parse("tips_sidebar_view" , $template);
        $this->parser->parse('footer_view');
    }

    public function post()
    {
        $template['tips_detail'] = $this->tips_model->show_tips_detail($this->uri->segment(3));
        $template['top_tags'] = $this->tips_model->show_top_tags($this->top_tags_num);
        $Ram['tips_id'] = $this->uri->segment(3);
        $template['tips_comments'] = $this->comments_model->show_comments($Ram);


        $this->parser->parse('header_view');
        $this->parser->parse('tips_detail_view' , $template);
        $this->parser->parse('tips_detail_sidebar_view' , $template);
        $this->parser->parse('footer_view');
    }

    public function comments()
    {
        $comment_info = array();

        if (!$this->session->userdata('user_id'))
         {
            redirect('/');
         }

        $comment_info['user_id'] = $this->session->userdata('user_id');
        $comment_info['user_name'] = $this->session->userdata('user_name');
        $comment_info['tips_id'] = $this->input->post('tips_id');
        $comment_info['content'] = html_escape($this->input->post('content'));
        $comment_info['comment_id'] = $this->comments_model->append_comments($comment_info);


        if ($comment_info['comment_id'])
         {
             $this->comments_model->append_comments_relationship($comment_info);
             $this->comments_model->renew_tips_comments_num($comment_info);
         }

    }

    public function vote()
    {

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


        $template['tips_generalize'] = $this->tips_model->show_tips_generalize($current_page, $this->per_page , $sort_type);
        $template['top_tags']        = $this->tips_model->show_top_tags($this->top_tags_num);
        $template['sort_type'] = $sort_type;

        $this->parser->parse('header_view');
        $this->parser->parse("tips_generalize_view" , $template);
        $this->parser->parse("tips_sidebar_view");
        $this->parser->parse('footer_view');
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
        $this->pagination_config['total_rows']  = $this->tips_model->count_tips_by_tagsName($tags_name);

        $data['tips_generalize'] = $this->tips_model->show_tips_generalize_by_tagsName($current_page, $this->per_page , $tags_name);

        //分页初始化
        $this->pagination->initialize($this->pagination_config);

        $template['top_tags']  = $this->tips_model->show_top_tags($this->top_tags_num);
        $template['sort_type'] = 'newest';
        $this->parser->parse('header_view');
        $this->parser->parse("tips_generalize_view" , $template);
        $this->parser->parse("tips_sidebar_view");
        $this->parser->parse('footer_view');
    }


    public function appends()
    {

        $this->parser->parse('header_view');
        $this->parser->parse('tips_append_view');
        $this->parser->parse('footer_view');

        if (!$this->input->post())
        {
            return false;
        }

        $tips_id = $this->tips_model->append_tips($this->input->post());

        if($tips_id)
        {
            $Ram = $this->input->post();
            //添加 返回的tipsId
            $Ram['tipsId'] = $tips_id;
            $result = $this->tips_model->append_tags_relationship($Ram);
            redirect("tips/post/{$tips_id}");
        }




    }

    public function show_tag()
    {
        $data = array();

        $press = $this->input->post('press');

        $tag_from_press = $this->tips_model->get_tag_by_press($press);

        $data['tag'] = $tag_from_press;

        $data['flag'] = empty($tag_from_press) ? true : false;
        $data['press'] = $press;

        die(json_encode($data));





    }


}
