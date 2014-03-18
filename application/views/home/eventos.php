<section class="panel panel-default next-event">
    <header class="panel-heading">Eventos</header>

    <div class="panel-body">
        <?php if (!empty($eventos)) { ?>
            <div class="row">
                <div class="col-xs-5 col-sm-6">
                    <img src="assets/images/events/<?php echo $eventos->codigo ?>.jpg" class="img-rounded img-responsive" />
                </div>

                <div class="col-xs-7 col-sm-6 col-md-7 col-lg-6">
                    <a href="eventos">
                        <h6><?php echo $eventos->nome ?></h6>
                        <p><?php echo $eventos->local ?></p>
                    </a>
                </div>
            </div>

        <?php } else { ?>
            <p>Não existem eventos futuros.</p>
        <?php } ?>
    </div>
</section>
