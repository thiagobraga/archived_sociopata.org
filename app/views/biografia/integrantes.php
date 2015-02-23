<section class="panel panel-warning">
    <div class="panel-heading">Integrantes</div>

    <div class="panel-body">
        <?php foreach ($integrantes as $integrante) { ?>
            <div class="img-container">
                <img src="<?php echo base_url('public/images/integrantes/' . $integrante->codigo . '.jpg') ?>"
                    class="img-responsive" />

                <div class="caption">
                    <?php echo $integrante->nome ?><br/>
                    <small><?php echo $integrante->instrumentos ?></small>
                </div>
            </div>
        <?php } ?>
    </div>
</section>
