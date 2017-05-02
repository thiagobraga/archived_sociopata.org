/**
 * @file   facebook.js
 * @author Thiago Braga <contato@thiagobraga.org>
 */

/**
 * Sociopata
 * @namespace
 */
var Sociopata = Sociopata || {};

/**
 * Core
 *
 * @type {Object}
 */
Sociopata.Core = Sociopata.Core || {};

/**
 * Facebook
 *
 * @type {Object}
 */
Sociopata.Core.Facebook = (function () {

    'use strict';
    var

        /**
         * Realiza o login com Facebook.
         *
         * @return {void}
         */
        facebookLogin = function () {
            var scope = [
                'email',
                'user_about_me',
                'public_profile'
            ].join(', ');

            FB.init({
                appId:   '475565802516661',
                cookie:  true,
                version: 'v2.1'
            });

            FB.login(function (response) {
                if (response.authResponse) {
                    parent.location = '/admin/login';
                }
            }, { scope: scope });
        },

        /**
         * [description]
         *
         * @return  {void}
         */
        buttonListener = (function () {
            var facebook_login = $('#facebook-login');

            facebook_login.on('click', function (event) {
                event.preventDefault();
                facebookLogin();
            });
        }());

}());
