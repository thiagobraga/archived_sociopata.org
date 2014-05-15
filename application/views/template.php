<!doctype html>
<html lang="pt-br">

    <!-- HEAD -->
    <?php $this->load->view('_template/head') ?>

    <body>
        <!-- NAVBAR -->
        <?php $this->load->view('_template/navbar') ?>

        <!-- CONTENT -->
        <?php $this->load->view($content) ?>

        <!-- FOOTER -->
        <?php $this->load->view('_template/footer') ?>

        <!-- SCRIPTS -->
        <?php $this->load->view('_template/scripts') ?>
    </body>
</html>
