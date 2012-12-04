<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Social extends MY_Controller
{

	/**
	 * Carrega a página inicial do site
     * @since 1.0
	 */
	public function index()
	{
		$data = new stdClass();
		$data->css = array('mods/social');
		$data->js = array('plugins/stratus/stratus', 'mods/social');
		$data->content = 'social';

		$this->load->view('base', $data);
	}

}

/* End of file social.php */
/* Location: ./application/controllers/social.php */