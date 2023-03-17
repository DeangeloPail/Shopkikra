<?php 
include_once("./template/head.php"); 
ob_start(); 
$url="http://".$_SERVER['HTTP_HOST']."/Shopkikra/register.php?codReferido=".base64_encode($nombreUsuario)."";
?>
<div class="input-group px-auto mx-auto">
  <input type="text" class="form-control" readonly id="enlace" value="<?php echo $url;?>">
  <button onclick="copiarAlPortapeles();" class="btn btn-outline-success" type="button"><i class="bi bi-clipboard"></i></button>
</div>


<script>
    function copiarAlPortapeles() {
        let texto = document.getElementById('enlace');
        texto.select();
        texto.setSelectionRange(0,99999);
        document.execCommand('copy');
    }
</script>
<?php include_once("./template/footer.php"); ?>
