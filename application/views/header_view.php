<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8" />
<title>OPENVIM</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- @todo: fill with your company info or remove -->
<meta name="description" content="" />
<meta name="author" content="Themelize.me" />

<!-- Bootstrap CSS -->
<link href="<?=base_url('public/css/bootstrap.css')?>" rel="stylesheet" />
<link href="<?=base_url('public/css/responsive.css')?>" rel="stylesheet" />

<!-- Flexslider -->
<link href="<?=base_url('public/css/flexslider.css')?>" rel="stylesheet" />

<!-- Theme style -->
<link href="<?=base_url('public/css/theme-style.css')?>" rel="stylesheet" />


<!-- Your custom override -->
<link href="<?=base_url('public/css/custom-style.css')?>" rel="stylesheet" />

<!-- pretty code -->
<link href="<?=base_url('public/google-code-prettify/prettify.css')?>" rel="stylesheet" />

<link href="<?=base_url('public/editor/css/editor.css')?>" rel="stylesheet" />

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="js/html5.js"></script>
    <![endif]-->


<script src="<?=base_url('public/google-code-prettify/prettify.js')?>"></script>

<script src="<?=base_url('public/js/jquery.js')?>"></script>


<!-- Le fav and touch icons - @todo: fill with your icons or remove -->
<link rel="shortcut icon" href="<?=base_url('public/img/icons/favicon.png')?>" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url('public/img/icons/114x114.png')?>" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url('public/img/icons/72x72.png')?>" />
<link rel="apple-touch-icon-precomposed" href="<?=base_url('public/img/icons/default.png')?>" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300|Rambla|Calligraffitti' rel='stylesheet' type='text/css' />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body class="page page-blog" style="padding-top:60px;">
<div id="navigation" class="wrapper navbar-fixed-top" >
  <div class="navbar">



    <div class="container" style="width:99%">
      <div class="navbar-inner">
        <!--mobile collapse menu button-->
        <a class="btn btn-navbar pull-left" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>

        <!--user menu-->
        <ul class="nav user-menu pull-right">
        <?php if(!$this->session->userdata('is_login')){?>
        <li><a href="<?php echo site_url('user/register')?>" class="btn btn-primary signup">注册</a></li>
          <li> <a href="<?php echo site_url('user/login')?>" class="btn btn-primary login" id="login-drop">登陆</a>
        <?php }else{?>
          <li><a href="signup.html" class="btn btn-primary signup">用户名</a></li>
          <li class="dropdown"> <a href="login.html" class="btn btn-primary dropdown-toggle login" id="login-drop" data-toggle="dropdown">头像</a>
          <?php }?>

        </ul>

    <!--everything within this div is collapsed on mobile-->
        <div class="nav-collapse collapse">

          <!--main navigation-->
          <ul class="nav" id="main-menu">
            <li class="home-link"><a href="index.html"><i class="icon-home hidden-phone"></i><span class="visible-phone">Home</span></a></li>
            <li class="dropdown"><a href="features.html" class="dropdown-toggle menu-item" id="features-drop" data-toggle="dropdown">Features +</a> </li>
            <li><a href="pricing.html" class="menu-item">脚本（script）</a></li>
            <li class="dropdown"> <a href="about.html" class="dropdown-toggle" id="about-drop" data-toggle="dropdown">技巧（tips）</a>
              <!-- Dropdown Menu -->
              <ul class="dropdown-menu" role="menu" aria-labelledby="about-drop">
                <li role="menuitem"><a href="about.html" tabindex="-1" class="menu-item">Sort Hot</a></li>
                <li role="menuitem"><a href="team.html" tabindex="-1" class="menu-item">Sort Top</a></li>
                <li role="menuitem"><a href="contact.html" tabindex="-1" class="menu-item">Sort Random</a></li>
              </ul>
            </li>

            <li class="dropdown"><a href="pages.html" class="dropdown-toggle" id="pages-drop" data-toggle="dropdown">话题（topic）</a>


              <!-- Dropdown Menu -->
              <ul class="dropdown-menu pull-left" role="menu" aria-labelledby="pages-drop">
                <li role="menuitem"><a href="elements.html" tabindex="-1" class="menu-item">Theme Elements</a></li>
              </ul>
            </li>
          </ul>
        </div>



        <!--/.nav-collapse -->
      </div>
    </div>
  </div>
</div>
