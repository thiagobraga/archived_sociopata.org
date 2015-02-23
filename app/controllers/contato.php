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
        $this->data = array_merge($this->data, array(
            'page'    => 'Contato',
            'content' => 'contato/contato'
        ));

        Sociopata::setTitle('Sociopata | ' . $this->data['page']);
        Sociopata::setDescription('Contato para shows e eventos');

        $this->load->view('template', $this->data);
    }

}

/* End of file contato.php */
/* Location: ./application/controllers/contato.php */
