/********************************************************
 *
 * Custom Javascript code for Enkel Bootstrap theme
 * Written by Themelize.me (http://themelize.me)
 *
 *******************************************************/
$(document).ready(function() {
    var defaultColour = 'green';

    //Bootstrap tooltip
    // invoke by adding _tooltip to a tags (this makes it validate)
    $('body').tooltip({
        selector: "a[class*=_tooltip]"
    });

    //Bootstrap popover
    // invoke by adding _popover to a tags (this makes it validate)
    $('body').popover({
        selector: "a[class*=_popover]",
        trigger: "hover"
    });

    //show hide elements
    $('.show-hide').each(function() {
        $(this).click(function() {
            var state = 'open'; //assume target is closed & needs opening
            var target = $(this).attr('data-target');
            var targetState = $(this).attr('data-target-state');

            //allows trigger link to say target is open & should be closed
            if (typeof targetState !== 'undefined' && targetState !== false) {
                state = targetState;
            }

            if (state == 'undefined') {
                state = 'open';
            }

            $(target).toggleClass('show-hide-'+ state);
            $(this).toggleClass(state);
        });
    });

    //colour switch
    $('.colour-switcher a').click(function() {
        var c = $(this).attr('href').replace('#','');
        $('.colour-switcher a').removeClass('active');
        $('.colour-switcher a.'+ c).addClass('active');

        if (c != defaultColour) {
            $('#colour-scheme').attr('href','css/colour-'+ c +'.css');
        }
        else {
            $('#colour-scheme').attr('href', '#');
        }
    });

    //flexslider
    $('.flexslider').each(function() {
        var sliderSettings =  {
            animation: $(this).attr('data-transition'),
        selector: ".slides > .slide",
        controlNav: true,
        smoothHeight: true
        };

        var sliderNav = $(this).attr('data-slidernav');
        if (sliderNav != 'auto') {
            sliderSettings = $.extend({}, sliderSettings, {
                manualControls: sliderNav +' li a',
                controlsContainer: '.flexslider-wrapper'
            });
        }

        $(this).flexslider(sliderSettings);
    });

    //jQuery Quicksand plugin
    //@based on: http://www.evoluted.net/thinktank/web-development/jquery-quicksand-tutorial-filtering
    var $filters = $('#quicksand-categories');
    var $filterType = $filters.find('li.active a').attr('class');
    var $holder = $('ul#quicksand');
    var $data = $holder.clone();

    // react to filters being used
    $filters.find('li a').click(function(e) {
        $filters.find('li').removeClass('active');
        var $filterType = $(this).attr('class');
        $(this).parent().addClass('active');
        if ($filterType == 'all') {
            var $filteredData = $data.find('li');
        }
        else {
            var $filteredData = $data.find('li[data-type=' + $filterType + ']');
        }

    // call quicksand and assign transition parameters
    $holder.quicksand($filteredData, {
        duration: 800,
    });
    e.preventDefault();
    });
});


$(document).ready(function(){

    var $input = $("input");
    for(var i=0;i < $input.length ; i++){
        $input[i].oninvalid = function(e){
            e.target.setCustomValidity('表单不能为空');
        }
    }

    var $login_email = $("input[name='login_email']");
    var $login_password = $("input[name='login_password']");
    var $login_submit = $("#btn-primary");




    $("button[type=submit]").bind("click", function(){
        //验证邮箱地址
        if($login_email.val().length < 1){
            //验证邮箱不能为空
            $login_email.next().html('邮箱不能为空');

        }else if(!$login_email.val().match(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/)){
            //验证是否符合邮箱
            $login_email.next().html('邮箱格式不正确');

        }else if($login_password.val().length < 1){
            //验证密码不能为空
            $login_password.next().html('密码不能为空');

        }else{

            $(this).button('loading');

            $.ajax({
                url :"<?php echo site_url('login/index');?>" ,
                type : "post",
                async:false,
                data : {login_email:$login_email.val(),login_password:$login_password.val()},
                success:function(data){
                    var jsonObj = eval('('+ data +')');
                    if(jsonObj.login_flag == true)
                location.href = "<?php echo site_url('tips/index')?>"
                    else
                location.href = "<?php echo site_url('login/index')?>"
                }
            });
        }

        return false;
    });



    $login_email.bind("focus" , function(){
        $login_email.next().html('');
    });

    $login_password.bind("focus" , function(){
        $login_password.next().html('');
    });


})
