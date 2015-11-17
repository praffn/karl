<?php 

  $from = 'karl@broholm.com';
  $to = 'phillip@praffn.dk';
  $subject = 'Hello There';
  $message = 'What are you doing?';

  $headers = 'Karl Broholm <' . $from .'>' . "\r\n\\";

  mail($to, $subject, $message,  $headers);

?>
