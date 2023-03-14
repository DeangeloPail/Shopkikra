<?php
session_start();
if(!isset($_SESSION['usuarioFree'])){
  session_start();
  session_destroy();
  header("location: ../login.html");
}else{
  if($_SESSION['usuarioFree']="ok"){
      $nombreUsuario=$_SESSION["nombreUsuario"];
  }
}
echo"$nombreUsuario, usuario gratis" ;
?>