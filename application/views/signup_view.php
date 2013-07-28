<style>

#signup-welcome-form {
width: 340px;
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
	    <div class="row">
		    <div class="well well-form txt-lefty">
			  <form id="signup-welcome-form"/>
		        <div class="control-group">
					<input type="text" name="fname" placeholder="Email地址" class="text-34" style="height:30px" required="" />
			    </div>
		        <div class="control-group">
					<input type="password" name="pass" placeholder="登陆密码" class="text-34" style="height:30px" required="" data-validation-matches-match="pass" data-validation-matches-message="Must match password entered above" />
			    </div>
              <div class="control-group">
		          <div class="controls">
					<input type="password" name="passagain" placeholder="常用名用户名" class="text-34" style="height:30px" required="" data-validation-matches-match="pass" data-validation-matches-message="Must match password entered above" />
				  </div>
			    </div>
             <div class="form-actions">
                <span>
                   同意服务条款
                </span>
			      <button class="btn btn-primary" type="submit">Sign Up</button>
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
</div>
