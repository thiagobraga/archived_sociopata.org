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
                navigation: false,
                pagination: false,
                transitionStyle: 'fade'
            });
        }());

}());
