<?php
    include_once 'database.php';
	$usuario=$_POST['usuario'];
	$contrasena=$_POST['contrasena'];
	session_start();
	$_SESSION['usuario'] = $usuario;

	$sql="SELECT * from usuario WHERE perfil_usua='$usuario' and contrasena_='$contrasena'";
	$result=mysqli_query($conexion,$sql);

	$filas=mysqli_fetch_array($result);

    if($filas == true){
        // validar rol
        if($filas['nivel_usuar']==1) {
            $_SESSION['usuarioAdministrador']="ok";
            $_SESSION['nombreUsuario']=$usuario;
            header("location: ../views/administrador/usuario_validar.php");
        }
        if($filas['nivel_usuar']==2){
            $_SESSION['usuarioBronce']="ok";
            $_SESSION['nombreUsuario']=$usuario;
            header("location: ../views/usuario1/perfil.php");
        }
        if($filas['nivel_usuar']==3){
            $_SESSION['usuarioPlata']="ok";
            $_SESSION['nombreUsuario']=$usuario;
            header("location: ../views/usuario2/perfil.php");
        }
        if($filas['nivel_usuar']==4){
            $_SESSION['usuarioOro']="ok";
            $_SESSION['nombreUsuario']=$usuario;
            header("location: ../views/usuario3/perfil.php");
        }
        if($filas['nivel_usuar']==5){
            $_SESSION['usuarioDiamante']="ok";
            $_SESSION['nombreUsuario']=$usuario;
            header("location: ../views/usuario4/perfil.php");
        }
        if($filas['nivel_usuar']==6){
            $_SESSION['usuarioFree']="ok";
            $_SESSION['nombreUsuario']=$usuario;
            header("location: ../views/usuario5/perfil.php");
        }
    }else{
        // no existe el usuario
        header("location: ../login.php");
    }

mysqli_free_result($result);
mysqli_close($conexion);
?>