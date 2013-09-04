<style>



</style>
<div id="content">
  <div class="container">
    <div class="row">
<div class="alert alert-info">
  <a class="close" data-dismiss="alert">×</a>
  <strong>Warning!</strong> Best check yo self, you're not looking too good.
</div>



<style>
ul.nav-tabs li.active{
  margin-top: -3px;
}
</style>
      <!--Blog Roll Content-->
      <div class="span-tips-main blog-roll blog-list">
<div>
  <ul class="nav nav-tabs">
  <li <?php if($sort_type == 'newest') echo 'class="active"';?>><a href="<?php echo site_url('tips/index')?>" class="all">最新</a></li>
  <li <?php if($sort_type == 'vote') echo 'class="active"';?>><a href="<?php echo site_url('tips/vote')?>" class="type-web">最热</a></li>
  </ul>

 <div class="input-append" style="float:right;margin-top:-60px;position:relative">
 <a href="<?php echo site_url("tips/append")?>"><button class="btn" type="button" style="margin-right:10px">+ 添加Tips</button></a>
    <input class="span2" id="appendedInputButton" type="text" placeholder="Search" />
    <a href="#"><span class="add-on"> > </span> </a>
 </div>

</div>
        <?php foreach($tips_generalize as $key=>$value):?>
        <!-- tips post -->
        <div class="media row-fluid">

          <div class="span12">

            <div class="media-body">

              <h4 class="title media-heading"><a href="<?php echo site_url("tips/post/{$value['tipsId']}")?>"><?php echo $value['tipsTitle'];?></a></h4>

              <!-- Meta details mobile -->
              <ul class="inline meta muted visible-phone">
                <li><i class="icon-calendar"></i> <span class="visible-desktop">Created:</span> Sun 20th Jan 2013</li>
                <li><i class="icon-user"></i> <a href="#">Alex</a></li>
              </ul>
              <!--<a href="blog-post.html" style="float:right;margin:-30px 0 0 5px;line-height:1;"> <img style="width:40px;height:40px;margin-bottom:10px"src="<?=base_url('public/img/avar/vim-logo.png')?>" alt="" /> </a> -->

              <div class="tags">
             <?php if(!empty($value['tags'])){ ?>
                <?php foreach($value['tags'] as $k=>$v): ?>
                    <a href="<?php echo site_url("tips/tag") . '/' .$v?>" class="type"><?php echo $v?></a> &nbsp;&nbsp;
                    <?php endforeach;};?>
              </div>
                <div class="tips-content" style="clear:both;margin-top:5px">
                <pre><?php echo $value['tipsContent'];?></pre>
                </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>



        <div class="pagination pagination-centered">
            <?php echo $this->pagination->create_links(); ?>
        </div>
      </div>
