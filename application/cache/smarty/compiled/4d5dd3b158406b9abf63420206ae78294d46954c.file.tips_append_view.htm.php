<?php /* Smarty version Smarty-3.1.14, created on 2014-01-20 17:39:10
         compiled from "application/views/tips_append_view.htm" */ ?>
<?php /*%%SmartyHeaderCode:68214504552dceebe37b0b4-93931984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d5dd3b158406b9abf63420206ae78294d46954c' => 
    array (
      0 => 'application/views/tips_append_view.htm',
      1 => 1390203462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68214504552dceebe37b0b4-93931984',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sys_session' => 0,
    'sys_base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52dceebe38c9a2_61054197',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dceebe38c9a2_61054197')) {function content_52dceebe38c9a2_61054197($_smarty_tpl) {?><div id="content">
    <div class="container">
        <div class="row-fluid">

        </div>

    <form action="http://dev.openvim.com/tips/append" method="post" accept-charset="utf-8">
        <div class="row">

            <!--Main Content-->
            <div class="span-tips-main blog-post">
                <div class="media-body" style="padding:0 0 0 50px">
                        <h2>添加新的Tips</h2>
                <div><input type="text" name="tips_title" class="input-xlarge text-input" /></div>
                 <?php if ($_smarty_tpl->tpl_vars['sys_session']->value['is_login']==1){?>
                    <div class="wmd-panel">
                        <div style="border:1px solid #eee;padding:30px;text-align:center;background:rgba(255,255,255,0.75);">请先 <a href="#">登录</a> 后撰写评论</div>
                    </div>
                   <?php }else{ ?>
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
    <h3 id="myModalLabel">添加tag</h3>
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

<script src="<?php echo $_smarty_tpl->tpl_vars['sys_base_url']->value;?>
public/editor/js/Markdown.Converter.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['sys_base_url']->value;?>
public/editor/js/Markdown.Editor.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['sys_base_url']->value;?>
public/editor/js/Markdown.Sanitizer.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['sys_base_url']->value;?>
public/editor/js/textarearesizer.js"></script>

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
                url :"<<?php ?>?php echo site_url('tips/show_tag');?<?php ?>>" ,
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
                tagtxt += "<a href='#myModal' data-toggle='modal'><li class='tips-tag-new' style='padding:0 0 0 7px'>暂无:"+ presstag.press +"</li></a>";
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
                newhtml = newhtml.replace(/<.*?<?php ?>>/g,"");

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
                                newhtml = newhtml.replace(/<.*?<?php ?>>/g,"");
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

$($(document).bind("click keydown keyup",function(e){

  if($(".show-pop-tag li").length < 1 || $("input[name=tips_title]").val() == '' || $("textarea[name=tips_content]").val() == ""){
        $("button[type=submit]").addClass("disabled").attr("disabled",true);
    }else{
        $("button[type=submit]").removeClass("disabled").attr("disabled",false);
    }


}));




</script>
<?php }} ?>