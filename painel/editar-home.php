<?php include "verifica.php";
$id = "";
if(isset($_GET['id'])){
if(empty($_GET['id'])){
header("Location: home.php");
}else{
$id = $_GET['id'];
    }
}
$home->editar();
$editaHome = $home->rsDados($id);
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
<title>Painel Hoogli - Adicionar home</title>
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
<h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Adicionar home</h4>
<div class="d-flex align-items-center">
<nav aria-label="breadcrumb">
<ol class="breadcrumb m-0 p-0">
<li class="breadcrumb-item"><a href="." class="text-muted">Home</a></li>
<li class="breadcrumb-item text-muted active" aria-current="page"><a href="home.php" class="text-muted">home</a></li>
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
<label class="mr-sm-2" for="">section 1 img 3 ()</label>
   <input type="file" class="form-control" name="section_1_img_3" >
</div>
 </div>
 <?php if(isset($editaHome->section_1_img_3) && !empty($editaHome->section_1_img_3)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_1_img_3;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 1 image alt 3</label>
 <input type="text" class="form-control" name="section_1_image_alt_3" value="<?php if(isset($editaHome->section_1_image_alt_3) && !empty($editaHome->section_1_image_alt_3)){ echo $editaHome->section_1_image_alt_3;}?>" >
</div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 1 img 4 ()</label>
   <input type="file" class="form-control" name="section_1_img_4" >
</div>
 </div>
 <?php if(isset($editaHome->section_1_img_4) && !empty($editaHome->section_1_img_4)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_1_img_4;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 1 image alt 4</label>
 <input type="text" class="form-control" name="section_1_image_alt_4" value="<?php if(isset($editaHome->section_1_image_alt_4) && !empty($editaHome->section_1_image_alt_4)){ echo $editaHome->section_1_image_alt_4;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 1 conteudo 5</label>
  <input type="text" class="form-control" name="section_1_conteudo_5" value="<?php if(isset($editaHome->section_1_conteudo_5) && !empty($editaHome->section_1_conteudo_5)){ echo $editaHome->section_1_conteudo_5;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 1 conteudo 6</label>
  <input type="text" class="form-control" name="section_1_conteudo_6" value="<?php if(isset($editaHome->section_1_conteudo_6) && !empty($editaHome->section_1_conteudo_6)){ echo $editaHome->section_1_conteudo_6;}?>" >
   </div>
  </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 1 link 7</label>
<input type="text" class="form-control" name="section_1_link_7" value="<?php if(isset($editaHome->section_1_link_7) && !empty($editaHome->section_1_link_7)){ echo $editaHome->section_1_link_7;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 1 link alt 7</label>
<input type="text" class="form-control" name="section_1_link_alt_7" value="<?php if(isset($editaHome->section_1_link_alt_7) && !empty($editaHome->section_1_link_alt_7)){ echo $editaHome->section_1_link_alt_7;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 1 link conteudo 7</label>
 <input type="text" class="form-control" name="section_1_link_conteudo_7" value="<?php if(isset($editaHome->section_1_link_conteudo_7) && !empty($editaHome->section_1_link_conteudo_7)){ echo $editaHome->section_1_link_conteudo_7;}?>" >
 </div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 1 conteudo 8</label>
  <input type="text" class="form-control" name="section_1_conteudo_8" value="<?php if(isset($editaHome->section_1_conteudo_8) && !empty($editaHome->section_1_conteudo_8)){ echo $editaHome->section_1_conteudo_8;}?>" >
   </div>
  </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 1 img 9 ()</label>
   <input type="file" class="form-control" name="section_1_img_9" >
</div>
 </div>
 <?php if(isset($editaHome->section_1_img_9) && !empty($editaHome->section_1_img_9)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_1_img_9;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 1 image alt 9</label>
 <input type="text" class="form-control" name="section_1_image_alt_9" value="<?php if(isset($editaHome->section_1_image_alt_9) && !empty($editaHome->section_1_image_alt_9)){ echo $editaHome->section_1_image_alt_9;}?>" >
</div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 1 img 10 ()</label>
   <input type="file" class="form-control" name="section_1_img_10" >
</div>
 </div>
 <?php if(isset($editaHome->section_1_img_10) && !empty($editaHome->section_1_img_10)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_1_img_10;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 1 image alt 10</label>
 <input type="text" class="form-control" name="section_1_image_alt_10" value="<?php if(isset($editaHome->section_1_image_alt_10) && !empty($editaHome->section_1_image_alt_10)){ echo $editaHome->section_1_image_alt_10;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 1 conteudo 11</label>
  <input type="text" class="form-control" name="section_1_conteudo_11" value="<?php if(isset($editaHome->section_1_conteudo_11) && !empty($editaHome->section_1_conteudo_11)){ echo $editaHome->section_1_conteudo_11;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 1 conteudo 12</label>
  <input type="text" class="form-control" name="section_1_conteudo_12" value="<?php if(isset($editaHome->section_1_conteudo_12) && !empty($editaHome->section_1_conteudo_12)){ echo $editaHome->section_1_conteudo_12;}?>" >
   </div>
  </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 1 link 13</label>
<input type="text" class="form-control" name="section_1_link_13" value="<?php if(isset($editaHome->section_1_link_13) && !empty($editaHome->section_1_link_13)){ echo $editaHome->section_1_link_13;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 1 link alt 13</label>
<input type="text" class="form-control" name="section_1_link_alt_13" value="<?php if(isset($editaHome->section_1_link_alt_13) && !empty($editaHome->section_1_link_alt_13)){ echo $editaHome->section_1_link_alt_13;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 1 link conteudo 13</label>
 <input type="text" class="form-control" name="section_1_link_conteudo_13" value="<?php if(isset($editaHome->section_1_link_conteudo_13) && !empty($editaHome->section_1_link_conteudo_13)){ echo $editaHome->section_1_link_conteudo_13;}?>" >
 </div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 1 conteudo 14</label>
  <input type="text" class="form-control" name="section_1_conteudo_14" value="<?php if(isset($editaHome->section_1_conteudo_14) && !empty($editaHome->section_1_conteudo_14)){ echo $editaHome->section_1_conteudo_14;}?>" >
   </div>
  </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 1 img 15 ()</label>
   <input type="file" class="form-control" name="section_1_img_15" >
</div>
 </div>
 <?php if(isset($editaHome->section_1_img_15) && !empty($editaHome->section_1_img_15)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_1_img_15;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 1 image alt 15</label>
 <input type="text" class="form-control" name="section_1_image_alt_15" value="<?php if(isset($editaHome->section_1_image_alt_15) && !empty($editaHome->section_1_image_alt_15)){ echo $editaHome->section_1_image_alt_15;}?>" >
</div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 1 img 16 ()</label>
   <input type="file" class="form-control" name="section_1_img_16" >
</div>
 </div>
 <?php if(isset($editaHome->section_1_img_16) && !empty($editaHome->section_1_img_16)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_1_img_16;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 1 image alt 16</label>
 <input type="text" class="form-control" name="section_1_image_alt_16" value="<?php if(isset($editaHome->section_1_image_alt_16) && !empty($editaHome->section_1_image_alt_16)){ echo $editaHome->section_1_image_alt_16;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 1 conteudo 17</label>
  <input type="text" class="form-control" name="section_1_conteudo_17" value="<?php if(isset($editaHome->section_1_conteudo_17) && !empty($editaHome->section_1_conteudo_17)){ echo $editaHome->section_1_conteudo_17;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 1 conteudo 18</label>
  <input type="text" class="form-control" name="section_1_conteudo_18" value="<?php if(isset($editaHome->section_1_conteudo_18) && !empty($editaHome->section_1_conteudo_18)){ echo $editaHome->section_1_conteudo_18;}?>" >
   </div>
  </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 1 link 19</label>
<input type="text" class="form-control" name="section_1_link_19" value="<?php if(isset($editaHome->section_1_link_19) && !empty($editaHome->section_1_link_19)){ echo $editaHome->section_1_link_19;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 1 link alt 19</label>
<input type="text" class="form-control" name="section_1_link_alt_19" value="<?php if(isset($editaHome->section_1_link_alt_19) && !empty($editaHome->section_1_link_alt_19)){ echo $editaHome->section_1_link_alt_19;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 1 link conteudo 19</label>
 <input type="text" class="form-control" name="section_1_link_conteudo_19" value="<?php if(isset($editaHome->section_1_link_conteudo_19) && !empty($editaHome->section_1_link_conteudo_19)){ echo $editaHome->section_1_link_conteudo_19;}?>" >
 </div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 1 conteudo 20</label>
  <input type="text" class="form-control" name="section_1_conteudo_20" value="<?php if(isset($editaHome->section_1_conteudo_20) && !empty($editaHome->section_1_conteudo_20)){ echo $editaHome->section_1_conteudo_20;}?>" >
   </div>
  </div>
</div>
<br>
<hr>
<h4 class="card-title">Section 2</h4>
<hr>
<br>
<div class="form-group row">
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 2 conteudo 21</label>
  <input type="text" class="form-control" name="section_2_conteudo_21" value="<?php if(isset($editaHome->section_2_conteudo_21) && !empty($editaHome->section_2_conteudo_21)){ echo $editaHome->section_2_conteudo_21;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 2 conteudo 22</label>
  <input type="text" class="form-control" name="section_2_conteudo_22" value="<?php if(isset($editaHome->section_2_conteudo_22) && !empty($editaHome->section_2_conteudo_22)){ echo $editaHome->section_2_conteudo_22;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 2 conteudo 23</label>
  <input type="text" class="form-control" name="section_2_conteudo_23" value="<?php if(isset($editaHome->section_2_conteudo_23) && !empty($editaHome->section_2_conteudo_23)){ echo $editaHome->section_2_conteudo_23;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 2 conteudo 24</label>
  <input type="text" class="form-control" name="section_2_conteudo_24" value="<?php if(isset($editaHome->section_2_conteudo_24) && !empty($editaHome->section_2_conteudo_24)){ echo $editaHome->section_2_conteudo_24;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 2 conteudo 25</label>
  <input type="text" class="form-control" name="section_2_conteudo_25" value="<?php if(isset($editaHome->section_2_conteudo_25) && !empty($editaHome->section_2_conteudo_25)){ echo $editaHome->section_2_conteudo_25;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 2 conteudo 26</label>
  <input type="text" class="form-control" name="section_2_conteudo_26" value="<?php if(isset($editaHome->section_2_conteudo_26) && !empty($editaHome->section_2_conteudo_26)){ echo $editaHome->section_2_conteudo_26;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 2 conteudo 27</label>
  <input type="text" class="form-control" name="section_2_conteudo_27" value="<?php if(isset($editaHome->section_2_conteudo_27) && !empty($editaHome->section_2_conteudo_27)){ echo $editaHome->section_2_conteudo_27;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 2 conteudo 28</label>
  <input type="text" class="form-control" name="section_2_conteudo_28" value="<?php if(isset($editaHome->section_2_conteudo_28) && !empty($editaHome->section_2_conteudo_28)){ echo $editaHome->section_2_conteudo_28;}?>" >
   </div>
  </div>
</div>
<br>
<hr>
<h4 class="card-title">Section 3</h4>
<hr>
<br>
<div class="form-group row">
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 3 img 29 ()</label>
   <input type="file" class="form-control" name="section_3_img_29" >
</div>
 </div>
 <?php if(isset($editaHome->section_3_img_29) && !empty($editaHome->section_3_img_29)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_3_img_29;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 3 image alt 29</label>
 <input type="text" class="form-control" name="section_3_image_alt_29" value="<?php if(isset($editaHome->section_3_image_alt_29) && !empty($editaHome->section_3_image_alt_29)){ echo $editaHome->section_3_image_alt_29;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 3 conteudo 30</label>
  <input type="text" class="form-control" name="section_3_conteudo_30" value="<?php if(isset($editaHome->section_3_conteudo_30) && !empty($editaHome->section_3_conteudo_30)){ echo $editaHome->section_3_conteudo_30;}?>" >
   </div>
  </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 3 img 31 ()</label>
   <input type="file" class="form-control" name="section_3_img_31" >
</div>
 </div>
 <?php if(isset($editaHome->section_3_img_31) && !empty($editaHome->section_3_img_31)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_3_img_31;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 3 image alt 31</label>
 <input type="text" class="form-control" name="section_3_image_alt_31" value="<?php if(isset($editaHome->section_3_image_alt_31) && !empty($editaHome->section_3_image_alt_31)){ echo $editaHome->section_3_image_alt_31;}?>" >
</div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 3 img 32 ()</label>
   <input type="file" class="form-control" name="section_3_img_32" >
</div>
 </div>
 <?php if(isset($editaHome->section_3_img_32) && !empty($editaHome->section_3_img_32)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_3_img_32;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 3 image alt 32</label>
 <input type="text" class="form-control" name="section_3_image_alt_32" value="<?php if(isset($editaHome->section_3_image_alt_32) && !empty($editaHome->section_3_image_alt_32)){ echo $editaHome->section_3_image_alt_32;}?>" >
</div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 3 img 33 ()</label>
   <input type="file" class="form-control" name="section_3_img_33" >
</div>
 </div>
 <?php if(isset($editaHome->section_3_img_33) && !empty($editaHome->section_3_img_33)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_3_img_33;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 3 image alt 33</label>
 <input type="text" class="form-control" name="section_3_image_alt_33" value="<?php if(isset($editaHome->section_3_image_alt_33) && !empty($editaHome->section_3_image_alt_33)){ echo $editaHome->section_3_image_alt_33;}?>" >
</div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 3 img 34 ()</label>
   <input type="file" class="form-control" name="section_3_img_34" >
</div>
 </div>
 <?php if(isset($editaHome->section_3_img_34) && !empty($editaHome->section_3_img_34)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_3_img_34;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 3 image alt 34</label>
 <input type="text" class="form-control" name="section_3_image_alt_34" value="<?php if(isset($editaHome->section_3_image_alt_34) && !empty($editaHome->section_3_image_alt_34)){ echo $editaHome->section_3_image_alt_34;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 3 conteudo 35</label>
  <input type="text" class="form-control" name="section_3_conteudo_35" value="<?php if(isset($editaHome->section_3_conteudo_35) && !empty($editaHome->section_3_conteudo_35)){ echo $editaHome->section_3_conteudo_35;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 3 conteudo 36</label>
  <input type="text" class="form-control" name="section_3_conteudo_36" value="<?php if(isset($editaHome->section_3_conteudo_36) && !empty($editaHome->section_3_conteudo_36)){ echo $editaHome->section_3_conteudo_36;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 3 conteudo 37</label>
  <input type="text" class="form-control" name="section_3_conteudo_37" value="<?php if(isset($editaHome->section_3_conteudo_37) && !empty($editaHome->section_3_conteudo_37)){ echo $editaHome->section_3_conteudo_37;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 3 conteudo 38</label>
  <input type="text" class="form-control" name="section_3_conteudo_38" value="<?php if(isset($editaHome->section_3_conteudo_38) && !empty($editaHome->section_3_conteudo_38)){ echo $editaHome->section_3_conteudo_38;}?>" >
   </div>
  </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 3 img 39 ()</label>
   <input type="file" class="form-control" name="section_3_img_39" >
</div>
 </div>
 <?php if(isset($editaHome->section_3_img_39) && !empty($editaHome->section_3_img_39)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_3_img_39;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 3 image alt 39</label>
 <input type="text" class="form-control" name="section_3_image_alt_39" value="<?php if(isset($editaHome->section_3_image_alt_39) && !empty($editaHome->section_3_image_alt_39)){ echo $editaHome->section_3_image_alt_39;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 3 conteudo 40</label>
  <input type="text" class="form-control" name="section_3_conteudo_40" value="<?php if(isset($editaHome->section_3_conteudo_40) && !empty($editaHome->section_3_conteudo_40)){ echo $editaHome->section_3_conteudo_40;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 3 conteudo 41</label>
  <input type="text" class="form-control" name="section_3_conteudo_41" value="<?php if(isset($editaHome->section_3_conteudo_41) && !empty($editaHome->section_3_conteudo_41)){ echo $editaHome->section_3_conteudo_41;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 3 conteudo 42</label>
  <input type="text" class="form-control" name="section_3_conteudo_42" value="<?php if(isset($editaHome->section_3_conteudo_42) && !empty($editaHome->section_3_conteudo_42)){ echo $editaHome->section_3_conteudo_42;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 3 conteudo 43</label>
  <input type="text" class="form-control" name="section_3_conteudo_43" value="<?php if(isset($editaHome->section_3_conteudo_43) && !empty($editaHome->section_3_conteudo_43)){ echo $editaHome->section_3_conteudo_43;}?>" >
   </div>
  </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 3 link 44</label>
<input type="text" class="form-control" name="section_3_link_44" value="<?php if(isset($editaHome->section_3_link_44) && !empty($editaHome->section_3_link_44)){ echo $editaHome->section_3_link_44;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 3 link alt 44</label>
<input type="text" class="form-control" name="section_3_link_alt_44" value="<?php if(isset($editaHome->section_3_link_alt_44) && !empty($editaHome->section_3_link_alt_44)){ echo $editaHome->section_3_link_alt_44;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 3 link conteudo 44</label>
 <input type="text" class="form-control" name="section_3_link_conteudo_44" value="<?php if(isset($editaHome->section_3_link_conteudo_44) && !empty($editaHome->section_3_link_conteudo_44)){ echo $editaHome->section_3_link_conteudo_44;}?>" >
 </div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 3 conteudo 45</label>
  <input type="text" class="form-control" name="section_3_conteudo_45" value="<?php if(isset($editaHome->section_3_conteudo_45) && !empty($editaHome->section_3_conteudo_45)){ echo $editaHome->section_3_conteudo_45;}?>" >
   </div>
  </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 3 img 46 ()</label>
   <input type="file" class="form-control" name="section_3_img_46" >
</div>
 </div>
 <?php if(isset($editaHome->section_3_img_46) && !empty($editaHome->section_3_img_46)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_3_img_46;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 3 image alt 46</label>
 <input type="text" class="form-control" name="section_3_image_alt_46" value="<?php if(isset($editaHome->section_3_image_alt_46) && !empty($editaHome->section_3_image_alt_46)){ echo $editaHome->section_3_image_alt_46;}?>" >
</div>
 </div>
</div>
<br>
<hr>
<h4 class="card-title">Section 4</h4>
<hr>
<br>
<div class="form-group row">
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 4 img 47 ()</label>
   <input type="file" class="form-control" name="section_4_img_47" >
</div>
 </div>
 <?php if(isset($editaHome->section_4_img_47) && !empty($editaHome->section_4_img_47)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_4_img_47;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 4 image alt 47</label>
 <input type="text" class="form-control" name="section_4_image_alt_47" value="<?php if(isset($editaHome->section_4_image_alt_47) && !empty($editaHome->section_4_image_alt_47)){ echo $editaHome->section_4_image_alt_47;}?>" >
</div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 4 img 48 ()</label>
   <input type="file" class="form-control" name="section_4_img_48" >
</div>
 </div>
 <?php if(isset($editaHome->section_4_img_48) && !empty($editaHome->section_4_img_48)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_4_img_48;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 4 image alt 48</label>
 <input type="text" class="form-control" name="section_4_image_alt_48" value="<?php if(isset($editaHome->section_4_image_alt_48) && !empty($editaHome->section_4_image_alt_48)){ echo $editaHome->section_4_image_alt_48;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 4 conteudo 49</label>
  <input type="text" class="form-control" name="section_4_conteudo_49" value="<?php if(isset($editaHome->section_4_conteudo_49) && !empty($editaHome->section_4_conteudo_49)){ echo $editaHome->section_4_conteudo_49;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 4 conteudo 50</label>
  <input type="text" class="form-control" name="section_4_conteudo_50" value="<?php if(isset($editaHome->section_4_conteudo_50) && !empty($editaHome->section_4_conteudo_50)){ echo $editaHome->section_4_conteudo_50;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 4 conteudo 51</label>
  <input type="text" class="form-control" name="section_4_conteudo_51" value="<?php if(isset($editaHome->section_4_conteudo_51) && !empty($editaHome->section_4_conteudo_51)){ echo $editaHome->section_4_conteudo_51;}?>" >
   </div>
  </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 4 img 52 ()</label>
   <input type="file" class="form-control" name="section_4_img_52" >
</div>
 </div>
 <?php if(isset($editaHome->section_4_img_52) && !empty($editaHome->section_4_img_52)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_4_img_52;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 4 image alt 52</label>
 <input type="text" class="form-control" name="section_4_image_alt_52" value="<?php if(isset($editaHome->section_4_image_alt_52) && !empty($editaHome->section_4_image_alt_52)){ echo $editaHome->section_4_image_alt_52;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 4 conteudo 53</label>
  <input type="text" class="form-control" name="section_4_conteudo_53" value="<?php if(isset($editaHome->section_4_conteudo_53) && !empty($editaHome->section_4_conteudo_53)){ echo $editaHome->section_4_conteudo_53;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 4 conteudo 54</label>
  <input type="text" class="form-control" name="section_4_conteudo_54" value="<?php if(isset($editaHome->section_4_conteudo_54) && !empty($editaHome->section_4_conteudo_54)){ echo $editaHome->section_4_conteudo_54;}?>" >
   </div>
  </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 4 link 55</label>
<input type="text" class="form-control" name="section_4_link_55" value="<?php if(isset($editaHome->section_4_link_55) && !empty($editaHome->section_4_link_55)){ echo $editaHome->section_4_link_55;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 4 link alt 55</label>
<input type="text" class="form-control" name="section_4_link_alt_55" value="<?php if(isset($editaHome->section_4_link_alt_55) && !empty($editaHome->section_4_link_alt_55)){ echo $editaHome->section_4_link_alt_55;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 4 link conteudo 55</label>
 <input type="text" class="form-control" name="section_4_link_conteudo_55" value="<?php if(isset($editaHome->section_4_link_conteudo_55) && !empty($editaHome->section_4_link_conteudo_55)){ echo $editaHome->section_4_link_conteudo_55;}?>" >
 </div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 4 conteudo 56</label>
  <input type="text" class="form-control" name="section_4_conteudo_56" value="<?php if(isset($editaHome->section_4_conteudo_56) && !empty($editaHome->section_4_conteudo_56)){ echo $editaHome->section_4_conteudo_56;}?>" >
   </div>
  </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 4 link 57</label>
<input type="text" class="form-control" name="section_4_link_57" value="<?php if(isset($editaHome->section_4_link_57) && !empty($editaHome->section_4_link_57)){ echo $editaHome->section_4_link_57;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 4 link alt 57</label>
<input type="text" class="form-control" name="section_4_link_alt_57" value="<?php if(isset($editaHome->section_4_link_alt_57) && !empty($editaHome->section_4_link_alt_57)){ echo $editaHome->section_4_link_alt_57;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 4 link conteudo 57</label>
 <input type="text" class="form-control" name="section_4_link_conteudo_57" value="<?php if(isset($editaHome->section_4_link_conteudo_57) && !empty($editaHome->section_4_link_conteudo_57)){ echo $editaHome->section_4_link_conteudo_57;}?>" >
 </div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 4 conteudo 58</label>
  <input type="text" class="form-control" name="section_4_conteudo_58" value="<?php if(isset($editaHome->section_4_conteudo_58) && !empty($editaHome->section_4_conteudo_58)){ echo $editaHome->section_4_conteudo_58;}?>" >
   </div>
  </div>
</div>
<br>
<hr>
<h4 class="card-title">Section 5</h4>
<hr>
<br>
<div class="form-group row">
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 5 img 59 ()</label>
   <input type="file" class="form-control" name="section_5_img_59" >
</div>
 </div>
 <?php if(isset($editaHome->section_5_img_59) && !empty($editaHome->section_5_img_59)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_5_img_59;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 5 image alt 59</label>
 <input type="text" class="form-control" name="section_5_image_alt_59" value="<?php if(isset($editaHome->section_5_image_alt_59) && !empty($editaHome->section_5_image_alt_59)){ echo $editaHome->section_5_image_alt_59;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 5 conteudo 60</label>
  <input type="text" class="form-control" name="section_5_conteudo_60" value="<?php if(isset($editaHome->section_5_conteudo_60) && !empty($editaHome->section_5_conteudo_60)){ echo $editaHome->section_5_conteudo_60;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 5 conteudo 61</label>
  <input type="text" class="form-control" name="section_5_conteudo_61" value="<?php if(isset($editaHome->section_5_conteudo_61) && !empty($editaHome->section_5_conteudo_61)){ echo $editaHome->section_5_conteudo_61;}?>" >
   </div>
  </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 5 link 62</label>
<input type="text" class="form-control" name="section_5_link_62" value="<?php if(isset($editaHome->section_5_link_62) && !empty($editaHome->section_5_link_62)){ echo $editaHome->section_5_link_62;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 5 link alt 62</label>
<input type="text" class="form-control" name="section_5_link_alt_62" value="<?php if(isset($editaHome->section_5_link_alt_62) && !empty($editaHome->section_5_link_alt_62)){ echo $editaHome->section_5_link_alt_62;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 5 link conteudo 62</label>
 <input type="text" class="form-control" name="section_5_link_conteudo_62" value="<?php if(isset($editaHome->section_5_link_conteudo_62) && !empty($editaHome->section_5_link_conteudo_62)){ echo $editaHome->section_5_link_conteudo_62;}?>" >
 </div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 5 conteudo 63</label>
  <input type="text" class="form-control" name="section_5_conteudo_63" value="<?php if(isset($editaHome->section_5_conteudo_63) && !empty($editaHome->section_5_conteudo_63)){ echo $editaHome->section_5_conteudo_63;}?>" >
   </div>
  </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 5 link 64</label>
<input type="text" class="form-control" name="section_5_link_64" value="<?php if(isset($editaHome->section_5_link_64) && !empty($editaHome->section_5_link_64)){ echo $editaHome->section_5_link_64;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 5 link alt 64</label>
<input type="text" class="form-control" name="section_5_link_alt_64" value="<?php if(isset($editaHome->section_5_link_alt_64) && !empty($editaHome->section_5_link_alt_64)){ echo $editaHome->section_5_link_alt_64;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 5 conteudo 65</label>
  <input type="text" class="form-control" name="section_5_conteudo_65" value="<?php if(isset($editaHome->section_5_conteudo_65) && !empty($editaHome->section_5_conteudo_65)){ echo $editaHome->section_5_conteudo_65;}?>" >
   </div>
  </div>
</div>
<br>
<hr>
<h4 class="card-title">Section 6</h4>
<hr>
<br>
<div class="form-group row">
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 6 conteudo 66</label>
  <input type="text" class="form-control" name="section_6_conteudo_66" value="<?php if(isset($editaHome->section_6_conteudo_66) && !empty($editaHome->section_6_conteudo_66)){ echo $editaHome->section_6_conteudo_66;}?>" >
   </div>
  </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 6 link 67</label>
<input type="text" class="form-control" name="section_6_link_67" value="<?php if(isset($editaHome->section_6_link_67) && !empty($editaHome->section_6_link_67)){ echo $editaHome->section_6_link_67;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 6 link alt 67</label>
<input type="text" class="form-control" name="section_6_link_alt_67" value="<?php if(isset($editaHome->section_6_link_alt_67) && !empty($editaHome->section_6_link_alt_67)){ echo $editaHome->section_6_link_alt_67;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 6 link conteudo 67</label>
 <input type="text" class="form-control" name="section_6_link_conteudo_67" value="<?php if(isset($editaHome->section_6_link_conteudo_67) && !empty($editaHome->section_6_link_conteudo_67)){ echo $editaHome->section_6_link_conteudo_67;}?>" >
 </div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 6 conteudo 68</label>
  <input type="text" class="form-control" name="section_6_conteudo_68" value="<?php if(isset($editaHome->section_6_conteudo_68) && !empty($editaHome->section_6_conteudo_68)){ echo $editaHome->section_6_conteudo_68;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 6 conteudo 69</label>
  <input type="text" class="form-control" name="section_6_conteudo_69" value="<?php if(isset($editaHome->section_6_conteudo_69) && !empty($editaHome->section_6_conteudo_69)){ echo $editaHome->section_6_conteudo_69;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 6 conteudo 70</label>
  <input type="text" class="form-control" name="section_6_conteudo_70" value="<?php if(isset($editaHome->section_6_conteudo_70) && !empty($editaHome->section_6_conteudo_70)){ echo $editaHome->section_6_conteudo_70;}?>" >
   </div>
  </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 6 img 71 ()</label>
   <input type="file" class="form-control" name="section_6_img_71" >
</div>
 </div>
 <?php if(isset($editaHome->section_6_img_71) && !empty($editaHome->section_6_img_71)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_6_img_71;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 6 image alt 71</label>
 <input type="text" class="form-control" name="section_6_image_alt_71" value="<?php if(isset($editaHome->section_6_image_alt_71) && !empty($editaHome->section_6_image_alt_71)){ echo $editaHome->section_6_image_alt_71;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 6 conteudo 72</label>
  <input type="text" class="form-control" name="section_6_conteudo_72" value="<?php if(isset($editaHome->section_6_conteudo_72) && !empty($editaHome->section_6_conteudo_72)){ echo $editaHome->section_6_conteudo_72;}?>" >
   </div>
  </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 6 img 73 ()</label>
   <input type="file" class="form-control" name="section_6_img_73" >
</div>
 </div>
 <?php if(isset($editaHome->section_6_img_73) && !empty($editaHome->section_6_img_73)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_6_img_73;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 6 image alt 73</label>
 <input type="text" class="form-control" name="section_6_image_alt_73" value="<?php if(isset($editaHome->section_6_image_alt_73) && !empty($editaHome->section_6_image_alt_73)){ echo $editaHome->section_6_image_alt_73;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 6 conteudo 74</label>
  <input type="text" class="form-control" name="section_6_conteudo_74" value="<?php if(isset($editaHome->section_6_conteudo_74) && !empty($editaHome->section_6_conteudo_74)){ echo $editaHome->section_6_conteudo_74;}?>" >
   </div>
  </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 6 img 75 ()</label>
   <input type="file" class="form-control" name="section_6_img_75" >
</div>
 </div>
 <?php if(isset($editaHome->section_6_img_75) && !empty($editaHome->section_6_img_75)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_6_img_75;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 6 image alt 75</label>
 <input type="text" class="form-control" name="section_6_image_alt_75" value="<?php if(isset($editaHome->section_6_image_alt_75) && !empty($editaHome->section_6_image_alt_75)){ echo $editaHome->section_6_image_alt_75;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 6 conteudo 76</label>
  <input type="text" class="form-control" name="section_6_conteudo_76" value="<?php if(isset($editaHome->section_6_conteudo_76) && !empty($editaHome->section_6_conteudo_76)){ echo $editaHome->section_6_conteudo_76;}?>" >
   </div>
  </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 6 img 77 ()</label>
   <input type="file" class="form-control" name="section_6_img_77" >
</div>
 </div>
 <?php if(isset($editaHome->section_6_img_77) && !empty($editaHome->section_6_img_77)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_6_img_77;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 6 image alt 77</label>
 <input type="text" class="form-control" name="section_6_image_alt_77" value="<?php if(isset($editaHome->section_6_image_alt_77) && !empty($editaHome->section_6_image_alt_77)){ echo $editaHome->section_6_image_alt_77;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 6 conteudo 78</label>
  <input type="text" class="form-control" name="section_6_conteudo_78" value="<?php if(isset($editaHome->section_6_conteudo_78) && !empty($editaHome->section_6_conteudo_78)){ echo $editaHome->section_6_conteudo_78;}?>" >
   </div>
  </div>
</div>
<br>
<hr>
<h4 class="card-title">Section 7</h4>
<hr>
<br>
<div class="form-group row">
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 7 conteudo 79</label>
  <input type="text" class="form-control" name="section_7_conteudo_79" value="<?php if(isset($editaHome->section_7_conteudo_79) && !empty($editaHome->section_7_conteudo_79)){ echo $editaHome->section_7_conteudo_79;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 7 conteudo 80</label>
  <input type="text" class="form-control" name="section_7_conteudo_80" value="<?php if(isset($editaHome->section_7_conteudo_80) && !empty($editaHome->section_7_conteudo_80)){ echo $editaHome->section_7_conteudo_80;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 7 conteudo 81</label>
  <input type="text" class="form-control" name="section_7_conteudo_81" value="<?php if(isset($editaHome->section_7_conteudo_81) && !empty($editaHome->section_7_conteudo_81)){ echo $editaHome->section_7_conteudo_81;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 7 conteudo 82</label>
  <input type="text" class="form-control" name="section_7_conteudo_82" value="<?php if(isset($editaHome->section_7_conteudo_82) && !empty($editaHome->section_7_conteudo_82)){ echo $editaHome->section_7_conteudo_82;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 7 conteudo 83</label>
  <input type="text" class="form-control" name="section_7_conteudo_83" value="<?php if(isset($editaHome->section_7_conteudo_83) && !empty($editaHome->section_7_conteudo_83)){ echo $editaHome->section_7_conteudo_83;}?>" >
   </div>
  </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 7 link 84</label>
<input type="text" class="form-control" name="section_7_link_84" value="<?php if(isset($editaHome->section_7_link_84) && !empty($editaHome->section_7_link_84)){ echo $editaHome->section_7_link_84;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 7 link alt 84</label>
<input type="text" class="form-control" name="section_7_link_alt_84" value="<?php if(isset($editaHome->section_7_link_alt_84) && !empty($editaHome->section_7_link_alt_84)){ echo $editaHome->section_7_link_alt_84;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 7 link conteudo 84</label>
 <input type="text" class="form-control" name="section_7_link_conteudo_84" value="<?php if(isset($editaHome->section_7_link_conteudo_84) && !empty($editaHome->section_7_link_conteudo_84)){ echo $editaHome->section_7_link_conteudo_84;}?>" >
 </div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 7 conteudo 85</label>
  <input type="text" class="form-control" name="section_7_conteudo_85" value="<?php if(isset($editaHome->section_7_conteudo_85) && !empty($editaHome->section_7_conteudo_85)){ echo $editaHome->section_7_conteudo_85;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 7 conteudo 86</label>
  <input type="text" class="form-control" name="section_7_conteudo_86" value="<?php if(isset($editaHome->section_7_conteudo_86) && !empty($editaHome->section_7_conteudo_86)){ echo $editaHome->section_7_conteudo_86;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 7 conteudo 87</label>
  <input type="text" class="form-control" name="section_7_conteudo_87" value="<?php if(isset($editaHome->section_7_conteudo_87) && !empty($editaHome->section_7_conteudo_87)){ echo $editaHome->section_7_conteudo_87;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 7 conteudo 88</label>
  <input type="text" class="form-control" name="section_7_conteudo_88" value="<?php if(isset($editaHome->section_7_conteudo_88) && !empty($editaHome->section_7_conteudo_88)){ echo $editaHome->section_7_conteudo_88;}?>" >
   </div>
  </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 7 link 89</label>
<input type="text" class="form-control" name="section_7_link_89" value="<?php if(isset($editaHome->section_7_link_89) && !empty($editaHome->section_7_link_89)){ echo $editaHome->section_7_link_89;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 7 link alt 89</label>
<input type="text" class="form-control" name="section_7_link_alt_89" value="<?php if(isset($editaHome->section_7_link_alt_89) && !empty($editaHome->section_7_link_alt_89)){ echo $editaHome->section_7_link_alt_89;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 7 link conteudo 89</label>
 <input type="text" class="form-control" name="section_7_link_conteudo_89" value="<?php if(isset($editaHome->section_7_link_conteudo_89) && !empty($editaHome->section_7_link_conteudo_89)){ echo $editaHome->section_7_link_conteudo_89;}?>" >
 </div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 7 conteudo 90</label>
  <input type="text" class="form-control" name="section_7_conteudo_90" value="<?php if(isset($editaHome->section_7_conteudo_90) && !empty($editaHome->section_7_conteudo_90)){ echo $editaHome->section_7_conteudo_90;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 7 conteudo 91</label>
  <input type="text" class="form-control" name="section_7_conteudo_91" value="<?php if(isset($editaHome->section_7_conteudo_91) && !empty($editaHome->section_7_conteudo_91)){ echo $editaHome->section_7_conteudo_91;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 7 conteudo 92</label>
  <input type="text" class="form-control" name="section_7_conteudo_92" value="<?php if(isset($editaHome->section_7_conteudo_92) && !empty($editaHome->section_7_conteudo_92)){ echo $editaHome->section_7_conteudo_92;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 7 conteudo 93</label>
  <input type="text" class="form-control" name="section_7_conteudo_93" value="<?php if(isset($editaHome->section_7_conteudo_93) && !empty($editaHome->section_7_conteudo_93)){ echo $editaHome->section_7_conteudo_93;}?>" >
   </div>
  </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 7 link 94</label>
<input type="text" class="form-control" name="section_7_link_94" value="<?php if(isset($editaHome->section_7_link_94) && !empty($editaHome->section_7_link_94)){ echo $editaHome->section_7_link_94;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 7 link alt 94</label>
<input type="text" class="form-control" name="section_7_link_alt_94" value="<?php if(isset($editaHome->section_7_link_alt_94) && !empty($editaHome->section_7_link_alt_94)){ echo $editaHome->section_7_link_alt_94;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 7 link conteudo 94</label>
 <input type="text" class="form-control" name="section_7_link_conteudo_94" value="<?php if(isset($editaHome->section_7_link_conteudo_94) && !empty($editaHome->section_7_link_conteudo_94)){ echo $editaHome->section_7_link_conteudo_94;}?>" >
 </div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 7 conteudo 95</label>
  <input type="text" class="form-control" name="section_7_conteudo_95" value="<?php if(isset($editaHome->section_7_conteudo_95) && !empty($editaHome->section_7_conteudo_95)){ echo $editaHome->section_7_conteudo_95;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 7 conteudo 96</label>
  <input type="text" class="form-control" name="section_7_conteudo_96" value="<?php if(isset($editaHome->section_7_conteudo_96) && !empty($editaHome->section_7_conteudo_96)){ echo $editaHome->section_7_conteudo_96;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 7 conteudo 97</label>
  <input type="text" class="form-control" name="section_7_conteudo_97" value="<?php if(isset($editaHome->section_7_conteudo_97) && !empty($editaHome->section_7_conteudo_97)){ echo $editaHome->section_7_conteudo_97;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 7 conteudo 98</label>
  <input type="text" class="form-control" name="section_7_conteudo_98" value="<?php if(isset($editaHome->section_7_conteudo_98) && !empty($editaHome->section_7_conteudo_98)){ echo $editaHome->section_7_conteudo_98;}?>" >
   </div>
  </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 7 link 99</label>
<input type="text" class="form-control" name="section_7_link_99" value="<?php if(isset($editaHome->section_7_link_99) && !empty($editaHome->section_7_link_99)){ echo $editaHome->section_7_link_99;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 7 link alt 99</label>
<input type="text" class="form-control" name="section_7_link_alt_99" value="<?php if(isset($editaHome->section_7_link_alt_99) && !empty($editaHome->section_7_link_alt_99)){ echo $editaHome->section_7_link_alt_99;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 7 link conteudo 99</label>
 <input type="text" class="form-control" name="section_7_link_conteudo_99" value="<?php if(isset($editaHome->section_7_link_conteudo_99) && !empty($editaHome->section_7_link_conteudo_99)){ echo $editaHome->section_7_link_conteudo_99;}?>" >
 </div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 7 conteudo 100</label>
  <input type="text" class="form-control" name="section_7_conteudo_100" value="<?php if(isset($editaHome->section_7_conteudo_100) && !empty($editaHome->section_7_conteudo_100)){ echo $editaHome->section_7_conteudo_100;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 7 conteudo 101</label>
  <input type="text" class="form-control" name="section_7_conteudo_101" value="<?php if(isset($editaHome->section_7_conteudo_101) && !empty($editaHome->section_7_conteudo_101)){ echo $editaHome->section_7_conteudo_101;}?>" >
   </div>
  </div>
</div>
<br>
<hr>
<h4 class="card-title">Section 8</h4>
<hr>
<br>
<div class="form-group row">
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 8 img 102 ()</label>
   <input type="file" class="form-control" name="section_8_img_102" >
</div>
 </div>
 <?php if(isset($editaHome->section_8_img_102) && !empty($editaHome->section_8_img_102)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_8_img_102;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 8 image alt 102</label>
 <input type="text" class="form-control" name="section_8_image_alt_102" value="<?php if(isset($editaHome->section_8_image_alt_102) && !empty($editaHome->section_8_image_alt_102)){ echo $editaHome->section_8_image_alt_102;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 8 link 103</label>
<input type="text" class="form-control" name="section_8_link_103" value="<?php if(isset($editaHome->section_8_link_103) && !empty($editaHome->section_8_link_103)){ echo $editaHome->section_8_link_103;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 8 link alt 103</label>
<input type="text" class="form-control" name="section_8_link_alt_103" value="<?php if(isset($editaHome->section_8_link_alt_103) && !empty($editaHome->section_8_link_alt_103)){ echo $editaHome->section_8_link_alt_103;}?>" >
</div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 8 img 104 ()</label>
   <input type="file" class="form-control" name="section_8_img_104" >
</div>
 </div>
 <?php if(isset($editaHome->section_8_img_104) && !empty($editaHome->section_8_img_104)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_8_img_104;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 8 image alt 104</label>
 <input type="text" class="form-control" name="section_8_image_alt_104" value="<?php if(isset($editaHome->section_8_image_alt_104) && !empty($editaHome->section_8_image_alt_104)){ echo $editaHome->section_8_image_alt_104;}?>" >
</div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 8 img 105 ()</label>
   <input type="file" class="form-control" name="section_8_img_105" >
</div>
 </div>
 <?php if(isset($editaHome->section_8_img_105) && !empty($editaHome->section_8_img_105)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_8_img_105;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 8 image alt 105</label>
 <input type="text" class="form-control" name="section_8_image_alt_105" value="<?php if(isset($editaHome->section_8_image_alt_105) && !empty($editaHome->section_8_image_alt_105)){ echo $editaHome->section_8_image_alt_105;}?>" >
</div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 8 img 106 ()</label>
   <input type="file" class="form-control" name="section_8_img_106" >
</div>
 </div>
 <?php if(isset($editaHome->section_8_img_106) && !empty($editaHome->section_8_img_106)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_8_img_106;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 8 image alt 106</label>
 <input type="text" class="form-control" name="section_8_image_alt_106" value="<?php if(isset($editaHome->section_8_image_alt_106) && !empty($editaHome->section_8_image_alt_106)){ echo $editaHome->section_8_image_alt_106;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 8 conteudo 107</label>
  <input type="text" class="form-control" name="section_8_conteudo_107" value="<?php if(isset($editaHome->section_8_conteudo_107) && !empty($editaHome->section_8_conteudo_107)){ echo $editaHome->section_8_conteudo_107;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 8 conteudo 108</label>
  <input type="text" class="form-control" name="section_8_conteudo_108" value="<?php if(isset($editaHome->section_8_conteudo_108) && !empty($editaHome->section_8_conteudo_108)){ echo $editaHome->section_8_conteudo_108;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 8 conteudo 109</label>
  <input type="text" class="form-control" name="section_8_conteudo_109" value="<?php if(isset($editaHome->section_8_conteudo_109) && !empty($editaHome->section_8_conteudo_109)){ echo $editaHome->section_8_conteudo_109;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 8 conteudo 110</label>
  <input type="text" class="form-control" name="section_8_conteudo_110" value="<?php if(isset($editaHome->section_8_conteudo_110) && !empty($editaHome->section_8_conteudo_110)){ echo $editaHome->section_8_conteudo_110;}?>" >
   </div>
  </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 8 link 111</label>
<input type="text" class="form-control" name="section_8_link_111" value="<?php if(isset($editaHome->section_8_link_111) && !empty($editaHome->section_8_link_111)){ echo $editaHome->section_8_link_111;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 8 link alt 111</label>
<input type="text" class="form-control" name="section_8_link_alt_111" value="<?php if(isset($editaHome->section_8_link_alt_111) && !empty($editaHome->section_8_link_alt_111)){ echo $editaHome->section_8_link_alt_111;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 8 link conteudo 111</label>
 <input type="text" class="form-control" name="section_8_link_conteudo_111" value="<?php if(isset($editaHome->section_8_link_conteudo_111) && !empty($editaHome->section_8_link_conteudo_111)){ echo $editaHome->section_8_link_conteudo_111;}?>" >
 </div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 8 conteudo 112</label>
  <input type="text" class="form-control" name="section_8_conteudo_112" value="<?php if(isset($editaHome->section_8_conteudo_112) && !empty($editaHome->section_8_conteudo_112)){ echo $editaHome->section_8_conteudo_112;}?>" >
   </div>
  </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 8 link 113</label>
<input type="text" class="form-control" name="section_8_link_113" value="<?php if(isset($editaHome->section_8_link_113) && !empty($editaHome->section_8_link_113)){ echo $editaHome->section_8_link_113;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 8 link alt 113</label>
<input type="text" class="form-control" name="section_8_link_alt_113" value="<?php if(isset($editaHome->section_8_link_alt_113) && !empty($editaHome->section_8_link_alt_113)){ echo $editaHome->section_8_link_alt_113;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 8 link conteudo 113</label>
 <input type="text" class="form-control" name="section_8_link_conteudo_113" value="<?php if(isset($editaHome->section_8_link_conteudo_113) && !empty($editaHome->section_8_link_conteudo_113)){ echo $editaHome->section_8_link_conteudo_113;}?>" >
 </div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 8 conteudo 114</label>
  <input type="text" class="form-control" name="section_8_conteudo_114" value="<?php if(isset($editaHome->section_8_conteudo_114) && !empty($editaHome->section_8_conteudo_114)){ echo $editaHome->section_8_conteudo_114;}?>" >
   </div>
  </div>
</div>
<br>
<hr>
<h4 class="card-title">Section 9</h4>
<hr>
<br>
<div class="form-group row">
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 9 img 115 ()</label>
   <input type="file" class="form-control" name="section_9_img_115" >
</div>
 </div>
 <?php if(isset($editaHome->section_9_img_115) && !empty($editaHome->section_9_img_115)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_9_img_115;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 9 image alt 115</label>
 <input type="text" class="form-control" name="section_9_image_alt_115" value="<?php if(isset($editaHome->section_9_image_alt_115) && !empty($editaHome->section_9_image_alt_115)){ echo $editaHome->section_9_image_alt_115;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 9 conteudo 116</label>
  <input type="text" class="form-control" name="section_9_conteudo_116" value="<?php if(isset($editaHome->section_9_conteudo_116) && !empty($editaHome->section_9_conteudo_116)){ echo $editaHome->section_9_conteudo_116;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 9 conteudo 117</label>
  <input type="text" class="form-control" name="section_9_conteudo_117" value="<?php if(isset($editaHome->section_9_conteudo_117) && !empty($editaHome->section_9_conteudo_117)){ echo $editaHome->section_9_conteudo_117;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 9 conteudo 119</label>
  <input type="text" class="form-control" name="section_9_conteudo_119" value="<?php if(isset($editaHome->section_9_conteudo_119) && !empty($editaHome->section_9_conteudo_119)){ echo $editaHome->section_9_conteudo_119;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 9 conteudo 120</label>
  <input type="text" class="form-control" name="section_9_conteudo_120" value="<?php if(isset($editaHome->section_9_conteudo_120) && !empty($editaHome->section_9_conteudo_120)){ echo $editaHome->section_9_conteudo_120;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 9 conteudo 122</label>
  <input type="text" class="form-control" name="section_9_conteudo_122" value="<?php if(isset($editaHome->section_9_conteudo_122) && !empty($editaHome->section_9_conteudo_122)){ echo $editaHome->section_9_conteudo_122;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 9 conteudo 123</label>
  <input type="text" class="form-control" name="section_9_conteudo_123" value="<?php if(isset($editaHome->section_9_conteudo_123) && !empty($editaHome->section_9_conteudo_123)){ echo $editaHome->section_9_conteudo_123;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 9 conteudo 125</label>
  <input type="text" class="form-control" name="section_9_conteudo_125" value="<?php if(isset($editaHome->section_9_conteudo_125) && !empty($editaHome->section_9_conteudo_125)){ echo $editaHome->section_9_conteudo_125;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 9 conteudo 126</label>
  <input type="text" class="form-control" name="section_9_conteudo_126" value="<?php if(isset($editaHome->section_9_conteudo_126) && !empty($editaHome->section_9_conteudo_126)){ echo $editaHome->section_9_conteudo_126;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 9 conteudo 128</label>
  <input type="text" class="form-control" name="section_9_conteudo_128" value="<?php if(isset($editaHome->section_9_conteudo_128) && !empty($editaHome->section_9_conteudo_128)){ echo $editaHome->section_9_conteudo_128;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 9 conteudo 129</label>
  <input type="text" class="form-control" name="section_9_conteudo_129" value="<?php if(isset($editaHome->section_9_conteudo_129) && !empty($editaHome->section_9_conteudo_129)){ echo $editaHome->section_9_conteudo_129;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 9 conteudo 131</label>
  <input type="text" class="form-control" name="section_9_conteudo_131" value="<?php if(isset($editaHome->section_9_conteudo_131) && !empty($editaHome->section_9_conteudo_131)){ echo $editaHome->section_9_conteudo_131;}?>" >
   </div>
  </div>
</div>
<br>
<hr>
<h4 class="card-title">Section 10</h4>
<hr>
<br>
<div class="form-group row">
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 10 img 132 ()</label>
   <input type="file" class="form-control" name="section_10_img_132" >
</div>
 </div>
 <?php if(isset($editaHome->section_10_img_132) && !empty($editaHome->section_10_img_132)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_10_img_132;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 10 image alt 132</label>
 <input type="text" class="form-control" name="section_10_image_alt_132" value="<?php if(isset($editaHome->section_10_image_alt_132) && !empty($editaHome->section_10_image_alt_132)){ echo $editaHome->section_10_image_alt_132;}?>" >
</div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 10 img 133 ()</label>
   <input type="file" class="form-control" name="section_10_img_133" >
</div>
 </div>
 <?php if(isset($editaHome->section_10_img_133) && !empty($editaHome->section_10_img_133)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_10_img_133;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 10 image alt 133</label>
 <input type="text" class="form-control" name="section_10_image_alt_133" value="<?php if(isset($editaHome->section_10_image_alt_133) && !empty($editaHome->section_10_image_alt_133)){ echo $editaHome->section_10_image_alt_133;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 10 conteudo 134</label>
  <input type="text" class="form-control" name="section_10_conteudo_134" value="<?php if(isset($editaHome->section_10_conteudo_134) && !empty($editaHome->section_10_conteudo_134)){ echo $editaHome->section_10_conteudo_134;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 10 conteudo 135</label>
  <input type="text" class="form-control" name="section_10_conteudo_135" value="<?php if(isset($editaHome->section_10_conteudo_135) && !empty($editaHome->section_10_conteudo_135)){ echo $editaHome->section_10_conteudo_135;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 10 conteudo 136</label>
  <input type="text" class="form-control" name="section_10_conteudo_136" value="<?php if(isset($editaHome->section_10_conteudo_136) && !empty($editaHome->section_10_conteudo_136)){ echo $editaHome->section_10_conteudo_136;}?>" >
   </div>
  </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 10 img 137 ()</label>
   <input type="file" class="form-control" name="section_10_img_137" >
</div>
 </div>
 <?php if(isset($editaHome->section_10_img_137) && !empty($editaHome->section_10_img_137)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_10_img_137;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 10 image alt 137</label>
 <input type="text" class="form-control" name="section_10_image_alt_137" value="<?php if(isset($editaHome->section_10_image_alt_137) && !empty($editaHome->section_10_image_alt_137)){ echo $editaHome->section_10_image_alt_137;}?>" >
</div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 10 img 138 ()</label>
   <input type="file" class="form-control" name="section_10_img_138" >
</div>
 </div>
 <?php if(isset($editaHome->section_10_img_138) && !empty($editaHome->section_10_img_138)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_10_img_138;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 10 image alt 138</label>
 <input type="text" class="form-control" name="section_10_image_alt_138" value="<?php if(isset($editaHome->section_10_image_alt_138) && !empty($editaHome->section_10_image_alt_138)){ echo $editaHome->section_10_image_alt_138;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 10 conteudo 139</label>
  <input type="text" class="form-control" name="section_10_conteudo_139" value="<?php if(isset($editaHome->section_10_conteudo_139) && !empty($editaHome->section_10_conteudo_139)){ echo $editaHome->section_10_conteudo_139;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 10 conteudo 140</label>
  <input type="text" class="form-control" name="section_10_conteudo_140" value="<?php if(isset($editaHome->section_10_conteudo_140) && !empty($editaHome->section_10_conteudo_140)){ echo $editaHome->section_10_conteudo_140;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 10 conteudo 141</label>
  <input type="text" class="form-control" name="section_10_conteudo_141" value="<?php if(isset($editaHome->section_10_conteudo_141) && !empty($editaHome->section_10_conteudo_141)){ echo $editaHome->section_10_conteudo_141;}?>" >
   </div>
  </div>
</div>
<br>
<hr>
<h4 class="card-title">Section 11</h4>
<hr>
<br>
<div class="form-group row">
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 11 img 142 ()</label>
   <input type="file" class="form-control" name="section_11_img_142" >
</div>
 </div>
 <?php if(isset($editaHome->section_11_img_142) && !empty($editaHome->section_11_img_142)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_11_img_142;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 11 image alt 142</label>
 <input type="text" class="form-control" name="section_11_image_alt_142" value="<?php if(isset($editaHome->section_11_image_alt_142) && !empty($editaHome->section_11_image_alt_142)){ echo $editaHome->section_11_image_alt_142;}?>" >
</div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 11 img 143 ()</label>
   <input type="file" class="form-control" name="section_11_img_143" >
</div>
 </div>
 <?php if(isset($editaHome->section_11_img_143) && !empty($editaHome->section_11_img_143)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_11_img_143;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 11 image alt 143</label>
 <input type="text" class="form-control" name="section_11_image_alt_143" value="<?php if(isset($editaHome->section_11_image_alt_143) && !empty($editaHome->section_11_image_alt_143)){ echo $editaHome->section_11_image_alt_143;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 11 conteudo 144</label>
  <input type="text" class="form-control" name="section_11_conteudo_144" value="<?php if(isset($editaHome->section_11_conteudo_144) && !empty($editaHome->section_11_conteudo_144)){ echo $editaHome->section_11_conteudo_144;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 11 conteudo 145</label>
  <input type="text" class="form-control" name="section_11_conteudo_145" value="<?php if(isset($editaHome->section_11_conteudo_145) && !empty($editaHome->section_11_conteudo_145)){ echo $editaHome->section_11_conteudo_145;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 11 conteudo 146</label>
  <input type="text" class="form-control" name="section_11_conteudo_146" value="<?php if(isset($editaHome->section_11_conteudo_146) && !empty($editaHome->section_11_conteudo_146)){ echo $editaHome->section_11_conteudo_146;}?>" >
   </div>
  </div>
</div>
<br>
<hr>
<h4 class="card-title">Section 12</h4>
<hr>
<br>
<div class="form-group row">
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 12 img 147 ()</label>
   <input type="file" class="form-control" name="section_12_img_147" >
</div>
 </div>
 <?php if(isset($editaHome->section_12_img_147) && !empty($editaHome->section_12_img_147)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_12_img_147;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 12 image alt 147</label>
 <input type="text" class="form-control" name="section_12_image_alt_147" value="<?php if(isset($editaHome->section_12_image_alt_147) && !empty($editaHome->section_12_image_alt_147)){ echo $editaHome->section_12_image_alt_147;}?>" >
</div>
 </div>
</div>
<br>
<hr>
<h4 class="card-title">Section 13</h4>
<hr>
<br>
<div class="form-group row">
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 13 conteudo 148</label>
  <input type="text" class="form-control" name="section_13_conteudo_148" value="<?php if(isset($editaHome->section_13_conteudo_148) && !empty($editaHome->section_13_conteudo_148)){ echo $editaHome->section_13_conteudo_148;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 13 conteudo 149</label>
  <input type="text" class="form-control" name="section_13_conteudo_149" value="<?php if(isset($editaHome->section_13_conteudo_149) && !empty($editaHome->section_13_conteudo_149)){ echo $editaHome->section_13_conteudo_149;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 13 conteudo 150</label>
  <input type="text" class="form-control" name="section_13_conteudo_150" value="<?php if(isset($editaHome->section_13_conteudo_150) && !empty($editaHome->section_13_conteudo_150)){ echo $editaHome->section_13_conteudo_150;}?>" >
   </div>
  </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 13 img 151 ()</label>
   <input type="file" class="form-control" name="section_13_img_151" >
</div>
 </div>
 <?php if(isset($editaHome->section_13_img_151) && !empty($editaHome->section_13_img_151)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_13_img_151;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 13 image alt 151</label>
 <input type="text" class="form-control" name="section_13_image_alt_151" value="<?php if(isset($editaHome->section_13_image_alt_151) && !empty($editaHome->section_13_image_alt_151)){ echo $editaHome->section_13_image_alt_151;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 13 link 153</label>
<input type="text" class="form-control" name="section_13_link_153" value="<?php if(isset($editaHome->section_13_link_153) && !empty($editaHome->section_13_link_153)){ echo $editaHome->section_13_link_153;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 13 link alt 153</label>
<input type="text" class="form-control" name="section_13_link_alt_153" value="<?php if(isset($editaHome->section_13_link_alt_153) && !empty($editaHome->section_13_link_alt_153)){ echo $editaHome->section_13_link_alt_153;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 13 link 154</label>
<input type="text" class="form-control" name="section_13_link_154" value="<?php if(isset($editaHome->section_13_link_154) && !empty($editaHome->section_13_link_154)){ echo $editaHome->section_13_link_154;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 13 link alt 154</label>
<input type="text" class="form-control" name="section_13_link_alt_154" value="<?php if(isset($editaHome->section_13_link_alt_154) && !empty($editaHome->section_13_link_alt_154)){ echo $editaHome->section_13_link_alt_154;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 13 link 155</label>
<input type="text" class="form-control" name="section_13_link_155" value="<?php if(isset($editaHome->section_13_link_155) && !empty($editaHome->section_13_link_155)){ echo $editaHome->section_13_link_155;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 13 link alt 155</label>
<input type="text" class="form-control" name="section_13_link_alt_155" value="<?php if(isset($editaHome->section_13_link_alt_155) && !empty($editaHome->section_13_link_alt_155)){ echo $editaHome->section_13_link_alt_155;}?>" >
</div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 13 img 156 ()</label>
   <input type="file" class="form-control" name="section_13_img_156" >
</div>
 </div>
 <?php if(isset($editaHome->section_13_img_156) && !empty($editaHome->section_13_img_156)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_13_img_156;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 13 image alt 156</label>
 <input type="text" class="form-control" name="section_13_image_alt_156" value="<?php if(isset($editaHome->section_13_image_alt_156) && !empty($editaHome->section_13_image_alt_156)){ echo $editaHome->section_13_image_alt_156;}?>" >
</div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 13 img 157 ()</label>
   <input type="file" class="form-control" name="section_13_img_157" >
</div>
 </div>
 <?php if(isset($editaHome->section_13_img_157) && !empty($editaHome->section_13_img_157)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_13_img_157;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 13 image alt 157</label>
 <input type="text" class="form-control" name="section_13_image_alt_157" value="<?php if(isset($editaHome->section_13_image_alt_157) && !empty($editaHome->section_13_image_alt_157)){ echo $editaHome->section_13_image_alt_157;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 13 conteudo 158</label>
  <input type="text" class="form-control" name="section_13_conteudo_158" value="<?php if(isset($editaHome->section_13_conteudo_158) && !empty($editaHome->section_13_conteudo_158)){ echo $editaHome->section_13_conteudo_158;}?>" >
   </div>
  </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 13 link 159</label>
<input type="text" class="form-control" name="section_13_link_159" value="<?php if(isset($editaHome->section_13_link_159) && !empty($editaHome->section_13_link_159)){ echo $editaHome->section_13_link_159;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 13 link alt 159</label>
<input type="text" class="form-control" name="section_13_link_alt_159" value="<?php if(isset($editaHome->section_13_link_alt_159) && !empty($editaHome->section_13_link_alt_159)){ echo $editaHome->section_13_link_alt_159;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 13 link conteudo 159</label>
 <input type="text" class="form-control" name="section_13_link_conteudo_159" value="<?php if(isset($editaHome->section_13_link_conteudo_159) && !empty($editaHome->section_13_link_conteudo_159)){ echo $editaHome->section_13_link_conteudo_159;}?>" >
 </div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 13 conteudo 160</label>
  <input type="text" class="form-control" name="section_13_conteudo_160" value="<?php if(isset($editaHome->section_13_conteudo_160) && !empty($editaHome->section_13_conteudo_160)){ echo $editaHome->section_13_conteudo_160;}?>" >
   </div>
  </div>
</div>
<br>
<hr>
<h4 class="card-title">Section 14</h4>
<hr>
<br>
<div class="form-group row">
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 14 img 161 ()</label>
   <input type="file" class="form-control" name="section_14_img_161" >
</div>
 </div>
 <?php if(isset($editaHome->section_14_img_161) && !empty($editaHome->section_14_img_161)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_14_img_161;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 14 image alt 161</label>
 <input type="text" class="form-control" name="section_14_image_alt_161" value="<?php if(isset($editaHome->section_14_image_alt_161) && !empty($editaHome->section_14_image_alt_161)){ echo $editaHome->section_14_image_alt_161;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 14 link 163</label>
<input type="text" class="form-control" name="section_14_link_163" value="<?php if(isset($editaHome->section_14_link_163) && !empty($editaHome->section_14_link_163)){ echo $editaHome->section_14_link_163;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 14 link alt 163</label>
<input type="text" class="form-control" name="section_14_link_alt_163" value="<?php if(isset($editaHome->section_14_link_alt_163) && !empty($editaHome->section_14_link_alt_163)){ echo $editaHome->section_14_link_alt_163;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 14 link 164</label>
<input type="text" class="form-control" name="section_14_link_164" value="<?php if(isset($editaHome->section_14_link_164) && !empty($editaHome->section_14_link_164)){ echo $editaHome->section_14_link_164;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 14 link alt 164</label>
<input type="text" class="form-control" name="section_14_link_alt_164" value="<?php if(isset($editaHome->section_14_link_alt_164) && !empty($editaHome->section_14_link_alt_164)){ echo $editaHome->section_14_link_alt_164;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 14 link 165</label>
<input type="text" class="form-control" name="section_14_link_165" value="<?php if(isset($editaHome->section_14_link_165) && !empty($editaHome->section_14_link_165)){ echo $editaHome->section_14_link_165;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 14 link alt 165</label>
<input type="text" class="form-control" name="section_14_link_alt_165" value="<?php if(isset($editaHome->section_14_link_alt_165) && !empty($editaHome->section_14_link_alt_165)){ echo $editaHome->section_14_link_alt_165;}?>" >
</div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 14 img 166 ()</label>
   <input type="file" class="form-control" name="section_14_img_166" >
</div>
 </div>
 <?php if(isset($editaHome->section_14_img_166) && !empty($editaHome->section_14_img_166)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_14_img_166;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 14 image alt 166</label>
 <input type="text" class="form-control" name="section_14_image_alt_166" value="<?php if(isset($editaHome->section_14_image_alt_166) && !empty($editaHome->section_14_image_alt_166)){ echo $editaHome->section_14_image_alt_166;}?>" >
</div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 14 img 167 ()</label>
   <input type="file" class="form-control" name="section_14_img_167" >
</div>
 </div>
 <?php if(isset($editaHome->section_14_img_167) && !empty($editaHome->section_14_img_167)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_14_img_167;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 14 image alt 167</label>
 <input type="text" class="form-control" name="section_14_image_alt_167" value="<?php if(isset($editaHome->section_14_image_alt_167) && !empty($editaHome->section_14_image_alt_167)){ echo $editaHome->section_14_image_alt_167;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 14 conteudo 168</label>
  <input type="text" class="form-control" name="section_14_conteudo_168" value="<?php if(isset($editaHome->section_14_conteudo_168) && !empty($editaHome->section_14_conteudo_168)){ echo $editaHome->section_14_conteudo_168;}?>" >
   </div>
  </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 14 link 169</label>
<input type="text" class="form-control" name="section_14_link_169" value="<?php if(isset($editaHome->section_14_link_169) && !empty($editaHome->section_14_link_169)){ echo $editaHome->section_14_link_169;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 14 link alt 169</label>
<input type="text" class="form-control" name="section_14_link_alt_169" value="<?php if(isset($editaHome->section_14_link_alt_169) && !empty($editaHome->section_14_link_alt_169)){ echo $editaHome->section_14_link_alt_169;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 14 link conteudo 169</label>
 <input type="text" class="form-control" name="section_14_link_conteudo_169" value="<?php if(isset($editaHome->section_14_link_conteudo_169) && !empty($editaHome->section_14_link_conteudo_169)){ echo $editaHome->section_14_link_conteudo_169;}?>" >
 </div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 14 conteudo 170</label>
  <input type="text" class="form-control" name="section_14_conteudo_170" value="<?php if(isset($editaHome->section_14_conteudo_170) && !empty($editaHome->section_14_conteudo_170)){ echo $editaHome->section_14_conteudo_170;}?>" >
   </div>
  </div>
</div>
<br>
<hr>
<h4 class="card-title">Section 15</h4>
<hr>
<br>
<div class="form-group row">
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 15 img 171 ()</label>
   <input type="file" class="form-control" name="section_15_img_171" >
</div>
 </div>
 <?php if(isset($editaHome->section_15_img_171) && !empty($editaHome->section_15_img_171)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_15_img_171;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 15 image alt 171</label>
 <input type="text" class="form-control" name="section_15_image_alt_171" value="<?php if(isset($editaHome->section_15_image_alt_171) && !empty($editaHome->section_15_image_alt_171)){ echo $editaHome->section_15_image_alt_171;}?>" >
</div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 15 img 172 ()</label>
   <input type="file" class="form-control" name="section_15_img_172" >
</div>
 </div>
 <?php if(isset($editaHome->section_15_img_172) && !empty($editaHome->section_15_img_172)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_15_img_172;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 15 image alt 172</label>
 <input type="text" class="form-control" name="section_15_image_alt_172" value="<?php if(isset($editaHome->section_15_image_alt_172) && !empty($editaHome->section_15_image_alt_172)){ echo $editaHome->section_15_image_alt_172;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 15 conteudo 173</label>
  <input type="text" class="form-control" name="section_15_conteudo_173" value="<?php if(isset($editaHome->section_15_conteudo_173) && !empty($editaHome->section_15_conteudo_173)){ echo $editaHome->section_15_conteudo_173;}?>" >
   </div>
  </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 15 link 174</label>
<input type="text" class="form-control" name="section_15_link_174" value="<?php if(isset($editaHome->section_15_link_174) && !empty($editaHome->section_15_link_174)){ echo $editaHome->section_15_link_174;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 15 link alt 174</label>
<input type="text" class="form-control" name="section_15_link_alt_174" value="<?php if(isset($editaHome->section_15_link_alt_174) && !empty($editaHome->section_15_link_alt_174)){ echo $editaHome->section_15_link_alt_174;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 15 link conteudo 174</label>
 <input type="text" class="form-control" name="section_15_link_conteudo_174" value="<?php if(isset($editaHome->section_15_link_conteudo_174) && !empty($editaHome->section_15_link_conteudo_174)){ echo $editaHome->section_15_link_conteudo_174;}?>" >
 </div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 15 conteudo 175</label>
  <input type="text" class="form-control" name="section_15_conteudo_175" value="<?php if(isset($editaHome->section_15_conteudo_175) && !empty($editaHome->section_15_conteudo_175)){ echo $editaHome->section_15_conteudo_175;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 15 conteudo 176</label>
  <input type="text" class="form-control" name="section_15_conteudo_176" value="<?php if(isset($editaHome->section_15_conteudo_176) && !empty($editaHome->section_15_conteudo_176)){ echo $editaHome->section_15_conteudo_176;}?>" >
   </div>
  </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 15 img 177 ()</label>
   <input type="file" class="form-control" name="section_15_img_177" >
</div>
 </div>
 <?php if(isset($editaHome->section_15_img_177) && !empty($editaHome->section_15_img_177)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_15_img_177;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 15 image alt 177</label>
 <input type="text" class="form-control" name="section_15_image_alt_177" value="<?php if(isset($editaHome->section_15_image_alt_177) && !empty($editaHome->section_15_image_alt_177)){ echo $editaHome->section_15_image_alt_177;}?>" >
</div>
 </div>
</div>
<br>
<hr>
<h4 class="card-title">Section 16</h4>
<hr>
<br>
<div class="form-group row">
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 16 conteudo 178</label>
  <input type="text" class="form-control" name="section_16_conteudo_178" value="<?php if(isset($editaHome->section_16_conteudo_178) && !empty($editaHome->section_16_conteudo_178)){ echo $editaHome->section_16_conteudo_178;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 16 conteudo 179</label>
  <input type="text" class="form-control" name="section_16_conteudo_179" value="<?php if(isset($editaHome->section_16_conteudo_179) && !empty($editaHome->section_16_conteudo_179)){ echo $editaHome->section_16_conteudo_179;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 16 conteudo 180</label>
  <input type="text" class="form-control" name="section_16_conteudo_180" value="<?php if(isset($editaHome->section_16_conteudo_180) && !empty($editaHome->section_16_conteudo_180)){ echo $editaHome->section_16_conteudo_180;}?>" >
   </div>
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
<div class="form-group">
<label class="mr-sm-2" for="">Meta Title</label>
<textarea name="meta_title" class="form-control" id="ckeditor" cols="30" rows="4"><?php if(isset($editaHome->meta_title) && !empty($editaHome->meta_title)){ echo $editaHome->meta_title;}?></textarea>
</div>
</div>
</div>
<div class="form-group row">
<div class="col-md-12">
<div class="form-group">
<label class="mr-sm-2" for="">Meta Keywords</label>
 <textarea name="meta_keywords" class="form-control" id="ckeditor" cols="30" rows="4"><?php if(isset($editaHome->meta_keywords) && !empty($editaHome->meta_keywords)){ echo $editaHome->meta_keywords;}?></textarea>
</div>
  </div>
</div>
<div class="form-group row">
<div class="col-md-12">
<div class="form-group">
 <label class="mr-sm-2" for="">Meta Description</label>
 <textarea name="meta_description" class="form-control" id="ckeditor" cols="30" rows="4"><?php if(isset($editaHome->meta_description) && !empty($editaHome->meta_description)){ echo $editaHome->meta_description;}?></textarea>
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
<input type="hidden" name="acao" value="editaHome">
<input type="hidden" name="id" value="<?php if(isset($editaHome->id) && !empty($editaHome->id)){ echo $editaHome->id;}?>">
<input type="hidden" name="section_1_img_3_Atual" value="<?php if(isset($editaHome->section_1_img_3) && !empty($editaHome->section_1_img_3)){ echo $editaHome->section_1_img_3;}?>">
<input type="hidden" name="section_1_img_4_Atual" value="<?php if(isset($editaHome->section_1_img_4) && !empty($editaHome->section_1_img_4)){ echo $editaHome->section_1_img_4;}?>">
<input type="hidden" name="section_1_img_9_Atual" value="<?php if(isset($editaHome->section_1_img_9) && !empty($editaHome->section_1_img_9)){ echo $editaHome->section_1_img_9;}?>">
<input type="hidden" name="section_1_img_10_Atual" value="<?php if(isset($editaHome->section_1_img_10) && !empty($editaHome->section_1_img_10)){ echo $editaHome->section_1_img_10;}?>">
<input type="hidden" name="section_1_img_15_Atual" value="<?php if(isset($editaHome->section_1_img_15) && !empty($editaHome->section_1_img_15)){ echo $editaHome->section_1_img_15;}?>">
<input type="hidden" name="section_1_img_16_Atual" value="<?php if(isset($editaHome->section_1_img_16) && !empty($editaHome->section_1_img_16)){ echo $editaHome->section_1_img_16;}?>">
<input type="hidden" name="section_3_img_29_Atual" value="<?php if(isset($editaHome->section_3_img_29) && !empty($editaHome->section_3_img_29)){ echo $editaHome->section_3_img_29;}?>">
<input type="hidden" name="section_3_img_31_Atual" value="<?php if(isset($editaHome->section_3_img_31) && !empty($editaHome->section_3_img_31)){ echo $editaHome->section_3_img_31;}?>">
<input type="hidden" name="section_3_img_32_Atual" value="<?php if(isset($editaHome->section_3_img_32) && !empty($editaHome->section_3_img_32)){ echo $editaHome->section_3_img_32;}?>">
<input type="hidden" name="section_3_img_33_Atual" value="<?php if(isset($editaHome->section_3_img_33) && !empty($editaHome->section_3_img_33)){ echo $editaHome->section_3_img_33;}?>">
<input type="hidden" name="section_3_img_34_Atual" value="<?php if(isset($editaHome->section_3_img_34) && !empty($editaHome->section_3_img_34)){ echo $editaHome->section_3_img_34;}?>">
<input type="hidden" name="section_3_img_39_Atual" value="<?php if(isset($editaHome->section_3_img_39) && !empty($editaHome->section_3_img_39)){ echo $editaHome->section_3_img_39;}?>">
<input type="hidden" name="section_3_img_46_Atual" value="<?php if(isset($editaHome->section_3_img_46) && !empty($editaHome->section_3_img_46)){ echo $editaHome->section_3_img_46;}?>">
<input type="hidden" name="section_4_img_47_Atual" value="<?php if(isset($editaHome->section_4_img_47) && !empty($editaHome->section_4_img_47)){ echo $editaHome->section_4_img_47;}?>">
<input type="hidden" name="section_4_img_48_Atual" value="<?php if(isset($editaHome->section_4_img_48) && !empty($editaHome->section_4_img_48)){ echo $editaHome->section_4_img_48;}?>">
<input type="hidden" name="section_4_img_52_Atual" value="<?php if(isset($editaHome->section_4_img_52) && !empty($editaHome->section_4_img_52)){ echo $editaHome->section_4_img_52;}?>">
<input type="hidden" name="section_5_img_59_Atual" value="<?php if(isset($editaHome->section_5_img_59) && !empty($editaHome->section_5_img_59)){ echo $editaHome->section_5_img_59;}?>">
<input type="hidden" name="section_6_img_71_Atual" value="<?php if(isset($editaHome->section_6_img_71) && !empty($editaHome->section_6_img_71)){ echo $editaHome->section_6_img_71;}?>">
<input type="hidden" name="section_6_img_73_Atual" value="<?php if(isset($editaHome->section_6_img_73) && !empty($editaHome->section_6_img_73)){ echo $editaHome->section_6_img_73;}?>">
<input type="hidden" name="section_6_img_75_Atual" value="<?php if(isset($editaHome->section_6_img_75) && !empty($editaHome->section_6_img_75)){ echo $editaHome->section_6_img_75;}?>">
<input type="hidden" name="section_6_img_77_Atual" value="<?php if(isset($editaHome->section_6_img_77) && !empty($editaHome->section_6_img_77)){ echo $editaHome->section_6_img_77;}?>">
<input type="hidden" name="section_8_img_102_Atual" value="<?php if(isset($editaHome->section_8_img_102) && !empty($editaHome->section_8_img_102)){ echo $editaHome->section_8_img_102;}?>">
<input type="hidden" name="section_8_img_104_Atual" value="<?php if(isset($editaHome->section_8_img_104) && !empty($editaHome->section_8_img_104)){ echo $editaHome->section_8_img_104;}?>">
<input type="hidden" name="section_8_img_105_Atual" value="<?php if(isset($editaHome->section_8_img_105) && !empty($editaHome->section_8_img_105)){ echo $editaHome->section_8_img_105;}?>">
<input type="hidden" name="section_8_img_106_Atual" value="<?php if(isset($editaHome->section_8_img_106) && !empty($editaHome->section_8_img_106)){ echo $editaHome->section_8_img_106;}?>">
<input type="hidden" name="section_9_img_115_Atual" value="<?php if(isset($editaHome->section_9_img_115) && !empty($editaHome->section_9_img_115)){ echo $editaHome->section_9_img_115;}?>">
<input type="hidden" name="section_10_img_132_Atual" value="<?php if(isset($editaHome->section_10_img_132) && !empty($editaHome->section_10_img_132)){ echo $editaHome->section_10_img_132;}?>">
<input type="hidden" name="section_10_img_133_Atual" value="<?php if(isset($editaHome->section_10_img_133) && !empty($editaHome->section_10_img_133)){ echo $editaHome->section_10_img_133;}?>">
<input type="hidden" name="section_10_img_137_Atual" value="<?php if(isset($editaHome->section_10_img_137) && !empty($editaHome->section_10_img_137)){ echo $editaHome->section_10_img_137;}?>">
<input type="hidden" name="section_10_img_138_Atual" value="<?php if(isset($editaHome->section_10_img_138) && !empty($editaHome->section_10_img_138)){ echo $editaHome->section_10_img_138;}?>">
<input type="hidden" name="section_11_img_142_Atual" value="<?php if(isset($editaHome->section_11_img_142) && !empty($editaHome->section_11_img_142)){ echo $editaHome->section_11_img_142;}?>">
<input type="hidden" name="section_11_img_143_Atual" value="<?php if(isset($editaHome->section_11_img_143) && !empty($editaHome->section_11_img_143)){ echo $editaHome->section_11_img_143;}?>">
<input type="hidden" name="section_12_img_147_Atual" value="<?php if(isset($editaHome->section_12_img_147) && !empty($editaHome->section_12_img_147)){ echo $editaHome->section_12_img_147;}?>">
<input type="hidden" name="section_13_img_151_Atual" value="<?php if(isset($editaHome->section_13_img_151) && !empty($editaHome->section_13_img_151)){ echo $editaHome->section_13_img_151;}?>">
<input type="hidden" name="section_13_img_156_Atual" value="<?php if(isset($editaHome->section_13_img_156) && !empty($editaHome->section_13_img_156)){ echo $editaHome->section_13_img_156;}?>">
<input type="hidden" name="section_13_img_157_Atual" value="<?php if(isset($editaHome->section_13_img_157) && !empty($editaHome->section_13_img_157)){ echo $editaHome->section_13_img_157;}?>">
<input type="hidden" name="section_14_img_161_Atual" value="<?php if(isset($editaHome->section_14_img_161) && !empty($editaHome->section_14_img_161)){ echo $editaHome->section_14_img_161;}?>">
<input type="hidden" name="section_14_img_166_Atual" value="<?php if(isset($editaHome->section_14_img_166) && !empty($editaHome->section_14_img_166)){ echo $editaHome->section_14_img_166;}?>">
<input type="hidden" name="section_14_img_167_Atual" value="<?php if(isset($editaHome->section_14_img_167) && !empty($editaHome->section_14_img_167)){ echo $editaHome->section_14_img_167;}?>">
<input type="hidden" name="section_15_img_171_Atual" value="<?php if(isset($editaHome->section_15_img_171) && !empty($editaHome->section_15_img_171)){ echo $editaHome->section_15_img_171;}?>">
<input type="hidden" name="section_15_img_172_Atual" value="<?php if(isset($editaHome->section_15_img_172) && !empty($editaHome->section_15_img_172)){ echo $editaHome->section_15_img_172;}?>">
<input type="hidden" name="section_15_img_177_Atual" value="<?php if(isset($editaHome->section_15_img_177) && !empty($editaHome->section_15_img_177)){ echo $editaHome->section_15_img_177;}?>">
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
