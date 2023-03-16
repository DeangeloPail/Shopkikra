<?php 
session_start();
if(!isset($_SESSION['usuarioAdministrador'])){
  session_start();
  session_destroy();
  header("location: ../../login.html");
}else{
  if($_SESSION['usuarioAdministrador']="ok"){
      $nombreUsuario=$_SESSION["nombreUsuario"];
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Shopkikra || Inicio</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
						<!--icono-->	
	<link rel="icon" type="image/png" href="../../images/icons/blancoshk.png"/>
						<!--bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">	
						<!--font-->
	<link rel="stylesheet" type="text/css" href="../../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
						<!--iconic-->
	<link rel="stylesheet" type="text/css" href="../../fonts/iconic/css/material-design-iconic-font.min.css">
						<!--animate-->
	<link rel="stylesheet" type="text/css" href="../../vendor/animate/animate.css">
						<!--css-hamburgers-->	
	<link rel="stylesheet" type="text/css" href="../../vendor/css-hamburgers/hamburgers.min.css">
						<!--animsition-->
	<link rel="stylesheet" type="text/css" href="../../vendor/animsition/css/animsition.min.css">
						<!--select2-->
	<link rel="stylesheet" type="text/css" href="../../vendor/select2/select2.min.css">
						<!--daterangepicker-->	
	<link rel="stylesheet" type="text/css" href="../../vendor/daterangepicker/daterangepicker.css">
						<!--datatables-->
  <link href="../../vendor/datatables/DataTables-1.13.3/css/dataTables.bootstrap5.css" rel="stylesheet"/>
  <link href="../../vendor/datatables/AutoFill-2.5.2/css/autoFill.bootstrap5.min.css" rel="stylesheet"/>
  <link href="../../vendor/datatables/Buttons-2.3.5/css/buttons.bootstrap5.css" rel="stylesheet"/>
						<!--css-->
	<link rel="stylesheet" type="text/css" href="../../css/util.css">
	<link rel="stylesheet" type="text/css" href="../../css/main.css">
</head>
<body>	
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="./usuario_validar.php">Sin validar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">validados</a>
        </li>
        <li class="nav-item">
        	<a class="nav-link active" aria-current="page" href="./referidos.php">referidos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Usuarios</a>
        </li>
        <li>
          <a class="nav-link" href="../controllers/cerrar_sesion.php">Cerrar Sección</a>
        </li>
    </div>
  </div>
</nav>