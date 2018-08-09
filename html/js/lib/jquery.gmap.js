/*
 *  RD-Google Map - v0.1
 *  Easy as hell Google Map Api Jquery plugin.
 *
 *  Made by Evgeniy Gusarov (Stmechanus || Diversant)
 *
 *  Under MIT License
 */

;
(function ($) {
    'use strict';
	
	var tmp = $(".map-item");
	
    var def_settings = {
            cntClass: 'map',
            mapClass: 'map-model',
            locationsClass: 'map-location',
            marker: {
                basic: 'img/gmap_marker.png',
                active: 'img/gmap_marker_active.png'
            },
            styles: []
        },

        defaults = {
            map: {
                x: tmp.data('x'),
                y: tmp.data('y'),
                zoom: tmp.data('zoom')
            },
            locations: []
        };


    var getLocations = function ($map, settings) {
        var $locations = $map.parent().find('.' + settings.locationsClass).find('li');

        var locations = [];


        if ($locations.length > 0) {
            $locations.each(function (i) {
                var $loc = $(this);

                if ($loc.data('x') && $loc.data('y')) {
                    locations[i] = {
                        x: $loc.data('x'),
                        y: $loc.data('y'),
                        basic: $loc.data('basic') ? $loc.data('basic') : settings.marker.basic,
                        active: $loc.data('active') ? $loc.data('active') : settings.marker.active
                    };

                    if (!$.trim($loc.html())) {
                        locations[i].content = false;
                    } else {
                        locations[i].content = '<div class="iw-content">' + $loc.html() + '</div>';
                    }
                }
            });
        }
        return locations;
    };

    $.fn.googleMap = function (settings) {

        settings = $.extend(true, {}, def_settings, settings);

        $(this).each(function () {
            var $this = $(this);

            var options = $.extend(
                true, {}, defaults,
                {
                    map: {
                        x: $this.data('x'),
                        y: $this.data('y'),
                        zoom: $this.data('zoom')
                    },
                    locations: getLocations($this, settings)
                }
            );

            var map = new google.maps.Map(this, {
                    center: new google.maps.LatLng(
                        parseFloat(options.map.x),
                        parseFloat(options.map.y)
                    ),
                    scrollwheel: false,
                    styles: settings.styles,
                    zoom: options.map.zoom
                }),
                infowindow = new google.maps.InfoWindow(),
                markers = [];

            for (var i in options.locations) {
                markers[i] = new google.maps.Marker(
                    {
                        position: new google.maps.LatLng(
                            parseFloat(options.locations[i].x),
                            parseFloat(options.locations[i].y)),
                        map: map,
                        icon: options.locations[i].basic,
                        index: i
                    }
                );


                if (options.locations[i].content)
                {
                    infowindow.setContent(options.locations[markers[i].index].content);
                    infowindow.open(map, markers[i]);
                    $('.gm-style-iw').parent().parent().addClass("gm-wrapper");
                    markers[i].setIcon(options.locations[markers[i].index].active);

                    // listenter
                    google.maps.event.addListener(markers[i], 'click', function () {
                        for (var j in markers) {
                            markers[j].setIcon(options.locations[j].basic);
                        }

                        infowindow.setContent(options.locations[this.index].content);
                        infowindow.open(map, this);
                        $('.gm-style-iw').parent().parent().addClass("gm-wrapper");
                        this.setIcon(options.locations[this.index].active);
                    });
                    google.maps.event.addListener(infowindow, 'closeclick', function () {
                        for (var j in markers) {
                            markers[j].setIcon(options.locations[j].basic);
                        }
                    });
                }
            }

            google.maps.event.addDomListener(window, 'resize', function() {
                map.setCenter(new google.maps.LatLng(
                    parseFloat(options.map.x),
                    parseFloat(options.map.y)
                ));
            });
        });
    };

})(jQuery);
