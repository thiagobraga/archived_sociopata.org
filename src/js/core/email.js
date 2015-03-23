/**
 * @file   email.js
 * @author Thiago Braga <thiago@institutosoma.org.br>
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
 * Email
 *
 * @type {Object}
 */
Sociopata.Core.Email = (function () {

    'use strict';
    var

        /**
         * Send an e-mail with the data from contact form
         * in Core page.
         *
         * @return {void}
         */
        sendEmail = function (event) {
            var form    = $('#landing-form'),
                name    = $('#input-name'),
                email   = $('#input-email'),
                message = $('#input-message'),
                btn     = $(event.target);

            if (btn.is('span')) {
                btn = btn.parents('.btn');
            }

            btn.addClass('disabled');

            $.ajax({
                url:      '/contato/send',
                type:     'post',
                dataType: 'json',
                data: {
                    name:    name.val(),
                    email:   email.val(),
                    message: message.val()
                }
            }).done(function (response) {
                if (response) {
                    noty({
                        text: 'Seu e-mail foi enviado com sucesso.',
                        type: 'success'
                    });
                    form[0].reset();
                } else {
                    noty({
                        text: 'Ocorreu um erro no envio do seu e-mail. Tente novamente mais tarde.',
                        type: 'error'
                    })
                }
            }).fail(function (jqXHR, textStatus, errorThrown) {
                noty({
                    text: 'Ocorreu um erro no envio do seu e-mail. Tente novamente mais tarde.',
                    type: 'error'
                });
            }).always(function () {
                btn.removeClass('disabled');
            });
        },

        /**
         * Cria o elemento feedback no canto direito da tela.
         * TODO: traduzir
         *
         * @return {void}
         */
        contactForm = (function () {
            $('#send').on('click', function (event) {
                event.preventDefault();
                sendEmail(event);
            });
        }());

}());
