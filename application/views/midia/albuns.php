<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-body">
            <h5>Álbuns</h5>
            <article class="albuns">
                <?php foreach ($albuns as $album) { ?>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="assets/images/albuns/<?php echo $album->codigo ?>-small.jpg" class="img-responsive" />
                        </div>
                        <div class="col-md-9">
                            <!-- <h6><?php echo $album->nome ?></h6>
                            <?php echo $album->tipo ?><br/>
                            <?php echo $album->ano ?><br/>
                            <?php echo $album->info ?><br/> -->
                            <iframe style="border: 0; width: 350px; height: 555px;" src="http://bandcamp.com/EmbeddedPlayer/album=2030359615/size=large/bgcol=333333/linkcol=ffffff/transparent=true/" seamless><a href="http://sociopata.bandcamp.com/album/sociopata">Sociopata by Sociopata</a></iframe>
                        </div>
                    </div>

                <?php } ?>
            </article>
        </div>
    </div>
</div>
