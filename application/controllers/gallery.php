<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Gallery
 * @author Thiago Braga <thiago@sociopata.org>
 * @access public
 * @version 1.0
 */
class Gallery extends MY_Controller
{

  /**
   * Carrega a página inicial do site
   * @since 1.0
   */
  public function index()
  {
    $this->data->content = 'gallery/gallery';
    $this->data->css = array('mods/gallery');
    $this->data->js = array('mods/gallery');

    $this->lang->load('gallery');
    $this->load->view('base', $this->data);
  }

}

/* End of file gallery.php */
/* Location: ./application/controllers/gallery.php */