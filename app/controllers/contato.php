<?php

defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Contato
 * @author Thiago Braga <thiago@sociopata.org>
 * @access public
 * @version 1.0
 */
class Contato extends Sociopata
{

    /**
    * Carrega a página inicial do site
    * @since 1.0
    */
    public function index()
    {
        $this->data->page = 'Contato';
        $this->data->content = 'contato/contato';

        $this->setTitle('Sociopata | ' . $this->data->page);
        $this->setDescription('Álbuns, vídeos e letras das músicas da Sociopata.');

        $this->load->view('template', $this->data);
    }

}

/* End of file contato.php */
/* Location: ./application/controllers/contato.php */
