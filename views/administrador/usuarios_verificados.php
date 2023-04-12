<?php 
include_once("./template/head.php"); 
include_once("../../sql/vistas/usuario_validados.php"); 
ob_start(); 
$url="../../images/profiles/";
?><div class="container-fluid py-4">
<div class="row">
<div class="col-12">
    <div class="card my-4">
    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
        <h6 class="text-white text-capitalize ps-3">Authors table</h6>
        </div>
    </div>
    <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
        <table class="table align-items-center mb-0">
            <thead>
            <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Persona</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Usuario</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha de Nacimiento</th>
                <th class="text-secondary opacity-7"></th>
            </tr>
            </thead>
            <tbody>
            <?php while($usuario=mysqli_fetch_assoc($result)){?>
            <tr>
                <td>
                <div class="d-flex px-2 py-1">
                    <div>
                    <img src="<?php echo $url.$usuario['foto_usuari']; ?>" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                    <h6 class="mb-0 text-sm"><?php echo $usuario['nom_usuario']; echo " "; echo $usuario['ape_usuario'];?></h6>
                    <p class="text-xs text-secondary mb-0"><?php echo $usuario['correo_usua'];echo $usuario['tip_termina'];?></p>
                    </div>
                </div>
                </td>
                <td>
                <p class="text-xs font-weight-bold mb-0"><?php echo $usuario['perfil_usua']; ?></p>
                <p class="text-xs text-secondary mb-0"><?php echo $usuario['tip_estatus'];?></p>
                </td>
                <td class="align-middle text-center text-sm">
                <span class="badge badge-sm bg-gradient-success"><?php echo $usuario['tip_verific'];?></span>
                </td>
                <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold"><?php echo $usuario['fecha_usuar']; ?></span>
                </td>
                <!--
                <td class="align-middle">
                <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                </a>
                </td>-->
            </tr>
            <?php }?>

            </tbody>
        </table>
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
          <form action="../../sql/modificar/verificarUsuario.php" method="POST">
            <input type="hidden" id="idUsuario" name="idUsuario">
            <div class="mb-3">
              <label for="usuario" class="col-form-label">usuario:</label>
              <p class="usuario"></p>
            </div>
            <div class="mb-3">
            <label for="foto" class="col-form-label">foto:</label>
               <img class="foto" width="100" height="100">
            </div>
            <div class="mb-3">
            <label for="nombre" class="col-form-label">nombre:</label>
              <p type="text" class="nombre">
            </div>
            <div class="mb-3">
            <label for="documento" class="col-form-label">documento:</label>
              <p type="text" class="documento">
            </div>
            <div class="mb-3">
            <label for="fecha" class="col-form-label">fecha:</label>
              <p type="text" class="fecha">
            </div>
            <div class="mb-3">
            <label for="pais" class="col-form-label">pais:</label>
              <p type="text" class="pais">
            </div>
            <div class="mb-3">
            <label for="telefono" class="col-form-label">telefono:</label>
              <p type="text" class="telefono">
            </div>
            <div class="mb-3">
            <label for="referido" class="col-form-label">referido:</label>
              <p type="text" class="referido">
            </div>
            <div class="mb-3">
            <label for="nivel" class="col-form-label">nivel:</label>
              <p type="text" class="nivel">
            </div>
            <div class="mb-3">
            <label for="verificaion" class="col-form-label">verificaion:</label>
              <p type="text" class="verificaion">
            </div>
            <div class="mb-3">
            <label for="actividad" class="col-form-label">actividad:</label>
              <p type="text" class="actividad">
            </div>
            <div class="mb-3">
            <label for="correo" class="col-form-label">correo:</label>
              <p type="text" class="correo">
            </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-success"><i class="bi bi-person-check"></i> Verificar Usuario</button>
        </div>
        </form>
      </div>
    </div>
</div>
<?php include_once("./template/footer.php"); ?>
