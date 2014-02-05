<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home_model
 * @author Thiago Braga <thiago@sitesg.com.br>
 * @access protected
 */
class Home_model extends CI_Model
{

    /**
     * Seleciona o mais próximo evento da data atual
     * @return object
     */
    public function select_proximo_evento($now)
    {
        return $this->db->query(
            "SELECT
                SHA1(CONCAT('TB', codigo, 'SOCIOPATA')) AS codigo,
                nome,
                local,
                data
            FROM
                eventos
            WHERE
                data > '$now'
            LIMIT
                1;")->row();
    }

    /**
     * Seleciona as últimas notícias
     * @return object
     */
    public function select_noticias()
    {
        return $this->db->query(
            "SELECT
                SHA1(CONCAT('TB', codigo, 'SOCIOPATA')) AS codigo,
                nome,
                imagem,
                descricao
            FROM
                noticias
            LIMIT
                5;")->result();
    }

}

/* End of file home_model.php */
/* Location: ./application/models/home_model.php */
