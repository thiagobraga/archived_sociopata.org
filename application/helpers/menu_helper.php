<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * @param type $controller
 * @return type
 */
function active_link($controller)
{
  $CI = & get_instance();
  $class = $CI->router->fetch_class();

  return ($class == $controller) ? 'active' : '';
}