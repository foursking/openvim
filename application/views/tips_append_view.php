<div id="content">
    <div class="container">
        <div class="row-fluid">

            <style>
h2{

display: block;
font-size: 1.5em;
-webkit-margin-before: 0.83em;
-webkit-margin-after: 0.83em;
-webkit-margin-start: 0px;
-webkit-margin-end: 0px;
font-weight: bold;
}

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

.post-parter { float: right; margin-top: 5px; color: #999; vertical-align: top; }
table { border-collapse: collapse; border-spacing: 0; }

.post-parter img { margin: 3px 10px 0 20px; }
.avatar-32 { width: 32px; height: 32px; }

.text-input{width:630px;padding:10px;}


.tips-comments{border:0px;background:white;padding:15px}
.tips-comments h1,.tips-comments h2,.tips-comments h3{line-height:1px}
.tips-comments code { padding: 2px 4px; color: #d14; background-color: #f7f7f9;border:1px solid #e1e1e8;white-space:nowrap;}

.form-action{text-align:right;padding:10px;}

.sidebar.sidebar-right .inner {
  border-left: 0px solid #e6e6e6;
}
.love-count,.tag-list{ display: block; -webkit-margin-before: 1em; -webkit-margin-after: 1em; -webkit-margin-start: 0px; -webkit-margin-end: 0px; -webkit-padding-start: 40px; }
.love-count,.tag-list{list-style-type:none;margin:0;padding:0;}
.love-count{margin-bottom:20px}


.love-count li:first-child{margin-left:0;padding-left:0;}
.love-count li{display:inline-block;color:#999;line-height:1.4;margin-left:20px;padding-left:21px;}
.love-count strong{display:block;font-size:18px;color:#333}

.tag-list li{margin-top:8px;}
.tag-list li a{display:inline-block;background:#fff;border:1px solid #e6e6e6;padding:0 8px;height:24px;line-height:24px;max-width:240px;overflow:hidden;color:#666;}
.tag-list li a:hover{color:#007349;text-decoration:none}


#tips-tag, .tips-tag-new, .newtagtitle{ cursor:default; line-height:18px; }
#tips-tag .common-search-list{margin:0}

#tips-tag .common-search-list li{font-size:14px;padding:0px;height:32px;line-height:32px;cursor:pointer;list-style-type:none;width:90%}

a.tag{display: inline-block;
background: #FFF;
border: 1px solid #e6e6e6;
padding: 0 8px;
height: 24px;
line-height: 24px;
max-width: 160px;
overflow: hidden;
color: #666;
}
a.tag:hover{
border-color: #BBB;
color: #999;
text-decoration: none;
}
.i-cancel {
display: inline-block;
width: 16px;
height: 16px;
text-align: left;
text-indent: -9999px;
background: transparent url(<?php echo base_url("public/img/action.png")?>) no-repeat 0 -16px;
}

.i-cancel:hover{background-position:0 -32px;}
.show-pop-tag{margin:0;padding:0;list-style-type:none}
.show-pop-tag li{margin:8px 0 8px 0;}

.required:before { content: '* '; color: #e20000; }
 </style>
        </div>

    <form action="http://dev.openvim.com/tips/append" method="post" accept-charset="utf-8">
        <div class="row">

            <!--Main Content-->
            <div class="span-tips-main blog-post">
                <div class="media-body" style="padding:0 0 0 50px">
                        <h2>添加新的Tips</h2>
                <div><input type="text" name="tips_title" class="input-xlarge text-input" /></div>
                  <?php if(!$this->session->userdata('is_login')){?>

                    <div class="wmd-panel">
                        <div style="border:1px solid #eee;padding:30px;text-align:center;background:rgba(255,255,255,0.75);">请先 <a href="#">登录</a> 后撰写评论</div>
                    </div>

                 <?php }else{?>
                    <div class="wmd-panel">
                        <div id="wmd-button-bar"></div>
                        <textarea class="wmd-input" id="wmd-input" autocomplete="off" spellcheck="false" name="tips_content" style="width:630px;height: 200px;"></textarea>
                    </div>
                  <div class="form-action">
<button class="btn btn-large btn-primary disabled" disabled="disabled" type="submit" style="font-size:15px;">添加Tips</button>
</div>

</form>
                    <div class="wmd-panel">
                    <div id="wmd-preview" class="wmd-panel wmd-preview"></div>
                    </div>
                <?php }?>
                </div>
        </div>

      <div class="span-tips-sidebar sidebar sidebar-right">

        <div class="inner">
          <div class="block">
            <h5 class="required">技巧标签</h5>

<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Modal header</h3>
  </div>
  <div class="modal-body">
    <p>One fine body…</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
    <button class="btn btn-primary">添加</button>
  </div>
</div>
             <ul class="show-pop-tag">
            </ul>
            <div class="input-append">
            <input id="tag-press" class="span2"  size="16" type="text">
            <a href="#"><span class="add-on"> > </span> </a>
          </div>

          <div class="block">
          </div>
          <div class="block">  </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div id="content-below" class="wrapper">

</div>


<script type="text/javascript">
var nowid;
var totalid;
var can1press = false;
var tagafter;
var tagbefor;
var presstag;
var canappendtag = true;
$(document).ready(function(){
    $("#tag-press").focus(function(){ //文本框获得焦点，插入tag提示层
        $("#tips-tag").remove();
        $(this).after("<div id='tips-tag' style='width:170px; height:auto; background:#fff; margin-top:6px;color:#6B6B6B; position:absolute; left:"+$(this).get(0).offsetLeft+"px; top:"+($(this).get(0).offsetTop+$(this).height()+2)+"px; border:1px solid #ccc;z-index:5px; '></div>");


        if($("#tips-tag").html()){
            $("#tips-tag").css("display","block");
            $(".tips-tag-new").css("width",$("#tips-tag").width());
            can1press = true;
        } else {
            $("#tips-tag").css("display","none");
            can1press = false;
        }
    });
    $("#tag-press").keyup(function(){ //文本框输入文字时，显示tag提示层和常用tag
        canappendtag = true;
        var press = $("#tag-press").val();
        if (press!="" || press!=null){
            var tagtxt = "";

            $.ajax({
                url :"<?php echo site_url('tips/show_tag');?>" ,
                    type : "post",
                    async:false,
                    data : {press:press},
                    success:function(data){
                        presstag = jQuery.parseJSON(data);
                    },
            });

            var tagvar = presstag.tag;
            totalid = tagvar.length;
            var tagtxt = "<ul class='common-search-list' style='display:block'>";
            if(totalid){
                for(var i=0; i<tagvar.length; i++) {
                    tagtxt += "<li class='tips-tag-new' style='padding:0 0 0 7px;' id='" + tagvar[i].tagsId + "'>" + tagvar[i] .tagsName+ "</li>";
                }
            }
            else{
                tagtxt += "<a href='#myModal' data-toggle='modal'><li class='tips-tag-new' style='padding:0 0 0 7px'>添加:"+ presstag.press +"</li></a>";
                canappendtag = false;
            }
            tagtxt += "</ul>";
            $("#tips-tag").html(tagtxt);
            if($("#tips-tag").html()){//判断#tips-tag 中有没有内容
                $("#tips-tag").css("display","block");
                $(".tips-tag-new").css("width",$("#tips-tag").width()-7);
                can1press = true;
            } else {
                $("#tips-tag").css("display","none");
                can1press = false;
            }
            beforepress = press;
        }
        if (press=="" || press==null){//如果input中没有输入
            $("#tips-tag").html("");
            $("#tips-tag").css("display","none");
        }
    })
        $(document).click(function(){ //文本框失焦时删除层
            if(can1press){
                $("#tips-tag").remove();
                can1press = false;
                if($("#tag-press").focus()){
                    can1press = false;
                }
            }
        })
            $(".tips-tag-new").live("mouseover",function(){ //鼠标经过提示tag时，高亮该条tag
                $(".tips-tag-new").css("background","#FFF");
                $(this).css("background","#ededed");
                $(this).focus();
                nowid = $(this).index();
            }).live("click",function(){ //鼠标点击tag时，文本框内容替换成该条tag，并删除提示层
                var newhtml = $(this).html();
                var tagid = $(this).attr('id');
                newhtml = newhtml.replace(/<.*?>/g,"");

                $(".show-pop-tag li").each(function(e){
                    if(newhtml == $(this).find(".tag").html()){
                        $(this).find(".tag").css("color" , "red");
                        canappendtag = false;
                    }

                });

                if(canappendtag){
                    $(".show-pop-tag").append('<li class="attachend"><a href="#" class="tag">' + newhtml + '</a> <a href="#" class="i-cancel" title="删除">✖</a><input type="hidden" name="tags[]" value="'+ tagid + '"></li>');
                    $("#tag-press").val("");
                    $("#tips-tag").remove();

                    if($(".show-pop-tag li").length >= 5){
                        $("#tag-press").attr("disabled",true);
                    }
                }else{
                    $("#tag-press").val("");


                }

            }).live("mouseout" , function(){
                $(".tips-tag-new").css("background" , "#FFF");
            });




    $(document).bind("keydown",function(e)
                    {
                        if(can1press){
                            switch(e.which)
                            {
                            case 38:
                                if (nowid > 0){
                                    $(".tips-tag-new").css("background","#FFF");
                                    $(".tips-tag-new").eq(nowid).prev().css("background","#CACACA").focus();
                                    nowid = nowid-1;
                                }
                                if(!nowid){
                                    nowid = 0;
                                    $(".tips-tag-new").css("background","#FFF");
                                    $(".tips-tag-new").eq(nowid).css("background","#CACACA");
                                    $(".tips-tag-new").eq(nowid).focus();
                                }
                                break;

                            case 40:
                                if (nowid < totalid){
                                    $(".tips-tag-new").css("background","#FFF");
                                    $(".tips-tag-new").eq(nowid).next().css("background","#CACACA").focus();
                                    nowid = nowid+1;
                                }
                                if(!nowid){
                                    nowid = 0;
                                    $(".tips-tag-new").css("background","#FFF");
                                    $(".tips-tag-new").eq(nowid).css("background","#CACACA");
                                    $(".tips-tag-new").eq(nowid).focus();
                                }
                                break;

                            case 13:
                                var newhtml = $(".tips-tag-new").eq(nowid).html();
                                newhtml = newhtml.replace(/<.*?>/g,"");
                                $("#tag-press").val(newhtml);
                                $("#tips-tag").remove();
                            }
                        }
                    })
})

$('.i-cancel').live('click', function(e) {
    $(this).parent().remove();
    if($(".show-pop-tag li").length < 5){
        $("#tag-press").attr('disabled' , false);
        $("#tag-press").focus();
    }
});

$(document).bind("click keydown keyup",function(e){

  if($(".show-pop-tag li").length < 1 || $("input[name=tips_title]").val() == '' || $("textarea[name=tips_content]").val() == ""){
        $("button[type=submit]").addClass("disabled").attr("disabled",true);
    }else{
        $("button[type=submit]").removeClass("disabled").attr("disabled",false);
    }


});




</script>
