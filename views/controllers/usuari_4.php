<?php
session_start();
if(!isset($_SESSION['usuarioDiamante'])){
  session_start();
  session_destroy();
  header("location: ../login.html");
}else{
  if($_SESSION['usuarioDiamante']="ok"){
      $nombreUsuario=$_SESSION["nombreUsuario"];
  }
}
echo"$nombreUsuario";
?>