<?php /* Smarty version Smarty-3.1.14, created on 2014-02-14 17:39:12
         compiled from "application/views/view.htm" */ ?>
<?php /*%%SmartyHeaderCode:49265285252fdce24b87117-56200063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '953c497b3368ddd4844baa09e5f85bfb3e790eb4' => 
    array (
      0 => 'application/views/view.htm',
      1 => 1392370747,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49265285252fdce24b87117-56200063',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52fdce24bca276_90157336',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52fdce24bca276_90157336')) {function content_52fdce24bca276_90157336($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<title><<?php ?>?php echo $content['title']?<?php ?>> - <<?php ?>?php echo $settings['site_name']?<?php ?>></title>
<meta charset='UTF-8'>
<meta content='True' name='HandheldFriendly'>
<meta content='width=device-width, initial-scale=1.0' name='viewport'>
<meta name="keywords" content="<<?php ?>?php echo $content['keywords']?<?php ?>>" />
<meta name="description" content="<<?php ?>?php echo $content['description'];?<?php ?>>" />
<?php echo $_smarty_tpl->getSubTemplate ('header-meta.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</head>
<body id="startbbs" name="top">

<div id="wrap"><div class="container" id="page-main"><div class="row"><div class='col-xs-12 col-sm-6 col-md-8'>
				<div class='box'>
					<article>
						<div class='header'>
							<div class='pull-right'>
								<a href="#" class="profile_link" title="title">
									<img alt="# medium avatar" class="medium_avatar" src="src" />
								</div>
								<p><a href="#">首页</a> <span class="text-muted">/</span> <a href="#">cname</a></p>
								<h1 id='topic_title'>
									title
								</h1>
								<small class='topic-meta'>
									By
									<a href="#" class="dark startbbs profile_link" title="#">username</a>
									at
									a,
									200次浏览 • 400人收藏

									• <a href="#reply_content">回复</a> • 
									<a href="#" title="点击收藏">收藏</a>
								</small>
							</div>
							<div class='inner'>
								<div class='content topic_content'>content</div>
								<p class="tag">
								<a href='#'>tags</a>&nbsp;
								</p>
							</div>
							<div class='inner'>
								<a href="#" class="btn btn-default btn-sm unbookmark" data-method="edit" rel="nofollow">编辑此贴</a>
								<a href="#" class="btn btn-sm btn-danger" data-method="edit" rel="nofollow">删除</a>
								<a href="#" class="btn btn-default btn-sm unbookmark" data-method="edit" rel="nofollow">
									取消置顶
								</a>
								<div align='right' class='pull-right'>
									<!--<a href="/topics/187/bookmarks" class="btn btn-xs bookmark" data-method="post" rel="nofollow">加入收藏</a>-->
								</div>
								&nbsp;&nbsp;
							</div>
						</article>
					</div>

					<section>
						<div class='box'>
							<div class='box-header'>
								<div class='pull-right'>
									<a href="#reply" class="dark jump_to_comment">跳到回复</a>
								</div>
								<span id="comments">
									comments</span> 回复
							</div>
							<div class='fix_cell' id='saywrap'>
								<div id="clist">
									<article>
										<div class='cell hoverable reply' id='comment_988'>
											<table border='0' cellpadding='0' cellspacing='0' width='100%'>
												<tr>
													<td valign='top' width='48'>
														<a href="" class="profile_link" title="">
															<img alt="" class="medium_avatar" src="#" />
														</a>
													</td>
													<td width='10'></td>
													<td valign='top' width='auto'>
														<div class='pull-right'>
															<span class='snow' id="r1"> #11 <a href="#reply" class="clickable startbbs"  data-mention="username" onclick="replyOne('username');">回复</a></span>
														</div>
														<a href="#" class="dark startbbs profile_link" title="">username</a>
														<span class="snow">&nbsp;&nbsp;time</span>
														<div class='sep5'></div>
														<div class='content reply_content'>content</div>
														<div class="pull-right">
															<a href="#" class="danger snow"><span class="glyphicon glyphicon-remove-sign"></span>删除</a>
															<a href="#" class="danger snow"><span class="glyphicon glyphicon-remove-sign"></span>编辑</a>
														</div>
													</td>
												</tr>
											</table>
										</div>
									</article>
								</div>

								<div class='center'>
									<ul class='pagination'>
										
									</ul>
								</div>
							</div>
						</div>
					</section>

					<a name='reply'></a>

					<div class='box'>
						<div class='box-header'>
							<div class='pull-right'>
								<a href="#top" class="dark back_to_top">to top</a>
							</div>
							append one comment
						</div>
						<div class='inner row'>
							<input name="utf8" type="hidden" value="&#x2713;" />
							<input name="authenticity_token" type="hidden" value="b9p2+DhdHWTAHdRMrexpe7XxI2HxTaX7MaUKEaQiUsY=" />
							<input name="fid" id="fid" type="hidden" value="" />
							<input name="is_top" id="is_top" type="hidden" value="<<?php ?>?php echo $content['is_top']?<?php ?>>" />
							<input name="username" id="username" type="hidden" value="<<?php ?>?php echo $user['username']?<?php ?>>" />
							<input name="avatar" id="avatar" type="hidden" value="<<?php ?>?php echo base_url($user['middle_avatar'])?<?php ?>>" />

							<ul class="nav nav-tabs" style="margin-left: 15px; margin-right: 15px;border-bottom: 0px solid #999;height:20px">
								<li class="active"><a style="background-color: #eee;" href="#">edit</a></li>
								<li class="pull-right">
								<span id='upload-tip' class="btn btn-default" value="图片/附件">upload images</span>
								<input id="upload_tip" type="button" value="image"  class="btn btn-default">
								<!--	<input type="button" onclick="doUpload()" value="图片/附件"  class="btn btn-default">-->
								</li>
							</ul>
							<div class="form-group">
								<div class="col-md-12" id="textContain">
									<textarea class="form-control" id="reply_content" name="comment" rows="5"></textarea>
									<span class='text-muted' style="float:right">tips</span>
							</div></div>
							<div class="col-sm-9">
								<input class="btn btn-primary" data-disable-with="正在提交" type="submit" id="comment-submit" value="发送" />
								<small class='gray'>(1024)</small>
								<span id="msg"></span>
							</div>
							<!-- </form>-->
							<div style="text-align: center;">
								<p><a class="btn btn-default" href="<<?php ?>?php echo site_url('user/login');?<?php ?>>">login & cumbit</a></p>
								<p><a href="<<?php ?>?php echo site_url('user/reg');?<?php ?>>">no account yet? register one</a></p>
							</div>
						</div>
					</div>



				</div>
				<div class='col-xs-12 col-sm-6 col-md-4' id='Rightbar'>
				</div>
	</div></div></div>
<?php }} ?>