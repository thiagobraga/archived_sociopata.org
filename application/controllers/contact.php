<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MY_Controller
{

	/**
	 * Carrega a página inicial do site
     * @since 1.0
	 */
	public function index()
	{
		$data = new stdClass();
		$data->css = array('mods/contact');
		$data->js = array('plugins/stratus/stratus', 'mods/contact');
		$data->content = 'contact';

		$this->load->view('base', $data);
	}

}

/* End of file contact.php */
/* Location: ./application/controllers/contact.php */