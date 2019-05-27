<?php
  $album = $_GET['album'];
  
// Get cURL resource
$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://localhost:56131/api/reproductor/bookmark?album=$album',
    CURLOPT_USERAGENT => 'cURL Request'
]);
// Send the request & save response to $resp
$resp = curl_exec($curl);
// Close request to clear up some resources
curl_close($curl);

if($resp == 'true'){
	echo "<script>alert('Guardado a Favoritos')</script>";
	header("location: Album.php");
}else{
	echo "<script>alert('Error no se pudoguardar el album')</script>";
	header("location: Album.php");
	}
?>
