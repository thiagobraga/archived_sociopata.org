<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home
 * @author Thiago Braga <thiago@sociopata.org>
 * @access public
 * @version 1.0
 */
class Home extends Model_Controller
{

    /**
     * Carrega a página inicial do site
     * @since 1.0
     */
    public function index()
    {
        $this->data->page = 'Home';
        $this->data->content = 'home/home';
        $now = date('Y-m-d H:m:s');

        $this->setTitle('Sociopata | ' . $this->data->page);
        $this->setDescription('Confira as principais notícias e eventos.');

        $this->data->eventos = $this->home_model->select_proximos_eventos($now);
        $this->data->noticias = $this->home_model->select_noticias();
        $this->load->view('template', $this->data);
    }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
