<style>

#register-welcome-form {
width: 400px;
padding: 0 30px 0 0;
float: left;
}

.well{
background-color:#fff;
border:0px;


}

.well-form {
    max-width: 680px;
    height:200px;
    padding:30px;
	margin: 0 auto;
}
.well-form .form-actions {
    padding: 19px 0;
}
.well-form .form-actions label {
    display: inline-table;
    float: left;
    margin-top: 5px;
}
.well-form .form-actions button {
    float: right;
}
.well-form .form-extra {
    text-align: center;
}
.well-form .form-extra button {
    margin-bottom: 5px;
}

.form-actions{
margin-top: 20px;
margin-bottom: 20px;
padding:0px 10px 0px 10px;
border:0px;
background-color:#fff;

}

.slug{
margin: 15px 0 15px;
color: #666;
font-size: 18px;
font-weight: normal;
}

.text-34{
font-size: 16px;
padding: 9px 6px;
background: #FFF;
border: 1px solid #c6c6c6;
width: 96%;
height:30px;
-webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1),0 1px 0 rgba(255,255,255,0.5);
-moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1),0 1px 0 rgba(255,255,255,0.5);
box-shadow: inset 0 1px 2px rgba(0,0,0,0.1),0 1px 0 rgba(255,255,255,0.5);
}


</style>

<div id="content">
	  <div class="container">
		    <div class="well-form">
              <h1 class="slug">登陆</h3>
<?php echo form_open('login/index' , array('id'=>'register-welcome-form'))?>
		        <div class="control-group">
					<input type="text" name="login_email" placeholder="Email地址" class="text-34" style="height:30px" required="" />
			    </div>
		        <div class="control-group">
					<input type="password" name="login_password" placeholder="登陆密码" class="text-34" style="height:30px" required="" data-validation-matches-match="pass" data-validation-matches-message="Must match password entered above" />
			    </div>
             <div class="form-actions">
                <span>
                </span>
			      <button class="btn btn-primary" type="submit">登陆</button>
                </div>
              </form>
	  </div>
</div>
