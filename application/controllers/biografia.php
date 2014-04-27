<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Biografia
 * @author Thiago Braga <thiago@sociopata.org>
 * @access public
 * @version 1.0
 */
class Biografia extends Model_Controller
{

    /**
     * Carrega a página inicial do site
     * @since 1.0
     */
    public function index()
    {
        $this->data->page = 'Biografia';
        $this->data->content = 'biografia/biografia';

        $this->setTitle('Sociopata | ' . $this->data->page);
        $this->setDescription('Biografia e informações sobre a banda.');

        $this->data->biografia = $this->biografia_model->select_biografia();
        $this->data->integrantes = $this->biografia_model->select_integrantes();
        $this->load->view('template', $this->data);
    }

}

/* End of file biografia.php */
/* Location: ./application/controllers/biografia.php */
