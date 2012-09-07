<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    /**
     * index()
     * Carrega a página inicial do site
     */
    public function index()
    {
        $data = new stdClass();
        $data->css = array('mods/home');
        $data->js = array('mods/home');
        $data->body = 'home/home';

        $this->load->view('base', $data);
    }
}


/* End of file home.php */
/* Location: ./application/controllers/home.php */