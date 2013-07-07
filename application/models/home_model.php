<?php

/**
 *
 **/
class Home_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();

    }

    public function get_category()
    {
        $querySql = $this->db->query('SELECT * FROM `op_category`');
        return $querySql->result();
    }
}



?>
