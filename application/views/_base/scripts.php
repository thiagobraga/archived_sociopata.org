<script type="text/javascript">
  var base_url = function(b){var c="<?= base_url() ?>";if(b){return c+b}else{return c}};
</script>

<? if (ENVIRONMENT == 'development') : ?>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
<? else : ?>
  <script src="<?= base_url("assets/js/libs/jquery.min.js") ?>"></script>
  <script src="<?= base_url("assets/bootstrap/js/bootstrap.js") ?>"></script>
<? endif; ?>

<script src="<?= base_url("assets/js/plugins/soundcloud/soundcloud.player.api.js") ?>"></script>
<script src="<?= base_url("assets/js/plugins/soundcloud/sc-player.js") ?>"></script>
<script src="<?= base_url("assets/js/main.js") ?>"></script>

<? if (!empty($js)) : ?>
  <? foreach ($js as $file) : ?>
    <script src="<?= base_url("assets/js/$file.js") ?>"></script>
  <? endforeach; ?>
<? endif; ?>