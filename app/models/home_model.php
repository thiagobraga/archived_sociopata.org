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
    public function getAlbuns()
    {
        $now = date('Y-m-d H:i:s');
        $query =
            "SELECT
                codigo,
                nome,
                slug,
                ano,
                lancado_em,
                info
            FROM
                albuns
            ORDER BY
                ano DESC";

        $result = $this->db
            ->query($query)
            ->result();

        return $result;
    }

    /**
     * [getMusicas description]
     *
     * @param   [type]  $album  [description]
     * @return  [type]
     */
    public function getMusics()
    {
        $query =
            "SELECT
                musicas_albuns.album,
                musicas.nome,
                musicas.tamanho,
                musicas.letra
            FROM
                musicas
            INNER JOIN
                musicas_albuns ON
                musicas_albuns.musica = musicas.codigo;";

        $result = $this->db
            ->query($query)
            ->result();

        return $result;
    }

    /**
     * [getPhotos description]
     *
     * @return  [type]
     */
    public function getPhotos()
    {
        $query =
            "SELECT codigo, descricao
            FROM    banners;";

        $result = $this->db
            ->query($query)
            ->result();

        return $result;
    }

}

/* End of file home_model.php */
/* Location: ./application/models/home_model.php */
