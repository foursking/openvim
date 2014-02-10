<?php /* Smarty version Smarty-3.1.14, created on 2014-01-20 17:39:04
         compiled from "application/views/footer_view.htm" */ ?>
<?php /*%%SmartyHeaderCode:122239070952dceeb8c7e304-40091062%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73104fc3e1d6d0e6b5c5cbc749cdbe2908553b80' => 
    array (
      0 => 'application/views/footer_view.htm',
      1 => 1390203462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122239070952dceeb8c7e304-40091062',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sys_base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52dceeb8c93307_19484463',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dceeb8c93307_19484463')) {function content_52dceeb8c93307_19484463($_smarty_tpl) {?><!-- FOOTER -->
<footer id="footer">
  <div class="container">
    <div class="row">
            <dl class="site-link">
                    <dt>常用链接</dt>
                    <dd>开发日志</dd>
                    <dd>开发日志</dd>
                    <dd>开发日志</dd>
            </dl>
   <dl class="site-link">
                    <dt>常用链接</dt>
                    <dd>开发日志</dd>
                    <dd>开发日志</dd>
                    <dd>开发日志</dd>
            </dl>
   <dl class="site-link">
                    <dt>关注我们</dt>
                    <dd>新浪微博</dd>
                    <dd>V2ex</dd>
                    <dd>github</dd>
                    <dd>腾讯微博</dd>
            </dl>
   <dl class="site-link">
                    <dt>常用链接</dt>
                    <dd>开发日志</dd>
                    <dd>开发日志</dd>
                    <dd>开发日志</dd>
            </dl>


    </div>
  </div>
</footer>

<!--Scripts -->

<!-- @todo: remove unused Javascript for better performance -->
<script src="<?php echo $_smarty_tpl->tpl_vars['sys_base_url']->value;?>
public/js/bootstrap-transition.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['sys_base_url']->value;?>
public/js/bootstrap-alert.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['sys_base_url']->value;?>
public/js/bootstrap-affix.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['sys_base_url']->value;?>
public/js/bootstrap-modal.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['sys_base_url']->value;?>
public/js/bootstrap-dropdown.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['sys_base_url']->value;?>
public/js/bootstrap-scrollspy.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['sys_base_url']->value;?>
public/js/bootstrap-tab.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['sys_base_url']->value;?>
public/js/bootstrap-tooltip.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['sys_base_url']->value;?>
public/js/bootstrap-popover.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['sys_base_url']->value;?>
public/js/bootstrap-button.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['sys_base_url']->value;?>
public/js/bootstrap-collapse.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['sys_base_url']->value;?>
public/js/bootstrap-carousel.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['sys_base_url']->value;?>
public/js/bootstrap-typeahead.js"></script>

<!--Non-Bootstrap JS-->
<script src="<?php echo $_smarty_tpl->tpl_vars['sys_base_url']->value;?>
public/js/jquery.quicksand.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['sys_base_url']->value;?>
public/js/jquery.flexslider-min.js"></script>

<!--Custom scripts mainly used to trigger libraries -->
<script src="<?php echo $_smarty_tpl->tpl_vars['sys_base_url']->value;?>
public/js/script.js"></script>










<script>
	var base_url = 'http://dev.openvim.com/';
	$(function(){
		$('.tips-content pre').each(function(){
			$(this).addClass('prettyprint');
		});

		$('.tips-media-list pre').each(function(){
			$(this).addClass('prettyprint');
		});

        $('.media-list pre pre').each(function(){
            $(this).addClass('prettyprint');
        });
		prettyPrint();
	});

</script>



</body>
</html>
<?php }} ?>