<?php
session_start();
if(!isset($_SESSION['usuarioOro'])){
  session_start();
  session_destroy();
  header("location: ../login.html");
}else{
  if($_SESSION['usuarioOro']="ok"){
      $nombreUsuario=$_SESSION["nombreUsuario"];
  }
}
echo"$nombreUsuario";
?>