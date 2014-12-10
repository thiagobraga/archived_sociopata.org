<?php

defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Home
 * @author Thiago Braga <thiago@sociopata.org>
 * @access public
 * @version 1.0
 */
class Home extends Sociopata
{

    /**
     * Carrega a página inicial do site
     * @since 1.0
     */
    public function index()
    {
        $now = date('Y-m-d H:m:s');

        $this->data->eventos = Home_model::select_proximos_eventos($now);
        $this->data->news    = $this->news();

        $this->data->page    = 'Home';
        $this->data->content = 'home/home';

        Sociopata::setTitle('Sociopata | ' . $this->data->page);
        Sociopata::setDescription('Confira as principais notícias e eventos.');
        Sociopata::loadJs(array('js/src/home'));

        $this->load->view('template', $this->data);
    }

    /**
     * API call news
     *
     * @return  [type]
     */
    public function news()
    {
        $query = 'sociopatabr/posts?limit=20&fields=from,message';
        $news  = $this->facebook->api($query, 'GET');
        return $news['data'];
    }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
