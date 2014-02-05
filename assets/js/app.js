/*!
 * @file app.js
 * @project Sociopata
 * @developer Thiago Braga <thibraga06@gmail.com>
 * @url http://sociopata.org
 */

var main = (function main() {

    'use strict';
    var

        // The domain name of this site.
        project = 'sociopata.org',

        // The Google Analytics user account.
        googleAnalyticsUA = 'UA-36613651-1',

        // Google Analytics object.
        _gaq = [],

        // From jQuery source:
        // Use the correct document accordingly with window argument (sandbox)
        location = window.location,
        document = window.document,

        // jQuery cache
        body = $('body'),
        menu = $('#menu a'),
        navbar = $('#navbar-top'),
        slides = $('.carousel'),
        buttons = $('a:not(.navbar-brand), button, input[type="button"]'),
        external = $('a[href^="//"]'),

        // Root is a cache of the html and body selector
        // used in the smooth scroll function.
        root = $('html, body'),

        i,
        content = '',
        url,
        script,
        response,

        /**
         * Defines the base URL for client side.
         *
         * @param  {string} path The additional path to the URL.
         * @return {string}      The relative base URL.
         */
        baseUrl = function baseUrl(path) {
            var url;

            switch (location.host) {
                case project:
                    url = location.protocol + '//' + project + '/';
                    break;
                case 'test.' + project:
                    url = location.protocol + '//' + 'test.' + project + '/';
                    break;
                default:
                    url = location.protocol + '//'
                        + location.hostname + (location.port && ':' + location.port)
                        + '/' + project;
            }

            return path ? url + path : url;
        },

        /**
         * Send mail via ajax
         * @param HTMLElement form The contact form
         * @return void
         */
        sendMail = function sendMail() {
            $.ajax({
                url: baseUrl('home/ajax_send'),
                type: 'post',
                dataType: 'json',
                data: $('#contact').serialize(),
                success: function (response) {

                }
            });
        },

        /**
         * Append the Google Analytics API asynchronously.
         *
         * @return {[type]}
         */
        loadGoogleAnalytics = (function loadGoogleAnalytics() {
            var script = document.createElement('script');
            script.src = 'http://www.google-analytics.com/ga.js';
            script.type = 'text/javascript';
            script.async = true;
            document.body.appendChild(script);

            _gaq.push(
                ['_setAccount', googleAnalyticsUA],
                ['_trackPageview']
            );
        }()),

        // Target _blank for all external links
        targetBlank = (function targetBlank() {
            external.prop('target', '_blank');
        }()),

        /**
         * [description]
         * @return {[type]} [description]
         */
        hideAddressBar = (function () {
            // When ready...
            window.addEventListener("load",function() {
                // Set a timeout...
                setTimeout(function(){
                    // Hide the address bar!
                    window.scrollTo(0, 1);
                }, 0);
            });
        }()),

        detectOrientationChange = (function () {
            // Listen for orientation changes
            window.addEventListener("orientationchange", function() {
                // Announce the new orientation number
                console.log(window.orientation);
                // 0 means portrait, 90 means landscape rotated to the left, -90 means landscape rotated to the right
            }, false);
        }()),

        init = (function () {

        }());

    return {
        loadJS: loadJS
    };

}());


}());
