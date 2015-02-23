<?php

$themes = ['sociopata', 'corrosao'];

?>

<section class="panel panel-warning">
    <header class="panel-heading">Temas</header>

    <table class="table">
        <tbody>
            <?php foreach ($themes as $theme) { ?>
                <tr>
                    <td class="col-md-3">
                        <a href="#"><?php echo $theme ?></a>
                    </td>
                    <td class="col-md-9">
                        <a href="#"><?php echo $theme ?></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</section>
