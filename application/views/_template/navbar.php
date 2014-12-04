<nav class="navbar container">
    <h1 class="text-center">
        <a href="<?php echo base_url() ?>">
            <img src="<?php echo base_url('assets/images/logo/header-logo.png') ?>"
                class="logo img-responsive"
                alt="Sociopata" />
        </a>
    </h1>

    <section>
        <a href="<?php echo base_url('midia') ?>" <?php if ($controller == 'midia') { ?>class="active"<?php } ?>>Mídia</a>
        <a href="<?php echo base_url('eventos') ?>" <?php if ($controller == 'eventos') { ?>class="active"<?php } ?>>Eventos</a>
        <a href="<?php echo base_url('biografia') ?>" <?php if ($controller == 'biografia') { ?>class="active"<?php } ?>>Biografia</a>
        <a href="<?php echo base_url('contato') ?>" <?php if ($controller == 'contato') { ?>class="active"<?php } ?>>Contato</a>
    </section>

    <?php if (isset($session) && $session['logged_in']) { ?>
        <div class="dropdown fixed-top">
            <button class="btn btn-default user-menu dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                Olá, <?php echo $session['name'] ?>
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="<?php echo base_url('admin') ?>">Admin</a></li>
                <li><a href="<?php echo base_url('styleguide') ?>">Styleguide</a></li>
            </ul>
        </div>
    <?php } ?>
</nav>
