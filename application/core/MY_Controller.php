<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * MY_Controller Class
 * Contém funções comuns para todos os controllers
 * @author Thiago Braga <thiago@sociopata.org>
 * @package Sociopata
 * @subpackage Controllers
 * @since Class available since Release 1.0
 * @license http://www.php.net/license/3_01.txt PHP License 3.01
 * @access private
 */
class MY_Controller extends CI_Controller {

    /**
     * @var object Data parsed to views
     */
    var $data;

    /**
     * @var object Stores Ajax responses
     */
    var $response;

    /**
     * @var string Armazena o nome da classe atual
     */
    var $class;

    /**
     * @var string Armazena o nome do método atual
     */
    var $method;

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
    function __construct() {
        parent::__construct();
        $this->class = $this->router->fetch_class();
        $this->method = $this->router->fetch_method();

        if (strrpos($this->method, 'ajax_') === 0)
            $this->ajax();

        $this->data = new stdClass();
        $this->response = new stdClass();
        $this->data->class = $this->class;
        //$this->load->model('configs_model', 'Configs');
        //$this->modulos();
        $this->metadata();
    }

    /**
     * Verifica se é uma requisição POST. Se não for,
     * redireciona para o controller que o solicitou
     * utilizando o método $this->router->fetch_class().
     *
     * @see $this->router->fetch_class()
     * http://stackoverflow.com/q/409351/1096219
     */
    function ajax() {
        ($_SERVER['REQUEST_METHOD'] == 'POST') OR redirect(base_url($this->class));
    }

    /**
     *
     * Get the module of the system.
     *
     * Creates the menu element with li
     * elements from the modules of the system.
     *
     */
    function modulos() {
        $this->data->menu = $this->Configs->select_menu();
        $this->data->tabs = $this->Configs->select_tabs();
        $page_info = $this->Configs->select_pageinfo($this->class);
        $this->data->info = $page_info->info;
        $this->data->info_edit = $page_info->info_edit;
        $this->data->info_cadastro = $page_info->info_cadastro;
    }

    /**
     * Get the meta tags of the system.
     *
     * Creates the meta tag elements with
     * description at the head of the document.
     *
     * @return
     * @todo Get from database
     */
    function metadata() {
        $this->data->title = 'Sociopata :: Site Oficial';
        $this->data->description = 'A Sociopata é uma banda autoral formada no interior de São Paulo e iniciada em 2008, atualmente composta por Kleber Cabrera (Voz), Thiago Braga (guitarra), Birão Spoldari (Baixo), Leo Sanches (guitarra) e Gustavo Panurge (bateria).';
        $this->data->keywords = 'bandas, bauru, sao paulo, brazil, brasil, metal, thrash, hardcore';
    }

}

/**
 * Model_Controller
 *
 * Classe específica para páginas que utilizam models
 * Esta class extende a classe MY_Controller
 *
 * @author Thiago Braga <thiago@sitesg.com.br>
 * @access private
 */
class Model_Controller extends MY_Controller {

    /**
     * Carrega o model da página solicitada
     *
     * Utiliza o método $this->router->fetch_class()
     * Para obter o classe que está fazendo a requisição
     *
     * @see $this->router->fetch_class()
     */
    function __construct() {
        parent::__construct();
        $this->load->model($this->class.'_model');
    }

}
