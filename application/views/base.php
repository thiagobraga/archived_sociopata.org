<!DOCTYPE html>
<html lang="pt-br" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://ogp.me/ns#">

  <!-- HEAD -->
  <? $this->load->view('_base/head') ?>

  <body>
    <div class="wrap">
      <!-- NAVBAR -->
      <? $this->load->view('_base/navbar') ?>

      <!-- HEADER -->
      <? $this->load->view('_base/header') ?>


      <div class="container">

        <!-- CONTENT -->
        <div class="content">
          <section class="row-fluid">
            <div class="page-header">
              <h1><?= lang('page') ?></h1>
            </div>
          </section>

          <? $this->load->view($content) ?>
        </div>
      </div>
    </div>

    <!-- FOOTER -->
    <? $this->load->view('_base/footer') ?>
  </body>

  <!-- SCRIPTS -->
  <? $this->load->view('_base/scripts') ?>
</html>