<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Styleguide
 * @author Thiago Braga <thiago@sitesg.com.br>
 * @access public
 * @version 1.0
 */
class Styleguide extends MY_Controller {

    /**
     * Carrega a página inicial do site
     * @version 1.0
     */
    public function index() {
        $this->data->page = 'Style Guide';
        $this->data->content = 'styleguide/styleguide';

        $this->setTitle('Sociopata | ' . $this->data->page);
        $this->setDescription('Álbuns, vídeos e letras das músicas da Sociopata.');

        $this->load->view('template', $this->data);
    }

}

/* End of file styleguide.php */
/* Location: ./application/controllers/styleguide.php */
