<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Bio
 * @author Thiago Braga <thiago@sociopata.org>
 * @access public
 * @version 1.0
 */
class Bio extends MY_Controller
{

  /**
   * Carrega a página inicial do site
   * @since 1.0
   */
  public function index()
  {
    $this->data->content = 'bio/bio';
    $this->data->css = array('mods/bio');
    $this->data->js = array('mods/bio');

    $this->lang->load('bio');
    $this->load->view('base', $this->data);
  }

}

/* End of file bio.php */
/* Location: ./application/controllers/bio.php */