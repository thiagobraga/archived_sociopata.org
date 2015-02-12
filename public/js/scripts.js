var deploy = (function () {

    'use strict';
    var

        updateDatabase = (function () {
            var button = $('button'),
                result = $('#result');

            button.on('click', function () {
                if (result.find('.hljs')) {
                    result.find('.hljs').html('');
                }

                setTimeout(function () {
                    $.ajax({
                        url: '/deploy/ajax_updateDatabase',
                        success: function (response) {
                            console.log(response);
                            var i,
                                content = '<pre><code>';

                            for (i = 0; i < response.output.length; i++) {
                                if (
                                    response.output[i].indexOf('--') === 0 ||
                                    response.output[i].indexOf('Bye') === 0 ||
                                    response.output[i] === ''
                                ) {
                                    continue;
                                } else if (
                                    response.output[i].indexOf('Query OK') === 0 ||
                                    response.output[i].indexOf('Warning') === 0
                                ) {
                                    content += response.output[i] + '<br/><br/>';
                                } else {
                                    content += response.output[i] + '<br/>';
                                }
                            }

                            if (response.return == 1) {
                                content += '<br/><br/><b style="color: #ce5353 !important">Ocorreu um erro na execução do arquivo</b>';
                            }

                            content += '</code></pre>';

                            document.getElementById('result').innerHTML = content;

                            $('pre code').each(function (i, e) {
                                hljs.highlightBlock(e);
                            });
                        }
                    });
                }, 1500);
            });
        }()),

        syntaxHighlight = (function () {
            var editor = CodeMirror.fromTextArea(document.getElementById("query"), {
                lineNumbers: true,
                styleActiveLine: true,
                matchBrackets: true,
                mode: 'text/x-mysql',
                theme: 'monokai'
            });
        }());

}());

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
        }()),

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
                appId   : '475565802516661',
                cookie  : true,
                version : 'v2.1'
            });

            FB.login(function (response) {
                if (response.authResponse) {
                    parent.location = '/admin/login';
                }
            }, { scope: scope });
        };

}());

/**
 * @file home.js
 */

var Sociopata = Sociopata || {};

/**
 * [description]
 *
 * @return  {[type]}
 */
