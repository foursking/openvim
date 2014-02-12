<?php /* Smarty version Smarty-3.1.14, created on 2014-02-12 16:56:49
         compiled from "application/views/login.htm" */ ?>
<?php /*%%SmartyHeaderCode:49353325052fb375144bfa6-79872398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '348eed1ac1cc8885ea182d7cc252c7213fa40428' => 
    array (
      0 => 'application/views/login.htm',
      1 => 1392195368,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49353325052fb375144bfa6-79872398',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52fb3751456dd2_54545707',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52fb3751456dd2_54545707')) {function content_52fb3751456dd2_54545707($_smarty_tpl) {?><!DOCTYPE html><html><head><meta content='登入' name='description'>
<meta charset='UTF-8'>
<meta content='True' name='HandheldFriendly'>
<meta content='width=device-width, initial-scale=1.0' name='viewport'>
<title>登入 - sitename </title>

<?php echo $_smarty_tpl->getSubTemplate ('header-meta.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


</head>
<body id="startbbs">

<div id="wrap"><div class="container" id="page-main"><div class="row"><div class='col-xs-12 col-sm-6 col-md-8'>


<div class='box'>
<div class='cell'><a href="#" class="startbbs">site_name</a> <span class="chevron">&nbsp;›&nbsp;</span> 登入</div>
<div class='inner'>
<form accept-charset="UTF-8" action="#" class="form-horizontal" id="new_user" method="post" novalidate="novalidate">
<div style="margin:0;padding:0;display:inline">
<input name="utf8" type="hidden" value="&#x2713;" />
<input name="authenticity_token" type="hidden" value="lr/g+0G/gLUzIhYpJwhtULW5aftcf8soZOHMznkxxT0=" />
</div>

<div class="form-group">
<label class="col-sm-3 control-label" for="user_nickname">用户名</label>
<div class="col-sm-5">
<input autofocus="autofocus" class="form-control" id="user_nickname" name="username" size="50" type="text" />
</div></div>
<div class="form-group">
<label class="col-sm-3 control-label" for="user_password">密码</label>
<div class="col-sm-5">
<input class="form-control" id="user_password" name="password" size="50" type="password" />
</div></div>

<div class='hide'>
<input name="user[remember_me]" type="hidden" value="0" />
<input checked="checked" id="user_remember_me" name="user[remember_me]" type="checkbox" value="1" /></div>
<div class='form-group'>
	<div class="col-sm-offset-3 col-sm-9">
		<button type="submit" name="commit" class="btn btn-primary">登入</button>
		<a href="#" class="btn btn-default" role="button">找回密码</a>
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
<<?php ?>?php $this->load->view ('footer'); ?<?php ?>>
<?php }} ?>