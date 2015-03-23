<?php

$url = '';
$params = array(
    array('modestbranding',      '1'),
    array('autoplay',            '0'),
    array('rel',                 '0'),
    array('showinfo',            '0'),
    array('controls',            '0'),
    array('autohide',            '1')
);

foreach ($params as $i => $param) {
    $url .= $param[0] . '=' . $param[1] . '&';
}


?>

<div class="col-xs-offset-3 col-xs-6">
    <h5 class="text-center">Teaser de lançamento do EP Corrosão</h5>

    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item"
            src="https://www.youtube.com/embed/65y4vUPIn0A?<?php echo $url ?>"
            frameborder="0"
            allowfullscreen>
        </iframe>
    </div>
</div>
