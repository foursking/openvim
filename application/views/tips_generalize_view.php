<style>

.tags{text-transform: lowercase;}
.media-body .tags a{background:#eee;padding:2px 8px;-moz-border-radius:2px;-webkit-border-radius:2px;border-radius:2px;color:#000;}
.tags a:link,.tags a:visited,.tags a:hover{padding:2px 8px;background:#F2F2F2;color:#336699;font-size:11px;text-decoration:none;}

.media-body .tags a:hover{background:#faa732;padding:2px 8px;-moz-border-radius:2px;-webkit-border-radius:2px;border-radius:2px;color:#f5f5f5;}


</style>
<div id="content">
  <div class="container">
    <div class="row-fluid">
      <h2 class="title-divider"><span>Vim<span class="de-em">Tips</span></span> <small>Tips here</small></h2>
    </div>
    <div class="row">
      <!--Blog Roll Content-->
      <div class="span-tips-main blog-roll blog-list">

        <?php foreach($tips_generalize as $key=>$value):?>
        <!-- tips post -->
        <div class="media row-fluid">
          <div class="span1 hidden-phone">
            <!-- Date desktop -->
            <div class="date-wrapper"> <span class="date-m">Jan</span> <span class="date-d">20</span> </div>
            <!-- Meta details desktop -->
          </div>
          <div class="span11">
            <div class="media-body">

              <h4 class="title media-heading"><a href="blog-post.html"><?php echo $value['tipsTitle'];?></a></h4>

              <!-- Meta details mobile -->
              <ul class="inline meta muted visible-phone">
                <li><i class="icon-calendar"></i> <span class="visible-desktop">Created:</span> Sun 20th Jan 2013</li>
                <li><i class="icon-user"></i> <a href="#">Alex</a></li>
              </ul>
              <a href="blog-post.html" style="float:right;margin:-30px 0 0 5px;line-height:1;"> <img style="width:40px;height:40px"src="<?=base_url('public/img/blog/ape.jpg')?>" alt="Picture of frog by Ben Fredericson" /> </a>

              <div class="tags">
             <?php if(!empty($value['tags'])){ ?>
                <?php foreach($value['tags'] as $k=>$v): ?>
                    <a href="#" class="type"><?php echo $v?></a> &nbsp;&nbsp;
                    <?php endforeach;};?>
              </div>




            </div>
          </div>
        </div>
        <?php endforeach; ?>




        <small>Blog photos by <a href="http://www.flickr.com/photos/xjrlokix/">Ben Fredericson</a></small>
        <div class="pagination pagination-centered">
          <button type="button" class="btn btn-block" data-loading-text="Loading...">Load More</button>
        </div>
      </div>
