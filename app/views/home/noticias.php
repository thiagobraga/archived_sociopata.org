<section id="news" class="panel panel-warning">
    <header class="panel-heading">Notícias</header>

    <ul class="list-group">
        <?php foreach ($news as $notice) {
            if (isset($notice['message'])) { ?>
                <li class="list-group-item">
                    <span class="date"><?php echo $notice['created_time'] ?></span>
                    <?php echo $notice['message'] ?>
                </li>
            <?php } ?>
        <?php } ?>
    </ul>
</section>
