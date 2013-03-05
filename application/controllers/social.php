<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Social
 * @author Thiago Braga <thiago@sociopata.org>
 * @access public
 * @version 1.0
 */
class Social extends MY_Controller
{

  /**
   * Carrega a página inicial do site
   * @since 1.0
   */
  public function index()
  {
    $this->data->content = 'social/social';
    $this->data->css = array('mods/social');
    $this->data->js = array('mods/social');

    $this->lang->load('social');
    $this->load->view('base', $this->data);
  }

}

/* End of file social.php */
/* Location: ./application/controllers/social.php */