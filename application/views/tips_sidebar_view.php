      <!--Sidebar-->
      <div class="span-tips-sidebar sidebar sidebar-right">
        <div class="inner">
          <div class="block">
            <div class="input-append">
            </div>
          </div>
          <div class="block">
            <h4 class="title-divider"><span>Tags</span></h4>
            <div class="tag-cloud">
            <?php foreach($top_tags as $key=>$value):?>
            <span><a href="<?php echo site_url("tips/tag") . '/' . $value['tagsName']?>"><?php echo $value['tagsName'] ;?></a> (<?php echo $value['tagsCount']?>)</span>
            <?php endforeach;?>
</div>
          </div>

          <div class="block"> <a href="#" class="btn btn-warning"><i class="icon-rss"></i> Subscribe via RSS feed</a> </div>
        </div>
      </div>
    </div>
  </div>
  <!--.container-->
</div>
<!--#content-->
