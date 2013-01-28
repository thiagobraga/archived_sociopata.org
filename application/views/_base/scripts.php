<script type="text/javascript">
  function base_url(b){var c="<?=base_url()?>";if(b){return c+b}else{return c}};
</script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url("assets/js/plugins/stratus/stratus.js") ?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/js/main.js") ?>" type="text/javascript"></script>
<?php if (!empty($js)) : ?>
  <?php foreach ($js as $file) : ?>
    <script src="<?php echo base_url("assets/js/$file.js") ?>" type="text/javascript"></script>
  <?php endforeach; ?>
<?php endif; ?>