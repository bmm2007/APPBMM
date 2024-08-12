<?php
$my_verify_token = 'codigo123';

$mode = $_REQUEST['hub_mode'];
$challenge = $_REQUEST['hub_challenge'];
$verify_token = $_REQUEST['hub_verify_token'];

if ($my_verify_token === $verify_token) {
  echo $challenge;
  exit;
}

$access_token = 'codigo123';

$response = file_get_contents("https://cbea-181-64-11-237.ngrok.io/wwebhook", CURLOPT_SSL_FALSESTART);

//creo un archivo .txt para corroborar que el token sea valido. con la respuesta
file_put_contents("text.txt", $response);

$response = json_decode($response, true);


var_dump($response);
