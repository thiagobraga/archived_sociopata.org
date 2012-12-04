<head>
  <!-- SEO -->
  <meta charset="utf-8">
  <meta name="author" content="Thiago Braga" />
  <meta name="reply-to" content="thibraga06@gmail.com" />
  <meta name="robots" content="index, follow" />
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <!-- SITE DESCRIPTION -->
  <title><?php echo $this->title ?><?php if (isset($page)) echo " | " . $page ?></title>
  <meta name="description" content="<?php echo $this->meta_description ?>" />
  <meta name="keywords" content="<?php echo $this->meta_keywords ?>" />
  <link rel="author" href="<?php echo base_url("assets/docs/humans.txt") ?>" />

  <!-- ICONS -->
  <link href="<?php echo base_url("assets/img/icons/favicon.png") ?>" rel="shortcut icon" sizes="16x16" type="image/png" />
  <link href="<?php echo base_url("assets/img/icons/windows.ico") ?>" rel="icon" sizes="32x32 48x48" type="image/vnd.microsoft.icon" />
  <link href="<?php echo base_url("assets/img/icons/apple-57x57.png") ?>" rel="apple-touch-icon" sizes="57x57" type="image/png" />
  <link href="<?php echo base_url("assets/img/icons/apple-72x72.png") ?>" rel="apple-touch-icon" sizes="72x72" type="image/png" />
  <link href="<?php echo base_url("assets/img/icons/apple-114x114.png") ?>" rel="apple-touch-icon" sizes="114x114" type="image/png" />
  <link href="<?php echo base_url("assets/img/icons/apple-144x144.png") ?>" rel="apple-touch-icon" sizes="144x144" type="image/png" />

  <!-- FACEBOOK -->
  <meta property="og:title" content="<?php echo $this->title ?>" />
  <meta property="og:site_name" content="<?php echo $this->title ?>" />
  <meta property="og:description" content="<?php echo $this->meta_description ?>" />
  <meta property="og:url" content="<?php echo base_url() ?>" />
  <meta property="og:image" content="<?php echo base_url("assets/img/icons/facebook.png") ?>" />
  <meta property="og:type" content="website" />
  <meta property="fb:admins" content="100001599541810" />

  <!-- HTML5 SUPPORT FOR IE6-8 -->
  <!--[if lt IE 9]>
  <script src="<?php echo base_url("assets/src/js/plugins/html5shiv.min.js") ?>" type="text/javascript"></script>
  <![endif]-->

  <!-- CSS -->
  <link href='//netdna.bootstrapcdn.com/bootswatch/2.2.1/cyborg/bootstrap.min.css' rel='stylesheet' type='text/css' />
  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.2.1/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
  <link href='<?php echo base_url('assets/css/main.css') ?>' rel='stylesheet' type='text/css' />
  <?php if (isset($css)) : ?>
    <?php foreach ($css as $file) : ?>
      <link href="<?php echo base_url("assets/css/" . $file . ".css") ?>" rel="stylesheet" type="text/css" />
    <?php endforeach ?>
  <?php endif ?>
</head>