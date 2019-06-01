<?php
session_start();

if ($_SESSION['usuario'] == "") {
  header("Location: Logueo.php");
  exit;
}
?>

<?php
$url = "http://cloudsonos.azurewebsites.net/api/reproductor/index";

//$url2 = $url . "/login/acceso";

// Prepare new cURL resource
//$url = $url . '/login/acceso';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLINFO_HEADER_OUT, true);
curl_setopt($ch, CURLOPT_POST, true);

// Set HTTP Header for POST request 
curl_setopt(
  $ch,
  CURLOPT_HTTPHEADER,
  array(
    'Content-Type: application/json',
    'Content-Length: 0 '
  )
);

// Submit the POST request
$result = curl_exec($ch);
$json = json_decode($result);
// Close cURL session handle
curl_close($ch);
?>

<!-- API Artistas -->
<?php
$url2 = "http://cloudsonos.azurewebsites.net/api/reproductor/artistas";

//$url2 = $url . "/login/acceso";

// Prepare new cURL resource
//$url = $url . '/login/acceso';
$ch2 = curl_init($url2);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch2, CURLINFO_HEADER_OUT, true);
curl_setopt($ch2, CURLOPT_POST, true);

// Set HTTP Header for POST request 
curl_setopt(
  $ch2,
  CURLOPT_HTTPHEADER,
  array(
    'Content-Type: application/json',
    'Content-Length: 0 '
  )
);

