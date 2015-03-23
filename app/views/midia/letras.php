<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-body">
            <h5>Letras</h5>
            <article class="letras">
                <?php foreach ($musicas as $musica) { ?>
                    <h6><?php echo $musica->nome ?></h6>
                <?php } ?>
            </article>
        </div>
    </div>
</div>
