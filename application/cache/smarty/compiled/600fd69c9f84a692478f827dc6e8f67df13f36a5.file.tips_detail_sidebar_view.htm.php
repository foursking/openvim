<?php /* Smarty version Smarty-3.1.14, created on 2013-09-07 12:14:08
         compiled from "application/views/tips_detail_sidebar_view.htm" */ ?>
<?php /*%%SmartyHeaderCode:1117219145522aa810cc1f95-23686603%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '600fd69c9f84a692478f827dc6e8f67df13f36a5' => 
    array (
      0 => 'application/views/tips_detail_sidebar_view.htm',
      1 => 1378527113,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1117219145522aa810cc1f95-23686603',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tips_detail' => 0,
    'sys_site_url' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_522aa810e9e800_27810484',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522aa810e9e800_27810484')) {function content_522aa810e9e800_27810484($_smarty_tpl) {?>   <!--Sidebar-->

      <div class="span-tips-sidebar sidebar sidebar-right">
        <div class="inner">
          <div class="block">
<!-- <ul class="love-count">
<li> <strong>11</strong>"浏览数"</li>
<li> <strong>12</strong>"收藏数"</li>
</ul>
-->
<ul class="tag-list show-pop-tag">
<?php if (count($_smarty_tpl->tpl_vars['tips_detail']->value)!=0){?>
<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tips_detail']->value['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['sys_site_url']->value;?>
tips/tag<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</a></li>
<?php } ?>
<?php }?>
</ul>


          </div>
          <div class="block">
          </div>
          <div class="block">
          </div>
          <div class="block">  </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php }} ?>