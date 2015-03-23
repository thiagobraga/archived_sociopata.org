<?php

/**
 * Deploy.php
 *
 * Classes, métodos e propriedades do controller user.
 * A classe Home estende a classe Sociopata.
 * Funções utilizadas para login com Facebook.
 *
 * PHP version 5
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category  Geoprocessamento de dados
 * @package   Barpedia
 * @author    Matheus Cesario <matheus@institutosoma.org.br>
 * @author    Thiago Braga <thiago@institutosoma.org.br>
 * @copyright 1997-2005 The PHP Group
 * @license   http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version   GIT: $Id$
 * @link      http://beta.institutosoma.org.br
 * @since     File available since Release 0.0.0
 */

defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Deploy
 *
 * @category  Geoprocessamento de dados
 * @package   Barpedia
 * @author    Matheus Santos <matheus@institutosoma.org.br>
 * @license   http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link      http://beta.institutosoma.org.br
 * @access    public
 */
class Deploy extends Sociopata
{

    /**
     * Sigla do estado padrão
     *
     * @var string
     */
    public $estado = 'sp';

    /**
     * Nome amigável da cidade padrão
     *
     * @var string
     */
    public $cidade = 'bauru';

    /**
     * Redireciona para o perfil
     *
     * Ao carregar o método principal da classe,
     * redireciona para o perfil do usuário.
     *
     * @return {void}
     */
    public function index()
    {
        if ($this->session->userdata('ainc_id_usuario') != null) {
            $this->data->estado = $this->estado;
            $this->data->cidade = $this->cidade;

            $this->setTitle('Barpedia | Deploy');
            $this->loadJs(array('js/modules/deploy/deploy'));

            $this->data->content = 'deploy/deploy';
            $this->parser->parse('template', $this->data);
        } else {
            redirect(base_url());
        }
    }

    /**
     * [ajax_updateDatabase description]
     *
     * @return [type]
     */
    public function ajax_updateDatabase() {
        $environment = $this->input->post('environment');
        $aux_output = array();
        $return = 0;

        $files = array(
            '/var/www/barpedia/database/schema.sql',
            '/var/www/barpedia/database/paises.sql',
            '/var/www/barpedia/database/estados.sql',
            '/var/www/barpedia/database/cidades.sql',
            '/var/www/barpedia/database/core.sql',
            '/var/www/barpedia/database/triggers.sql',
            '/var/www/barpedia/database/data.sql'
        );

        foreach ($files as $file) {
            if ($return === 0) {
                exec('mysql -uroot -p"am0s r3c4d" -e "source '. $file . '" -v -v -v --default-character-set=utf8', $output, $return);
                $result = array_merge($aux_output, $output);
            }
        }

        $this->response->output = $result;
        $this->response->return = $return;

        echo json_encode($this->response);
    }

}

/* End of file deploy.php */
/* Location: ./application/controllers/deploy.php */
