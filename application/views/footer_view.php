<!-- FOOTER -->

<!--Scripts -->
<script src="<?=base_url('public/js/jquery.js')?>"></script>

<!-- @todo: remove unused Javascript for better performance -->
<script src="<?=base_url('public/js/bootstrap-transition.js')?>"></script>
<script src="<?=base_url('public/js/bootstrap-alert.js')?>"></script>
<script src="<?=base_url('public/js/bootstrap-affix.js')?>"></script>
<script src="<?=base_url('public/js/bootstrap-modal.js')?>"></script>
<script src="<?=base_url('public/js/bootstrap-dropdown.js')?>"></script>
<script src="<?=base_url('public/js/bootstrap-scrollspy.js')?>"></script>
<script src="<?=base_url('public/js/bootstrap-tab.js')?>"></script>
<script src="<?=base_url('public/js/bootstrap-tooltip.js')?>"></script>
<script src="<?=base_url('public/js/bootstrap-popover.js')?>"></script>
<script src="<?=base_url('public/js/bootstrap-button.js')?>"></script>
<script src="<?=base_url('public/js/bootstrap-collapse.js')?>"></script>
<script src="<?=base_url('public/js/bootstrap-carousel.js')?>"></script>
<script src="<?=base_url('public/js/bootstrap-typeahead.js')?>"></script>

<!--Non-Bootstrap JS-->
<script src="<?=base_url('public/js/jquery.quicksand.js')?>"></script>
<script src="<?=base_url('public/js/jquery.flexslider-min.js')?>"></script>

<!--Custom scripts mainly used to trigger libraries -->
<script src="<?=base_url('public/js/script.js')?>"></script>



<script src="<?=base_url('public/editor/js/Markdown.Converter.js')?>"></script>
<script src="<?=base_url('public/editor/js/Markdown.Editor.js')?>"></script>
<script src="<?=base_url('public/editor/js/Markdown.Sanitizer.js')?>"></script>
<script src="<?=base_url('public/editor/js/textarearesizer.js')?>"></script>



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


<script>
	var base_url = 'http://dev.openvim.com/';
	$(function(){
		$('.tips-content pre').each(function(){
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
