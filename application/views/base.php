<!doctype html>
<html lang="pt-br" prefix="fb: http://www.facebook.com/2008/fbml" prefix="og: http://ogp.me/ns#">
    <!-- HEAD -->
    <?php $this->load->view('_base/head') ?>

    <body>
        <!-- HEADER -->
        <?php $this->load->view('_base/header') ?>

        <!-- CONTENT -->
        <div class="wrap">
            <div class="container">
                <div class="content">
                    <section class="<?php echo $class ?>">
                        <?php $this->load->view($content) ?>
                    </section>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <?php $this->load->view('_base/footer') ?>

        <!-- SCRIPTS -->
        <?php $this->load->view('_base/scripts') ?>
    </body>
</html>
