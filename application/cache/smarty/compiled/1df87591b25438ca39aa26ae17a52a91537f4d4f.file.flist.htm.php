<?php /* Smarty version Smarty-3.1.14, created on 2014-02-13 12:09:10
         compiled from "application/views/flist.htm" */ ?>
<?php /*%%SmartyHeaderCode:6895156852fb3da758dc36-15861092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1df87591b25438ca39aa26ae17a52a91537f4d4f' => 
    array (
      0 => 'application/views/flist.htm',
      1 => 1392197139,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6895156852fb3da758dc36-15861092',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52fb3da75a65c1_90156692',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52fb3da75a65c1_90156692')) {function content_52fb3da75a65c1_90156692($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'>
<meta content='True' name='HandheldFriendly'>
<meta content='width=device-width, initial-scale=1.0' name='viewport'>
<title>title</title>
<meta name="keywords" content="title" />
<meta name="description" content="content" />
<?php echo $_smarty_tpl->getSubTemplate ('header-meta.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</head>
<body id="startbbs">


<div id="wrap">
<div class="container" id="page-main">
<div class="row">
<div class='col-xs-12 col-sm-6 col-md-8'>

<div class='box'>
<div class='box-header'>
<div class='pull-right'>
话题总数
<div class='badge badge-info'>
&nbsp;
listnum
&nbsp;
</div>
</div>
<a href="/" class="startbbs">site_name</a> <span class="chevron">&nbsp;›&nbsp;</span> cname
</div>
<div class='cell'> content </div>
</div>

<div class='box'>
<div class='box-header'>
<span>最新话题 (<span>版主:'master'</span>)</span>
<span class='pull-right'>
<a href="<<?php ?>?php echo site_url('/forum/add/'.$category['cid']);?<?php ?>>" class="btn btn-success btn-sm">快速发表</a>
</span>
</div>
<<?php ?>?php if($list){?<?php ?>>
<<?php ?>?php foreach ($list as $v) {?<?php ?>>
<div class='admin cell topic'>
<table border='0' cellpadding='0' cellspacing='0' width='100%'>
<tr>
<td class='avatar' valign='top'>
<a href="<<?php ?>?php echo site_url('user/info/'.$v['uid']);?<?php ?>>" class="profile_link" title="<<?php ?>?php echo $v['username'];?<?php ?>>">
<<?php ?>?php if($v['avatar']) {?<?php ?>>
<img alt="" class="medium_avatar" src="" />
<<?php ?>?php } else {?<?php ?>>
<img alt="" class="medium_avatar" src="" />
<<?php ?>?php }?<?php ?>>
</a>
</td>
<td style='padding-left: 12px' valign='top'>
<div class='pull-right'>
<div class='badge badge-info'><a href="view_url">comments</a></div>
</div>
<div class='sep3'></div>
<h2 class='topic_title'>
<a href="#" class="startbbs topic">title</a>
<span class="label label-info">置顶</span>
</h2>
<div class='topic-meta'>
<a href="#" class="node">cname</a>
&nbsp;&nbsp;•&nbsp;&nbsp;
<a href="<<?php ?>?php echo site_url('user/info/'.$v['uid']);?<?php ?>>" class="dark startbbs profile_link" title="username">username</a>
&nbsp;&nbsp;•&nbsp;&nbsp;
&nbsp;&nbsp;•&nbsp;&nbsp;
最后回复来自
<a href="<<?php ?>?php echo site_url('user/info/'.$v['ruid']);?<?php ?>>" class="startbbs profile_link" title="agred">rname</a>
</div>
</td>
</tr>
</table>
</div>
<<?php ?>?php } ?<?php ?>>
<<?php ?>?php } else{?<?php ?>>
<div class='cell topic'>
暂无话题, 请发表话题！
</div>
<<?php ?>?php } ?<?php ?>>

<div class='inner'>
<ul class='pager'>
<li>
<!--<span class='gray'></span>-->
</li>
<li class='next'>
<!--<a href="/go/noticeboard?p=2">下一页 →</a>-->
</li>
</ul>
</div>

</div>

</div>
<div class='col-xs-12 col-sm-6 col-md-4' id='Rightbar'>
<<?php ?>?php $this->load->view('block/right_login');?<?php ?>>
<<?php ?>?php $this->load->view('block/right_cates');?<?php ?>>
<<?php ?>?php $this->load->view('block/right_ad');?<?php ?>>

</div>
</div></div></div>

<<?php ?>?php $this->load->view ('footer'); ?<?php ?>>
<?php }} ?>