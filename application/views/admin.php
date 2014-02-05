<section class="<?php echo $page ?>">
    <h3 class="page-header"><?php echo $page ?></h3>
</section>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <h5>Eventos</h5>

                <form id="evento" class="form-horizontal" role="form">
                    <!-- Nome -->
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="nome">Nome</label>
                        <div class="col-sm-10">
                            <input id="nome" name="nome" maxlength="80" class="form-control" type="text" required />
                        </div>
                    </div>

                    <!-- Info -->
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="nome">Info</label>
                        <div class="col-sm-10">
                            <input id="info" name="info" maxlength="80" class="form-control" type="text" required />
                        </div>
                    </div>

                    <!-- Local -->
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="nome">Local</label>
                        <div class="col-sm-10">
                            <input id="local" name="local" maxlength="80" class="form-control" type="text" required />
                        </div>
                    </div>

                    <!-- Valor -->
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="valor">Valor</label>
                        <div class="col-sm-10">
                            <input id="valor" name="valor" maxlength="80" class="form-control" type="number" required />
                        </div>
                    </div>

                    <!-- Form actions -->
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Adicionar</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
