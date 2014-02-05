<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Links
 * @author Thiago Braga <thiago@sociopata.org>
 * @access public
 * @version 1.0
 */
class Links extends MY_Controller
{

    /**
     * Carrega a página inicial do site
     * @since 1.0
     */
    public function index()
    {
        $this->data->page = 'Links';
        $this->data->content = 'links';
        $this->data->css = array('css/modules/links');
        $this->data->js = array('js/modules/links');
        $this->load->view('base', $this->data);
    }

}

/* End of file links.php */
/* Location: ./application/controllers/links.php */
