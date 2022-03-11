// StarHotel Javascripts
jQuery(document).ready(function () {
    "use strict";

	
   


    //Waypoints
    if (jQuery().waypoint) {
        jQuery('.bounce,.flash,.pulse,.shake,.swing,.tada,.wobble,.bounceIn,.bounceInDown,.bounceInLeft,.bounceInRight,.bounceInUp,.bounceOut,.bounceOutDown,.bounceOutLeft,.bounceOutRight,.bounceOutUp,.fadeIn,.fadenDown,.fadeInDownBig,.fadeInLeft,.fadeInLeftBig,.fadeInRight,.fadeInRightBig,.fadeInUp,.fadeInUpBig,.fadeOut,.fadeOuDown,.fadeOutDownBig,.fadeOutLeft,.fadeOutLeftBig,.fadeOutRight,.fadeOutRightBig,.fadeOutUp,.fadeOutUpBig,.flip,.fliInX,.flipInY,.flipOutX,.flipOutY,.lightSpeedIn,.lightSpeedOut,.rotateIn,.rotateInDownLeft,.rotateInDownRight,.rotatenUpLeft,.rotateInUpRight,.rotateOut,.rotateOutDownLeft,.rotateOutDownRight,.rotateOutUpLeft,.rotateOutUpRight,.slidenDown,.slideInLeft,.slideInRight,.slideOutLeft,.slideOutRight,.slideOutUp,.hinge,.rollIn,.rollOut').waypoint(function () {

            var t = jQuery(this);

            if (jQuery(window).width() < 767) {
                t.delay(jQuery(this).data(1));
                t.addClass("animated");
            } else {
                t.delay(jQuery(this).data("start")).queue(function () {
                    t.addClass("animated");
                });
            }
        }, {
            offset: '75%',
            triggerOnce: true,
        });
    }


    // GO TOP
    //Show or hide "#go-top"
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 300) {

            jQuery('#go-top').fadeIn(200);

        } else {
            jQuery('#go-top').fadeOut(800);
        }
    });
    // Animate "#go-top"
    jQuery('#go-top').click(function (event) {
        event.preventDefault();
        jQuery('html, body').animate({
            scrollTop: 0
        }, '2000', 'swing');
    })

	
    //niceScroll
    if (jQuery().niceScroll) {
         $(".parallax-effect").niceScroll();
		 };
		 

    // Isotope
 window.onload = function () {	
    if (jQuery().isotope) {
        // cache container
        var jQuerycontainer1 = jQuery('.room-list');
        // initialize isotope
        jQuerycontainer1.isotope({
            filter: '*',
            masonry: {
                columnWidth: 1
            }
        });

        // filter items when filter link is clicked
        jQuery('#filters a').click(function () {
            var selector = jQuery(this).attr('data-filter');
            jQuerycontainer1.isotope({
                filter: selector
            });
            return false;
        });
        // set selected menu items
        var jQueryfilters = jQuery('#filters'),
            jQueryfiltersLinks = jQueryfilters.find('a');

        jQueryfiltersLinks.click(function () {
            console.log(this);
            var jQuerythis = jQuery(this).parent(this);
            // don't proceed if already selected
            if (jQuerythis.hasClass('active')) {
                return false;
            }
            var jQueryfilterLink = jQuerythis.parents('#filters');
            jQueryfilterLink.find('.active').removeClass('active');
            jQuerythis.addClass('active');
        });

        var jQuerycontainer2 = jQuery('.gallery');
        // initialize isotope
        jQuerycontainer2.isotope({
            filter: '*',
            masonry: {
                columnWidth: 1,
                gutterWidth: 0
            }
        });

        // filter items when filter link is clicked
        jQuery('#filters a').click(function () {
            var selector = jQuery(this).attr('data-filter');
            jQuerycontainer2.isotope({
                filter: selector
            });
            return false;
        });
        // set selected menu items
        var jQueryfilters = jQuery('#filters'),
            jQueryfiltersLinks = jQueryfilters.find('a');

        jQueryfiltersLinks.click(function () {
            console.log(this);
            var jQuerythis = jQuery(this).parent(this);
            // don't proceed if already selected
            if (jQuerythis.hasClass('active')) {
                return false;
            }
            var jQueryfilterLink = jQuerythis.parents('#filters');
            jQueryfilterLink.find('.active').removeClass('active');
            jQuerythis.addClass('active');
        });
    }
}

    // Sticky Navigation
    if (jQuery().sticky) {
        jQuery(".navbar").sticky({
            topSpacing: 0,
        });;
    }
    var shrinkHeader = 100;
    jQuery(window).scroll(function () {
        var scroll = getCurrentScroll();
        if (scroll >= shrinkHeader) {
            jQuery('.navbar').addClass('shrink');
        } else {
            jQuery('.navbar').removeClass('shrink');
        }
    });

    function getCurrentScroll() {
        return window.pageYOffset || document.documentElement.scrollTop;
    }


    // Dropdown hover
    if (jQuery().dropdownHover) {
        jQuery('.js-activated').dropdownHover().dropdown();
        jQuery(document).on('click', '.yamm .dropdown-menu', function (e) {
            e.stopPropagation()
        })
    }


    // Reservation Form	
    //jQueryUI - Datepicker
    if (jQuery().datepicker) {
        jQuery('#checkin').datepicker({
            showAnim: "drop",
            dateFormat: "dd/mm/yy",
            minDate: "-0D",
        });

        jQuery('#checkout').datepicker({
            showAnim: "drop",
            dateFormat: "dd/mm/yy",
            minDate: "-0D",
            beforeShow: function () {
                var a = jQuery("#checkin").datepicker('getDate');
                if (a) return {
                    minDate: a
                }
            }
        });
        jQuery('#checkin, #checkout').on('focus', function () {
            jQuery(this).blur();
        }); // Remove virtual keyboard on touch devices
    }


    //Popover
    jQuery('[data-toggle="popover"]').popover();


    // Guests
    // Show guestsblock onClick
    var guestsblock = jQuery(".guests");
    var guestsselect = jQuery(".guests-select");
    var save = jQuery(".button-save");
    guestsblock.hide();

    guestsselect.click(function () {
        guestsblock.show();
    });

    save.click(function () {
        guestsblock.fadeOut(120);
    });


    // Count guests script
    var opt1;
    var opt2;
    var total;
    jQuery('.adults select, .children select').change(

        function () {
            opt1 = jQuery('.adults').find('option:selected');
            opt2 = jQuery('.children').find('option:selected');

            total = +opt1.val() + +opt2.val();
            jQuery(".guests-select .total").html(total);
        });


});