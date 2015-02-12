<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Eventos_model
 * @author Thiago Braga <contato@thiagobraga.org>
 * @access protected
 */
class Eventos_model extends CI_Model
{

    /**
     * Seleciona todos os eventos
     *
     * @return object
     */
    public function select_eventos()
    {
        $query =
            "SELECT
                SHA1(CONCAT('TB', codigo, 'SOCIOPATA')) AS codigo,
                nome,
                info,
                local,
                slug,
                facebook,
                valor,
                data
            FROM
                eventos
            WHERE
                situacao = 1
            ORDER BY
                data DESC;";

        $result = $this->db->query($query)->result();
        return $result;
    }

}

/* End of file eventos_model.php */
/* Location: ./application/models/eventos_model.php */