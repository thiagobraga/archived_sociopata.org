<form id="contact" class="form-horizontal">

  <!-- Nome -->
  <div class="control-group">
    <label class="control-label" for="nome">Nome</label>
    <div class="controls">
      <input type="text" class="input-block-level" id="nome" name="nome" maxlength="50" placeholder="Insira seu nome" required="">
    </div>
  </div>

  <!-- E-mail -->
  <div class="control-group">
    <label class="control-label" for="email">E-mail</label>
    <div class="controls">
      <input type="email" class="input-block-level" id="e-mail" name="e-mail" maxlength="50" placeholder="Insira um e-mail válido" required="">
    </div>
  </div>

  <!-- Assunto -->
  <div class="control-group">
    <label class="control-label" for="assunto">Assunto</label>
    <div class="controls">
      <input type="text" class="input-block-level" id="assunto" name="assunto" maxlength="100" placeholder="Informe o assunto do e-mail">
    </div>
  </div>

  <!-- Mensagem -->
  <div class="control-group">
    <label class="control-label" for="mensagem">Mensagem</label>
    <div class="controls">
      <textarea id="mensagem" class="input-block-level" name="mensagem" rows="3" maxlength="300" placeholder="Digite sua Mensagem" required=""></textarea>
    </div>
  </div>

  <!-- Form actions -->
  <div class="control-group">
    <label class="control-label"></label>
    <div class="controls">
      <button type="submit" class="btn pull-right">enviar</button>
      <i class="hide loading pull-right"></i>
    </div>
  </div>
</form>