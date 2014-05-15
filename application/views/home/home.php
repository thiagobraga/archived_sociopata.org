<?php $this->load->view('home/header') ?>

<div class="container">
    <section class="<?php echo $class ?>">
        <div class="row">
            <div class="col-md-6">
                <?php $this->load->view('home/noticias') ?>
                <?php // $this->load->view('home/videos') ?>
            </div>

            <div class="col-md-6">
                <?php $this->load->view('home/eventos') ?>
                <?php // $this->load->view('home/newsletter') ?>
            </div>
        </div>
    </section>
</div>
