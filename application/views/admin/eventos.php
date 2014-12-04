<section class="panel panel-default">
    <header class="panel-heading">Eventos</header>

    <div class="panel-body">
        <table class="table table-hover t">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Nome</th>
                    <th>Valor</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($eventos as $evento) { ?>
                    <tr>
                        <td><?php echo date('d/m/Y H:i', strtotime($evento->data)); ?></td>
                        <td><?php echo $evento->nome ?></td>
                        <td><?php echo 'R$ ' . number_format($evento->valor, 2, ',', '.') ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</section>
