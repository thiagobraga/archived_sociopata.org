<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Band
 * @author Thiago Braga <thiago@sociopata.org>
 * @access public
 * @version 1.0
 */
class Band extends MY_Controller {

  /**
   * Carrega a página inicial do site
   * @since 1.0
   */
  public function index() {
    $this->data->content = 'band/band';
    $this->data->page = "Banda";
    $this->data->css = array('mods/band');
    $this->data->js = array('mods/band');

    $this->load->view('base', $this->data);
  }

}

/* End of file band.php */
/* Location: ./application/controllers/band.php */