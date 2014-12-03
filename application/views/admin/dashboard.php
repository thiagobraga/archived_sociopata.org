<div class="row">
    <div class="col-xs-6">
        <table class="table table-striped table-bordered table-hovered">
            <thead>
                <tr>
                    <th>Evento</th>
                    <th>Info</th>
                    <th>Local</th>
                    <th>Facebook</th>
                    <th>Valor</th>
                    <th>Data</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($eventos as $evento) { ?>
                    <tr>
                        <td><?php echo $evento->nome ?></td>
                        <td><?php echo $evento->info ?></td>
                        <td><?php echo $evento->local ?></td>
                        <td><?php echo $evento->facebook ?></td>
                        <td><?php echo $evento->valor ?></td>
                        <td><?php echo $evento->data ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</div>
