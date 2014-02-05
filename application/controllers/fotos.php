<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Fotos
 * @author Thiago Braga <thiago@sociopata.org>
 * @access public
 * @version 1.0
 */
class Fotos extends MY_Controller {

    /**
     * Carrega a página inicial do site
     * @since 1.0
     */
    public function index() {
        $this->data->page = 'Fotos';
        $this->data->content = 'fotos';
        $this->data->css = array('css/modules/fotos');
        $this->data->js = array('js/modules/fotos');
        $this->load->view('base', $this->data);
    }

}

/* End of file fotos.php */
/* Location: ./application/controllers/fotos.php */
