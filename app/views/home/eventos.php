<?php if (!empty($eventos)) { ?>
    <section class="panel panel-warning">
        <header class="panel-heading">Eventos</header>

        <div class="panel-body">
            <?php foreach ($eventos as $i => $evento) { ?>
                <div class="media">
                    <a href="/eventos#<?php echo $evento->slug ?>" class="event-date">
                        <?php echo date('d', strtotime($evento->data)) ?>
                        <span><?php echo date('M', strtotime($evento->data)) ?></span>
                    </a>

                    <div class="media-body">
                        <a href="/eventos#<?php echo $evento->slug ?>">
                            <p class="lead media-heading">
                                <?php echo $evento->nome ?><br/>
                                <?php if (isset($evento->valor)) {
                                    if ($evento->valor != 0.00) { ?>
                                        <small><?php echo 'R$ ' . number_format($evento->valor, 2, ',', '.') ?></small>
                                    <?php } else { ?>
                                        <small>Grátis</small>
                                    <?php }
                                } ?>
                            </p>
                            <p><?php echo $evento->local ?></p>
                        </a>
                    </div>

                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>
