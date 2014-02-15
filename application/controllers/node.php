<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 **/

class Node extends MY_controller
{
    CONST PER_PAGE      = 8;
    CONST TOP_TAGS_NUM  = 7;
    CONST URI_SEGMENT_3 = 3;
    CONST URI_SEGMENT_4 = 4;
    CONST NUM_LINKS     = 4;

    function __construct() {
        parent::__construct();
        $this->load->helper(array('array','url' , 'op'));
        $this->load->model(array('tips_model','comments_model', 'topic_model'));
    }

  
	public function all() {
		$template['nodeList'] = $this->tips_model->listNode();
        $this->parser->parse("nodelist" , $template);
	}

	public function go() {
        $this->pagination_config['base_url']    = site_url('tips/index');
        $this->pagination_config['per_page']    = self::PER_PAGE;
        $this->pagination_config['uri_segment'] = self::URI_SEGMENT_3;
        $this->pagination_config['num_links']   = self::NUM_LINKS;
        $this->pagination_config['total_rows']  = 255; 
        $this->pagination->initialize($this->pagination_config);
        //$template['pagination_link'] = $this->pagination->create_links();
		$template['nodeTopicList'] = $this->topic_model->listNodeTopic(1, self::PER_PAGE);
        $this->parser->parse("topiclist" , $template);
	}


	public function c() {
		
	}


}
