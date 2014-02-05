<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Loja
 * @author Thiago Braga <thiago@sociopata.org>
 * @access public
 * @version 1.0
 */
class Loja extends MY_Controller {

    /**
     * Carrega a página inicial do site
     * @since 1.0
     */
    public function index() {
        $this->data->page = 'Loja';
        $this->data->content = 'loja';
        $this->data->css = array('css/modules/loja');
        $this->data->js = array('js/modules/loja');
        $this->load->view('base', $this->data);
    }

}

/* End of file loja.php */
/* Location: ./application/controllers/loja.php */
