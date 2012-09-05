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
        <div id='wrapper'>
            <!-- TOP -->
            <div id='top'>
                <div class='float'>
                    <a href='<?= base_url() ?>'>
                        <img src='<?= base_url('assets/img/logo.png') ?>'
                             alt='MB Consultoria Jurídica'
                             width='273'
                             height='94' />
                    </a>
                </div>

                <!-- LOGIN -->
                <div class='float'>
                    <div id='login-box'>
                        <form id='login-box-form' method='post'>
                            <div class='row'>
                                <span>ÁREA RESTRITA</span>

                                <!-- isset session userdata -->
                                <label for='login'>login</label>
                                <input type='text' id='login' maxlength='20' />

                                <label for='senha'>senha</label>
                                <input type='password' id='senha' maxlength='20' />

                                <input type='submit' class='btn' value='ENTRAR' />
                                <!-- else -->
                            </div>
                        </form>
                    </div>

                    <!-- MENU -->
                    <ul id='menu'>
                        <li><a href='<?= base_url() ?>'>HOME</a></li>
                        <li><a href='<?= base_url('sobre') ?>'>QUEM SOMOS</a></li>
                        <li><a href='<?= base_url('atuacao') ?>'>ÁREA DE ATUAÇÃO</a></li>
                        <li><a href='<?= base_url('links') ?>'>LINKS ÚTEIS</a></li>
                        <li><a href='<?= base_url('contato') ?>'>CONTATO</a></li>
                    </ul>

                    <!-- BREADCRUMB -->
                    <div id='breadcrumb'>
                        <span>Você está em: <?= set_breadcrumb() ?></span>
                    </div>
                </div>
            </div>

            <div class='clear'></div>

            <!-- CONTENT -->
            <div id='content'>
                <? if (isset($body)) $this->load->view($body) ?>
            </div>
        </div>

        <div class='clear'></div>

        <!-- FOOTER -->
        <div id='footer'>
            <div id='container'>

                <!-- SITEMAP -->
                <div class='column-left'>
                    <h3>MAPA DO SITE</h3>

                    <ul id='sitemap'>
                        <li><a href='<?= base_url() ?>'>HOME</a></li>
                        <li><a href='<?= base_url('sobre') ?>'>QUEM SOMOS</a></li>
                        <li><a href='<?= base_url('atuacao') ?>'>ÁREA DE ATUAÇÃO</a></li>
                        <li><a href='<?= base_url('processos') ?>'>PROCESSOS</a></li>
                        <li><a href='<?= base_url('noticias') ?>'>NOTÍCIAS</a></li>
                        <li><a href='<?= base_url('links') ?>'>LINKS ÚTEIS</a></li>
                        <li><a href='<?= base_url('contato') ?>'>CONTATO</a></li>
                    </ul>
                </div>

                <!-- CONTACT -->
                <div class='column-right'>
                    <div class='float'>
                        <h3>CONTATO</h3>
                        <h4>(14) 3262-1105</h4>

                        <address>
                            Rua XV de Novembro 595 e 665 &nbsp; | &nbsp; Centro<br />
                            CEP 17120-000 &nbsp; | &nbsp; Agudos &nbsp; | &nbsp; SP
                        </address>

                        <div id='map_canvas'></div>
                    </div>

                    <div class='float'>
                        <form id='footer-form' method='post'>
                            <div class='control-group'>
                                <label for='nome'>Nome</label>
                                <input id='nome' name='nome' type='text' />
                            </div>

                            <div class='control-group'>
                                <label for='e-mail'>E-mail</label>
                                <input id='e-mail' name='e-mail' type='email' />
                            </div>

                            <div class='control-group'>
                                <label for='mensagem'>Mensagem</label>
                                <textarea id='mensagem' name='mensagem' rows='4'></textarea>
                            </div>

                            <div class='action-group'>
                                <input id='enviar' class='btn' type='submit' value='ENVIAR' />
                                <img src='<?= base_url('assets/img/ajax-loader.gif') ?>'
                                     alt='Loading...'
                                     class='loading hide'
                                     width='16'
                                     height='16' />
                            </div>
                        </form>
                    </div>
                </div>

                <!-- COPYRIGHT -->
                <div>
                    <span>
                        &copy; 2012 - TODOS OS DIREITOS RESERVADOS<br />
                        DESENVOLVIDO POR &nbsp;
                        <a href='//www.sitesg.com.br' target='_blank'>
                            <img src='<?= base_url('assets/img/icons/sg.png') ?>'
                                 alt='SG: Comunicação e Design'
                                 title='SG: Comunicação e Design<br />sitesg.com.br'
                                 width='25'
                                 height='16' />
                        </a>
                    </span>
                </div>
            </div>
        </div>

        <!-- MODAL -->
        <div id='footer-result' class='modal hide fade'>
            <div class='modal-header'>
                <button class='btn close' aria-hidden='true' data-dismiss='modal' type="button">&times;</button>
                <h3 id='result-header'></h3>
            </div>
            <div class="modal-body">
                <p id='result-body'></p>
            </div>
        </div>

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
            <script src='//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js' type='text/javascript'></script>
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