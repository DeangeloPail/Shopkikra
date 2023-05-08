<?php 
include_once("./template/head.php"); 
include("../../db/database.php");
ob_start(); 
include("../../sql/vistas/referidos.php");
$sql="SELECT `cod_usuario`,`perfil_usua`,`foto_usuari`,`nom_usuario`,
    `ape_usuario`,`doc_usuario`,`fecha_usuar`,pais.nombre_pais,
    `pais_usuari`,`telefon_usu`,`referido_usu`,niveles_usuario.nombre_nivl,
    verificacion.tip_verific,estatus.tip_estatus,
    `correo_usua`,terminal_correo.tip_termina
    FROM `usuario` 
    LEFT JOIN pais on usuario.pais_usuari=pais.codigo_pais
    LEFT JOIN verificacion ON usuario.veri_usuari=verificacion.cod_verific
    LEFT JOIN niveles_usuario ON usuario.nivel_usuar=niveles_usuario.codigo_nivl
    LEFT JOIN estatus ON usuario.estatu_usua=estatus.cod_estatus
    LEFT JOIN terminal_correo on usuario.term_correo=terminal_correo.cod_termina
    where `cod_usuario`= '$IDUsuario';";
    $result=mysqli_query($conexion, $sql);
    $perfil="../../images/profiles/";
    $urlVolver="../../views/usuario1/perfil.php";
    
    $sqlVerificacion="SELECT * FROM `usuario` WHERE `cod_usuario` = '$IDUsuario' AND `veri_usuari`=2;";
    $resultVerificacion=mysqli_query($conexion, $sqlVerificacion);

    $sqlNivGratis="SELECT * FROM `usuario` WHERE `cod_usuario` = '$IDUsuario' AND `nivel_usuar`=6;";
    $resultNivGratis=mysqli_query($conexion, $sqlNivGratis);
    
