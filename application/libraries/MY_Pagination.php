<?php

/**
 *
 **/
class MY_Pagination extends CI_Pagination
{

    function __construct()
    {
        parent::__construct();
        $this->prev_link       = '上一页';
        $this->next_link       = '下一页';
        $this->first_link      = '首页';
        $this->last_link       = '尾页';
        $this->full_tag_open   = '<div class = "pagination"><ul>';
        $this->full_tag_close  = '</div></ul>';
        $this->first_tag_open  = '<li>';
        $this->first_tag_close = '</li>';
        $this->last_tag_open   = '<li>';
        $this->last_tag_close  = '</li>';
        $this->prev_tag_open   = '<li>';
        $this->prev_tag_close  = '</li>';
        $this->next_tag_open   = '<li>';
        $this->next_tag_close  = '</li>';
        $this->num_tag_open    = '<li>';
        $this->num_tag_close   = '</li>';
        $this->cur_tag_open    = '<li class = "active"><a>';
        $this->cur_tag_close   = '</a></li>';
    }
}



?>
