<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends MY_Controller
{

	/**
	 * Carrega a página inicial do site
     * @since 1.0
	 */
	public function index()
	{
		$data = new stdClass();
		$data->css = array('mods/gallery');
		$data->js = array('plugins/stratus/stratus', 'mods/gallery');
		$data->content = 'gallery';

		$this->load->view('base', $data);
	}

}

/* End of file gallery.php */
/* Location: ./application/controllers/gallery.php */