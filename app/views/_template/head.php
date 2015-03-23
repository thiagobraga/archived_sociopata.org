<head>
    <meta charset="utf-8" />
    <meta name="author" content="Thiago Braga" />
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />

    <!-- SITE DESCRIPTION -->
    <title><?php echo $title ?></title>
    <meta name="description" content="<?php echo $description ?>" />
    <meta name="keywords" content="<?php echo $keywords ?>" />

    <!-- ICONS -->
    <link href="<?php echo base_url('src/images/icons/favicon.ico') ?>" rel="shortcut icon" />

    <!-- FACEBOOK -->
    <meta property="og:title" content="<?php echo $title ?>" />
    <meta property="og:site_name" content="<?php echo $title ?>" />
    <meta property="og:description" content="<?php echo $description ?>" />
    <meta property="og:url" content="<?php echo base_url() ?>" />
    <meta property="og:image" content="<?php echo base_url('public/images/icons/facebook.jpg') ?>" />
    <meta property="og:type" content="website" />
    <meta property="fb:admins" content="100001599541810" />

    <!-- HTML5 SUPPORT FOR IE6-8 -->
    <!--[if lt IE 9]>
        <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <![endif]-->

    <!-- CSS -->
    <?php if (isset($css)) {
        foreach ($css as $file) { ?>
            <link href="<?php echo base_url("$file.css") ?>" rel="stylesheet" />
        <?php }
    } ?>
</head>
