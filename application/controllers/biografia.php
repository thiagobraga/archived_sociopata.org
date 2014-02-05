<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Biografia
 * @author Thiago Braga <thiago@sociopata.org>
 * @access public
 * @version 1.0
 */
class Biografia extends Model_Controller {

    /**
     * Carrega a página inicial do site
     * @since 1.0
     */
    public function index() {
        $this->data->page = 'Biografia';
        $this->data->content = 'biografia';
        $this->data->css = array('css/modules/biografia');
        $this->data->js = array('js/modules/biografia');
        $this->data->integrantes = $this->biografia_model->select_integrantes();
        $this->load->view('base', $this->data);
    }

}

/* End of file biografia.php */
/* Location: ./application/controllers/biografia.php */
