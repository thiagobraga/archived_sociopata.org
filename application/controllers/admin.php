<?php

defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Admin
 * @author Thiago Braga <thiago@sociopata.org>
 * @access public
 * @version 1.0
 */
class Admin extends Sociopata
{

    /**
     * Carrega a página inicial do site
     * @since 1.0
     */
    public function index()
    {
        $this->data->page = 'admin';
        $this->data->content = 'admin/admin';

        $this->setTitle('Sociopata | ' . $this->data->page);
        $this->setDescription('Confira as principais notícias e eventos.');

        if ($this->session->userdata('logged_in')) {
            $this->data->eventos = Eventos_model::select_eventos();
        }

        $this->load->view('admin/template', $this->data);
    }

    /**
     * [login description]
     *
     * @return  [type]
     */
    public function login()
    {
        $admins = $this->config->item('fb_admins');
        $user   = $this->facebook->getUser();

        if ($user) {
            $is_admin = array_search($user, $admins) !== false;

            if ($is_admin) {
                // The fields to get from Facebook
                $fields = array(
                    'hometown',
                    'id',
                    'name',
                    'first_name',
                    'last_name',
                    'username',
                    'email',
                    'gender',
                    'birthday',
                    'locale',
                    'location',
                    'work'
                );

                // Getting data
                $profile = (object) $this->facebook->api(
                    '/me',
                    array('fields' => $fields)
                );

                $this->session->set_userdata(array(
                    'id'        => $profile->id,
                    'name'      => $profile->name,
                    'email'     => $profile->email,
                    'logged_in' => true
                ));
            }
        }

        redirect('admin');
    }

    /**
     * [logout description]
     *
     * @return  [type]
     */
    public function logout()
    {
        $this->facebook->destroySession();
        $this->session->sess_destroy();

        redirect();
    }

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */
