<head>
  <!-- SEO -->
  <meta charset="utf-8">
  <meta name="author" content="Thiago Braga" />
  <meta name="reply-to" content="thibraga06@gmail.com" />
  <meta name="robots" content="index, follow" />
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <!-- SITE DESCRIPTION -->
  <title><?= lang('title') ?></title>
  <meta name="description" content="<?= lang('description') ?>" />
  <meta name="keywords" content="<?= $keywords ?>" />

  <!-- ICONS -->
  <link href="<?= base_url("assets/img/icons/favicon.ico") ?>" rel="shortcut icon" sizes="16x16" type="image/png" />
  <link href="<?= base_url("assets/img/icons/windows.ico") ?>" rel="icon" sizes="48x48" type="image/vnd.microsoft.icon" />
  <link href="<?= base_url("assets/img/icons/apple-57x57.png") ?>" rel="apple-touch-icon" sizes="57x57" type="image/png" />
  <link href="<?= base_url("assets/img/icons/apple-72x72.png") ?>" rel="apple-touch-icon" sizes="72x72" type="image/png" />
  <link href="<?= base_url("assets/img/icons/apple-114x114.png") ?>" rel="apple-touch-icon" sizes="114x114" type="image/png" />
  <link href="<?= base_url("assets/img/icons/apple-144x144.png") ?>" rel="apple-touch-icon" sizes="144x144" type="image/png" />

  <!-- FACEBOOK -->
  <link href="<?= base_url('pt') ?>" rel="canonical" />
  <meta property="og:title" content="<?= $title ?>" />
  <meta property="og:site_name" content="<?= $title ?>" />
  <meta property="og:description" content="<?= $description ?>" />
  <meta property="og:url" content="<?= base_url('pt') ?>" />
  <meta property="og:image" content="<?= base_url("assets/img/icons/facebook.png") ?>" />
  <meta property="og:type" content="website" />
  <meta property="fb:admins" content="100001599541810" />

  <!-- HTML5 SUPPORT FOR IE6-8 -->
  <!--[if lt IE 9]>
  <script src="<?= base_url("assets/js/plugins/html5shiv/html5shiv.min.js") ?>"></script>
  <![endif]-->

  <!-- CSS -->
  <? if (ENVIRONMENT == 'production') : ?>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet" />
  <? else : ?>
    <link href="<?= base_url("assets/bootstrap/css/bootstrap.css") ?>" rel="stylesheet" />
    <link href="<?= base_url("assets/bootstrap/css/bootstrap-responsive.css") ?>" rel="stylesheet" />
  <? endif; ?>

  <link href="<?= base_url("assets/css/main.css") ?>" rel="stylesheet" />
  <? if (!empty($css)) : ?>
    <? foreach ($css as $file) : ?>
      <link href="<?= base_url("assets/css/$file.css") ?>" rel="stylesheet" />
    <? endforeach ?>
  <? endif ?>
</head>