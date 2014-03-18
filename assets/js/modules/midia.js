/*!
 * home.js
 * @project Sociopata
 * @developer Thiago Braga <thibraga06@gmail.com>
 * @url www.sociopata.org
 */

(function () {

    'use strict';
    var

        username = 'sociopataweb',
        max_results = 5,
        fields = 'entry(id,title,media:group(media:thumbnail(@url),media:description))',

        url_video = 'http://gdata.youtube.com/feeds/users/'
            + username
            + '/uploads?alt=json'
            + '&max-results=' + max_results
            + '&fields=' + fields,

        getVideos = (function () {
            $.post(url_video, function (response) {
                var i,
                    content = '',
                    youtube_id,
                    videos = $('.videos'),
                    entry = response.feed.entry;

                for (i = 0; i < entry.length; i++) {
                    youtube_id = entry[i].id.$t.split('/');
                    youtube_id = youtube_id[youtube_id.length - 1];

                    content += '<div class="col-md-6">'
                        + '<video class="player img-responsive" preload="none">'
                        + '<source src="http://www.youtube.com/watch?v=' + youtube_id + '" type="video/youtube" />'
                        + '</video>'
                        + '<p>' + entry[i].title.$t + '</p>'
                        + '</div>';
                }

                videos.find('.row').html(content);
                $('.player').mediaelementplayer();
            }, 'jsonp');
        }());

})();
