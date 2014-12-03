<nav class="navbar-admin container">
    <h1 class="pull-left">
        <a href="<?php echo base_url() ?>">
            <img src="<?php echo base_url('assets/images/logo/header-logo.png') ?>"
                class="logo img-responsive"
                alt="Sociopata" />
        </a>
    </h1>

    <section class="pull-right">
        <a href="<?php echo base_url('midia') ?>" <?php if ($class == 'midia') { ?>class="active"<?php } ?>>Mídia</a>
        <a href="<?php echo base_url('eventos') ?>" <?php if ($class == 'eventos') { ?>class="active"<?php } ?>>Eventos</a>
        <a href="<?php echo base_url('biografia') ?>" <?php if ($class == 'biografia') { ?>class="active"<?php } ?>>Biografia</a>
        <a href="<?php echo base_url('contato') ?>" <?php if ($class == 'contato') { ?>class="active"<?php } ?>>Contato</a>
    </section>
</nav>
