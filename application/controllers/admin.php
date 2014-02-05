<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Admin
 * @author Thiago Braga <thiago@sociopata.org>
 * @access public
 * @version 1.0
 */
class Admin extends Model_Controller
{

    /**
     * Carrega a página inicial do site
     * @since 1.0
     */
    public function index()
    {
        $this->data->page = 'admin';
        $this->data->content = 'admin';
        $this->data->css = array('css/modules/admin');
        $this->data->js = array('js/modules/admin');
        $this->load->view('base', $this->data);
    }

    public function ajax_inserir_evento()
    {

    }

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */
