<?php

/**
 * 平台用户
 */
class Url_model extends CI_Model
{


    private $_tables = array(
        'url' => 'url',
    );


	function __construct()
    {
        parent::__construct();
        $this->load->database();
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


    private function get_uuid()
    {
        return op_uuid();
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



    //根据book_user_id查看url信息
    /*
     * bookuser
     */
    function load_urlbybookuser($bookuser)
    {
   		 if (!$bookuser)
        {
            return array();
        }

        $query = $this->db->get_where('url',array('openvim_bookuser' => $bookuser));
		if ($row = $query->row_array())
        {
            	return $row;
       	}
    }
    //check_url是否有效
 private  function check_url($url_uuid)
    {
    	$query = $this->db->get_where('url',array('url_uuid' => $url_uuid,'url_status' => '1'));
		if ($row = $query->row_array())
        {
            return true;
        }
        return false;
    }



    //修改一条url的状态   是链接失效
   private function update_url($url_uuid)
    {
		if(!$url_uuid)
		{
			return false;
		}
		//使url失效
    	$this->db->set('url_status', '2');
        $this->db->where('url_uuid', $url_uuid);
        return $this->db->update('url');

    }


    //修改user_isactive的状态为2
    private function update_Userisacitve($bookuser)
    {
    	if(!$bookuser)
    	{
    		return false;
    	}
    	$this->db->set('user_isactive','2');
    	$this->db->where('book_user_id',$bookuser);
    	return $this->db->update('book_user');
    }



   // http://dev.openvim.com/user/useractive/userid/uuid/1


    public function split_useractive_code($useractive_code)
    {
        strrpos($useractive_code , '-');
        $Ram['user_uuid'] = substr($useractive_code , 0 , strrpos($useractive_code , '-'));
        $Ram['user_id'] = substr($useractive_code , strrpos($useractive_code , '-') + 1 , strlen($useractive_code));

        return $Ram;
    }







}
