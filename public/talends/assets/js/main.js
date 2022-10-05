$(document).ready(function() {

    wow = new WOW({
        mobile: false
    });
    wow.init();


    jQuery('.goto-sec').on('click', function(e) {

        var href = jQuery(this).attr('href');
        jQuery('html, body').animate({
            scrollTop: jQuery(href).offset().top - 100
        }, 1000);
        e.preventDefault();
    });

    $(".input-effect .theme_input").focusout(function() {
        if ($(this).val() != "") {
            $(this).addClass("has-content");
        } else {
            $(this).removeClass("has-content");
        }
    });

});


var lastScrollTop = 0;
$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    var st = $(this).scrollTop();

    //>=, not <=
    if (scroll >= 600 && st < lastScrollTop) {
        //clearHeader, not clearheader - caps H
        $("header").addClass("sticky_header");

        // $("#main_logo_img").attr("src", "assets/img/logo-inverse.png");

    }
    if (scroll < 600) {
        $("header").removeClass("sticky_header");
        // $("#main_logo_img").attr("src", "assets/img/logo.png");
    }
    lastScrollTop = st;
});

$(document).on("click", function(event) {
    var $trigger = $("header .nav-item");
    if ($trigger !== event.target && !$trigger.has(event.target).length) {
        $('header .nav-link.main_menu_link').next('.nav_dropdown').removeClass('nav_dropdown--isActive');
        $('header .nav-link.main_menu_link').removeClass('active');
    }
});


$('.header_about_btn').click(function() {

    $('.main_sidebar').addClass('open');
});

$('.main_sidebar .close_sidebar').click(function() {

    $('.main_sidebar').removeClass('open');
});

$('header .nav-link.main_menu_link').click(function() {
    if ($(this).next('.nav_dropdown').hasClass(('nav_dropdown--isActive'))) {
        $('header .nav-link.main_menu_link').next('.nav_dropdown').removeClass('nav_dropdown--isActive');
        $(this).removeClass('active');
    } else {
        $('header .nav-link.main_menu_link').removeClass('active');
        $('header .nav-link.main_menu_link').next('.nav_dropdown').removeClass('nav_dropdown--isActive');
        $(this).next('.nav_dropdown').addClass('nav_dropdown--isActive');
        $(this).addClass('active');
    }
});

// $(".projects_stirped_box").hover(function() {
// $(".projects_stirped_item").hover(function() {
//     $(this).toggleClass("active");
// });

$(".projects_stirped_item").hover(
    function() {
        $(this).addClass("active");
        $('#projects_stirped_box').addClass("on-hover");

    },
    function() {
        $(this).removeClass("active");
        $('#projects_stirped_box').removeClass("on-hover");
    }
);





// $('#play_button').click(function () {
//   console.log('a');
//     var video = $('.play_video_sec video');
//     if (video.get(0).paused == true) {
//         // Play the video
//         video.get(0).play();
//         console.log('b');
//         // $('.play_video_sec .col-md-12').hide();
//         // Update the button text to 'Pause'

//         $('.play_video_sec').addClass('v_played');
//         $('.play_video_sec #play_button i').removeClass('fa-play-circle');
//         $('.play_video_sec #play_button i').addClass('fa-pause-circle');

//     } else {
//       console.log('c');
//         // Pause the video
//         video.get(0).pause();
//         $('.play_video_sec').removeClass('v_played');
//         $('.play_video_sec #play_button i').removeClass('fa-pause-circle');
//         $('.play_video_sec #play_button i').addClass('fa-play-circle');
//         // Update the button text to 'Play'

//     }
// });

// Plugin isInViewport
! function(e, n) { "object" == typeof exports && "undefined" != typeof module ? n(require("jquery"), require("window")) : "function" == typeof define && define.amd ? define("isInViewport", ["jquery", "window"], n) : n(e.$, e.window) }(this, function(e, n) {
    "use strict";

    function t(n) { var t = this; if (1 === arguments.length && "function" == typeof n && (n = [n]), !(n instanceof Array)) throw new SyntaxError("isInViewport: Argument(s) passed to .do/.run should be a function or an array of functions"); return n.forEach(function(n) { "function" != typeof n ? (console.warn("isInViewport: Argument(s) passed to .do/.run should be a function or an array of functions"), console.warn("isInViewport: Ignoring non-function values in array and moving on")) : [].slice.call(t).forEach(function(t) { return n.call(e(t)) }) }), this }

    function o(n) {
        var t = e("<div></div>").css({ width: "100%" });
        n.append(t);
        var o = n.width() - t.width();
        return t.remove(), o
    }

    function r(t, i) {
        var a = t.getBoundingClientRect(),
            u = a.top,
            c = a.bottom,
            f = a.left,
            l = a.right,
            d = e.extend({ tolerance: 0, viewport: n }, i),
            s = !1,
            p = d.viewport.jquery ? d.viewport : e(d.viewport);
        p.length || (console.warn("isInViewport: The viewport selector you have provided matches no element on page."), console.warn("isInViewport: Defaulting to viewport as window"), p = e(n));
        var w = p.height(),
            h = p.width(),
            v = p[0].toString();
        if (p[0] !== n && "[object Window]" !== v && "[object DOMWindow]" !== v) {
            var g = p[0].getBoundingClientRect();
            u -= g.top, c -= g.top, f -= g.left, l -= g.left, r.scrollBarWidth = r.scrollBarWidth || o(p), h -= r.scrollBarWidth
        }
        return d.tolerance = ~~Math.round(parseFloat(d.tolerance)), d.tolerance < 0 && (d.tolerance = w + d.tolerance), l <= 0 || f >= h ? s : s = d.tolerance ? u <= d.tolerance && c >= d.tolerance : c > 0 && u <= w
    }

    function i(n) { if (n) { var t = n.split(","); return 1 === t.length && isNaN(t[0]) && (t[1] = t[0], t[0] = void 0), { tolerance: t[0] ? t[0].trim() : void 0, viewport: t[1] ? e(t[1].trim()) : void 0 } } return {} }
    e = "default" in e ? e.default : e, n = "default" in n ? n.default : n,
        /**
         * @author  Mudit Ameta
         * @license https://github.com/zeusdeux/isInViewport/blob/master/license.md MIT
         */
        e.extend(e.expr[":"], { "in-viewport": e.expr.createPseudo ? e.expr.createPseudo(function(e) { return function(n) { return r(n, i(e)) } }) : function(e, n, t) { return r(e, i(t[3])) } }), e.fn.isInViewport = function(e) { return this.filter(function(n, t) { return r(t, e) }) }, e.fn.run = t
});
//# isInViewport


