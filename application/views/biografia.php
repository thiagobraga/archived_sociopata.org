<h3 class="page-header"><?php echo $page ?></h3>

<!-- Release -->
<article class="release">
    <div class="panel panel-default">
        <div class="panel-body">
            <h5>Release</h5>

            <p class="text-justify">A banda Sociopata iniciou seus projetos no ano de 2008 em Agudos/Bauru (interior de São Paulo).</p>

            <p class="text-justify">
                O nome do grupo suscita argumentação crítica das mazelas, muitas
                vezes inconscientes e sensíveis vividas num cotidiano de manipulações embutidas
                nas relações humanas. Temas sociais psíquicos e espirituais fundamentam o incômodo
                na vontade de se encontrar e se impor à realidade manifesta; como que em um pesadelo
                onde a escolha se faz subjugada aos fatos irreais da mente Sociopata na sua condição
                moral de desprezo egocêntrico, e no próprio cinismo e no falso arrependimento de suas
                emoções superficiais.
            </p>

            <p class="text-justify">
                Nesta personalidade perturbada e doentia encontram-se incrustadas atitudes e
                condutas de total repulsa e revolta à ética materialista, sendo que por via de
                uma sonoridade diversa, onde sincrônico e distônico se fudem na própria carne,
                a banda Sociopata transmite em suas músicas sua oportuna identidade e intenção
                de si mesma.
            </p>
        </div>
    </div>
</article>

<!-- Integrantes -->
<article class="integrantes">
    <div class="panel panel-default">
        <div class="panel-body">

            <h5>Integrantes</h5>
            <div class="five-columns">
                <?php foreach ($integrantes as $integrante) { ?>
                    <div class="col-md-2 col-sm-3">
                        <img src="<?php echo base_url('assets/images/integrantes/' . $integrante->codigo.'.jpg') ?>" class="img-filter img-responsive" />
                        <div class="caption">
                            <?php echo $integrante->nome ?><br/>
                            <small><?php echo $integrante->instrumentos ?></small>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </div>
</article>
