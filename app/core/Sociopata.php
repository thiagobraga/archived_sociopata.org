<?php

/**
 * MY_Controller.php
 *
 * Classes, métodos e propriedades do controller home.
 * A classe Home estende a classe MY_Controller.
 *
 * PHP version 5
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category  Thrash Metal
 * @package   Sociopata
 * @author    Thiago Braga <thiago@sociopata.org>
 * @copyright 1997-2005 The PHP Group
 * @license   http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version   GIT: $Id$
 * @link      http://sociopata.org
 * @since     File available since Release 0.0.0
 */

defined('BASEPATH') || exit('No direct script access allowed');

/**
 * MY_Controller
 * @author Thiago Braga <thiago@sociopata.org>
 * @access public
 * @version 1.0
 */
class Sociopata extends CI_Controller
{

    /**
     * Variável que armazena dados no controller
     * e envia para as views.
     *
     * @var stdClass
     */
    public $data;

    /**
     * Variável response utilizada nas requisições ajax.
     *
     * @var stdClass
     */
    public $response;

    /**
     * Armazena o nome do controller
     *
     * @var string
     */
    public $controller;

    /**
     * Armazena o nome do método
     *
     * @var string
     */
    public $method;

    /**
     * Call the controller constructor
     *
     * Chama o construtor da classe controller para estender
     * seu conteúdo. Utilizado para instanciar as variáveis
     * $this->data e $this->response, bem como incluir meta
     * tags no arquivo HTML.
     *
     * @since Method available since Release 1.0
     */
    public function __construct()
    {
        parent::__construct();

        $this->response = array();
        $this->data = array(
            'controller' => $this->router->fetch_class(),
            'method'     => $this->router->fetch_method(),
            'session'    => $this->session->all_userdata()
        );

        if (
            ENVIRONMENT === 'production' &&
            !preg_match('/landing|contato/', $this->data['controller'])
        ) {
            redirect(base_url());
        }

        $this->loadCss(array('public/css/styles.min'));
        $this->loadJs(array('public/js/scripts.min'));
        $this->setKeywords(array(
            'bandas',
            'bauru',
            'metal',
            'sao paulo',
            'brasil',
            'thrash',
            'hardcore',
            'progressivo'
        ));
    }

    /**
     * Set page title.
     *
     * @access protected
     * @param  string $page_title
     */
    protected function setTitle($title)
    {
        $this->load->vars(array('title' => $title));
    }

    /**
     * Set meta description.
     *
     * @access protected
     * @param  string $meta_description
     */
    protected function setDescription($description)
    {
        $this->load->vars(array('description' => $description));
    }

    /**
     * Set meta keywords.
     *
     * @access protected
     * @param  string $keywords
     */
    protected function setKeywords($keywords)
    {
        $this->load->vars(array('keywords' => implode(',', $keywords)));
    }

    /**
     * Load css styles.
     *
     * @access protected
     * @param  array $css
     */
    protected function loadCss(array $css)
    {
        if ($og_css = $this->load->get_var('css')) {
            $css = array_merge($og_css, $css);
            $css = array_unique($css);
        }

        $this->load->vars('css', $css);
    }

    /**
     * Load javascript files.
     *
     * @access protected
     * @param  array $js
     */
    protected function loadJs(array $js)
    {
        if ($og_js = $this->load->get_var('js')) {
            $js = array_merge($og_js, $js);
            $js = array_unique($js);
        }

        $this->load->vars('js', $js);
    }

    /**
     * Return json data.
     *
     * @access protected
     * @param  array $data
     * @link http://ellislab.com/codeigniter/user-guide/libraries/output.html
     *
     */
    protected function returnJson($data)
    {
        // Set content type and output
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($data));
    }

}

/* End of file Sociopata.php */
/* Location: ./application/core/Sociopata.php */
