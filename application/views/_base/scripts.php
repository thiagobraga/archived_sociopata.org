<script>
  var base_url = function(b){var c="<?php echo base_url() ?>";if(b){return c+b}else{return c}};
</script>
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/soundmanager/soundmanager2-jsmin.js') ?>"></script>
<script src="<?php echo base_url('assets/js/app.js') ?>"></script>
<?php if (!empty($js)): ?>
  <?php foreach ($js as $file): ?>
    <script src="<?php echo base_url("assets/js/$file.js") ?>"></script>
  <?php endforeach ?>
<?php endif ?>