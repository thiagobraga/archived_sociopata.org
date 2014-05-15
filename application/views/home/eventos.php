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
                                    case 1: echo 'Janeiro'; break;
                                    case 2: echo 'Fevereiro'; break;
                                    case 3: echo 'Março'; break;
                                    case 4: echo 'Abril'; break;
                                    case 5: echo 'Maio'; break;
                                    case 6: echo 'Junho'; break;
                                    case 7: echo 'Julho'; break;
                                    case 8: echo 'Agosto'; break;
                                    case 9: echo 'Setembro'; break;
                                    case 10: echo 'Outubro'; break;
                                    case 11: echo 'Novembro'; break;
                                    case 12: echo 'Dezembro'; break;
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
