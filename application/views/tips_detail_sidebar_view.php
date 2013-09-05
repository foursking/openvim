   <!--Sidebar-->

      <div class="span-tips-sidebar sidebar sidebar-right">
        <div class="inner">
          <div class="block">
<!-- <ul class="love-count">
<li> <strong>11</strong>"浏览数"</li>
<li> <strong>12</strong>"收藏数"</li>
</ul>
-->
<ul class="tag-list show-pop-tag">
<?php if(is_array($tips_detail['tags']) && count($tips_detail['tags'])){
foreach($tips_detail['tags'] as $key=>$value):?>
<li><a href="<?php echo site_url("tips/tag") . '/' . $value?>"><?php echo $value;?></a></li>
<?php endforeach;};?>
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
