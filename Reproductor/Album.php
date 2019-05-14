<?php
  //if($_POST){
    $album = $_POST["album"];
    $artista = $_POST["artista"];
    $curl = curl_init();
    curl_setopt_array($curl, [
       CURLOPT_RETURNTRANSFER => 1,
       CURLOPT_URL => "http://localhost:56131/api/login/canciones?playlist=aloha&ID=1"
    ]);
    $resp = curl_exec($curl);
    curl_close($curl);
     $json = json_decode($resp);
 // }
  //else{
    //header('Location: index.php');
  //}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/player.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Album</title>
</head>
<body>
  
  
<div class="background" style="background: url(https://cdn.klove.com/images/music/artists/bios/SkilletUnleashed.KLArtist.jpg) center/cover;"></div>
<section>
  <div class="album-info">
    <div class="album-art"><img src="https://target.scene7.com/is/image/Target/51223401?wid=520&amp;hei=520&amp;fmt=pjpeg"/>
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
      <h2> <img src="https://68.media.tumblr.com/avatar_edbd71e8c8ac_128.png"/> Skillet</h2>
      <h1>Unleashed</h1><span> <span>Hard Rock </span><span>&copy; 2016 Atlantic Recording Corporation</span></span>
      <p>Unleashed is the tenth album by American Christian rock band Skillet, released on August 5, 2016. The album was announced on May 20, 2016, and a lyric video was released for the track "Feel Invincible" at the same time on the band's YouTube channel. Six days later, the band released a lyric video for the track "Stars" on their YouTube channel.</p>
    </div>
  </div>
        <audio id="audio" preload="auto" tabindex="0" controls="" style="width:100%;">
          <source src="https://s3-us-west-2.amazonaws.com/allmetalmixtapes/Saxon%20-%201984%20-%20Crusader/01%20-%20Crusader%20Prelude.mp3">
        </audio>
  <div class="album-tracks">
    <ol>
      <li> <span>Feel Invincible</span><span>3:49</span></li>
      <li> <span>Back From The Dead</span><span>3:33		</span></li>
      <li> <span>Stars</span><span>3:47</span></li>
      <li> <span>I Want To Live</span><span>3:28</span></li>
      <li> <span>Undefeated</span><span>3:35</span></li>
      <li> <span>Famous</span><span>3:18</span></li>
      <li> <span>Lions</span><span>3:24</span></li>
      <li> <span>Out Of Hell</span><span>3:34</span></li>
      <li> <span>Burn It Down</span><span>3:16</span></li>
      <li> <span>Watching For Comets</span><span>3:29</span></li>
      <li> <span>Saviors Of The World</span><span>3:46</span></li>
      <li> <span>The Resistance</span><span>3:52</span></li>
    </ol>
  </div>
</section>


        <ul id="playlist">
        <?php
            foreach($json as $obj){
                echo '<li>';
                echo '<a href="'.$obj->url.'">';
                    echo $obj->nombre;
                echo '</a>';    
            }
         ?>
         </ul>        
        </div>
      </div>
    </div>

  <script src="js/player.js"></script>
</body>
</html>
   