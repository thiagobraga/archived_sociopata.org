<header>
  <div class="container row-fluid">
    <div class="span12">
      <a class="logo" href="<?= base_url($this->lang->lang()) ?>" alt="Sociopata"></a>
      <nav id="menu">
        <?= anchor(base_url($this->lang->lang() . '/media'), lang('media')) ?> |
        <?= anchor(base_url($this->lang->lang() . '/bio'), lang('bio')) ?>
        <?= anchor(base_url($this->lang->lang() . '/gallery'), lang('gallery'), array('class' => 'hide')) ?>
        <?= anchor(base_url($this->lang->lang() . '/social'), lang('social'), array('class' => 'hide')) ?>
        <?= anchor(base_url($this->lang->lang() . '/contact'), lang('contact'), array('class' => 'hide')) ?>
      </nav>
    </div>
  </div>
</header>

<div class="hero-back"></div>

<div id="slider" class="hero carousel carousel-fade slide">
  <div class="carousel-inner">
    <div class="item item-01 active"></div>
    <div class="item item-02"></div>
    <div class="item item-03"></div>
    <div class="item item-04"></div>
    <div class="item item-05"></div>
    <div class="item item-06"></div>
    <div class="item item-07"></div>
    <div class="item item-08"></div>
    <div class="item item-09"></div>
  </div>
</div>