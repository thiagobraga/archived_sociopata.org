<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Persistent
 * @author Thiago Braga <thiago@sociopata.org>
 * @access protected
 * @version 1.0
 */
class MY_Controller extends CI_Controller {

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
  function __construct() {
    parent::__construct();

    /* Initializes the $data variable */
    $this->data = new stdClass();

    /* Meta */
    $this->data->title = 'Sociopata :: Site Oficial';
    $this->data->description = 'A Sociopata é uma banda de metal formada no interior de São Paulo e iniciada em 2008, atualmente composta por Kleber Cabrera (Voz), Thiago Braga (guitarra), Birão Spoldari (Baixo), Leo Sanches (guitarra) e Gustavo Panurge (bateria).';
    $this->data->keywords = 'sociopata, thrash metal, hardcore, bauru, agudos, sao paulo, brasil';

    /* Facebook */
    /*
    $fb_config = array(
      'appId' => '475565802516661',
      'secret' => '2be989c5d49926716ab46181e047e034'
    );
    $this->load->library('facebook', $fb_config);
    echo("<br/><br/><br/><br/><br/>");
    var_dump($this->facebook);
    */
  }

}

/* End of file MY_controller.php */
/* Location: ./application/core/MY_controller.php */