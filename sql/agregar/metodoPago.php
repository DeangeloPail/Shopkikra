<?php
    include("../../db/database.php");
    ob_start();
    $Banco=(isset($_POST['Banco']))?$_POST['Banco']:"";
    $Propietario=(isset($_POST['Propietario']))?$_POST["Propietario"]:"";
    $Documento=(isset($_POST['Documento']))?$_POST["Documento"]:"";
    $Correo=(isset($_POST['Correo']))?$_POST["Correo"]:"";
    $Cuenta=(isset($_POST['Cuenta']))?$_POST["Cuenta"]:"";
    $TipCuenta=(isset($_POST['TipCuenta']))?$_POST["TipCuenta"]:"";
    $Telefono=(isset($_POST['Telefono']))?$_POST["Telefono"]:"";

    $sql="SELECT `nivel_usuar` FROM `usuario`where `cod_usuario`='$IdUsusario'";
    $result=mysqli_query($conexion, $sql);

    if($result){
        header("location: ../../views/administrador/metodos_pago.php");
    }else{
        echo ("error en el servidor");
    }
?>