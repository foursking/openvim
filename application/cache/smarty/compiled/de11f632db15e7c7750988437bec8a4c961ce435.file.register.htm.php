<?php /* Smarty version Smarty-3.1.14, created on 2014-02-15 15:24:31
         compiled from "application/views/register.htm" */ ?>
<?php /*%%SmartyHeaderCode:23644199152fb3761c5f5f2-68372524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de11f632db15e7c7750988437bec8a4c961ce435' => 
    array (
      0 => 'application/views/register.htm',
      1 => 1392449061,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23644199152fb3761c5f5f2-68372524',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52fb3761c69201_57114199',
  'variables' => 
  array (
    'oauth_url' => 0,
  ),
  'has_nocache_code' => false,
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


<div id="wrap">
	<div class="container" id="page-main">
		<div class="row">
			<div class='col-xs-12 col-sm-6 col-md-8'>
				<div class='box'>
					<div class='cell'>
						<a href="#" class="startbbs">sitename</a> <span class="chevron">&nbsp;›&nbsp;</span> register
					</div>
					<div class='inner'>
						<form accept-charset="UTF-8" action="#" class="form-horizontal" id="new_user" method="post" novalidate="novalidate">
							<div style="margin:0;padding:0;display:inline">
								<input name="utf8" type="hidden" value="" />
								<input name="authenticity_token" type="hidden" value="" />
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="user_nickname">username</label>
								<div class="col-sm-5">
									<input autofocus="autofocus" class="form-control" id="user_nickname" name="username" size="50" type="text" value="" /><span class="help-inline red"></span>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="user_email">email</label>
								<div class="col-sm-5">
									<input class="form-control" id="user_email" name="email" size="50" type="email" value="" />
									<span class="help-inline red"></span>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="user_password">password</label>
								<div class="col-sm-5">
									<input class="form-control" id="user_password" name="password" size="50" type="password" value="" />
									<span class="help-inline red"></span>
								</div>
							</div>

							<div class='form-group'>
								<div class="col-sm-offset-3 col-sm-9">
									<button type="submit" name="commit" class="btn btn-primary">register</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class='box'>
				<div class='cell'>
				<div class='cell'>
					openId
					</div>
					<div class="inner">
						<a href="<?php echo $_smarty_tpl->tpl_vars['oauth_url']->value['oauth2_weibo_url'];?>
"><button type="button" class="btn btn-primary btn-danger">weibo</button></a>
					  </div>
				  </p>
					</div>
				</div>
			</div>
			<div class='col-xs-12 col-sm-6 col-md-4' id='Rightbar'>
			</div>
</div>
</div>
</div>
<?php }} ?>