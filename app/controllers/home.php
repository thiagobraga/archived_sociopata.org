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
        $this->data = array_merge($this->data, array(
            'eventos' => Home_model::getNextEvents(),
            'news'    => $this->getNews(),
            'albuns'  => $this->getAlbuns(),
            'musicas' => $this->getMusics(),
            'photos'  => $this->getPhotos(),
            'page'    => 'Home',
            'content' => 'home/home'
        ));

        Sociopata::setTitle('Sociopata | ' . $this->data['page']);
        Sociopata::setDescription('Confira as principais notícias e eventos.');
        Sociopata::loadCss(array(
            'bower_components/OwlCarousel/owl-carousel/owl.carousel',
            'bower_components/OwlCarousel/owl-carousel/owl.transitions',
            'bower_components/OwlCarousel/owl-carousel/owl.theme'
        ));

        $this->load->view('template', $this->data);
    }

    public function getEvents()
    {
        $result = Home_model::getNextEvents();
        return $result;
    }

    /**
     * API call news
     *
     * @return  [type]
     */
    public function getNews()
    {
        $query = array(
            'sociopatabr',
            '/posts',
            '?limit=5',
            '&fields=picture,message,created_time,link'
        );

        $news = $this->facebook->api(implode('', $query), 'GET');
        $news = $this->formatPosts($news);

        return $news['data'];
    }

    public function formatPosts($news)
    {
        foreach ($news['data'] as $i => $notice) {
            if (isset($notice['message'])) {
                $news['data'][$i]['message']      = str_replace("\n", '<br/>', $notice['message']);
                $news['data'][$i]['created_time'] = date('d/m/Y', strtotime($notice['created_time']));
            } else {
                unset($news['data'][$i]);
            }
        }

        return $news;
    }

    public function getAlbuns()
    {
        $result  = Home_model::getAlbuns();
        return $result;
    }

    public function getMusics($value='')
    {
        # code...
    }

    public function getPhotos()
    {
        $result = Home_model::getPhotos();
        return $result;
    }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
