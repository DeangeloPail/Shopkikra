<?php
session_start();
if(!isset($_SESSION['usuarioPlata'])){
  session_start();
  session_destroy();
  header("location: ../login.html");
}else{
  if($_SESSION['usuarioPlata']="ok"){
      $nombreUsuario=$_SESSION["nombreUsuario"];
  }
}
echo"$nombreUsuario";
?>