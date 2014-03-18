<article class="integrantes">
    <section class="panel panel-default">
        <header class="panel-heading">Integrantes</header>

        <div class="panel-body">
            <div class="five-columns">
                <?php foreach ($integrantes as $integrante) { ?>
                    <div class="col-md-2 col-sm-3">
                        <img src="<?php echo base_url('assets/images/integrantes/' . $integrante->codigo . '.jpg') ?>" class="img-filter img-responsive" />
                        <div class="caption">
                            <?php echo $integrante->nome ?><br/>
                            <small><?php echo $integrante->instrumentos ?></small>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
</article>
