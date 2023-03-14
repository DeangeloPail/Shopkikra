<?php 
include_once("./template/head.php"); 
include_once("../../sql/vistas/usuario_novali.php"); 
ob_start(); 
?>
<div class="table-responsive">
  <table class="table mx-5 my-5">
    <thead>
      <tr>
        <th scope="col">Usuario</th>
        <th scope="col">Foto De Perfil</th>
        <th scope="col">Nombre</th>
        <th scope="col">Documento</th>
        <th scope="col">Fecha Nacimiento</th>
        <th scope="col">Pais de Origen</th>
        <th scope="col">Telefono</th>
        <th scope="col">Referido por</th>
        <th scope="col">Nivel</th>
        <th scope="col">verificacion</th>
        <th scope="col">Actividad</th>
        <th scope="col">Correo</th>
        <th scope="col">accion</th>
      </tr>
    </thead>
    <tbody>
        <?php while($usuario=mysqli_fetch_assoc($result)){?>
          <tr>
          <td><?php echo $usuario['perfil_usua']; ?></td>
          <td><?php echo $usuario['foto_usuari']; ?></td>
          <td><?php echo $usuario['nom_usuario']; echo " "; echo $usuario['ape_usuario'];?> </td>
          <td><?php echo $usuario['doc_usuario']; ?></td>
          <td><?php echo $usuario['fecha_usuar']; ?></td>
          <td><?php echo $usuario['nombre_pais']; ?></td>
          <td><?php echo $usuario['pais_usuari']; echo " "; echo $usuario['telefon_usu'];?></td>
          <td><?php echo $usuario['referido_usu'];?></td>
          <td><?php echo $usuario['nombre_nivl'];?></td>
          <td><?php echo $usuario['tip_verific'];?></td>
          <td><?php echo $usuario['tip_estatus'];?></td>
          <td><?php echo $usuario['correo_usua'];echo $usuario['tip_termina'];?></td>
          <td>
          <button type="button" class="btn btn-primary" 
          data-bs-toggle="modal" data-bs-target="#exampleModal" 
          data-bs-per="<?php echo $usuario['perfil_usua']; ?>"
          data-bs-fot="<?php echo $usuario['foto_usuari']; ?>"
          data-bs-nom="<?php echo $usuario['nom_usuario']; echo " "; echo $usuario['ape_usuario'];?> "
          data-bs-doc="<?php echo $usuario['doc_usuario']; ?>"
          data-bs-fec="<?php echo $usuario['fecha_usuar']; ?>"
          data-bs-pai="<?php echo $usuario['nombre_pais']; ?>"
          data-bs-tel="<?php echo $usuario['pais_usuari']; echo " "; echo $usuario['telefon_usu'];?>"
          data-bs-ref="<?php echo $usuario['referido_usu'];?>"
          data-bs-niv="<?php echo $usuario['nombre_nivl'];?>"
          data-bs-ver="<?php echo $usuario['tip_verific'];?>"
          data-bs-act="<?php echo $usuario['tip_estatus'];?>"
          data-bs-cor="<?php echo $usuario['correo_usua'];echo $usuario['tip_termina'];?>"
          
          >Open modal for @mdo</button>
          </td>
          </tr>
        <?php }?>
    </tbody>
  </table>
</div>


<!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="usuario" class="col-form-label">usuario:</label>
              <input type="text" class="form-control" id="usuario">
            </div>
            <div class="mb-3">
            <label for="foto" class="col-form-label">foto:</label>
              <input type="text" class="form-control" id="foto">
            </div>
            <div class="mb-3">
            <label for="nombre" class="col-form-label">nombre:</label>
              <input type="text" class="form-control" id="nombre">
            </div>
            <div class="mb-3">
            <label for="documento" class="col-form-label">documento:</label>
              <input type="text" class="form-control" id="documento">
            </div>
            <div class="mb-3">
            <label for="fecha" class="col-form-label">fecha:</label>
              <input type="text" class="form-control" id="fecha">
            </div>
            <div class="mb-3">
            <label for="pais" class="col-form-label">pais:</label>
              <input type="text" class="form-control" id="pais">
            </div>
            <div class="mb-3">
            <label for="telefono" class="col-form-label">telefono:</label>
              <input type="text" class="form-control" id="telefono">
            </div>
            <div class="mb-3">
            <label for="referido" class="col-form-label">referido:</label>
              <input type="text" class="form-control" id="referido">
            </div>
            <div class="mb-3">
            <label for="nivel" class="col-form-label">nivel:</label>
              <input type="text" class="form-control" id="nivel">
            </div>
            <div class="mb-3">
            <label for="verificaion" class="col-form-label">verificaion:</label>
              <input type="text" class="form-control" id="verificaion">
            </div>
            <div class="mb-3">
            <label for="actividad" class="col-form-label">actividad:</label>
              <input type="text" class="form-control" id="actividad">
            </div>
            <div class="mb-3">
            <label for="correo" class="col-form-label">correo:</label>
              <input type="text" class="form-control" id="correo">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Send message</button>
        </div>
      </div>
    </div>
  </div>



<?php include_once("./template/footer.php"); ?>
