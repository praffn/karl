<?php 

  $x = 'phillip' . '@' . 'praffn' . '.' . 'dk';

  $headers = 'From: My Name <myname@mydomain.com>' . "\r\n\\";
  mail($x, 'The subject', 'The message',  $headers);

?>
