<nav class="navbar top container">
    <h1 class="pull-left">
        <a href="<?php echo base_url() ?>">
            <img src="<?php echo base_url('public/images/logo/header-logo.png') ?>"
                class="logo img-responsive"
                alt="Sociopata" />
        </a>
    </h1>

    <section class="pull-right">
        <a href="<?php echo base_url('midia') ?>" <?php if ($controller == 'midia') { ?>class="active"<?php } ?>>Mídia</a>
        <a href="<?php echo base_url('eventos') ?>" <?php if ($controller == 'eventos') { ?>class="active"<?php } ?>>Eventos</a>
        <a href="<?php echo base_url('biografia') ?>" <?php if ($controller == 'biografia') { ?>class="active"<?php } ?>>Biografia</a>
        <a href="<?php echo base_url('contato') ?>" <?php if ($controller == 'contato') { ?>class="active"<?php } ?>>Contato</a>
    </section>

    <?php $this->load->view('_template/dropdown') ?>
</nav>
