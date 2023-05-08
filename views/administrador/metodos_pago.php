<?php 
include_once("./template/head.php"); 
include_once("../../sql/vistas/metodos_pago.php"); 
ob_start(); 
$url="../../images/profiles/";
?><div class="container-fluid py-4">
<div class="row">
<div class="col-12">
    <div class="card my-4">
    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
        <h6 class="text-white text-capitalize ps-3">Metodos de pago</h6>
        </div>
    </div>
    <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
        <a type="button" class="btn btn-info mx-5" href="add_metodos_pago.php">Agregar metodo de pago</a>
        <table class="table align-items-center mb-0">
            <thead>
            <tr>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Numero de Cuenta</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Banco</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Telefono</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Documento</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tipo de Cuenta</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Correo</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Propietario</th>
            </tr>
            </thead>
            <tbody>
            <?php while($metodos=mysqli_fetch_assoc($result)){?>
            <tr>
                <td>
                  <p class="text-xxs font-weight-bold mb-0"><?php echo $metodos['numero_cuenta']; ?></p>
                </td>
                <td>
                  <p class="text-xxs font-weight-bold mb-0"><?php echo $metodos['banco'];?></p>
                </td>
                <td class="align-middle text-center text-sm">
                  <p class="text-xxs font-weight-bold mb-0"><?php echo $metodos['num_telefono'];?></p>
                </td>
                <td class="align-middle text-center">
                  <p class="text-xxs font-weight-bold mb-0"><?php echo $metodos['doc_identidad'];?></p>
                </td>
                <td class="align-middle text-center">
                  <p class="text-xxs font-weight-bold mb-0"><?php echo $metodos['tip_cuenta'];?></p>
                </td>
                <td class="align-middle text-center">
                  <p class="text-xxs font-weight-bold mb-0"><?php echo $metodos['correo_electro'];?></p>
                </td>
                <td class="align-middle text-center">
                  <p class="text-xxs font-weight-bold mb-0"><?php echo $metodos['nom_propietario'];?></p>
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
<?php include_once("./template/footer.php"); ?>
