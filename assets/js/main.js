/**
 * @file       main.js
 * @project    Sociopata
 * @developer  Thiago Braga <thiago@sociopata.org>
 * @url        http://sociopata.org
 */

var main = (function () {

    'use strict';
    var s,

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
                data: $('#contact').serialize()
            }).done(function (response) {

            })
        },

        /**
         * Configura a conta de usuário do Google Analytics.
         *
         * @return {[type]}
         */
        setGoogleAnalytics = function () {
            var _gaq = [
                ['_setAccount', 'UA-36613651-1'],
                ['_trackPageview']
            ];
        },

        /**
         * Carrega arquivos JavaScript assincronamente.
         *
         * @param  {String}  url   A URL do arquivo JavaScript
         * @param  {String}  id    O ID do objeto <script> (opcional)
         * @param  {Boolean} async Se a requisição será assíncrona (padrão: true)
         * @return {void}
         */
        loadJS = function (url, id, async) {
            var js,
                doc = window.document,
                first_js = doc.getElementsByTagName('script')[0];

            if (doc.getElementById(id)) {
                return;
            }

            js = doc.createElement('script');
            js.src = url;
            js.async = (async === undefined);

            if (id) {
                js.id = id;
            }

            first_js.parentNode.insertBefore(js, first_js);
        };

}());
