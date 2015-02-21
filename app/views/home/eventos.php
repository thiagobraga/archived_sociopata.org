<?php if (!empty($events)) { ?>
    <section class="panel panel-warning">
        <header class="panel-heading">Eventos</header>

        <table class="table eventos">
            <tbody>
                <?php foreach ($events as $event) {
                    extract((array) $event); ?>

                    <tr>
                        <td class="col-xs-1">
                            <a href="<?php echo $url ?>" class="event-date">
                                <?php echo $day ?>
                                <span><?php echo $month ?></span>
                            </a>
                        </td>

                        <td class="col-xs-11">
                            <a href="<?php echo $url ?>" class="no-padding-left">
                                <h6><?php echo $nome ?></h6>
                                <small><?php echo $local ?></small>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>
<?php } ?>
