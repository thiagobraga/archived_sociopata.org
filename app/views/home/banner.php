<header>
    <div class="owl-carousel">
        <?php foreach ($photos as $photo) { ?>
            <div class="item">
                <img src="<?php echo base_url('public/images/banner/' . $photo->arquivo) ?>" />
                <div class="caption"><?php echo $photo->descricao ?></div>
            </div>
        <?php } ?>
    </div>
</header>
