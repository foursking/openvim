<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {


    private $url_controller = '';

    private $url_action = '';

    private $CI;

    private $validate_list = array();

    private $access_control_list_login = array(
        'user'=>array('register'),

    );

    private $access_control_list_unlogin = array(
        //'tips'=>array('append'),
    );

    function __construct()
    {
        parent::__construct();
        $this->CI =& get_instance();
        $this->url_controller = $this->CI->uri->segment(1) ? $this->CI->uri->segment(1) : 'index';
        $this->url_action = $this->CI->uri->segment(2) ? $this->CI->uri->segment(2) : 'index';
        $this->_validate_auth();
    }


    private function _validate_auth()
    {

        if(TRUE === $this->CI->session->userdata('is_login'))
        {

            if(in_array($this->url_controller, array_keys($this->access_control_list_login)))
            {

                if(in_array($this->url_action, $this->access_control_list_login[$this->url_controller]))
                {
                    show_error('您无权访问该功能，点击<a href="'. site_url('tips/index') .'">返回</a>');
                }
            }
        }
        else
        {
            if(in_array($this->url_controller, array_keys($this->access_control_list_unlogin)))
            {

                if(in_array($this->url_action, $this->access_control_list_unlogin[$this->url_controller]))
                {
                    show_error('您无权访问该功能，点击<a href="'. site_url('tips/index') .'">返回</a>');
                }
            }

        }
    }

}

/* End of file MY_controller.php */
/* Location: ./application/core/MY_controller.php */
