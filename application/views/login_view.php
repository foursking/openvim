
<div id="content">
    <div class="container">
        <div class="well-form">
            <h1 class="slug">登陆</h3>
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






<script>
    $(document).ready(function(){

        var $input = $("input");
        for(var i=0;i < $input.length ; i++){
            $input[i].oninvalid = function(e){
                e.target.setCustomValidity('表单不能为空');
            }
        }

        var $login_email = $("input[name='login_email']");
        var $login_password = $("input[name='login_password']");
        var $login_submit = $("#btn-primary");




        $("button[type=submit]").bind("click", function(){
            //验证邮箱地址
            if($login_email.val().length < 1){
                //验证邮箱不能为空
                $login_email.next().html('邮箱不能为空');

                }else if(!$login_email.val().match(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/)){
                //验证是否符合邮箱
                $login_email.next().html('邮箱格式不正确');

                }else if($login_password.val().length < 1){
                //验证密码不能为空
                $login_password.next().html('密码不能为空');

                }else{

                $(this).button('loading');

                $.ajax({
                    url :"<?php echo site_url('login/index');?>" ,
                    type : "post",
                    async:false,
                    data : {login_email:$login_email.val(),login_password:$login_password.val()},
                    success:function(data){
                    var jsonObj = eval('('+ data +')');
                        if(jsonObj.login_flag == true)
                        location.href = "<?php echo site_url('tips/index')?>"
                        else
                        location.href = "<?php echo site_url('login/index')?>"





                    }
                });
            }

            return false;
        });



        $login_email.bind("focus" , function(){
            $login_email.next().html('');
        });

        $login_password.bind("focus" , function(){
            $login_password.next().html('');
        });


    })
</script>
