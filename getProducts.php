<?php

$curl = curl_init();


//Add your sellix key here
$key = "GS1n5IAhWMb2gwxhIvKDlDIv5AqjkqDZZi1idzn195E5Nq4wwHqj9QtIKgHJrkOW";

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://dev.sellix.io/v1/categories',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',

  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer ' . $key,
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
?>