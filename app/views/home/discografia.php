<section class="panel panel-warning">
    <header class="panel-heading">Discografia</header>

    <table class="table discografia">
        <tbody>
            <?php foreach ($albuns as $album) {
                extract((array) $album) ?>

                <tr>
                    <td class="col-md-5">
                        <img src="<?php echo base_url('public/images/albuns/' . $slug . '.jpg') ?>"
                            class="img-responsive"
                            alt="<?php echo $nome ?>" />
                    </td>

                    <td class="col-md-7">
                        <h6><?php echo $nome ?></h6>
                        <small><?php echo $ano ?></small><br/>
                        <ol class="tracks list-unstyled"></ol>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</section>
