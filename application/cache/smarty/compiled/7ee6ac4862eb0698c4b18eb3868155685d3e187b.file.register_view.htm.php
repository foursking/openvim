<?php /* Smarty version Smarty-3.1.14, created on 2014-01-28 17:46:33
         compiled from "application/views/register_view.htm" */ ?>
<?php /*%%SmartyHeaderCode:104341069852e77c79c6eb42-65930100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ee6ac4862eb0698c4b18eb3868155685d3e187b' => 
    array (
      0 => 'application/views/register_view.htm',
      1 => 1390203462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104341069852e77c79c6eb42-65930100',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oauth_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52e77c79da60a4_82868346',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e77c79da60a4_82868346')) {function content_52e77c79da60a4_82868346($_smarty_tpl) {?><div id="content">
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
			  </div>
		               </div>
	  </div>
</div>
<?php }} ?>