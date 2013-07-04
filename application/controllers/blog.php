<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Blog
 * @author Thiago Braga <thiago@sociopata.org>
 * @access public
 * @version 1.0
 */
class Blog extends MY_Controller {

  /**
   * Carrega a página inicial do site
   * @since 1.0
   */
  public function index() {
    $this->data->content = 'blog/blog';
    $this->data->css = array('mods/blog');
    $this->data->js = array('mods/blog');
    $this->load->view('base', $this->data);
  }

}

/* End of file blog.php */
/* Location: ./application/controllers/blog.php */