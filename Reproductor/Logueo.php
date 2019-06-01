<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login - CloudSonos</title>
	<!--link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"/-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="Login Assets/css/style.css"/>
</head>
<!-- Parte importante para entrar al sistema -->
<?php
	$url = "http://cloudsonos.azurewebsites.net/api";
    if (isset($_REQUEST['Usuario']) && isset($_REQUEST['Contraseña'])){
        $nombre = $_REQUEST['Usuario'];
        $contra = $_REQUEST['Contraseña'];
    
        $url2 = $url . "/login/acceso";
        $data = array(
            'Usuario' => $nombre,
            'Contraseña' => $contra
        );
        $payload = json_encode($data);
 
// Prepare new cURL resource
$url = $url . '/login/acceso';
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
 
// Close cURL session handle
curl_close($ch);
if($result == 'true'){
	$_SESSION['usuario'] = $nombre;
	header("location: index.php");
}else{
	echo "<script>alert('Usuario o contraseña son incorrectos')</script>";
	//header("location: Logueo.php");
	}
}
?>

<!-- Verificacion para poder entrar al paypal -->
<?php
	$url = "http://cloudsonos.azurewebsites.net/api/";
    if (isset($_REQUEST['nuevousuario']) && isset($_REQUEST['correonuevo']) && isset($_REQUEST['password1']) && isset($_REQUEST['password2'])){ 
        $nombre = $_REQUEST['nuevousuario'];
		$correo = $_REQUEST['correonuevo'];
		$pass1 = $_REQUEST['password1'];
		$pass2 = $_REQUEST['password2'];
		//100 general 60 no igual 40 repetido usu 50 repetido correo
    
        $url2 = $url . "reproductor/nuevo";
        $data = array(
            'Usuario' => $nombre,
			'Coreo' => $correo,
			'Password1' => $pass1,
			'Password2' => $pass2
        );
        $payload = json_encode($data);
 
// Prepare new cURL resource
$url = $url . 'reproductor/nuevo';
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
 
// Close cURL session handle
curl_close($ch);
if($result == 100){
	echo "<script>alert('Error verifique que no envia un campo vacio')</script>";
}if($result == 60){
	echo "<script>alert('Contraseñas no concuerdan')</script>";
}if($result == 40){
	echo "<script>alert('Usuario repetido')</script>";
}if($result == 50){
	echo "<script>alert('Correo repetido')</script>";
}if($result == 0){
	$_SESSION['usuario'] =$nombre;
	$_SESSION['correo'] = $correo;
	$_SESSION['contra'] = $pass1;
	header("location: ../paypal.php ");
}
}
?>
<body style="background: black">
    
	<div class="container">
		<div class="col-md-6 col-md-offset-1 col-xs-5 mx-auto">
			
			<div class="blmd-wrapp">
				<div class="blmd-color-conatiner ripple-effect-All"></div>
				<div class="blmd-header-wrapp ">
					<div class="blmd-switches">
						<button class="btn btn-circle btn-lg btn-blmd ripple-effect btn-success blmd-switch-button">
							<svg style="width:24px;height:24px" viewBox="0 0 24 24">
								<path fill="#fff" d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" />
							</svg>
						</button>
					</div>

				</div>
				<div class="blmd-continer">

                        <form action="Logueo.php" class="clearfix" id="login-form" method="post">
						<h1>Bienvenidos</h1>
						<div class="col-md-12">

							<div class="input-group blmd-form">
								<div class="blmd-line">
									<input type="text" name="Usuario" autocomplete="off" id="Usuario" class="form-control">
									<label class="blmd-label">Nombre de usuario</label>
								</div>
							</div>
							<div class="input-group blmd-form">
								<div class="blmd-line">
									<input type="password" name="Contraseña" autocomplete="off" id="Contraseña" class="form-control">
									<label class="blmd-label">Contraseña</label>
								</div>
							</div>
						</div>
						<div class="col-sm-12 text-center">
							<button type="submit" class="btn btn-blmd ripple-effect btn-success btn-lg btn-block">Entrar</button>
						</div>
						<br />

						</form>
					
						<form action="Logueo.php" class="clearfix form-hidden" id="Register-form" method="post">
							<h1>Registrate se parte de CloudSonos</h1>
							<div class="col-md-12">

								<div class="input-group blmd-form">
									<div class="blmd-line">
										<input type="text" name="nuevousuario" autocomplete="off" id="nuevousuario" class="form-control">
										<label class="blmd-label">Nombre de usuario</label>
									</div>
								</div>
								<div class="input-group blmd-form">
									<div class="blmd-line">
										<input type="text" name="correonuevo" autocomplete="off" id="correonuevo" class="form-control">
										<label class="blmd-label">Correo</label>
									</div>
								</div>
								<div class="input-group blmd-form">
									<div class="blmd-line">
										<input type="password" name="password1" autocomplete="off" id="password1" class="form-control">
										<label class="blmd-label">Contraseña</label>
									</div>
								</div>
								<div class="input-group blmd-form">
									<div class="blmd-line">
										<input type="password" name="password2" autocomplete="off" id="password2" class="form-control">
										<label class="blmd-label">Repetir Contraseña</label>
									</div>
								</div>
							</div>
							<div class="col-sm-12 text-center">
							<button type="submit" class="btn btn-blmd ripple-effect btn-success btn-lg btn-block">Siguiente</button>
							</div>
							<br />
						</form>
</div>
			</div>
		</div>
	</div>
	<!-- <script src="js/jquery-migrate-3.0.1.min.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<!--script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script-->
	<script src="js/bootstrap.min.js"></script>
	<script src="Login Assets/js/index.js"></script>

<!--	<script>

		$(document).ready(function(){

			alert('Listo');

		});

	</script>-->

</body>
</html>
