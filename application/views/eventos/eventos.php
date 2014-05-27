<div class="container">
    <section class="<?php echo $class ?>">
        <h2 class="page-header"><?php echo $page ?></h2>

        <?php foreach ($eventos as $evento) { ?>
            <a name="<?php echo $evento->url_amigavel ?>" class="anchor"></a>

            <div <?php if ($now < $evento->data) { ?> class="event" <?php } else { ?> class="event past-event" <?php } ?>>
                <section class="panel panel-default">
                    <div class="panel-body">
                        <article class="media row">
                            <div class="media-object col-xs-6 col-sm-3">
                                <a href="assets/images/events/<?php echo $evento->codigo ?>.jpg" data-lightbox="image-1" data-title="<h6><?php echo $evento->nome ?> - <small><?php echo date('d/m/Y', strtotime($evento->data)) ?></small></h6>">
                                    <img src="assets/images/events/<?php echo $evento->codigo ?>.jpg" class="img-rounded img-responsive <?php echo $now < $evento->data ?: 'img-grayscale' ?>" />
                                </a>
                                <br/>
                                <?php if ($evento->facebook) { ?>
                                    <a href="https://www.facebook.com/events/<?php echo $evento->facebook ?>" target="_blank">
                                        <button type="button" class="btn btn-labeled btn-primary">
                                            <span class="btn-label">
                                                <span class="fa fa-facebook"></span>
                                            </span>
                                            Ver evento no Facebook
                                        </button>
                                    </a>
                                <?php } ?>
                            </div>

                            <div class="media-body col-xs-6 col-sm-9">
                                <h4 class="media-heading"><?php echo $evento->nome ?></h4>
                                <h6>
                                    <?php echo date('d/m/Y', strtotime($evento->data)) ?> -
                                    <?php if (!isset($evento->valor)) {
                                        echo 'Não informado';
                                    } else {
                                        if ($evento->valor != 0.00) {
                                            echo 'R$ ' . number_format($evento->valor, 2, ',', '.');
                                        } else {
                                            echo 'Grátis';
                                        }
                                    } ?>
                                </h6>
                                <h6><small><?php echo $evento->local ?></small></h6>
                                <p>
                                    <br/>
                                    <?php echo $evento->info ?>
                                </p>
                            </div>
                        </article>
                    </div>
                </section>
            </div>
        <?php } ?>
    </section>
</div>
