<?php include "verifica.php";
$id = "";
if(isset($_GET['id'])){
if(empty($_GET['id'])){
header("Location: shop.php");
}else{
$id = $_GET['id'];
    }
}
$shop->editar();
$editaShop = $shop->rsDados($id);
?>
<!DOCTYPE html>
<html dir="ltr" lang="pt-br">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="Alexandre Pereira">
<link rel="icon" type="image/png" sizes="16x16" href="assets/images/hoogli_logo.svg">
<title>Painel Hoogli - Adicionar shop</title>
<link href="dist/css/style.min.css" rel="stylesheet">
</head>
<body>
<div class="preloader">
<div class="lds-ripple">
<div class="lds-pos"></div>
<div class="lds-pos"></div>
</div>
</div>
<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
<?php include "header.php"; ?>
<?php include "inc-menu-lateral.php"; ?>
<div class="page-wrapper">
<div class="page-breadcrumb">
<div class="row">
<div class="col-7 align-self-center">
<h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Adicionar shop</h4>
<div class="d-flex align-items-center">
<nav aria-label="breadcrumb">
<ol class="breadcrumb m-0 p-0">
<li class="breadcrumb-item"><a href="." class="text-muted">Home</a></li>
<li class="breadcrumb-item text-muted active" aria-current="page"><a href="shop.php" class="text-muted">shop</a></li>
</ol>
</nav>
</div>
</div>
<div class="col-5 align-self-center">
</div>
</div>
</div>
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
<form method="POST" enctype="multipart/form-data">
<div class="form-body">
<br>
<hr>
<h4 class="card-title">Section 1</h4>
<hr>
<br>
<div class="form-group row">
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 1 link 244</label>
<input type="text" class="form-control" name="section_1_link_244" value="<?php if(isset($editaShop->section_1_link_244) && !empty($editaShop->section_1_link_244)){ echo $editaShop->section_1_link_244;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 1 link alt 244</label>
<input type="text" class="form-control" name="section_1_link_alt_244" value="<?php if(isset($editaShop->section_1_link_alt_244) && !empty($editaShop->section_1_link_alt_244)){ echo $editaShop->section_1_link_alt_244;}?>" >
</div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 1 img 245 ()</label>
   <input type="file" class="form-control" name="section_1_img_245" >
