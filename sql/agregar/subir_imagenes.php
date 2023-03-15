<?php
    include("../../db/database.php");
    ob_start();

    if(isset($_POST['Guardar'])){
        $imagen = $_FILES['imagen']['name'];
        
        if(isset($imagen) && $imagen != ""){
          $tipo = $_FILES['imagen']['type'];
          $temp = $_FILES['imagen']['tmp_name'];
          
          if(!((strpos($tipo,'png') || strpos($tipo,'jpeg') || strpos($tipo,'jpg') ))){
            $_SESSION['mensaje'] = 'solo se permite archivos jpg o png';
            header("Location: ../../views/pages/agregar_fotos.html");
          }else{
            $sql= "UPDATE `usuario` SET `foto_usuari` = '$imagen' 
            WHERE `usuario`.`cod_usuario` = 17";
            $resultdo = mysqli_query($conexion,$sql);
            if($resultdo){
              move_uploaded_file($temp,'../../images/profiles/'.$imagen);
              $_SESSION['mensaje'] = 'se ha subiodo correctamente';
              header('Location: ../../views/pages/agregar_fotos.html');
            }else{
              $_SESSION['mensaje'] ='ocurrio un error en el servidor';
            }
          }
        
        }
    }
    
?>