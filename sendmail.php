<?php 

  $headers = 'From: Karl Broholm <' . 'karl@broholm.com' . '>' . "\r\n\\";
  mail('phillip@praffn.dk', 'The subject', 'The message',  $headers);

?>
