<?php /* Smarty version Smarty-3.1.14, created on 2014-01-28 17:46:37
         compiled from "application/views/login_view.htm" */ ?>
<?php /*%%SmartyHeaderCode:5335152052e77c7d657531-21424311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adc7053d4a252b17de10fa1ab9cc7416408d5642' => 
    array (
      0 => 'application/views/login_view.htm',
      1 => 1390203462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5335152052e77c7d657531-21424311',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52e77c7d6a0288_49582471',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e77c7d6a0288_49582471')) {function content_52e77c7d6a0288_49582471($_smarty_tpl) {?>
<div id="content">
    <div class="container">
        <div class="well-form">
            <h1 class="slug">登陆</h3>
         <form action="#" method="post" accept-charset="utf-8" id="register-welcome-form" >
            <div class="control-group" style="position:relative">
                <input type="text" name="login_email" placeholder="登陆邮箱"  class="text-34" style="height:30px" required="" />
                <span class="text-error"></span>
            </div>
            <div class="control-group" style="position:relative">
                <input type="password" name="login_password" placeholder="登陆密码" class="text-34" style="height:30px" required="" data-validation-matches-match="pass" data-validation-matches-message="Must match password entered above" />
                <span class="text-error"></span>
            </div>
            <div class="form-actions">
                <span>
                </span>
                <button class="btn btn-primary" data-loading-text="登陆中..." id="login-submit" type="submit" autocomplete="off">登陆</button>
            </div>
        </form>
    </div>
</div>
<?php }} ?>