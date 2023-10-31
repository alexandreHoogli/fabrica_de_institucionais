<?php include "verifica.php";
$price->add();
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
<title>Painel Hoogli - Adicionar price</title>
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
<h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Adicionar price</h4>
<div class="d-flex align-items-center">
<nav aria-label="breadcrumb">
<ol class="breadcrumb m-0 p-0">
<li class="breadcrumb-item"><a href="." class="text-muted">Home</a></li>
<li class="breadcrumb-item text-muted active" aria-current="page"><a href="price.php" class="text-muted">price</a></li>
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
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 1 link 1</label>
  <input class="form-control" type="text" name="section_1_link_1"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 1 link alt 1</label>
<input class="form-control" type="text" name="section_1_link_alt_1" />
</div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 1 img 2 () </label>
 <input class="form-control" type="file" name="section_1_img_2" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 1 image alt 2</label>
<input class="form-control" type="text" name="section_1_image_alt_2" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 1 conteudo 4</label>
 <input class="form-control" type="text" name="section_1_conteudo_4" />
  </div>
</div>
<br>
<hr>
<h4 class="card-title">Section 2</h4>
<hr>
<br>
<div class="form-group row">
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 2 link 7</label>
  <input class="form-control" type="text" name="section_2_link_7"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 2 link alt 7</label>
<input class="form-control" type="text" name="section_2_link_alt_7" />
</div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 2 img 8 () </label>
 <input class="form-control" type="file" name="section_2_img_8" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 2 image alt 8</label>
<input class="form-control" type="text" name="section_2_image_alt_8" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 2 conteudo 9</label>
 <input class="form-control" type="text" name="section_2_conteudo_9" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 2 conteudo 10</label>
 <input class="form-control" type="text" name="section_2_conteudo_10" />
  </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 2 link 11</label>
  <input class="form-control" type="text" name="section_2_link_11"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 2 link alt 11</label>
<input class="form-control" type="text" name="section_2_link_alt_11" />
</div>
<div class="col-md-4 col-sm-12">
   <label class="col-form-label">section 2 link conteudo 11</label>
<input class="form-control" type="text" name="section_2_link_conteudo_11" />
  </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 2 link 12</label>
  <input class="form-control" type="text" name="section_2_link_12"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 2 link alt 12</label>
<input class="form-control" type="text" name="section_2_link_alt_12" />
</div>
<div class="col-md-4 col-sm-12">
   <label class="col-form-label">section 2 link conteudo 12</label>
<input class="form-control" type="text" name="section_2_link_conteudo_12" />
  </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 2 link 13</label>
  <input class="form-control" type="text" name="section_2_link_13"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 2 link alt 13</label>
<input class="form-control" type="text" name="section_2_link_alt_13" />
</div>
<div class="col-md-4 col-sm-12">
   <label class="col-form-label">section 2 link conteudo 13</label>
<input class="form-control" type="text" name="section_2_link_conteudo_13" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 2 conteudo 14</label>
 <input class="form-control" type="text" name="section_2_conteudo_14" />
  </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 2 link 16</label>
  <input class="form-control" type="text" name="section_2_link_16"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 2 link alt 16</label>
<input class="form-control" type="text" name="section_2_link_alt_16" />
</div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 2 link 17</label>
  <input class="form-control" type="text" name="section_2_link_17"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 2 link alt 17</label>
<input class="form-control" type="text" name="section_2_link_alt_17" />
</div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 2 link 18</label>
  <input class="form-control" type="text" name="section_2_link_18"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 2 link alt 18</label>
<input class="form-control" type="text" name="section_2_link_alt_18" />
</div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 2 link 19</label>
  <input class="form-control" type="text" name="section_2_link_19"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 2 link alt 19</label>
<input class="form-control" type="text" name="section_2_link_alt_19" />
</div>
</div>
<div class="clearfix"></div>
 <div class="form-group row">
<div class="col-md-12">
 <h5>Informaçåo SEO</h5>
 </div>
 </div>
<div class="form-group row">
<div class="col-md-12">
<label class="col-form-label">$meta_title</label>
<input class="form-control" type="text" name="meta_title" />
</div>
</div>
<div class="form-group row">
<div class="col-md-12">
<label class="col-form-label">$meta_keywords</label>
<input class="form-control" type="text" name="meta_keywords" />
</div>
</div>
<div class="form-group row">
<div class="col-md-12">
<label class="col-form-label">$meta_description</label>
<textarea name="meta_description" class="form-control" id="" cols="30" rows="10"></textarea>
</div>
</div>
</div>
</div>
<div class="form-actions">
<div class="text-right">
<button type="submit" class="btn btn-info">Salvar</button>
<button type="reset" class="btn btn-dark">Resetar</button>
</div>
</div>
<input type="hidden" name="acao" value="addPrice">
</form>
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
