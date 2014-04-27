<div class="col-md-5">
    <div class="panel panel-default">
        <div class="panel-body">
            <article class="albuns">
                <?php foreach ($albuns as $album) { ?>
                    <div class="row">
                        <div class="col-md-9">
                            <!-- <h6><?php echo $album->nome ?></h6>
                            <?php echo $album->tipo ?><br/>
                            <?php echo $album->ano ?><br/>
                            <?php echo $album->info ?><br/> -->
                            <iframe style="border: 0; width: auto; min-width: 428px; height: 680px;" src="http://bandcamp.com/EmbeddedPlayer/album=2030359615/size=large/bgcol=333333/linkcol=ffffff/transparent=true/" seamless><a href="http://sociopata.bandcamp.com/album/sociopata">Sociopata - 2013</a></iframe>
                        </div>
                    </div>

                <?php } ?>
            </article>
        </div>
    </div>
</div>
