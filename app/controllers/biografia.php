<?php

defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Biografia
 * @author Thiago Braga <thiago@sociopata.org>
 * @access public
 * @version 1.0
 */
class Biografia extends Sociopata
{

    /**
     * Carrega a página inicial do site
     * @since 1.0
     */
    public function index()
    {
        $this->data = array_merge($this->data, array(
            'biografia'   => Biografia_model::select_biografia(),
            'integrantes' => Biografia_model::select_integrantes(),
            'page'        => 'Biografia',
            'content'     => 'biografia/biografia'
        ));

        Sociopata::setTitle('Sociopata | ' . $this->data['page']);
        Sociopata::setDescription('Biografia e informações sobre a banda.');

        $this->load->view('template', $this->data);
    }

}

/* End of file biografia.php */
/* Location: ./application/controllers/biografia.php */
