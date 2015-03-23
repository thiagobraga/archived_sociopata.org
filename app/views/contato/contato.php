<div class="container">
    <section class="<?php echo $controller ?>">
        <h2 class="page-header"><?php echo $page ?></h2>

        <p class="lead">Envie-nos um e-mail pelo formulário abaixo ou pelo e-mail <a href="mailto:contato@sociopata.org">contato@sociopata.org</a>.<br/>
        <br/>
        </p>

        <form id="contact" class="form-horizontal" role="form">
            <!-- Nome -->
            <div class="form-group">
                <label class="col-sm-2 control-label" for="nome">Nome</label>
                <div class="col-sm-10">
                    <input id="nome" name="nome" maxlength="80" class="form-control" type="text" required />
                </div>
            </div>

            <!-- E-mail -->
            <div class="form-group">
                <label class="col-sm-2 control-label" for="nome">E-mail</label>
                <div class="col-sm-10">
                    <input id="email" name="email" maxlength="80" class="form-control" type="email" required />
                </div>
            </div>

            <!-- Assunto -->
            <div class="form-group">
                <label class="col-sm-2 control-label" for="nome">Assunto</label>
                <div class="col-sm-10">
                    <input id="assunto" name="assunto" maxlength="80" class="form-control" type="text" required />
                </div>
            </div>

            <!-- Mensagem -->
            <div class="form-group">
                <label class="col-sm-2 control-label" for="mensagem">Mensagem</label>
                <div class="col-sm-10">
                    <textarea id="mensagem" name="mensagem" maxlength="300" rows="3" class="form-control" required></textarea>
                </div>
            </div>

            <!-- Form actions -->
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-danger">Enviar</button>
                </div>
            </div>
        </form>
    </section>
</div>