?>
<div class="row">
    <div class="col-md-3 mb-3">
        <div class="card bg-gradient-info shadow-lg">
        <span class="badge rounded-pill bg-info w-30 mt-n2 mx-auto">Premium</span>
        <div class="card-header text-center pt-4 pb-3 bg-transparent">
            <h1 class="font-weight-bold mt-2 text-white">
            <small class="text-lg mb-auto">$</small>89<small class="text-lg">/mo</small>
            </h1>
        </div>
        <div class="card-body text-lg-start text-center pt-0">
            <div class="d-flex justify-content-lg-start justify-content-center p-2">
            <i class="material-icons my-auto text-white">done</i>
            <span class="ps-3 text-white">10 team members</span>
            </div>

            <div class="d-flex justify-content-lg-start justify-content-center p-2">
            <i class="material-icons my-auto text-white">done</i>
            <span class="ps-3 text-white">40GB Cloud storage </span>
            </div>

            <div class="d-flex justify-content-lg-start justify-content-center p-2">
            <i class="material-icons my-auto text-white">done</i>
            <span class="ps-3 text-white">Integration help </span>
            </div>

            <div class="d-flex justify-content-lg-start justify-content-center p-2">
            <i class="material-icons my-auto text-white">done</i>
            <span class="ps-3 text-white">Sketch Files </span>
            </div>

            <div class="d-flex justify-content-lg-start justify-content-center p-2">
            <i class="material-icons my-auto text-white">remove</i>
            <span class="ps-3 text-white">API Access </span>
            </div>

            <div class="d-flex justify-content-lg-start justify-content-center p-2">
            <i class="material-icons my-auto text-white">remove</i>
            <span class="ps-3 text-white">Complete documentation </span>
            </div>

            <a href="./suscripcion.php" class="btn btn-icon bg-gradient-info d-lg-block mt-3 mb-0">
            Try Premium
            <i class="fas fa-arrow-right ms-1"></i>
            </a>
        </div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="card bg-gradient-secondary shadow-lg">
        <span class="badge rounded-pill bg-info w-30 mt-n2 mx-auto">Premium</span>
        <div class="card-header text-center pt-4 pb-3 bg-transparent">
            <h1 class="font-weight-bold mt-2 text-white">
            <small class="text-lg mb-auto">$</small>89<small class="text-lg">/mo</small>
            </h1>
        </div>
        <div class="card-body text-lg-start text-center pt-0">
            <div class="d-flex justify-content-lg-start justify-content-center p-2">
            <i class="material-icons my-auto text-white">done</i>
            <span class="ps-3 text-white">10 team members</span>
            </div>

            <div class="d-flex justify-content-lg-start justify-content-center p-2">
            <i class="material-icons my-auto text-white">done</i>
            <span class="ps-3 text-white">40GB Cloud storage </span>
            </div>

            <div class="d-flex justify-content-lg-start justify-content-center p-2">
            <i class="material-icons my-auto text-white">done</i>
            <span class="ps-3 text-white">Integration help </span>
            </div>

            <div class="d-flex justify-content-lg-start justify-content-center p-2">
            <i class="material-icons my-auto text-white">done</i>
            <span class="ps-3 text-white">Sketch Files </span>
            </div>

            <div class="d-flex justify-content-lg-start justify-content-center p-2">
            <i class="material-icons my-auto text-white">remove</i>
            <span class="ps-3 text-white">API Access </span>
            </div>

            <div class="d-flex justify-content-lg-start justify-content-center p-2">
            <i class="material-icons my-auto text-white">remove</i>
            <span class="ps-3 text-white">Complete documentation </span>
            </div>

            <a href="./suscripcion.php" class="btn btn-icon bg-gradient-info d-lg-block mt-3 mb-0">
            Try Premium
            <i class="fas fa-arrow-right ms-1"></i>
            </a>
        </div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="card bg-gradient-warning shadow-lg">
        <span class="badge rounded-pill bg-info w-30 mt-n2 mx-auto">Premium</span>
        <div class="card-header text-center pt-4 pb-3 bg-transparent">
            <h1 class="font-weight-bold mt-2 text-white">
            <small class="text-lg mb-auto">$</small>89<small class="text-lg">/mo</small>
            </h1>
        </div>
        <div class="card-body text-lg-start text-center pt-0">
            <div class="d-flex justify-content-lg-start justify-content-center p-2">
            <i class="material-icons my-auto text-white">done</i>
            <span class="ps-3 text-white">10 team members</span>
            </div>

            <div class="d-flex justify-content-lg-start justify-content-center p-2">
            <i class="material-icons my-auto text-white">done</i>
            <span class="ps-3 text-white">40GB Cloud storage </span>
            </div>

            <div class="d-flex justify-content-lg-start justify-content-center p-2">
            <i class="material-icons my-auto text-white">done</i>
            <span class="ps-3 text-white">Integration help </span>
            </div>

            <div class="d-flex justify-content-lg-start justify-content-center p-2">
            <i class="material-icons my-auto text-white">done</i>
            <span class="ps-3 text-white">Sketch Files </span>
            </div>

            <div class="d-flex justify-content-lg-start justify-content-center p-2">
            <i class="material-icons my-auto text-white">remove</i>
            <span class="ps-3 text-white">API Access </span>
            </div>

            <div class="d-flex justify-content-lg-start justify-content-center p-2">
            <i class="material-icons my-auto text-white">remove</i>
            <span class="ps-3 text-white">Complete documentation </span>
            </div>

            <a href="./suscripcion.php" class="btn btn-icon bg-gradient-info d-lg-block mt-3 mb-0">
            Try Premium
            <i class="fas fa-arrow-right ms-1"></i>
            </a>
        </div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="card bg-gradient-primary shadow-lg">
        <span class="badge rounded-pill bg-info w-30 mt-n2 mx-auto">Premium</span>
        <div class="card-header text-center pt-4 pb-3 bg-transparent">
            <h1 class="font-weight-bold mt-2 text-white">
            <small class="text-lg mb-auto">$</small>89<small class="text-lg">/mo</small>
            </h1>
        </div>
        <div class="card-body text-lg-start text-center pt-0">
            <div class="d-flex justify-content-lg-start justify-content-center p-2">
            <i class="material-icons my-auto text-white">done</i>
            <span class="ps-3 text-white">10 team members</span>
            </div>

            <div class="d-flex justify-content-lg-start justify-content-center p-2">
            <i class="material-icons my-auto text-white">done</i>
            <span class="ps-3 text-white">40GB Cloud storage </span>
            </div>

            <div class="d-flex justify-content-lg-start justify-content-center p-2">
            <i class="material-icons my-auto text-white">done</i>
            <span class="ps-3 text-white">Integration help </span>
            </div>

            <div class="d-flex justify-content-lg-start justify-content-center p-2">
            <i class="material-icons my-auto text-white">done</i>
            <span class="ps-3 text-white">Sketch Files </span>
            </div>

            <div class="d-flex justify-content-lg-start justify-content-center p-2">
            <i class="material-icons my-auto text-white">remove</i>
            <span class="ps-3 text-white">API Access </span>
            </div>

            <div class="d-flex justify-content-lg-start justify-content-center p-2">
            <i class="material-icons my-auto text-white">remove</i>
            <span class="ps-3 text-white">Complete documentation </span>
            </div>

            <a href="./suscripcion.php" class="btn btn-icon bg-gradient-info d-lg-block mt-3 mb-0">
            Try Premium
            <i class="fas fa-arrow-right ms-1"></i>
            </a>
        </div>
        </div>
    </div>
</div>

<?php include_once("./template/footer.php"); ?>