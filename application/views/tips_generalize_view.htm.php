<style>



</style>
<div id="content">
<div class="container">
    <div class="row">

<!-- <style> -->
<!-- ul.nav-tabs li.active{ -->
<!--   margin-top: -3px; -->
<!-- } -->
<!-- </style> -->

  <div class="span12">
    Level 1 column
    <div class="row">
      <div class="span9">Level 2</div>
      <div class="span3">Level 2</div>
    </div>
  </div>

      <!--Blog Roll Content-->

      <!-- <div class="span-tips-main blog-roll blog-list"> -->
<!-- <div> -->
<!--   <ul class="nav nav-tabs"> -->
<!--       <li{* if $sort_type eq 'newest' *} class="active" {* /if *}><a href="{* $sys_site_url *}index" class="all">最新</a></li> -->
<!--       <li{* if $sort_type eq 'vote' *}   class="active" {* /if *}><a href="{* $sys_site_url *}vote" class="type-web">最热</a></li> -->
<!--   </ul> -->

<!--  <div class="input-append" style="float:right;margin-top:-60px;position:relative"> -->
<!--      <a href="{* $sys_site_url *}tips/append"><button class="btn" type="button" style="margin-right:10px"> + 添加Tips</button></a> -->
<!--     <input class="span2" id="appendedInputButton" type="text" placeholder="Search" /> -->
<!--     <a href="#"><span class="add-on"> > </span> </a> -->
<!--  </div> -->

<!-- </div> -->
        <!-- {* foreach $tips_generalize as $key=>$value *} -->
        <!-- <1!-- tips post --1> -->
        <!-- <div class="media row-fluid"> -->

        <!--   <div class="span12"> -->

        <!--     <div class="media-body"> -->

        <!--         <h4 class="title media-heading"><a href="{* $sys_site_url *}post/{* $value.tipsId *}">{* $value.tipsTitle *}</a></h4> -->

        <!--       <1!-- Meta details mobile --1> -->
        <!--       <ul class="inline meta muted visible-phone"> -->
        <!--         <li><i class="icon-calendar"></i> <span class="visible-desktop">Created:</span> Sun 20th Jan 2013</li> -->
        <!--         <li><i class="icon-user"></i> <a href="#">Alex</a></li> -->
        <!--       </ul> -->
        <!--       <div class="tags"> -->

<!-- {* if $value.tags|@count neq 0 *} -->
<!-- {* foreach $value.tags as $k=>$v *} -->
<!-- <a href="{* $sys_site_url *}tag/{* $v *}" class="type">{* $v *}</a> &nbsp;&nbsp; -->
<!-- {* /foreach *} -->
<!-- {* /if *} -->
        <!--       </div> -->
        <!--         <div class="tips-content" style="clear:both;margin-top:5px"> -->
        <!--         <pre>{* $value.tipsContent *}</pre> -->
        <!--         </div> -->
        <!--     </div> -->
        <!--   </div> -->
        <!-- </div> -->
        <!-- {* /foreach *} -->






        <div class="pagination pagination-centered">
            {* $pagination_link *}
        </div>
      </div>
