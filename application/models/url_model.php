<?php

/**
 * 平台用户
 */
class Url_model extends CI_Model
{


    private $_tables = array(
        'url' => 'url',
        'user' => 'user',
    );


	function __construct()
    {
        parent::__construct();

    }

    /**
	 * 添加Url
	 * @param array $data 插入数据
	 * @return int userId
	 */

    public function append_url( $data )
    {

        $insert_data = array(
            'urlUid'    => $data['urlUid'],
            'urlAction' => 1,
            'urlStatus' => 1,
            'urlString' => $this->get_uuid(),
            'urlEmail'  => $data['register_email'],
        );

        $this->db->insert($this->_tables['url'] , $insert_data);

        return $insert_data['urlString'];

    }




 //记录action url
    private function create_url($email_type = 0)
    {
    	if(!is_numeric($email_type))
        {
            return false;
        }
        switch(intval($email_type))
        {
        	case 1:
        			$this->db->set('url_uuid',$this->url_uuid);
        			$this->db->set('url_action','1');
					$this->db->set('url_status','1');
					$this->db->set('url_string',$this->action_url);
					$this->db->set('url_email',$this->openvim_email);
        			return $this->db->insert('url');
        			break;
        	case 2:
        			$this->db->set('url_uuid',$this->url_uuid);
        			$this->db->set('url_action','2');
					$this->db->set('url_status','1');
					$this->db->set('url_string',$this->action_url);
					$this->db->set('url_email',$this->openvim_email);
					return $this->db->insert('url');
					break;
        	case 3:
        		//记录user_id
        			$this->db->set('url_uuid',$this->url_uuid);
        			$this->db->set('url_action','3');
					$this->db->set('url_status','1');
					$this->db->set('url_string',$this->action_url);
					$_user = $this->customer_model->load($this->session->userdata('user_id'));
					//发信人的name
					$this->db->set('url_email',$this->session->userdata('user_email'));
					$this->db->set('openvim_bookuser',$this->session->userdata('bookuesr_id'));
					return $this->db->insert('url');
					break;
        	default:
        		break;



        }

    }

    //查看一条url的状态  得到用户的email,update密码
    function load_url($url_uuid)
    {
		if (!$url_uuid)
        {
            return array();
        }

        $query = $this->db->get_where('url',array('url_uuid' => $url_uuid));
		if ($row = $query->row_array())
        {
            	return $row;
       	}

   	return array();

    }








  public function get_url_by_urlAction($urlUid = '' , $urlAction = 1)
    {
        $this->db->select('urlUid , urlUsername , urlAction , urlString , urlEmail , urlCtime')
                 ->from($this->_tables['url'])
                 ->where('urlUid' , $urlUid)
                 ->where('urlAction' , $urlAction)
                 ->where('urlStatus' , 1)          //有效的url
                 ->order_by('urlCtime' , 'desc')
                 ->get()
                 ->row_array();
    }




   // http://dev.openvim.com/user/useractive/userid/uuid/1
    public function split_useractive_code( $data )
    {
        strrpos($data, '-');
        $Ram['user_uuid'] = substr($data, 0 , strrpos($data, '-'));
        $Ram['user_id'] = substr($data, strrpos($data, '-') + 1 , strlen($data));

        return $Ram;
    }


    public function user_email_active( $data )
    {
        $Ram = $this->db->select("urlUid , urlAction , urlString , urlStatus , urlEmail")
                        ->from($this->_tables['url'])
                        ->where('urlUid' , $data['user_id'])
                        ->where('urlAction' , 1)
                        ->where('urlStatus' , 1)
                        ->where('urlString' , $data['user_uuid'])
                        ->get()
                        ->row_array();


        if (count($Ram) > 0)
         {
             $Bull = $this->db->set('userIsActive' , 1)
                              ->where('userId' , $data['user_id'])
                              ->update($this->_tables['user']);

             return $this->db->affected_rows();
         }
        else
        {
            return false;

        }

    }


    private function get_uuid()
    {
        return op_uuid();
    }





}
