<?php

defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Links
 * @author Thiago Braga <thiago@sociopata.org>
 * @access public
 * @version 1.0
 */
class Links extends Sociopata
{

    /**
     * Carrega a página inicial do site
     * @since 1.0
     */
    public function index()
    {
        $this->data->page = 'Links';
        $this->data->content = 'links/links';

        $this->setTitle('Sociopata | ' . $this->data->page);
        $this->setDescription('Links para redes sociais e álbuns online da Sociopata.');

        $this->load->view('template', $this->data);
    }

}

/* End of file links.php */
/* Location: ./application/controllers/links.php */
