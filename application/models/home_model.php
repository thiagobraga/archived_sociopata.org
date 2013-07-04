<?php

/**
 * Home_model
 * @author Thiago Braga <thiago@sitesg.com.br>
 * @access protected
 */
class Home_model extends CI_Model {

  /**
   * Seleciona todos os eventos
   * @return object
   */
  public function select_eventos() {
    return $this->db
      ->select('nome, imagem, local, info, data, valor')
      ->order_by('data', 'desc')
      ->limit(1)
      ->get('eventos')
      ->row();
  }

}

/* End of file home_model.php */
/* Location: ./application/models/sobre_model.php */