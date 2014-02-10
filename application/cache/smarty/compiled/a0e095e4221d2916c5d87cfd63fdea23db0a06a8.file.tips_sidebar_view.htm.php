<?php /* Smarty version Smarty-3.1.14, created on 2014-01-20 17:39:04
         compiled from "application/views/tips_sidebar_view.htm" */ ?>
<?php /*%%SmartyHeaderCode:28871193552dceeb8c71c59-85618524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0e095e4221d2916c5d87cfd63fdea23db0a06a8' => 
    array (
      0 => 'application/views/tips_sidebar_view.htm',
      1 => 1390203462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28871193552dceeb8c71c59-85618524',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'top_tags' => 0,
    'sys_site_url' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52dceeb8c7bf80_67685464',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dceeb8c7bf80_67685464')) {function content_52dceeb8c7bf80_67685464($_smarty_tpl) {?>      <!--Sidebar-->
      <div class="span-tips-sidebar sidebar sidebar-right">
        <div class="inner">
          <div class="block">
            <div class="input-append">
            </div>
          </div>
          <div class="block">
            <h4 class="title-divider"><span>Tags</span></h4>
            <div class="tag-cloud">
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['top_tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                <span><a href="<?php echo $_smarty_tpl->tpl_vars['sys_site_url']->value;?>
tips/tag<?php echo $_smarty_tpl->tpl_vars['value']->value['tagsName'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['tagsName'];?>
</a> (<?php echo $_smarty_tpl->tpl_vars['value']->value['tagsCount'];?>
)</span>
                <?php } ?>
</div>
          </div>

          <div class="block"> <a href="#" class="btn btn-warning"><i class="icon-rss"></i> Subscribe via RSS feed</a> </div>
        </div>
      </div>
    </div>
  </div>
  <!--.container-->
</div>
<!--#content-->
<?php }} ?>