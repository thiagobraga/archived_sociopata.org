<?php

defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Midia
 * @author Thiago Braga <thiago@sociopata.org>
 * @access public
 * @version 1.0
 */
class Midia extends Sociopata
{

    /**
     * Carrega a página inicial do site
     * @since 1.0
     */
    public function index()
    {
        $this->data = array_merge($this->data, array(
            'albuns'  => $this->midia_model->select_albuns(),
            'musicas' => $this->midia_model->select_musicas(),
            'page'    => 'Mídia',
            'content' => 'midia/midia'
        ));

        Sociopata::setTitle('Sociopata | ' . $this->data['page']);
        Sociopata::setDescription('Álbuns, vídeos e letras das músicas da Sociopata.');

        $this->load->view('template', $this->data);
    }

}

/* End of file midia.php */
/* Location: ./application/controllers/midia.php */
