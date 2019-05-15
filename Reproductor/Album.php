<?php
  //if($_POST){
    $album = $_POST["album"];
    $artista = $_POST["artista"];
    $curl = curl_init();
    curl_setopt_array($curl, [
       CURLOPT_RETURNTRANSFER => 1,
       CURLOPT_URL => "http://localhost:56131/api/reproductor/album?album=$album&artista=$artista"
    ]);
    $resp = curl_exec($curl);
    curl_close($curl);
     $json = json_decode($resp);
    
     //echo $json[0]->nombre;
 // }
  //else{
    //header("Location: index.php");
  //}
 // <ul id="playlist">
  //<?php
    //  foreach($json as $obj){
      //    echo "<li>";
        //  echo "<a href='$obj->url'>";
          //    echo $obj->nombre;
          //echo "</a>";    
      //}
  //? >
  // </ul>  
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
  <title>CloudSonos - <?php echo $json[0]->nombre_album ?></title>
</head>
<body>
  
  
<div class="background" style="background: url(<?php echo $json[0]->band_image ?>) center/cover;"></div>
<section>
  <div class="album-info">
    <div class="album-art"><img src="<?php echo $json[0]->album_cover ?>"/>
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
      <h2> <img src="<?php echo $json[0]->band_image ?>"/> Skillet</h2>
      <h1><?php echo $json[0]->nombre_album ?></h1><span> <span><?php echo $json[0]->album_genero ?> </span><span>&copy; <?php echo $json[0]->nombre_year; echo $json[0]->discografica?> </span></span>
      <p><?php echo $json[0]->album_description ?></p>
    </div>
  </div>
        <audio id="audio" preload="auto" tabindex="0" controls="" style="width:100%;">
          <source src="https://s3-us-west-2.amazonaws.com/allmetalmixtapes/Saxon%20-%201984%20-%20Crusader/01%20-%20Crusader%20Prelude.mp3">
        </audio>
  <div class="album-tracks">
    <ol id="playlist">
      <li> <a href="https://s3-us-west-2.amazonaws.com/allmetalmixtapes/Saxon%20-%201984%20-%20Crusader/01%20-%20Crusader%20Prelude.mp3">Feel Invincible</a><span>3:49</span></li>
      <li> <a href="#">Back From The Dead</a><span>3:33		</span></li>
      <li> <a href="https://s3-us-west-2.amazonaws.com/allmetalmixtapes/Saxon%20-%201984%20-%20Crusader/01%20-%20Crusader%20Prelude.mp3">Stars</a><span>3:47</span></li>
      <li> <a href="https://s3-us-west-2.amazonaws.com/allmetalmixtapes/Saxon%20-%201984%20-%20Crusader/01%20-%20Crusader%20Prelude.mp3">I Want To Live</a><span>3:28</span></li>
      <li> <a href="https://s3-us-west-2.amazonaws.com/allmetalmixtapes/Saxon%20-%201984%20-%20Crusader/01%20-%20Crusader%20Prelude.mp3">Undefeated</a><span>3:35</span></li>
      <li> <a href="https://s3-us-west-2.amazonaws.com/allmetalmixtapes/Saxon%20-%201984%20-%20Crusader/01%20-%20Crusader%20Prelude.mp3">Famous</a><span>3:18</span></li>
      <li> <a href="https://s3-us-west-2.amazonaws.com/allmetalmixtapes/Saxon%20-%201984%20-%20Crusader/01%20-%20Crusader%20Prelude.mp3">Lions</a><span>3:24</span></li>
      <li> <a href="https://s3-us-west-2.amazonaws.com/allmetalmixtapes/Saxon%20-%201984%20-%20Crusader/01%20-%20Crusader%20Prelude.mp3">Out Of Hell</a><span>3:34</span></li>
      <li> <a href="https://s3-us-west-2.amazonaws.com/allmetalmixtapes/Saxon%20-%201984%20-%20Crusader/01%20-%20Crusader%20Prelude.mp3">Burn It Down</a><span>3:16</span></li>
      <li> <a href="https://s3-us-west-2.amazonaws.com/allmetalmixtapes/Saxon%20-%201984%20-%20Crusader/01%20-%20Crusader%20Prelude.mp3">Watching For Comets</a><span>3:29</span></li>
      <li> <a href="https://s3-us-west-2.amazonaws.com/allmetalmixtapes/Saxon%20-%201984%20-%20Crusader/01%20-%20Crusader%20Prelude.mp3">Saviors Of The World</a><span>3:46</span></li>
      <li> <a href="https://s3-us-west-2.amazonaws.com/allmetalmixtapes/Saxon%20-%201984%20-%20Crusader/01%20-%20Crusader%20Prelude.mp3">The Resistance</a><span>3:52</span></li>
    </ol>
  </div>
</section>
      
        </div>
      </div>
    </div>

  <script src="js/player.js"></script>
</body>
</html>
 