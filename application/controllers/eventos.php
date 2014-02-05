<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Eventos
 * @author Thiago Braga <thiago@sociopata.org>
 * @access public
 * @version 1.0
 */
class Eventos extends Model_Controller
{

    /**
     * Carrega a página inicial do site
     * @since 1.0
     */
    public function index()
    {
        $this->data->page = 'Eventos';
        $this->data->content = 'eventos';
        $this->data->css = array('css/modules/eventos');
        $this->data->js = array('js/modules/eventos');
        $this->data->now = date('Y-m-d H:m:s');
        $this->data->eventos = $this->eventos_model->select_eventos();
        $this->load->view('base', $this->data);
    }

}

/* End of file eventos.php */
/* Location: ./application/controllers/eventos.php */
