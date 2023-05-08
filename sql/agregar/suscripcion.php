<?php
    include("../../db/database.php");
    ob_start();
    $usuarioId=(isset($_POST['usuarioId']))?$_POST['usuarioId']:"";
    $metodoPago=(isset($_POST['metodoPago']))?$_POST['metodoPago']:"";
    $suscripcion=(isset($_POST['suscripcion']))?$_POST['suscripcion']:"";
    $fechaEmision=(isset($_POST['fechaEmision']))?$_POST['fechaEmision']:"";
    $referencia=(isset($_POST['referencia']))?$_POST['referencia']:"";
    $capture=$_FILES['capture']['name'];
    $temp = $_FILES['capture']['tmp_name'];
    
    $sql="SELECT `nivel_usuar` FROM `usuario`where `cod_usuario`='$IdUsusario'";
    $result=mysqli_query($conexion, $sql);

    if($result){
        header("location: ../../views/administrador/metodos_pago.php");
    }else{
        echo ("error en el servidor");
    }
?>