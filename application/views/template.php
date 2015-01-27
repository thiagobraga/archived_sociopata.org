<!DOCTYPE html>
<html lang="pt-br">

    <!-- HEAD -->
    <?php $this->load->view('_template/head') ?>

    <body class="<?php if ($controller === 'home') echo 'home' ?>">
        <!-- NAVBAR -->
        <?php $controller === 'home'
            ? $this->load->view('_template/navbar')
            : $this->load->view('_template/navbar-top') ?>

        <!-- CONTENT -->
        <section class="main container">
            <?php $this->load->view($content) ?>
        </section>

        <div id="fb-root"></div>

        <!-- FOOTER -->
        <?php $this->load->view('_template/footer') ?>

        <!-- SCRIPTS -->
        <?php $this->load->view('_template/scripts') ?>
    </body>
</html>
