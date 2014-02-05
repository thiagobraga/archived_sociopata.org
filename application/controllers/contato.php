<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Contato
 * @author Thiago Braga <thiago@sociopata.org>
 * @access public
 * @version 1.0
 */
class Contato extends MY_Controller
{

    /**
    * Carrega a página inicial do site
    * @since 1.0
    */
    public function index()
    {
        $this->data->page = 'Contato';
        $this->data->content = 'contato';
        $this->data->css = array('css/modules/contato');
        $this->data->js = array('js/modules/contato');
        $this->load->view('base', $this->data);
    }

}

/* End of file contato.php */
/* Location: ./application/controllers/contato.php */
