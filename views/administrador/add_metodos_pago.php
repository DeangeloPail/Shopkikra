<?php 
include_once("./template/head.php");
ob_start(); 
?>
<div class="container-fluid px-2 px-md-4 mt-5">
    <div class="card card-body mx-3 mx-md-4 mt-n6">
        <form action="../../sql/agregar/metodoPago.php" method="POST" id="formulario" enctype="multipart/form-data">
         <div class="row">
          <div class="row">
            <div class="col-12 col-xl-12">
                <div class="card card-plain h-100 needs-validation" novalidate>

                        <div class="input-group input-group-static mb-4">
                            <label>Banco</label>
                            <input type="text" class="form-control" autocomplete="off" required  name="Banco" id="Banco">
                        </div>

                        <div class="input-group input-group-static mb-4">
                            <label>Propietario</label>
                            <input type="text" class="form-control" autocomplete="off" required name="Propietario" id="Propietario">
                        </div>

                        <div class="input-group input-group-static mb-4">
                            <label>Documento</label>
                            <input type="text" class="form-control" autocomplete="off"  name="Documento" id="Documento">
                        </div>

                        <div class="input-group input-group-static mb-4">
                            <label>Correo</label>
                            <input type="email" class="form-control" autocomplete="off"  name="Correo" id="Correo" pattern=".+.com">
                        </div>

                        <div class="input-group input-group-static mb-4">
                            <label>Numero de Cuenta</label>
                            <input type="text" class="form-control" autocomplete="off"  name="Cuenta" id="Cuenta">
                        </div>

                        <div class="input-group input-group-static mb-4">
                            <label>Tipo de Cuenta</label>
                            <input type="text" class="form-control" autocomplete="off"  name="TipCuenta" id="TipCuenta">
                        </div>
                
                        
                        <div class="input-group input-group-static mb-4">
                            <label>Telefono</label>
                            <input type="text" class="form-control" autocomplete="off"  name="Telefono" id="Telefono">
                        </div>
                   
                        

                </div>
            </div>
          </div>
         </div>  
         <div class="col-12 col-xl-12 mt-3">
          <div class="card card-plain h-100 centrar">
            <button type="submit" class="btn bg-gradient-success btn-lg">Verificate</button>
          </div>
         </div>
        </form>
    </div>
</div>
<?php include_once("./template/footer.php"); ?>