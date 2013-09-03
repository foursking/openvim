
<div id="content">
	  <div class="container">
		    <div class="well-form">
              <h1 class="slug">注册</h3>
<?php echo form_open('user/register' , array('id'=>'register-welcome-form'))?>
		        <div class="control-group">
					<input type="text" name="register_email" placeholder="Email地址" class="text-34" style="height:30px" required="" />
			    </div>
		        <div class="control-group">
					<input type="password" name="register_password" placeholder="登陆密码" class="text-34" style="height:30px" required="" data-validation-matches-match="pass" data-validation-matches-message="Must match password entered above" />
			    </div>
              <div class="control-group">
		          <div class="controls">
					<input type="text" name="register_username" placeholder="常用名" class="text-34" style="height:30px" required="" data-validation-matches-match="pass" data-validation-matches-message="Must match password entered above" />
				  </div>
			    </div>
             <div class="form-actions">
                <span>
                </span>
			      <button class="btn btn-primary" type="submit">注 册</button>
                </div>
              </form>
		      <div class="form-extra">
                <h3 class="slug">推荐使用第三方登陆</h3>
			    <button class="btn btn-info"><i class="glyphicons-twitter"></i> Login with Twitter</button>
			    <button class="btn btn-danger"><i class="glyphicons-google_plus"></i> Login with Google</button>
			  </div>
		               </div>
	  </div>
</div>
