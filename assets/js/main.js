/**
 * @file       main.js
 * @project    Sociopata
 * @developer  Thiago Braga <thiago@sociopata.org>
 * @url        http://sociopata.org
 */

var main = (function () {

    'use strict';
    var

        /**
         * Send mail via ajax
         *
         * @param  HTMLElement form The contact form
         * @return void
         */
        sendMail = function () {
            $.ajax({
                url: 'home/ajax_send',
                type: 'post',
                dataType: 'json',
                data: $('#contact').serialize(),
                success: function (response) {}
            });
        },

        /**
         * Configura a conta de usuário do Google Analytics.
         *
         * @return {[type]}
         */
        setGoogleAnalytics = function () {
            var _gaq = [];
            _gaq.push(
                ['_setAccount', 'UA-36613651-1'],
                ['_trackPageview']
            );
        },

        /**
         * Carrega arquivos JavaScript assincronamente.
         *
         * @param  {Object} doc     Document passado por parâmetro
         * @return {Object}
         */
        loadJS = (function (doc) {
            return {
                add: function (url, id, async) {
                    if (doc.getElementById(id))
                        return;

                    var js,
                        first_js = doc.getElementsByTagName('script')[0];

                    js = doc.createElement('script');
                    js.src = url;
                    js.id = id || null;
                    js.async = async || true;
                    first_js.parentNode.insertBefore(js, first_js);
                }
            };
        }(document)),

        /**
         * Target _blank for all external links
         *
         * @return {void}
         */
        targetBlank = function () {
            var external = $('a[href^="//"]');
            external.prop('target', '_blank');
        },

        /**
         * Inicialização do módulo
         *
         * @return {void}
         */
        init = (function () {

        }());

}());
