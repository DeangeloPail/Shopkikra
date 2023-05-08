<?php 
include_once("./template/head.php"); 
include("../../db/database.php");
ob_start(); 
include("../../sql/vistas/referidos.php");
$sql="SELECT `cod_usuario`,`perfil_usua`,`foto_usuari`,`nom_usuario`,
    `ape_usuario`,`doc_usuario`,`fecha_usuar`,pais.nombre_pais,
    `pais_usuari`,`telefon_usu`,`referido_usu`,niveles_usuario.nombre_nivl,
    verificacion.tip_verific,estatus.tip_estatus,`nivel_usuar`,
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
    //alt="profile_image" class="w-500 border-radius-lg shadow-sm"
?>
<div class="container-fluid px-2 px-md-4 mt-5">
    <div class="card card-body mx-3 mx-md-4 mt-n6">
        <div class="alert alert-warning alert-dismissible text-white fade show" role="alert">
            <span class="alert-icon align-middle">
            <span class="material-icons text-md">
            warning
            </span>
            </span>
            <span class="alert-text"><strong>Verifique que los datos concuerden con el documento.</strong> 
            Si los datos no concuerdan con los del documento, se negará la verificación.</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="alert alert-warning alert-dismissible text-white fade show" role="alert">
            <span class="alert-icon align-middle">
            <span class="material-icons text-md">
            warning
            </span>
            </span>
            <span class="alert-text"><strong>Recuerda que para que se pueda verificar tu cuenta, 
                la foto de perfil debe coincidir con la foto del documento de identidad que proporcionaste.</strong>
            </span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php while($usuario=mysqli_fetch_assoc($result)){?>
        <form action="../../sql/modificar/solicitudVerificacion.php" method="POST" id="formulario" enctype="multipart/form-data">
         <div class="row">
          <div class="row">
            <div class="col-12 col-xl-6">
                <div class="card card-plain h-100 centrar">
                    <label for="imagen" class="foto-perfil"><img id="lavelPerfil" name="lavelPerfil" src="<?php echo $perfil.$usuario['foto_usuari']; ?>" class="foto-perfil"></label>
                    <label for="imagen" type="button" class="btn bg-gradient-info">Editar perfil</label>
                    <input type="file" class="input-invisible" name="imagen" id="imagen" accept="image/png, image/jpeg">
                    <div id="alertaFotoPerfil"></div>
                </div>
            </div>
            <div class="col-12 col-xl-6">
                <div class="card card-plain h-100 needs-validation" novalidate>

                        <div class="input-group input-group-static mb-4">
                            <input type="hidden" class="form-control" name="idUsuario" id="idUsuario" value="<?php echo $usuario['cod_usuario'];?>">
                            <input type="hidden" class="form-control" name="nivel" id="nivel" value="<?php echo $usuario['nivel_usuar'];?>">
                        </div>

                        <div class="input-group input-group-static mb-4"id="nombresDiv">
                            <label>Nombres</label>
                            <input type="text" class="form-control" name="nombres" id="nombres" value="<?php echo $usuario['nom_usuario'];?>">
                            <span id="alertaNombre"></span>
                        </div>
                
                        <div class="input-group input-group-static mb-4"id="apellidosDiv">
                            <label>Apellidos</label>
                            <input type="text" class="form-control" name="apellidos" id="apellidos" value="<?php echo $usuario['ape_usuario'];?>">
                            <span id="alertaApellido"></span>
                        </div>
                        <div class="input-group input-group-static mb-4"id="documentoNumeroDiv">
                            <label>Numero de documento</label>
                            <input type="text" class="form-control" name="documentoNumero" id="documentoNumero" value="<?php echo $usuario['doc_usuario']; ?>">
                            <span id="alertaDocumento"></span>
                        </div>
                   
                        <div class="input-group input-group-static mb-4"id="fechaNacimientoDiv">
                            <label>Fecha de Nacimiento</label>
                            <input type="date" class="form-control" name="fechaNacimiento" id="fechaNacimiento" value="<?php echo $usuario['fecha_usuar']; ?>">
                            <span id="alertaFecha"></span>
                        </div>

                </div>
            </div>
          </div>
         </div>  
            <div class="col-md mt-5">
                <label for="documento" class="label-documento"><i class="bi bi-camera-fill fa-3x" id="camara"></i><i class="bi bi-check-circle fa-3x input-invisible" id="check"></i>
                <br> <p1 id="mensajeDocumento">Sube una foto de tu documento de identidad, solo PNG o JPG</p1></label>
                <input type="file" class="input-invisible" name="documento" id="documento" accept="image/png, image/jpeg">
                <div id="alertaImagenDocumento"></div>
            </div>
         <div class="col-12 col-xl-12 mt-3">
          <div class="card card-plain h-100 centrar">
            <button type="submit" class="btn bg-gradient-success btn-lg">Verificate</button>
          </div>
         </div>
        </form>
        <?php }?>
    </div>
</div>
    <!--sweetalert2-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../../js/verificacion.js"></script>
<?php include_once("./template/footer.php"); ?>
