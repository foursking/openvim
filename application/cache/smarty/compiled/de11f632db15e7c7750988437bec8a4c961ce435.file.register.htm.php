<?php /* Smarty version Smarty-3.1.14, created on 2014-02-12 16:57:05
         compiled from "application/views/register.htm" */ ?>
<?php /*%%SmartyHeaderCode:23644199152fb3761c5f5f2-68372524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de11f632db15e7c7750988437bec8a4c961ce435' => 
    array (
      0 => 'application/views/register.htm',
      1 => 1392194491,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23644199152fb3761c5f5f2-68372524',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52fb3761c69201_57114199',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52fb3761c69201_57114199')) {function content_52fb3761c69201_57114199($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<meta content='注册' name='description'>
<meta charset='UTF-8'>
<meta content='True' name='HandheldFriendly'>
<meta content='width=device-width, initial-scale=1.0' name='viewport'>
<title>title</title>


<?php echo $_smarty_tpl->getSubTemplate ('header-meta.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


</head>
<body id="startbbs">


<div id="wrap"><div class="container" id="page-main"><div class="row"><div class='col-xs-12 col-sm-6 col-md-8'>

<div class='box'>
<div class='cell'>
<a href="#" class="startbbs">sitename</a> <span class="chevron">&nbsp;›&nbsp;</span> 注册
</div>
<div class='inner'>
<form accept-charset="UTF-8" action="#" class="form-horizontal" id="new_user" method="post" novalidate="novalidate">
<div style="margin:0;padding:0;display:inline">
<input name="utf8" type="hidden" value="&#x2713;" />
<input name="authenticity_token" type="hidden" value="zHmHYEJbz9hP+SpTe153DJH8BobrJSJ63cDjsuZayGs=" /></div>
<div class="form-group">
<label class="col-sm-3 control-label" for="user_nickname">用户名</label>
<div class="col-sm-5">
<input autofocus="autofocus" class="form-control" id="user_nickname" name="username" size="50" type="text" value="" /><span class="help-inline red">username</span>
</div></div>
<div class="form-group">
<label class="col-sm-3 control-label" for="user_email">电子邮件</label>
<div class="col-sm-5">
<input class="form-control" id="user_email" name="email" size="50" type="email" value="email" />
<span class="help-inline red">email</span>
</div></div>
<div class="form-group">
<label class="col-sm-3 control-label" for="user_password">密码</label>
<div class="col-sm-5">
<input class="form-control" id="user_password" name="password" size="50" type="password" value="password" />
<span class="help-inline red">password</span>
</div></div>
<div class="form-group">
<label class="col-sm-3 control-label" for="user_password_confirmation">密码确认</label>
<div class="col-sm-5">
<input class="form-control" id="user_password_confirmation" name="password_c" size="50" type="password" value="password_c" /><span class="help-inline red">password_c</span>
</div></div>

<div class='form-group'>
	<div class="col-sm-offset-3 col-sm-9">
		<button type="submit" name="commit" class="btn btn-primary">注册</button>
	</div>
</div>
</form>

</div>
</div>

</div>
<div class='col-xs-12 col-sm-6 col-md-4' id='Rightbar'>
<<?php ?>?php $this->load->view('block/right_login');?<?php ?>>
<<?php ?>?php $this->load->view('block/right_ad');?<?php ?>>

</div>
</div></div></div>
<<?php ?>?php $this->load->view('footer');?<?php ?>>
<?php }} ?>