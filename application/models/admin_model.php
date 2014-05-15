<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Admin_model
 * @author Thiago Braga <contato@thiagobraga.org>
 * @access protected
 */
class Admin_model extends CI_Model
{

    /**
     * Lista todos os eventos
     *
     * @return {Object}
     */
    public function select_eventos()
    {
        return $this->db->query(
            "SELECT
                codigo,
                nome,
                info,
                local,
                valor,
                data,
                criado_em,
                situacao
            FROM
                Eventos")->result();
    }

    /**
     * Lista todos as notícias
     *
     * @return {Object}
     */
    public function select_noticias()
    {
        return $this->db->query(
            "SELECT
                codigo,
                nome,
                info,
                local,
                valor,
                data,
                criado_em,
                situacao
            FROM
                Eventos")->result();
    }

}

/* End of file admin_model.php */
/* Location: ./application/models/admin_model.php */
