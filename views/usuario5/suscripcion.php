<?php 
include_once("./template/head.php"); 
include("../../db/database.php");
ob_start(); 
include("../../sql/vistas/metodos_pago.php");
$sqlSuscripcion="SELECT `codigo_nivl`,`nombre_nivl` FROM `niveles_usuario` 
where`codigo_nivl`> 2 and `codigo_nivl` < 6;";
$resulSuscripcion=mysqli_query($conexion, $sqlSuscripcion);
?>
<div class="container-fluid px-2 px-md-4 mt-5">
    <div class="card card-body mx-3 mx-md-4 mt-n6">
        <form action="../../sql/agregar/suscripcion.php" method="POST" id="formulario" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-6 mb-6">
                <div class="card card-plain h-100 needs-validation" novalidate>

                        <input type="hidden" disabled  readonly class="form-control" value="<?php echo $IDUsuario?>"  name="usuarioId" id="usuarioId">

                        <div class="input-group input-group-static mb-4">
                            <label>Usuario</label>
                            <input type="text" disabled readonly class="form-control" value="<?php echo $nombreUsuario?>">
                        </div>

                        <div class="input-group input-group-static mb-4">
                            <label>Metodo de pago</label>
                            <select class="form-control" name="metodoPago" id="metodoPago">
                                <option selected disabled>Seleccione metod de pago</option>
                                <?php while($metodos=mysqli_fetch_assoc($result)){?>
                                    <option value="<?php echo $metodos['id_met_pago'];?>"><?php echo $metodos['banco'];?> - "<?php echo $metodos['nom_propietario'];?>"</option>
                                <?php }?>
                            </select>
                            <span id="alertaMetodo"></span>
                        </div>

                        <div class="input-group input-group-static mb-4">
                            <label>Suscripcion</label>
                            <select class="form-control" name="suscripcion" id="suscripcion">
                                <option selected disabled>Nivel Bronce</option>
                                <?php while($suscripcion=mysqli_fetch_assoc($resulSuscripcion)){?>
                                    <option value="<?php echo $suscripcion['codigo_nivl'];?>"><?php echo $suscripcion['nombre_nivl'];?></option>
                                <?php }?>
                            </select>  
                            <span id="alertaSuscripcion"></span>  
                        </div>

                        <div class="input-group input-group-static mb-4">
                            <label>Fecha emision</label>
                            <input type="date" class="form-control" autocomplete="off"  name="fechaEmision" id="fechaEmision">
                            <span id="alertaFecha"></span>
                        </div>

                        <div class="input-group input-group-static mb-4">
                            <label>Codigo referencia</label>
                            <input type="text" class="form-control" autocomplete="off"  name="referencia" id="referencia">
                            <span id="alertaReferencia"></span>
                        </div>
                </div>
            </div>
            <div id="cuentaMonto" class="col-md-6 mb-6 input-invisible">
                <div class="card bg-gradient-dark shadow-lg my-3">
                    <div class="card-body text-lg-start text-start pt-0 my-2 text-xs">
                        
                        <div class="d-flex justify-content-lg-start justify-content-center p-2">
                        <span class="ps-3 text-white">Nombre del Propietario:</span>
                        <p class="ps-3 text-white text-xs" id="nomPropietario"></p>
                        </div>

                        <div class="d-flex justify-content-lg-start justify-content-center p-2">
                        <span class="ps-3 text-white">Banco:</span>
                        <p class="ps-3 text-white text-xs" id="banco"></p>
                        </div>
                
                        <div class="d-flex justify-content-lg-start justify-content-center p-2">
                        <span class="ps-3 text-white">Cuenta:</span>
                        <p class="ps-3 text-white text-xs" id="numCuenta"></p>
                        </div>

                        <div class="d-flex justify-content-lg-start justify-content-center p-2">
                        <span class="ps-3 text-white">Numero de Telefono:</span>
                        <p class="ps-3 text-white text-xs" id="telefono"></p>
                        </div>

                        <div class="d-flex justify-content-lg-start justify-content-center p-2">
                        <span class="ps-3 text-white">Documento de identidad:</span>
                        <p class="ps-3 text-white text-xs" id="documento"></p>
                        </div>

                        <div class="d-flex justify-content-lg-start justify-content-center p-2">
                        <span class="ps-3 text-white">Tipo de Cuenta</span>
                        <p class="ps-3 text-white text-xs" id="tpCuenta"></p>
                        </div>

                        <div class="d-flex justify-content-lg-start justify-content-center p-2">
                        <span class="ps-3 text-white">Correo:</span>
                        <p class="ps-3 text-white text-xs" id="correo"></p>
                        </div>

                        <div class="d-flex justify-content-lg-start justify-content-center p-2">
                        <span class="ps-3 text-white">Monto a cancelar:</span>
                        <p class="ps-3 text-white text-xs" id="monto"></p>
                        </div>
                    </div>
                </div>
            </div>
          </div> 
        <div class="col-md mt-5">
            <label for="capture" class="label-documento"><i class="bi bi-camera-fill fa-3x" id="camara"></i>
            <i class="bi bi-check-circle fa-3x input-invisible" id="check"></i>
            <i class="bi bi-x-circle fa-3x input-invisible" id="cancel"></i>
            <br> <p1 id="mensajeDocumento">Sube la capture de la Transacción, solo PNG o JPG</p1></label>
            <input type="file" class="input-invisible" name="capture" id="capture" accept="image/png, image/jpeg">
            <div id="alertaCapture"></div>
        </div>
         <div class="col-12 col-xl-12 mt-3">
          <div class="card card-plain h-100 centrar">
            <button type="submit" class="btn bg-gradient-success btn-lg">Suscribirce</button>
          </div>
         </div>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../../js/suscripcion.js"></script>
<?php include_once("./template/footer.php"); ?>
