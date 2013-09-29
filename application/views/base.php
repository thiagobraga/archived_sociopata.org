<!doctype html>
<html lang="pt-br" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://ogp.me/ns#">
  <!-- HEAD -->
  <?php $this->load->view('_base/head') ?>

  <body data-spy="scroll" data-target="#navbar-top" data-offset="-30">
    <!-- HEADER -->
    <?php $this->load->view('_base/header') ?>

    <div class="wrap">
      <!-- CONTENT -->
      <?php $this->load->view('page') ?>
    </div>

    <!-- FOOTER -->
    <?php $this->load->view('_base/footer') ?>

    <!-- SCRIPTS -->
    <?php $this->load->view('_base/scripts') ?>
  </body>
</html>