<?php /* Smarty version Smarty-3.1.14, created on 2013-09-08 22:31:48
         compiled from "application/views/tips_detail_view.htm" */ ?>
<?php /*%%SmartyHeaderCode:1239559507522c8713c31d33-37302600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a84edcce2a2bffd39d29843149f765cc79ccdb32' => 
    array (
      0 => 'application/views/tips_detail_view.htm',
      1 => 1378650706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1239559507522c8713c31d33-37302600',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_522c8714279c97_66843751',
  'variables' => 
  array (
    'tips_detail' => 0,
    'sys_base_url' => 0,
    'tips_comments' => 0,
    'value' => 0,
    'sys_site_url' => 0,
    'sys_session' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522c8714279c97_66843751')) {function content_522c8714279c97_66843751($_smarty_tpl) {?><div id="content">
    <div class="container">
        <div class="row-fluid">
<!--<div class="bread"><a href="">技巧</a> » 详情 </div> -->
            <h2 class="tips-top-title"><span class="de-em"><?php echo $_smarty_tpl->tpl_vars['tips_detail']->value['tipsTitle'];?>
></span></h2>
        </div>
        <div class="row">

            <!--Main Content-->
            <div class="span-tips-main blog-post">

                <!-- Blog post -->
                <div class="row-fluid" style="padding:15px">

          <ul class="tips-media-list">
 <li class="media row-fluid"> <a class="span1" href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['sys_base_url']->value;?>
public/img/team/jobs.jpg" alt="Picture of Tom" class="media-object img-polaroid" /> </a>
              <div class="span11" style="padding:5px">
                <ul class="inline meta muted" style="background:#f5f8fd;margin-bottom:10px;">
                  <li><i class="icon-calendar"></i> <span class="visible-desktop"></span>10天前</li>
                  <li><i class="icon-user"></i> <span class="visible-desktop">By</span> <a href="#">Jobs</a></li>
                </ul>
                <pre><?php echo $_smarty_tpl->tpl_vars['tips_detail']->value['tipsContent'];?>
</pre>
              </div>
            </li>
</ul>
                </div>


    <!--Comments-->
        <div class="comments" id="comments">

<?php if (count($_smarty_tpl->tpl_vars['tips_comments']->value)!=0){?>
 <h2>评论列表</h2>
<?php }?>
         <div style="padding:16px">
          <ul class="media-list">
<?php if (count($_smarty_tpl->tpl_vars['tips_comments']->value)!=0){?>

<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tips_comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
            <li class="media row-fluid"> <a class="span1" href="#"> <img src="<?php echo $_smarty_tpl->tpl_vars['sys_base_url']->value;?>
public/img/team/adele.jpg" alt="Picture of Dave" class="media-object img-polaroid" /> </a>
              <div class="span11" style="padding:5px">
                <ul class="inline meta muted" style="background:#f5f8fd">
                  <li><i class="icon-calendar"></i> <span class="visible-desktop"></span>2天前</li>
                  <li><i class="icon-user"></i> <span class="visible-desktop">By</span> <a href="#"><?php echo $_smarty_tpl->tpl_vars['value']->value['username'];?>
</a></li>
                </ul>
                <pre class="tips-comments"><?php echo $_smarty_tpl->tpl_vars['value']->value['content'];?>
</pre>
                </div>
                </li>
                <?php } ?>

                <?php }?>
            </ul>
        </div>
    </div>

    <div class="media-body" style="padding:0 0 0 50px">
        <h2>撰写评论</h2>
        <form action="<?php echo $_smarty_tpl->tpl_vars['sys_site_url']->value;?>
tips/comments" method="post" accept-charset="utf-8" >
        <?php if ($_smarty_tpl->tpl_vars['sys_session']->value['is_login']!=1){?>
        <div class="wmd-panel">
            <div style="border:1px solid #eee;padding:30px;text-align:center;background:rgba(255,255,255,0.75);">请先 <a href="#">登录</a> 后撰写评论</div>
        </div>
        <?php }else{ ?>
        <div class="wmd-panel">
            <div id="wmd-button-bar"></div>
            <textarea class="wmd-input" id="wmd-input" autocomplete="off" spellcheck="false" name="content" style="width:630px;height: 200px;"></textarea>
        </div>
        <div class="form-action">
            <button class="btn btn-large btn-primary" type="submit" style="font-size:15px;">提交评论</button>
            <input type="hidden" name="tips_id" value="<?php echo $_smarty_tpl->tpl_vars['tips_detail']->value['tipsId'];?>
" />
        </div>

        <div class="wmd-panel">
            <div id="wmd-preview" class="wmd-panel wmd-preview"></div>
        </div>
        <?php }?>
        </form>
        <div>
        </div>

</div>
        </div>
        <script src="<?php echo $_smarty_tpl->tpl_vars['sys_base_url']->value;?>
public/editor/js/Markdown.Converter.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['sys_base_url']->value;?>
public/editor/js/Markdown.Editor.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['sys_base_url']->value;?>
public/editor/js/Markdown.Sanitizer.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['sys_base_url']->value;?>
public/editor/js/textarearesizer.js"></script>

        <script type="text/javascript">
            /* jQuery textarea resizer plugin usage */
        $(document).ready(function() {
                $('textarea.wmd-input:not(.processed)').TextAreaResizer();
                });

(function () {
 var converter1 = Markdown.getSanitizingConverter();
 var editor1 = new Markdown.Editor(converter1);
 editor1.run();
 })();


$(function(){

        var markdownToHtml = new Markdown.Converter();
        $('.media-list pre').each(function(){
            var html = markdownToHtml.makeHtml($(this).html());
            $(this).html(html);
            })

        })




</script>
<?php }} ?>