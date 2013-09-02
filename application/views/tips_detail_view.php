<div id="content">
    <div class="container">
        <div class="row-fluid">

            <style>
#content{width:978px;margin-left:auto;margin-right:auto}
.tags{text-transform: lowercase; margin-bottom:8px;margin-top:8px}
.media-body{padding:15px 10px;}
.media-body .tags a{background:##44857b;padding:2px 8px;-moz-border-radius:2px;-webkit-border-radius:2px;border-radius:2px;color:#000;}
.tags a:link,.tags a:visited,.tags a:hover{padding:2px 8px;background:#F2F2F2;color:#336699;font-size:11px;text-decoration:none;}
.media-body .tags a:hover{background:#faa732;padding:2px 8px;-moz-border-radius:2px;-webkit-border-radius:2px;border-radius:2px;color:#f5f5f5;}
.media-body .title a{color:#333}
.media-body .title a:hover, .media-body .title a:visited{color:#55a79a;text-decoration:none}
.blog-roll .media{padding-bottom:0px}


.tips-top-title{ margin: 0 0 1em; padding-bottom: .73em; display: block; -webkit-margin-before: 0.67em; -webkit-margin-after: 0.67em; -webkit-margin-start: 0px; -webkit-margin-end: 0px; font-weight: bold; border-bottom: 1px solid #DDD; -webkit-box-shadow: 0 1px 0 #f3f3f3; -moz-box-shadow: 0 1px 0 #f3f3f3; box-shadow: 0 1px 0 #f3f3f3; font-size: 1.85em; }

.tips-media-list{margin-left:0;list-style:none;}

.bread{color:#999; margin:0 0 1em; }

.post-parter {
float: right;
margin-top: 5px;
color: #999;
vertical-align: top;
}
table {
border-collapse: collapse;
border-spacing: 0;
}

.post-parter img {
margin: 3px 10px 0 20px;
}
.avatar-32 {
width: 32px;
height: 32px;
}


.tips-comments{border:0px;background:white;padding:15px}
.tips-comments h1,.tips-comments h2,.tips-comments h3{line-height:1px}
.tips-comments code { padding: 2px 4px; color: #d14; background-color: #f7f7f9;border:1px solid #e1e1e8;white-space:nowrap;}

.form-action{text-align:right;padding:10px;}


 </style>
<!--<div class="bread"><a href="">技巧</a> » 详情 </div> -->
            <h2 class="tips-top-title"><span class="de-em"><?php echo $tips_detail['tipsTitle'];?></span></h2>
        </div>
        <div class="row">

            <!--Main Content-->
            <div class="span-tips-main blog-post">

                <!-- Blog post -->
                <div class="row-fluid" style="padding:15px">

          <ul class="tips-media-list">
 <li class="media row-fluid"> <a class="span1" href="#"><img src="<?php echo base_url("public/img/team/jobs.jpg")?>" alt="Picture of Tom" class="media-object img-polaroid" /> </a>
              <div class="span11" style="padding:5px">
                <ul class="inline meta muted" style="background:#f5f8fd">
                  <li><i class="icon-calendar"></i> <span class="visible-desktop"></span>10天前</li>
                  <li><i class="icon-user"></i> <span class="visible-desktop">By</span> <a href="#">Jobs</a></li>
                </ul>
                <pre class="tips-comments"><?php echo $tips_detail['tipsContent'];?></pre>
              </div>
            </li>
</ul>



                </div>


    <!--Comments-->
        <div class="comments" id="comments">
<?php if(is_array($tips_comments)){?> <h2>评论列表</h2> <?php }?>
         <div style="padding:16px">
          <ul class="media-list">
        <?php if(is_array($tips_comments)){foreach($tips_comments as $key=>$value):?>
            <li class="media row-fluid"> <a class="span1" href="#"> <img src="<?php echo base_url('public/img/team/adele.jpg')?>" alt="Picture of Dave" class="media-object img-polaroid" /> </a>
              <div class="span11" style="padding:5px">
                <ul class="inline meta muted" style="background:#f5f8fd">
                  <li><i class="icon-calendar"></i> <span class="visible-desktop"></span>2天前</li>
                  <li><i class="icon-user"></i> <span class="visible-desktop">By</span> <a href="#"><?php echo $value['username']?></a></li>
                </ul>
                <pre class="tips-comments"><?php echo $value['content']?></pre>
              </div>
            </li>
       <?php endforeach;}?>

          </ul>
      </div>
        </div>

                <div class="media-body" style="padding:0 0 0 50px">
                        <h2>撰写评论</h2>
                  <?php if(!$this->session->userdata('is_login')){?>
                    <div class="wmd-panel">
                        <div style="border:1px solid #eee;padding:30px;text-align:center;background:rgba(255,255,255,0.75);">请先 <a href="#">登录</a> 后撰写评论</div>
                    </div>

                 <?php }else{?>
<?php echo form_open('tips/comments' , array('id'=>'register-welcome-form'))?>
                    <div class="wmd-panel">
                        <div id="wmd-button-bar"></div>
                        <textarea class="wmd-input" id="wmd-input" autocomplete="off" spellcheck="false" name="content" style="width:630px;height: 200px;"></textarea>
                    </div>
                  <div class="form-action">
<button class="btn btn-large btn-primary" type="submit" style="font-size:15px;">提交评论</button>
<input type="hidden" name="tips_id" value="<?php echo $tips_detail['tipsId'];?>" />
</div>

                    <div class="wmd-panel">
                    <div id="wmd-preview" class="wmd-panel wmd-preview"></div>
                    </div>
                <?php }?>
                 <div>
                </div>

                <input type="hidden" name="tips_id" value="<?php echo $tips_detail['tipsId'];?>" />

                </form>
                </div>
        </div>
