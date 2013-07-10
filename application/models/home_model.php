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
    return $this->db->query("
      SELECT
        nome,
        imagem,
        local,
        info,
        data,
        valor
      FROM eventos
      LIMIT 1;")->row();
  }

}

/* End of file home_model.php */
/* Location: ./application/models/sobre_model.php */