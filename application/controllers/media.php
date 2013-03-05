<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Media
 * @author Thiago Braga <thiago@sociopata.org>
 * @access public
 * @version 1.0
 */
class Media extends MY_Controller
{

  /**
   * Carrega a página Media
   * @since 1.0
   */
  public function index()
  {
    $this->data->content = 'media/media';
    $this->data->css = array('mods/media');
    $this->data->js = array('mods/media');

    $this->lang->load('media');
    $this->load->view('base', $this->data);
  }

}

/* End of file media.php */
/* Location: ./application/controllers/media.php */