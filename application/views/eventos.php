<!-- Eventos -->
<section id="eventos" class="page">
  <div class="container">
    <div class="row-fluid">
      <img src="<?= base_url('assets/img/events/'. $evento->imagem .'-gray.jpg') ?>" />
    </div>

    <div class="row-fluid">
      <div class="span4 text-center"><?= date('d/m/Y', strtotime($evento->data)) ?></div>
      <div class="span4 text-center"><?= ($evento->valor == 0) ? "Grátis" : "R$ " . number_format($evento->valor, 2, ',', '.') ?></div>
      <div class="span4 text-center"><?= $evento->local ?></div>
    </div>
  </div>
</section>