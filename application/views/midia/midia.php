<div class="container">
    <section class="<?php echo $controller ?>">
        <h2 class="page-header"><?php echo $page ?></h2>

        <div class="row">
            <!-- Álbuns -->
            <?php $this->load->view('midia/albuns') ?>

            <!-- Videos -->
            <?php $this->load->view('midia/videos') ?>
        </div>
    </section>
</div>
