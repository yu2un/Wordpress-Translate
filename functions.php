<?php

add_filter('gettext', 'translate_strings');
add_filter('ngettext', 'translate_strings');

function translate_strings($translated) {  
  $translated = str_ireplace('Some Text', 'Change Text', $translated);
  $translated = str_ireplace('Some Text', 'Change Text', $translated);
  return $translated;
}

?>
