<?php /* Smarty version Smarty-3.1.14, created on 2014-02-12 15:51:30
         compiled from "application/views/top-barnar.htm" */ ?>
<?php /*%%SmartyHeaderCode:22300441452fb274e760339-71876232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '204c41bda3efea338b7b0b0d4b4dcbfd21aa26a7' => 
    array (
      0 => 'application/views/top-barnar.htm',
      1 => 1392191487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22300441452fb274e760339-71876232',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52fb274e77a176_30765029',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52fb274e77a176_30765029')) {function content_52fb274e77a176_30765029($_smarty_tpl) {?><div id="navbar-wrapper">
<div  id="navigation" class="navbar navbar-default navbar-fixed-top">
<div class="container">
	<div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
		<a class="navbar-brand" href="#">login</a>
<!--<a class=".btn .btn-default navbar-btn collapsed" data-target=".navbar-collapse" data-toggle="collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><a href="<<?php ?>?php echo site_url()?<?php ?>>" class="brand">Start<span class="green">BBS</span></a>-->
	</div>

        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">首页</a></li>
            <li><a href="">节点</a></li>
            <li><a href="">会员</a></li>
            <li><a href="">发表</a></li>
            <!--<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>-->
           </ul>
		<form class="form-inline navbar-left" style="margin-top: 8px;" role="search" action="http://www.google.com/search" method="get" target="_blank">
		      <div class="form-group" style="width:55%">
		        <input type="text" class="form-control" name="q" placeholder="输入关键字回车"><input type=hidden name=sitesearch value="">
		      </div>
		</form>
          <ul class="nav navbar-nav navbar-right">
 
            <li><a href="<<?php ?>?php echo site_url('user/reg')?<?php ?>>">注册</a></li>
            <li><a href="<<?php ?>?php echo site_url('user/login')?<?php ?>>">登入</a></li>
            <li><a style="padding-top: 11px;overflow:hidden;" href="#"><img src="#" /></a></li>
          </ul>
        </div><!--/.nav-collapse -->
        
</div>
</div>
</div>
<?php }} ?>