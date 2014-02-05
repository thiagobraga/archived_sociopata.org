<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Biografia_model
 * @author Thiago Braga <thiago@sitesg.com.br>
 * @access protected
 */
class Biografia_model extends CI_Model
{

    /**
     * Seleciona os integrantes.
     * @return object
     */
    public function select_integrantes()
    {
        return $this->db->query(
            "SELECT
                SHA1(CONCAT('TB', inte.codigo, 'SOCIOPATA')) AS codigo,
                inte.nome,
                GROUP_CONCAT(inst.nome ORDER BY inst.codigo SEPARATOR ', ') AS instrumentos
            FROM
                integrantes inte
            INNER JOIN
                integrantes_instrumentos ii ON
                ii.integrante = inte.codigo
            INNER JOIN
                instrumentos inst ON
                inst.codigo = ii.instrumento
            WHERE
                inte.situacao = 1
            GROUP BY
                inte.codigo
            ORDER BY
                inte.nome;")->result();
    }

}

/* End of file biografia_model.php */
/* Location: ./application/models/biografia_model.php */