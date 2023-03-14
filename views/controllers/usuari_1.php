<?php
session_start();
if(!isset($_SESSION['usuarioBronce'])){
  session_start();
  session_destroy();
  header("location: ../login.html");
}else{
  if($_SESSION['usuarioBronce']="ok"){
      $nombreUsuario=$_SESSION["nombreUsuario"];
  }
}
echo"$nombreUsuario";

?>
