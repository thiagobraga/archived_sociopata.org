<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->title = 'Sociopata';
    $this->meta_description = 'A Sociopata é uma banda de Thrash Metal/Hardcore de Bauru/Agudos iniciada em 2008 e atualmente é composta por Kleber (Voz), Braga (guitarra), Birão (Baixo), Leo (guitarra) e Gustavo (bateria).';
    $this->meta_keywords = 'sociopata, thrash metal, hardcore, bauru, agudos, sao paulo, brasil';
  }

}

/* End of file MY_controller.php */
/* Location: ./application/core/MY_controller.php */