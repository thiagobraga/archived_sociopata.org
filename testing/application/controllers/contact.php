<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Contact
 * @author Thiago Braga <thiago@sociopata.org>
 * @access public
 * @version 1.0
 */
class Contact extends MY_Controller
{

  /**
   * Carrega a página inicial do site
   * @since 1.0
   */
  public function index()
  {
    $this->data->content = 'contact/contact';
    $this->data->css = array('mods/contact');
    $this->data->js = array('mods/contact');

    $this->lang->load('contact');
    $this->parser->parse('base', $this->data);
  }

}

/* End of file contact.php */
/* Location: ./application/controllers/contact.php */