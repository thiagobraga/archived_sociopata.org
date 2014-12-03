<!DOCTYPE html>
<html lang="pt-br">

    <!-- HEAD -->
    <?php $this->load->view('admin/_template/head') ?>

    <body class="admin">
        <!-- NAVBAR -->
        <?php $this->load->view('admin/_template/navbar') ?>

        <!-- CONTENT -->
        <section class="admin-container container">
            <?php $this->load->view($content) ?>
        </section>

        <div id="fb-root"></div>

        <!-- SCRIPTS -->
        <?php $this->load->view('admin/_template/scripts') ?>
    </body>
</html>
