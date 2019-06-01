<?php
if( isset($_POST["Nombre"]) && isset($_POST["Correo"]) && isset($_POST["mensaje"]) ) {

$name = $_POST["Nombre"];
$courrier= $_POST["Correo"];
$message= $_POST["mensaje"];
    
$url = "http://cloudsonos.azurewebsites.net/api/reproductor/correo";

  //$url2 = $url . "/login/acceso";
  $data = array(
      'destinatario' => $courrier, 'usuario' => $name, 'mensaje' => $message
      
  );
  $payload = json_encode($data);

// Prepare new cURL resource
//$url = $url . '/login/acceso';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLINFO_HEADER_OUT, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

// Set HTTP Header for POST request 
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Content-Type: application/json',
'Content-Length: ' . strlen($payload))
);

// Submit the POST request
$result = curl_exec($ch);
$json = json_decode($result);
// Close cURL session handle
curl_close($ch);
$param=$result;
header("location: contact.php?param=$param");
}
?>
