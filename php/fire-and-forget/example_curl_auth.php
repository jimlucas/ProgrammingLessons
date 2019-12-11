<?php
$proto     = 'http';
$host      = 'username:password@FQDN';
$path      = '/path/to/file';

$post_data_array = array(
 'action'  => 'sendmessage',
 'data'    => 'test',
);

$payload = json_encode($post_data_array);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $proto.'://'.$host.$path);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($payload),
    'Connection: Keep-Alive',
    'Keep-Alive: 300',
  )
);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

echo curl_exec($ch);

curl_close($ch);
