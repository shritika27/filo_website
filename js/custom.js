
/*================================================
[  Table of contents  ]
================================================
:: Page loader
:: Back to top
:: Tooltip
:: Jarallax
:: Searchstyle Bar
:: Menu Bar
:: Sidebar Menu
:: Counters
:: CountdownTimer
:: Isotope
:: Masonry
:: Portfolio move
:: ProgressBar
:: Audiovideo
:: Accordion
:: owl carousel 
:: Wow Animation
:: Magnific Popup
:: typer
:: Contact from


======================================
[ End table content ]
======================================*/

"use strict";

/*************************
Page loader
*************************/
function preloader() {
    $("#load").fadeOut();
    $('#loading').delay().fadeOut();

}

/*************************
Back to top
*************************/
function backtotop() {
    $('#back-to-top').fadeOut();
    $(window).scroll(function() {
        if ($(this).scrollTop() > 250) {
            $('#back-to-top').fadeIn(1500);
        } else {
            $('#back-to-top').fadeOut(500);
        }
    });
    // scroll body to 0px on click
    $('#top').on('click', function() {
        $('top').tooltip('hide');
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
}


/*************************
Tooltip
*************************/
function tooltip() {
    $('[data-toggle="tooltip"]').tooltip()

}


/*************************
Jarallax
*************************/
function jarallax() {
    $('.jarallax').jarallax({
        speed: 0.2
    });

}


/*************************
Searchstyle Bar
*************************/
function searchstyle() {
    'use strict';


    if ($(".search__input").length > 0) {
        var openCtrl = document.getElementById('btn-search'),
            closeCtrl = document.getElementById('btn-search-close'),
            searchContainer = document.querySelector('.search'),
            inputSearch = searchContainer.querySelector('.search__input');

        function init() {
            initEvents();
        }

        function initEvents() {
            openCtrl.addEventListener('click', openSearch);
            closeCtrl.addEventListener('click', closeSearch);
            document.addEventListener('keyup', function(ev) {
                // escape key.
                if (ev.keyCode === 27) {
                    closeSearch();
                }
            });
        }

        function openSearch() {
            searchContainer.classList.add('search--open');
            inputSearch.focus();
        }

        function closeSearch() {
            searchContainer.classList.remove('search--open');
            inputSearch.blur();
            inputSearch.value = '';
        }

        init();
    }

    // search 2
    $(".iq-search").on('click', function() {
        $(".search-open").fadeIn(500);
    });
    $(".search-close").on('click', function() {
        $(".search-open").fadeOut(500);
    });
    // search-2
    if (jQuery('.iq-search').size() > 0) {
        jQuery('.search-btn').on("click", function() {
            jQuery('.iq-search').toggleClass("search-open");
            return false;
        });
        jQuery("html, body").on('click', function(e) {
            if (!jQuery(e.target).hasClass("not-click")) {
                jQuery('.iq-search').removeClass("search-open");
            }
        });
    }

}

/*************************
Menu Bar
*************************/
function megaMenu() {
    jQuery('#menu-1').megaMenu({
        // DESKTOP MODE SETTINGS
        logo_align: 'left', // align the logo left or right. options (left) or (right)
        links_align: 'left', // align the links left or right. options (left) or (right)
        socialBar_align: 'left', // align the socialBar left or right. options (left) or (right)
        searchBar_align: 'right', // align the search bar left or right. options (left) or (right)
        trigger: 'hover', // show drop down using click or hover. options (hover) or (click)
        effect: 'fade', // drop down effects. options (fade), (scale), (expand-top), (expand-bottom), (expand-left), (expand-right)
        effect_speed: 400, // drop down show speed in milliseconds
        sibling: true, // hide the others showing drop downs if this option true. this option works on if the trigger option is "click". options (true) or (false)
        outside_click_close: true, // hide the showing drop downs when user click outside the menu. this option works if the trigger option is "click". options (true) or (false)
        top_fixed: false, // fixed the menu top of the screen. options (true) or (false)
        sticky_header: true, // menu fixed on top when scroll down down. options (true) or (false)
        sticky_header_height: 200, // sticky header height top of the screen. activate sticky header when meet the height. option change the height in px value.
        menu_position: 'horizontal', // change the menu position. options (horizontal), (vertical-left) or (vertical-right)
        full_width: true, // make menu full width. options (true) or (false)
        // MOBILE MODE SETTINGS
        mobile_settings: {
            collapse: true, // collapse the menu on click. options (true) or (false)
            sibling: true, // hide the others showing drop downs when click on current drop down. options (true) or (false)
            scrollBar: true, // enable the scroll bar. options (true) or (false)
            scrollBar_height: 400, // scroll bar height in px value. this option works if the scrollBar option true.
            top_fixed: false, // fixed menu top of the screen. options (true) or (false)
            sticky_header: true, // menu fixed on top when scroll down down. options (true) or (false)
            sticky_header_height: 200 // sticky header height top of the screen. activate sticky header when meet the height. option change the height in px value.
        }
    });
    $('#menu-2').megaMenu({
        // DESKTOP MODE SETTINGS
        logo_align: 'left', // align the logo left or right. options (left) or (right)
        links_align: 'left', // align the links left or right. options (left) or (right)
        socialBar_align: 'left', // align the socialBar left or right. options (left) or (right)
        searchBar_align: 'right', // align the search bar left or right. options (left) or (right)
        trigger: 'hover', // show drop down using click or hover. options (hover) or (click)
        effect: 'fade', // drop down effects. options (fade), (scale), (expand-top), (expand-bottom), (expand-left), (expand-right)
        effect_speed: 400, // drop down show speed in milliseconds
        sibling: true, // hide the others showing drop downs if this option true. this option works on if the trigger option is "click". options (true) or (false)
        outside_click_close: true, // hide the showing drop downs when user click outside the menu. this option works if the trigger option is "click". options (true) or (false)
        top_fixed: false, // fixed the menu top of the screen. options (true) or (false)
        sticky_header: false, // menu fixed on top when scroll down down. options (true) or (false)
        sticky_header_height: 200, // sticky header height top of the screen. activate sticky header when meet the height. option change the height in px value.
        menu_position: 'vertical-right', // change the menu position. options (horizontal), (vertical-left) or (vertical-right)
        full_width: false, // make menu full width. options (true) or (false)
        // MOBILE MODE SETTINGS
        mobile_settings: {
            collapse: true, // collapse the menu on click. options (true) or (false)
            sibling: true, // hide the others showing drop downs when click on current drop down. options (true) or (false)
            scrollBar: true, // enable the scroll bar. options (true) or (false)
            scrollBar_height: 400, // scroll bar height in px value. this option works if the scrollBar option true.
            top_fixed: false, // fixed menu top of the screen. options (true) or (false)
            sticky_header: false, // menu fixed on top when scroll down down. options (true) or (false)
            sticky_header_height: 200 // sticky header height top of the screen. activate sticky header when meet the height. option change the height in px value.
        }
    });
    $('#menu-3').megaMenu({
        // DESKTOP MODE SETTINGS
        logo_align: 'left', // align the logo left or right. options (left) or (right)
        links_align: 'left', // align the links left or right. options (left) or (right)
        socialBar_align: 'left', // align the socialBar left or right. options (left) or (right)
        searchBar_align: 'right', // align the search bar left or right. options (left) or (right)
        trigger: 'hover', // show drop down using click or hover. options (hover) or (click)
        effect: 'fade', // drop down effects. options (fade), (scale), (expand-top), (expand-bottom), (expand-left), (expand-right)
        effect_speed: 400, // drop down show speed in milliseconds
        sibling: true, // hide the others showing drop downs if this option true. this option works on if the trigger option is "click". options (true) or (false)
        outside_click_close: true, // hide the showing drop downs when user click outside the menu. this option works if the trigger option is "click". options (true) or (false)
        top_fixed: false, // fixed the menu top of the screen. options (true) or (false)
        sticky_header: false, // menu fixed on top when scroll down down. options (true) or (false)
        sticky_header_height: 200, // sticky header height top of the screen. activate sticky header when meet the height. option change the height in px value.
        menu_position: 'vertical-left', // change the menu position. options (horizontal), (vertical-left) or (vertical-right)
        full_width: false, // make menu full width. options (true) or (false)
        // MOBILE MODE SETTINGS
        mobile_settings: {
            collapse: true, // collapse the menu on click. options (true) or (false)
            sibling: true, // hide the others showing drop downs when click on current drop down. options (true) or (false)
            scrollBar: true, // enable the scroll bar. options (true) or (false)
            scrollBar_height: 400, // scroll bar height in px value. this option works if the scrollBar option true.
            top_fixed: false, // fixed menu top of the screen. options (true) or (false)
            sticky_header: false, // menu fixed on top when scroll down down. options (true) or (false)
            sticky_header_height: 200 // sticky header height top of the screen. activate sticky header when meet the height. option change the height in px value.
        }
    });
}

/*************************
Sidebar Menu
*************************/
function sidebar_menu() {
    $(".sider-bt").on("click", function() {
        $(".sider-bt").toggleClass("cross");
        $(".sidebar-menu").toggleClass("sidebar-open");
    });

}

/*************************
Counters
*************************/
function counters() {
    $('.timer').countTo();

}

/*************************
CountdownTimer
*************************/
function countdownTimer() {
    $('#countdown').countdown({
        date: '10/01/2018 23:59:59',
        offset: -8,
        day: 'Day',
        days: 'Days'
    }, function() {
        alert('Done!');
    });
    $('#iq-countdown1').countdown({
        date: '10/01/2018 23:59:59',
        offset: -8,
        day: 'Day',
        days: 'Days'
    }, function() {
        alert('Done!');
    });

}

/*************************
Isotope
*************************/
function isotope() {
    var $isotope = $(".isotope"),
        $itemElement = '.iq-grid-item',
        $filters = $('.isotope-filters');
    if ($isotope) {
        $isotope.isotope({
            resizable: true,
            itemSelector: $itemElement,
            masonry: {
                gutterWidth: 10
            }
        });
        $filters.on('click', 'button', function() {
            var $val = $(this).attr('data-filter');
            $isotope.isotope({
                filter: $val
            });
            $filters.find('.active').removeClass('active');
            $(this).addClass('active');
        });
    }

}

/*************************
Masonry
*************************/
function masonry() {
    var $masonry = $('.iq-masonry-block .iq-masonry'),
        $itemElement = '.iq-masonry-block .iq-masonry-item',
        $filters = $('.iq-masonry-block .isotope-filters');
    if ($masonry) {
        $masonry.isotope({
            percentPosition: true,
            resizable: true,
            itemSelector: $itemElement,
            masonry: {
                gutterWidth: 0
            }
        });
        // bind filter button click
        $filters.on('click', 'button', function() {
            var filterValue = $(this).attr('data-filter');
            $masonry.isotope({
                filter: filterValue
            });
        });

        $filters.each(function(i, buttonGroup) {
            var $buttonGroup = $(buttonGroup);
            $buttonGroup.on('click', 'button', function() {
                $buttonGroup.find('.active').removeClass('active');
                $(this).addClass('active');
            });
        });
    }

}

/*************************
Portfolio move
*************************/
function portfolio_move() {
    $('.iq-portfolio-05').each(function() {
        $(this).hoverdir({});
    });

}


/*************************
ProgressBar
*************************/
function progressBar() {
    jQuery('.progress-bar').each(function(i, elem) {
        var $elem = $(this),
            percent = $elem.attr('data-percent') || "100",
            delay = $elem.attr('data-delay') || "100",
            type = $elem.attr('data-type') || "%";

        if (!$elem.hasClass('progress-animated')) {
            $elem.css({
                'width': '0%'
            });
        }

        var progressBarRun = function() {
            $elem.animate({
                'width': percent + '%'
            }, 'easeInOutCirc').addClass('progress-animated');

            $elem.delay(delay).append('<span class="progress-type animated fadeIn">' + type + '</span><span class="progress-number animated fadeIn">' + percent + '</span>');
        };

        $(elem).appear(function() {
            setTimeout(function() {
                progressBarRun();
            }, delay);
        });
    });
}




/*************************
Audio video
*************************/
function audiovideo() {
    if ($(".audio-video").length != 0) {
        $('audio,video').mediaelementplayer();
    }

}



/*************************
Accordion
*************************/
function accordion() {
    var $acpanel = $(".iq-accordion .iq-ad-block > .ad-details"),
        $acsnav = $(".iq-accordion .iq-ad-block > .ad-title");

    $acpanel.hide().first().slideDown("easeOutExpo");
    $acsnav.first().addClass("iq-active");
    $acsnav.on('click', function() {
        var $this = $(this).next(".ad-details");
        $acsnav.parent().removeClass("iq-active");
        $(this).parent().addClass("iq-active");
        $acpanel.not($this).slideUp("easeInExpo");
        $(this).next().slideDown("easeOutExpo");
        return false;
    });

}


/*************************
owl carousel 
*************************/
function owlcarousel() {
    $(".owl-carousel").each(function() {
        var $this = $(this),
            $items = ($this.data('items')) ? $this.data('items') : 1,
            $loop = ($this.data('loop')) ? $this.data('loop') : true,
            $navdots = ($this.data('nav-dots')) ? $this.data('nav-dots') : false,
            $navarrow = ($this.data('nav-arrow')) ? $this.data('nav-arrow') : false,
            $autoplay = ($this.attr('data-autoplay')) ? $this.data('autoplay') : true,
            $space = ($this.attr('data-space')) ? $this.data('space') : 15;
        $(this).owlCarousel({
            loop: $loop,
            items: $items,
            responsive: {
                0: {
                    items: $this.data('xx-items') ? $this.data('xx-items') : 1
                },
                600: {
                    items: $this.data('xs-items') ? $this.data('xs-items') : 1
                },
                767: {
                    items: $this.data('sm-items') ? $this.data('sm-items') : 2
                },
                992: {
                    items: $this.data('md-items') ? $this.data('md-items') : 2
                },
                1190: {
                    items: $this.data('lg-items') ? $this.data('lg-items') : 3
                },
                1200: {
                    items: $items
                }
            },
            dots: $navdots,
            margin: $space,
            nav: $navarrow,
            navText: ["<i class='fa fa-angle-left fa-2x'></i>", "<i class='fa fa-angle-right fa-2x'></i>"],
            autoplay: $autoplay,
            autoplayHoverPause: true
        });

    });

}


/*************************
Wow Animation
*************************/
function wowanimation() {
    var wow = new WOW({
        boxClass: 'wow',
        animateClass: 'animated',
        offset: 0,
        mobile: false,
        live: true
    });
    wow.init();
}


/*************************
Magnific Popup
*************************/

function popupgallery() {
    $('.popup-gallery').magnificPopup({
        delegate: 'a.popup-img',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
        },
    });

    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });

}

