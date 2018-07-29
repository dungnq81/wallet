/**
 * Created by NTH.
 */
(function ($) {
    'use strict';

    $(document).foundation();

    // Start the main app logic.
    // $(document).ready(function ()
    $(function() {

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
    });

})(jQuery);
