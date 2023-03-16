<?php 
include_once("./template/head.php"); 
ob_start(); 
$url="http://".$_SERVER['HTTP_HOST']."/Shopkikra/register.php?codReferido=".base64_encode($nombreUsuario)."";
?>
<a href="<?php echo $url;?>"><?php echo $url;?></a>
<?php include_once("./template/footer.php"); ?>
