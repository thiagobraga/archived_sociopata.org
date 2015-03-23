<?php

$class  = '';
$navbar = '_template/navbar-top';

if ($controller === 'home') {
    $class  = 'home';
    $navbar = '_template/navbar';
}

?>

<!DOCTYPE html>
<html>

    <!-- HEAD -->
    <?php $this->load->view('_template/head') ?>

    <body class="<?php echo $class ?>">
        <!-- NAVBAR -->
        <?php $this->load->view($navbar) ?>

        <!-- CONTENT -->
        <main class="main container">
            <?php $this->load->view($content) ?>
        </main>

        <div id="fb-root"></div>

        <!-- FOOTER -->
        <?php $this->load->view('_template/footer') ?>

        <!-- SCRIPTS -->
        <?php $this->load->view('_template/scripts') ?>
    </body>
</html>
