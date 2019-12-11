<?php

$protocol = "ssl";
$host = "www.cmsws.com";
$port = 443;
$path = "/examples/php/classes.php"; # this should POST to my index.php page.
$timeout = 20;

$socket = pfsockopen($protocol . "://" . $host, $port,
                    $errno, $errstr, $timeout);


if (!$socket) {
   echo "$errstr ($errno)<br/>\n";
   echo $socket;
} else {


   $content = "{'action': 'sendmessage', 'data': 'test'}";
   $body = "POST $path HTTP/1.1\r\n";
   $body .= "Host: $host\r\n";
   $body .= "Content-Type: application/x-www-form-urlencoded\r\n";
   $body .= "Content-Length: " . strlen($content) . "\r\n";
   $body .= "Connection: Close\r\n";
   $body .= "\r\n".$content;
   $body .= "\r\n";

   echo "****************** Sent Headers *****************\n\n", $body, "\n\n";

   fwrite($socket, "POST $path  HTTP/1.1\r\n");
   fwrite($socket, $body);

   echo "****************** Recieved Headers *****************\n\n";

   while (!feof($socket)) {
      echo fgets($socket, 128);
   }

   fclose($socket);
} 
