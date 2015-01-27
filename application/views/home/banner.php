<header>
    <div class="owl-carousel">
        <?php foreach ($photos as $photo) { ?>
            <div class="item">
                <img class="lazyOwl" data-src="/assets/images/banner/<?php echo $photo->arquivo ?>" />
                <div class="caption">
                    <?php echo $photo->descricao ?>
                </div>
            </div>
        <?php } ?>
    </div>
</header>
