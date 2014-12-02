<?php if (!empty($eventos)) {
    $count = count($eventos); ?>
    <section class="panel panel-default next-event">
        <header class="panel-heading">Eventos</header>

        <div class="panel-body">
            <?php foreach ($eventos as $i => $evento) {?>
                <div class="row evento">
                    <div class="col-xs-2 no-padding text-center evento-data">
                        <a href="/eventos#<?php echo $evento->url_amigavel ?>">
                            <h1><?php echo date('d', strtotime($evento->data)) ?></h1>
                            <h4>
                                <?php switch (date('m', strtotime($evento->data))) {
                                    case 1: echo 'Jan'; break;
                                    case 2: echo 'Fev'; break;
                                    case 3: echo 'Mar'; break;
                                    case 4: echo 'Abr'; break;
                                    case 5: echo 'Mai'; break;
                                    case 6: echo 'Jun'; break;
                                    case 7: echo 'Jul'; break;
                                    case 8: echo 'Ago'; break;
                                    case 9: echo 'Set'; break;
                                    case 10: echo 'Out'; break;
                                    case 11: echo 'Nov'; break;
                                    case 12: echo 'Dez'; break;
                                } ?>
                            </h4>
                        </a>
                    </div>

                    <div class="col-xs-10 evento-info">
                        <a href="/eventos#<?php echo $evento->url_amigavel ?>">
                            <h5 class="media-heading"><?php echo $evento->nome ?></h5>
                            <h6>
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
                            <p><?php echo $evento->local ?></p>
                        </a>
                    </div>
                </div>

                <?php if ($i != $count - 1) { ?>
                    <hr/>
                <?php } ?>
            <?php } ?>
        </div>
    </section>
<?php } ?>
