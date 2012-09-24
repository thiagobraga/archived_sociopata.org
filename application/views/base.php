<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml'
      xmlns:og='http://ogp.me/ns#'
      xmlns:fb='http://www.facebook.com/2008/fbml'
      xml:lang='pt-br'>

    <head>
        <!-- SEO -->
        <meta http-equiv='content-type' content='text/html; charset=UTF-8' />
        <meta http-equiv='cache-control' content='public' />
        <meta http-equiv='content-language' content='pt-BR' />
        <meta http-equiv='X-UA-Compatible' content='chrome=1'>
        <meta name='author' content='Thiago Braga' />
        <meta name='reply-to' content='thibraga06@gmail.com' />
        <meta name='robots' content='index, follow' />
        <meta name='viewport' content='initial-scale=1.0, user-scalable=no, width=device-width' />

        <!-- SITE DESCRIPTION -->
        <title>Sociopata</title>
        <link href='<?= base_url('assets/img/favicon.ico') ?>' rel='shortcut icon' />
        <meta name='description' content='Sociopata' />
        <meta name='keywords' content='sociopata, thrash metal, hardcore, progressivo, brasil, sao paulo, bauru' />

        <!-- FACEBOOK -->
        <meta property='og:title' content='Sociopata' />
        <meta property='og:site_name' content='Sociopata' />
        <meta property='og:description' content='Sociopata' />
        <meta property='og:url' content='<?= base_url() ?>' />
        <meta property='og:image' content='<?= base_url('assets/img/icons/facebook.png') ?>' />
        <meta property='og:type' content='website' />
        <meta property='fb:admins' content='100001599541810' />

        <!-- HTML5 SUPPORT FOR IE6-8 -->
        <!--[if lt IE 9]>
        <script src='<?= base_url('assets/js/plugins/html5shiv.js') ?>' type='text/javascript'></script>
        <![endif]-->

        <!-- CSS -->
        <? if (ENVIRONMENT == 'production') { ?>
            <link href='//netdna.bootstrapcdn.com/twitter-bootstrap/2.1.0/css/bootstrap-combined.min.css' rel='stylesheet' type='text/css' />
        <? } else { ?>
            <link href='<?= base_url('assets/css/plugins/bootstrap.min.css') ?>' rel='stylesheet' type='text/css' />
        <? } ?>
        <link href='<?= base_url('assets/css/main.css') ?>' rel='stylesheet' type='text/css' />
        <? if (isset($css)) {
            foreach ($css as $cssfile) { ?>
                <link href='<?= base_url('assets/css/'.$cssfile.'.css') ?>' rel='stylesheet' type='text/css' />
            <? }
        } ?>
    </head>

    <body>
        <div class='container'>
            <!-- NAVBAR -->
            <div class='navbar navbar-inverse navbar-fixed-top hide'>
                <div class='navbar-inner'>
                    <div class='container'>
                        <ul class='nav'>
                            <li class='active'><a href='./index.html'>Home</a></li>
                            <li><a href='./getting-started.html'>Get started</a></li>
                            <li><a href='./scaffolding.html'>Scaffolding</a></li>
                            <li><a href='./base-css.html'>Base CSS</a></li>
                            <li><a href='./components.html'>Components</a></li>
                            <li><a href='./javascript.html'>Javascript</a></li>
                            <li><a href='./customize.html'>Customize</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- HEADER -->
            <header>
                <div class='brand'>
                    <a href='<?= base_url() ?>'>
                        <img src="<?= base_url('assets/img/logo/logo.png') ?>" />
                        <h3 class="center">www.sociopata.org</h3>
                    </a>
                </div>
            </header>

            <!-- CONTENT -->
            <div id='content'>
                <? if (isset($body)) $this->load->view($body) ?>
            </div>
        </div>

        <!-- FOOTER -->
        <footer>
            <!-- COPYRIGHT -->
            <div class='copyright'>
                &copy; 2012 - TODOS OS DIREITOS RESERVADOS<br />
                DESENVOLVIDO POR &nbsp;
                <a href='//www.sitesg.com.br' target='_blank'>
                    <img src='<?= base_url('assets/img/icons/sg.png') ?>'
                         alt='SG: Comunicação e Design'
                         title='SG: Comunicação e Design<br />sitesg.com.br'
                         width='25'
                         height='16' />
                </a>
            </div>
        </footer>

        <!-- SCRIPTS -->
        <script type='text/javascript'>
            /**
             * Set the base url of the site
             * according to the environment
             * @param string Extra URL
             */
            function base_url(a) {
                var url = '<?= base_url() ?>';
                if(a) return url + a;
                else return url;
            }
        </script>

        <? if (ENVIRONMENT == 'production') { ?>
            <script src='//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js' type='text/javascript'></script>
            <script src='//netdna.bootstrapcdn.com/twitter-bootstrap/2.1.0/js/bootstrap.min.js' type='text/javascript'></script>
        <? } else { ?>
            <script src='<?= base_url('assets/js/libs/jquery.min.js') ?>' type='text/javascript'></script>
            <script src='<?= base_url('assets/js/plugins/bootstrap.min.js') ?>' type='text/javascript'></script>
        <? } ?>
        <script src='<?= base_url('assets/js/main.js') ?>' type='text/javascript'></script>
        <? if (isset($js)) {
            foreach ($js as $jsfile) { ?>
                <script src='<?= base_url('assets/js/'.$jsfile.'.js') ?>' type='text/javascript'></script>
            <? }
        } ?>
    </body>
</html>