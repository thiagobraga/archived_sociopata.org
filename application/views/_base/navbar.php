<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="<?= base_url($this->lang->lang()) ?>">
        <img src="<?= base_url('assets/img/logo/logo-white-small.png') ?>" />
      </a>
      <div class="collapse nav-collapse">
        <ul id="menu" class="nav">
          <? if (ENVIRONMENT == "production") : ?>
            <li><p><?= lang('soon') ?></p></li>
          <? else : ?>
            <li><?= anchor(base_url($this->lang->lang()), '<i class="icon-home icon-white"></i>') ?></li>
            <li><?= anchor(base_url($this->lang->lang() . '/media'), lang('media')) ?></li>
            <li><?= anchor(base_url($this->lang->lang() . '/bio'), lang('bio')) ?></li>
            <li><?= anchor(base_url($this->lang->lang() . '/gallery'), lang('gallery')) ?></li>
            <li><?= anchor(base_url($this->lang->lang() . '/lyrics'), lang('lyrics')) ?></li>
            <li><?= anchor(base_url($this->lang->lang() . '/social'), lang('social')) ?></li>
            <li><?= anchor(base_url($this->lang->lang() . '/contact'), lang('contact')) ?></li>
          <? endif; ?>
        </ul>
        <ul class="nav language pull-right">
          <li <? if ($this->lang->lang() == "pt") echo 'class="active"' ?>><?= anchor($this->lang->switch_uri('pt'), '<i class="flag flag-br"></i>') ?></li>
          <li <? if ($this->lang->lang() == "en") echo 'class="active"' ?>><?= anchor($this->lang->switch_uri('en'), '<i class="flag flag-us"></i>') ?></li>
          <li <? if ($this->lang->lang() == "es") echo 'class="active"' ?>><?= anchor($this->lang->switch_uri('es'), '<i class="flag flag-es"></i>') ?></li>
        </ul>
      </div>
    </div>
  </div>
</div>