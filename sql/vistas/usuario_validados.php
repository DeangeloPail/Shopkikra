<?php
    include("../../db/database.php");
    ob_start();
    $sql="SELECT `cod_usuario`,`perfil_usua`,`foto_usuari`,
    `nom_usuario`, `ape_usuario`,`doc_usuario`,`fecha_usuar`,
    pais.nombre_pais, `pais_usuari`,`telefon_usu`,`referido_usu`,
    niveles_usuario.nombre_nivl, verificacion.tip_verific,estatus.tip_estatus,
     `correo_usua`,terminal_correo.tip_termina FROM `usuario` 
     LEFT JOIN pais on usuario.pais_usuari=pais.codigo_pais 
     LEFT JOIN verificacion ON usuario.veri_usuari=verificacion.cod_verific 
     LEFT JOIN niveles_usuario ON usuario.nivel_usuar=niveles_usuario.codigo_nivl 
     LEFT JOIN estatus ON usuario.estatu_usua=estatus.cod_estatus 
     LEFT JOIN terminal_correo on usuario.term_correo=terminal_correo.cod_termina 
     where `veri_usuari`= 1 AND `cod_usuario`<>1";
    $result=mysqli_query($conexion, $sql);

    $sqlContador="SELECT COUNT(*) FROM `usuario` where `veri_usuari`= 1;";
    $resultContador=mysqli_query($conexion, $sqlContador);
    $contUsuNoValidado=mysqli_fetch_assoc($resultContador);
    $contadorNo=$contUsuNoValidado["COUNT(*)"];
?>