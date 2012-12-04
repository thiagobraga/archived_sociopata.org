<script type='text/javascript'>
  /**
   * Set the base url of the site
   * according to the environment
   * @param string Extra URL
   */
  function base_url(a) {
    var url = '<?php echo base_url() ?>';
    if(a) return url + a;
    else return url;
  }
</script>

<script src='//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js' type='text/javascript'></script>
<script src='//netdna.bootstrapcdn.com/twitter-bootstrap/2.2.1/js/bootstrap.min.js' type='text/javascript'></script>
<script src='<?php echo base_url('assets/js/main.js') ?>' type='text/javascript'></script>
<?php if (isset($js)) : ?>
  <?php foreach ($js as $jsfile) : ?>
    <script src='<?php echo base_url('assets/js/' . $jsfile . '.js') ?>' type='text/javascript'></script>
  <?php endforeach; ?>
<?php endif; ?>