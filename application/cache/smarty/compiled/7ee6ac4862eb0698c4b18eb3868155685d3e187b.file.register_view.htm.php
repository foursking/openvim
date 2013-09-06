<?php /* Smarty version Smarty-3.1.14, created on 2013-09-06 17:59:18
         compiled from "application/views/register_view.htm" */ ?>
<?php /*%%SmartyHeaderCode:171002009352297003a5a693-70468912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ee6ac4862eb0698c4b18eb3868155685d3e187b' => 
    array (
      0 => 'application/views/register_view.htm',
      1 => 1378461382,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171002009352297003a5a693-70468912',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52297003aae069_72327179',
  'variables' => 
  array (
    'oauth_url' => 0,
    'sys_site_url' => 0,
    'sys_base_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52297003aae069_72327179')) {function content_52297003aae069_72327179($_smarty_tpl) {?><div id="content">
	  <div class="container">
		    <div class="well-form">
              <h1 class="slug">注册</h3>
                <form action="http://dev.openvim.com/user/register" method="post" accept-charset="utf-8"id =  "register-welcome-form" >
		        <div class="control-group">
					<input type="text" name="register_email" placeholder="Email地址" class="text-34" style="height:30px" required="" />
			    </div>
		        <div class="control-group">
					<input type="password" name="register_password" placeholder="登陆密码" class="text-34" style="height:30px" required="" data-validation-matches-match="pass" data-validation-matches-message="Must match password entered above" />
			    </div>
              <div class="control-group">
		          <div class="controls">
					<input type="text" name="register_username" placeholder="常用名" class="text-34" style="height:30px" required="" data-validation-matches-match="pass" data-validation-matches-message="Must match password entered above" />
				  </div>
			    </div>
             <div class="form-actions">
                <span>
                </span>
			      <button class="btn btn-primary" type="submit">注 册</button>
                </div>
              </form>
		      <div class="form-extra">
                <h3 class="slug">推荐使用第三方登陆</h3>
                <a href="<?php echo $_smarty_tpl->tpl_vars['oauth_url']->value['oauth2_weibo_url'];?>
"><button class="btn btn-danger"><i class="glyphicons-google_plus"></i>新浪微博登陆</button></a>
                <?php echo $_smarty_tpl->tpl_vars['sys_site_url']->value;?>

                <?php echo $_smarty_tpl->tpl_vars['sys_base_url']->value;?>

			  </div>
		               </div>
	  </div>
</div>
<?php }} ?>