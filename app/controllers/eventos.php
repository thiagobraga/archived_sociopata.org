<?php

defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Eventos
 * @author Thiago Braga <thiago@sociopata.org>
 * @access public
 * @version 1.0
 */
class Eventos extends Sociopata
{

    /**
     * Carrega a página inicial do site
     * @since 1.0
     */
    public function index()
    {
        $this->data = array_merge($this->data, array(
            'now'     => date('Y-m-d H:m:s'),
            'eventos' => Eventos_model::select_eventos(),
            'page'    => 'Eventos',
            'content' => 'eventos/eventos'
        ));

        Sociopata::setTitle('Sociopata | ' . $this->data['page']);
        Sociopata::setDescription('Lista de todos os eventos da Sociopata.');
        Sociopata::loadCss(array('css/modules/eventos'));

        $this->load->view('admin/template', $this->data);
    }

}

/* End of file eventos.php */
/* Location: ./application/controllers/eventos.php */
