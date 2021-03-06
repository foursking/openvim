<div id="content">
  <div class="container" id="about">
    <div class="row">
      <!-- sidebar -->
    <style>
        .span3{width:250px}
    </style>
      <div class="span3 sidebar">
        <div class="section-menu">
          <ul class="nav nav-list">
            <li class="nav-header">Vim Plugin Here</li>
            <li class="active"><a href="<?php echo site_url('plugin/index/1')?>" class="first" style="padding:15px 0px 15px 30px">所有<i class="icon-angle-right"></i></a></li>
            <?php foreach($plugin_type_category as $key=>$value):?>
            <li><a href="<?php echo site_url("plugin/type/{$value['typeId']}")?>"  style="padding:15px 0px 15px 30px"><?php echo $value['typeName'];?><i class="icon-angle-right"></i></a></li>
            <?php endforeach;?>
          </ul>
        </div>
      </div>

      <!--main content-->
      <div class="span7 plugin-content">

        <style>
.section-menu ul.nav-list li a {
font-size:14px;
}

            .plugin-content{width:685px}
            .media{
        -webkit-border-radius: 2px;
        -moz-border-radius: 2px;
        border-radius: 2px;
        border: 1px #cdcdcd;
        padding: 10px;
        background: #ffffff;
        -webkit-box-shadow: 1px 1px 5px #cdcdcd;
        -moz-box-shadow: 1px 1px 5px #cdcdcd;
        box-shadow: 1px 1px 5px #cdcdcd;
}
        .img-polaroid-plugin{
            padding:4px 8px 4px 0px;
        }
         .media-object-plugin{
            width:70px;
            height:70px;
            }

.pagination ul > .active > a,
.pagination ul > .active > span {
  color: #999;
  cursor: default;
}

        </style>
        <?php foreach($plugin_generalize as $key=>$value):?>
        <!-- The team -->
        <div class="block team margin-top-large" id="team">
          <div class="media" style="padding:1em;">
          <div class="pull-left"> <img src="<?php echo base_url("public/img/avar/vim_logo.png")?>" class="img-polaroid-plugin media-object-plugin" alt="" /> </div>
            <div class="media-body">
            <h4 class="media-heading"><?php echo $value['pluginName']?></h4>
              <p><?php echo $value['pluginSummary']?></p>
              <ul class="inline">
                <li><a href="#"><i class="icon-twitter"></i> Twitter</a></li>
                <li><a href="#"><i class="icon-facebook"></i> Facebook</a></li>
                <li><a href="#"><i class="icon-linkedin"></i> LinkedIn</a></li>
                <li><a href="#"><i class="icon-google-plus"></i> Google+</a></li>
              </ul>
            </div>
          </div>
        </div>
       <?php endforeach;?>
<?php echo $this->pagination->create_links(); ?>
      </div>

  </div>
</div>
