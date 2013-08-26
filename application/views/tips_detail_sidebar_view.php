   <!--Sidebar-->
<style>
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



</style>
      <div class="span-tips-sidebar sidebar sidebar-right">
        <div class="inner">
          <div class="block">
                <ul class="love-count">
<li> <strong>11</strong>"浏览数"</li>
<li> <strong>12</strong>"收藏数"</li>
</ul>
<ul class="tag-list show-pop-tag">
<?php foreach($tips_detail['tags'] as $key=>$value):?>
<li><a href="#"><?php echo $value;?></a></li>
<?php endforeach;?>
</ul>


          </div>
          <div class="block">
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
