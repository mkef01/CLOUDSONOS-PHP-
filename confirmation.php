<?php
session_start();
if(isset($_SESSION['usuario']) && isset($_SESSION['correo']) && isset($_SESSION['contra'])){
  $url = "http://localhost:56131/api/";
  $nombre = $_SESSION['usuario'];
  $correo = $_SESSION['correo'];
  $pass1 = $_SESSION['contra'];
  $url2 = $url . "reproductor/insertar";
  $data = array(
    'Contraseña' => $pass1,
		'Correo' => $correo,
    'Usuario1' => $nombre
  );
  $payload = json_encode($data);
  $url = $url . 'reproductor/insertar';
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
 $result = curl_exec($ch);
 curl_close($ch);
session_unset();    // borrar variables de sesion
session_destroy();
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Pago confirmado</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="jumbotron" style="margin-top: 30px; background-color: #E0E0E0;">
      <?php
        if($result == 0){
          echo "<h1>No se pudo completar el registro favor comunicarse con el equipo CloudSonos</h1>";
        }if ($result == 5){
          echo "<h1>Pago confirmado</h1>";
          echo "<p>Su pago ha sido recibido correctamente. Se redireccionara a la pagina principal muchas gracias</p>";
          sleep(5);
          header("location: Reproductor\index.php ");
        }
      ?>    
    
    
        
      </div>
</div>
<script>
    $(document).ready(function(){

        <?php 
          sleep(5);
          header("location: Reproductor\index.php ");  
        ?>

    });
</script>
</body>
</html>
