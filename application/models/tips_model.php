<?php

class Tips_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }


    public function append_tags()
    {
        $string = file_get_contents(base_url() . "/public/tmp/vimbits_json.json");
        $vimbits_array = json_decode($string , true);
        $vimbits_tags = array();
        foreach ($vimbits_array as $key=>$value)
        {
            $vimbits_array[$key]['vimbits_tag'] = $vimbits_array[$key]['vimbits_tag'];
            $vimbits_array[$key]['vimbits_title'] = addslashes($vimbits_array[$key]['vimbits_title'][0]);
            $vimbits_array[$key]['vimbits_tips']  = addslashes($vimbits_array[$key]['vimbits_tips']);
            $vimbits_tags = array_merge($vimbits_array[$key]['vimbits_tag'] , $vimbits_tags);
        }


        $tagsName = '';

        $vimbits_tags = array_flip(array_flip($vimbits_tags));

        foreach ($vimbits_tags as $$key=>$value)
        {
            $tagsName .= "('".$value."'),";
        }

        $tagsName = rtrim($tagsName , ',');

        $insertSql = "INSERT INTO `op_tags`(tagsName) VALUES".$tagsName;

        $this->db->query($insertSql);
    }

    public function append_tags_relationship()
    {

        $array = array(
            1=>array( 'tipsId'=>1, 'tagsId'=>3),
            2=>array( 'tipsId'=>1, 'tagsId'=>100),
        );

        $querySql = $this->db->query("SELECT * FROM `op_tags`");

        $tagsRelationship = array();

        foreach ($querySql->result_array() as $key=>$value)
        {
            $tagsRelationship[$key] = $value['tagsName'];
        }

        $string = file_get_contents(base_url() . "/public/tmp/vimbits_json.json");
        $vimbits_array = json_decode($string , true);
        $vimbits_tips= array();
        foreach ($vimbits_array as $key=>$value)
        {
            $vimbits_tips[$key]['tipsTitle']   = $value['vimbits_title'][0];
            $vimbits_tips[$key]['tipsContent'] = $value['vimbits_tips'];
            $vimbits_tips[$key]['tipsCtime']   = date("Y-m-d H:i:s");
            $vimbits_tips[$key]['tipsUtime']   = date("Y-m-d H:i:s");
        }
        #pretty_print($vimbits_tips);

        $this->db->insert_batch('tips' , $vimbits_tips);



//        $data = array();
//
//        $i = 0;
//        foreach ($vimbits_tags as $key=>$value)
//        {
//            if (empty($value))
//            {
//                continue;
//            }
//
//            foreach ($value as $k=>$v)
//            {
//                foreach ($v as $sk=>$sv)
//                 {
//                    $data[$i]['tipsId'] = $key + 1;
//                    $data[$i]['tagsId'] = $tagsRelationship[$sv] + 1;
//                    $i +=1;
//                 }
//            }
//
//            $i +=1;
//        }
//
//        #$this->db->insert_batch('tags_relationships' , $data);
//
    }

    public function show_tips_generalize()
    {
        $$querySql = "SELECT * FROM ``";

    }




}



?>
