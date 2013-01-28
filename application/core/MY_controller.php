<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Persistent
 * @author Thiago Braga <thiago@sociopata.org>
 * @access protected
 * @version 1.0
 */
class MY_Controller extends CI_Controller
{

  /**
   * @var string Data passed to views
   */
  var $data;

  /**
   * Call the Controller constructor
   * This function is used to call
   * default languages, layout views, etc.
   * @since 1.0
   */
  function __construct()
  {
    parent::__construct();

    /* Initializes the $data variable */
    $this->data = new stdClass();

    /* Meta */
    $this->data->description = 'A Sociopata é uma banda de Thrash Metal/Hardcore formada no interior de São Paulo e iniciada em 2008, atualmente composta por Kleber (Voz), Braga (guitarra), Birão (Baixo), Leo (guitarra) e Gustavo (bateria).';
    $this->data->keywords = 'sociopata, thrash metal, hardcore, bauru, agudos, sao paulo, brasil';

    /* Language Files */
    $this->lang->load('default');
  }

}

/* End of file MY_controller.php */
/* Location: ./application/core/MY_controller.php */