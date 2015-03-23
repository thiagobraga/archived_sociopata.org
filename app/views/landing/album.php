<h5 class="text-center">Ouça o primeiro álbum</h5>

<?php

$url = '';
$params = array(
    array('url',                 'https%3A//api.soundcloud.com/playlists/17219573'),
    array('color',               '000000'),
    array('theme_color',         '33ff00'),
    array('buying',              'false'),
    array('download',            'true'),
    array('sharing',             'true'),
    array('auto_play',           'false'),
    array('hide_related',        'true'),
    array('show_comments',       'true'),
    array('show_user',           'true'),
    array('show_reposts',        'false'),
    array('text_download_track', 'Download')
);

foreach ($params as $i => $param) {
    $url .= $param[0] . '=' . $param[1] . '&';
}

?>

<div class="col-xs-offset-3 col-xs-6">
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item"
            scrolling="no"
            frameborder="no"
            src="https://w.soundcloud.com/player/?<?php echo $url ?>">
        </iframe>
    </div>
</div>