Sociopata.Home = (function () {

    'use strict';
    var

        /**
         * Load Facebook fanpage posts via Ajax.
         *
         * @return  {void}
         */
        loadNews = function () {
            $.ajax({
                url: '/home/news',
                dataType: 'json',
                type: 'get'
            }).done(function (response) {
                if (response.data) {
                    var i,
                        content = '',
                        data = response.data,
                        size = data.length,
                        news = $('#news'),

                        // API variables
                        message,
                        created_time,
                        picture,
                        link,
                        from;

                    for (i = 0; i < size; i++) {
                        message      = data[i].message;
                        created_time = data[i].created_time;
                        picture      = data[i].picture;
                        link         = data[i].link;
                        from         = data[i].from;

                        if (message && from.name === 'Sociopata') {
                            content += [
                                '<section class="clearfix">',
                                '<img class="pull-right" src="' + picture + '" />',
                                '<small>' + created_time + '</small><br/>',
                                message,
                                '</section>',
                                '<hr/>'
                            ].join('');
                        }
                    }

                    news.html(content);
                }
            }).fail(function (jqXHR, textStatus, errorThrown) {
                console.error(errorThrown);
            })
        },

        /**
         * [description]
         *
         * @param   {[type]}
         * @return  {[type]}
         */
        init = (function () {

            // Sound Manager
            soundManager.url                = '/swfs/';
            soundManager.flashVersion       = 9;
            soundManager.useFlashBlock      = false;
            soundManager.useHighPerformance = true;
            soundManager.wmode              = 'transparent';
            soundManager.useFastPolling     = true;

            soundManager.onready(function () {
                var html = '',
                    consumer_key = '33f605127db5be11440cc0ecb3106cbe',
                    url = [
                        'http://api.soundcloud.com/resolve?url=',
                        'http://soundcloud.com/sociopata/sets/2013-sociopata',
                        '&format=json&consumer_key=' + consumer_key,
                        '&callback=?'
                    ].join('');

                $.getJSON(url, function (playlist) {
                    $.each(playlist.tracks, function (index, track) {
                        $('<li>' + track.title + '</li>').data('track', track).appendTo('.tracks');
                        url = track.stream_url;
                        (url.indexOf('secret_token') == -1) ? url = url + '?' : url = url + '&';
                        url = url + 'consumer_key=' + consumer_key;

                        soundManager.createSound({
                            id: 'track_' + track.id,
                            url: url,
                            onplay: function () {
                                $('.player').addClass('playing');
                                $('.title').text(track.title);
                            },
                            onresume: function () {
                                $('.player').addClass('playing');
                            },
                            onpause: function () {
                                $('.player').removeClass('playing');
                            },
                            onfinish: function() {
                                nextTrack();
                            }
                        });
                    });

                    $('.tracks li').on('click', function () {
                        var $track = $(this),
                            data = $track.data('track'),
                            playing = $track.is('.active');

                        if (playing) {
                            soundManager.pause('track_' + data.id);
                        } else {
                            if ($track.siblings('li').hasClass('active')) { soundManager.stopAll(); }
                            soundManager.play('track_' + data.id);
                        }
                        $track.toggleClass('active').siblings('li').removeClass('active');
                    });

                    $('.play, .pause').on('click', function(){
                        if ( $('li').hasClass('active') == true ) {
                            soundManager.togglePause( 'track_' + $('li.active').data('track').id );
                        } else {
                            $('li:first').click();
                        }
                    });

                    $('.next').on('click', function(){
                        nextTrack();
                    });

                    $('.prev').on('click', function(){
                        prevTrack();
                    });

                    var nextTrack = function(){
                        soundManager.stopAll();
                        if ( $('li.active').next().click().length == 0 ) {
                            $('.tracks li:first').click();
                        }
                    };

                    var prevTrack = function(){
                        soundManager.stopAll();
                        if ( $('li.active').prev().click().length == 0 ) {
                            $('.tracks li:last').click();
                        }
                    };
                });
            });

            // owlCarousel
            $('.owl-carousel').owlCarousel({
                singleItem: true,
                loop: true,
                autoPlay: 12000,
                lazyLoad: true,
                navigation: false,
                pagination: false,
                transitionStyle: 'fade'
            });
        }());

}());

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
                data: $('#contact').serialize()
            }).done(function (response) {

            });
        },

        /**
         * Configura a conta de usuário do Google Analytics.
         *
         * @return {[type]}
         */
        setGoogleAnalytics = function () {
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
        },

        /**
         * [description]
         *
         * @param
         * @return
         */
        init = (function () {
            $('#news').linkify();

            var body = $('body');

            $(window).scroll(function () {
                var yPos  = -($(window).scrollTop() / 10),
                    bgpos = yPos + 'px';

                body.css('background-position-y', bgpos);
            });
        }());

}());

(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-36613651-1', 'auto');
ga('send', 'pageview');

/*!
 * midia.js
 * @project Sociopata
 * @developer Thiago Braga <contato@thiagobraga.org>
 * @url www.sociopata.org
 */

var midia = (function () {

    'use strict';
    var s,

        getVideos = (function () {
            var url_video = [
                'http://gdata.youtube.com/feeds/users/sociopataweb',
                '/uploads?alt=json',
                '&max-results=5',
                '&fields=',
                'entry(id,title,media:group(media:thumbnail(@url),media:description))'
            ].join('');

            $.ajax({
                url: url_video,
                type: 'post',
                dataType: 'jsonp'
            }).done(function (response) {
                var i,
                    content = '',
                    youtube_id,
                    videos = $('.videos'),
                    entry = response.feed.entry;

                for (i = 0; i < entry.length; i++) {
                    youtube_id = entry[i].id.$t.split('/');
                    youtube_id = youtube_id[youtube_id.length - 1];

                    content += [
                        '<div class="col-sm-12">',
                        '<video class="player img-responsive" preload="none">',
                        '<source src="http://www.youtube.com/watch?v=' + youtube_id + '" type="video/youtube" />',
                        '</video>',
                        '<p>' + entry[i].title.$t + '</p>',
                        '</div>'
                    ].join('');
                }

                videos.find('.row').html(content);
                //$('.player').mediaelementplayer();
            });
        }());

})();

/*!
 * @file styleguide.js
 * @project Sociopata
 * @developed Thiago Braga <thiago@sociopata.org>
 * @url www.sociopata.org
*/

(function ($, window, undefined) {

	'use strict';
	var

		// Cache the select elements with selectpicker class
		select = $('.selectpicker');

	select.selectpicker();

})(window.jQuery, window);
