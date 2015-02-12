<section id="news" class="panel panel-warning">
    <header class="panel-heading">Notícias</header>

    <div class="panel-body">
        <?php foreach ($news as $notice) {
            if (isset($notice['message'])) { ?>
                <div class="media">
                    <div class="media-body">
                        <span class="date"><?php echo $notice['created_time'] ?></span>
                        <?php echo $notice['message'] ?>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</section>
