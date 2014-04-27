<section class="panel panel-default next-event">
    <header class="panel-heading">Eventos</header>

    <div class="panel-body">
        <?php if (!empty($eventos)) { ?>
            <div class="row">
                <div class="col-xs-5 col-sm-6">
                    <a href="eventos">
                        <img src="assets/images/events/<?php echo $eventos->codigo ?>.jpg" class="img-rounded img-responsive" />
                    </a>
                </div>

                <div class="col-xs-7 col-sm-6 col-md-7 col-lg-6">
                    <a href="eventos">
                        <h4 class="media-heading"><?php echo $eventos->nome ?></h4>
                        <h6>
                            <?php echo date('d/m/Y', strtotime($eventos->data)) ?> -
                            <?php echo ($eventos->valor != 0.00) ? 'R$ ' . number_format($eventos->valor, 2, ',', '.') : 'Grátis' ?>
                        </h6>
                        <h6><small>Local: <?php echo $eventos->local ?></small></h6>
                        <p>
                            <br/>
                            <?php echo $eventos->info ?>
                        </p>
                    </a>
                </div>
            </div>

        <?php } else { ?>
            <p>Não existem eventos futuros.</p>
        <?php } ?>
    </div>
</section>
