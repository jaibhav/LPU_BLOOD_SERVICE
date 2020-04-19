
jQuery(function ($) {

    "use strict";

    jQuery.fn.center = function (parent) {
        if (parent) {
            parent = this.parent();
        } else {
            parent = window;
        }
        this.css({
            "position": "absolute",
            "top": ((($(parent).height() - this.outerHeight()) / 2) + $(parent).scrollTop() + "px"),
            "left": ((($(parent).width() - this.outerWidth()) / 2) + $(parent).scrollLeft() + "px")
        });
        return this;
    }
    

    // ANIMATIONS //
    function animations() {

        animations = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 120,
            mobile: false,
            live: true
        });

        animations.init();

    }

    // ONE PAGE SMOOTH SCROLLING 

    function smooth_scrolling() {

        $(".nav_menu").on("click", function () {

            if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                var offset = $('.header-wrapper').outerHeight();

                if ($('.stuck').length === 1) {
                    offset = $('.stuck').outerHeight();
                } else {
                    offset = parseInt(offset, 0) + 24;
                }

                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top - parseInt(offset, 0)
                    }, 1300);

                    return false;

                }

            }

        });

    }
    
     // CUSTOM BACKGROUND.
    
    // if ($(".section-custom-bg").length) {

    //     $(".section-custom-bg").each(function () {

    //         var $this = $(this);

    //         var bg_img = "images/home_1_slider_1.jpg",
    //                 bg_color = "#000000",
    //                 bg_opacity = "0.5",
    //                 bg_color_2 = "#000000",
    //                 bg_opacity_2 = "0.8",
    //                 bg_position = "center center",
    //                 bg_repeat = "no-repeat",
    //                 bg_size = "cover",
    //                 bg_overflow= "hidden";
                    
                    
            
    //         // Background Image.

    //         if ($this.is('[data-bg_img]')) {
    //             bg_img = ', url("' + $this.data('bg_img') + '")';
    //         } else {
    //             bg_img = ', url("' + bg_img + '")';
    //         }
            
    //         // Background Color.

    //         if ($this.is('[data-bg_color]')) {
    //             bg_color = $this.data('bg_color');
    //         }

    //         if ($this.is('[data-bg_opacity]')) {
    //             bg_opacity = $this.data('bg_opacity');
    //         }

    //         var $color_overlay = hexToRgbA(bg_color, bg_opacity);

    //         $color_overlay_2 = $color_overlay;

    //         if ($this.is('[data-gardient]') && $this.data('gardient') == true) {

    //             if ($this.is('[data-bg_color_2]')) {
    //                 bg_color_2 = $this.data('bg_color_2');
    //             }

    //             if ($this.is('[data-bg_opacity_2]')) {
    //                 bg_opacity_2 = $this.data('bg_opacity_2');
    //             }

    //             var $color_overlay_2 = hexToRgbA(bg_color_2, bg_opacity_2);

    //         }
            
    //         // Background Position.
            
    //         var $bg_position = "";

    //         if ($this.is('[data-bg_position]')) {
    //             $bg_position += 'background-position: ' + $this.data('bg_position') + ';';
    //         } else {
    //             $bg_position += 'background-position: ' + bg_position + '; ';
    //         }
            
    //         // Background Repeat.
            
    //         var $bg_repeat = "";

    //         if ($this.is('[data-bg_repeat]')) {
    //             $bg_repeat += 'background-repeat: ' + $this.data('bg_repeat') + ';';
    //         } else {
    //             $bg_repeat += 'background-repeat: ' + bg_repeat + '; ';
    //         }
            
    //         // Background Size.
            
    //         var $bg_size = "";

    //         if ($this.is('[data-bg_size]')) {
    //             $bg_size += 'background-size: ' + $this.data('bg_size') + ';';
    //         } else {
    //             $bg_size += 'background-size: ' + bg_size + '; ';
    //         }

    //         // Background Overflow.
            
    //         var $bg_overflow = "";

    //         if ($this.is('[data-bg_overflow]')) {
    //             $bg_overflow += 'overflow: ' + $this.data('bg_overflow') + ';';
    //         } else {
    //             $bg_overflow += 'overflow: ' + bg_overflow + '; ';
    //         }

    //         $this.attr("style", "background:linear-gradient( " + $color_overlay + ",  " + $color_overlay_2 + " )" + bg_img + "; " + $bg_position + " " + $bg_repeat + " background-attachment: inherit; " + $bg_size + " " + $bg_overflow + "");

    //     });

    // }
    
     // CUSTOM EMPTY HIGHT.
    
    if ($(".custom-empty-space").length) {

        $(".custom-empty-space").each(function () {

            var $this = $(this);

            var height = "100px",
                  ext_class = "";

            if ($this.is('[data-height]')) {
                height = $this.data('height');
            }

            if ($this.is('[data-class]')) {
                $this.addClass($this.data('class'));
            }

            $this.attr("style", 'height:'+ height + ';');

        });

    }

    
    // BANNER.
    
    if ($(".section-banner").length) {
    
     $(".section-banner").each(function () {

            var $this = $(this);

            var bg_img = "images/home_1_slider_1.jpg",
                    bg_color = "#000000",
                    bg_opacity = "0.5",
                    bg_color_2 = "#000000",
                    bg_opacity_2 = "0.8";

            if ($this.is('[data-bg_img]')) {
                bg_img = ', url("' + $this.data('bg_img') + '")';
            } else {
                bg_img = ', url("' + bg_img + '")';
            }

            if ($this.is('[data-bg_color]')) {
                bg_color = $this.data('bg_color');
            }

            if ($this.is('[data-bg_opacity]')) {
                bg_opacity = $this.data('bg_opacity');
            }

            var $color_overlay = hexToRgbA(bg_color, bg_opacity);
            
            $color_overlay_2 = $color_overlay;
            
            if ($this.is('[data-gardient]') && $this.data('gardient') == true) {


                if ($this.is('[data-bg_color_2]')) {
                    bg_color_2 = $this.data('bg_color_2');
                }

                if ($this.is('[data-bg_opacity_2]')) {
                    bg_opacity_2 = $this.data('bg_opacity_2');
                }

                var $color_overlay_2 = hexToRgbA(bg_color_2, bg_opacity_2);

            }
            

            $this.attr("style", "background:linear-gradient( " + $color_overlay + ",  " + $color_overlay_2 + " )" + bg_img + "; background-position: center center; background-repeat: repeat; background-attachment: inherit; background-size: cover; overflow:hidden;");

        });
        
    }
    

    
    function hexToRgbA(hex, opacity) {
        var c;
        if (/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)) {
            c = hex.substring(1).split('');
            if (c.length === 3) {
                c = [c[0], c[0], c[1], c[1], c[2], c[2]];
            }
            c = '0x' + c.join('');
            return 'rgba(' + [(c >> 16) & 255, (c >> 8) & 255, c & 255].join(',') + ',' + opacity + ')';
        } else {
            return 'rgba("0,0,0,' + opacity + '")';
        }
    }
    
    // add animate.css class(es) to the elements to be animated
    function setAnimation(_elem, _InOut) {
        // Store all animationend event name in a string.
        // cf animate.css documentation
        var animationEndEvent = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        _elem.each(function () {
            var $elem = $(this);
            var $animationType = 'animated ' + $elem.data('animation-' + _InOut);
            $elem.addClass($animationType).one(animationEndEvent, function () {
                $elem.removeClass($animationType); // remove animate.css Class at the end of the animations
            });
        });
    }

    
    if($('.slider-wrap')) {
        
        var $this = $('.slider-wrap');
        
        if ($this.is('[data-bg_img]')) {
            
            var bg_img = 'url("' + $this.data('bg_img') + '")';
            $this.css({
                'background-image': bg_img,
                'background-repeat': 'repeat',
                'background-position': 'center center',
                'background-size': 'cover'
            });
            
        }
        
    }
    
  
    
    // STICKY HEADER & MENU

   if ( $(".main-header").attr('data-sticky_header')) {
    
        $('.main-header .header-wrapper').waypoint('sticky', {
            wrapper: '<div class="sticky-wrapper" />',
            stuckClass: 'stuck'
        });
    
    }
    
    
  
    
    
    // VENOBOX VIDEO.

    $(document).ready(function () {
        $('.venobox').venobox();
    });  


    //WoW Animation.
    animations();

    //One Page Scrolling.
    smooth_scrolling();


    // BACK TO TOP BUTTON.

    if ($('#backTop').length === 1) {

        $('#backTop').backTop({
            'theme': 'custom'
        });
        
    }

    // PRELOADER

    $(window).on("load", function () {

        $("#preloader").fadeOut(500);

    });

});

