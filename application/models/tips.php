<?php

class Tips extends CI_Model {

    public function Tips()
    {
        parent::__construct();
    }


    public function getOneItem()
    {
        $this->load->database();
        $query = $this->db->query("select * from user");
        return $query->result();
    }







}



?>
