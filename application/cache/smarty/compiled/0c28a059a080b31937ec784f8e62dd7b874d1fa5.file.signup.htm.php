<?php /* Smarty version Smarty-3.1.14, created on 2014-02-15 15:23:19
         compiled from "application/views/signup.htm" */ ?>
<?php /*%%SmartyHeaderCode:209151803152ff11711bfef4-43927087%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c28a059a080b31937ec784f8e62dd7b874d1fa5' => 
    array (
      0 => 'application/views/signup.htm',
      1 => 1392448996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209151803152ff11711bfef4-43927087',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ff11711cf567_20742836',
  'variables' => 
  array (
    'user' => 0,
    'oauth_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ff11711cf567_20742836')) {function content_52ff11711cf567_20742836($_smarty_tpl) {?><!DOCTYPE html>
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
						<a href="#" class="startbbs">sitename</a> <span class="chevron">&nbsp;›&nbsp;</span> 完善资料 
					</div>
					<div class='inner'>
						<form accept-charset="UTF-8" action="#" class="form-horizontal" id="new_user" method="post" novalidate="novalidate">
							<div style="margin:0;padding:0;display:inline">
								<input name="utf8" type="hidden" value="" />
								<input name="authenticity_token" type="hidden" value="" />
							</div>
							<div class="form-group" style="margin-top:10px">
								<label class="col-sm-3 control-label" for="user_email">E妹儿</label>
								<div class="col-sm-5">
									<input class="form-control" id="user_email" name="email" size="50" type="email" value="" />
									<span class="help-inline red"></span>
								</div>
							</div>
							<div class="form-group" style="margin-top:20px">
								<label class="col-sm-3 control-label" for="user_nickname">常用名</label>
								<div class="col-sm-5">
									<input autofocus="autofocus" class="form-control" id="user_nickname" name="username" size="50" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
" /><span class="help-inline red"></span>
								</div>
							</div>

							<div style="position: absolute; margin-top: -110px; margin-left: 430px; float: right; ">
<style> #current_avatar { padding: 5px; background-color: #fff; box-shadow: 0 1px 3px rgba(34,25,25,.4); -moz-box-shadow: 0 1px 3px rgba(34,25,25,.4); -webkit-box-shadow: 0 1px 3px rgba(34,25,25,.4); width:100px; height:100px; } </style>
							<img id="current_avatar" src="<?php echo $_smarty_tpl->tpl_vars['user']->value['avatar_large'];?>
"/>
							</div>

							<div class='form-group'>
								<div class="col-sm-offset-3 col-sm-9">
									<button type="submit" name="commit" class="btn btn-primary">注册</button>
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