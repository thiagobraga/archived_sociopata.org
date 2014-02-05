/*!
 * home.js
 * @project Sociopata
 * @developer Thiago Braga <thibraga06@gmail.com>
 * @url www.sociopata.org
 */

(function () {

	'use strict';
	var

		i,
		content = '',

		videos = $('.videos'),

		// URL para receber JSON do Youtube.
		url_video = 'http://gdata.youtube.com/feeds/users/sociopataweb/uploads?alt=json&max-results=5&fields=entry(id,title,media:group(media:thumbnail(@url),media:description))';

	$.post(url_video, function (response) {
		var entry = response.feed.entry;

		for (i = 0; i < entry.length; i++) {
			var youtube_id = entry[i].id.$t.split('/');
			youtube_id = youtube_id[youtube_id.length - 1];

			content += '\n\
				<div class="col-md-6">\n\
					<video class="player img-responsive" preload="none">\n\
						<source src="http://www.youtube.com/watch?v=' + youtube_id + '" type="video/youtube" />\n\
					</video>\n\
					<h6>' + entry[i].title.$t.replace('Sociopata - ', '') + '</h6>\n\
				</div>';
		}

		videos.find('.row').html(content);
		$('.player').mediaelementplayer();
	}, 'jsonp');
})();