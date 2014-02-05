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
    <meta name="google-site-verification" content="6uEjYoQKu4qZUM2tT_OSwRSMR9syC3MuKmGnO1IUuZE" />

    <!-- ICONS -->
    <link href="<?php echo base_url('assets/images/icons/favicon.ico') ?>" rel="shortcut icon" sizes="16x16" type="image/png" />
    <link href="<?php echo base_url('assets/images/icons/windows.ico') ?>" rel="icon" sizes="48x48" type="image/vnd.microsoft.icon" />
    <link href="<?php echo base_url('assets/images/icons/apple-57x57.png') ?>" rel="apple-touch-icon" sizes="57x57" type="image/png" />
    <link href="<?php echo base_url('assets/images/icons/apple-72x72.png') ?>" rel="apple-touch-icon" sizes="72x72" type="image/png" />
    <link href="<?php echo base_url('assets/images/icons/apple-114x114.png') ?>" rel="apple-touch-icon" sizes="114x114" type="image/png" />
    <link href="<?php echo base_url('assets/images/icons/apple-144x144.png') ?>" rel="apple-touch-icon" sizes="144x144" type="image/png" />

    <!-- FACEBOOK -->
    <meta property="og:title" content="<?php echo $title ?>" />
    <meta property="og:site_name" content="<?php echo $title ?>" />
    <meta property="og:description" content="<?php echo $description ?>" />
    <meta property="og:url" content="<?php echo base_url() ?>" />
    <meta property="og:image" content="<?php echo base_url('assets/images/icons/facebook.jpg') ?>" />
    <meta property="og:type" content="website" />
    <meta property="fb:admins" content="100001599541810" />

    <!-- HTML5 SUPPORT FOR IE6-8 -->
    <!--[if lt IE 9]>
        <script src="<?php echo base_url('assets/js/plugins/html5shiv/html5shiv.min.js') ?>"></script>
    <![endif]-->

    <!-- CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/main.css') ?>" rel="stylesheet" />

    <?php if (isset($css)) {
        foreach ($css as $file) { ?>
            <link href="<?php echo base_url('assets/' . $file . '.css') ?>" rel="stylesheet" />
        <?php }
    } ?>
</head>
