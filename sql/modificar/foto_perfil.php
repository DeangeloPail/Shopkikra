<?php
    include("../../db/database.php");
    ob_start();
    if(isset($_FILES['imagen'])) {
        $imagen = $_FILES['imagen']['name'];
        $idUsuario = $_POST['idUsuario'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $dni = $_POST['dni'];
        $fecha = $_POST['fecha'];

        
        if(isset($imagen) && $imagen != ""){
          $tipo = $_FILES['imagen']['type'];
          $temp = $_FILES['imagen']['tmp_name'];
          $tamanio_archivo = $_FILES['imagen']['size'];
          
          if(!((strpos($tipo,'png') || strpos($tipo,'jpeg') || strpos($tipo,'jpg') && $tamanio_archivo < 5000000) )){
            echo json_encode("error");
          }else{
            $sql= "UPDATE `usuario` SET `nom_usuario` = '$nombre', `ape_usuario` = '$apellido', 
            `doc_usuario` = '$dni', `fecha_usuar` = '$fecha',
            `foto_usuari` = '$imagen' 
            WHERE `usuario`.`cod_usuario` = '$idUsuario'";
            $resultdo = mysqli_query($conexion,$sql);
            if($resultdo){
              move_uploaded_file($temp,'../../images/profiles/'.$imagen);
              echo json_encode("true");
            }else{
              echo json_encode("false");
            }
          }
        
        }
    }
    
?>
