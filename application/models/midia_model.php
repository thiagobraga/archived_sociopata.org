<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Midia_model
 * @author Thiago Braga <contato@thiagobraga.org>
 * @access protected
 */
class Midia_model extends CI_Model
{

  /**
     * Seleciona todas as músicas
     *
     * @return object
     */
    public function select_musicas()
    {
        return $this->db->query(
            "SELECT
                SHA1(CONCAT('TB', codigo, 'SOCIOPATA')) AS codigo,
                nome,
                tamanho,
                letra
            FROM
                musicas;")->result();
    }

    /**
     * Seleciona todas os álbuns
     *
     * @return object
     */
    public function select_albuns()
    {
        return $this->db->query(
            "SELECT
                SHA1(CONCAT('TB', a.codigo, 'SOCIOPATA')) AS codigo,
                a.nome,
                a.info,
                a.ano,
                t.nome AS tipo
            FROM
                albuns a
            INNER JOIN
                tipos_albuns t ON
                t.codigo = a.tipo_album;")->result();
    }

}

/* End of file midia_model.php */
/* Location: ./application/models/midia_model.php */
