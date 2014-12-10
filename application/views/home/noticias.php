<section class="panel panel-default">
    <header class="panel-heading">
        Notícias
        <small>Últimas atualizações do Facebook</small>
    </header>

    <div class="panel-body">
        <?php foreach ($news as $notice) {
            echo '<b>' . $notice['from']['name'] . '</b><br/>';
            echo "{$notice['message']}<br/><br/>";
        } ?>
    </div>
</section>
