<?php

/**
 *
 **/
class Oauth extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('op'));
        $this->load->model(array('user_model','email_model','url_model'));
    }


    public function bind($provider = 'weibo')
    {
        $allowed_providers = $this->config->item('oauth2');
        if ( ! $provider OR ! isset($allowed_providers[$provider])) {
            $this->session->set_flashdata('info', '暂不支持'.$provider.'方式登录.');
            redirect();
            return;
        }

        $provider = $this->oauth2->provider($provider, $allowed_providers[$provider]);
        $code = $this->input->get('code', TRUE);
        if ( ! $code) {
            $provider->authorize();
            return;
        } else {
            try {
                $token = $provider->access($code);
                $sns_user = $provider->get_user_info($token);
                if (is_array($sns_user)) {
                    $this->session->set_userdata('user', $sns_user);
					print_r($this->session->userdata('user'));
					redirect('u/signup');
					if (TRUE) {
						$template = array();

				      $this->parser->parse('header_view' , $template);
			          $this->parser->parse("register_view" , $template);
					} else {
					
					}
            
				}
            } catch (OAuth2_Exception $e) {
                $this->session->set_flashdata('info', '操作失败<pre>'.$e.'</pre>');
            }
        }


        $token = $provider->access($code);
        $user_info = $provider->get_user_info($token);
    }

	private function _check($user_info) {
		$this->User_model->check($user_info);
	
	}

}




?>
