/*!
 * midia.js
 * @project Sociopata
 * @developer Thiago Braga <contato@thiagobraga.org>
 * @url www.sociopata.org
 */

var midia = (function () {

    'use strict';
    var

        getVideos = (function () {
            var url_video = [
                'http://gdata.youtube.com/feeds/users/sociopataweb',
                '/uploads?alt=json',
                '&max-results=5',
                '&fields=',
                'entry(id,title,media:group(media:thumbnail(@url),media:description))'
            ].join('');

            $.post(url_video, function (response) {
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
                $('.player').mediaelementplayer();

            }, 'jsonp');
        }());

})();