/*************************
  typer
*************************/
function typer() {
    var foo;
    var win = $(window),
        foo = $('#typer');
        if (foo !== undefined)
        foo.typer(['<h6 class="iq-tw-6"><span class="iq-font-green">Web</span> Developer</h6>', '<h6 class="iq-tw-6">Web <span class="iq-font-green">Designer</span></h6>', '<h6 class="iq-tw-6"><span class="iq-font-green">Frontend</span> Developer</h6>']);
    
}


/*************************
  Contact from
*************************/
function contactfrom() {
    jQuery('#contact_name').on('input', function() {
        var input = jQuery(this);
        var is_name = input.val();
        if (is_name) {
            input.removeClass("invalid").addClass("valid");
        } else {
            input.removeClass("valid").addClass("invalid");
        }
    });


    jQuery('#contact_email').on('input', function() {
        var input = jQuery(this);
        var re = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
        var is_email = re.test(input.val());
        if (is_email) {
            input.removeClass("invalid").addClass("valid");
        } else {
            input.removeClass("valid").addClass("invalid");
        }
    });

    jQuery('#contact_phone').on('input', function() {
        var input = jQuery(this);
        var re = /^([0|\+[0-9]{1,5})?([1-9][0-9]{9})$/;
        var is_phone = re.test(input.val());
        if (is_phone) {
            input.removeClass("invalid").addClass("valid");
        } else {
            input.removeClass("valid").addClass("invalid");
        }
    });


    jQuery('#contact_message').keyup(function(event) {
        var input = jQuery(this);
        var message = jQuery(this).val();
        console.log(message);
        if (message) {
            input.removeClass("invalid").addClass("valid");
        } else {
            input.removeClass("valid").addClass("invalid");
        }
    });


    jQuery("#contact button").on("click", function(event) {
        var form_data = jQuery("#contact").serializeArray();
        var error_free = true;
        for (var input in form_data) {
            var element = jQuery("#contact_" + form_data[input]['name']);
            var valid = element.hasClass("valid");
            var error_element = jQuery("span", element.parent());
            if (!valid) {
                error_element.removeClass("error").addClass("error_show");
                error_free = false;
            } else {
                error_element.removeClass("error_show").addClass("error");
            }
        }
        if (!error_free) {
            event.preventDefault();
        } else {
            //alert('No errors: Form will be submitted');
        }
    });

    
}


/*************************
All function are called here 
*************************/
$(document).ready(function() {
    megaMenu(),
        backtotop(),
        tooltip(),
        jarallax(),
        popupgallery(),
        searchstyle(),
        sidebar_menu(),
        counters(),
        countdownTimer(),
       
        wowanimation(),
        audiovideo(),
        accordion(),
        owlcarousel(),
        portfolio_move();
});


$(window).on('load', function() {
    preloader(),
        isotope(),
        masonry(),
        contactfrom(),
        progressBar(),
        typer();
});