<?php 

  $x = 'phillip' . '@' . 'praffn' . '.' . 'dk';

  $headers = 'Karl Broholm <karl@broholm.dk>' . "\r\n\\";

  $message = 'xNAMEx has sent you a message:\n\nSubject:\n' . 'xSUBJECT' . '\n\nMessage:\n' . 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, architecto.';

  mail($x, 'Hej Med dig', $message,  $headers);

?>
