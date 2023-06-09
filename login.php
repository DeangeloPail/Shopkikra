<?php 
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Shopkikra || Inicio</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
						<!--icono-->	
	<link rel="icon" type="image/png" href="images/icons/blancoshk.png"/>
						<!--bootstrap-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">	
						<!--font-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
						<!--iconic-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
						<!--animate-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
						<!--css-hamburgers-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
						<!--animsition-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
						<!--select2-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
						<!--daterangepicker-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
						<!--css-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="db/loging_controlador.php" method="POST">
					<span class="login100-form-logo">
						<img class="login100-form-logo" src="images/icons/negroshk.png"></img>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Inicio de Sesión
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Escriba usuario">
						<input class="input100" type="text" name="usuario" autocomplete="off" id="usuario" placeholder="Usuario">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Escriba contraseña">
						<input class="input100" type="password" name="contrasena" autocomplete="off" id="contrasena" placeholder="Contraseña">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="container-login100-form-btn mt-5 mb-4">
						<button type="submit" class="login100-form-btn mx-4">
							Iniciar Sesión
						</button>

						<a class="login100-form-btn mx-4" href="register.php?codReferido=">
							Registrate
						</a>
					</div>				

					<!--<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div>-->
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
						<!--Jquery-->
	<script src="vendor/jquery/jquery.min.js"></script>
						<!--animsition-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
						<!--bootstrap-->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
						<!--select2-->
	<script src="vendor/select2/select2.min.js"></script>
						<!--daterangepicker-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
						<!--countdowntime-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
						<!--js-->
	<script src="js/main.js"></script>

</body>
</html>