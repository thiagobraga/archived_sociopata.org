<script src="<?php echo base_url('assets/js/libraries/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/libraries/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/bootstrap-select/bootstrap-select.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/app.js') ?>"></script>

<?php if (isset($js)) {
    foreach ($js as $file) { ?>
        <script src="<?php echo base_url('assets/'.$file.'.js') ?>"></script>
    <?php }
} ?>
