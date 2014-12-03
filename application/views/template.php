<!DOCTYPE html>
<html lang="pt-br">

    <!-- HEAD -->
    <?php $this->load->view('_template/head') ?>

    <body>
        <!-- NAVBAR -->
        <?php $this->load->view('_template/navbar') ?>

        <!-- CONTENT -->
        <section class="main container">
            <?php $this->load->view($content) ?>
        </section>

        <div id="fb-root"></div>

        <!-- SCRIPTS -->
        <?php $this->load->view('_template/scripts') ?>
    </body>
</html>
