<?php $this->load->view('home/header') ?>

<div class="container">
    <section class="<?php echo $class ?>">
        <h3 class="page-header"><?php echo $page ?></h3>

        <div class="row">
            <!-- Álbuns -->
            <?php $this->load->view('midia/albuns') ?>

            <!-- Videos -->
            <?php $this->load->view('midia/videos') ?>
        </div>
    </section>
</div>