// Submit the POST request
$result2 = curl_exec($ch2);
$json2 = json_decode($result2);
// Close cURL session handle
curl_close($ch2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>CloudSonos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- Sidebar-->
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="sidebar/css/bootstrap.min.css" />
  <!-- Google fonts - Roboto -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" /> -->
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="sidebar/css/style.default.css" />
  <!-- Custom stylesheet - for your changes-->
  <!-- <link rel="stylesheet" href="sidebar/css/custom.css"> -->
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/favicon.ico">

  <!-- Font Icons CSS-->
  <!-- <link rel="stylesheet" href="https://file.myfontastic.com/da58YPMQ7U5HY8Rb6UxkNf/icons.css" /> -->
  <!-- <link href="Content/Selectize/css/selectize.default.css" rel="stylesheet" /> -->
  <!-- <script src="https://www.google.com/recaptcha/api.js"></script> -->
  <script src="https://kit.fontawesome.com/73493b1cf5.js"></script>


  <!-- Font Awesome CDN-->
  <!-- you can replace it by local Font Awesome-->
  <!-- <script src="https://use.fontawesome.com/99347ac47f.js"></script>  -->

  <!--.Sidebar -->

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
  <link rel="stylesheet" href="sidebar/css/sidebar.css">
  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/sticky.css">

  




</head>

<body>


  <!--Sidebar-->
  <!-- Main Navbar-->
  <header class="header">
    <nav class="navbar">
      <div class="container-fluid">
        <div class="navbar-holder d-flex align-items-center justify-content-between">
          <!-- Navbar Header-->
          <div class="navbar-header" >
            <!-- Navbar Brand --><a href="index.php" class="navbar-brand">
              <div class="brand-text brand-big hidden-lg-down"><span>CloudSonos </span><strong>
                </strong></div>
              <!-- <div class="brand-text brand-small">CloudSonos</div> -->
            </a>
            <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
          </div>
          <!-- Navbar Menu -->
          <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center ">

            <!--   Logout    -->
            <a class="nav-item"> <i class="fa fa-sign-out"></i> </a>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  </div>
  <div class="page-content d-flex align-items-stretch">
    <!-- Side Navbar -->
    <nav class="side-navbar" id="sidebar">
      <!-- Sidebar Header-->
      <div class="sidebar-header d-flex align-items-center" style="padding-top: 0!important;">
        <div class="title">
          <h1 class="h4"></h1>
          <p></p>
        </div>
      </div>
      <!-- Sidebar Navidation Menus--><span class="heading">Menu Principal</span>
      <ul class="list-unstyled">
        <!-- Home -->
        <li class="active"> <a href="index.php" style="font-size:20px!important;"><i class="fas fa-home"></i>Inicio</a></li>
        <!--Biblioteca-->
        <li class="active"> <a href="events.php" style="font-size:20px!important;"><i class="fas fa-book"></i>Biblioteca</a></li>
        <!--Acerca-->
        <li class="active"> <a href="about.php" style="font-size:20px!important;"><i class="fas fa-user-alt"></i>Acerca de Nosotros</a></li>
        <!--Contactos-->
        <li class="active"> <a href="contact.php" style="font-size:20px!important;"><i class="fas fa-envelope"></i>Contactanos</a></li>
        <!--Cerrar Sesion-->
        <li class="active"> <a href="logout.php" style="font-size:20px!important;"><i class="fas fa-sign-out-alt"></i>Cerrar Sesión</a></li>
        <!-- <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p> -->
      </ul>

    </nav>

    <!--Sidebar-->


    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <!-- <div class="container"> -->
    <div class="container">
      <!-- <div class="col-md-12 col-lg-12"> -->
      <div class="site-blocks-cover overlay" style="background-image: url('images/headphones.jpeg');" data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
              <h1>Escucha &mdash; Buena musica para tus oidos</h1>
              <p class="mb-4"><span class="small">Las mejores canciones solo para ti</span></p>

              <div id="playerContainer"></div>

            </div>
          </div>
        </div>
      </div>

      <br><br><br><br><br>


      <div class="col-md-12">
        <div class='pb-5' style='margin-top: -100px;'>
          <div class='container-fluid'>
            <div class='row no-gutters'>
              <?php
              foreach ($json as $obj) {

                echo  "<div class='col-md-5 col-lg-4' data-aos='fade-up' data-aos-delay='100'>";
                echo    "<form action='Album.php' method='post'>";
                echo      "<div class= 'unit-9'>";
                echo      "<div class= 'image' style= 'background-image:url($obj->UrlCaratula);'>";
                echo      "</div>";
                echo        "<div class= 'unit-9-content'>";
                echo          "<input class= 'btn btn-secondary' readonly name='album' value='$obj->Album' type='submit'/><br>";
                echo          "<input class='btn disabled' style='background:black; color:white; 'name='artista' value='$obj->NombreArtista'><p class='badge badge-secondary'>$obj->Duracion</p>";
                echo        "</div>";
                echo      "</div>";
                echo    "</form>";
                echo   "</div>";
              }
              ?>
            </div>
          </div>
        </div>
      </div>
      <!--Imagenes-->


      <div class="site-blocks-cover overlay inner-page-cover subscribe" style="background-image: url(images/escarabajo.jpg);" data-aos="fade" data-stellar-background-ratio="0.5" style="witdh:600px;height:600px">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
              <h2>Amamos la musica tanto como tu</h2>
              <p class="mb-5">Descrube mas acerca de los artistas que estan trabajando con nosotros en las siguientes secciones del sitio.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="site-section">
        <div class="container" data-aos="fade-up">
          <div class="row">
            <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
              <h2 class="mb-5">Nuestros Artistas</h2>
              <p>Conoce algunos de los artirtas que trabajan con nosotros y disfruta de su mejor musica.</p>
            </div>
          </div>
          <div class="row">
            <?php
            foreach ($json2 as $obj2) {
              echo "<div class='col-md-6 col-lg-4 mb-5 mb-lg-5'>";
              echo "<div class='team-member'>";
              echo "<img src='$obj2->UrlArtista' alt='Image' class='img-fluid' style='witdh:250px;height:250px'>";
              echo "<div class='text'>";
              echo "<h2 class='mb-2 font-weight-light h4'>$obj2->NombreArtista</h2>";
              echo "<p class='mb-4'>$obj2->IntegrantesBanda</p>";
              echo  "<p>";
              echo  "<a href='#' class='text-white p-2'><span class='icon-facebook'></span></a>";
              echo  "<a href='#' class='text-white p-2'><span class='icon-twitter'></span></a>";
              echo  "<a href='#' class='text-white p-2'><span class='icon-linkedin'></span></a>";
              echo "</p>";
              echo  "</div>";
              echo "</div>";
              echo "</div>";
            }
            ?>
          </div>
        </div>
      </div>
      <div class="site-section bg-light">
        <div class="container">
          <div class="row">
            <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto" data-aos="fade-up">
              <h2 class="mb-5">Noticias &amp; Eventos</h2>
              <p>Descubre acerca de algunos de los mejores eventos en el mundo de la musica</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <a href="#"><img src="images/coachella.jpg" alt="Image" class="img-fluid" style="witdh:250px;height:250px"></a>
              <div class="p-4 bg-white">
                <span class="d-block text-secondary small text-uppercase">Ultimas dos semanas de abril</span>
                <h2 class="h5 text-black mb-3"><a href="https://live.coachella.com/">Coachella</a></h2>
                <p style="text-align:justify">El Festival de Música y Artes de Coachella Valley (en inglés Coachella Valley Music and Arts Festival, también conocido simplemente como Coachella Festival) es un gran festival de música que se desarrolla durante tres días en la última semana del mes de abril (dos días hasta la edición de 2007) y tiene lugar en Indio, California, Estados Unidos.</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <a href="#"><img src="images/land.jpg" alt="Image" class="img-fluid" style="witdh:250px;height:250px"></a>
              <div class="p-4 bg-white">
                <span class="d-block text-secondary small text-uppercase">Fechas variadas</span>
                <h2 class="h5 text-black mb-3"><a href="https://www.tomorrowland.com/global/">TomorrowLand</a></h2>
                <p style="text-align:justify">Tomorrowland es un festival de música electrónica de baile celebrado anualmente en la localidad de Boom (Bélgica). El festival es organizado por ID&T y se calcula que anualmente acuden más de 400.000 personas de casi 200 nacionalidades distintas.</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
              <a href="#"><img src="images/viña.jpg" alt="Image" class="img-fluid" style="witdh:250px;height:250px"></a>
              <div class="p-4 bg-white">
                <span class="d-block text-secondary small text-uppercase">Entre Febrero y Marzo</span>
                <h2 class="h5 text-black mb-3"><a href="http://www.festivaldevinachile.cl/">Viña del Mar</a></h2>
                <p style="text-align:justify"> El Festival Internacional de la Canción de Viña del Mar, o Festival de Viña, es un certamen musical organizado por el municipio de Viña del Mar, Región de Valparaíso, Chile. Se lleva a cabo cada año durante la última semana del mes de febrero en el Anfiteatro de la Quinta Vergara desde el 21 de febrero de 1960.​ Es, además, el festival de música más grande, importante y reconocido en el continente americano.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="bg-primary" data-aos="fade">
        <div class="container">
          <div class="row">
            <a href="https://www.facebook.com/" target="_blank" class="col-2 text-center py-4 social-icon d-block"><span class="icon-facebook text-white"></span></a>
            <a href="https://twitter.com/" target="_blank" class="col-2 text-center py-4 social-icon d-block"><span class="icon-twitter text-white"></span></a>
            <a href="https://www.instagram.com/" target="_blank" class="col-2 text-center py-4 social-icon d-block"><span class="icon-instagram text-white"></span></a>
            <a href="https://www.linkedin.com/" target="_blank" class="col-2 text-center py-4 social-icon d-block"><span class="icon-linkedin text-white"></span></a>
            <a href="https://www.pinterest.com/" target="_blank" class="col-2 text-center py-4 social-icon d-block"><span class="icon-pinterest text-white"></span></a>
            <a href="https://www.youtube.com/" target="_blank" class="col-2 text-center py-4 social-icon d-block"><span class="icon-youtube text-white"></span></a>
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
                  <h3 class="footer-heading mb-4" style="color:darkgreen;">DISFRUTA DE UN NUEVO VIDEO</h3>

                  <div class="block-16">
                    <figure>
                      <img src="images/dance.png" alt="Image placeholder" class="img-fluid rounded" style="witdh:350px;height:350px">
                      <a href="https://www.youtube.com/watch?v=0XFudmaObLI" class="play-button popup-vimeo"><span class="icon-play"></span></a>
                    </figure>
                  </div>

                </div>
              </div>


              <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="mb-5">
                  <h3 class="footer-heading mb-4" style="color:darkgreen;">DISFRUTA DE UN NUEVO VIDEO</h3>

                  <div class="block-16">
                    <figure>
                      <img src="images/pray.jpg" alt="Image placeholder" class="img-fluid rounded">
                      <a href="https://www.youtube.com/watch?v=fiore9Z5iUg" class="play-button popup-vimeo"><span class="icon-play"></span></a>
                    </figure>
                  </div>

                </div>
              </div>

              <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="mb-5">
                  <h3 class="footer-heading mb-4" style="color:darkgreen;">DISFRUTA DE UN NUEVO VIDEO</h3>
                  <div class="block-16">
                    <figure>
                      <img src="images/talk.jpg" alt="Image placeholder" class="img-fluid rounded" style="witdh:350px;height:350px">
                      <a href="https://www.youtube.com/watch?v=hE2Ira-Cwxo" class="play-button popup-vimeo"><span class="icon-play"></span></a>
                    </figure>
                  </div>

                </div>
              </div>
            </div>


          </div>
          <div class="row pt-5 mt-5 text-center" style="background-color:#000;width:100%!important;overflow:hidden;">
            <div class="col-lg-12">
              <p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                TODOS LOS DERECHOS RESERVADOS &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                <script>
                  document.write(new Date().getFullYear());
                </script> PARA ESTE SITIO <i class="icon-heart text-danger" aria-hidden="true"></i> FOR <a href="https://colorlib.com" target="_blank">PEACE AND LOVE</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>

          </div>
        </div>


        <!-- </div> -->

      </footer>

    </div>


  </div>





  <!-- </div> -->

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


  <!--Sidebar-->
  <!-- Javascript files-->
  <!-- Javascript files-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script type="text/javascript" src="Content/Selectize/js/standalone/selectize.min.js"></script>
  <script src="sidebar/js/tether.min.js"></script>
  <script src="sidebar/js/bootstrap.min.js"></script>
  <script src="sidebar/js/jquery.cookie.js"> </script>
  <script src="sidebar/js/jquery.validate.min.js"></script>
  <script src="sidebar/js/front.js"></script>
  <script src="js/sidebar.js"></script>

</body>

</html>