</div>
 </div>
 <?php if(isset($editaShop->section_1_img_245) && !empty($editaShop->section_1_img_245)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaShop->section_1_img_245;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 1 image alt 245</label>
 <input type="text" class="form-control" name="section_1_image_alt_245" value="<?php if(isset($editaShop->section_1_image_alt_245) && !empty($editaShop->section_1_image_alt_245)){ echo $editaShop->section_1_image_alt_245;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 1 conteudo 247</label>
  <input type="text" class="form-control" name="section_1_conteudo_247" value="<?php if(isset($editaShop->section_1_conteudo_247) && !empty($editaShop->section_1_conteudo_247)){ echo $editaShop->section_1_conteudo_247;}?>" >
   </div>
  </div>
</div>
<br>
<hr>
<h4 class="card-title">Section 2</h4>
<hr>
<br>
<div class="form-group row">
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 2 link 250</label>
<input type="text" class="form-control" name="section_2_link_250" value="<?php if(isset($editaShop->section_2_link_250) && !empty($editaShop->section_2_link_250)){ echo $editaShop->section_2_link_250;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 2 link alt 250</label>
<input type="text" class="form-control" name="section_2_link_alt_250" value="<?php if(isset($editaShop->section_2_link_alt_250) && !empty($editaShop->section_2_link_alt_250)){ echo $editaShop->section_2_link_alt_250;}?>" >
</div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 2 img 251 ()</label>
   <input type="file" class="form-control" name="section_2_img_251" >
</div>
 </div>
 <?php if(isset($editaShop->section_2_img_251) && !empty($editaShop->section_2_img_251)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaShop->section_2_img_251;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 2 image alt 251</label>
 <input type="text" class="form-control" name="section_2_image_alt_251" value="<?php if(isset($editaShop->section_2_image_alt_251) && !empty($editaShop->section_2_image_alt_251)){ echo $editaShop->section_2_image_alt_251;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 2 conteudo 252</label>
  <input type="text" class="form-control" name="section_2_conteudo_252" value="<?php if(isset($editaShop->section_2_conteudo_252) && !empty($editaShop->section_2_conteudo_252)){ echo $editaShop->section_2_conteudo_252;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 2 conteudo 253</label>
  <input type="text" class="form-control" name="section_2_conteudo_253" value="<?php if(isset($editaShop->section_2_conteudo_253) && !empty($editaShop->section_2_conteudo_253)){ echo $editaShop->section_2_conteudo_253;}?>" >
   </div>
  </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 2 link 254</label>
<input type="text" class="form-control" name="section_2_link_254" value="<?php if(isset($editaShop->section_2_link_254) && !empty($editaShop->section_2_link_254)){ echo $editaShop->section_2_link_254;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 2 link alt 254</label>
<input type="text" class="form-control" name="section_2_link_alt_254" value="<?php if(isset($editaShop->section_2_link_alt_254) && !empty($editaShop->section_2_link_alt_254)){ echo $editaShop->section_2_link_alt_254;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 2 link conteudo 254</label>
 <input type="text" class="form-control" name="section_2_link_conteudo_254" value="<?php if(isset($editaShop->section_2_link_conteudo_254) && !empty($editaShop->section_2_link_conteudo_254)){ echo $editaShop->section_2_link_conteudo_254;}?>" >
 </div>
 </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 2 link 255</label>
<input type="text" class="form-control" name="section_2_link_255" value="<?php if(isset($editaShop->section_2_link_255) && !empty($editaShop->section_2_link_255)){ echo $editaShop->section_2_link_255;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 2 link alt 255</label>
<input type="text" class="form-control" name="section_2_link_alt_255" value="<?php if(isset($editaShop->section_2_link_alt_255) && !empty($editaShop->section_2_link_alt_255)){ echo $editaShop->section_2_link_alt_255;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 2 link conteudo 255</label>
 <input type="text" class="form-control" name="section_2_link_conteudo_255" value="<?php if(isset($editaShop->section_2_link_conteudo_255) && !empty($editaShop->section_2_link_conteudo_255)){ echo $editaShop->section_2_link_conteudo_255;}?>" >
 </div>
 </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 2 link 256</label>
<input type="text" class="form-control" name="section_2_link_256" value="<?php if(isset($editaShop->section_2_link_256) && !empty($editaShop->section_2_link_256)){ echo $editaShop->section_2_link_256;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 2 link alt 256</label>
<input type="text" class="form-control" name="section_2_link_alt_256" value="<?php if(isset($editaShop->section_2_link_alt_256) && !empty($editaShop->section_2_link_alt_256)){ echo $editaShop->section_2_link_alt_256;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 2 link conteudo 256</label>
 <input type="text" class="form-control" name="section_2_link_conteudo_256" value="<?php if(isset($editaShop->section_2_link_conteudo_256) && !empty($editaShop->section_2_link_conteudo_256)){ echo $editaShop->section_2_link_conteudo_256;}?>" >
 </div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 2 conteudo 257</label>
  <input type="text" class="form-control" name="section_2_conteudo_257" value="<?php if(isset($editaShop->section_2_conteudo_257) && !empty($editaShop->section_2_conteudo_257)){ echo $editaShop->section_2_conteudo_257;}?>" >
   </div>
  </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 2 link 259</label>
<input type="text" class="form-control" name="section_2_link_259" value="<?php if(isset($editaShop->section_2_link_259) && !empty($editaShop->section_2_link_259)){ echo $editaShop->section_2_link_259;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 2 link alt 259</label>
<input type="text" class="form-control" name="section_2_link_alt_259" value="<?php if(isset($editaShop->section_2_link_alt_259) && !empty($editaShop->section_2_link_alt_259)){ echo $editaShop->section_2_link_alt_259;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 2 link 260</label>
<input type="text" class="form-control" name="section_2_link_260" value="<?php if(isset($editaShop->section_2_link_260) && !empty($editaShop->section_2_link_260)){ echo $editaShop->section_2_link_260;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 2 link alt 260</label>
<input type="text" class="form-control" name="section_2_link_alt_260" value="<?php if(isset($editaShop->section_2_link_alt_260) && !empty($editaShop->section_2_link_alt_260)){ echo $editaShop->section_2_link_alt_260;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 2 link 261</label>
<input type="text" class="form-control" name="section_2_link_261" value="<?php if(isset($editaShop->section_2_link_261) && !empty($editaShop->section_2_link_261)){ echo $editaShop->section_2_link_261;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 2 link alt 261</label>
<input type="text" class="form-control" name="section_2_link_alt_261" value="<?php if(isset($editaShop->section_2_link_alt_261) && !empty($editaShop->section_2_link_alt_261)){ echo $editaShop->section_2_link_alt_261;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 2 link 262</label>
<input type="text" class="form-control" name="section_2_link_262" value="<?php if(isset($editaShop->section_2_link_262) && !empty($editaShop->section_2_link_262)){ echo $editaShop->section_2_link_262;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 2 link alt 262</label>
<input type="text" class="form-control" name="section_2_link_alt_262" value="<?php if(isset($editaShop->section_2_link_alt_262) && !empty($editaShop->section_2_link_alt_262)){ echo $editaShop->section_2_link_alt_262;}?>" >
</div>
 </div>
</div>
<div class="clearfix"></div>
 <div class="form-group row">
<div class="col-md-12">
 <h5>Informaçåo SEO</h5>
 </div>
 </div>
</div>
<div class="form-actions">
<div class="text-right">
<button type="submit" class="btn btn-info">Salvar</button>
<button type="reset" class="btn btn-dark">Resetar</button>
</div>
<input type="hidden" name="acao" value="editaShop">
<input type="hidden" name="id" value="<?php if(isset($editaShop->id) && !empty($editaShop->id)){ echo $editaShop->id;}?>">
<input type="hidden" name="section_1_img_245_Atual" value="<?php if(isset($editaShop->section_1_img_245) && !empty($editaShop->section_1_img_245)){ echo $editaShop->section_1_img_245;}?>">
<input type="hidden" name="section_2_img_251_Atual" value="<?php if(isset($editaShop->section_2_img_251) && !empty($editaShop->section_2_img_251)){ echo $editaShop->section_2_img_251;}?>">
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<?php include "footer.php"; ?>
</div>
</div>
<script src="assets/libs/jquery/dist/jquery.min.js"></script>
<script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="dist/js/app-style-switcher.js"></script>
<script src="dist/js/feather.min.js"></script>
<script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="assets/extra-libs/sparkline/sparkline.js"></script>
<script src="dist/js/sidebarmenu.js"></script>
<script src="dist/js/custom.min.js"></script>
<script src="vendor/ckeditor/ckeditor.js"></script>
</body>
</html>
