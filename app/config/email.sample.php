<?php

defined('BASEPATH') || exit('No direct script access allowed');

$config['protocol']  = 'smtp';
$config['charset']   = 'utf-8';
$config['smtp_host'] = 'ssl://smtp.gmail.com';
$config['smtp_user'] = 'user@email.com';
$config['smtp_pass'] = 'your_password';
$config['smtp_port'] = 465;
$config['wordwrap']  = false;
$config['mailtype']  = 'html';
$config['newline']   = "\r\n";

/* End of file email.php */
/* Location: ./app/config/email.php */
