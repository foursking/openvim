<!-- FOOTER -->
<footer id="footer">
  <div class="container">
    <div class="row">
            <dl class="site-link">
                    <dt>常用链接</dt>
                    <dd>开发日志</dd>
                    <dd>开发日志</dd>
                    <dd>开发日志</dd>
            </dl>
   <dl class="site-link">
                    <dt>常用链接</dt>
                    <dd>开发日志</dd>
                    <dd>开发日志</dd>
                    <dd>开发日志</dd>
            </dl>
   <dl class="site-link">
                    <dt>关注我们</dt>
                    <dd>新浪微博</dd>
                    <dd>V2ex</dd>
                    <dd>github</dd>
                    <dd>腾讯微博</dd>
            </dl>
   <dl class="site-link">
                    <dt>常用链接</dt>
                    <dd>开发日志</dd>
                    <dd>开发日志</dd>
                    <dd>开发日志</dd>
            </dl>


    </div>
  </div>
</footer>

<!--Scripts -->

<!-- @todo: remove unused Javascript for better performance -->
<script src="{* $sys_base_url *}public/js/bootstrap-transition.js"></script>
<script src="{* $sys_base_url *}public/js/bootstrap-alert.js"></script>
<script src="{* $sys_base_url *}public/js/bootstrap-affix.js"></script>
<script src="{* $sys_base_url *}public/js/bootstrap-modal.js"></script>
<script src="{* $sys_base_url *}public/js/bootstrap-dropdown.js"></script>
<script src="{* $sys_base_url *}public/js/bootstrap-scrollspy.js"></script>
<script src="{* $sys_base_url *}public/js/bootstrap-tab.js"></script>
<script src="{* $sys_base_url *}public/js/bootstrap-tooltip.js"></script>
<script src="{* $sys_base_url *}public/js/bootstrap-popover.js"></script>
<script src="{* $sys_base_url *}public/js/bootstrap-button.js"></script>
<script src="{* $sys_base_url *}public/js/bootstrap-collapse.js"></script>
<script src="{* $sys_base_url *}public/js/bootstrap-carousel.js"></script>
<script src="{* $sys_base_url *}public/js/bootstrap-typeahead.js"></script>

<!--Non-Bootstrap JS-->
<script src="{* $sys_base_url *}public/js/jquery.quicksand.js"></script>
<script src="{* $sys_base_url *}public/js/jquery.flexslider-min.js"></script>

<!--Custom scripts mainly used to trigger libraries -->
<script src="{* $sys_base_url *}public/js/script.js"></script>










<script>
	var base_url = 'http://dev.openvim.com/';
	$(function(){
		$('.tips-content pre').each(function(){
			$(this).addClass('prettyprint');
		});

		$('.tips-media-list pre').each(function(){
			$(this).addClass('prettyprint');
		});

        $('.media-list pre pre').each(function(){
            $(this).addClass('prettyprint');
        });
		prettyPrint();
	});

</script>



</body>
</html>
