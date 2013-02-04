<footer>
  <div class="container">
    <div class="row-fluid hide">
      <!-- SITEMAP -->
      <section class="span4">
        <ul class="nav nav-stacked sitemap">
          <li><?= anchor(base_url($this->lang->lang() . '/media'), lang('media')) ?></li>
          <li><?= anchor(base_url($this->lang->lang() . '/bio'), lang('bio')) ?></li>
          <li><?= anchor(base_url($this->lang->lang() . '/gallery'), lang('gallery')) ?></li>
          <li><?= anchor(base_url($this->lang->lang() . '/social'), lang('social')) ?></li>
          <li><?= anchor(base_url($this->lang->lang() . '/contact'), lang('contact')) ?></li>
        </ul>

        <ul class="nav nav-pills center language">
          <li <? if ($this->lang->lang() == "pt") echo 'class="active"' ?>><?= anchor($this->lang->switch_uri('pt'), '<i class="flag flag-br"></i>', array('title' => 'Português')) ?></li>
          <li <? if ($this->lang->lang() == "en") echo 'class="active"' ?>><?= anchor($this->lang->switch_uri('en'), '<i class="flag flag-us"></i>', array('title' => 'English')) ?></li>
          <li <? if ($this->lang->lang() == "es") echo 'class="active"' ?>><?= anchor($this->lang->switch_uri('es'), '<i class="flag flag-es"></i>', array('title' => 'Español')) ?></li>
        </ul>
      </section>

      <!-- REDES SOCIAIS E PLAYER -->
      <section class="span4">

      </section>

      <section class="span4">

      </section>
    </div>
  </div>

  <!-- COPYRIGHT -->
  <div class='copyright row-fluid'>
    <a class="logo" href="<?= base_url() ?>" alt="Sociopata"></a>
    &copy; 2012 - TODOS OS DIREITOS RESERVADOS<br />
    DESENVOLVIDO POR <a href="//sitesg.com.br" data-placement="right" title="www.sitesg.com.br"><i class="icon-sg-666666"></i></a>
  </div>
</footer>