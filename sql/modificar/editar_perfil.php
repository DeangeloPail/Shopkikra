<?php
    include("../../db/database.php");
    ob_start();
$url=(isset($_POST['url']))?$_POST['url']:"";
$idUsuario=(isset($_POST['idUsuario']))?$_POST['idUsuario']:"";
$nombre=(isset($_POST['nombre']))?$_POST['nombre']:"";
$apellido=(isset($_POST['apellido']))?$_POST['apellido']:"";
$documento=(isset($_POST['documento']))?$_POST['documento']:"";
$fecha=(isset($_POST['fecha']))?$_POST['fecha']:"";

    if(isset($_POST['Guardar'])){
        $imagen = $_FILES['imagen']['name'];
        
        if(isset($imagen) && $imagen != ""){
          $tipo = $_FILES['imagen']['type'];
          $temp = $_FILES['imagen']['tmp_name'];
          
          if(!((strpos($tipo,'png') || strpos($tipo,'jpeg') || strpos($tipo,'jpg') ))){
            $_SESSION['mensaje'] = 'solo se permite archivos jpg o png';
            header('Location: '.$url.'');
          }else{
            $sql= "UPDATE `usuario` SET `nom_usuario` = '$nombre', `ape_usuario` = '$apellido', 
            `doc_usuario` = '$documento',`fecha_usuar` = '$fecha',
            `foto_usuari` = '$imagen' 
            WHERE `usuario`.`cod_usuario` = '$idUsuario'";
            $resultdo = mysqli_query($conexion,$sql);
            if($resultdo){
              move_uploaded_file($temp,'../../images/profiles/'.$imagen);
              $_SESSION['mensaje'] = 'se ha subiodo correctamente';
              header('Location: '.$url.'');
            }else{
              $_SESSION['mensaje'] ='ocurrio un error en el servidor';
            }
          }
        
        }else{
            $sql= "UPDATE `usuario` SET `nom_usuario` = '$nombre', `ape_usuario` = '$apellido', 
            `doc_usuario` = '$documento',`fecha_usuar` = '$fecha' 
            WHERE `usuario`.`cod_usuario` = '$idUsuario'";
            $resultdo = mysqli_query($conexion,$sql);
            if($resultdo){
                $_SESSION['mensaje'] = 'se ha subiodo correctamente';
                header('Location: '.$url.'');
              }else{
                $_SESSION['mensaje'] ='ocurrio un error en el servidor';
                header('Location: '.$url.'');
              }
        }
    }
    
?>