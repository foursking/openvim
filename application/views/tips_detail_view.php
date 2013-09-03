<div id="content">
    <div class="container">
        <div class="row-fluid">

            <style>

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
                <ul class="inline meta muted" style="background:#f5f8fd;margin-bottom:10px;">
                  <li><i class="icon-calendar"></i> <span class="visible-desktop"></span>10天前</li>
                  <li><i class="icon-user"></i> <span class="visible-desktop">By</span> <a href="#">Jobs</a></li>
                </ul>
                <pre><?php echo $tips_detail['tipsContent'];?></pre>
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
<?php echo form_open('tips/comments')?>
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
<script src="<?=base_url('public/editor/js/Markdown.Converter.js')?>"></script>
<script src="<?=base_url('public/editor/js/Markdown.Editor.js')?>"></script>
<script src="<?=base_url('public/editor/js/Markdown.Sanitizer.js')?>"></script>
<script src="<?=base_url('public/editor/js/textarearesizer.js')?>"></script>

 <script type="text/javascript">
            /* jQuery textarea resizer plugin usage */
            $(document).ready(function() {
                $('textarea.wmd-input:not(.processed)').TextAreaResizer();
            });
  </script>


        <script type="text/javascript">
            (function () {
                var converter1 = Markdown.getSanitizingConverter();
                var editor1 = new Markdown.Editor(converter1);
                editor1.run();
            })();
        </script>

<script text="text/javascript">

$(function(){

    var markdownToHtml = new Markdown.Converter();
    $('.media-list pre').each(function(){
        var html = markdownToHtml.makeHtml($(this).html());
        $(this).html(html);
    })

})




</script>
