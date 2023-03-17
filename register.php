<?php
     $referido= base64_decode($_GET['codReferido']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Shopkikra || Registro</title>
	<meta charset=
	"UTF-8">
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
    <div class="position-relative">
		<div class="container">
			<div class="row">
				<div class="col-6 mx-auto my-5">
					<div class="card" style="background:#9152f8 -webkit-linear-gradient(top, #7579ff, #b224ef)">
						<form action="db/registro.php" class="mx-5" method="POST">

							<span class="login100-form-title p-b-34 p-t-27">
								Registro de Usuario
							</span>

							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres"autocomplete="off">
								<label for="nombres">Nombres</label>
							</div>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos"autocomplete="off">
								<label for="apellidos">Apellidos</label>
							</div>

							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="documento" name="documento" placeholder="Documento"autocomplete="off">
								<label for="documento">Documento</label>
							</div>

							<div class="form-floating mb-3">
								<input type="date" class="form-control" id="fechaDeNacimiento" name="fechaDeNacimiento" placeholder="Fecha De Nacimiento"autocomplete="off">
								<label for="fechaDeNacimiento">Fecha De Nacimiento</label>
							</div>

							<div class="input-group mb-3">
								<select class="form-select px-133" id="codPais"name="codPais">
								  <option selected disabled>Seleccione</option>
								  <option value="+58">+58</option>
								  <option value="+57">+57</option>
								  <option value="+54">+54</option>
								</select>
								<input type="text" class="form-control input-group-text px-5" id="telefono" name="telefono" placeholder="Telefono"autocomplete="off">
							</div>

							<div class="input-group mb-3">
								<input type="text" class="form-control input-group-text px-5" id="correo" name="correo" placeholder="Correo"autocomplete="off">
								<select class="form-select px-133" id="terCorreo"name="terCorreo">
								<option selected disabled>Seleccione</option>
								<option value="1">@gmail.com</option>
								<option value="2">@hotmail.com</option>
								</select>
							</div>

							<hr class="border border-primary border-3 opacity-75">

							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" autocomplete="off">
								<label for="usuario">Usuario</label>
							</div>

							<div class="form-floating  mb-3">
								<input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Contraseña" autocomplete="off">
								<label for="contrasena">Contraseña</label>
							</div>

							<div class="form-floating  mb-3">
								<input type="password" class="form-control" id="repContrasea" name="repContrasea" placeholder="Repita Contraseña" autocomplete="off">
								<label for="repContrasea">Repita Contraseña</label>
							</div>

							<div class="form-floating  mb-3">
								<input type="text" class="form-control" id="codReferido" value="<?php echo $referido;?>" name="codReferido" placeholder="Codigo Referido" autocomplete="off">
								<label for="codReferido">Codigo Referido</label>
							</div>


							<div class="container-login100-form-btn my-5">
								<button type="submit" class="login100-form-btn mx-3">
									Registrate
								</button>
			
								<a class="login100-form-btn mx-3" type="button" href="./login.html">
									Iniciar Sesión
								</a>
							</div>
						</form>
					</div>
				</div>
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
	<script src=""></script>

</body>
</html>

<link href="" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>