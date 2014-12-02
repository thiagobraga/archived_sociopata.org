<section class="panel panel-default">
    <header class="panel-heading">Notícias</header>

    <div class="panel-body">
        <?php foreach ($noticias as $noticia) { ?>
            <article class="media row">
                <div class="media-object col-xs-5">
                    <a href="assets/images/<?php echo $noticia->imagem ?>" data-lightbox="image-1" data-title="<h6><?php echo $evento->nome ?> - <small><?php echo date('d/m/Y', strtotime($evento->data)) ?></small></h6>">
                        <img src="assets/images/<?php echo $noticia->imagem ?>" class="img-responsive" />
                    </a>

                </div>
                <div class="media-body col-xs-7">
                    <h6 class="media-heading"><?php echo $noticia->nome ?></h6>
                    <p><?php echo $noticia->descricao ?></p>
                </div>
            </article>
        <?php } ?>
    </div>
</section>
