<?php
include("../../db/database.php");
ob_start();
if (isset($_POST['metodoPago'])) {
  $metodoPago = $_POST['metodoPago'];
  $sqlPago = "SELECT `numero_cuenta`,`banco`,`num_telefono`,`doc_identidad`,
        `tip_cuenta`,`correo_electro`,`nom_propietario` FROM `metodos_pago`WHERE `id_met_pago`='$metodoPago'";
  $resultPago = mysqli_query($conexion, $sqlPago);

  // Crear un array para almacenar los datos  
  $metodo = array();

  // Recorrer los resultados y agregarlos al array
  while ($fila = mysqli_fetch_assoc($resultPago)) {
    $metodo[] = $fila;
  }
  // Imprimir el array
  echo json_encode($metodo);
}
if(isset($_POST['suscripcion'])){
    $suscripcion = $_POST['suscripcion'];
    
    $sqlSuscripcion="SELECT `valor_nivel` FROM `niveles_usuario`WHERE `codigo_nivl`='$suscripcion';";
    $resultSuscripcion = mysqli_query($conexion, $sqlSuscripcion);

    // Crear un array para almacenar los datos  
    $suscripcion = array();

    // Recorrer los resultados y agregarlos al array
    while ($fila = mysqli_fetch_assoc($resultSuscripcion)) {
        $suscripcion[] = $fila;
    }
    // Imprimir el array
    echo json_encode($suscripcion);
}
?>
