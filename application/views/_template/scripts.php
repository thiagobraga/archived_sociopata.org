<?php if (isset($js)) {
    foreach ($js as $file) { ?>
        <script src="<?php echo base_url('assets/' . $file . '.js') ?>"></script>
    <?php }
} ?>
