<?php
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







  //if($_POST){
    // $album = $_POST["album"];
    // $artista = $_POST["artista"];
    // $curl = curl_init();
    // curl_setopt_array($curl, [
    //    CURLOPT_RETURNTRANSFER => 1,
    //    CURLOPT_URL => "http://localhost:56131/api/reproductor/album"
    // ]);
    // $resp = curl_exec($curl);
    // curl_close($curl);
    //  $json = json_decode($resp);
    
    //   //$data = json_decode(file_get_contents("http://localhost:56131/api/reproductor/album",true));
    // //  $curl2 = curl_init();
    // //  curl_setopt_array($curl2, [
    // //     CURLOPT_RETURNTRANSFER => 1,
    // //     CURLOPT_URL => "http://localhost:56131/api/reproductor/playlist?album=$album&artista=$artista"
    // //  ]);
    // //  $resp2 = curl_exec($curl2);
    // //  curl_close($curl2);
    // //   $playlist = json_decode($resp2);
    // //  echo $json[0]->nombre;
    //  echo "<pre>";
    //   print_r($json);
    //   echo "</pre>";
  //https://cdn.klove.com/images/music/artists/bios/SkilletUnleashed.KLArtist.jpg
  //https://target.scene7.com/is/image/Target/51223401?wid=520&amp;hei=520&amp;fmt=pjpeg
  //https://68.media.tumblr.com/avatar_edbd71e8c8ac_128.png
  //Unleashed is the tenth album by American Christian rock band Skillet, released on August 5, 2016. The album was announced on May 20, 2016, and a lyric video was released for the track "Feel Invincible" at the same time on the band"s YouTube channel. Six days later, the band released a lyric video for the track "Stars" on their YouTube channel.
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/player.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CloudSonos - <?php echo $al ?></title>
</head>
<body>
  
  
<div class="background" style="background: url(<?php echo $json[0]->UrlBanda ?>) center/cover;"></div>
<section>
  <div class="album-info">
    <div class="album-art"><img src="<?php echo $json[0]->UrlAlbum ?>"/>
      <div class="actions">
        <div class="play">Play</div>
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
      <h1><?php echo $al ?></h1><span> <span><?php echo $json[0]->Genero ?> </span><span>&copy; <?php echo $json[0]->Año; echo $json[0]->Discografia?> </span></span>
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
        echo "<a href='$obj->URL'>$obj->Nombre</a><span>1:00</span>";
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
 