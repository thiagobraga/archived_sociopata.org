<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Midia
 * @author Thiago Braga <thiago@sociopata.org>
 * @access public
 * @version 1.0
 */
class Midia extends Model_Controller {

  /**
   * Carrega a página Midia
   * @since 1.0
   */
  public function index() {
    $this->data->page = 'Mídia';
        $this->data->content = 'midia';
        $this->data->css = array(
            'js/plugins/mediaelement/mediaelementplayer.min',
            'css/modules/midia'
        );
        $this->data->js = array(
            'js/plugins/mediaelement/mediaelement-and-player.min',
            'js/modules/midia'
        );
        $this->data->albuns = $this->midia_model->select_albuns();
        $this->data->musicas = $this->midia_model->select_musicas();
        $this->load->view('base', $this->data);
  }

}

/* End of file midia.php */
/* Location: ./application/controllers/midia.php */
