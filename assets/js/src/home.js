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
        loadNews = (function () {
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
                                created_time,
                                '<br/>',
                                '<img src="' + picture + '" />',
                                '<br/>',
                                //'<a href="' + link + '" about="_blank">' + link + '</a>',
                                '<br/>',
                                message,
                                '<hr/>'
                            ].join('');
                        }
                    }

                    news.html(content);
                }
            }).fail(function (jqXHR, textStatus, errorThrown) {
                console.error(errorThrown);
            })
        }());

}());
