<div class="panel panel-default featured">
    <div class="panel-body">
        <img src="<?php echo base_url('assets/images/logo/logo.png') ?>" class="img-logo" />
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default news">
            <div class="panel-heading">
                <h6>Notícias</h6>
            </div>

            <div class="panel-body">
                <?php foreach ($noticias as $noticia) { ?>
                    <div class="row post">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 img">
                            <img src="<?php echo base_url('assets/images/' . $noticia->imagem) ?>" class="img-responsive" />
                        </div>

                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                            <h6><?php echo $noticia->nome ?></h6>
                            <p><?php echo $noticia->descricao ?></a></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="panel panel-default next-event">
            <div class="panel-heading">
                <h6>Próximo Evento</h6>
            </div>

            <div class="panel-body">
                <?php if (!empty($eventos)) { ?>
                    <div class="row event">
                        <div class="col-xs-5 col-sm-6 col-md-5 col-lg-6 flyer">
                            <img src="<?php echo base_url('assets/images/events/' . $eventos->codigo . '.jpg') ?>" class="img-responsive" />
                        </div>

                        <div class="col-xs-7 col-sm-6 col-md-7 col-lg-6">
                            <a href="<?php echo base_url('eventos') ?>">
                                <h6><?php echo $eventos->nome ?></h6>
                                <p><?php echo $eventos->local ?></p>
                            </a>
                        </div>
                    </div>

                <?php } else { ?>
                    <p>Não existem eventos futuros.</p>
                    <!-- <p><a href="<?php echo base_url('fotos') ?>">Visite nossa galeria de fotos.</a></p> -->
                <?php } ?>
            </div>
        </div>
    </div>
</div>
