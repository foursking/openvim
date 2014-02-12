<?php /* Smarty version Smarty-3.1.14, created on 2014-02-12 16:14:52
         compiled from "application/views/home_view.htm" */ ?>
<?php /*%%SmartyHeaderCode:193646692552fb23a3893e52-82613737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '218cb5ad13af45166b15b5c6dade09fe39e46e2e' => 
    array (
      0 => 'application/views/home_view.htm',
      1 => 1392192885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193646692552fb23a3893e52-82613737',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52fb23a38b98b6_36315564',
  'variables' => 
  array (
    'tips_generalize' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52fb23a38b98b6_36315564')) {function content_52fb23a38b98b6_36315564($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>title</title>
<meta name="keywords" content="keywords" />
<meta name="description" content="description" />

<?php echo $_smarty_tpl->getSubTemplate ('header-meta.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


</head>
<body>


<div id="wrap">
	<div class="container" id="page-main">
		<div class="row">

			<div class='col-xs-12 col-sm-6 col-md-8'>

				<div class='box' id='topics_index'>
					<div align='left' class='cell'>
						<div class='pull-right marketing'>
							<span class='gray' style='font-size: 110%'>
								<span class="snow"></span></span>
						</div>
						<div class='bigger welcome'></div>
						<div class='sep10'></div>
						<div class="jumbotron"><h1></h1><p></p></div>
					</div>
					<span id="infolist">

        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tips_generalize']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
						<div class='cell topic'>
							<div class='avatar pull-left'>
								<a href="#" class="profile_link" title="username">
									<img alt="" class="medium_avatar" src="http://cdn.v2ex.com/avatar/2f87/d717/36104_large.png?m=1363607111" />
								</a>
							</div>
							<div class='item_title'>
								<div class='pull-right'>
									<div class='badge badge-info'><a href="#">badge-info</a></div>
								</div>
								<h2 class='topic_title'>
									<a href="#" class="startbbs topic">startbbs</a>
								</h2>
								<div class='topic-meta'>
									<a href="#" class="node">cname</a>
									<span class='text-muted'>.</span>
									<a href="#" class="dark startbbs profile_link" title="">username</a>
									<span class='text-muted'>.</span>
									<span class='text-muted'>.</span>
								</div>
							</div>
						</div>
						<?php } ?>

					</span><!--infolist-->

					<div class='inner'>
						<div class='pull-right'><img align="absmiddle" alt="Rss" src="" />
							<a href="" class="dark" target="_blank">RSS</a>
						</div>
						&nbsp;
						<span class='chevron'>»</span>
						<a href="javascript:void(0)" id="getmore" class="startbbs">更多新主题</a>
					</div>
				</div>
				<script>
				$(function() {
						var page=2;
						$("#getmore").click(function() {
							var data;
							$.get('<<?php ?>?php echo site_url();?<?php ?>>/home/getmore/'+page,function(data){
								page++;
								$("#infolist").append(data);
								});
							//$("#infolist").after(tr);
							});
						});

				</script>


				<div class="box">
					<div class='box-header'>
						话题节点
					</div>
					<<?php ?>?php if(1==0){?<?php ?>>
					<div class="inner">
						<<?php ?>?php foreach ($catelist[0] as $v){?<?php ?>>
						<<?php ?>?php if(@$catelist[$v['cid']]){?<?php ?>>

						<ul class="list-inline">
							<li class="test-muted"><<?php ?>?php echo $v['cname']?<?php ?>></li>
							<<?php ?>?php foreach(@$catelist[$v['cid']] as $c){?<?php ?>>
							<li class="btn btn-default"><a href="<<?php ?>?php echo site_url($c['flist_url']);?<?php ?>>" class="startbbs"><<?php ?>?php echo $c['cname']?<?php ?>></a></li>
							<<?php ?>?php }?<?php ?>>
						</ul>
						<<?php ?>?php } else {?<?php ?>>
						<ul class="list-inline">
							<<?php ?>?php foreach((array)@$catelist[$v['cid']] as $c){?<?php ?>>
							<li class="tags"><a href="<<?php ?>?php echo site_url($v['flist_url']);?<?php ?>>" class="startbbs btn btn-default">cname</a></li>
							<<?php ?>?php }?<?php ?>>
						</ul>
						<<?php ?>?php }?<?php ?>>
						<<?php ?>?php }?<?php ?>>
					</div>
					<<?php ?>?php }?<?php ?>>

				</div>


			</div>

			<div class='col-xs-12 col-xs-12 col-sm-6 col-md-4' id='Rightbar'>
				<div class='box'>
					<div class='box-header'>
						comment status	
					</div>
					<div class='inner'>
						<table border='0' cellpadding='3' cellspacing='0' width='100%'>
							<tr>
								<td align='right' width='70'>
									<span class='gray'>new customer</span>
								</td>
								<td align='left'>
									<strong><<?php ?>?php echo $last_user['username']?<?php ?>></strong>
								</td>
							</tr>
							<tr>
								<td align='right' width='70'>
									<span class='gray'>register </span>
								</td>
								<td align='left'>
									<strong><<?php ?>?php echo $total_users?<?php ?>></strong>
								</td>
							</tr>
							<tr>
								<td align='right' width='70'>
									<span class='gray'>today topic</span>
								</td>
								<td align='left'>
									<strong><<?php ?>?php echo $today_forums;?<?php ?>></strong>
								</td>
							</tr>
							<tr>
								<td align='right' width='70'>
									<span class='gray'>topic num</span>
								</td>
								<td align='left'>
									<strong><<?php ?>?php echo $total_forums?<?php ?>></strong>
								</td>
							</tr>

							<tr>
								<td align='right' width='50'>
									<span class='gray'>replay</span>
								</td>
								<td align='left'>
									<strong></strong>
								</td>
							</tr>
						</table>
					</div>
				</div>


				<div class='box'>
					<div class='box-header'>
						frinds link
					</div>
					<div class="inner">
						<ul class="list_unstyled">
							<li style="width:0; height:0; overflow:hidden;"><a href="http://www.startbbs.com" target="_blank">StartBBS</a></li>
							<<?php ?>?php if($links){?<?php ?>>
							<<?php ?>?php foreach($links as $v){?<?php ?>>
							<<?php ?>?php if($v['is_hidden']==0){?<?php ?>>
							<li><a href="<<?php ?>?php echo $v['url'];?<?php ?>>" target="_blank"><<?php ?>?php echo $v['name'];?<?php ?>></a></li>
							<<?php ?>?php } else {?<?php ?>>
							<li>none</li>
							<<?php ?>?php } ?<?php ?>>
							<<?php ?>?php }?<?php ?>>
							<<?php ?>?php } else {?<?php ?>>
							<li>none</li>
							<<?php ?>?php }?<?php ?>>
						</ul>
					</div>
				</div>


			</div>
</div></div></div>
<?php }} ?>