<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$config['protocol'] = 'smtp';
$config['smtp_host'] = 'ssl://smtp.googlemail.com';
$config['smtp_port'] = 465;
$config['smtp_user'] = 'user@gmail.com';
$config['smtp_pass'] = 'yourpassword';
$config['wordwrap'] = false;
$config['mailtype'] = 'html';
$config['charset'] = 'utf-8';
$config['newline'] = '\r';

/* End of file email.php */
/* Location: ./application/config/email.php */
