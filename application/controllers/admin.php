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
        $this->data->content = 'admin/admin';

        $this->setTitle('Sociopata | ' . $this->data->page);
        $this->setDescription('Confira as principais notícias e eventos.');

        $this->data->eventos = $this->admin_model->select_eventos();
        $this->data->noticias = $this->admin_model->select_noticias();
        $this->load->view('template', $this->data);
    }

    /**
     * Realiza o login do usuário
     * utilizando o Facebook.
     *
     * @return {void}
     */
    public function login()
    {

    }

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */
