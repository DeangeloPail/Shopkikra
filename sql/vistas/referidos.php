<?php
    $sqlReferidos="SELECT `perfil_usua`,`nom_usuario`,`ape_usuario`,`foto_usuari` FROM `usuario` 
    WHERE `referido_usu`='$nombreUsuario';";
    $resultReferidos=mysqli_query($conexion, $sqlReferidos);
    

    $sqlContReferidos="SELECT COUNT(*) FROM `usuario` WHERE `referido_usu`='$nombreUsuario';";
    $resultContReferidos=mysqli_query($conexion, $sqlContReferidos);
    $contReferidos=mysqli_fetch_assoc($resultContReferidos);
    $cantidadReferidos=$contReferidos["COUNT(*)"];
?>