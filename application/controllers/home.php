<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home
 * @author Thiago Braga <thiago@sociopata.org>
 * @access public
 * @version 1.0
 */
class Home extends Model_Controller
{

    /**
     * Carrega a página inicial do site
     * @since 1.0
     */
    public function index()
    {
        $this->data->page = 'Home';
        $this->data->content = 'home/home';
        $now = date('Y-m-d H:m:s');

        $this->setTitle('Sociopata | ' . $this->data->page);
        $this->setDescription('Confira as principais notícias e eventos.');

        $this->data->eventos = $this->home_model->select_proximos_eventos($now);
        $this->data->noticias = $this->home_model->select_noticias();
        //$this->data->videos = $this->getVideos();
        $this->load->view('template', $this->data);
    }

    /**
     * [getVideos description]
     *
     * @return [type]
     */
    public function getVideos()
    {
        // Call set_include_path() as needed to point to your client library.
        require_once APPPATH . 'libraries/google-api/Client.php';
        require_once APPPATH . 'libraries/google-api/Service/YouTube.php';
        session_start();

        /*
         * You can acquire an OAuth 2.0 client ID and client secret from the
         * Google Developers Console <https://console.developers.google.com/>
         * For more information about using OAuth 2.0 to access Google APIs, please see:
         * <https://developers.google.com/youtube/v3/guides/authentication>
         * Please ensure that you have enabled the YouTube Data API for your project.
         */
        $OAUTH2_CLIENT_ID = '737822822967-6c5i6kecnlbqoe6ulrca6ks1esj5ulql.apps.googleusercontent.com';
        $OAUTH2_CLIENT_SECRET = '6BoVkLeQ1q7YAM8qEeKQAGJk';

        $client = new Google_Client();
        $client->setClientId($OAUTH2_CLIENT_ID);
        $client->setClientSecret($OAUTH2_CLIENT_SECRET);
        $client->setScopes('https://www.googleapis.com/auth/youtube');
        $redirect = filter_var('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'],
          FILTER_SANITIZE_URL);
        $client->setRedirectUri($redirect);

        // Define an object that will be used to make all API requests.
        $youtube = new Google_Service_YouTube($client);

        if (isset($_GET['code'])) {
          if (strval($_SESSION['state']) !== strval($_GET['state'])) {
            die('The session state did not match.');
          }

          $client->authenticate($_GET['code']);
          $_SESSION['token'] = $client->getAccessToken();
          header('Location: ' . $redirect);
        }

        if (isset($_SESSION['token'])) {
          $client->setAccessToken($_SESSION['token']);
        }

        // Check to ensure that the access token was successfully acquired.
        if ($client->getAccessToken()) {
          try {
            // Call the channels.list method to retrieve information about the
            // currently authenticated user's channel.
            $channelsResponse = $youtube->channels->listChannels('contentDetails', array(
              'mine' => 'true',
            ));

            $html = '';
            foreach ($channelsResponse['items'] as $channel) {
              // Extract the unique playlist ID that identifies the list of videos
              // uploaded to the channel, and then call the playlistItems.list method
              // to retrieve that list.
              $uploadsListId = $channel['contentDetails']['relatedPlaylists']['uploads'];

              $playlistItemsResponse = $youtube->playlistItems->listPlaylistItems('snippet', array(
                'playlistId' => $uploadsListId,
                'maxResults' => 50
              ));

              $html .= "<h3>Videos in list $uploadsListId</h3><ul>";
              foreach ($playlistItemsResponse['items'] as $playlistItem) {
                $html .= sprintf('<li>%s (%s)</li>', $playlistItem['snippet']['title'],
                  $playlistItem['snippet']['resourceId']['videoId']);
              }
              $html .= '</ul>';
            }
          } catch (Google_ServiceException $e) {
            $html .= sprintf('<p>A service error occurred: <code>%s</code></p>',
              htmlspecialchars($e->getMessage()));
          } catch (Google_Exception $e) {
            $html .= sprintf('<p>An client error occurred: <code>%s</code></p>',
              htmlspecialchars($e->getMessage()));
          }

          $_SESSION['token'] = $client->getAccessToken();
        } else {
          $state = mt_rand();
          $client->setState($state);
          $_SESSION['state'] = $state;

          $authUrl = $client->createAuthUrl();
          $html = '<h3>Authorization Required</h3><p>You need to <a href="$authUrl">authorize access</a> before proceeding.<p>';
        }

        return $html;
    }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
