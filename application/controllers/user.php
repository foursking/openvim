<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 **/
class User extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('array','url','form','op'));
        $this->load->library(array('form_validation'));
        $this->load->model(array('user_model','email_model','url_model'));



    }


    public function register()
    {

        $template['sys_session'] = $this->session->all_userdata();
        $template['oauth_url']['oauth2_weibo_url'] = $this->_oauth2_bind('weibo');

        $this->parser->parse('header_view' , $template);
        $this->parser->parse("register_view" , $template);

        if (!$this->input->post())
        {
            return false;
        }

        //添加用户
        $user_id = $this->user_model->append_user($this->input->post());

        //判断添加用户成功
        if ( !empty($user_id))
        {
            //添加激活邮件url
            $Ram = $this->input->post();
            $Ram['urlUid'] = $user_id;
            $user_uuid = $this->url_model->append_url($Ram);
        }

        //发送邮件

        $send_email_config = array(
            'email_type' => 1,
            'email_receiver' => $this->input->post('register_username'),
            'email_receiver_address' => $this->input->post('register_email'),
            'user_uuid' =>$user_uuid,
            'user_id' =>$user_id,
        );

        $this->email_model->send_user_email($send_email_config);

        //设置一次性闪存数据
        $this->session->set_flashdata('flash_is_postsuccess', TRUE);

        //重定向到user/postsuccess页面
        redirect('user/postsuccess');
    }




    public function useractive()
    {
        $Ram = $this->uri->segment(3);
        $user_info = $this->url_model->split_useractive_code($Ram);
        $active_flag = $this->url_model->user_email_active($user_info);

        $user_name = $this->user_model->get_userName_by_userId($user_info['user_id']);

        if($active_flag)
        {
            $site_url        = site_url('tips/index');
            $afresh_login    = site_url('user/login');
            $data['title']   = '激活成功';
            $data['message'] = '欢迎您 '.$user_name.' , 您的帐号已经激活';
            $data['action']  = "<a href='$site_url'>《 回到首页</a> 或者 <a href = '$afresh_login'>重新登陆 》</a>";
        }
        else
        {
            $data['title'] = '激活失败';
            $data['message'] = '欢迎您 '.$user_name.' , 您的帐号激活码失效，我们已经重新发送了一封邮件，请查收!';
            $data['action'] = "<a href='$site_url'>《 回到首页</a> 或者 <a href='$afresh_login'>登陆邮箱 》</a>";
        }

        $this->load->view('header_view');
        $this->load->view('active_success_view' , $data);


    }




    public function postsuccess()
    {

        if(TRUE === $this->session->flashdata('flash_is_postsuccess'))
        {
            $this->load->view('header_view');
            $this->load->view('register_success_view');
        }
        else
        {
            redirect('tips/index');
        }
    }

    public function activesuccess()
    {
        $this->load->view('header_view');
        $this->load->view('active_success_view');
    }


    public function login()
    {
        $this->parser->parse('header_view');
        $this->parser->parse('login_view');
        $this->parser->parse('footer_view');
    }


    public function test($provider = 'weibo')
    {

        $allowed_providers = $this->config->item('oauth2');
        if ( ! $provider OR ! isset($allowed_providers[$provider]))
        {
            $this->session->set_flashdata('info', '暂不支持'.$provider.'方式登录.');
            redirect();
            return;
        }

        $provider = $this->oauth2->provider($provider, $allowed_providers[$provider]);

        $args = $this->input->get();
        if ($args AND !isset($args['code']))
        {
            $this->session->set_flashdata('info', '授权失败了,可能由于应用设置问题或者用户拒绝授权.<br />具体原因:<br />'.json_encode($args));
            redirect();
            return;
        }
        $code = $this->input->get('code', TRUE);
        if ( ! $code)
        {
            $provider->authorize();
            return;
        }
        else
        {
            try
            {
                $token = $provider->access($code);
                $sns_user = $provider->get_user_info($token);
                if (is_array($sns_user))
                {
                    $this->session->set_flashdata('info', '登录成功');
                    $this->session->set_userdata('user', $sns_user);
                    $this->session->set_userdata('is_login', TRUE);
                }
                else
                {
                    $this->session->set_flashdata('info', '获取用户信息失败');
                }
            }
            catch (OAuth2_Exception $e)
            {
                $this->session->set_flashdata('info', '操作失败<pre>'.$e.'</pre>');
            }
        }
        redirect();

    }

    public function _oauth2_bind($provider = 'weibo')
    {

        $allowed_providers = $this->config->item('oauth2');
        if ( ! $provider OR ! isset($allowed_providers[$provider]))
        {
            $this->session->set_flashdata('info', '暂不支持'.$provider.'方式登录.');
            redirect();
            return;
        }

        $provider = $this->oauth2->provider($provider, $allowed_providers[$provider]);

        $args = $this->input->get();
        if ($args AND !isset($args['code']))
        {
            $this->session->set_flashdata('info', '授权失败了,可能由于应用设置问题或者用户拒绝授权.<br />具体原因:<br />'.json_encode($args));
            redirect();
            return;
        }
        $code = $this->input->get('code', TRUE);
        if ( ! $code)
        {
          return  $provider->authorizeURL();
        }

    }


}





?>
