<!doctype html>
<html lang="pt-br">

    <!-- HEAD -->
    <?php $this->load->view('_template/head') ?>

    <body>
        <!-- NAVBAR -->
        <?php $this->load->view('_template/navbar') ?>

        <!-- HEADER -->
        <?php $this->load->view('_template/header') ?>

        <!-- CONTENT -->
        <div class="container">
            <section class="<?php echo $class ?>">
                <?php $this->load->view($content) ?>
            </section>
        </div>

        <!-- FOOTER -->
        <?php $this->load->view('_template/footer') ?>

        <!-- SCRIPTS -->
        <?php $this->load->view('_template/scripts') ?>
    </body>
</html>
