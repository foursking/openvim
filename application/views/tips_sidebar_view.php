      <!--Sidebar-->
      <div class="span-tips-sidebar sidebar sidebar-right">
        <div class="inner">
          <div class="block">
            <div class="input-append">
              <input class="span2" id="appendedInputButton" type="text" placeholder="Search" />
              <button class="btn" type="button">Go!</button>
            </div>
          </div>
          <div class="block">
            <h4 class="title-divider"><span>Tags</span></h4>
            <div class="tag-cloud">
            <?php foreach($top_tags as $key=>$value):?>
            <span><a href="#"><?php echo $value['tagsName'] ;?></a> (<?php echo $value['tagsCount']?>)</span>
            <?php endforeach;?>
</div>
          </div>
          <div class="block">
            <h4 class="title-divider"><span>Hot Tips</span></h4>
            <ul class="big-list tags">
              <li><a href="#">January 2013</a> (19)</li>
              <li><a href="#">December 2012</a> (0)</li>
              <li><a href="#">November 2012</a> (39)</li>
              <li><a href="#">October 2012</a> (20)</li>
              <li><a href="#">September 2012</a> (56)</li>
              <li><a href="#">August 2012</a> (49)</li>
              <li><a href="#">July 2012</a> (90)</li>
            </ul>
          </div>
          <div class="block"> <a href="#" class="btn btn-warning"><i class="icon-rss"></i> Subscribe via RSS feed</a> </div>
        </div>
      </div>
    </div>
  </div>
  <!--.container-->
</div>
<!--#content-->
