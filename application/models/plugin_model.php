<?php

class Plugin_model extends CI_Model
{

    private $_tables = array(
        'type'   => 'type',
        'plugin' => 'plugin',
    );


    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('url' , 'array'));
    }



    public function show_plugin_generalize($typeId = 0 , $pre_page = 0 , $offset = 0)
    {

        $queryResult = $this->db->select("a.pluginId , a.uid , a.pluginName , a.pluginSummary , a.pluginUrl , a.pluginDescription , a.pluginInstall , b.typeName")
                        ->from("{$this->_tables['plugin']} as a")
                        ->join("{$this->_tables['type']} as b" , "a.pluginId = b.typeId");

        if ($typeId != 0)
            $Ram->where("a.pluginTypeId" , $typeId);

        $Ram->limit($offset , $pre_page);


        return $Ram->get()
            ->result_array();

    }


    public function show_type_category()
    {
        return  $this->db->select("typeId , typeName")
            ->from("{$this->_tables['type']}")
            ->get()
            ->result_array();
    }




    public function count_plugin_all()
    {
        return $this->db->count_all($this->_tables['plugin']);
    }
}





?>
