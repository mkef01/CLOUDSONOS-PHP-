<?php
    include './ruta.php';
 
// Prepare new cURL resource
$url = $url . '/login/clase';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLINFO_HEADER_OUT, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, 1);
 
// Set HTTP Header for POST request 
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json')
);
 
// Submit the POST request
$result = curl_exec($ch); 
// Close cURL session handle
curl_close($ch);

$algo = json_decode($result, true);
for ($i = 0; $i < 4; $i++){
    echo $algo[$i]["Usuario"];
}

?>