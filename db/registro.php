<?php
    include("database.php");
    ob_start();
    $nombres=(isset($_POST['nombres']))?$_POST['nombres']:"";
    $apellidos=(isset($_POST['apellidos']))?$_POST['apellidos']:"";
    $documento=(isset($_POST['documento']))?$_POST['documento']:"";
    $fechaDeNacimiento=(isset($_POST['fechaDeNacimiento']))?$_POST['fechaDeNacimiento']:"";
    $codPais=(isset($_POST['codPais']))?$_POST['codPais']:"";
    $telefono=(isset($_POST['telefono']))?$_POST['telefono']:"";
    $correo=(isset($_POST['correo']))?$_POST['correo']:"";
    $terCorreo=(isset($_POST['terCorreo']))?$_POST['terCorreo']:"";
    $usuario=(isset($_POST['usuario']))?$_POST['usuario']:"";
    $repContrasea=(isset($_POST['repContrasea']))?$_POST['repContrasea']:"";
    $codReferido=(isset($_POST['codReferido']))?$_POST['codReferido']:"";

    $sql="INSERT INTO `usuario` ( `perfil_usua`,`nom_usuario`, `foto_usuari`,
    `ape_usuario`, `doc_usuario`, `contrasena_`, `fecha_usuar`,
    `pais_usuari`, `telefon_usu`,`referido_usu`, `nivel_usuar`,`veri_usuari`, 
    `correo_usua`, `term_correo`) VALUES ( '$usuario','$nombres', 'sin_usurio.jpg',
    '$apellidos', '$documento', '$repContrasea', '$fechaDeNacimiento', 
    '$codPais', '$telefono', '$codReferido', '6','2',  
    '$correo', '$terCorreo')";
    $result=mysqli_query($conexion, $sql);

    if ($result){    
        header("location: ../login.php");
    }else{
        header("location: ../register.php?codReferido=");
    }
?>