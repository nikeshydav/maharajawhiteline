$(function() {

    var pull = $('#pull'),
            $siteroot = '/';

    menu = $('.main_menu');
    menuHeight = menu.height();
    var pattern_email = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

    $(pull).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
    });

    $(window).resize(function() {
        var w = $(window).width();
        if (w > 480 && menu.is(':hidden')) {
            menu.removeAttr('style');
        }
    });

    $("#slider1").responsiveSlides({
        auto: true,
        pager: true,
        nav: true,
        speed: 500,
        maxwidth: 1012,
        namespace: "transparent-btns"
    });
    /*-- end header --*/


    // Slideshow 1
    $("#slider2").responsiveSlides({
        auto: false,
        pager: false,
        nav: true,
        speed: 540,
        maxwidth: 1000,
        namespace: "centered-btns"
    });

    // Slideshow 3
    $("#slider3").responsiveSlides({
        manualControls: '#slider3-pager',
        maxwidth: 600
    });

    // Slideshow 4
    $("#slider4").responsiveSlides({
        auto: true,
        pager: true,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        before: function() {
            $('.events').append("<li>before event fired.</li>");
        },
        after: function() {
            $('.events').append("<li>after event fired.</li>");
        }
    });


    $("#slider5").responsiveSlides({
        auto: true,
        pager: true,
        nav: false,
        speed: 500,
        maxwidth: 1012,
        pause: true,
        namespace: "transparent-btns"
    });


    $('#menu_hidden').slicknav();

    $('#subscribe').click(function() {
        $eml = $('#subscribeemail').val();
        if (!pattern_email.test($eml)) {
            alert("Please enter valid email");
            return false;
        } else {
            $('#subscribemsg').html('Thanks for subscribing to our newsletter');
            $('#subscribe').hide();
        }
    });
    $('#searchform').submit(function() {
        window.location.href = 'search/node/' + $('#searchterm').val();
        return false;
    });
    $('#searchterm, #searchterm1').keyup(function(){
        $('#searchform').attr("action", "search/node/"+$(this).val() );
    });
    
    $('#searchterm1').keyup(function(){
        $('#searchterm').val($(this).val() );
    });

    $('#verticalTab').easyResponsiveTabs({
        type: 'vertical',
        width: 'auto',
        fit: true
    });


    $(".h1_header").click(function() {
        $(this).toggleClass('open').next(".hide_text").slideToggle();
    });

    $('#enquiry').selectbox({
        onChange: function(val, inst) {
            if (val == 'Others') {
                $('.plz').removeClass('hidden');
            } else {
                $('.plz').addClass('hidden');
            }
        }
    });
    $("#state").selectbox({
        onChange: function(val, inst) {
            if (val !== '') {
                $city = $('#state').val();
                $.get($siteroot + 'ajax/getDealer.php?d=' + $city, function(d) {
                    $('.testBody').html(d);
                });

                $.get($siteroot + 'ajax/getCity.php?d=' + val, function(d) {
                    $('.course').html('<select name="city" id="city" tabindex="2" ></select>');
                    $("#city").html('<option value="0">--- Select City ---- </option>' + d).delay(5000).selectbox({
                        onChange: function(val, inst) {
                            $('#pincode').val(val);
                            $city = $('#city').val();
                            $.get($siteroot + 'ajax/getDealer.php?d=' + $city, function(d) {
                                $('.testBody').html(d);
                            });
                        }
                    });

                });
            }
        }
    });

    $('#search_submit').click(function() {
        $city = $('#city').val();
        $.get($siteroot + 'ajax/getDealer.php?d=' + $city, function(d) {
            $('.testBody').html(d);
        })
    });

    $(".features img").each(function() {
        var title = this.alt;
        var src = this.src;
        $(this).after('<div class="img"><img src="' + src + '" /> <div class="caption">' + title + '</div></div>');
        $(this).remove();
    }); //Adds the dynamic captions.


    $.fn.raty.defaults.path = '/sites/all/themes/maharaja/images/star';
    $('#star').raty({
        width: 150,
        score: avgscore,
        click: function(score, evt) {
            $.get($siteroot + 'ajax/rate.php?d=' + score, function(d) {
                alert(d);
            });
        }
    });

    $("#relatedproduct").flexisel();
    $("#historytimeline").flexisel({
        //visibleItems: 3,
        animationSpeed: 1000,
        clone: false,
        autoPlay: false,
        autoPlaySpeed: 3000,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: {
            portrait: {
                changePoint: 480,
                visibleItems: 2
            },
            landscape: {
                changePoint: 640,
                visibleItems: 2
            },
            tablet: {
                changePoint: 768,
                visibleItems: 3
            }
        }
    });


    $('#horizontalTab').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion
        width: 'auto', //auto or any width like 600px
        fit: true, // 100% fit in a container
        activate: function(e) { // Callback function if tab is switched
            e.preventDefault();
            return false;
        }
    });
    $("#zoomit").elevateZoom();

    $(".sub_menu_2 li").each(function() {
        var ptag = $(this).children('p');
        var img = ptag.html();
        $(this).children('p').remove();
        $(this).append(img)
    }); //remove p tag in menu.




    /* price sorting */
    function sortUsingNestedText(parent, childSelector, keySelector, order) {

        var items = parent.children(childSelector).sort(function(a, b) {

            var vA = parseInt($(keySelector, a).text());
            var vB = parseInt($(keySelector, b).text());
            /*vA = parseInt(vA.substr(1));
             vB = parseInt(vB.substr(1));*/
            if (order == 'min') {
                return (vA < vB) ? -1 : (vA > vB) ? 1 : 0;
            } else {
                return (vA > vB) ? -1 : (vA < vB) ? 1 : 0;
            }
        });
        parent.append(items);
    }


    /* setup sort attributes */
    $('#sPrice').data("sortKey", "span.pp");
    $('#sStyle').data("sortKey", "span.pp");


    /* sort on button click */
    $(".btnSort").click(function() {
        $order = $(this).attr('rel');
        sortUsingNestedText($('#list-category-results'), "li", $(this).data("sortKey"), $order);
        $('#prize .sbSelector').text($(this).text());
        $('#prize  #sbHolder_51023074').trigger('mouseout');
        event.preventDefault();
    });

    $('#sPrice').trigger('click');
    $('#prize .sbSelector').text('- Sort by Price-');

    $("#imacustomerForm").validate({
        submitHandler: function(form) {
            $(form).ajaxSubmit(function(d) {
                $('#imacustomerForm').html(d);
            });
        }
    });
    $("#impartnerForm").validate({
        submitHandler: function(form) {
            $(form).ajaxSubmit(function(d) {
                $('#impartnerForm').html(d);
            });
        }
    });
    $('#institutionalForm').validate({
        submitHandler: function(form) {
            $(form).ajaxSubmit(function(d) {
                $('#institutionalForm').html(d);
            });
        }
    });
    $('#joinForm').validate({
        submitHandler: function(form) {
            $(form).ajaxSubmit(function(d) {
                $('#joinForm').html(d);
            });
        }
    });

    $('input[type="tel"]').each(function() {
        $(this).rules('add', {
            required: true,
            digits: true,
            messages: {
                required: " Please enter a mobile number!",
                digits: " Please enter only numbers!"
            }
        });
    });


    $('.sub-menu-menu > li > p > img').attr('style', '');
    $('#edit-mail').attr('type', 'email');
    $('#comment-form').validate();

    if (window.location.hash) {
        var hash = window.location.hash;
        if (hash.indexOf('comment') > -1) {
            $('#comment').removeClass('hidden');
        }
    }
    
    
    $('#twitter-widget-0').css('height', '20px');
});

$(window).load(function() {

});