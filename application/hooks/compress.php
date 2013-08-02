<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Compress the HTML output.
 *
 * Compress HTML output replacing end of line
 * by a space, stripping whitespaces after and
 * before tags, except space and shorten multiple
 * whitespace sequences.
 *
 * @return [type] [description]
 */
function compress() {
  $CI =& get_instance();
  $buffer = $CI->output->get_output();

  $search = array('/\n/', '/\>[^\S ]+/s', '/[^\S ]+\</s', '/(\s)+/s');
  $replace = array(' ', '>', '<', '\\1');
  $buffer = preg_replace($search, $replace, $buffer);

  $CI->output->set_output($buffer);
  $CI->output->_display();
}

/* End of file compress.php */
/* Location: ./system/application/hooks/compress.php */