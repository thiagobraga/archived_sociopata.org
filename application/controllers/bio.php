<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bio extends MY_Controller
{

	/**
	 * Carrega a página inicial do site
     * @since 1.0
	 */
	public function index()
	{
		$data = new stdClass();
		$data->css = array('mods/bio');
		$data->js = array('plugins/stratus/stratus', 'mods/bio');
		$data->content = 'bio';

		$this->load->view('base', $data);
	}

}

/* End of file bio.php */
/* Location: ./application/controllers/bio.php */