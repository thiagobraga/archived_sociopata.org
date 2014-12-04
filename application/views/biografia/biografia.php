<div class="container">
    <section class="<?php echo $controller ?>">
        <h2 class="page-header"><?php echo $page ?></h2>

        <!-- Release -->
        <?php $this->load->view('biografia/release') ?>

        <!-- Integrantes -->
        <?php $this->load->view('biografia/integrantes'); ?>
    </section>
</div>
