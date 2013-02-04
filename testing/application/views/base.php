<!DOCTYPE html>
<html lang="pt-br" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://ogp.me/ns#">

  <!-- HEAD -->
  <? $this->load->view('_base/head') ?>

  <body>
    <!--[if lt IE 7]>
    <p class="browser-support">
      Unfortunately, this site won't work with your browser. Please upgrade to a modern browser:<br>
      <a href="http://www.google.com/chrome">Google Chrome</a>
      <a href="http://www.mozilla.org/firefox">Firefox</a>
      <a href="http://www.microsoft.com/windows/internet-explorer/">Internet Explorer 9</a>
    </p>
    <![endif]-->

    <!-- HEADER -->
    <? $this->load->view('_base/header') ?>

    <div class="wrap">
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