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
        $this->load->view('header_view');
        $this->load->view("tips_generalize_view");
        $this->load->view("tips_sidebar_view");
        $this->load->view('footer_view');
    }

    public function committips()
    {
        $this->load->model('tips_model');
        $data['insertSql'] = $this->tips_model->append_tags_relationship();

        pretty_print($data['insertSql']);
    }


}





?>
