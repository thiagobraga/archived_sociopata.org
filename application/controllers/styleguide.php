<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Styleguide
 * @author Thiago Braga <thiago@sitesg.com.br>
 * @access public
 * @version 1.0
 */
class Styleguide extends MY_Controller {

    /**
     * Carrega a página inicial do site
     * @version 1.0
     */
    public function index() {
        $this->data->page = 'Style Guide';
        $this->data->content = 'styleguide';
        $this->data->css = array('css/modules/styleguide');
        $this->data->js = array('js/modules/styleguide');
        $this->load->view('base', $this->data);
    }

}

/* End of file styleguide.php */
/* Location: ./application/controllers/styleguide.php */
