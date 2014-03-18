<section class="panel panel-default">
    <header class="panel-heading">Notícias</header>

    <div class="panel-body">
        <?php foreach ($noticias as $noticia) { ?>
            <article class="media row">
                <div class="media-object col-xs-5">
                    <img src="assets/images/<?php echo $noticia->imagem ?>" class="img-responsive" />
                </div>
                <div class="media-body col-xs-7">
                    <h6 class="media-heading"><?php echo $noticia->nome ?></h6>
                    <p><?php echo $noticia->descricao ?></p>
                </div>
            </article>
        <?php } ?>
    </div>
</section>
