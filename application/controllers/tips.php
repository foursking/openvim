<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 **/
class Tips extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('array_helper');
    }

    public function index()
    {
        $this->load->model('tips_model');
        $data['tips_generalize'] = $this->tips_model->show_tips_generalize(5 , 0);
        $data['top_tags'] = $this->tips_model->show_top_tags(7);
        $this->load->view('header_view');
        $this->load->view("tips_generalize_view" , $data);
        $this->load->view("tips_sidebar_view");
        $this->load->view('footer_view');
    }

    public function post()
    {
        $this->load->model('tips_model');
        $data['tips_detail'] = $this->tips_model->show_tips_detail(3);
        $this->load->view('header_view');
        $this->load->view('tips_detail_view' , $data);
        $data['top_tags'] = $this->tips_model->show_top_tags(7);
        $this->load->view("tips_sidebar_view");
        $this->load->view('footer_view');
    }


}





?>
