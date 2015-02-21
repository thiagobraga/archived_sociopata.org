<header>
    <div class="owl-carousel">
        <?php foreach ($photos as $photo) {
            extract((array) $photo); ?>
            <div class="item">
                <img src="<?php echo base_url("public/images/banner/banner-$codigo.jpg") ?>" />
                <div class="caption"><?php echo $descricao ?></div>
            </div>
        <?php } ?>
    </div>
</header>
