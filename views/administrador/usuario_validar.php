<?php 
include_once("./template/head.php"); 
include_once("../../sql/vistas/usuario_novali.php"); 
ob_start(); 
$url="../../images/profiles/";
 include("../../sql/vistas/usuario_novali.php");
?>
<div class="row">
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-header p-3 pt-2">
        <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
          <i class="material-icons opacity-10">weekend</i>
        </div>
        <div class="text-end pt-1">
          <p class="text-sm mb-0 text-capitalize">Today's Money</p>
          <h4 class="mb-0">$53k</h4>
        </div>
      </div>
      <hr class="dark horizontal my-0">
      <div class="card-footer p-3">
        <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-header p-3 pt-2">
        <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
          <i class="material-icons opacity-10">person</i>
        </div>
        <div class="text-end pt-1">
          <p class="text-sm mb-0 text-capitalize">Today's Users</p>
          <h4 class="mb-0">2,300</h4>
        </div>
      </div>
      <hr class="dark horizontal my-0">
      <div class="card-footer p-3">
        <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-header p-3 pt-2">
        <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
          <i class="material-icons opacity-10">person</i>
        </div>
        <div class="text-end pt-1">
          <p class="text-sm mb-0 text-capitalize">New Clients</p>
          <h4 class="mb-0">3,462</h4>
        </div>
      </div>
      <hr class="dark horizontal my-0">
      <div class="card-footer p-3">
        <p class="mb-0"><span class="text-danger text-sm font-weight-bolder">-2%</span> than yesterday</p>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6">
    <div class="card">
      <div class="card-header p-3 pt-2">
        <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
          <i class="material-icons opacity-10">weekend</i>
        </div>
        <div class="text-end pt-1">
          <p class="text-sm mb-0 text-capitalize">Sales</p>
          <h4 class="mb-0">$103,430</h4>
        </div>
      </div>
      <hr class="dark horizontal my-0">
      <div class="card-footer p-3">
        <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+5% </span>than yesterday</p>
      </div>
    </div>
  </div>
      </div>
      <div class="row mt-4">
  <div class="col-lg-4 col-md-6 mt-4 mb-4">
    <div class="card z-index-2 ">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
        <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
          <div class="chart">
            <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
          </div>
        </div>
      </div>
      <div class="card-body">
        <h6 class="mb-0 ">Website Views</h6>
        <p class="text-sm ">Last Campaign Performance</p>
        <hr class="dark horizontal">
        <div class="d-flex ">
          <i class="material-icons text-sm my-auto me-1">schedule</i>
          <p class="mb-0 text-sm"> campaign sent 2 days ago </p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-6 mt-4 mb-4">
    <div class="card z-index-2  ">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
        <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
          <div class="chart">
            <canvas id="chart-line" class="chart-canvas" height="170"></canvas>
          </div>
        </div>
      </div>
      <div class="card-body">
        <h6 class="mb-0 "> Daily Sales </h6>
        <p class="text-sm "> (<span class="font-weight-bolder">+15%</span>) increase in today sales. </p>
        <hr class="dark horizontal">
        <div class="d-flex ">
          <i class="material-icons text-sm my-auto me-1">schedule</i>
          <p class="mb-0 text-sm"> updated 4 min ago </p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 mt-4 mb-3">
    <div class="card z-index-2 ">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
        <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
          <div class="chart">
            <canvas id="chart-line-tasks" class="chart-canvas" height="170"></canvas>
          </div>
        </div>
      </div>
      <div class="card-body">
        <h6 class="mb-0 ">Completed Tasks</h6>
        <p class="text-sm ">Last Campaign Performance</p>
        <hr class="dark horizontal">
        <div class="d-flex ">
          <i class="material-icons text-sm my-auto me-1">schedule</i>
          <p class="mb-0 text-sm">just updated</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row mt-4">
  <div class="col-lg-12 mt-1 mb-2">
    <div class="card">
      <div class="card-header pb-0">
        <div class="row">
          <div class="col-lg-6 col-7">
            <h6>Usuarios Sin Verificar</h6>
            <p class="text-sm mb-0">
              <i class="bi bi-x-lg" aria-hidden="true"></i>
              <span class="font-weight-bold ms-1"><?php echo ("$contadorNo");?> Usuarios</span> sin Verificar
            </p>
          </div>
        </div>
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Usuarios</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre de los usuarios</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
              </tr>
            </thead>
            <tbody>
              <?php while($usuario=mysqli_fetch_assoc($result)){?>
                <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div>
                      <img src="<?php echo $url.$usuario['foto_usuari']; ?>" class="avatar avatar-sm me-3" alt="xd">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm"><?php echo $usuario['perfil_usua']; ?></h6>
                    </div>
                  </div>
                </td>
                <td class="mb-0 text-sm">
                  <span class="text-xs font-weight-bold"><?php echo $usuario['nom_usuario']; echo " "; echo $usuario['ape_usuario'];?></span>
                </td>
                  
                <td>
                <button type="button" class="btn btn-success" 
                  data-bs-toggle="modal" data-bs-target="#exampleModal"
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
                  data-bs-cor="<?php echo $usuario['correo_usua'];echo $usuario['tip_termina'];?>"
                  
                  ><i class="bi bi-person-badge mx-1"></i> Ver mas</button>
                </td>
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
<script src="../../js/modal.js"></script>
<?php include_once("./template/footer.php"); ?>
