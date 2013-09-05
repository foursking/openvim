
<div id="content">
    <div class="container">
        <div class="well-form">
            <h1 class="slug">登陆</h3>
         <form action="#" method="post" accept-charset="utf-8" id="register-welcome-form" >
            <?php echo form_open('login/index' , array('id'=>'register-welcome-form'))?>
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
