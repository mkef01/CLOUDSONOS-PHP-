<?php
if ($_POST){
  $url = "http://localhost:56131/api/reproductor/album";
  $al = $_POST['album'];
  $art = $_POST['artista'];

  //$url2 = $url . "/login/acceso";
  $data = array(
      'album' => $al,
      'artista' => $art
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

//---------------------------------------------------------------------------------------------------------
//Playlist
$url2 = "http://localhost:56131/api/reproductor/playlist";
$alb = $_POST['album'];
$arti = $_POST['artista'];

$data2 = array(
    'album' => $alb,
    'artista' => $arti
);
$payload2 = json_encode($data2);

// Prepare new cURL resource
$ch2 = curl_init($url2);
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
$playlist = json_decode($result2);
// Close cURL session handle
curl_close($ch2);

}
else{
  header('Location: index.php');
}

    //  echo "<pre>";
    //   print_r($json);
    //   echo "</pre>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/player.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $al ?> - CloudSonos</title>
</head>
<body>
  
  
<div class="background" style="background: url(<?php echo $json[0]->UrlBanda ?>) center/cover;"></div>
<section>
  <div class="album-info">
    <div class="album-art"><img src="<?php echo $json[0]->UrlAlbum ?>"/>
      <div class="actions">
        <button class="play" id="btnplay">Play</button>
        <button class="btn fas fa-heart" ></button>
        <div class="bookmark">
          <svg xmlns="http://www.w3.org/2000/svg" fill="#faa800" height="24" viewbox="0 0 24 24" width="24">
            <path d="M17 3H7c-1.1 0-1.99.9-1.99 2L5 21l7-3 7 3V5c0-1.1-.9-2-2-2zm0 15l-5-2.18L7 18V5h10v13z"></path>
            <path d="M0 0h24v24H0z" fill="none"></path>
          </svg>
        </div>
      </div>
    </div>
    <div class="album-details">
      <h2> <img src="<?php echo $json[0]->UrlBanda ?>"/> <?php echo $art ?></h2>
      <h1><?php echo $al ?></h1><?php echo $json[0]->Genero."</br>" ?> &copy; <?php echo $json[0]->Año." "; echo $json[0]->Discografia?>
      <p><?php echo $json[0]->Descripcion ?></p>
    </div>
  </div>
        <audio id="audio" preload="auto" tabindex="0" controls="" style="width:100%;">
          <source src="">
        </audio>
  <div class="album-tracks">
    <ol id="playlist">
    <?php
     foreach($playlist as $obj){
        echo "<li>";
        echo "<a href='$obj->URL'>$obj->Nombre</a><span> </span>";
        echo "</li>";    
      }
  ?>
    </ol>
  </div>
</section>
      
        </div>
      </div>
    </div>

  <script src="js/player.js"></script>
</body>
</html>
 