<!DOCTYPE html>
<html>

    <!-- HEAD -->
    <?php $this->load->view('_template/head') ?>

    <body>
        <!-- CONTENT -->
        <main class="main container landing">
            <?php $this->load->view($content) ?>
        </main>

        <div id="fb-root"></div>

        <!-- SCRIPTS -->
        <?php $this->load->view('_template/scripts') ?>
    </body>
</html>
