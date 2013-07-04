<!doctype html>
<html lang="pt-br" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://ogp.me/ns#">
  <!-- HEAD -->
  <? $this->load->view('_base/head') ?>

  <body data-spy="scroll" data-target="#navbar-top" data-offset="-340">
    <!-- HEADER -->
    <? $this->load->view('_base/header') ?>

    <div class="wrap">
      <!-- CONTENT -->
      <? $this->load->view('page') ?>
    </div>

    <!-- FOOTER -->
    <? $this->load->view('_base/footer') ?>

    <!-- SCRIPTS -->
    <? $this->load->view('_base/scripts') ?>
  </body>
</html>