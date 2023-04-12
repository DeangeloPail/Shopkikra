<?php 
include_once("./template/head.php"); 
include("../../db/database.php");
ob_start(); 
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
    where `perfil_usua`= '$nombreUsuario';";
    $result=mysqli_query($conexion, $sql);
    $perfil="../../images/profiles/";
    $urlVolver="../../views/usuario1/perfil.php";
    $url="http://".$_SERVER['HTTP_HOST']."/Shopkikra/register.php?codReferido=".base64_encode($nombreUsuario)."";
?>

<div class="container-fluid px-2 px-md-4 mt-5">
      <div class="card card-body mx-3 mx-md-4 mt-n6">
      <?php while($usuario=mysqli_fetch_assoc($result)){?>
        <div class="row gx-4 mb-2">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img src="<?php echo $perfil.$usuario['foto_usuari']; ?>" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                <?php echo $usuario['perfil_usua']; ?>
              </h5>
              <p class="mb-0 font-weight-normal text-sm">
              <?php echo $usuario['nom_usuario']; echo " "; echo $usuario['ape_usuario'];?>
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                data-bs-idu="<?php echo $usuario['cod_usuario']; ?>" 
                  data-bs-per="<?php echo $usuario['perfil_usua']; ?>"
                  data-bs-fot="<?php echo $usuario['foto_usuari']; ?>"
                  data-bs-nom="<?php echo $usuario['nom_usuario']; echo " "; echo $usuario['ape_usuario'];?>"
                  data-bs-doc="<?php echo $usuario['doc_usuario']; ?>"
                  data-bs-fec="<?php echo $usuario['fecha_usuar']; ?>"
                  data-bs-pai="<?php echo $usuario['nombre_pais']; ?>"
                  data-bs-tel="<?php echo $usuario['pais_usuari']; echo " "; echo $usuario['telefon_usu'];?>"
                  data-bs-ref="<?php echo $usuario['referido_usu'];?>"
                  data-bs-niv="<?php echo $usuario['nombre_nivl'];?>"
                  data-bs-ver="<?php echo $usuario['tip_verific'];?>"
                  data-bs-act="<?php echo $usuario['tip_estatus'];?>"
                  data-bs-cor="<?php echo $usuario['correo_usua'];echo $usuario['tip_termina'];?>">
                <i class="material-icons text-lg position-relative">settings</i>
                <span class="ms-1">Editar Perfil</span>
              </button>
            </div>
          </div>
        </div>        
        <div class="row">
          <div class="row">
            <div class="col-12 col-xl-8">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <h6 class="mb-0">Datos de Usuario</h6>
                </div>
                <div class="card-body p-3">
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">Datos</h6>
                  <ul class="list-group">
                    <li class="list-group-item border-0 px-0">
                        <div class="d-flex flex-column justify-content-center">
                            
                            <h6 class="mb-0 text-sm">Nombre: <?php echo $usuario['nom_usuario']; echo " "; echo $usuario['ape_usuario']; ?></h6>
                        </div>
                    </li>
                    <li class="list-group-item border-0 px-0">
                      <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Usuario: <?php echo $usuario['perfil_usua'];?></h6>
                      </div>
                    </li>
                    <li class="list-group-item border-0 px-0">
                      <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Fecha de nacimineto: <?php echo $usuario['fecha_usuar']; ?></h6>
                      </div>
                    </li>
                    <li class="list-group-item border-0 px-0">
                      <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Pais de origen: <?php echo $usuario['nombre_pais']; ?></h6>
                      </div>
                    </li>
                    <li class="list-group-item border-0 px-0">
                      <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Numero de telefono: <?php echo $usuario['pais_usuari']; echo " "; echo $usuario['telefon_usu']; ?></h6>
                      </div>
                    </li>
                    <li class="list-group-item border-0 px-0">
                      <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Correo electronico: <?php echo $usuario['correo_usua'];echo $usuario['tip_termina']; ?></h6>
                      </div>
                    </li>
                    <li class="list-group-item border-0 px-0">
                      <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Nivel de Usurio: <?php echo $usuario['nombre_nivl']; ?></h6>
                      </div>
                    </li>
                    <li class="list-group-item border-0 px-0">
                      <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Verificacion: <?php echo $usuario['tip_verific']; ?></h6>
                      </div>
                    </li>
                    <li>
                      <div class="input-group px-auto mx-auto">
                        <h6 class="mb-0 text-sm">Enlace de referido</h6>
                        <input type="text" class="form-control" readonly id="enlace" value="<?php echo $url;?>">
                        <button onclick="copiarAlPortapeles();" class="btn btn-outline-success" type="button"><i class="bi bi-clipboard"></i></button>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <?php }?>
            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <h6 class="mb-0">Conversations</h6>
                </div>
                <div class="card-body p-3">
                  <ul class="list-group">
                    <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2 pt-0">
                      <div class="avatar me-3">
                        <img src="../assets/img/kal-visuals-square.jpg" alt="kal" class="border-radius-lg shadow">
                      </div>
                      <div class="d-flex align-items-start flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Sophie B.</h6>
                        <p class="mb-0 text-xs">Hi! I need more information..</p>
                      </div>
                      <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto" href="javascript:;">Reply</a>
                    </li>
                    <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                      <div class="avatar me-3">
                        <img src="../assets/img/marie.jpg" alt="kal" class="border-radius-lg shadow">
                      </div>
                      <div class="d-flex align-items-start flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Anne Marie</h6>
                        <p class="mb-0 text-xs">Awesome work, can you..</p>
                      </div>
                      <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto" href="javascript:;">Reply</a>
                    </li>
                    <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                      <div class="avatar me-3">
                        <img src="../assets/img/ivana-square.jpg" alt="kal" class="border-radius-lg shadow">
                      </div>
                      <div class="d-flex align-items-start flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Ivanna</h6>
                        <p class="mb-0 text-xs">About files I can..</p>
                      </div>
                      <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto" href="javascript:;">Reply</a>
                    </li>
                    <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                      <div class="avatar me-3">
                        <img src="../assets/img/team-4.jpg" alt="kal" class="border-radius-lg shadow">
                      </div>
                      <div class="d-flex align-items-start flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Peterson</h6>
                        <p class="mb-0 text-xs">Have a great afternoon..</p>
                      </div>
                      <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto" href="javascript:;">Reply</a>
                    </li>
                    <li class="list-group-item border-0 d-flex align-items-center px-0">
                      <div class="avatar me-3">
                        <img src="../assets/img/team-3.jpg" alt="kal" class="border-radius-lg shadow">
                      </div>
                      <div class="d-flex align-items-start flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Nick Daniel</h6>
                        <p class="mb-0 text-xs">Hi! I need more information..</p>
                      </div>
                      <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto" href="javascript:;">Reply</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>        
        </div>
        <div class="modal-body">

          <form action="../../sql/modificar/editar_perfil.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" id="idUsuario" name="idUsuario">
            <input type="hidden" name="url" value="<?php echo "$urlVolver"?>">

            <img class="foto" width="100" height="100" class="avatar avatar-sm me-3" alt="xd">
            
            <div class="input-group input-group-static mb-4">
              <label for="imagen"> cambiar foto de perfil:</label>
              <input type="file" class="form-control" id="imagen" name="imagen">
            </div>

            <div class="input-group input-group-static mb-4">
              <label for="usuario">Usuario:</label>
              <input type="text" readonly class="form-control" id="usuario">
            </div>

            <div class="input-group input-group-static mb-4">
              <label for="nombre">Nombre:</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
            </div>

            <div class="input-group input-group-static mb-4">
              <label for="documento">documento:</label>
              <input type="text" class="form-control" id="documento" name="documento" placeholder="documento">
            </div>

            <div class="input-group input-group-static mb-4">
              <label for="fecha">fecha:</label>
              <input type="date" class="form-control" id="fecha" name="fecha" placeholder="fecha">
            </div>

            <div class="input-group input-group-static mb-4">
              <label for="pais">Pais:</label>
              <input type="text" readonly class="form-control" id="pais">
            </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-success" value="Guardar" name="Guardar"><i class="bi bi-person-check"></i> Editar Perfil</button>
        </div>
        </form>
      </div>
    </div>
</div>
<script src="../../js/editar_usuario.js"></script>
<script>
    function copiarAlPortapeles() {
        let texto = document.getElementById('enlace');
        texto.select();
        texto.setSelectionRange(0,99999);
        document.execCommand('copy');
    }
</script>
<?php include_once("./template/footer.php"); ?>
