<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Downloads
 * @author Thiago Braga <thiago@sociopata.org>
 * @access public
 * @version 1.0
 */
class Downloads extends MY_Controller
{

    /**
    * Carrega a página inicial do site
    * @since 1.0
    */
    public function index()
    {
        $this->data->page = 'Downloads';
        $this->data->content = 'downloads';
        $this->data->css = array('css/modules/downloads');
        $this->data->js = array('js/modules/downloads');
        $this->load->view('base', $this->data);
    }

}

/* End of file downloads.php */
/* Location: ./application/controllers/downloads.php */
