<?php
session_start();
  $album = $_REQUEST['alb'];
  $usu = $_SESSION['usuario'];
   $url = "http://localhost:56131/api/reproductor/bookmark";


  $data2 = array(
    'album' => $album,
    'usuario' => $usu
);
$payload2 = json_encode($data2);

// Prepare new cURL resource
$ch2 = curl_init($url);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch2, CURLINFO_HEADER_OUT, true);
curl_setopt($ch2, CURLOPT_POST, true);
curl_setopt($ch2, CURLOPT_POSTFIELDS, $payload2);

// Set HTTP Header for POST request 
curl_setopt($ch2, CURLOPT_HTTPHEADER, array(
'Content-Type: application/json',
'Content-Length: ' . strlen($payload2))
);

// Submit the POST request
$result2 = curl_exec($ch2);
//$playlist = json_decode($result2);
// Close cURL session handle
curl_close($ch2);

if($result2 == 'true'){
	echo "<script>alert('Guardado a Favoritos')</script>";
	header("location: Album.php?param=true");
}else{
	echo "<script>alert('Error no se pudoguardar el album')</script>";
	header("location: Album.php?param=false");
	}

?>
