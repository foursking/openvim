<?php /* Smarty version Smarty-3.1.14, created on 2013-09-06 18:06:43
         compiled from "application/views/header_view.htm" */ ?>
<?php /*%%SmartyHeaderCode:6047351375229a933b5c3b6-39578576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e542e400bdbe214f7c84668b5c77666d6916dae1' => 
    array (
      0 => 'application/views/header_view.htm',
      1 => 1378461769,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6047351375229a933b5c3b6-39578576',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sys_base_url' => 0,
    'sys_session' => 0,
    'sys_site_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5229a933c2f165_58185113',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229a933c2f165_58185113')) {function content_5229a933c2f165_58185113($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8" />
<title>OPENVIM</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- @todo: fill with your company info or remove -->
<meta name="description" content="" />
<meta name="author" content="Foursk" />

<!-- Bootstrap CSS -->
<link href="<?php echo $_smarty_tpl->tpl_vars['sys_base_url']->value;?>
public/css/bootstrap.css" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['sys_base_url']->value;?>
public/css/responsive.css" rel="stylesheet" />

<!-- Flexslider -->
<link href="<?php echo $_smarty_tpl->tpl_vars['sys_base_url']->value;?>
public/css/flexslider.css" rel="stylesheet" />

<!-- Theme style -->
<link href="<?php echo $_smarty_tpl->tpl_vars['sys_base_url']->value;?>
public/css/theme-style.css" rel="stylesheet" />


<!-- Your custom override -->
<link href="<?php echo $_smarty_tpl->tpl_vars['sys_base_url']->value;?>
public/css/custom-style.css" rel="stylesheet" />

<!-- pretty code -->
<link href="<?php echo $_smarty_tpl->tpl_vars['sys_base_url']->value;?>
public/google-code-prettify/prettify.css" rel="stylesheet" />

<link href="<?php echo $_smarty_tpl->tpl_vars['sys_base_url']->value;?>
public/editor/css/editor.css" rel="stylesheet" />

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="js/html5.js"></script>
    <![endif]-->


<script src="<?php echo $_smarty_tpl->tpl_vars['sys_base_url']->value;?>
public/google-code-prettify/prettify.js"></script>

<script src="<?php echo $_smarty_tpl->tpl_vars['sys_base_url']->value;?>
public/js/jquery.js"></script>


<!-- Le fav and touch icons - @todo: fill with your icons or remove -->
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['sys_base_url']->value;?>
public/img/icons/favicon.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $_smarty_tpl->tpl_vars['sys_base_url']->value;?>
public/img/icons/114x114.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $_smarty_tpl->tpl_vars['sys_base_url']->value;?>
public/img/icons/72x72.png" />
<link rel="apple-touch-icon-precomposed" href="<?php echo $_smarty_tpl->tpl_vars['sys_base_url']->value;?>
public/img/icons/default.png" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300|Rambla|Calligraffitti' rel='stylesheet' type='text/css' />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body class="page page-blog" style="padding-top:60px;">


<div id="navigation" class="wrapper navbar-fixed-top" >
  <div class="navbar">


<style>


</style>

    <div class="container" style="width:99%">
      <div class="navbar-inner">
        <!--mobile collapse menu button-->
        <a class="btn btn-navbar pull-left" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>

        <!--user menu-->
        <ul class="nav pull-right" style="margin:0 10px 0 0;">
        <?php if ($_smarty_tpl->tpl_vars['sys_session']->value['is_login']==1){?>
        <li style="margin-top:10px;"><a href="<?php echo $_smarty_tpl->tpl_vars['sys_site_url']->value;?>
user/register" class="btn btn-primary signup">注册</a></li>
        <li style="margin-top:10px;"><a href="<?php echo $_smarty_tpl->tpl_vars['sys_site_url']->value;?>
user/login" class="btn btn-primary login" id="login-drop">登陆</a></li>
        <?php }else{ ?>
          <li class="dropdown">
 <a href="#" class="dropdown-toggle login" data-toggle="dropdown"> <img width="26" height="26" src="http://dev.openvim.com/public/img/team/jobs.jpg" alt="Picture of Tom" class="media-object img-polaroid"> </a>
 <ul class="dropdown-menu pull-left">
      <li><a class="menu-item" href="#">个人主页</a></li>
      <li><a class="menu-item" href="<?php echo $_smarty_tpl->tpl_vars['sys_site_url']->value;?>
login/loginout">注销</a></li>
 </ul>
</li>
       <?php }?>

        </ul>

    <!--everything within this div is collapsed on mobile-->
        <div class="nav-collapse collapse">

          <!--main navigation-->
          <ul class="nav" id="main-menu">
            <li class="home-link"><a href="index.html"><i class="icon-home hidden-phone"></i><span class="visible-phone">Home</span></a></li>
            <li class="dropdown"><a href="features.html" class="dropdown-toggle menu-item" id="features-drop" data-toggle="dropdown">Features +</a> </li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['sys_site_url']->value;?>
plugin/index" class="menu-item">脚本（script）</a></li>
            <li class="dropdown"> <a href="<?php echo $_smarty_tpl->tpl_vars['sys_site_url']->value;?>
tips/index" class="dropdown-toggle">技巧（tips）</a> </li>
            <li class="dropdown"><a href="pages.html" class="dropdown-toggle" id="pages-drop" data-toggle="dropdown">话题（topic）</a> </li>
          </ul>
        </div>



        <!--/.nav-collapse -->
      </div>
    </div>
  </div>
</div>
<?php }} ?>