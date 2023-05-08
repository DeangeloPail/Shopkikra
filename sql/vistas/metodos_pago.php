<?php
    include("../../db/database.php");
    ob_start();
    $sql="SELECT `id_met_pago`,`numero_cuenta`,`banco`,`num_telefono`,
    `doc_identidad`,`tip_cuenta`,`correo_electro`,`nom_propietario` FROM `metodos_pago`;";
    $result=mysqli_query($conexion, $sql);
?>