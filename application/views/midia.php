<h3 class="page-header"><?php echo $page ?></h3>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <h5>Vídeos</h5>
                <article class="videos">
                    <div class="row"></div>
                </article>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <h5>Álbuns</h5>
                <article class="albuns">
                    <?php foreach ($albuns as $album) { ?>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="<?php echo base_url('assets/images/albuns/' . $album->codigo . '-small.jpg') ?>" class="img-responsive" />
                            </div>
                            <div class="col-md-9">
                                <h6><?php echo $album->nome ?></h6>
                                <?php echo $album->tipo ?><br/>
                                <?php echo $album->ano ?><br/>
                                <?php echo $album->info ?><br/>
                            </div>
                        </div>

                    <?php } ?>
                </article>
            </div>
        </div>
    </div>

    <div class="col-md-12 hide">
        <div class="panel panel-default">
            <div class="panel-body">
                <h5>Letras</h5>
                <article class="letras">
                    <?php foreach ($musicas as $musica) { ?>
                        <h6><?php echo $musica->nome ?></h6>
                    <?php } ?>
                </article>
            </div>
        </div>
    </div>
</div>
