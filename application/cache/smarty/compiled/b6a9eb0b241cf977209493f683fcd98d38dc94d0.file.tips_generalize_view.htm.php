<?php /* Smarty version Smarty-3.1.14, created on 2014-02-11 17:19:20
         compiled from "application/views/tips_generalize_view.htm" */ ?>
<?php /*%%SmartyHeaderCode:29757204252dceeb8c4e610-72719210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6a9eb0b241cf977209493f683fcd98d38dc94d0' => 
    array (
      0 => 'application/views/tips_generalize_view.htm',
      1 => 1392110349,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29757204252dceeb8c4e610-72719210',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52dceeb8c6e930_66798160',
  'variables' => 
  array (
    'sort_type' => 0,
    'sys_site_url' => 0,
    'tips_generalize' => 0,
    'value' => 0,
    'v' => 0,
    'pagination_link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dceeb8c6e930_66798160')) {function content_52dceeb8c6e930_66798160($_smarty_tpl) {?><style>



</style>
<div id="content">
  <div class="container">
    <div class="row">
<div class="alert alert-info">
  <a class="close" data-dismiss="alert">×</a>
  <strong>Warning!</strong> Best check yo self, you're not looking too good.
</div>
<style>
ul.nav-tabs li.active{
  margin-top: -3px;
}
</style>
      <!--Blog Roll Content-->

      <div class="span-tips-main blog-roll blog-list">
<!-- <div> -->
<!--   <ul class="nav nav-tabs"> -->
<!--       <li<?php if ($_smarty_tpl->tpl_vars['sort_type']->value=='newest'){?> class="active" <?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['sys_site_url']->value;?>
index" class="all">最新</a></li> -->
<!--       <li<?php if ($_smarty_tpl->tpl_vars['sort_type']->value=='vote'){?>   class="active" <?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['sys_site_url']->value;?>
vote" class="type-web">最热</a></li> -->
<!--   </ul> -->

<!--  <div class="input-append" style="float:right;margin-top:-60px;position:relative"> -->
<!--      <a href="<?php echo $_smarty_tpl->tpl_vars['sys_site_url']->value;?>
tips/append"><button class="btn" type="button" style="margin-right:10px"> + 添加Tips</button></a> -->
<!--     <input class="span2" id="appendedInputButton" type="text" placeholder="Search" /> -->
<!--     <a href="#"><span class="add-on"> > </span> </a> -->
<!--  </div> -->

</div>
        <!-- <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tips_generalize']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?> -->
        <!-- <1!-- tips post --1> -->
        <!-- <div class="media row-fluid"> -->

        <!--   <div class="span12"> -->

        <!--     <div class="media-body"> -->

        <!--         <h4 class="title media-heading"><a href="<?php echo $_smarty_tpl->tpl_vars['sys_site_url']->value;?>
post/<?php echo $_smarty_tpl->tpl_vars['value']->value['tipsId'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['tipsTitle'];?>
</a></h4> -->

        <!--       <1!-- Meta details mobile --1> -->
        <!--       <ul class="inline meta muted visible-phone"> -->
        <!--         <li><i class="icon-calendar"></i> <span class="visible-desktop">Created:</span> Sun 20th Jan 2013</li> -->
        <!--         <li><i class="icon-user"></i> <a href="#">Alex</a></li> -->
        <!--       </ul> -->
        <!--       <div class="tags"> -->

<!-- <?php if (count($_smarty_tpl->tpl_vars['value']->value['tags'])!=0){?> -->
<!-- <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value']->value['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?> -->
<!-- <a href="<?php echo $_smarty_tpl->tpl_vars['sys_site_url']->value;?>
tag/<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" class="type"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a> &nbsp;&nbsp; -->
<!-- <?php } ?> -->
<!-- <?php }?> -->
        <!--       </div> -->
        <!--         <div class="tips-content" style="clear:both;margin-top:5px"> -->
        <!--         <pre><?php echo $_smarty_tpl->tpl_vars['value']->value['tipsContent'];?>
</pre> -->
        <!--         </div> -->
        <!--     </div> -->
        <!--   </div> -->
        <!-- </div> -->
        <!-- <?php } ?> -->




<div class="topic topic-cell">
  <div class="pull-left avatar">
    <a href="/parkman"><img alt="Cd33f2b1bd3c14cf5e9a39e844639e4d" class="uface" src="http://ruby-china.org/avatar/cd33f2b1bd3c14cf5e9a39e844639e4d.png?s=96&amp;d=404" style="width:48px;height:48px;"></a>
  </div>
  <div class="right_info">
    <div class="pull-right replies">
        <a class="count state_false" href="/topics/17171#reply1">1</a>
    </div>
    <div class="infos">
      <div class="title">
        <a href="/topics/17171" title="Ruby on Rails open source Project">Ruby on Rails open source Project</a>
        
      </div>
      <div class="info">
        <a class="node" href="/topics/node47">开源项目</a>
        •
        <a data-name="parkman" href="/parkman">parkman</a>
        <em>
          •
            最后由 <a data-name="ywjno" href="/ywjno">ywjno</a> 于<abbr class="timeago" title="2014-02-11T16:24:56+08:00">11分钟前</abbr>回复
        </em>
      </div>
    </div>


        <div class="pagination pagination-centered">
            <?php echo $_smarty_tpl->tpl_vars['pagination_link']->value;?>

        </div>
      </div>
<?php }} ?>