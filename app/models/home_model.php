<?php

defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Home_model
 * @author Thiago Braga <contato@thiagobraga.org>
 * @access protected
 */
class Home_model extends CI_Model
{

    /**
     * Seleciona o mais próximo evento da data atual
     *
     * @return object
     */
    public function getNextEvents()
    {
        $now = date('Y-m-d H:m:s');
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
                data > '$now'
                AND situacao = 1
            ORDER BY
                data ASC
            LIMIT
                5;";

        $result = $this->db->query($query)->result();
        return $result;
    }

    /**
     * Seleciona o mais próximo evento da data atual
     *
     * @return object
     */
    public function getAlbuns()
    {
        $query =
            "SELECT
                nome,
                slug,
                ano,
                lancado_em,
                info
            FROM
                albuns
            ORDER BY
                ano DESC";

        $result = $this->db->query($query)->result();
        return $result;
    }

    public function getMusicas($album)
    {
        $query =
            "SELECT
                musicas.nome,
                musicas.tamanho,
                musicas.letra
            FROM
                musicas
            INNER JOIN
                musicas_albuns ON
                musicas_albuns.musica = musicas.nome
            WHERE
                musicas_albuns.album = $album";

        $result = $this->db->query($query)->result();
        return $result;
    }

    public function getPhotos()
    {
        $query =
            "SELECT arquivo, descricao
            FROM    banners;";

        $result = $this->db->query($query)->result();
        return $result;
    }

}

/* End of file home_model.php */
/* Location: ./application/models/home_model.php */
