<section class="panel panel-default">
    <table class="table">
        <tbody>
            <?php foreach ($eventos as $evento) { ?>
                <tr <?php if ($now < $evento->data) { ?> class="event" <?php } else { ?> class="event past-event" <?php } ?>>
                    <td class="col-xs-6 col-sm-3">
                        <a name="<?php echo $evento->slug ?>" class="anchor"></a>


                        <?php

                        if (file_exists(FCPATH . 'public/images/events/' . $evento->codigo . '.jpg')) {
                            $file_exist = true;
                            $image = 'public/images/events/' . $evento->codigo . '.jpg';
                        } else {
                            $file_exist = false;
                            $image = 'public/images/events/skull.png';
                        }

                        ?>

                        <a href="<?php echo base_url($image) ?>" data-lightbox="image-1" data-title="<h6><?php echo $evento->nome ?> - <small><?php echo date('d/m/Y', strtotime($evento->data)) ?></small></h6>">
                            <img src="<?php echo base_url($image) ?>" class="img-rounded img-responsive <?php echo $now < $evento->data ?: 'img-grayscale' ?>" />
                        </a>
                        <br/>
                        <?php if ($evento->facebook) { ?>
                            <a href="https://www.facebook.com/events/<?php echo $evento->facebook ?>" target="_blank">
                                <button type="button" class="btn btn-labeled btn-primary">
                                    <span class="btn-label">
                                        <span class="fa fa-facebook"></span>
                                    </span>
                                    Ver evento no Facebook
                                </button>
                            </a>
                        <?php } ?>
                    </td>

                    <td class="col-xs-6 col-sm-9">
                        <h4 class="media-heading"><?php echo $evento->nome ?></h4>
                        <h6>
                            <?php echo date('d/m/Y', strtotime($evento->data)) ?>
                            <?php
                            if (isset($evento->valor)) {
                                if ($evento->valor != 0.00) {
                                    echo '- R$ ' . number_format($evento->valor, 2, ',', '.');
                                } else {
                                    echo '- Grátis';
                                }
                            }
                            ?>
                        </h6>
                        <h6><small><?php echo $evento->local ?></small></h6>
                        <p>
                            <br/>
                            <?php echo $evento->info ?>
                        </p>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</section>
