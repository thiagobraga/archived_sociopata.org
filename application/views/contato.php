<section id="contato" class="page">
  <div class="container">

    <form id="contact" class="form-horizontal">
      <!-- Nome -->
      <div class="control-group">
        <label class="control-label" for="nome">Nome</label>
        <div class="controls">
          <input id="nome" name="nome" maxlength="80" class="input-block-level" type="text" required />
        </div>
      </div>

      <!-- E-mail -->
      <div class="control-group">
        <label class="control-label" for="email">E-mail</label>
        <div class="controls">
          <input id="email" name="email" maxlength="50" class="input-block-level" type="email" required />
        </div>
      </div>

      <!-- Assunto -->
      <div class="control-group">
        <label class="control-label" for="assunto">Assunto</label>
        <div class="controls">
          <input id="assunto" name="assunto" maxlength="100" class="input-block-level" type="text" />
        </div>
      </div>

      <!-- Mensagem -->
      <div class="control-group">
        <label class="control-label" for="mensagem">Mensagem</label>
        <div class="controls">
          <textarea id="mensagem" name="mensagem" maxlength="300" rows="3" class="input-block-level" required></textarea>
        </div>
      </div>

      <!-- Form actions -->
      <div class="control-group">
        <label class="control-label"></label>
        <div class="controls">
          <button type="submit" class="btn btn-large btn-inverse pull-right">Enviar</button>
        </div>
      </div>
    </form>
  </div>
</section>