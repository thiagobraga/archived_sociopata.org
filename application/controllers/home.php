<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home
 * @author Thiago Braga <thiago@sociopata.org>
 * @access public
 * @version 1.0
 */
class Home extends MY_Controller {

  /**
   * Carrega a página inicial do site
   * @since 1.0
   */
  public function index() {
    $this->load->model('home_model', 'Home');
    $this->data->css = array('mods/home');
    $this->data->js = array('mods/home');
    $this->data->evento = $this->Home->select_eventos();
    $this->load->view('base', $this->data);
  }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */