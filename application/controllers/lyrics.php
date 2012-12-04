<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Lyrics extends MY_Controller
{

	/**
	 * Carrega a página inicial do site
     * @since 1.0
	 */
	public function index()
	{
		$data = new stdClass();
		$data->css = array('mods/lyrics');
		$data->js = array('plugins/stratus/stratus', 'mods/lyrics');
		$data->content = 'lyrics';

		$this->load->view('base', $data);
	}

}

/* End of file lyrics.php */
/* Location: ./application/controllers/lyrics.php */