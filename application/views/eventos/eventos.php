<h3 class="page-header"><?php echo $page ?></h3>

<?php foreach ($eventos as $evento) { ?>
    <div class="event <?php echo $now < $evento->data ?: 'past-event' ?>">
        <section class="panel panel-default">
            <div class="panel-body">
                <article class="media row">
                    <div class="media-object col-xs-6 col-sm-3">
                        <img src="assets/images/events/<?php echo $evento->codigo ?>.jpg" class="img-rounded img-responsive <?php echo $now < $evento->data ?: 'img-grayscale' ?>" />
                    </div>
                    <div class="media-body col-xs-6 col-sm-9">
                        <h4 class="media-heading"><?php echo $evento->nome ?></h4>
                        <h6>
                            <?php echo date('d/m/Y', strtotime($evento->data)) ?> -
                            <?php echo ($evento->valor != 0.00) ? 'R$ ' . number_format($evento->valor, 2, ',', '.') : 'Grátis' ?>
                        </h6>
                        <h6><small>Local: <?php echo $evento->local ?></small></h6>
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
