<?php

  $to = 'karl' . '@' . 'broholm' . '.' . 'dk';
  
  if (isset($_POST['mail'])) {
    $data = json_decode($_POST['mail']);
    processEmail($data);
  } else {
    echo '{"success":false}';
  }

  function processEmail($data) {
    global $to;
    $headers = 'From: ' . $data->name . ' <' . $data->email . '>' . "\r\n";
    $message = "Hi, Karl!\r\n $fromName just sent you an email through your website:\r\n\r\n" . $data->body;

    mail($to, $data->subject, $message, $headers);
    echo '{"success":true}';
  }



?>
