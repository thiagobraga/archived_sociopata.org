<section id="news" class="panel panel-warning">
    <header class="panel-heading">Notícias</header>

    <ul class="list-group news">
        <?php foreach ($news as $notice) {
            if (isset($notice['message'])) { ?>
                <li class="list-group-item">
                    <span class="date"><?php echo $notice['created_time'] ?></span>
                    <?php echo $notice['message'] ?>
                </li>
            <?php } ?>
        <?php } ?>
    </ul>

    <footer class="panel-footer">
        veja mais no facebook
    </footer>
</section>
