<?php

class Tips extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }


    public function getOneItem()
    {
        $this->load->database();
        $query = $this->db->query("SELECT * from `user`");
        return $query->result();
    }






}



?>
