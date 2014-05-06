<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Midia
 * @author Thiago Braga <thiago@sociopata.org>
 * @access public
 * @version 1.0
 */
class Midia extends Model_Controller
{

    /**
     * Carrega a página inicial do site
     * @since 1.0
     */
    public function index()
    {
        $this->data->page = 'Mídia';
        $this->data->content = 'midia/midia';

        $this->loadCss(array('css/modules/midia'));
        $this->loadJs(array('js/modules/midia'));
        $this->setTitle('Sociopata | ' . $this->data->page);
        $this->setDescription('Álbuns, vídeos e letras das músicas da Sociopata.');

        $this->data->albuns = $this->midia_model->select_albuns();
        $this->data->musicas = $this->midia_model->select_musicas();
        $this->load->view('template', $this->data);
    }

}

/* End of file midia.php */
/* Location: ./application/controllers/midia.php */
