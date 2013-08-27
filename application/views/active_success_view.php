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



.text-center{ text-align:center; }


.well-form p{
font-size: 20px;
line-height: 1.7;
color: #666;
margin: 40px 0 0;
}
</style>

<div id="content">
	  <div class="container">
		    <div class="well-form text-center">
            <h1><?php echo $title;?></h1>
            <p><?php echo $message;?></p>
            <br/>
            <p><?php echo $action;?></p>
            </div>
	  </div>
</div>
