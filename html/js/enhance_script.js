(function($) {
    "use strict";
    var logo_rotate = $("header .enh_logo_animation").attr('data-rotate');
    if (logo_rotate != '') {
        $("header .enh_logo_animation").addClass('enh_logo_rotate_' + logo_rotate)
    }
    $("header .enh_logo_animation").lettering();
    $("header .enh_logo_animation span").each(function() {
        var min = 0;
        var max = 50;
        var randomNumber = Math.floor(Math.random() * (max - min + 1) + min);
        $(this).css('transition-delay', '0.' + randomNumber + 's')
    });
    $('.enh_timer').appear(function() {
        var e = $(this);
        e.countTo({
            from: 0,
            to: e.html(),
            speed: 1300,
            refreshInterval: 60
        })
    })
    $('.date_picker').datepicker();
    $(".enh_form").validate({
        submitHandler: function(form) {
            var type = $(form).attr('id');
            send_form(type);
            return !1
        }
    });

    function send_form(type) {
        var arr = [];
        $("#" + type + " .form-control").each(function() {
            var element = $(this).attr('name');
            var value = $(this).val();
            $(this).css({
                border: "1px solid #c4c4c4"
            });
            if ($(this).prop('required') && value == "") {
                $(this).css({
                    border: "2px solid red"
                });
                $(this).focus();
                return !1
            }
            arr.push("'&" + element + "=' + " + value)
        })
        var dataString = (arr.join(' + '));
        $.ajax({
            method: "POST",
            url: "http://formspree.io/rodalermakov@gmail.com",
            data: dataString,
            dataType: "json",
            success: function() {
                $("#" + type).html("<div id='form_send_message'>Thank you for your request, we will contact you as soon as possible.</div>", 1500)
            }
        })
    }
    $('.lightbox').magnificPopup({
        type: 'image',
        gallery: {
            enabled: !0
        }
    });
    $('.video').magnificPopup({
        type: 'iframe',
        iframe: {
            markup: '<div class="mfp-iframe-scaler">' + '<div class="mfp-close"></div>' + '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' + '</div>',
            patterns: {
                youtube: {
                    index: 'youtube.com/',
                    id: 'v=',
                    src: 'http://www.youtube.com/embed/%id%?autoplay=1'
                },
                vimeo: {
                    index: 'vimeo.com/',
                    id: '/',
                    src: 'http://player.vimeo.com/video/%id%?autoplay=1'
                },
                gmaps: {
                    index: '//maps.google.',
                    src: '%id%&output=embed'
                }
            },
            srcAction: 'iframe_src',
        }
    });
    $(".enh_slider_carousel").owlCarousel({
        navigation: !0,
        responsive: !0,
        responsiveRefreshRate: 200,
        responsiveBaseElement: window,
        slideSpeed: 200,
        addClassActive: !0,
        paginationSpeed: 200,
        rewindSpeed: 200,
        items: 1,
        autoPlay: !1,
        touchDrag: !1,
        singleItem: !0,
        navigationText: ['<i class="ti ti-angle-left"></i>', '<i class="ti ti-angle-right"></i>']
    });
    $(".enh_team_slider").owlCarousel({
        navigation: !0,
        responsive: !0,
        responsiveRefreshRate: 200,
        responsiveBaseElement: window,
        slideSpeed: 200,
        addClassActive: !0,
        paginationSpeed: 200,
        rewindSpeed: 200,
        items: 3,
        itemsTablet: [1000, 2],
        itemsMobile: [569, 1],
        itemsDesktop: 3,
        autoPlay: !0,
        touchDrag: !1,
        navigationText: ['<i class="ti ti-angle-left"></i>', '<i class="ti ti-angle-right"></i>']
    });
    $(".enh_team_slider_single").owlCarousel({
        navigation: !0,
        responsive: !0,
        responsiveRefreshRate: 200,
        responsiveBaseElement: window,
        slideSpeed: 200,
        addClassActive: !0,
        paginationSpeed: 200,
        rewindSpeed: 200,
        items: 1,
        autoPlay: !0,
        singleItem: !0,
        autoHeight: !0,
        touchDrag: !1,
        navigationText: ['<i class="ti ti-angle-left"></i>', '<i class="ti ti-angle-right"></i>']
    });
    if ($('.enh_shop_item_slider img').length > 1) {
        $(".enh_shop_item_slider").owlCarousel({
            navigation: !0,
            responsive: !0,
            responsiveRefreshRate: 200,
            responsiveBaseElement: window,
            slideSpeed: 200,
            addClassActive: !0,
            paginationSpeed: 200,
            rewindSpeed: 200,
            singleItem: !0,
            autoPlay: !1,
            touchDrag: !1,
            navigationText: ['<i class="ti ti-angle-left"></i>', '<i class="ti ti-angle-right"></i>']
        })
    }
    $('.tweets-feed').each(function(index) {
        jQuery(this).attr('id', 'tweets-' + index)
    }).each(function(index) {
        var TweetConfig = {
            "id": jQuery('#tweets-' + index).attr('data-widget-id'),
            "domId": '',
            "maxTweets": 2,
            "enableLinks": !0,
            "showUser": !0,
            "showTime": !0,
            "dateFunction": '',
            "showRetweet": !1,
            "customCallback": handleTweets
        };

        function handleTweets(tweets) {
            var x = tweets.length;
            var n = 0;
            var element = document.getElementById('tweets-' + index);
            var html = '<ul class="slides">';
            while (n < x) {
                html += '<li>' + tweets[n] + '</li>';
                n++
            }
            html += '</ul>';
            element.innerHTML = html;
            return html
        }
        twitterFetcher.fetch(TweetConfig)
    });
    $('.enh_image_bck').each(function() {
        var image = $(this).attr('data-image');
        var gradient = $(this).attr('data-gradient');
        var color = $(this).attr('data-color');
        var blend = $(this).attr('data-blend');
        var opacity = $(this).attr('data-opacity');
        var position = $(this).attr('data-position');
        var height = $(this).attr('data-height');
        if (image) {
            $(this).css('background-image', 'url(' + image + ')')
        }
        if (gradient) {
            $(this).css('background-image', gradient)
        }
        if (color) {
            $(this).css('background-color', color)
        }
        if (blend) {
            $(this).css('background-blend-mode', blend)
        }
        if (position) {
            $(this).css('background-position', position)
        }
        if (opacity) {
            $(this).css('opacity', opacity)
        }
        if (height) {
            $(this).css('height', height)
        }
    });
    $('.enh_over, .enh_head_bck').each(function() {
        var color = $(this).attr('data-color');
        var image = $(this).attr('data-image');
        var opacity = $(this).attr('data-opacity');
        var blend = $(this).attr('data-blend');
        if (color) {
            $(this).css('background-color', color)
        }
        if (image) {
            $(this).css('background-image', 'url(' + image + ')')
        }
        if (opacity) {
            $(this).css('opacity', opacity)
        }
        if (blend) {
            $(this).css('mix-blend-mode', blend)
        }
    });
    $('.enh_map_over').on("click", function(e) {
        $(this).parents('.enh_section').toggleClass('active_map')
    });
    $('.enh_top_menu_mobile_link').on("click", function(e) {
        $(this).next('.enh_top_menu_cont').fadeToggle();
        $(this).parents('.enh_light_nav').toggleClass('active')
    });
    $('.enh_go').on("click", function(e) {
        var anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top
        }, 300);
        e.preventDefault()
    });
    $('div[data-animation=animation_blocks]').each(function() {
        var i = 0;
        $(this).find('.enh_icon_box, .skill-bar-content, .enh_anim_box').each(function() {
            $(this).css('transition-delay', '0.' + i + 's');
            i++
        })
    })
    $('.increase-qty').on("click", function(e) {
        var qtya = $(this).parents('.add-to-cart').find('.qty').val();
        var qtyb = qtya * 1 + 1;
        $(this).parents('.add-to-cart').find('#qty').val(qtyb);
        e.preventDefault()
    });
    $('.decrease-qty').on("click", function(e) {
        var qtya = $(this).parents('.add-to-cart').find('#qty').val();
        var qtyb = qtya * 1 - 1;
        if (qtyb < 1) {
            qtyb = 1
        }
        $(this).parents('.add-to-cart').find('#qty').val(qtyb);
        e.preventDefault()
    });
    var top_offset = $('header').height() - 1;
    $('#nav-sidebar').onePageNav({
        currentClass: 'current',
        changeHash: !1,
        scrollSpeed: 700,
        scrollOffset: top_offset,
        scrollThreshold: 0.5,
        filter: '',
        easing: 'swing',
    });
    $('[data-toggle="tooltip"]').tooltip();
    $('[data-toggle="popover"]').popover();
    $(window).scroll(function() {
        if ($(window).scrollTop() > 100) {
            $(".enh_logo").addClass('active');
            $('body').addClass('enh_first_step')
        } else {
            $('body').removeClass('enh_first_step');
            $(".enh_logo").removeClass('active')
        }
        if ($(window).scrollTop() > 500) {
            $('body').addClass('enh_second_step')
        } else {
            $('body').removeClass('enh_second_step')
        }
    });
    $(".enh_fixed").css("background-attachment", "fixed");
    $('.enh_parent').on({
        mouseenter: function() {
            $(this).find('ul').stop().fadeIn(300)
        },
        mouseleave: function() {
            $(this).find('ul').stop().fadeOut(300)
        }
    });
    $('.enh_mobile_menu_content .enh_parent').on("click", function(e) {
        $(this).find('ul').slideToggle(300)
    });
    $('.enh_mobile_menu').on("click", function(e) {
        $(this).toggleClass('active');
        $('.enh_mobile_menu_hor').toggleClass('active')
    });
    $('.enh_header_search span').on("click", function(e) {
        $(this).next('.enh_header_search_cont').fadeToggle()
    });
    if (!device.tablet() && !device.mobile()) {
        $('.enh_auto_height').each(function() {
            setEqualHeight($(this).find('div[class^="col"]'))
        })
    }
    if (device.tablet() && device.landscape()) {
        $('.enh_auto_height').each(function() {
            setEqualHeight($(this).find('div[class^="col"]'))
        })
    }
    $(window).resize(function() {
        if (!device.tablet() && !device.mobile()) {
            $('.enh_auto_height').each(function() {
                setEqualHeight($(this).find('div[class^="col"]'))
            })
        }
        if (device.tablet() && device.landscape()) {
            $('.enh_auto_height').each(function() {
                setEqualHeight($(this).find('div[class^="col"]'))
            })
        }
    });

    function setEqualHeight(columns) {
        var tallestcolumn = 0;
        columns.each(function() {
            $(this).css('height', 'auto');
            var currentHeight = $(this).height();
            if (currentHeight > tallestcolumn) {
                tallestcolumn = currentHeight
            }
        });
        columns.height(tallestcolumn)
    }
})(jQuery);
$(window).load(function() {
    $("body").imagesLoaded(function() {
        $(".enh_page_loader div").fadeOut();
        $(".enh_page_loader").delay(200).fadeOut("slow")
    });
    if (!device.tablet() && !device.mobile()) {
        var s = skrollr.init({
            forceHeight: !1,
        });
        $(window).stellar({
            horizontalScrolling: !1,
            responsive: !0,
        })
    }
    var $grid = $('.grid').isotope({
        itemSelector: '.grid-item',
        percentPosition: !0,
        masonry: {
            columnWidth: '.grid-item'
        }
    });
    $grid.imagesLoaded().progress(function() {
        $grid.isotope('layout')
    });
    $(window).resize(function() {
        $grid.isotope('layout')
    });
    $('.masonry').masonry({
        itemSelector: '.masonry-item',
    });
    $('.filter-button-group').on('click', 'a', function() {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({
            filter: filterValue
        })
    })
})