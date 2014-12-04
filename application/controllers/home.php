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

        $this->data->page = 'Home';
        $this->data->content = 'home/home';

        $this->setTitle('Sociopata | ' . $this->data->page);
        $this->setDescription('Confira as principais notícias e eventos.');
        $this->loadJs(array('js/src/home'));

        $this->load->view('template', $this->data);
    }

    /**
     * API call
     *
     * @return  [type]
     */
    public function news()
    {
        // $news = $this->facebook->api('153762751309956/feed?limit=10&type=photo&fields=message', 'GET');
        $news = $this->facebook->api('153762751309956/feed?limit=15', 'GET');
        Sociopata::returnJson($news);
    }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
