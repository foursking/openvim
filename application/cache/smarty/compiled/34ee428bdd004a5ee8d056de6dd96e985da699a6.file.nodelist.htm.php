<?php /* Smarty version Smarty-3.1.14, created on 2014-02-14 10:22:53
         compiled from "application/views/nodelist.htm" */ ?>
<?php /*%%SmartyHeaderCode:148187406252fc47634803b9-46006795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34ee428bdd004a5ee8d056de6dd96e985da699a6' => 
    array (
      0 => 'application/views/nodelist.htm',
      1 => 1392344571,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148187406252fc47634803b9-46006795',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52fc4763492255_62140127',
  'variables' => 
  array (
    'nodeList' => 0,
    'node' => 0,
    'nodeChildren' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52fc4763492255_62140127')) {function content_52fc4763492255_62140127($_smarty_tpl) {?><!DOCTYPE html>
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
						node/section
					</div>
        <?php  $_smarty_tpl->tpl_vars['node'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['node']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nodeList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['node']->key => $_smarty_tpl->tpl_vars['node']->value){
$_smarty_tpl->tpl_vars['node']->_loop = true;
?>
					<div class='admin cell topic'>
						<table border='0' cellpadding='0' cellspacing='0' width='100%'>
							<tr>
								<td class='avatar' valign='top'>
									<a href="#" class="profile_link" title="">
										<?php echo $_smarty_tpl->tpl_vars['node']->value['info']['cname'];?>

									</a>
								</td>
								<td style='padding-left: 12px' valign='top'>
        <?php  $_smarty_tpl->tpl_vars['nodeChildren'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nodeChildren']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nodeChildren']->key => $_smarty_tpl->tpl_vars['nodeChildren']->value){
$_smarty_tpl->tpl_vars['nodeChildren']->_loop = true;
?>
					<a><?php echo $_smarty_tpl->tpl_vars['nodeChildren']->value['cname'];?>
</a> &nbsp;&nbsp;
        <?php } ?>
								</td>
							</tr>
						</table>
					</div>
					<?php } ?>
					<div class='cell topic'>
					</div>

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

			</div>
</div></div></div>

<?php }} ?>