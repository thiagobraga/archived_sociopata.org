<script type="text/javascript">
  function base_url(b){var c="<?= base_url() ?>";if(b){return c+b}else{return c}};
</script>

<? if (ENVIRONMENT == 'development') : ?>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js"></script>
<? else : ?>
  <script src="<?= base_url("assets/js/libs/jquery.min.js") ?>"></script>
  <script src="<?= base_url("assets/bootstrap/js/bootstrap.js") ?>"></script>
<? endif; ?>
<script src="<?= base_url("assets/js/plugins/soundcloud/soundcloud.player.api.js") ?>"></script>
<script src="<?= base_url("assets/js/plugins/soundcloud/sc-player.js") ?>"></script>
<script src="<?= base_url("assets/js/main.js") ?>"></script>
<?php if (!empty($js)) : ?>
  <?php foreach ($js as $file) : ?>
    <script src="<?php echo base_url("assets/js/$file.js") ?>"></script>
  <?php endforeach; ?>
<?php endif; ?>