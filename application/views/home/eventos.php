<?php if (!empty($eventos)) { ?>
    <section class="panel panel-default next-event">
        <header class="panel-heading">Eventos</header>

        <div class="panel-body">
            <?php foreach ($eventos as $evento) { ?>
                <div class="row evento">
                    <div class="col-xs-5 col-sm-6">
                        <a href="/eventos">
                            <img src="assets/images/events/<?php echo $evento->codigo ?>.jpg" class="img-rounded img-responsive" />
                        </a>
                    </div>

                    <div class="col-xs-7 col-sm-6 col-md-7 col-lg-6 no-padding-left">
                        <a href="/eventos">
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
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>
