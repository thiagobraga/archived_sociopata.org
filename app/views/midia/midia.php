<div class="container">
    <section class="<?php echo $controller ?>">
        <div class="row">
            <!-- Álbuns -->
            <?php $this->load->view('midia/albuns') ?>

            <!-- Videos -->
            <?php $this->load->view('midia/videos') ?>
        </div>
    </section>
</div>
