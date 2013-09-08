<?php

/**
 *
 **/
class Oauth extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
    }


    public function bind()
    {

        $provider = 'weibo';

        $allowed_providers = $this->config->item('oauth2');


        if ( ! $provider OR ! isset($allowed_providers[$provider]))
        {
            $this->session->set_flashdata('info', '暂不支持'.$provider.'方式登录.');
            redirect();
            return;
        }

        var_dump($this->input->get());
        var_dump($this->session->all_userdata());


        $provider = $this->oauth2->provider($provider, $allowed_providers[$provider]);
        $code = $this->input->get('code', TRUE);
        $token = $provider->access($code);
        //$args = $this->input->get();
        $user_info = $provider->get_user_info($token);

        var_dump($user_info);



    }
}




?>
