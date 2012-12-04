<!DOCTYPE html>
<html lang="pt-br" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://ogp.me/ns#">

  <!-- HEAD -->
  <?php $this->load->view("base/head") ?>

  <body>
    <!-- HEADER -->
    <?php $this->load->view("base/header") ?>

    <div class="container">
      <!--[if lt IE 7]>
      <p class="chromeframe">
      Você está usando um navegador desatualizado.
      <a href="//browsehappy.com/" target="_blank">Atualize seu browser</a> ou
      <a href="//www.google.com/chromeframe/?redirect=true" target="_blank">
      instale o Google Chrome Frame
      </a>
      para uma melhor experiência com esse site.
      </p>
      <![endif]-->

      <!-- CONTENT -->
      <div class="content">
        <?php $this->load->view($content) ?>
      </div>
    </div>

    <!-- FOOTER -->
    <?php $this->load->view("base/footer") ?>
  </body>

  <!-- SCRIPTS -->
  <?php $this->load->view("base/scripts") ?>
</html>