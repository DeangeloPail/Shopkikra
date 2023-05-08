<?php
    include("../../db/database.php");
    ob_start();
    if(isset($_FILES['documento'])) {
    $idUsuario = $_POST['idUsuario'];
    $nivel = $_POST['nivel'];
    $nombre = $_POST['nombres'];
    $apellido = $_POST['apellidos'];
    $dni = $_POST['documentoNumero'];
    $fecha = $_POST['fechaNacimiento'];

    $documento = $_FILES['documento']['name'];
    $tempDocumento = $_FILES['documento']['tmp_name'];

    $sql= "UPDATE `usuario` SET `nom_usuario` = '$nombre', `ape_usuario` = '$apellido', 
    `doc_usuario` = '$dni', `fecha_usuar` = '$fecha', `veri_usuari` = '3',
    foto_documento ='$documento'
    WHERE `usuario`.`cod_usuario` = '$idUsuario'";
    $resultdo = mysqli_query($conexion,$sql);
    if($resultdo){
      move_uploaded_file($tempDocumento,'../../images/documentos/'.$documento);
      switch ($nivel) {
        case 2:
            header('Location: ../../views/usuario1/perfil.php');
            break;
        case 3:
            header('Location: ../../views/usuario2/perfil.php');
            break;
        case 4:
            header('Location: ../../views/usuario3/perfil.php');
            break;
        case 5:
            header('Location: ../../views/usuario4/perfil.php');
            break;
        case 6:
            header('Location: ../../views/usuario5/perfil.php');
            break;
      }
    }else{
        echo 'error';
    }
    }
?>