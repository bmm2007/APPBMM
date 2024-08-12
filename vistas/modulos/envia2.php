<?php


  $datos = array(
    'messaging_product' => 'whatsapp',
    'recipient_type' => 'individual',
    'to' => '51976760825',
    'type' => 'text',
    'text' => array(
        'preview_url' => false,
        'body' => 'Hola cómo estásssssssssssssssss'
    )
  );

  $envio = json_encode($datos, JSON_UNESCAPED_UNICODE);
$token =  'EAAlaWIulMusBAGXonScVX8lGZCJ5M3v4dXFnFGBzZC9bEfJC9ojHvH2sfQbZA7rZBU0NPhTi0TI39ZBTqwproXM8TFK9PTt29vHk43tOveucK2VOR9yylWuAZBJ8KXFJxBSFg7r2UvshNyZCgNwBqdGLcfZAS81AaLYNpQsN7GFV0ZAZBtdtZAm9pay99o3YB3qrnWSrQyTH75zFwZDZD';
      
$curl = curl_init();
curl_setopt_array($curl, array(
   CURLOPT_URL => 'https://graph.facebook.com/v15.0/108119315488021/messages',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_POST => true,
  CURLOPT_POSTFIELDS  => $envio,
  CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',  
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer ' . $token,
    'Content-Type: application/json'
  ),
  // CURLOPT_CAINFO => dirname(__FILE__)."/../api/cacert.pem" //Comentar si sube a un hosting 
     //para ejecutar los procesos de forma local en windows
    //enlace de descarga del cacert.pem https://curl.haxx.se/docs/caextract.html

));

 $response = curl_exec($curl);

curl_close($curl);

$empresa = json_decode($response);
var_dump($empresa);

?>
