<script type="text/javascript">
  var base_url = function(b){var c="<?= base_url() ?>";if(b){return c+b}else{return c}};
</script>
<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/js/plugins/soundmanager/soundmanager2-jsmin.js') ?>"></script>
<script src="<?= base_url('assets/js/app.js') ?>"></script>
<? if (!empty($js)): ?>
  <? foreach ($js as $file): ?>
    <script src="<?= base_url("assets/js/$file.js") ?>"></script>
  <? endforeach ?>
<? endif ?>