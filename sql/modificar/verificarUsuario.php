<?php
    include("../../db/database.php");
    ob_start();
    $idUsuario=(isset($_POST['idUsuario']))?$_POST['idUsuario']:"";

    $sql="UPDATE `usuario` SET `veri_usuari` = '1' WHERE `usuario`.`cod_usuario` = $idUsuario";
    $result=mysqli_query($conexion, $sql);
    if($result){
        header('Location: ../../views/administrador/usuario_validar.php');
    }else{
    }
?>