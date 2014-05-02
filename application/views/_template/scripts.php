<?php if (isset($js)) {
    foreach ($js as $file) { ?>
        <script src="/assets/<?php echo $file ?>.js"></script>
    <?php }
}

if (ENVIRONMENT == 'development') { ?>
    <script src="http://localhost:9090/livereload.js"></script>
<?php } ?>
