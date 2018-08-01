/**
 * Created by NTH.
 */
(function ($) {
    'use strict';

    $(document).foundation();

    // Start the main app logic.
    $(function() {

        // ToTop
        let tt = $('html');
        if (tt.hasClass('desktop')) {

            $.getScript(SITE_DIR + 'js/lib/jquery.ui.totop.js', function () {
                $().UItoTop({
                    text: '',
                    easingType: 'easeOutQuart',
                    containerClass: 'toTop fa fa-arrow-up'
                });
            });
        }

        // waitForImages loaded
        $.getScript(SITE_DIR + 'js/lib/jquery.waitforimages.min.js', function () {
            $('body').waitForImages(function() {
                let preloader = $('.preloader');
                preloader.fadeOut().remove();
            }, $.noop, true);
        });

        // home slides
        if ($("#jslides_1").length) {

            $.getScript(SITE_DIR + 'js/lib/jssor.slider-27.2.0.min.js', function () {
                let jSlideoTransitions = [
                    [{b: -1, d: 1, o: -0.7}],
                    [{b: 900, d: 2000, x: -379, e: {x: 7}}],
                    [{b: 900, d: 2000, x: -379, e: {x: 7}}],
                    [{b: -1, d: 1, o: -1, sX: 2, sY: 2}, {
                        b: 0,
                        d: 900,
                        x: -171,
                        y: -341,
                        o: 1,
                        sX: -2,
                        sY: -2,
                        e: {x: 3, y: 3, sX: 3, sY: 3}
                    }, {b: 900, d: 1600, x: -283, o: -1, e: {x: 16}}]
                ];
                let joptions = {
                    $AutoPlay: 1,
                    $SlideDuration: 800,
                    $SlideEasing: $Jease$.$OutQuint,
                    $CaptionSliderOptions: {
                        $Class: $JssorCaptionSlideo$,
                        $Transitions: jSlideoTransitions
                    },
                    $ArrowNavigatorOptions: {
                        $Class: $JssorArrowNavigator$
                    },
                    $BulletNavigatorOptions: {
                        $Class: $JssorBulletNavigator$
                    }
                };
                let jslider = new $JssorSlider$("jslides_1", joptions);

                /*#region responsive code begin*/
                const MAX_WIDTH = 3000;

                /**
                 * ScaleSlider
                 */
                function ScaleSlider() {
                    let containerElement = jslider.$Elmt.parentNode;
                    let containerWidth = containerElement.clientWidth;

                    if (containerWidth) {

                        let expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);
                        jslider.$ScaleWidth(expectedWidth);
                    }
                    else {
                        window.setTimeout(ScaleSlider, 30);
                    }
                }

                // bind
                $(window).bind("orientationchange", ScaleSlider);
                $(window).on("resize", function () { ScaleSlider(); }).resize();
                /*#endregion responsive code end*/
            });
        }

        //...
        // footer contact form
        let frm_contact_f = $(".frm-contact-f");
        frm_contact_f.on('submit', function (e) {

            if (!validate_form($(this))) return false;

            // alert
            alert("form submit ok!");
            e.preventDefault();
        });

        // Invoke the resize event immediately
        // $(window).on('load resize', function () {});
        $(window).on("resize", function () {

            // fixed mobi menu
            fixed_responsive_menu();
            //...
            // remove fixed-top menu
            let body = $('body');
            let main_header = body.find('.main-header');
            main_header.addClass('on-top');
            body.find('.fixed-bar').css('height', main_header.outerHeight());
            if(is_mobile()) {
                body.find('.fixed-bar').css('height', 0);
                main_header.removeClass('on-top');
            }

        }).resize();

        // onload
        $(window).on("load", function () {

            // add .border class to table
            init_border_table();
        });
    });

    /**
     * validate_form
     *
     * @param selector
     * @returns {boolean}
     */
    function validate_form(selector) {
        selector.foundation('validateForm', selector);
        return !(selector.find('.form-error.is-visible').length || selector.find('.is-invalid-label').length || selector.find('.is-invalid-input').length);
    }

    /**
     * fixed responsive menu
     *
     * @param selector_node
     * @param atLeast
     */
    function fixed_responsive_menu(selector_node, atLeast) {
        let parent_node = selector_node;
        let at_least = atLeast;
        if (!selector_node) {
            parent_node = $(".parent_nav");
        }
        if (!atLeast) {
            at_least = 'large';
        }
        if (!Foundation.MediaQuery.atLeast(at_least)) {
            parent_node.addClass('vertical');
        }
        else {
            parent_node.removeClass('vertical');
        }
    }

    /**
     * is_mobile
     *
     * @param atLeast large|medium|small
     * @returns {*|jQuery|boolean}
     */
    function is_mobile(atLeast) {
        let at_least = atLeast;
        if (!atLeast) {
            at_least = 'medium';
        }

        return $('html, body').filter('html').hasClass('mobile') || !Foundation.MediaQuery.atLeast(at_least);
    }

})(jQuery);
