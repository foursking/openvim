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



<!-- Le fav and touch icons - @todo: fill with your icons or remove -->
<link rel="shortcut icon" href="<?=base_url('public/img/icons/favicon.png')?>" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url('public/img/icons/114x114.png')?>" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url('public/img/icons/72x72.png')?>" />
<link rel="apple-touch-icon-precomposed" href="<?=base_url('public/img/icons/default.png')?>" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300|Rambla|Calligraffitti' rel='stylesheet' type='text/css' />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body class="page page-blog">
<div id="navigation" class="wrapper">
  <div class="navbar  navbar-static-top">

    <!--Hidden Header Region-->
    <div class="header-hidden">
      <div class="header-hidden-inner container">
        <div class="row-fluid">
          <div class="span4">
            <h3>About Us</h3>
            <p>Making the web a prettier place one template at a time! We make beautiful, quality, responsive Drupal & web templates!</p>
            <a href="about.html" class="btn btn-mini btn-primary">Find out more</a> </div>
          <div class="span4">
            <!--@todo: replace with company contact details-->
            <h3>Contact Us</h3>
            <address>
            <p><abbr title="Phone"><i class="icon-phone"></i></abbr> 019223 8092344</p>
            <p><abbr title="Email"><i class="icon-envelope"></i></abbr> info@themelize.me</p>
            <p><abbr title="Address"><i class="icon-home"></i></abbr> Sunshine House, Sunville. SUN12 8LU.</p>
            </address>
          </div>
          <div class="span4">
            <!--Colour Switch for demo - @todo: remove in production-->
            <div class="colour-switcher">
              <h3>Theme Colours</h3>
              <a href="#green" class="green active _tooltip" data-placement="bottom" data-original-title="Green (Default)">Green</a> <a href="#red" class="red _tooltip" data-placement="bottom" data-original-title="Red">Red</a> <a href="#blue" class="blue _tooltip" data-placement="bottom" data-original-title="Blue">Blue</a>
              <p>Cookies are NOT enabled so colour selection is not persistent.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Header & Branding region-->
    <div class="header">
      <div class="header-inner container">
        <div class="row-fluid">
          <div class="span6">
            <!--branding/logo-->
            <a class="brand" href="index.html" title="Home">
            <h1><span>Open</span>Vim<span></span></h1>
            </a>
            <div class="slogan">find thing here</div>
          </div>

          <!--header rightside-->
          <div class="span6">
            <div id="header-hidden-link"> <a href="#" class="show-hide" title="Click me you'll get a surprise" data-target=".header-hidden"><i></i>Open</a> </div>

            <!--social media icons-->
            <div class="social-media pull-right">
              <!--@todo: replace with company social media details-->
              <a href="#"><i class="icon-twitter"></i></a> <a href="#"><i class="icon-facebook"></i></a> <a href="#"><i class="icon-linkedin"></i></a> <a href="#"><i class="icon-google-plus"></i></a> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="navbar-inner">

        <!--mobile collapse menu button-->
        <a class="btn btn-navbar pull-left" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>

        <!--user menu-->
        <ul class="nav user-menu pull-right">
          <li><a href="signup.html" class="btn btn-primary signup">Sign Up</a></li>
          <li class="dropdown"> <a href="login.html" class="btn btn-primary dropdown-toggle login" id="login-drop" data-toggle="dropdown">Login</a>
            <div class="dropdown-menu" role="menu" aria-labelledby="login-drop">
              <form action="login.html" class="form-inline" id="login-form-drop" role="menuitem" />
                <div class="input-append">
                  <input type="text" class="input-small email" placeholder="Email" />
                  <input type="password" class="input-small password" placeholder="Password" />
                  <input type="button" class="btn btn-primary login" value="Login" />
                </div>
              </form>
              <span class="divider" role="menuitem"></span> <small role="menuitem">Not a member? <a href="#" class="signup">Sign up now!</a></small> <small role="menuitem"><a href="#">Forgotten password?</a></small> </div>
          </li>
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

            <li class="dropdown"><a href="pages.html" class="dropdown-toggle" id="pages-drop" data-toggle="dropdown">More +</a>


              <!-- Dropdown Menu -->
              <ul class="dropdown-menu pull-left" role="menu" aria-labelledby="pages-drop">
                <li role="menuitem"><a href="login.html" tabindex="-1" class="menu-item">Login</a></li>
                <li role="menuitem"><a href="signup.html" tabindex="-1" class="menu-item">Sign Up</a></li>
                <li role="menuitem"><a href="starter.html" tabindex="-1" class="menu-item">Starter Snippets</a></li>
                <li role="menuitem"><a href="index-static.html" tabindex="-1" class="menu-item">Homepage Static Banner</a></li>
                <li role="menuitem"><a href="fixed-header.html" tabindex="-1" class="menu-item">Fixed Header</a></li>
                <li role="menuitem"><a href="colours.html" tabindex="-1" class="menu-item">Theme Colours</a></li>
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
