<nav id="navbar-top" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <!-- navbar-toggle -->
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <a href="/" class="navbar-brand">Sociopata</a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
        <ul class="nav navbar-nav pull-right">
            <li <?php if ($class == 'eventos') { ?> class="active" <?php } ?>><a href="/eventos">Eventos</a></li>
            <li <?php if ($class == 'midia') { ?> class="active" <?php } ?>><a href="/midia">Mídia</a></li>
            <li <?php if ($class == 'biografia') { ?> class="active" <?php } ?>><a href="/biografia">Biografia</a></li>
            <li <?php if ($class == 'links') { ?> class="active" <?php } ?>><a href="/links">Links</a></li>
            <li <?php if ($class == 'contato') { ?> class="active" <?php } ?>><a href="/contato">Contato</a></li>
        </ul>
    </nav>
</nav>
