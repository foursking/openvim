<?php /* Smarty version Smarty-3.1.14, created on 2014-02-15 17:40:37
         compiled from "application/views/topiclist.htm" */ ?>
<?php /*%%SmartyHeaderCode:23331576152fdc1cb6a6952-04753797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eaa2cf556399a9ad6051cab4f1366b7072ab5478' => 
    array (
      0 => 'application/views/topiclist.htm',
      1 => 1392457233,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23331576152fdc1cb6a6952-04753797',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52fdc1cb6b0fd9_27206800',
  'variables' => 
  array (
    'nodeTopicList' => 0,
    'topic' => 0,
    'pagination_link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52fdc1cb6b0fd9_27206800')) {function content_52fdc1cb6b0fd9_27206800($_smarty_tpl) {?><!DOCTYPE html>
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
							topic number
							<div class='badge badge-info'>
								&nbsp;
								2014
								&nbsp;
							</div>
						</div>
						<a href="/" class="startbbs">site_name</a> <span class="chevron">&nbsp;›&nbsp;</span> tips 
					</div>
					<div class='cell'> this is the place for discription of block</div>
				</div>

				<div class='box'>
					<div class='box-header'>
					</div>
        <?php  $_smarty_tpl->tpl_vars['topic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nodeTopicList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topic']->key => $_smarty_tpl->tpl_vars['topic']->value){
$_smarty_tpl->tpl_vars['topic']->_loop = true;
?>
					<div class='admin cell topic'>
						<table border='0' cellpadding='0' cellspacing='0' width='100%'>
							<tr>
								<td class='avatar' valign='top'>
									<a href="#" class="profile_link" title="">
										<img alt="" class="medium_avatar" src="http://cdn.v2ex.com/avatar/2f87/d717/36104_large.png?m=1363607111" />
									</a>
								</td>
								<td style='padding-left: 12px' valign='top'>
									<div class='pull-right'>
										<div class='badge badge-info'><a href="view_url">10</a></div>
									</div>
									<div class='sep3'></div>
									<h2 class='topic_title'>
										<a href="#" class="startbbs topic"><?php echo $_smarty_tpl->tpl_vars['topic']->value['title'];?>
</a>
									</h2>
									<div class='topic-meta'>
										<a href="#" class="node">cname</a>
										&nbsp;&nbsp;•&nbsp;&nbsp;
										<a href="" class="dark startbbs profile_link" title="username">username</a>
										&nbsp;&nbsp;•&nbsp;&nbsp;
										&nbsp;&nbsp;•&nbsp;&nbsp;
										last reply from
										<a href="" class="startbbs profile_link" title="agred">jack</a>
									</div>
								</td>
							</tr>
						</table>
					</div>
					<?php } ?>
					<div class='cell topic'>
						no reply yet
					</div>

					<div class='inner'>
				<div class="pagination pagination-centered">
					<?php echo $_smarty_tpl->tpl_vars['pagination_link']->value;?>

				</div>

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

			</div>
</div></div></div>

<?php }} ?>