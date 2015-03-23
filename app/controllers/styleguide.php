<?php

defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Styleguide
 * @author Thiago Braga <contato@thiagobraga.org>
 * @access public
 * @version 1.0
 */
class Styleguide extends Sociopata
{

    /**
     * Carrega a página inicial do site
     * @version 1.0
     */
    public function index()
    {
        $this->data = array_merge($this->data, array(
            'page'    => 'Styleguide',
            'content' => 'styleguide/styleguide'
        ));

        Sociopata::setTitle('Sociopata | ' . $this->data['page']);
        Sociopata::setDescription('Estilo dos componentes utilizados no site');

        $this->load->view('template', $this->data);
    }

}

/* End of file styleguide.php */
/* Location: ./application/controllers/styleguide.php */
