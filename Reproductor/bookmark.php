<?php
session_start();
  $album = $_POST['alb'];
  $usu = $_SESSION['usuario'];
// Get cURL resource
$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => "http://localhost:56131/api/reproductor/bookmark?album=$album&usuario=$usu"
]);
// Send the request & save response to $resp
$resp = curl_exec($curl);
// Close request to clear up some resources
curl_close($curl);

if($resp == 'true'){
	//echo "<script>alert('Guardado a Favoritos')</script>";
	header("location: Album.php?param=true");
}else{
	//echo "<script>alert('Error no se pudoguardar el album')</script>";
	header("location: Album.php?param=false");
	}

?>
