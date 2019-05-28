<?php
session_start();

// if ($_SESSION['usuario'] == "") {
//     header("Location: Logueo.php");
//     exit;
// }
?>

<?php
  $url = "http://localhost:56131/api/reproductor/index";
  
  //$url2 = $url . "/login/acceso";
 
// Prepare new cURL resource
//$url = $url . '/login/acceso';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLINFO_HEADER_OUT, true);
curl_setopt($ch, CURLOPT_POST, true);

// Set HTTP Header for POST request 
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Content-Type: application/json',
'Content-Length: 0 ')
);

// Submit the POST request
$result = curl_exec($ch);
$json = json_decode($result);
// Close cURL session handle
curl_close($ch);
?>

<!-- API Artistas --> 
<?php
  $url2 = "http://localhost:56131/api/reproductor/artistas";
  
  //$url2 = $url . "/login/acceso";
 
// Prepare new cURL resource
//$url = $url . '/login/acceso';
$ch2 = curl_init($url2);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch2, CURLINFO_HEADER_OUT, true);
curl_setopt($ch2, CURLOPT_POST, true);

// Set HTTP Header for POST request 
curl_setopt($ch2, CURLOPT_HTTPHEADER, array(
'Content-Type: application/json',
'Content-Length: 0 ')
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
    
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
    
  
  <div class="site-wrap">

    <div class="site-navbar mt-4">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
              <h1 class="mb-0"><a href="index.html" class="text-white h2 mb-0"><strong>RADIOS<span class="text-primary">.</span></strong></a></h1>
            </div>
            <div class="col-4 col-md-4 col-lg-8">
              <nav class="site-navigation text-right text-md-right" role="navigation">

                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li class="active">
                    <a href="index.php">Home</a>
                  </li>
                  <li class="has-children">
                    <a href="#">Trending</a>
                    <ul class="dropdown arrow-top">
                      <li><a href="#">Top 20 of The Week</a></li>
                      <li><a href="#">Featured Artist</a></li>
                      <li><a href="#">Interviews</a></li>
                      <li class="has-children">
                        <a href="#">Sub Menu</a>
                        <ul class="dropdown">
                          <li><a href="#">Menu One</a></li>
                          <li><a href="#">Menu Two</a></li>
                          <li><a href="#">Menu Three</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="events.php">Events</a></li>
                  <li><a href="about.php">About</a></li>
                  <li><a href="contact.php">Contact</a></li>
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
    
    <div class="site-blocks-cover overlay" style="background-image: url('images/headphones.jpeg');" data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
            <h1>Listen &mdash; Random Songs for your soul</h1>
            <p class="mb-4"><span class="small">ONLY GOOD VIBES FOR YOU</span></p>

            <div id="playerContainer"></div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class='pb-5' style='margin-top: -100px;'>
    <div class='container-fluid'>
      <div class='row no-gutters'>
    <?php
  foreach($json as $obj) {
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
    echo   "</div>" ;
}
?>
   </div>
 </div>
</div>  

    <div class="site-section">

      <div class="container">

        <div class="row">
          <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto" data-aos="fade-up">
            <h2 class="mb-5">Weekly Radio Program</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, fugit nam obcaecati fuga itaque deserunt officia, error reiciendis ab quod?</p>
          </div>
        </div>
        
        <div class="site-block-retro d-block d-md-flex">

          <a href="#" class="col1 unit-9 no-height" data-aos="fade-up" data-aos-delay="100">
            <div class="image" style="background-image: url('images/img_2.jpg');"></div>
            <div class="unit-9-content">
              <h2>Classic Songs For Classic People</h2>
              <span>Friday 1:00pm &mdash; 2:30pm</span>
            </div>
          </a>

          <div class="col2 ml-auto">

            <a href="#" class="col2-row1 unit-9 no-height" data-aos="fade-up" data-aos-delay="200">
              <div class="image" style="background-image: url('images/img_3.jpg');"></div>
              <div class="unit-9-content">
                <h2>Classic Songs For Classic People</h2>
                <span>Friday 1:00pm &mdash; 2:30pm</span>
              </div>
            </a>

            <a href="#" class="col2-row2 unit-9 no-height" data-aos="fade-up" data-aos-delay="300">
              <div class="image" style="background-image: url('images/img_1.jpg');"></div>
              <div class="unit-9-content">
                <h2>Classic Songs For Classic People</h2>
                <span>Friday 1:00pm &mdash; 2:30pm</span>
              </div>
            </a>

          </div>

        </div>
        
      </div>
    </div>

    
    <div class="site-section bg-light block-13">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
            <h2 class="mb-5">Love By Our Listeners</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, fugit nam obcaecati fuga itaque deserunt officia, error reiciendis ab quod?</p>
          </div>
        </div>
        <div class="nonloop-block-13 owl-carousel">
          
          <div class="text-center p-3 p-md-5 bg-white">
            <div class="mb-4">            
              <img src="images/person_1.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
            </div>
            <div class="">
              <h3 class="font-weight-light h5">Megan Smith</h3>
              <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
            </div>
          </div>

          <div class="text-center p-3 p-md-5 bg-white">
            <div class="mb-4">            
              <img src="images/person_2.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
            </div>
            <div class="">
              <h3 class="font-weight-light h5">Brooke Cagle</h3>
              <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
            </div>
          </div>

          <div class="text-center p-3 p-md-5 bg-white">
            <div class="mb-4">            
              <img src="images/person_3.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
            </div>
            <div class="">
              <h3 class="font-weight-light h5">Philip Martin</h3>
              <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
            </div>
          </div>

          <div class="text-center p-3 p-md-5 bg-white">
            <div class="mb-4">            
              <img src="images/person_1.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
            </div>
            <div class="">
              <h3 class="font-weight-light h5">Steven Ericson</h3>
              <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
            </div>
          </div>

          <div class="text-center p-3 p-md-5 bg-white">
            <div class="mb-4">            
              <img src="images/person_2.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
            </div>
            <div class="">
              <h3 class="font-weight-light h5">Nathan Dumlao</h3>
              <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
            </div>
          </div>

          <div class="text-center p-3 p-md-5 bg-white">
            <div class="mb-4">            
              <img src="images/person_4.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
            </div>
            <div class="">
              <h3 class="font-weight-light h5">Brook Smith</h3>
              <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
            </div>
          </div>

        </div>
      </div>
    </div>  
    

    <div class="site-blocks-cover overlay inner-page-cover subscribe" style="background-image: url(images/hero_bg_4.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <h2>Subscribe</h2>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit nihil saepe libero sit odio obcaecati veniam.</p>
            <form action="#" method="post" class="site-block-subscribe">
                <div class="input-group mb-3">
                  <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter your email" aria-label="Enter Email" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="button" id="button-addon2">Subscribe</button>
                  </div>
                </div>
              </form>
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
        <div class="row" >
        <?php
  foreach($json2 as $obj2)  { 
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
            <h2 class="mb-5">News &amp; Events</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, fugit nam obcaecati fuga itaque deserunt officia, error reiciendis ab quod?</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <a href="#"><img src="images/img_4.jpg" alt="Image" class="img-fluid"></a>
            <div class="p-4 bg-white">
              <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
              <h2 class="h5 text-black mb-3"><a href="#">Art Gossip by Mike Charles</a></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem veniam quae sunt, voluptatum reprehenderit deserunt illum rem.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <a href="#"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
            <div class="p-4 bg-white">
              <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
              <h2 class="h5 text-black mb-3"><a href="#">Art Gossip by Mike Charles</a></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem veniam quae sunt, voluptatum reprehenderit deserunt illum rem.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <a href="#"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
            <div class="p-4 bg-white">
              <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
              <h2 class="h5 text-black mb-3"><a href="#">Art Gossip by Mike Charles</a></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem veniam quae sunt, voluptatum reprehenderit deserunt illum rem.</p>
            </div>
          </div>
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
                  <img src="images/dance.png" alt="Image placeholder" class="img-fluid rounded" style="witdh:350px;height:350px">
                  <a href="https://www.youtube.com/watch?v=0XFudmaObLI" class="play-button popup-vimeo"><span class="icon-play"></span></a>
                </figure>
              </div>

            </div>
          </div>


          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="mb-5">
              <h3 class="footer-heading mb-4" style="color:darkgreen;">WATCH A BRAND NEW VIDEO</h3>

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
              <h3 class="footer-heading mb-4" style="color:darkgreen;">WATCH A BRAND NEW VIDEO</h3>
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
    </div>
        <div class="row pt-5 mt-5 text-center">
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