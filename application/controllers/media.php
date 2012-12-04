<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends MY_Controller
{

	/**
	 * Carrega a página inicial do site
     * @since 1.0
	 */
	public function index()
	{
		$data = new stdClass();
		$data->css = array('mods/media');
		$data->js = array('plugins/stratus/stratus', 'mods/media');
		$data->content = 'media';

		$this->load->view('base', $data);
	}

}

/* End of file media.php */
/* Location: ./application/controllers/media.php */