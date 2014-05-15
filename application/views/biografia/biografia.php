<?php $this->load->view('home/header') ?>

<div class="container">
    <section class="<?php echo $class ?>">
        <h3 class="page-header"><?php echo $page ?></h3>

        <!-- Release -->
        <?php $this->load->view('biografia/release') ?>

        <!-- Integrantes -->
        <?php $this->load->view('biografia/integrantes'); ?>
    </section>
</div>
