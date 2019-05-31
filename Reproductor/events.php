<?php
session_start();
//if ($_POST){
  $url = "http://localhost:56131/api/reproductor/eventos";
  $usu = $_SESSION['usuario'];

  //$url2 = $url . "/login/acceso";
  $data = array(
      'nombre' => $usu
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
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CloudSonos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/mediaelementplayer.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
    <link rel="stylesheet" href="Reproductor/css/style.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
    
  
  <div class="site-wrap">

    <div class="site-navbar mt-4">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
              <h1 class="mb-0"><a class="text-white h2 mb-0"><strong>CloudSonos<span class="text-primary">.</span></strong></a></h1>
            </div>
            <div class="col-4 col-md-4 col-lg-8">
              <nav class="site-navigation text-right text-md-right" role="navigation">

                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li>
                    <a href="index.php">Inicio</a>
                  </li>
                  <li class="active"><a href="events.php">Biblioteca</a></li>
                  <li><a href="about.php">Acerca de Nosotros</a></li>
                  <li><a href="contact.php">Contacto</a></li>
                </ul>
              </nav>
            </div>
           

          </div>
        </div>
      </div>
    </div>

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('images/hero_bg_3.jpg');" data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
            
            <h2 class="text-white h1">Biblioteca</h2>
            <p>Disfruta de las canciones que tu quieras en el momento que quieras.</p>
          </div>
        </div>
      </div>
    </div>
    
    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          
        <?php
   foreach($json as $obj) {
    echo "<div class='col-md-6 col-lg-4 mb-5' data-aos='fade-up' data-aos-delay='100'>"; 
    echo "<form action='Album.php' method='post'>";
    echo "<a href='#'><img src='$obj->banner' alt='Image' class='img-fluid' style='witdh:350px;height:350px'></a>";
    echo "<div class='p-4 bg-white'>";
    echo "<input class= 'btn btn-secondary' readonly name='album' value='$obj->album' type='submit'/><br>";
    echo "<input hidden readonly name='artista' value='$obj->banda'/>";
    echo "<p style='text-align:justify'>$obj->descripcion</p>";
    echo "</div>";
    echo "</form>";
    echo "</div>";
    
   }  
          ?> 
    
        </div>

      </div>

    </div>

    
    
    <div class="bg-primary" data-aos="fade">
      <div class="container">
        <div class="row">
          <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-facebook text-white"></span></a>
          <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-twitter text-white"></span></a>
          <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-instagram text-white"></span></a>
          <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-linkedin text-white"></span></a>
          <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-pinterest text-white"></span></a>
          <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-youtube text-white"></span></a>
        </div>
      </div>
    </div>

    <footer class="site-footer">
    <div class="bg-light" data-aos="fade">
      <div class="container">
        <br>
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="mb-5">
              <h3 class="footer-heading mb-4" style="color:darkgreen;">WATCH A BRAND NEW VIDEO</h3>

              <div class="block-16">
                <figure>
                  <img src="images/fallout.png" alt="Image placeholder" class="img-fluid rounded" style="witdh:350px;height:350px">
                  <a href="https://www.youtube.com/watch?v=C6MOKXm8x50" class="play-button popup-vimeo"><span class="icon-play"></span></a>
                </figure>
              </div>

            </div>
          </div>


          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="mb-5">
              <h3 class="footer-heading mb-4" style="color:darkgreen;">WATCH A BRAND NEW VIDEO</h3>

              <div class="block-16">
                <figure>
                  <img src="images/killer.jpg" alt="Image placeholder" class="img-fluid rounded">
                  <a href="https://www.youtube.com/watch?v=gGdGFtwCNBE" class="play-button popup-vimeo"><span class="icon-play"></span></a>
                </figure>
              </div>

            </div>
          </div>

          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="mb-5">
              <h3 class="footer-heading mb-4" style="color:darkgreen;">WATCH A BRAND NEW VIDEO</h3>
              <div class="block-16">
                <figure>
                  <img src="images/panic.jpg" alt="Image placeholder" class="img-fluid rounded" style="witdh:350px;height:350px">
                  <a href="https://www.youtube.com/watch?v=vc6vs-l5dkc" class="play-button popup-vimeo"><span class="icon-play"></span></a>
                </figure>
              </div>

            </div>
          </div>
        </div>

        
      </div>
    </div>
        <div class="row pt-5 mt-5 text-center" style="background-color:#000;">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            TODOS LOS DERECHOS RESERVADOS &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> PARA ESTE SITIO <i class="icon-heart text-danger" aria-hidden="true"></i> FOR <a href="https://colorlib.com" target="_blank" >PEACE AND LOVE</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/mediaelement-and-player.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/circleaudioplayer.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>