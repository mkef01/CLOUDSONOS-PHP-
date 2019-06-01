<!DOCTYPE html>
<html lang="en">

<head>
  <title>CloudSonos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
          <div class="navbar-header">
            <!-- Navbar Brand --><a href="index.php" class="navbar-brand">
              <div class="brand-text brand-big hidden-lg-down"><span>CloudSonos </span><strong>
                </strong></div>
              <!-- <div class="brand-text brand-small">CloudSonos</div> -->
            </a>
            <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
          </div>
          <!-- Navbar Menu -->
          <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">

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


    <div class="container">

      <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('images/hero_bg_3.jpg');" data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">

              <h2 class="text-white h1">Contactanos</h2>
              <p>Envia un mensaje para poder contactarnos.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="site-section bg-light">
        <div class="container">
          <div class="row">

            <div class="col-md-12 col-lg-8 mb-5">



              <form action="sugerencias.php" method="post" class="p-5 bg-white">

                <div class="row form-group">
                  <div class="col-md-12 mb-3 mb-md-0">
                    <label class="font-weight-bold" for="fullname">Nombre Completo</label>
                    <input type="text" id="Nombre" name="Nombre" class="form-control" placeholder="Nombre Completo">
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-md-12">
                    <label class="font-weight-bold" for="email">Email</label>
                    <input type="email" id="Correo" name="Correo" class="form-control" placeholder="Email">
                  </div>
                </div>


                <div class="row form-group">
                  <div class="col-md-12">
                    <label class="font-weight-bold" for="message">Mensanje</label>
                    <input id="mensaje" name="mensaje" class="form-control" placeholder="Escribenos tu Mensaje">
                  </div>
                </div>

                <?php
                if (isset($_GET["param"])) {

                  echo  "<div class='row form-group'>";
                  echo  "<div class='col-md-12'>";
                  echo  "<label class='font-weight-bold' for='email'>Mensaje Enviado!!!</label>";
                  echo  "</div>";
                  echo  "</div>";
                }

                ?>

                <div class="row form-group">
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-primary  py-2 px-4 rounded-0">Enviar</button>
                  </div>
                </div>


              </form>
            </div>

            <div class="col-lg-4">
              <div class="p-4 mb-3 bg-white">
                <h3 class="h5 text-black mb-3">Informacion de Contacto</h3>
                <p class="mb-0 font-weight-bold">Direccion</p>
                <p class="mb-4">503 La Paloma Avenue, Los Angeles, California, USA</p>

                <p class="mb-0 font-weight-bold">Telefono</p>
                <p class="mb-4"><a href="#">+503 7640-2988</a></p>

                <p class="mb-0 font-weight-bold">Direccion de Email</p>
                <p class="mb-0"><a href="#">tucorreo@hotmail.es</a></p>

              </div>

              <div class="p-4 mb-3 bg-white">
                <h3 class="h5 text-black mb-3">Mas Informacion</h3>
                <p>Conozca mas acerca del mundo de la musica.</p>
                <p><a href="#" class="btn btn-primary  py-2 px-4 rounded-0">Vea aqui</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>




      <div class="site-section">
        <div class="container">
          <div class="row justify-content-center text-center mb-5">
            <div class="col-md-6" data-aos="fade">
              <h3>Preguntas Frecuentes</h3>
            </div>
          </div>


          <div class="row justify-content-center" data-aos="fade" data-aos-delay="100">
            <div class="col-md-8">
              <div class="accordion unit-8" id="accordion">
                <div class="accordion-item">
                  <h3 class="mb-0 heading">
                    <a class="btn-block" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">¿Cual es el nombre de su compañia?<span class="icon"></span></a>
                  </h3>
                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="body-text">
                      <p>CloudSonos Inc.</p>
                    </div>
                  </div>
                </div> <!-- .accordion-item -->

                <div class="accordion-item">
                  <h3 class="mb-0 heading">
                    <a class="btn-block" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">¿Cuanto pago por 3 meses?<span class="icon"></span></a>
                  </h3>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="body-text">
                      <p>Una vez haces el primer pago no tienes que pagar nada mas.</p>
                    </div>
                  </div>
                </div> <!-- .accordion-item -->

                <div class="accordion-item">
                  <h3 class="mb-0 heading">
                    <a class="btn-block" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">¿Es necesario registrarme para hacer uso de los servicios de CloudSonos? <span class="icon"></span></a>
                  </h3>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="body-text">
                      <p>Si quieres tener acceso a nuestros servicios debes de estar registrado.</p>
                    </div>
                  </div>
                </div> <!-- .accordion-item -->

                <div class="accordion-item">
                  <h3 class="mb-0 heading">
                    <a class="btn-block" data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="false" aria-controls="collapseFour">¿A quien debo contactar en caso de un problema?<span class="icon"></span></a>
                  </h3>
                  <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="body-text">
                      <p> Puedes llenar el formulario de la parte superior y nuestros tecnicos trataran en la brevedad de solucionar tus problemas.</p>
                    </div>
                  </div>
                </div> <!-- .accordion-item -->

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
                      <img src="images/artic2.jpg" alt="Image placeholder" class="img-fluid rounded" style="witdh:350px;height:350px">
                      <a href="https://www.youtube.com/watch?v=6366dxFf-Os" class="play-button popup-vimeo"><span class="icon-play"></span></a>
                    </figure>
                  </div>

                </div>
              </div>


              <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="mb-5">
                  <h3 class="footer-heading mb-4" style="color:darkgreen;">DISFRUTA DE UN NUEVO VIDEO</h3>

                  <div class="block-16">
                    <figure>
                      <img src="images/FOO.jpg" alt="Image placeholder" class="img-fluid rounded">
                      <a href="https://www.youtube.com/watch?v=CHbX3ukV6dI" class="play-button popup-vimeo"><span class="icon-play"></span></a>
                    </figure>
                  </div>

                </div>
              </div>

              <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="mb-5">
                  <h3 class="footer-heading mb-4" style="color:darkgreen;">DISFRUTA DE UN NUEVO VIDEO</h3>
                  <div class="block-16">
                    <figure>
                      <img src="images/angeles.jpg" alt="Image placeholder" class="img-fluid rounded" style="witdh:350px;height:350px">
                      <a href="https://www.youtube.com/watch?v=rXyeKotBFj0" class="play-button popup-vimeo"><span class="icon-play"></span></a>
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
              TODOS LOS DERECHOS RESERVADOS &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
              <script>
                document.write(new Date().getFullYear());
              </script> PARA ESTE SITIO <i class="icon-heart text-danger" aria-hidden="true"></i> FOR <a href="https://colorlib.com" target="_blank">PEACE AND LOVE</a>
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