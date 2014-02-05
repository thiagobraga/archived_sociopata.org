<h3 class="page-header"><?php echo $page ?></h3>

<?php foreach ($eventos as $evento) { ?>
    <div class="event<?php if ($evento->data < $now) echo ' past-event' ?>">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <img src="<?php echo base_url('assets/images/events/' . $evento->codigo . '.jpg') ?>" class="img-filter img-responsive" />
                </div>
                <div class="col-md-9 col-sm-9 col-xs-6">
                    <h6><?php echo date('d/m/Y', strtotime($evento->data)) ?></h6>
                    <h4><?php echo $evento->nome ?></h4>
                    <p>
                        <?php echo $evento->local ?><br/>
                        <?php echo $evento->info ?><br/>
                        <?php echo ($evento->valor != 0.00) ? 'R$ '.number_format($evento->valor, 2, ',', '.') : 'Grátis' ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
