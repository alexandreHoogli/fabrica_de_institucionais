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
 <label class="mr-sm-2" for="">section 1 link 1</label>
<input type="text" class="form-control" name="section_1_link_1" value="<?php if(isset($editaHome->section_1_link_1) && !empty($editaHome->section_1_link_1)){ echo $editaHome->section_1_link_1;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 1 link alt 1</label>
<input type="text" class="form-control" name="section_1_link_alt_1" value="<?php if(isset($editaHome->section_1_link_alt_1) && !empty($editaHome->section_1_link_alt_1)){ echo $editaHome->section_1_link_alt_1;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 1 link conteudo 1</label>
 <input type="text" class="form-control" name="section_1_link_conteudo_1" value="<?php if(isset($editaHome->section_1_link_conteudo_1) && !empty($editaHome->section_1_link_conteudo_1)){ echo $editaHome->section_1_link_conteudo_1;}?>" >
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
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 1 img 5 ()</label>
   <input type="file" class="form-control" name="section_1_img_5" >
</div>
 </div>
 <?php if(isset($editaHome->section_1_img_5) && !empty($editaHome->section_1_img_5)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_1_img_5;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 1 image alt 5</label>
 <input type="text" class="form-control" name="section_1_image_alt_5" value="<?php if(isset($editaHome->section_1_image_alt_5) && !empty($editaHome->section_1_image_alt_5)){ echo $editaHome->section_1_image_alt_5;}?>" >
</div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 1 img 6 ()</label>
   <input type="file" class="form-control" name="section_1_img_6" >
</div>
 </div>
 <?php if(isset($editaHome->section_1_img_6) && !empty($editaHome->section_1_img_6)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_1_img_6;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 1 image alt 6</label>
 <input type="text" class="form-control" name="section_1_image_alt_6" value="<?php if(isset($editaHome->section_1_image_alt_6) && !empty($editaHome->section_1_image_alt_6)){ echo $editaHome->section_1_image_alt_6;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 1 conteudo 7</label>
  <input type="text" class="form-control" name="section_1_conteudo_7" value="<?php if(isset($editaHome->section_1_conteudo_7) && !empty($editaHome->section_1_conteudo_7)){ echo $editaHome->section_1_conteudo_7;}?>" >
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
 <label class="mr-sm-2" for="">section 1 link 9</label>
<input type="text" class="form-control" name="section_1_link_9" value="<?php if(isset($editaHome->section_1_link_9) && !empty($editaHome->section_1_link_9)){ echo $editaHome->section_1_link_9;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 1 link alt 9</label>
<input type="text" class="form-control" name="section_1_link_alt_9" value="<?php if(isset($editaHome->section_1_link_alt_9) && !empty($editaHome->section_1_link_alt_9)){ echo $editaHome->section_1_link_alt_9;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 1 link conteudo 9</label>
 <input type="text" class="form-control" name="section_1_link_conteudo_9" value="<?php if(isset($editaHome->section_1_link_conteudo_9) && !empty($editaHome->section_1_link_conteudo_9)){ echo $editaHome->section_1_link_conteudo_9;}?>" >
 </div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 1 conteudo 10</label>
  <input type="text" class="form-control" name="section_1_conteudo_10" value="<?php if(isset($editaHome->section_1_conteudo_10) && !empty($editaHome->section_1_conteudo_10)){ echo $editaHome->section_1_conteudo_10;}?>" >
   </div>
  </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 1 img 11 ()</label>
   <input type="file" class="form-control" name="section_1_img_11" >
</div>
 </div>
 <?php if(isset($editaHome->section_1_img_11) && !empty($editaHome->section_1_img_11)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_1_img_11;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 1 image alt 11</label>
 <input type="text" class="form-control" name="section_1_image_alt_11" value="<?php if(isset($editaHome->section_1_image_alt_11) && !empty($editaHome->section_1_image_alt_11)){ echo $editaHome->section_1_image_alt_11;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 1 conteudo 12</label>
  <input type="text" class="form-control" name="section_1_conteudo_12" value="<?php if(isset($editaHome->section_1_conteudo_12) && !empty($editaHome->section_1_conteudo_12)){ echo $editaHome->section_1_conteudo_12;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 1 conteudo 13</label>
  <input type="text" class="form-control" name="section_1_conteudo_13" value="<?php if(isset($editaHome->section_1_conteudo_13) && !empty($editaHome->section_1_conteudo_13)){ echo $editaHome->section_1_conteudo_13;}?>" >
   </div>
  </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 1 link 14</label>
<input type="text" class="form-control" name="section_1_link_14" value="<?php if(isset($editaHome->section_1_link_14) && !empty($editaHome->section_1_link_14)){ echo $editaHome->section_1_link_14;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 1 link alt 14</label>
<input type="text" class="form-control" name="section_1_link_alt_14" value="<?php if(isset($editaHome->section_1_link_alt_14) && !empty($editaHome->section_1_link_alt_14)){ echo $editaHome->section_1_link_alt_14;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 1 link conteudo 14</label>
 <input type="text" class="form-control" name="section_1_link_conteudo_14" value="<?php if(isset($editaHome->section_1_link_conteudo_14) && !empty($editaHome->section_1_link_conteudo_14)){ echo $editaHome->section_1_link_conteudo_14;}?>" >
 </div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 1 conteudo 15</label>
  <input type="text" class="form-control" name="section_1_conteudo_15" value="<?php if(isset($editaHome->section_1_conteudo_15) && !empty($editaHome->section_1_conteudo_15)){ echo $editaHome->section_1_conteudo_15;}?>" >
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
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 4 img 59 ()</label>
   <input type="file" class="form-control" name="section_4_img_59" >
</div>
 </div>
 <?php if(isset($editaHome->section_4_img_59) && !empty($editaHome->section_4_img_59)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_4_img_59;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 4 image alt 59</label>
 <input type="text" class="form-control" name="section_4_image_alt_59" value="<?php if(isset($editaHome->section_4_image_alt_59) && !empty($editaHome->section_4_image_alt_59)){ echo $editaHome->section_4_image_alt_59;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 4 conteudo 60</label>
  <input type="text" class="form-control" name="section_4_conteudo_60" value="<?php if(isset($editaHome->section_4_conteudo_60) && !empty($editaHome->section_4_conteudo_60)){ echo $editaHome->section_4_conteudo_60;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 4 conteudo 61</label>
  <input type="text" class="form-control" name="section_4_conteudo_61" value="<?php if(isset($editaHome->section_4_conteudo_61) && !empty($editaHome->section_4_conteudo_61)){ echo $editaHome->section_4_conteudo_61;}?>" >
   </div>
  </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 4 link 62</label>
<input type="text" class="form-control" name="section_4_link_62" value="<?php if(isset($editaHome->section_4_link_62) && !empty($editaHome->section_4_link_62)){ echo $editaHome->section_4_link_62;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 4 link alt 62</label>
<input type="text" class="form-control" name="section_4_link_alt_62" value="<?php if(isset($editaHome->section_4_link_alt_62) && !empty($editaHome->section_4_link_alt_62)){ echo $editaHome->section_4_link_alt_62;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 4 link conteudo 62</label>
 <input type="text" class="form-control" name="section_4_link_conteudo_62" value="<?php if(isset($editaHome->section_4_link_conteudo_62) && !empty($editaHome->section_4_link_conteudo_62)){ echo $editaHome->section_4_link_conteudo_62;}?>" >
 </div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 4 conteudo 63</label>
  <input type="text" class="form-control" name="section_4_conteudo_63" value="<?php if(isset($editaHome->section_4_conteudo_63) && !empty($editaHome->section_4_conteudo_63)){ echo $editaHome->section_4_conteudo_63;}?>" >
   </div>
  </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 4 link 64</label>
<input type="text" class="form-control" name="section_4_link_64" value="<?php if(isset($editaHome->section_4_link_64) && !empty($editaHome->section_4_link_64)){ echo $editaHome->section_4_link_64;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 4 link alt 64</label>
<input type="text" class="form-control" name="section_4_link_alt_64" value="<?php if(isset($editaHome->section_4_link_alt_64) && !empty($editaHome->section_4_link_alt_64)){ echo $editaHome->section_4_link_alt_64;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 4 link conteudo 64</label>
 <input type="text" class="form-control" name="section_4_link_conteudo_64" value="<?php if(isset($editaHome->section_4_link_conteudo_64) && !empty($editaHome->section_4_link_conteudo_64)){ echo $editaHome->section_4_link_conteudo_64;}?>" >
 </div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 4 conteudo 65</label>
  <input type="text" class="form-control" name="section_4_conteudo_65" value="<?php if(isset($editaHome->section_4_conteudo_65) && !empty($editaHome->section_4_conteudo_65)){ echo $editaHome->section_4_conteudo_65;}?>" >
   </div>
  </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 4 img 66 ()</label>
   <input type="file" class="form-control" name="section_4_img_66" >
</div>
 </div>
 <?php if(isset($editaHome->section_4_img_66) && !empty($editaHome->section_4_img_66)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_4_img_66;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 4 image alt 66</label>
 <input type="text" class="form-control" name="section_4_image_alt_66" value="<?php if(isset($editaHome->section_4_image_alt_66) && !empty($editaHome->section_4_image_alt_66)){ echo $editaHome->section_4_image_alt_66;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 4 conteudo 67</label>
  <input type="text" class="form-control" name="section_4_conteudo_67" value="<?php if(isset($editaHome->section_4_conteudo_67) && !empty($editaHome->section_4_conteudo_67)){ echo $editaHome->section_4_conteudo_67;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 4 conteudo 68</label>
  <input type="text" class="form-control" name="section_4_conteudo_68" value="<?php if(isset($editaHome->section_4_conteudo_68) && !empty($editaHome->section_4_conteudo_68)){ echo $editaHome->section_4_conteudo_68;}?>" >
   </div>
  </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 4 link 69</label>
<input type="text" class="form-control" name="section_4_link_69" value="<?php if(isset($editaHome->section_4_link_69) && !empty($editaHome->section_4_link_69)){ echo $editaHome->section_4_link_69;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 4 link alt 69</label>
<input type="text" class="form-control" name="section_4_link_alt_69" value="<?php if(isset($editaHome->section_4_link_alt_69) && !empty($editaHome->section_4_link_alt_69)){ echo $editaHome->section_4_link_alt_69;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 4 link conteudo 69</label>
 <input type="text" class="form-control" name="section_4_link_conteudo_69" value="<?php if(isset($editaHome->section_4_link_conteudo_69) && !empty($editaHome->section_4_link_conteudo_69)){ echo $editaHome->section_4_link_conteudo_69;}?>" >
 </div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 4 conteudo 70</label>
  <input type="text" class="form-control" name="section_4_conteudo_70" value="<?php if(isset($editaHome->section_4_conteudo_70) && !empty($editaHome->section_4_conteudo_70)){ echo $editaHome->section_4_conteudo_70;}?>" >
   </div>
  </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 4 link 71</label>
<input type="text" class="form-control" name="section_4_link_71" value="<?php if(isset($editaHome->section_4_link_71) && !empty($editaHome->section_4_link_71)){ echo $editaHome->section_4_link_71;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 4 link alt 71</label>
<input type="text" class="form-control" name="section_4_link_alt_71" value="<?php if(isset($editaHome->section_4_link_alt_71) && !empty($editaHome->section_4_link_alt_71)){ echo $editaHome->section_4_link_alt_71;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 4 link conteudo 71</label>
 <input type="text" class="form-control" name="section_4_link_conteudo_71" value="<?php if(isset($editaHome->section_4_link_conteudo_71) && !empty($editaHome->section_4_link_conteudo_71)){ echo $editaHome->section_4_link_conteudo_71;}?>" >
 </div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 4 conteudo 72</label>
  <input type="text" class="form-control" name="section_4_conteudo_72" value="<?php if(isset($editaHome->section_4_conteudo_72) && !empty($editaHome->section_4_conteudo_72)){ echo $editaHome->section_4_conteudo_72;}?>" >
   </div>
  </div>
</div>
<br>
<hr>
<h4 class="card-title">Section 5</h4>
<hr>
<br>
<div class="form-group row">
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 5 conteudo 73</label>
  <input type="text" class="form-control" name="section_5_conteudo_73" value="<?php if(isset($editaHome->section_5_conteudo_73) && !empty($editaHome->section_5_conteudo_73)){ echo $editaHome->section_5_conteudo_73;}?>" >
   </div>
  </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 5 link 74</label>
<input type="text" class="form-control" name="section_5_link_74" value="<?php if(isset($editaHome->section_5_link_74) && !empty($editaHome->section_5_link_74)){ echo $editaHome->section_5_link_74;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 5 link alt 74</label>
<input type="text" class="form-control" name="section_5_link_alt_74" value="<?php if(isset($editaHome->section_5_link_alt_74) && !empty($editaHome->section_5_link_alt_74)){ echo $editaHome->section_5_link_alt_74;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 5 link conteudo 74</label>
 <input type="text" class="form-control" name="section_5_link_conteudo_74" value="<?php if(isset($editaHome->section_5_link_conteudo_74) && !empty($editaHome->section_5_link_conteudo_74)){ echo $editaHome->section_5_link_conteudo_74;}?>" >
 </div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 5 conteudo 75</label>
  <input type="text" class="form-control" name="section_5_conteudo_75" value="<?php if(isset($editaHome->section_5_conteudo_75) && !empty($editaHome->section_5_conteudo_75)){ echo $editaHome->section_5_conteudo_75;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 5 conteudo 76</label>
  <input type="text" class="form-control" name="section_5_conteudo_76" value="<?php if(isset($editaHome->section_5_conteudo_76) && !empty($editaHome->section_5_conteudo_76)){ echo $editaHome->section_5_conteudo_76;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 5 conteudo 77</label>
  <input type="text" class="form-control" name="section_5_conteudo_77" value="<?php if(isset($editaHome->section_5_conteudo_77) && !empty($editaHome->section_5_conteudo_77)){ echo $editaHome->section_5_conteudo_77;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 5 conteudo 78</label>
  <input type="text" class="form-control" name="section_5_conteudo_78" value="<?php if(isset($editaHome->section_5_conteudo_78) && !empty($editaHome->section_5_conteudo_78)){ echo $editaHome->section_5_conteudo_78;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 5 conteudo 79</label>
  <input type="text" class="form-control" name="section_5_conteudo_79" value="<?php if(isset($editaHome->section_5_conteudo_79) && !empty($editaHome->section_5_conteudo_79)){ echo $editaHome->section_5_conteudo_79;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 5 conteudo 80</label>
  <input type="text" class="form-control" name="section_5_conteudo_80" value="<?php if(isset($editaHome->section_5_conteudo_80) && !empty($editaHome->section_5_conteudo_80)){ echo $editaHome->section_5_conteudo_80;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 5 conteudo 81</label>
  <input type="text" class="form-control" name="section_5_conteudo_81" value="<?php if(isset($editaHome->section_5_conteudo_81) && !empty($editaHome->section_5_conteudo_81)){ echo $editaHome->section_5_conteudo_81;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 5 conteudo 82</label>
  <input type="text" class="form-control" name="section_5_conteudo_82" value="<?php if(isset($editaHome->section_5_conteudo_82) && !empty($editaHome->section_5_conteudo_82)){ echo $editaHome->section_5_conteudo_82;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 5 conteudo 83</label>
  <input type="text" class="form-control" name="section_5_conteudo_83" value="<?php if(isset($editaHome->section_5_conteudo_83) && !empty($editaHome->section_5_conteudo_83)){ echo $editaHome->section_5_conteudo_83;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 5 conteudo 84</label>
  <input type="text" class="form-control" name="section_5_conteudo_84" value="<?php if(isset($editaHome->section_5_conteudo_84) && !empty($editaHome->section_5_conteudo_84)){ echo $editaHome->section_5_conteudo_84;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 5 conteudo 85</label>
  <input type="text" class="form-control" name="section_5_conteudo_85" value="<?php if(isset($editaHome->section_5_conteudo_85) && !empty($editaHome->section_5_conteudo_85)){ echo $editaHome->section_5_conteudo_85;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 5 conteudo 86</label>
  <input type="text" class="form-control" name="section_5_conteudo_86" value="<?php if(isset($editaHome->section_5_conteudo_86) && !empty($editaHome->section_5_conteudo_86)){ echo $editaHome->section_5_conteudo_86;}?>" >
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
 <label class="mr-sm-2" for="">section 6 conteudo 87</label>
  <input type="text" class="form-control" name="section_6_conteudo_87" value="<?php if(isset($editaHome->section_6_conteudo_87) && !empty($editaHome->section_6_conteudo_87)){ echo $editaHome->section_6_conteudo_87;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 6 conteudo 88</label>
  <input type="text" class="form-control" name="section_6_conteudo_88" value="<?php if(isset($editaHome->section_6_conteudo_88) && !empty($editaHome->section_6_conteudo_88)){ echo $editaHome->section_6_conteudo_88;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 6 conteudo 89</label>
  <input type="text" class="form-control" name="section_6_conteudo_89" value="<?php if(isset($editaHome->section_6_conteudo_89) && !empty($editaHome->section_6_conteudo_89)){ echo $editaHome->section_6_conteudo_89;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 6 conteudo 90</label>
  <input type="text" class="form-control" name="section_6_conteudo_90" value="<?php if(isset($editaHome->section_6_conteudo_90) && !empty($editaHome->section_6_conteudo_90)){ echo $editaHome->section_6_conteudo_90;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 6 conteudo 91</label>
  <input type="text" class="form-control" name="section_6_conteudo_91" value="<?php if(isset($editaHome->section_6_conteudo_91) && !empty($editaHome->section_6_conteudo_91)){ echo $editaHome->section_6_conteudo_91;}?>" >
   </div>
  </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 6 link 92</label>
<input type="text" class="form-control" name="section_6_link_92" value="<?php if(isset($editaHome->section_6_link_92) && !empty($editaHome->section_6_link_92)){ echo $editaHome->section_6_link_92;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 6 link alt 92</label>
<input type="text" class="form-control" name="section_6_link_alt_92" value="<?php if(isset($editaHome->section_6_link_alt_92) && !empty($editaHome->section_6_link_alt_92)){ echo $editaHome->section_6_link_alt_92;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 6 link conteudo 92</label>
 <input type="text" class="form-control" name="section_6_link_conteudo_92" value="<?php if(isset($editaHome->section_6_link_conteudo_92) && !empty($editaHome->section_6_link_conteudo_92)){ echo $editaHome->section_6_link_conteudo_92;}?>" >
 </div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 6 conteudo 93</label>
  <input type="text" class="form-control" name="section_6_conteudo_93" value="<?php if(isset($editaHome->section_6_conteudo_93) && !empty($editaHome->section_6_conteudo_93)){ echo $editaHome->section_6_conteudo_93;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 6 conteudo 94</label>
  <input type="text" class="form-control" name="section_6_conteudo_94" value="<?php if(isset($editaHome->section_6_conteudo_94) && !empty($editaHome->section_6_conteudo_94)){ echo $editaHome->section_6_conteudo_94;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 6 conteudo 95</label>
  <input type="text" class="form-control" name="section_6_conteudo_95" value="<?php if(isset($editaHome->section_6_conteudo_95) && !empty($editaHome->section_6_conteudo_95)){ echo $editaHome->section_6_conteudo_95;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 6 conteudo 96</label>
  <input type="text" class="form-control" name="section_6_conteudo_96" value="<?php if(isset($editaHome->section_6_conteudo_96) && !empty($editaHome->section_6_conteudo_96)){ echo $editaHome->section_6_conteudo_96;}?>" >
   </div>
  </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 6 link 97</label>
<input type="text" class="form-control" name="section_6_link_97" value="<?php if(isset($editaHome->section_6_link_97) && !empty($editaHome->section_6_link_97)){ echo $editaHome->section_6_link_97;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 6 link alt 97</label>
<input type="text" class="form-control" name="section_6_link_alt_97" value="<?php if(isset($editaHome->section_6_link_alt_97) && !empty($editaHome->section_6_link_alt_97)){ echo $editaHome->section_6_link_alt_97;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 6 link conteudo 97</label>
 <input type="text" class="form-control" name="section_6_link_conteudo_97" value="<?php if(isset($editaHome->section_6_link_conteudo_97) && !empty($editaHome->section_6_link_conteudo_97)){ echo $editaHome->section_6_link_conteudo_97;}?>" >
 </div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 6 conteudo 98</label>
  <input type="text" class="form-control" name="section_6_conteudo_98" value="<?php if(isset($editaHome->section_6_conteudo_98) && !empty($editaHome->section_6_conteudo_98)){ echo $editaHome->section_6_conteudo_98;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 6 conteudo 99</label>
  <input type="text" class="form-control" name="section_6_conteudo_99" value="<?php if(isset($editaHome->section_6_conteudo_99) && !empty($editaHome->section_6_conteudo_99)){ echo $editaHome->section_6_conteudo_99;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 6 conteudo 100</label>
  <input type="text" class="form-control" name="section_6_conteudo_100" value="<?php if(isset($editaHome->section_6_conteudo_100) && !empty($editaHome->section_6_conteudo_100)){ echo $editaHome->section_6_conteudo_100;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 6 conteudo 101</label>
  <input type="text" class="form-control" name="section_6_conteudo_101" value="<?php if(isset($editaHome->section_6_conteudo_101) && !empty($editaHome->section_6_conteudo_101)){ echo $editaHome->section_6_conteudo_101;}?>" >
   </div>
  </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 6 link 102</label>
<input type="text" class="form-control" name="section_6_link_102" value="<?php if(isset($editaHome->section_6_link_102) && !empty($editaHome->section_6_link_102)){ echo $editaHome->section_6_link_102;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 6 link alt 102</label>
<input type="text" class="form-control" name="section_6_link_alt_102" value="<?php if(isset($editaHome->section_6_link_alt_102) && !empty($editaHome->section_6_link_alt_102)){ echo $editaHome->section_6_link_alt_102;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 6 link conteudo 102</label>
 <input type="text" class="form-control" name="section_6_link_conteudo_102" value="<?php if(isset($editaHome->section_6_link_conteudo_102) && !empty($editaHome->section_6_link_conteudo_102)){ echo $editaHome->section_6_link_conteudo_102;}?>" >
 </div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 6 conteudo 103</label>
  <input type="text" class="form-control" name="section_6_conteudo_103" value="<?php if(isset($editaHome->section_6_conteudo_103) && !empty($editaHome->section_6_conteudo_103)){ echo $editaHome->section_6_conteudo_103;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 6 conteudo 104</label>
  <input type="text" class="form-control" name="section_6_conteudo_104" value="<?php if(isset($editaHome->section_6_conteudo_104) && !empty($editaHome->section_6_conteudo_104)){ echo $editaHome->section_6_conteudo_104;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 6 conteudo 105</label>
  <input type="text" class="form-control" name="section_6_conteudo_105" value="<?php if(isset($editaHome->section_6_conteudo_105) && !empty($editaHome->section_6_conteudo_105)){ echo $editaHome->section_6_conteudo_105;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 6 conteudo 106</label>
  <input type="text" class="form-control" name="section_6_conteudo_106" value="<?php if(isset($editaHome->section_6_conteudo_106) && !empty($editaHome->section_6_conteudo_106)){ echo $editaHome->section_6_conteudo_106;}?>" >
   </div>
  </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 6 link 107</label>
<input type="text" class="form-control" name="section_6_link_107" value="<?php if(isset($editaHome->section_6_link_107) && !empty($editaHome->section_6_link_107)){ echo $editaHome->section_6_link_107;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 6 link alt 107</label>
<input type="text" class="form-control" name="section_6_link_alt_107" value="<?php if(isset($editaHome->section_6_link_alt_107) && !empty($editaHome->section_6_link_alt_107)){ echo $editaHome->section_6_link_alt_107;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 6 link conteudo 107</label>
 <input type="text" class="form-control" name="section_6_link_conteudo_107" value="<?php if(isset($editaHome->section_6_link_conteudo_107) && !empty($editaHome->section_6_link_conteudo_107)){ echo $editaHome->section_6_link_conteudo_107;}?>" >
 </div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 6 conteudo 108</label>
  <input type="text" class="form-control" name="section_6_conteudo_108" value="<?php if(isset($editaHome->section_6_conteudo_108) && !empty($editaHome->section_6_conteudo_108)){ echo $editaHome->section_6_conteudo_108;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 6 conteudo 109</label>
  <input type="text" class="form-control" name="section_6_conteudo_109" value="<?php if(isset($editaHome->section_6_conteudo_109) && !empty($editaHome->section_6_conteudo_109)){ echo $editaHome->section_6_conteudo_109;}?>" >
   </div>
  </div>
</div>
<br>
<hr>
<h4 class="card-title">Section 7</h4>
<hr>
<br>
<div class="form-group row">
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 7 link 110</label>
<input type="text" class="form-control" name="section_7_link_110" value="<?php if(isset($editaHome->section_7_link_110) && !empty($editaHome->section_7_link_110)){ echo $editaHome->section_7_link_110;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 7 link alt 110</label>
<input type="text" class="form-control" name="section_7_link_alt_110" value="<?php if(isset($editaHome->section_7_link_alt_110) && !empty($editaHome->section_7_link_alt_110)){ echo $editaHome->section_7_link_alt_110;}?>" >
</div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 7 img 111 ()</label>
   <input type="file" class="form-control" name="section_7_img_111" >
</div>
 </div>
 <?php if(isset($editaHome->section_7_img_111) && !empty($editaHome->section_7_img_111)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_7_img_111;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 7 image alt 111</label>
 <input type="text" class="form-control" name="section_7_image_alt_111" value="<?php if(isset($editaHome->section_7_image_alt_111) && !empty($editaHome->section_7_image_alt_111)){ echo $editaHome->section_7_image_alt_111;}?>" >
</div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 7 img 112 ()</label>
   <input type="file" class="form-control" name="section_7_img_112" >
</div>
 </div>
 <?php if(isset($editaHome->section_7_img_112) && !empty($editaHome->section_7_img_112)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_7_img_112;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 7 image alt 112</label>
 <input type="text" class="form-control" name="section_7_image_alt_112" value="<?php if(isset($editaHome->section_7_image_alt_112) && !empty($editaHome->section_7_image_alt_112)){ echo $editaHome->section_7_image_alt_112;}?>" >
</div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 7 img 113 ()</label>
   <input type="file" class="form-control" name="section_7_img_113" >
</div>
 </div>
 <?php if(isset($editaHome->section_7_img_113) && !empty($editaHome->section_7_img_113)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_7_img_113;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 7 image alt 113</label>
 <input type="text" class="form-control" name="section_7_image_alt_113" value="<?php if(isset($editaHome->section_7_image_alt_113) && !empty($editaHome->section_7_image_alt_113)){ echo $editaHome->section_7_image_alt_113;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 7 conteudo 114</label>
  <input type="text" class="form-control" name="section_7_conteudo_114" value="<?php if(isset($editaHome->section_7_conteudo_114) && !empty($editaHome->section_7_conteudo_114)){ echo $editaHome->section_7_conteudo_114;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 7 conteudo 115</label>
  <input type="text" class="form-control" name="section_7_conteudo_115" value="<?php if(isset($editaHome->section_7_conteudo_115) && !empty($editaHome->section_7_conteudo_115)){ echo $editaHome->section_7_conteudo_115;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 7 conteudo 116</label>
  <input type="text" class="form-control" name="section_7_conteudo_116" value="<?php if(isset($editaHome->section_7_conteudo_116) && !empty($editaHome->section_7_conteudo_116)){ echo $editaHome->section_7_conteudo_116;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 7 conteudo 117</label>
  <input type="text" class="form-control" name="section_7_conteudo_117" value="<?php if(isset($editaHome->section_7_conteudo_117) && !empty($editaHome->section_7_conteudo_117)){ echo $editaHome->section_7_conteudo_117;}?>" >
   </div>
  </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 7 link 118</label>
<input type="text" class="form-control" name="section_7_link_118" value="<?php if(isset($editaHome->section_7_link_118) && !empty($editaHome->section_7_link_118)){ echo $editaHome->section_7_link_118;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 7 link alt 118</label>
<input type="text" class="form-control" name="section_7_link_alt_118" value="<?php if(isset($editaHome->section_7_link_alt_118) && !empty($editaHome->section_7_link_alt_118)){ echo $editaHome->section_7_link_alt_118;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 7 link conteudo 118</label>
 <input type="text" class="form-control" name="section_7_link_conteudo_118" value="<?php if(isset($editaHome->section_7_link_conteudo_118) && !empty($editaHome->section_7_link_conteudo_118)){ echo $editaHome->section_7_link_conteudo_118;}?>" >
 </div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 7 conteudo 119</label>
  <input type="text" class="form-control" name="section_7_conteudo_119" value="<?php if(isset($editaHome->section_7_conteudo_119) && !empty($editaHome->section_7_conteudo_119)){ echo $editaHome->section_7_conteudo_119;}?>" >
   </div>
  </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 7 link 120</label>
<input type="text" class="form-control" name="section_7_link_120" value="<?php if(isset($editaHome->section_7_link_120) && !empty($editaHome->section_7_link_120)){ echo $editaHome->section_7_link_120;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 7 link alt 120</label>
<input type="text" class="form-control" name="section_7_link_alt_120" value="<?php if(isset($editaHome->section_7_link_alt_120) && !empty($editaHome->section_7_link_alt_120)){ echo $editaHome->section_7_link_alt_120;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 7 link conteudo 120</label>
 <input type="text" class="form-control" name="section_7_link_conteudo_120" value="<?php if(isset($editaHome->section_7_link_conteudo_120) && !empty($editaHome->section_7_link_conteudo_120)){ echo $editaHome->section_7_link_conteudo_120;}?>" >
 </div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 7 conteudo 121</label>
  <input type="text" class="form-control" name="section_7_conteudo_121" value="<?php if(isset($editaHome->section_7_conteudo_121) && !empty($editaHome->section_7_conteudo_121)){ echo $editaHome->section_7_conteudo_121;}?>" >
   </div>
  </div>
</div>
<br>
<hr>
<h4 class="card-title">Section 8</h4>
<hr>
<br>
<div class="form-group row">
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 8 conteudo 122</label>
  <input type="text" class="form-control" name="section_8_conteudo_122" value="<?php if(isset($editaHome->section_8_conteudo_122) && !empty($editaHome->section_8_conteudo_122)){ echo $editaHome->section_8_conteudo_122;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 8 conteudo 123</label>
  <input type="text" class="form-control" name="section_8_conteudo_123" value="<?php if(isset($editaHome->section_8_conteudo_123) && !empty($editaHome->section_8_conteudo_123)){ echo $editaHome->section_8_conteudo_123;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 8 conteudo 125</label>
  <input type="text" class="form-control" name="section_8_conteudo_125" value="<?php if(isset($editaHome->section_8_conteudo_125) && !empty($editaHome->section_8_conteudo_125)){ echo $editaHome->section_8_conteudo_125;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 8 conteudo 127</label>
  <input type="text" class="form-control" name="section_8_conteudo_127" value="<?php if(isset($editaHome->section_8_conteudo_127) && !empty($editaHome->section_8_conteudo_127)){ echo $editaHome->section_8_conteudo_127;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 8 conteudo 129</label>
  <input type="text" class="form-control" name="section_8_conteudo_129" value="<?php if(isset($editaHome->section_8_conteudo_129) && !empty($editaHome->section_8_conteudo_129)){ echo $editaHome->section_8_conteudo_129;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 8 conteudo 131</label>
  <input type="text" class="form-control" name="section_8_conteudo_131" value="<?php if(isset($editaHome->section_8_conteudo_131) && !empty($editaHome->section_8_conteudo_131)){ echo $editaHome->section_8_conteudo_131;}?>" >
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
<label class="mr-sm-2" for="">section 9 img 133 ()</label>
   <input type="file" class="form-control" name="section_9_img_133" >
</div>
 </div>
 <?php if(isset($editaHome->section_9_img_133) && !empty($editaHome->section_9_img_133)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_9_img_133;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 9 image alt 133</label>
 <input type="text" class="form-control" name="section_9_image_alt_133" value="<?php if(isset($editaHome->section_9_image_alt_133) && !empty($editaHome->section_9_image_alt_133)){ echo $editaHome->section_9_image_alt_133;}?>" >
</div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 9 img 134 ()</label>
   <input type="file" class="form-control" name="section_9_img_134" >
</div>
 </div>
 <?php if(isset($editaHome->section_9_img_134) && !empty($editaHome->section_9_img_134)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_9_img_134;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 9 image alt 134</label>
 <input type="text" class="form-control" name="section_9_image_alt_134" value="<?php if(isset($editaHome->section_9_image_alt_134) && !empty($editaHome->section_9_image_alt_134)){ echo $editaHome->section_9_image_alt_134;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 9 conteudo 135</label>
  <input type="text" class="form-control" name="section_9_conteudo_135" value="<?php if(isset($editaHome->section_9_conteudo_135) && !empty($editaHome->section_9_conteudo_135)){ echo $editaHome->section_9_conteudo_135;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 9 conteudo 136</label>
  <input type="text" class="form-control" name="section_9_conteudo_136" value="<?php if(isset($editaHome->section_9_conteudo_136) && !empty($editaHome->section_9_conteudo_136)){ echo $editaHome->section_9_conteudo_136;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 9 conteudo 137</label>
  <input type="text" class="form-control" name="section_9_conteudo_137" value="<?php if(isset($editaHome->section_9_conteudo_137) && !empty($editaHome->section_9_conteudo_137)){ echo $editaHome->section_9_conteudo_137;}?>" >
   </div>
  </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 9 img 138 ()</label>
   <input type="file" class="form-control" name="section_9_img_138" >
</div>
 </div>
 <?php if(isset($editaHome->section_9_img_138) && !empty($editaHome->section_9_img_138)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_9_img_138;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 9 image alt 138</label>
 <input type="text" class="form-control" name="section_9_image_alt_138" value="<?php if(isset($editaHome->section_9_image_alt_138) && !empty($editaHome->section_9_image_alt_138)){ echo $editaHome->section_9_image_alt_138;}?>" >
</div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 9 img 139 ()</label>
   <input type="file" class="form-control" name="section_9_img_139" >
</div>
 </div>
 <?php if(isset($editaHome->section_9_img_139) && !empty($editaHome->section_9_img_139)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_9_img_139;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 9 image alt 139</label>
 <input type="text" class="form-control" name="section_9_image_alt_139" value="<?php if(isset($editaHome->section_9_image_alt_139) && !empty($editaHome->section_9_image_alt_139)){ echo $editaHome->section_9_image_alt_139;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 9 conteudo 140</label>
  <input type="text" class="form-control" name="section_9_conteudo_140" value="<?php if(isset($editaHome->section_9_conteudo_140) && !empty($editaHome->section_9_conteudo_140)){ echo $editaHome->section_9_conteudo_140;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 9 conteudo 141</label>
  <input type="text" class="form-control" name="section_9_conteudo_141" value="<?php if(isset($editaHome->section_9_conteudo_141) && !empty($editaHome->section_9_conteudo_141)){ echo $editaHome->section_9_conteudo_141;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 9 conteudo 142</label>
  <input type="text" class="form-control" name="section_9_conteudo_142" value="<?php if(isset($editaHome->section_9_conteudo_142) && !empty($editaHome->section_9_conteudo_142)){ echo $editaHome->section_9_conteudo_142;}?>" >
   </div>
  </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 9 img 143 ()</label>
   <input type="file" class="form-control" name="section_9_img_143" >
</div>
 </div>
 <?php if(isset($editaHome->section_9_img_143) && !empty($editaHome->section_9_img_143)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_9_img_143;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 9 image alt 143</label>
 <input type="text" class="form-control" name="section_9_image_alt_143" value="<?php if(isset($editaHome->section_9_image_alt_143) && !empty($editaHome->section_9_image_alt_143)){ echo $editaHome->section_9_image_alt_143;}?>" >
</div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 9 img 144 ()</label>
   <input type="file" class="form-control" name="section_9_img_144" >
</div>
 </div>
 <?php if(isset($editaHome->section_9_img_144) && !empty($editaHome->section_9_img_144)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_9_img_144;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 9 image alt 144</label>
 <input type="text" class="form-control" name="section_9_image_alt_144" value="<?php if(isset($editaHome->section_9_image_alt_144) && !empty($editaHome->section_9_image_alt_144)){ echo $editaHome->section_9_image_alt_144;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 9 conteudo 145</label>
  <input type="text" class="form-control" name="section_9_conteudo_145" value="<?php if(isset($editaHome->section_9_conteudo_145) && !empty($editaHome->section_9_conteudo_145)){ echo $editaHome->section_9_conteudo_145;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 9 conteudo 146</label>
  <input type="text" class="form-control" name="section_9_conteudo_146" value="<?php if(isset($editaHome->section_9_conteudo_146) && !empty($editaHome->section_9_conteudo_146)){ echo $editaHome->section_9_conteudo_146;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 9 conteudo 147</label>
  <input type="text" class="form-control" name="section_9_conteudo_147" value="<?php if(isset($editaHome->section_9_conteudo_147) && !empty($editaHome->section_9_conteudo_147)){ echo $editaHome->section_9_conteudo_147;}?>" >
   </div>
  </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 9 img 148 ()</label>
   <input type="file" class="form-control" name="section_9_img_148" >
</div>
 </div>
 <?php if(isset($editaHome->section_9_img_148) && !empty($editaHome->section_9_img_148)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_9_img_148;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 9 image alt 148</label>
 <input type="text" class="form-control" name="section_9_image_alt_148" value="<?php if(isset($editaHome->section_9_image_alt_148) && !empty($editaHome->section_9_image_alt_148)){ echo $editaHome->section_9_image_alt_148;}?>" >
</div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 9 img 149 ()</label>
   <input type="file" class="form-control" name="section_9_img_149" >
</div>
 </div>
 <?php if(isset($editaHome->section_9_img_149) && !empty($editaHome->section_9_img_149)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_9_img_149;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 9 image alt 149</label>
 <input type="text" class="form-control" name="section_9_image_alt_149" value="<?php if(isset($editaHome->section_9_image_alt_149) && !empty($editaHome->section_9_image_alt_149)){ echo $editaHome->section_9_image_alt_149;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 9 conteudo 150</label>
  <input type="text" class="form-control" name="section_9_conteudo_150" value="<?php if(isset($editaHome->section_9_conteudo_150) && !empty($editaHome->section_9_conteudo_150)){ echo $editaHome->section_9_conteudo_150;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 9 conteudo 151</label>
  <input type="text" class="form-control" name="section_9_conteudo_151" value="<?php if(isset($editaHome->section_9_conteudo_151) && !empty($editaHome->section_9_conteudo_151)){ echo $editaHome->section_9_conteudo_151;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 9 conteudo 152</label>
  <input type="text" class="form-control" name="section_9_conteudo_152" value="<?php if(isset($editaHome->section_9_conteudo_152) && !empty($editaHome->section_9_conteudo_152)){ echo $editaHome->section_9_conteudo_152;}?>" >
   </div>
  </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 9 img 153 ()</label>
   <input type="file" class="form-control" name="section_9_img_153" >
</div>
 </div>
 <?php if(isset($editaHome->section_9_img_153) && !empty($editaHome->section_9_img_153)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_9_img_153;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 9 image alt 153</label>
 <input type="text" class="form-control" name="section_9_image_alt_153" value="<?php if(isset($editaHome->section_9_image_alt_153) && !empty($editaHome->section_9_image_alt_153)){ echo $editaHome->section_9_image_alt_153;}?>" >
</div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 9 img 154 ()</label>
   <input type="file" class="form-control" name="section_9_img_154" >
</div>
 </div>
 <?php if(isset($editaHome->section_9_img_154) && !empty($editaHome->section_9_img_154)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_9_img_154;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 9 image alt 154</label>
 <input type="text" class="form-control" name="section_9_image_alt_154" value="<?php if(isset($editaHome->section_9_image_alt_154) && !empty($editaHome->section_9_image_alt_154)){ echo $editaHome->section_9_image_alt_154;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 9 conteudo 155</label>
  <input type="text" class="form-control" name="section_9_conteudo_155" value="<?php if(isset($editaHome->section_9_conteudo_155) && !empty($editaHome->section_9_conteudo_155)){ echo $editaHome->section_9_conteudo_155;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 9 conteudo 156</label>
  <input type="text" class="form-control" name="section_9_conteudo_156" value="<?php if(isset($editaHome->section_9_conteudo_156) && !empty($editaHome->section_9_conteudo_156)){ echo $editaHome->section_9_conteudo_156;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 9 conteudo 157</label>
  <input type="text" class="form-control" name="section_9_conteudo_157" value="<?php if(isset($editaHome->section_9_conteudo_157) && !empty($editaHome->section_9_conteudo_157)){ echo $editaHome->section_9_conteudo_157;}?>" >
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
<label class="mr-sm-2" for="">section 10 img 158 ()</label>
   <input type="file" class="form-control" name="section_10_img_158" >
</div>
 </div>
 <?php if(isset($editaHome->section_10_img_158) && !empty($editaHome->section_10_img_158)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_10_img_158;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 10 image alt 158</label>
 <input type="text" class="form-control" name="section_10_image_alt_158" value="<?php if(isset($editaHome->section_10_image_alt_158) && !empty($editaHome->section_10_image_alt_158)){ echo $editaHome->section_10_image_alt_158;}?>" >
</div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 10 img 159 ()</label>
   <input type="file" class="form-control" name="section_10_img_159" >
</div>
 </div>
 <?php if(isset($editaHome->section_10_img_159) && !empty($editaHome->section_10_img_159)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_10_img_159;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 10 image alt 159</label>
 <input type="text" class="form-control" name="section_10_image_alt_159" value="<?php if(isset($editaHome->section_10_image_alt_159) && !empty($editaHome->section_10_image_alt_159)){ echo $editaHome->section_10_image_alt_159;}?>" >
</div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 10 img 160 ()</label>
   <input type="file" class="form-control" name="section_10_img_160" >
</div>
 </div>
 <?php if(isset($editaHome->section_10_img_160) && !empty($editaHome->section_10_img_160)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_10_img_160;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 10 image alt 160</label>
 <input type="text" class="form-control" name="section_10_image_alt_160" value="<?php if(isset($editaHome->section_10_image_alt_160) && !empty($editaHome->section_10_image_alt_160)){ echo $editaHome->section_10_image_alt_160;}?>" >
</div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 10 img 161 ()</label>
   <input type="file" class="form-control" name="section_10_img_161" >
</div>
 </div>
 <?php if(isset($editaHome->section_10_img_161) && !empty($editaHome->section_10_img_161)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_10_img_161;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 10 image alt 161</label>
 <input type="text" class="form-control" name="section_10_image_alt_161" value="<?php if(isset($editaHome->section_10_image_alt_161) && !empty($editaHome->section_10_image_alt_161)){ echo $editaHome->section_10_image_alt_161;}?>" >
</div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 10 img 162 ()</label>
   <input type="file" class="form-control" name="section_10_img_162" >
</div>
 </div>
 <?php if(isset($editaHome->section_10_img_162) && !empty($editaHome->section_10_img_162)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_10_img_162;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 10 image alt 162</label>
 <input type="text" class="form-control" name="section_10_image_alt_162" value="<?php if(isset($editaHome->section_10_image_alt_162) && !empty($editaHome->section_10_image_alt_162)){ echo $editaHome->section_10_image_alt_162;}?>" >
</div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 10 img 163 ()</label>
   <input type="file" class="form-control" name="section_10_img_163" >
</div>
 </div>
 <?php if(isset($editaHome->section_10_img_163) && !empty($editaHome->section_10_img_163)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_10_img_163;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 10 image alt 163</label>
 <input type="text" class="form-control" name="section_10_image_alt_163" value="<?php if(isset($editaHome->section_10_image_alt_163) && !empty($editaHome->section_10_image_alt_163)){ echo $editaHome->section_10_image_alt_163;}?>" >
</div>
 </div>
</div>
<br>
<hr>
<h4 class="card-title">Section 11</h4>
<hr>
<br>
<div class="form-group row">
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 11 conteudo 164</label>
  <input type="text" class="form-control" name="section_11_conteudo_164" value="<?php if(isset($editaHome->section_11_conteudo_164) && !empty($editaHome->section_11_conteudo_164)){ echo $editaHome->section_11_conteudo_164;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 11 conteudo 165</label>
  <input type="text" class="form-control" name="section_11_conteudo_165" value="<?php if(isset($editaHome->section_11_conteudo_165) && !empty($editaHome->section_11_conteudo_165)){ echo $editaHome->section_11_conteudo_165;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 11 conteudo 166</label>
  <input type="text" class="form-control" name="section_11_conteudo_166" value="<?php if(isset($editaHome->section_11_conteudo_166) && !empty($editaHome->section_11_conteudo_166)){ echo $editaHome->section_11_conteudo_166;}?>" >
   </div>
  </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 11 img 167 ()</label>
   <input type="file" class="form-control" name="section_11_img_167" >
</div>
 </div>
 <?php if(isset($editaHome->section_11_img_167) && !empty($editaHome->section_11_img_167)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_11_img_167;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 11 image alt 167</label>
 <input type="text" class="form-control" name="section_11_image_alt_167" value="<?php if(isset($editaHome->section_11_image_alt_167) && !empty($editaHome->section_11_image_alt_167)){ echo $editaHome->section_11_image_alt_167;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 11 link 169</label>
<input type="text" class="form-control" name="section_11_link_169" value="<?php if(isset($editaHome->section_11_link_169) && !empty($editaHome->section_11_link_169)){ echo $editaHome->section_11_link_169;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 11 link alt 169</label>
<input type="text" class="form-control" name="section_11_link_alt_169" value="<?php if(isset($editaHome->section_11_link_alt_169) && !empty($editaHome->section_11_link_alt_169)){ echo $editaHome->section_11_link_alt_169;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 11 link 170</label>
<input type="text" class="form-control" name="section_11_link_170" value="<?php if(isset($editaHome->section_11_link_170) && !empty($editaHome->section_11_link_170)){ echo $editaHome->section_11_link_170;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 11 link alt 170</label>
<input type="text" class="form-control" name="section_11_link_alt_170" value="<?php if(isset($editaHome->section_11_link_alt_170) && !empty($editaHome->section_11_link_alt_170)){ echo $editaHome->section_11_link_alt_170;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 11 link 171</label>
<input type="text" class="form-control" name="section_11_link_171" value="<?php if(isset($editaHome->section_11_link_171) && !empty($editaHome->section_11_link_171)){ echo $editaHome->section_11_link_171;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 11 link alt 171</label>
<input type="text" class="form-control" name="section_11_link_alt_171" value="<?php if(isset($editaHome->section_11_link_alt_171) && !empty($editaHome->section_11_link_alt_171)){ echo $editaHome->section_11_link_alt_171;}?>" >
</div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 11 img 172 ()</label>
   <input type="file" class="form-control" name="section_11_img_172" >
</div>
 </div>
 <?php if(isset($editaHome->section_11_img_172) && !empty($editaHome->section_11_img_172)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_11_img_172;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 11 image alt 172</label>
 <input type="text" class="form-control" name="section_11_image_alt_172" value="<?php if(isset($editaHome->section_11_image_alt_172) && !empty($editaHome->section_11_image_alt_172)){ echo $editaHome->section_11_image_alt_172;}?>" >
</div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 11 img 173 ()</label>
   <input type="file" class="form-control" name="section_11_img_173" >
</div>
 </div>
 <?php if(isset($editaHome->section_11_img_173) && !empty($editaHome->section_11_img_173)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_11_img_173;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 11 image alt 173</label>
 <input type="text" class="form-control" name="section_11_image_alt_173" value="<?php if(isset($editaHome->section_11_image_alt_173) && !empty($editaHome->section_11_image_alt_173)){ echo $editaHome->section_11_image_alt_173;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 11 conteudo 174</label>
  <input type="text" class="form-control" name="section_11_conteudo_174" value="<?php if(isset($editaHome->section_11_conteudo_174) && !empty($editaHome->section_11_conteudo_174)){ echo $editaHome->section_11_conteudo_174;}?>" >
   </div>
  </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 11 link 175</label>
<input type="text" class="form-control" name="section_11_link_175" value="<?php if(isset($editaHome->section_11_link_175) && !empty($editaHome->section_11_link_175)){ echo $editaHome->section_11_link_175;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 11 link alt 175</label>
<input type="text" class="form-control" name="section_11_link_alt_175" value="<?php if(isset($editaHome->section_11_link_alt_175) && !empty($editaHome->section_11_link_alt_175)){ echo $editaHome->section_11_link_alt_175;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 11 link conteudo 175</label>
 <input type="text" class="form-control" name="section_11_link_conteudo_175" value="<?php if(isset($editaHome->section_11_link_conteudo_175) && !empty($editaHome->section_11_link_conteudo_175)){ echo $editaHome->section_11_link_conteudo_175;}?>" >
 </div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 11 conteudo 176</label>
  <input type="text" class="form-control" name="section_11_conteudo_176" value="<?php if(isset($editaHome->section_11_conteudo_176) && !empty($editaHome->section_11_conteudo_176)){ echo $editaHome->section_11_conteudo_176;}?>" >
   </div>
  </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 11 img 177 ()</label>
   <input type="file" class="form-control" name="section_11_img_177" >
</div>
 </div>
 <?php if(isset($editaHome->section_11_img_177) && !empty($editaHome->section_11_img_177)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_11_img_177;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 11 image alt 177</label>
 <input type="text" class="form-control" name="section_11_image_alt_177" value="<?php if(isset($editaHome->section_11_image_alt_177) && !empty($editaHome->section_11_image_alt_177)){ echo $editaHome->section_11_image_alt_177;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 11 link 179</label>
<input type="text" class="form-control" name="section_11_link_179" value="<?php if(isset($editaHome->section_11_link_179) && !empty($editaHome->section_11_link_179)){ echo $editaHome->section_11_link_179;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 11 link alt 179</label>
<input type="text" class="form-control" name="section_11_link_alt_179" value="<?php if(isset($editaHome->section_11_link_alt_179) && !empty($editaHome->section_11_link_alt_179)){ echo $editaHome->section_11_link_alt_179;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 11 link 180</label>
<input type="text" class="form-control" name="section_11_link_180" value="<?php if(isset($editaHome->section_11_link_180) && !empty($editaHome->section_11_link_180)){ echo $editaHome->section_11_link_180;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 11 link alt 180</label>
<input type="text" class="form-control" name="section_11_link_alt_180" value="<?php if(isset($editaHome->section_11_link_alt_180) && !empty($editaHome->section_11_link_alt_180)){ echo $editaHome->section_11_link_alt_180;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 11 link 181</label>
<input type="text" class="form-control" name="section_11_link_181" value="<?php if(isset($editaHome->section_11_link_181) && !empty($editaHome->section_11_link_181)){ echo $editaHome->section_11_link_181;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 11 link alt 181</label>
<input type="text" class="form-control" name="section_11_link_alt_181" value="<?php if(isset($editaHome->section_11_link_alt_181) && !empty($editaHome->section_11_link_alt_181)){ echo $editaHome->section_11_link_alt_181;}?>" >
</div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 11 img 182 ()</label>
   <input type="file" class="form-control" name="section_11_img_182" >
</div>
 </div>
 <?php if(isset($editaHome->section_11_img_182) && !empty($editaHome->section_11_img_182)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_11_img_182;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 11 image alt 182</label>
 <input type="text" class="form-control" name="section_11_image_alt_182" value="<?php if(isset($editaHome->section_11_image_alt_182) && !empty($editaHome->section_11_image_alt_182)){ echo $editaHome->section_11_image_alt_182;}?>" >
</div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 11 img 183 ()</label>
   <input type="file" class="form-control" name="section_11_img_183" >
</div>
 </div>
 <?php if(isset($editaHome->section_11_img_183) && !empty($editaHome->section_11_img_183)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_11_img_183;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 11 image alt 183</label>
 <input type="text" class="form-control" name="section_11_image_alt_183" value="<?php if(isset($editaHome->section_11_image_alt_183) && !empty($editaHome->section_11_image_alt_183)){ echo $editaHome->section_11_image_alt_183;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 11 conteudo 184</label>
  <input type="text" class="form-control" name="section_11_conteudo_184" value="<?php if(isset($editaHome->section_11_conteudo_184) && !empty($editaHome->section_11_conteudo_184)){ echo $editaHome->section_11_conteudo_184;}?>" >
   </div>
  </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 11 link 185</label>
<input type="text" class="form-control" name="section_11_link_185" value="<?php if(isset($editaHome->section_11_link_185) && !empty($editaHome->section_11_link_185)){ echo $editaHome->section_11_link_185;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 11 link alt 185</label>
<input type="text" class="form-control" name="section_11_link_alt_185" value="<?php if(isset($editaHome->section_11_link_alt_185) && !empty($editaHome->section_11_link_alt_185)){ echo $editaHome->section_11_link_alt_185;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 11 link conteudo 185</label>
 <input type="text" class="form-control" name="section_11_link_conteudo_185" value="<?php if(isset($editaHome->section_11_link_conteudo_185) && !empty($editaHome->section_11_link_conteudo_185)){ echo $editaHome->section_11_link_conteudo_185;}?>" >
 </div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 11 conteudo 186</label>
  <input type="text" class="form-control" name="section_11_conteudo_186" value="<?php if(isset($editaHome->section_11_conteudo_186) && !empty($editaHome->section_11_conteudo_186)){ echo $editaHome->section_11_conteudo_186;}?>" >
   </div>
  </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 11 img 187 ()</label>
   <input type="file" class="form-control" name="section_11_img_187" >
</div>
 </div>
 <?php if(isset($editaHome->section_11_img_187) && !empty($editaHome->section_11_img_187)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_11_img_187;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 11 image alt 187</label>
 <input type="text" class="form-control" name="section_11_image_alt_187" value="<?php if(isset($editaHome->section_11_image_alt_187) && !empty($editaHome->section_11_image_alt_187)){ echo $editaHome->section_11_image_alt_187;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 11 link 189</label>
<input type="text" class="form-control" name="section_11_link_189" value="<?php if(isset($editaHome->section_11_link_189) && !empty($editaHome->section_11_link_189)){ echo $editaHome->section_11_link_189;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 11 link alt 189</label>
<input type="text" class="form-control" name="section_11_link_alt_189" value="<?php if(isset($editaHome->section_11_link_alt_189) && !empty($editaHome->section_11_link_alt_189)){ echo $editaHome->section_11_link_alt_189;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 11 link 190</label>
<input type="text" class="form-control" name="section_11_link_190" value="<?php if(isset($editaHome->section_11_link_190) && !empty($editaHome->section_11_link_190)){ echo $editaHome->section_11_link_190;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 11 link alt 190</label>
<input type="text" class="form-control" name="section_11_link_alt_190" value="<?php if(isset($editaHome->section_11_link_alt_190) && !empty($editaHome->section_11_link_alt_190)){ echo $editaHome->section_11_link_alt_190;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 11 link 191</label>
<input type="text" class="form-control" name="section_11_link_191" value="<?php if(isset($editaHome->section_11_link_191) && !empty($editaHome->section_11_link_191)){ echo $editaHome->section_11_link_191;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 11 link alt 191</label>
<input type="text" class="form-control" name="section_11_link_alt_191" value="<?php if(isset($editaHome->section_11_link_alt_191) && !empty($editaHome->section_11_link_alt_191)){ echo $editaHome->section_11_link_alt_191;}?>" >
</div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 11 img 192 ()</label>
   <input type="file" class="form-control" name="section_11_img_192" >
</div>
 </div>
 <?php if(isset($editaHome->section_11_img_192) && !empty($editaHome->section_11_img_192)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_11_img_192;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 11 image alt 192</label>
 <input type="text" class="form-control" name="section_11_image_alt_192" value="<?php if(isset($editaHome->section_11_image_alt_192) && !empty($editaHome->section_11_image_alt_192)){ echo $editaHome->section_11_image_alt_192;}?>" >
</div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 11 img 193 ()</label>
   <input type="file" class="form-control" name="section_11_img_193" >
</div>
 </div>
 <?php if(isset($editaHome->section_11_img_193) && !empty($editaHome->section_11_img_193)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_11_img_193;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 11 image alt 193</label>
 <input type="text" class="form-control" name="section_11_image_alt_193" value="<?php if(isset($editaHome->section_11_image_alt_193) && !empty($editaHome->section_11_image_alt_193)){ echo $editaHome->section_11_image_alt_193;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 11 conteudo 194</label>
  <input type="text" class="form-control" name="section_11_conteudo_194" value="<?php if(isset($editaHome->section_11_conteudo_194) && !empty($editaHome->section_11_conteudo_194)){ echo $editaHome->section_11_conteudo_194;}?>" >
   </div>
  </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 11 link 195</label>
<input type="text" class="form-control" name="section_11_link_195" value="<?php if(isset($editaHome->section_11_link_195) && !empty($editaHome->section_11_link_195)){ echo $editaHome->section_11_link_195;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 11 link alt 195</label>
<input type="text" class="form-control" name="section_11_link_alt_195" value="<?php if(isset($editaHome->section_11_link_alt_195) && !empty($editaHome->section_11_link_alt_195)){ echo $editaHome->section_11_link_alt_195;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 11 link conteudo 195</label>
 <input type="text" class="form-control" name="section_11_link_conteudo_195" value="<?php if(isset($editaHome->section_11_link_conteudo_195) && !empty($editaHome->section_11_link_conteudo_195)){ echo $editaHome->section_11_link_conteudo_195;}?>" >
 </div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 11 conteudo 196</label>
  <input type="text" class="form-control" name="section_11_conteudo_196" value="<?php if(isset($editaHome->section_11_conteudo_196) && !empty($editaHome->section_11_conteudo_196)){ echo $editaHome->section_11_conteudo_196;}?>" >
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
<label class="mr-sm-2" for="">section 12 img 197 ()</label>
   <input type="file" class="form-control" name="section_12_img_197" >
</div>
 </div>
 <?php if(isset($editaHome->section_12_img_197) && !empty($editaHome->section_12_img_197)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_12_img_197;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 12 image alt 197</label>
 <input type="text" class="form-control" name="section_12_image_alt_197" value="<?php if(isset($editaHome->section_12_image_alt_197) && !empty($editaHome->section_12_image_alt_197)){ echo $editaHome->section_12_image_alt_197;}?>" >
</div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 12 img 198 ()</label>
   <input type="file" class="form-control" name="section_12_img_198" >
</div>
 </div>
 <?php if(isset($editaHome->section_12_img_198) && !empty($editaHome->section_12_img_198)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_12_img_198;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 12 image alt 198</label>
 <input type="text" class="form-control" name="section_12_image_alt_198" value="<?php if(isset($editaHome->section_12_image_alt_198) && !empty($editaHome->section_12_image_alt_198)){ echo $editaHome->section_12_image_alt_198;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 12 conteudo 199</label>
  <input type="text" class="form-control" name="section_12_conteudo_199" value="<?php if(isset($editaHome->section_12_conteudo_199) && !empty($editaHome->section_12_conteudo_199)){ echo $editaHome->section_12_conteudo_199;}?>" >
   </div>
  </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 12 link 200</label>
<input type="text" class="form-control" name="section_12_link_200" value="<?php if(isset($editaHome->section_12_link_200) && !empty($editaHome->section_12_link_200)){ echo $editaHome->section_12_link_200;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 12 link alt 200</label>
<input type="text" class="form-control" name="section_12_link_alt_200" value="<?php if(isset($editaHome->section_12_link_alt_200) && !empty($editaHome->section_12_link_alt_200)){ echo $editaHome->section_12_link_alt_200;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 12 link conteudo 200</label>
 <input type="text" class="form-control" name="section_12_link_conteudo_200" value="<?php if(isset($editaHome->section_12_link_conteudo_200) && !empty($editaHome->section_12_link_conteudo_200)){ echo $editaHome->section_12_link_conteudo_200;}?>" >
 </div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 12 conteudo 201</label>
  <input type="text" class="form-control" name="section_12_conteudo_201" value="<?php if(isset($editaHome->section_12_conteudo_201) && !empty($editaHome->section_12_conteudo_201)){ echo $editaHome->section_12_conteudo_201;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 12 conteudo 202</label>
  <input type="text" class="form-control" name="section_12_conteudo_202" value="<?php if(isset($editaHome->section_12_conteudo_202) && !empty($editaHome->section_12_conteudo_202)){ echo $editaHome->section_12_conteudo_202;}?>" >
   </div>
  </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 12 img 203 ()</label>
   <input type="file" class="form-control" name="section_12_img_203" >
</div>
 </div>
 <?php if(isset($editaHome->section_12_img_203) && !empty($editaHome->section_12_img_203)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_12_img_203;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 12 image alt 203</label>
 <input type="text" class="form-control" name="section_12_image_alt_203" value="<?php if(isset($editaHome->section_12_image_alt_203) && !empty($editaHome->section_12_image_alt_203)){ echo $editaHome->section_12_image_alt_203;}?>" >
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
 <label class="mr-sm-2" for="">section 13 conteudo 204</label>
  <input type="text" class="form-control" name="section_13_conteudo_204" value="<?php if(isset($editaHome->section_13_conteudo_204) && !empty($editaHome->section_13_conteudo_204)){ echo $editaHome->section_13_conteudo_204;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 13 conteudo 205</label>
  <input type="text" class="form-control" name="section_13_conteudo_205" value="<?php if(isset($editaHome->section_13_conteudo_205) && !empty($editaHome->section_13_conteudo_205)){ echo $editaHome->section_13_conteudo_205;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 13 conteudo 206</label>
  <input type="text" class="form-control" name="section_13_conteudo_206" value="<?php if(isset($editaHome->section_13_conteudo_206) && !empty($editaHome->section_13_conteudo_206)){ echo $editaHome->section_13_conteudo_206;}?>" >
   </div>
  </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 13 img 207 ()</label>
   <input type="file" class="form-control" name="section_13_img_207" >
</div>
 </div>
 <?php if(isset($editaHome->section_13_img_207) && !empty($editaHome->section_13_img_207)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_13_img_207;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 13 image alt 207</label>
 <input type="text" class="form-control" name="section_13_image_alt_207" value="<?php if(isset($editaHome->section_13_image_alt_207) && !empty($editaHome->section_13_image_alt_207)){ echo $editaHome->section_13_image_alt_207;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 13 link 208</label>
<input type="text" class="form-control" name="section_13_link_208" value="<?php if(isset($editaHome->section_13_link_208) && !empty($editaHome->section_13_link_208)){ echo $editaHome->section_13_link_208;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 13 link alt 208</label>
<input type="text" class="form-control" name="section_13_link_alt_208" value="<?php if(isset($editaHome->section_13_link_alt_208) && !empty($editaHome->section_13_link_alt_208)){ echo $editaHome->section_13_link_alt_208;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 13 conteudo 209</label>
  <input type="text" class="form-control" name="section_13_conteudo_209" value="<?php if(isset($editaHome->section_13_conteudo_209) && !empty($editaHome->section_13_conteudo_209)){ echo $editaHome->section_13_conteudo_209;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 13 conteudo 210</label>
  <input type="text" class="form-control" name="section_13_conteudo_210" value="<?php if(isset($editaHome->section_13_conteudo_210) && !empty($editaHome->section_13_conteudo_210)){ echo $editaHome->section_13_conteudo_210;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 13 conteudo 211</label>
  <input type="text" class="form-control" name="section_13_conteudo_211" value="<?php if(isset($editaHome->section_13_conteudo_211) && !empty($editaHome->section_13_conteudo_211)){ echo $editaHome->section_13_conteudo_211;}?>" >
   </div>
  </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 13 link 212</label>
<input type="text" class="form-control" name="section_13_link_212" value="<?php if(isset($editaHome->section_13_link_212) && !empty($editaHome->section_13_link_212)){ echo $editaHome->section_13_link_212;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 13 link alt 212</label>
<input type="text" class="form-control" name="section_13_link_alt_212" value="<?php if(isset($editaHome->section_13_link_alt_212) && !empty($editaHome->section_13_link_alt_212)){ echo $editaHome->section_13_link_alt_212;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 13 link conteudo 212</label>
 <input type="text" class="form-control" name="section_13_link_conteudo_212" value="<?php if(isset($editaHome->section_13_link_conteudo_212) && !empty($editaHome->section_13_link_conteudo_212)){ echo $editaHome->section_13_link_conteudo_212;}?>" >
 </div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 13 img 213 ()</label>
   <input type="file" class="form-control" name="section_13_img_213" >
</div>
 </div>
 <?php if(isset($editaHome->section_13_img_213) && !empty($editaHome->section_13_img_213)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_13_img_213;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 13 image alt 213</label>
 <input type="text" class="form-control" name="section_13_image_alt_213" value="<?php if(isset($editaHome->section_13_image_alt_213) && !empty($editaHome->section_13_image_alt_213)){ echo $editaHome->section_13_image_alt_213;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 13 link 214</label>
<input type="text" class="form-control" name="section_13_link_214" value="<?php if(isset($editaHome->section_13_link_214) && !empty($editaHome->section_13_link_214)){ echo $editaHome->section_13_link_214;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 13 link alt 214</label>
<input type="text" class="form-control" name="section_13_link_alt_214" value="<?php if(isset($editaHome->section_13_link_alt_214) && !empty($editaHome->section_13_link_alt_214)){ echo $editaHome->section_13_link_alt_214;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 13 conteudo 215</label>
  <input type="text" class="form-control" name="section_13_conteudo_215" value="<?php if(isset($editaHome->section_13_conteudo_215) && !empty($editaHome->section_13_conteudo_215)){ echo $editaHome->section_13_conteudo_215;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 13 conteudo 216</label>
  <input type="text" class="form-control" name="section_13_conteudo_216" value="<?php if(isset($editaHome->section_13_conteudo_216) && !empty($editaHome->section_13_conteudo_216)){ echo $editaHome->section_13_conteudo_216;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 13 conteudo 217</label>
  <input type="text" class="form-control" name="section_13_conteudo_217" value="<?php if(isset($editaHome->section_13_conteudo_217) && !empty($editaHome->section_13_conteudo_217)){ echo $editaHome->section_13_conteudo_217;}?>" >
   </div>
  </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 13 link 218</label>
<input type="text" class="form-control" name="section_13_link_218" value="<?php if(isset($editaHome->section_13_link_218) && !empty($editaHome->section_13_link_218)){ echo $editaHome->section_13_link_218;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 13 link alt 218</label>
<input type="text" class="form-control" name="section_13_link_alt_218" value="<?php if(isset($editaHome->section_13_link_alt_218) && !empty($editaHome->section_13_link_alt_218)){ echo $editaHome->section_13_link_alt_218;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 13 link conteudo 218</label>
 <input type="text" class="form-control" name="section_13_link_conteudo_218" value="<?php if(isset($editaHome->section_13_link_conteudo_218) && !empty($editaHome->section_13_link_conteudo_218)){ echo $editaHome->section_13_link_conteudo_218;}?>" >
 </div>
 </div>
 <div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 13 img 219 ()</label>
   <input type="file" class="form-control" name="section_13_img_219" >
</div>
 </div>
 <?php if(isset($editaHome->section_13_img_219) && !empty($editaHome->section_13_img_219)){ ?>
<div class="col-md-2">
 <div class="form-group">
 <img src="../img/<?php echo $editaHome->section_13_img_219;?>" width="100" alt="">
</div>
</div>
<?php }?> 
   <div class="col-md-6">
  <div class="form-group">
  <label class="mr-sm-2" for="">section 13 image alt 219</label>
 <input type="text" class="form-control" name="section_13_image_alt_219" value="<?php if(isset($editaHome->section_13_image_alt_219) && !empty($editaHome->section_13_image_alt_219)){ echo $editaHome->section_13_image_alt_219;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 13 link 220</label>
<input type="text" class="form-control" name="section_13_link_220" value="<?php if(isset($editaHome->section_13_link_220) && !empty($editaHome->section_13_link_220)){ echo $editaHome->section_13_link_220;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 13 link alt 220</label>
<input type="text" class="form-control" name="section_13_link_alt_220" value="<?php if(isset($editaHome->section_13_link_alt_220) && !empty($editaHome->section_13_link_alt_220)){ echo $editaHome->section_13_link_alt_220;}?>" >
</div>
 </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 13 conteudo 221</label>
  <input type="text" class="form-control" name="section_13_conteudo_221" value="<?php if(isset($editaHome->section_13_conteudo_221) && !empty($editaHome->section_13_conteudo_221)){ echo $editaHome->section_13_conteudo_221;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 13 conteudo 222</label>
  <input type="text" class="form-control" name="section_13_conteudo_222" value="<?php if(isset($editaHome->section_13_conteudo_222) && !empty($editaHome->section_13_conteudo_222)){ echo $editaHome->section_13_conteudo_222;}?>" >
   </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
 <label class="mr-sm-2" for="">section 13 conteudo 223</label>
  <input type="text" class="form-control" name="section_13_conteudo_223" value="<?php if(isset($editaHome->section_13_conteudo_223) && !empty($editaHome->section_13_conteudo_223)){ echo $editaHome->section_13_conteudo_223;}?>" >
   </div>
  </div>
<div class="col-md-4">
<div class="form-group">
 <label class="mr-sm-2" for="">section 13 link 224</label>
<input type="text" class="form-control" name="section_13_link_224" value="<?php if(isset($editaHome->section_13_link_224) && !empty($editaHome->section_13_link_224)){ echo $editaHome->section_13_link_224;}?>" >
</div>
</div>
 <div class="col-md-4">
 <div class="form-group">
 <label class="mr-sm-2" for="">section 13 link alt 224</label>
<input type="text" class="form-control" name="section_13_link_alt_224" value="<?php if(isset($editaHome->section_13_link_alt_224) && !empty($editaHome->section_13_link_alt_224)){ echo $editaHome->section_13_link_alt_224;}?>" >
</div>
 </div>
<div class="col-md-4">
<div class="form-group">
<label class="mr-sm-2" for="">section 13 link conteudo 224</label>
 <input type="text" class="form-control" name="section_13_link_conteudo_224" value="<?php if(isset($editaHome->section_13_link_conteudo_224) && !empty($editaHome->section_13_link_conteudo_224)){ echo $editaHome->section_13_link_conteudo_224;}?>" >
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
</div>
<input type="hidden" name="acao" value="editaHome">
<input type="hidden" name="id" value="<?php if(isset($editaHome->id) && !empty($editaHome->id)){ echo $editaHome->id;}?>">
<input type="hidden" name="section_1_img_4_Atual" value="<?php if(isset($editaHome->section_1_img_4) && !empty($editaHome->section_1_img_4)){ echo $editaHome->section_1_img_4;}?>">
<input type="hidden" name="section_1_img_5_Atual" value="<?php if(isset($editaHome->section_1_img_5) && !empty($editaHome->section_1_img_5)){ echo $editaHome->section_1_img_5;}?>">
<input type="hidden" name="section_1_img_6_Atual" value="<?php if(isset($editaHome->section_1_img_6) && !empty($editaHome->section_1_img_6)){ echo $editaHome->section_1_img_6;}?>">
<input type="hidden" name="section_1_img_11_Atual" value="<?php if(isset($editaHome->section_1_img_11) && !empty($editaHome->section_1_img_11)){ echo $editaHome->section_1_img_11;}?>">
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
<input type="hidden" name="section_4_img_59_Atual" value="<?php if(isset($editaHome->section_4_img_59) && !empty($editaHome->section_4_img_59)){ echo $editaHome->section_4_img_59;}?>">
<input type="hidden" name="section_4_img_66_Atual" value="<?php if(isset($editaHome->section_4_img_66) && !empty($editaHome->section_4_img_66)){ echo $editaHome->section_4_img_66;}?>">
<input type="hidden" name="section_7_img_111_Atual" value="<?php if(isset($editaHome->section_7_img_111) && !empty($editaHome->section_7_img_111)){ echo $editaHome->section_7_img_111;}?>">
<input type="hidden" name="section_7_img_112_Atual" value="<?php if(isset($editaHome->section_7_img_112) && !empty($editaHome->section_7_img_112)){ echo $editaHome->section_7_img_112;}?>">
<input type="hidden" name="section_7_img_113_Atual" value="<?php if(isset($editaHome->section_7_img_113) && !empty($editaHome->section_7_img_113)){ echo $editaHome->section_7_img_113;}?>">
<input type="hidden" name="section_9_img_133_Atual" value="<?php if(isset($editaHome->section_9_img_133) && !empty($editaHome->section_9_img_133)){ echo $editaHome->section_9_img_133;}?>">
<input type="hidden" name="section_9_img_134_Atual" value="<?php if(isset($editaHome->section_9_img_134) && !empty($editaHome->section_9_img_134)){ echo $editaHome->section_9_img_134;}?>">
<input type="hidden" name="section_9_img_138_Atual" value="<?php if(isset($editaHome->section_9_img_138) && !empty($editaHome->section_9_img_138)){ echo $editaHome->section_9_img_138;}?>">
<input type="hidden" name="section_9_img_139_Atual" value="<?php if(isset($editaHome->section_9_img_139) && !empty($editaHome->section_9_img_139)){ echo $editaHome->section_9_img_139;}?>">
<input type="hidden" name="section_9_img_143_Atual" value="<?php if(isset($editaHome->section_9_img_143) && !empty($editaHome->section_9_img_143)){ echo $editaHome->section_9_img_143;}?>">
<input type="hidden" name="section_9_img_144_Atual" value="<?php if(isset($editaHome->section_9_img_144) && !empty($editaHome->section_9_img_144)){ echo $editaHome->section_9_img_144;}?>">
<input type="hidden" name="section_9_img_148_Atual" value="<?php if(isset($editaHome->section_9_img_148) && !empty($editaHome->section_9_img_148)){ echo $editaHome->section_9_img_148;}?>">
<input type="hidden" name="section_9_img_149_Atual" value="<?php if(isset($editaHome->section_9_img_149) && !empty($editaHome->section_9_img_149)){ echo $editaHome->section_9_img_149;}?>">
<input type="hidden" name="section_9_img_153_Atual" value="<?php if(isset($editaHome->section_9_img_153) && !empty($editaHome->section_9_img_153)){ echo $editaHome->section_9_img_153;}?>">
<input type="hidden" name="section_9_img_154_Atual" value="<?php if(isset($editaHome->section_9_img_154) && !empty($editaHome->section_9_img_154)){ echo $editaHome->section_9_img_154;}?>">
<input type="hidden" name="section_10_img_158_Atual" value="<?php if(isset($editaHome->section_10_img_158) && !empty($editaHome->section_10_img_158)){ echo $editaHome->section_10_img_158;}?>">
<input type="hidden" name="section_10_img_159_Atual" value="<?php if(isset($editaHome->section_10_img_159) && !empty($editaHome->section_10_img_159)){ echo $editaHome->section_10_img_159;}?>">
<input type="hidden" name="section_10_img_160_Atual" value="<?php if(isset($editaHome->section_10_img_160) && !empty($editaHome->section_10_img_160)){ echo $editaHome->section_10_img_160;}?>">
<input type="hidden" name="section_10_img_161_Atual" value="<?php if(isset($editaHome->section_10_img_161) && !empty($editaHome->section_10_img_161)){ echo $editaHome->section_10_img_161;}?>">
<input type="hidden" name="section_10_img_162_Atual" value="<?php if(isset($editaHome->section_10_img_162) && !empty($editaHome->section_10_img_162)){ echo $editaHome->section_10_img_162;}?>">
<input type="hidden" name="section_10_img_163_Atual" value="<?php if(isset($editaHome->section_10_img_163) && !empty($editaHome->section_10_img_163)){ echo $editaHome->section_10_img_163;}?>">
<input type="hidden" name="section_11_img_167_Atual" value="<?php if(isset($editaHome->section_11_img_167) && !empty($editaHome->section_11_img_167)){ echo $editaHome->section_11_img_167;}?>">
<input type="hidden" name="section_11_img_172_Atual" value="<?php if(isset($editaHome->section_11_img_172) && !empty($editaHome->section_11_img_172)){ echo $editaHome->section_11_img_172;}?>">
<input type="hidden" name="section_11_img_173_Atual" value="<?php if(isset($editaHome->section_11_img_173) && !empty($editaHome->section_11_img_173)){ echo $editaHome->section_11_img_173;}?>">
<input type="hidden" name="section_11_img_177_Atual" value="<?php if(isset($editaHome->section_11_img_177) && !empty($editaHome->section_11_img_177)){ echo $editaHome->section_11_img_177;}?>">
<input type="hidden" name="section_11_img_182_Atual" value="<?php if(isset($editaHome->section_11_img_182) && !empty($editaHome->section_11_img_182)){ echo $editaHome->section_11_img_182;}?>">
<input type="hidden" name="section_11_img_183_Atual" value="<?php if(isset($editaHome->section_11_img_183) && !empty($editaHome->section_11_img_183)){ echo $editaHome->section_11_img_183;}?>">
<input type="hidden" name="section_11_img_187_Atual" value="<?php if(isset($editaHome->section_11_img_187) && !empty($editaHome->section_11_img_187)){ echo $editaHome->section_11_img_187;}?>">
<input type="hidden" name="section_11_img_192_Atual" value="<?php if(isset($editaHome->section_11_img_192) && !empty($editaHome->section_11_img_192)){ echo $editaHome->section_11_img_192;}?>">
<input type="hidden" name="section_11_img_193_Atual" value="<?php if(isset($editaHome->section_11_img_193) && !empty($editaHome->section_11_img_193)){ echo $editaHome->section_11_img_193;}?>">
<input type="hidden" name="section_12_img_197_Atual" value="<?php if(isset($editaHome->section_12_img_197) && !empty($editaHome->section_12_img_197)){ echo $editaHome->section_12_img_197;}?>">
<input type="hidden" name="section_12_img_198_Atual" value="<?php if(isset($editaHome->section_12_img_198) && !empty($editaHome->section_12_img_198)){ echo $editaHome->section_12_img_198;}?>">
<input type="hidden" name="section_12_img_203_Atual" value="<?php if(isset($editaHome->section_12_img_203) && !empty($editaHome->section_12_img_203)){ echo $editaHome->section_12_img_203;}?>">
<input type="hidden" name="section_13_img_207_Atual" value="<?php if(isset($editaHome->section_13_img_207) && !empty($editaHome->section_13_img_207)){ echo $editaHome->section_13_img_207;}?>">
<input type="hidden" name="section_13_img_213_Atual" value="<?php if(isset($editaHome->section_13_img_213) && !empty($editaHome->section_13_img_213)){ echo $editaHome->section_13_img_213;}?>">
<input type="hidden" name="section_13_img_219_Atual" value="<?php if(isset($editaHome->section_13_img_219) && !empty($editaHome->section_13_img_219)){ echo $editaHome->section_13_img_219;}?>">
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
