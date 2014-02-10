<?php /* Smarty version Smarty-3.1.14, created on 2014-02-10 11:52:17
         compiled from "application/views/signup_view.htm" */ ?>
<?php /*%%SmartyHeaderCode:152820728052f493ba5d2729-62440333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a38e1c068f75dec83a687da5102e2544a21a06f6' => 
    array (
      0 => 'application/views/signup_view.htm',
      1 => 1392004335,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152820728052f493ba5d2729-62440333',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52f493ba7903d5_62020312',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f493ba7903d5_62020312')) {function content_52f493ba7903d5_62020312($_smarty_tpl) {?><div id="content">
	<div class="container">
		<div class="well-form">
			<h1 class="slug">注册</h3>
			<form action="http://dev.openvim.com/u/register" method="post" accept-charset="utf-8"id =  "register-welcome-form" >
				<div class="control-group">
					<input type="text" name="login_email" placeholder="Email地址" class="text-34" style="height:30px" required="" />
					<span class="text-error"></span>
				</div>
				<div class="control-group">
					<input type="password" name="login_password" placeholder="登陆密码" class="text-34" style="height:30px" required="" />
                <span class="text-error"></span>
				</div>
				<div class="control-group">
					<div class="controls">
						<input type="text" name="register_username" placeholder="常用名" class="text-34" style="height:30px" required=""  value="<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
" />
                <span class="text-error"></span>
					</div>
				</div>
				<div class="form-actions">
					<span>
					</span>
					<button id="login-submit" class="btn btn-primary" type="submit">注 册</button>
				</div>
			</form>
			<style>
#current_avatar {
	padding: 5px;
	background-color: #fff;
	box-shadow: 0 1px 3px rgba(34,25,25,.4);
	-moz-box-shadow: 0 1px 3px rgba(34,25,25,.4);
	-webkit-box-shadow: 0 1px 3px rgba(34,25,25,.4);
}
			</style>
			<div class="form-extra">
				<div class="avatar" >
					<img id="current_avatar" src="<?php echo $_smarty_tpl->tpl_vars['user']->value['avatar_large'];?>
" >
				</div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>