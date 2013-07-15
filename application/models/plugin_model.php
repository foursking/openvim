<?php
/*=============================================================================
#     FileName: plugin_model.php
#   CreateTime: 2013-07-15 15:40:08
#       Author: yifeng@leju.com
#   LastChange: 2013-07-15 15:40:08
=============================================================================*/



/**
 *
 **/
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
        $this->load->helper('url');
        $this->load->helper('array');
    }



    public function show_plugin_generalize($typeId = "")
    {
        $Ram = $this->db->select("a.pluginId , a.uid , a.pluginName , a.pluginSummary , a.pluginUrl , a.pluginDescription , a.pluginInstall , b.typeName")
                          ->from("{$this->_tables['plugin']} as a")
                          ->join("{$this->_tables['type']} as b" , "a.pluginId = b.typeId")
                          ->where("a.typeId" , $typeId)
                          ->get()
                          ->result_array();

        return $Ram;

    }

    public function show_plugin_generalize_all($typeId = "")
    {
        $Ram = $this->db->select("a.pluginId , a.uid , a.pluginName , a.pluginSummary , a.pluginUrl , a.pluginDescription , a.pluginInstall , b.typeName")
                          ->from("{$this->_tables['plugin']} as a")
                          ->join("{$this->_tables['type']} as b" , "a.pluginId = b.typeId")
                          ->get()
                          ->result_array();

        return $Ram;

    }


    public function show_type_category()
    {
        $Ram = $this->db->select("typeId , typeName")
                        ->from("{$this->_tables['type']}")
                        ->get()
                        ->result_array();

        return $Ram;
    }





}





?>