$(document).ready(function() {

    // If the comparison slider is present on the page lets initialise it, this is good you will include this in the main js to prevent the code from running when not needed
    if ($(".comparison-slider")[0]) {
        let compSlider = $(".comparison-slider");

        //let's loop through the sliders and initialise each of them
        compSlider.each(function() {
            let compSliderWidth = $(this).width() + "px";
            $(this).find(".resize img").css({ width: compSliderWidth });
            drags($(this).find(".divider"), $(this).find(".resize"), $(this));
        });

        //if the user resizes the windows lets update our variables and resize our images
        $(window).on("resize", function() {
            let compSliderWidth = compSlider.width() + "px";
            compSlider.find(".resize img").css({ width: compSliderWidth });
        });
    }
});

// This is where all the magic happens
// This is a modified version of the pen from Ege GÃ¶rgÃ¼lÃ¼ - https://codepen.io/bamf/pen/jEpxOX - and you should check it out too.
function drags(dragElement, resizeElement, container) {

    // This creates a variable that detects if the user is using touch input insted of the mouse.
    let touched = false;
    window.addEventListener('touchstart', function() {
        touched = true;
    });
    window.addEventListener('touchend', function() {
        touched = false;
    });

    // clicp the image and move the slider on interaction with the mouse or the touch input
    dragElement.on("mousedown touchstart", function(e) {

        //add classes to the emelents - good for css animations if you need it to
        dragElement.addClass("draggable");
        resizeElement.addClass("resizable");
        //create vars
        let startX = e.pageX ? e.pageX : e.originalEvent.touches[0].pageX;
        let dragWidth = dragElement.outerWidth();
        let posX = dragElement.offset().left + dragWidth - startX;
        let containerOffset = container.offset().left;
        let containerWidth = container.outerWidth();
        let minLeft = containerOffset + 10;
        let maxLeft = containerOffset + containerWidth - dragWidth - 10;

        //add event listner on the divider emelent
        dragElement.parents().on("mousemove touchmove", function(e) {

            // if the user is not using touch input let do preventDefault to prevent the user from slecting the images as he moves the silder arround.
            if (touched === false) {
                e.preventDefault();
            }

            let moveX = e.pageX ? e.pageX : e.originalEvent.touches[0].pageX;
            let leftValue = moveX + posX - dragWidth;

            // stop the divider from going over the limits of the container
            if (leftValue < minLeft) {
                leftValue = minLeft;
            } else if (leftValue > maxLeft) {
                leftValue = maxLeft;
            }

            let widthValue = (leftValue + dragWidth / 2 - containerOffset) * 100 / containerWidth + "%";

            $(".draggable").css("left", widthValue).on("mouseup touchend touchcancel", function() {
                $(this).removeClass("draggable");
                resizeElement.removeClass("resizable");
            });

            $(".resizable").css("width", widthValue);

        }).on("mouseup touchend touchcancel", function() {
            dragElement.removeClass("draggable");
            resizeElement.removeClass("resizable");

        });

    }).on("mouseup touchend touchcancel", function(e) {
        // stop clicping the image and move the slider
        dragElement.removeClass("draggable");
        resizeElement.removeClass("resizable");

    });

}

// images lazyloader

document.addEventListener("DOMContentLoaded", function() {
    var lazyImages = [].slice.call(document.querySelectorAll("img.lazyload"));

    if ("IntersectionObserver" in window) {
        let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    let lazyImage = entry.target;
                    lazyImage.src = lazyImage.dataset.src;
                    lazyImage.srcset = lazyImage.dataset.srcset;
                    lazyImage.classList.remove("lazyload");
                    lazyImageObserver.unobserve(lazyImage);
                }
            });
        });

        lazyImages.forEach(function(lazyImage) {
            lazyImageObserver.observe(lazyImage);
        });
    } else {
        // Possibly fall back to a more compatible method here
    }
});