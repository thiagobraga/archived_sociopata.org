<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Lyrics
 * @author Thiago Braga <thiago@sociopata.org>
 * @access public
 * @version 1.0
 */
class Lyrics extends MY_Controller
{

  /**
   * Carrega a página inicial do site
   * @since 1.0
   */
  public function index()
  {
    $this->data->content = 'lyrics/lyrics';
    $this->data->css = array('mods/lyrics');
    $this->data->js = array('mods/lyrics');

    $this->lang->load('lyrics');
    $this->parser->parse('base', $this->data);
  }

}

/* End of file lyrics.php */
/* Location: ./application/controllers/lyrics.php */