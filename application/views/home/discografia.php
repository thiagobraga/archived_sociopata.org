<section class="panel panel-warning">
    <header class="panel-heading">Discografia</header>

    <div class="panel-body">
        <?php foreach ($albuns as $i => $album) { ?>
            <div class="media">
                <div class="pull-left">
                    <img src="assets/images/albuns/<?php echo $album->slug ?>.jpg"
                        class="img-responsive"
                        alt="<?php echo $album->nome ?>" />
                </div>
                <div class="media-body">
                    <p class="album-title"><?php echo $album->nome ?></p>
                    <b>Ano:</b> <?php echo $album->ano ?><br/>
                    <b>Lançamento:</b> <?php echo date('d/m/Y', strtotime($album->lancado_em)) ?><br/>

                    <p><?php echo $album->info ?></p>

                    <ol>
                        <li>Corpos 3:03</li>
                        <li>Crianças 3:43</li>
                        <li>Torre do Tempo 3:40</li>
                    </ol>

                    <i>Total: 8:00</i>
                </div>
            </div>
        <?php } ?>
    </div>
</section>
