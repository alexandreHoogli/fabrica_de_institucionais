<?php include "verifica.php";
$home->add();
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
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 1 link 1</label>
  <input class="form-control" type="text" name="section_1_link_1"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 1 link alt 1</label>
<input class="form-control" type="text" name="section_1_link_alt_1" />
</div>
<div class="col-md-4 col-sm-12">
   <label class="col-form-label">section 1 link conteudo 1</label>
<input class="form-control" type="text" name="section_1_link_conteudo_1" />
  </div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 1 img 4 () </label>
 <input class="form-control" type="file" name="section_1_img_4" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 1 image alt 4</label>
<input class="form-control" type="text" name="section_1_image_alt_4" />
</div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 1 img 5 () </label>
 <input class="form-control" type="file" name="section_1_img_5" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 1 image alt 5</label>
<input class="form-control" type="text" name="section_1_image_alt_5" />
</div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 1 img 6 () </label>
 <input class="form-control" type="file" name="section_1_img_6" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 1 image alt 6</label>
<input class="form-control" type="text" name="section_1_image_alt_6" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 1 conteudo 7</label>
 <input class="form-control" type="text" name="section_1_conteudo_7" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 1 conteudo 8</label>
 <input class="form-control" type="text" name="section_1_conteudo_8" />
  </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 1 link 9</label>
  <input class="form-control" type="text" name="section_1_link_9"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 1 link alt 9</label>
<input class="form-control" type="text" name="section_1_link_alt_9" />
</div>
<div class="col-md-4 col-sm-12">
   <label class="col-form-label">section 1 link conteudo 9</label>
<input class="form-control" type="text" name="section_1_link_conteudo_9" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 1 conteudo 10</label>
 <input class="form-control" type="text" name="section_1_conteudo_10" />
  </div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 1 img 11 () </label>
 <input class="form-control" type="file" name="section_1_img_11" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 1 image alt 11</label>
<input class="form-control" type="text" name="section_1_image_alt_11" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 1 conteudo 12</label>
 <input class="form-control" type="text" name="section_1_conteudo_12" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 1 conteudo 13</label>
 <input class="form-control" type="text" name="section_1_conteudo_13" />
  </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 1 link 14</label>
  <input class="form-control" type="text" name="section_1_link_14"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 1 link alt 14</label>
<input class="form-control" type="text" name="section_1_link_alt_14" />
</div>
<div class="col-md-4 col-sm-12">
   <label class="col-form-label">section 1 link conteudo 14</label>
<input class="form-control" type="text" name="section_1_link_conteudo_14" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 1 conteudo 15</label>
 <input class="form-control" type="text" name="section_1_conteudo_15" />
  </div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 1 img 16 () </label>
 <input class="form-control" type="file" name="section_1_img_16" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 1 image alt 16</label>
<input class="form-control" type="text" name="section_1_image_alt_16" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 1 conteudo 17</label>
 <input class="form-control" type="text" name="section_1_conteudo_17" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 1 conteudo 18</label>
 <input class="form-control" type="text" name="section_1_conteudo_18" />
  </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 1 link 19</label>
  <input class="form-control" type="text" name="section_1_link_19"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 1 link alt 19</label>
<input class="form-control" type="text" name="section_1_link_alt_19" />
</div>
<div class="col-md-4 col-sm-12">
   <label class="col-form-label">section 1 link conteudo 19</label>
<input class="form-control" type="text" name="section_1_link_conteudo_19" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 1 conteudo 20</label>
 <input class="form-control" type="text" name="section_1_conteudo_20" />
  </div>
</div>
<br>
<hr>
<h4 class="card-title">Section 2</h4>
<hr>
<br>
<div class="form-group row">
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 2 conteudo 21</label>
 <input class="form-control" type="text" name="section_2_conteudo_21" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 2 conteudo 22</label>
 <input class="form-control" type="text" name="section_2_conteudo_22" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 2 conteudo 23</label>
 <input class="form-control" type="text" name="section_2_conteudo_23" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 2 conteudo 24</label>
 <input class="form-control" type="text" name="section_2_conteudo_24" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 2 conteudo 25</label>
 <input class="form-control" type="text" name="section_2_conteudo_25" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 2 conteudo 26</label>
 <input class="form-control" type="text" name="section_2_conteudo_26" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 2 conteudo 27</label>
 <input class="form-control" type="text" name="section_2_conteudo_27" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 2 conteudo 28</label>
 <input class="form-control" type="text" name="section_2_conteudo_28" />
  </div>
</div>
<br>
<hr>
<h4 class="card-title">Section 3</h4>
<hr>
<br>
<div class="form-group row">
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 3 img 29 () </label>
 <input class="form-control" type="file" name="section_3_img_29" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 3 image alt 29</label>
<input class="form-control" type="text" name="section_3_image_alt_29" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 3 conteudo 30</label>
 <input class="form-control" type="text" name="section_3_conteudo_30" />
  </div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 3 img 31 () </label>
 <input class="form-control" type="file" name="section_3_img_31" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 3 image alt 31</label>
<input class="form-control" type="text" name="section_3_image_alt_31" />
</div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 3 img 32 () </label>
 <input class="form-control" type="file" name="section_3_img_32" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 3 image alt 32</label>
<input class="form-control" type="text" name="section_3_image_alt_32" />
</div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 3 img 33 () </label>
 <input class="form-control" type="file" name="section_3_img_33" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 3 image alt 33</label>
<input class="form-control" type="text" name="section_3_image_alt_33" />
</div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 3 img 34 () </label>
 <input class="form-control" type="file" name="section_3_img_34" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 3 image alt 34</label>
<input class="form-control" type="text" name="section_3_image_alt_34" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 3 conteudo 35</label>
 <input class="form-control" type="text" name="section_3_conteudo_35" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 3 conteudo 36</label>
 <input class="form-control" type="text" name="section_3_conteudo_36" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 3 conteudo 37</label>
 <input class="form-control" type="text" name="section_3_conteudo_37" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 3 conteudo 38</label>
 <input class="form-control" type="text" name="section_3_conteudo_38" />
  </div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 3 img 39 () </label>
 <input class="form-control" type="file" name="section_3_img_39" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 3 image alt 39</label>
<input class="form-control" type="text" name="section_3_image_alt_39" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 3 conteudo 40</label>
 <input class="form-control" type="text" name="section_3_conteudo_40" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 3 conteudo 41</label>
 <input class="form-control" type="text" name="section_3_conteudo_41" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 3 conteudo 42</label>
 <input class="form-control" type="text" name="section_3_conteudo_42" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 3 conteudo 43</label>
 <input class="form-control" type="text" name="section_3_conteudo_43" />
  </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 3 link 44</label>
  <input class="form-control" type="text" name="section_3_link_44"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 3 link alt 44</label>
<input class="form-control" type="text" name="section_3_link_alt_44" />
</div>
<div class="col-md-4 col-sm-12">
   <label class="col-form-label">section 3 link conteudo 44</label>
<input class="form-control" type="text" name="section_3_link_conteudo_44" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 3 conteudo 45</label>
 <input class="form-control" type="text" name="section_3_conteudo_45" />
  </div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 3 img 46 () </label>
 <input class="form-control" type="file" name="section_3_img_46" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 3 image alt 46</label>
<input class="form-control" type="text" name="section_3_image_alt_46" />
</div>
</div>
<br>
<hr>
<h4 class="card-title">Section 4</h4>
<hr>
<br>
<div class="form-group row">
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 4 img 47 () </label>
 <input class="form-control" type="file" name="section_4_img_47" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 4 image alt 47</label>
<input class="form-control" type="text" name="section_4_image_alt_47" />
</div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 4 img 48 () </label>
 <input class="form-control" type="file" name="section_4_img_48" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 4 image alt 48</label>
<input class="form-control" type="text" name="section_4_image_alt_48" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 4 conteudo 49</label>
 <input class="form-control" type="text" name="section_4_conteudo_49" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 4 conteudo 50</label>
 <input class="form-control" type="text" name="section_4_conteudo_50" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 4 conteudo 51</label>
 <input class="form-control" type="text" name="section_4_conteudo_51" />
  </div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 4 img 52 () </label>
 <input class="form-control" type="file" name="section_4_img_52" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 4 image alt 52</label>
<input class="form-control" type="text" name="section_4_image_alt_52" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 4 conteudo 53</label>
 <input class="form-control" type="text" name="section_4_conteudo_53" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 4 conteudo 54</label>
 <input class="form-control" type="text" name="section_4_conteudo_54" />
  </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 4 link 55</label>
  <input class="form-control" type="text" name="section_4_link_55"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 4 link alt 55</label>
<input class="form-control" type="text" name="section_4_link_alt_55" />
</div>
<div class="col-md-4 col-sm-12">
   <label class="col-form-label">section 4 link conteudo 55</label>
<input class="form-control" type="text" name="section_4_link_conteudo_55" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 4 conteudo 56</label>
 <input class="form-control" type="text" name="section_4_conteudo_56" />
  </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 4 link 57</label>
  <input class="form-control" type="text" name="section_4_link_57"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 4 link alt 57</label>
<input class="form-control" type="text" name="section_4_link_alt_57" />
</div>
<div class="col-md-4 col-sm-12">
   <label class="col-form-label">section 4 link conteudo 57</label>
<input class="form-control" type="text" name="section_4_link_conteudo_57" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 4 conteudo 58</label>
 <input class="form-control" type="text" name="section_4_conteudo_58" />
  </div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 4 img 59 () </label>
 <input class="form-control" type="file" name="section_4_img_59" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 4 image alt 59</label>
<input class="form-control" type="text" name="section_4_image_alt_59" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 4 conteudo 60</label>
 <input class="form-control" type="text" name="section_4_conteudo_60" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 4 conteudo 61</label>
 <input class="form-control" type="text" name="section_4_conteudo_61" />
  </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 4 link 62</label>
  <input class="form-control" type="text" name="section_4_link_62"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 4 link alt 62</label>
<input class="form-control" type="text" name="section_4_link_alt_62" />
</div>
<div class="col-md-4 col-sm-12">
   <label class="col-form-label">section 4 link conteudo 62</label>
<input class="form-control" type="text" name="section_4_link_conteudo_62" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 4 conteudo 63</label>
 <input class="form-control" type="text" name="section_4_conteudo_63" />
  </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 4 link 64</label>
  <input class="form-control" type="text" name="section_4_link_64"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 4 link alt 64</label>
<input class="form-control" type="text" name="section_4_link_alt_64" />
</div>
<div class="col-md-4 col-sm-12">
   <label class="col-form-label">section 4 link conteudo 64</label>
<input class="form-control" type="text" name="section_4_link_conteudo_64" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 4 conteudo 65</label>
 <input class="form-control" type="text" name="section_4_conteudo_65" />
  </div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 4 img 66 () </label>
 <input class="form-control" type="file" name="section_4_img_66" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 4 image alt 66</label>
<input class="form-control" type="text" name="section_4_image_alt_66" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 4 conteudo 67</label>
 <input class="form-control" type="text" name="section_4_conteudo_67" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 4 conteudo 68</label>
 <input class="form-control" type="text" name="section_4_conteudo_68" />
  </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 4 link 69</label>
  <input class="form-control" type="text" name="section_4_link_69"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 4 link alt 69</label>
<input class="form-control" type="text" name="section_4_link_alt_69" />
</div>
<div class="col-md-4 col-sm-12">
   <label class="col-form-label">section 4 link conteudo 69</label>
<input class="form-control" type="text" name="section_4_link_conteudo_69" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 4 conteudo 70</label>
 <input class="form-control" type="text" name="section_4_conteudo_70" />
  </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 4 link 71</label>
  <input class="form-control" type="text" name="section_4_link_71"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 4 link alt 71</label>
<input class="form-control" type="text" name="section_4_link_alt_71" />
</div>
<div class="col-md-4 col-sm-12">
   <label class="col-form-label">section 4 link conteudo 71</label>
<input class="form-control" type="text" name="section_4_link_conteudo_71" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 4 conteudo 72</label>
 <input class="form-control" type="text" name="section_4_conteudo_72" />
  </div>
</div>
<br>
<hr>
<h4 class="card-title">Section 5</h4>
<hr>
<br>
<div class="form-group row">
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 5 conteudo 73</label>
 <input class="form-control" type="text" name="section_5_conteudo_73" />
  </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 5 link 74</label>
  <input class="form-control" type="text" name="section_5_link_74"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 5 link alt 74</label>
<input class="form-control" type="text" name="section_5_link_alt_74" />
</div>
<div class="col-md-4 col-sm-12">
   <label class="col-form-label">section 5 link conteudo 74</label>
<input class="form-control" type="text" name="section_5_link_conteudo_74" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 5 conteudo 75</label>
 <input class="form-control" type="text" name="section_5_conteudo_75" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 5 conteudo 76</label>
 <input class="form-control" type="text" name="section_5_conteudo_76" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 5 conteudo 77</label>
 <input class="form-control" type="text" name="section_5_conteudo_77" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 5 conteudo 78</label>
 <input class="form-control" type="text" name="section_5_conteudo_78" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 5 conteudo 79</label>
 <input class="form-control" type="text" name="section_5_conteudo_79" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 5 conteudo 80</label>
 <input class="form-control" type="text" name="section_5_conteudo_80" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 5 conteudo 81</label>
 <input class="form-control" type="text" name="section_5_conteudo_81" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 5 conteudo 82</label>
 <input class="form-control" type="text" name="section_5_conteudo_82" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 5 conteudo 83</label>
 <input class="form-control" type="text" name="section_5_conteudo_83" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 5 conteudo 84</label>
 <input class="form-control" type="text" name="section_5_conteudo_84" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 5 conteudo 85</label>
 <input class="form-control" type="text" name="section_5_conteudo_85" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 5 conteudo 86</label>
 <input class="form-control" type="text" name="section_5_conteudo_86" />
  </div>
</div>
<br>
<hr>
<h4 class="card-title">Section 6</h4>
<hr>
<br>
<div class="form-group row">
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 6 conteudo 87</label>
 <input class="form-control" type="text" name="section_6_conteudo_87" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 6 conteudo 88</label>
 <input class="form-control" type="text" name="section_6_conteudo_88" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 6 conteudo 89</label>
 <input class="form-control" type="text" name="section_6_conteudo_89" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 6 conteudo 90</label>
 <input class="form-control" type="text" name="section_6_conteudo_90" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 6 conteudo 91</label>
 <input class="form-control" type="text" name="section_6_conteudo_91" />
  </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 6 link 92</label>
  <input class="form-control" type="text" name="section_6_link_92"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 6 link alt 92</label>
<input class="form-control" type="text" name="section_6_link_alt_92" />
</div>
<div class="col-md-4 col-sm-12">
   <label class="col-form-label">section 6 link conteudo 92</label>
<input class="form-control" type="text" name="section_6_link_conteudo_92" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 6 conteudo 93</label>
 <input class="form-control" type="text" name="section_6_conteudo_93" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 6 conteudo 94</label>
 <input class="form-control" type="text" name="section_6_conteudo_94" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 6 conteudo 95</label>
 <input class="form-control" type="text" name="section_6_conteudo_95" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 6 conteudo 96</label>
 <input class="form-control" type="text" name="section_6_conteudo_96" />
  </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 6 link 97</label>
  <input class="form-control" type="text" name="section_6_link_97"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 6 link alt 97</label>
<input class="form-control" type="text" name="section_6_link_alt_97" />
</div>
<div class="col-md-4 col-sm-12">
   <label class="col-form-label">section 6 link conteudo 97</label>
<input class="form-control" type="text" name="section_6_link_conteudo_97" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 6 conteudo 98</label>
 <input class="form-control" type="text" name="section_6_conteudo_98" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 6 conteudo 99</label>
 <input class="form-control" type="text" name="section_6_conteudo_99" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 6 conteudo 100</label>
 <input class="form-control" type="text" name="section_6_conteudo_100" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 6 conteudo 101</label>
 <input class="form-control" type="text" name="section_6_conteudo_101" />
  </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 6 link 102</label>
  <input class="form-control" type="text" name="section_6_link_102"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 6 link alt 102</label>
<input class="form-control" type="text" name="section_6_link_alt_102" />
</div>
<div class="col-md-4 col-sm-12">
   <label class="col-form-label">section 6 link conteudo 102</label>
<input class="form-control" type="text" name="section_6_link_conteudo_102" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 6 conteudo 103</label>
 <input class="form-control" type="text" name="section_6_conteudo_103" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 6 conteudo 104</label>
 <input class="form-control" type="text" name="section_6_conteudo_104" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 6 conteudo 105</label>
 <input class="form-control" type="text" name="section_6_conteudo_105" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 6 conteudo 106</label>
 <input class="form-control" type="text" name="section_6_conteudo_106" />
  </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 6 link 107</label>
  <input class="form-control" type="text" name="section_6_link_107"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 6 link alt 107</label>
<input class="form-control" type="text" name="section_6_link_alt_107" />
</div>
<div class="col-md-4 col-sm-12">
   <label class="col-form-label">section 6 link conteudo 107</label>
<input class="form-control" type="text" name="section_6_link_conteudo_107" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 6 conteudo 108</label>
 <input class="form-control" type="text" name="section_6_conteudo_108" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 6 conteudo 109</label>
 <input class="form-control" type="text" name="section_6_conteudo_109" />
  </div>
</div>
<br>
<hr>
<h4 class="card-title">Section 7</h4>
<hr>
<br>
<div class="form-group row">
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 7 link 110</label>
  <input class="form-control" type="text" name="section_7_link_110"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 7 link alt 110</label>
<input class="form-control" type="text" name="section_7_link_alt_110" />
</div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 7 img 111 () </label>
 <input class="form-control" type="file" name="section_7_img_111" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 7 image alt 111</label>
<input class="form-control" type="text" name="section_7_image_alt_111" />
</div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 7 img 112 () </label>
 <input class="form-control" type="file" name="section_7_img_112" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 7 image alt 112</label>
<input class="form-control" type="text" name="section_7_image_alt_112" />
</div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 7 img 113 () </label>
 <input class="form-control" type="file" name="section_7_img_113" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 7 image alt 113</label>
<input class="form-control" type="text" name="section_7_image_alt_113" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 7 conteudo 114</label>
 <input class="form-control" type="text" name="section_7_conteudo_114" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 7 conteudo 115</label>
 <input class="form-control" type="text" name="section_7_conteudo_115" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 7 conteudo 116</label>
 <input class="form-control" type="text" name="section_7_conteudo_116" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 7 conteudo 117</label>
 <input class="form-control" type="text" name="section_7_conteudo_117" />
  </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 7 link 118</label>
  <input class="form-control" type="text" name="section_7_link_118"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 7 link alt 118</label>
<input class="form-control" type="text" name="section_7_link_alt_118" />
</div>
<div class="col-md-4 col-sm-12">
   <label class="col-form-label">section 7 link conteudo 118</label>
<input class="form-control" type="text" name="section_7_link_conteudo_118" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 7 conteudo 119</label>
 <input class="form-control" type="text" name="section_7_conteudo_119" />
  </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 7 link 120</label>
  <input class="form-control" type="text" name="section_7_link_120"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 7 link alt 120</label>
<input class="form-control" type="text" name="section_7_link_alt_120" />
</div>
<div class="col-md-4 col-sm-12">
   <label class="col-form-label">section 7 link conteudo 120</label>
<input class="form-control" type="text" name="section_7_link_conteudo_120" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 7 conteudo 121</label>
 <input class="form-control" type="text" name="section_7_conteudo_121" />
  </div>
</div>
<br>
<hr>
<h4 class="card-title">Section 8</h4>
<hr>
<br>
<div class="form-group row">
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 8 conteudo 122</label>
 <input class="form-control" type="text" name="section_8_conteudo_122" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 8 conteudo 123</label>
 <input class="form-control" type="text" name="section_8_conteudo_123" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 8 conteudo 125</label>
 <input class="form-control" type="text" name="section_8_conteudo_125" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 8 conteudo 127</label>
 <input class="form-control" type="text" name="section_8_conteudo_127" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 8 conteudo 129</label>
 <input class="form-control" type="text" name="section_8_conteudo_129" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 8 conteudo 131</label>
 <input class="form-control" type="text" name="section_8_conteudo_131" />
  </div>
</div>
<br>
<hr>
<h4 class="card-title">Section 9</h4>
<hr>
<br>
<div class="form-group row">
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 9 img 133 () </label>
 <input class="form-control" type="file" name="section_9_img_133" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 9 image alt 133</label>
<input class="form-control" type="text" name="section_9_image_alt_133" />
</div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 9 img 134 () </label>
 <input class="form-control" type="file" name="section_9_img_134" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 9 image alt 134</label>
<input class="form-control" type="text" name="section_9_image_alt_134" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 9 conteudo 135</label>
 <input class="form-control" type="text" name="section_9_conteudo_135" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 9 conteudo 136</label>
 <input class="form-control" type="text" name="section_9_conteudo_136" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 9 conteudo 137</label>
 <input class="form-control" type="text" name="section_9_conteudo_137" />
  </div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 9 img 138 () </label>
 <input class="form-control" type="file" name="section_9_img_138" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 9 image alt 138</label>
<input class="form-control" type="text" name="section_9_image_alt_138" />
</div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 9 img 139 () </label>
 <input class="form-control" type="file" name="section_9_img_139" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 9 image alt 139</label>
<input class="form-control" type="text" name="section_9_image_alt_139" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 9 conteudo 140</label>
 <input class="form-control" type="text" name="section_9_conteudo_140" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 9 conteudo 141</label>
 <input class="form-control" type="text" name="section_9_conteudo_141" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 9 conteudo 142</label>
 <input class="form-control" type="text" name="section_9_conteudo_142" />
  </div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 9 img 143 () </label>
 <input class="form-control" type="file" name="section_9_img_143" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 9 image alt 143</label>
<input class="form-control" type="text" name="section_9_image_alt_143" />
</div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 9 img 144 () </label>
 <input class="form-control" type="file" name="section_9_img_144" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 9 image alt 144</label>
<input class="form-control" type="text" name="section_9_image_alt_144" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 9 conteudo 145</label>
 <input class="form-control" type="text" name="section_9_conteudo_145" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 9 conteudo 146</label>
 <input class="form-control" type="text" name="section_9_conteudo_146" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 9 conteudo 147</label>
 <input class="form-control" type="text" name="section_9_conteudo_147" />
  </div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 9 img 148 () </label>
 <input class="form-control" type="file" name="section_9_img_148" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 9 image alt 148</label>
<input class="form-control" type="text" name="section_9_image_alt_148" />
</div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 9 img 149 () </label>
 <input class="form-control" type="file" name="section_9_img_149" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 9 image alt 149</label>
<input class="form-control" type="text" name="section_9_image_alt_149" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 9 conteudo 150</label>
 <input class="form-control" type="text" name="section_9_conteudo_150" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 9 conteudo 151</label>
 <input class="form-control" type="text" name="section_9_conteudo_151" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 9 conteudo 152</label>
 <input class="form-control" type="text" name="section_9_conteudo_152" />
  </div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 9 img 153 () </label>
 <input class="form-control" type="file" name="section_9_img_153" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 9 image alt 153</label>
<input class="form-control" type="text" name="section_9_image_alt_153" />
</div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 9 img 154 () </label>
 <input class="form-control" type="file" name="section_9_img_154" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 9 image alt 154</label>
<input class="form-control" type="text" name="section_9_image_alt_154" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 9 conteudo 155</label>
 <input class="form-control" type="text" name="section_9_conteudo_155" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 9 conteudo 156</label>
 <input class="form-control" type="text" name="section_9_conteudo_156" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 9 conteudo 157</label>
 <input class="form-control" type="text" name="section_9_conteudo_157" />
  </div>
</div>
<br>
<hr>
<h4 class="card-title">Section 10</h4>
<hr>
<br>
<div class="form-group row">
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 10 img 158 () </label>
 <input class="form-control" type="file" name="section_10_img_158" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 10 image alt 158</label>
<input class="form-control" type="text" name="section_10_image_alt_158" />
</div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 10 img 159 () </label>
 <input class="form-control" type="file" name="section_10_img_159" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 10 image alt 159</label>
<input class="form-control" type="text" name="section_10_image_alt_159" />
</div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 10 img 160 () </label>
 <input class="form-control" type="file" name="section_10_img_160" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 10 image alt 160</label>
<input class="form-control" type="text" name="section_10_image_alt_160" />
</div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 10 img 161 () </label>
 <input class="form-control" type="file" name="section_10_img_161" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 10 image alt 161</label>
<input class="form-control" type="text" name="section_10_image_alt_161" />
</div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 10 img 162 () </label>
 <input class="form-control" type="file" name="section_10_img_162" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 10 image alt 162</label>
<input class="form-control" type="text" name="section_10_image_alt_162" />
</div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 10 img 163 () </label>
 <input class="form-control" type="file" name="section_10_img_163" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 10 image alt 163</label>
<input class="form-control" type="text" name="section_10_image_alt_163" />
</div>
</div>
<br>
<hr>
<h4 class="card-title">Section 11</h4>
<hr>
<br>
<div class="form-group row">
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 11 conteudo 164</label>
 <input class="form-control" type="text" name="section_11_conteudo_164" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 11 conteudo 165</label>
 <input class="form-control" type="text" name="section_11_conteudo_165" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 11 conteudo 166</label>
 <input class="form-control" type="text" name="section_11_conteudo_166" />
  </div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 11 img 167 () </label>
 <input class="form-control" type="file" name="section_11_img_167" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 11 image alt 167</label>
<input class="form-control" type="text" name="section_11_image_alt_167" />
</div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 11 link 169</label>
  <input class="form-control" type="text" name="section_11_link_169"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 11 link alt 169</label>
<input class="form-control" type="text" name="section_11_link_alt_169" />
</div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 11 link 170</label>
  <input class="form-control" type="text" name="section_11_link_170"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 11 link alt 170</label>
<input class="form-control" type="text" name="section_11_link_alt_170" />
</div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 11 link 171</label>
  <input class="form-control" type="text" name="section_11_link_171"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 11 link alt 171</label>
<input class="form-control" type="text" name="section_11_link_alt_171" />
</div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 11 img 172 () </label>
 <input class="form-control" type="file" name="section_11_img_172" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 11 image alt 172</label>
<input class="form-control" type="text" name="section_11_image_alt_172" />
</div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 11 img 173 () </label>
 <input class="form-control" type="file" name="section_11_img_173" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 11 image alt 173</label>
<input class="form-control" type="text" name="section_11_image_alt_173" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 11 conteudo 174</label>
 <input class="form-control" type="text" name="section_11_conteudo_174" />
  </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 11 link 175</label>
  <input class="form-control" type="text" name="section_11_link_175"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 11 link alt 175</label>
<input class="form-control" type="text" name="section_11_link_alt_175" />
</div>
<div class="col-md-4 col-sm-12">
   <label class="col-form-label">section 11 link conteudo 175</label>
<input class="form-control" type="text" name="section_11_link_conteudo_175" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 11 conteudo 176</label>
 <input class="form-control" type="text" name="section_11_conteudo_176" />
  </div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 11 img 177 () </label>
 <input class="form-control" type="file" name="section_11_img_177" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 11 image alt 177</label>
<input class="form-control" type="text" name="section_11_image_alt_177" />
</div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 11 link 179</label>
  <input class="form-control" type="text" name="section_11_link_179"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 11 link alt 179</label>
<input class="form-control" type="text" name="section_11_link_alt_179" />
</div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 11 link 180</label>
  <input class="form-control" type="text" name="section_11_link_180"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 11 link alt 180</label>
<input class="form-control" type="text" name="section_11_link_alt_180" />
</div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 11 link 181</label>
  <input class="form-control" type="text" name="section_11_link_181"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 11 link alt 181</label>
<input class="form-control" type="text" name="section_11_link_alt_181" />
</div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 11 img 182 () </label>
 <input class="form-control" type="file" name="section_11_img_182" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 11 image alt 182</label>
<input class="form-control" type="text" name="section_11_image_alt_182" />
</div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 11 img 183 () </label>
 <input class="form-control" type="file" name="section_11_img_183" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 11 image alt 183</label>
<input class="form-control" type="text" name="section_11_image_alt_183" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 11 conteudo 184</label>
 <input class="form-control" type="text" name="section_11_conteudo_184" />
  </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 11 link 185</label>
  <input class="form-control" type="text" name="section_11_link_185"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 11 link alt 185</label>
<input class="form-control" type="text" name="section_11_link_alt_185" />
</div>
<div class="col-md-4 col-sm-12">
   <label class="col-form-label">section 11 link conteudo 185</label>
<input class="form-control" type="text" name="section_11_link_conteudo_185" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 11 conteudo 186</label>
 <input class="form-control" type="text" name="section_11_conteudo_186" />
  </div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 11 img 187 () </label>
 <input class="form-control" type="file" name="section_11_img_187" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 11 image alt 187</label>
<input class="form-control" type="text" name="section_11_image_alt_187" />
</div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 11 link 189</label>
  <input class="form-control" type="text" name="section_11_link_189"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 11 link alt 189</label>
<input class="form-control" type="text" name="section_11_link_alt_189" />
</div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 11 link 190</label>
  <input class="form-control" type="text" name="section_11_link_190"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 11 link alt 190</label>
<input class="form-control" type="text" name="section_11_link_alt_190" />
</div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 11 link 191</label>
  <input class="form-control" type="text" name="section_11_link_191"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 11 link alt 191</label>
<input class="form-control" type="text" name="section_11_link_alt_191" />
</div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 11 img 192 () </label>
 <input class="form-control" type="file" name="section_11_img_192" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 11 image alt 192</label>
<input class="form-control" type="text" name="section_11_image_alt_192" />
</div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 11 img 193 () </label>
 <input class="form-control" type="file" name="section_11_img_193" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 11 image alt 193</label>
<input class="form-control" type="text" name="section_11_image_alt_193" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 11 conteudo 194</label>
 <input class="form-control" type="text" name="section_11_conteudo_194" />
  </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 11 link 195</label>
  <input class="form-control" type="text" name="section_11_link_195"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 11 link alt 195</label>
<input class="form-control" type="text" name="section_11_link_alt_195" />
</div>
<div class="col-md-4 col-sm-12">
   <label class="col-form-label">section 11 link conteudo 195</label>
<input class="form-control" type="text" name="section_11_link_conteudo_195" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 11 conteudo 196</label>
 <input class="form-control" type="text" name="section_11_conteudo_196" />
  </div>
</div>
<br>
<hr>
<h4 class="card-title">Section 12</h4>
<hr>
<br>
<div class="form-group row">
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 12 img 197 () </label>
 <input class="form-control" type="file" name="section_12_img_197" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 12 image alt 197</label>
<input class="form-control" type="text" name="section_12_image_alt_197" />
</div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 12 img 198 () </label>
 <input class="form-control" type="file" name="section_12_img_198" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 12 image alt 198</label>
<input class="form-control" type="text" name="section_12_image_alt_198" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 12 conteudo 199</label>
 <input class="form-control" type="text" name="section_12_conteudo_199" />
  </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 12 link 200</label>
  <input class="form-control" type="text" name="section_12_link_200"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 12 link alt 200</label>
<input class="form-control" type="text" name="section_12_link_alt_200" />
</div>
<div class="col-md-4 col-sm-12">
   <label class="col-form-label">section 12 link conteudo 200</label>
<input class="form-control" type="text" name="section_12_link_conteudo_200" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 12 conteudo 201</label>
 <input class="form-control" type="text" name="section_12_conteudo_201" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 12 conteudo 202</label>
 <input class="form-control" type="text" name="section_12_conteudo_202" />
  </div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 12 img 203 () </label>
 <input class="form-control" type="file" name="section_12_img_203" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 12 image alt 203</label>
<input class="form-control" type="text" name="section_12_image_alt_203" />
</div>
</div>
<br>
<hr>
<h4 class="card-title">Section 13</h4>
<hr>
<br>
<div class="form-group row">
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 13 conteudo 204</label>
 <input class="form-control" type="text" name="section_13_conteudo_204" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 13 conteudo 205</label>
 <input class="form-control" type="text" name="section_13_conteudo_205" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 13 conteudo 206</label>
 <input class="form-control" type="text" name="section_13_conteudo_206" />
  </div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 13 img 207 () </label>
 <input class="form-control" type="file" name="section_13_img_207" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 13 image alt 207</label>
<input class="form-control" type="text" name="section_13_image_alt_207" />
</div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 13 link 208</label>
  <input class="form-control" type="text" name="section_13_link_208"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 13 link alt 208</label>
<input class="form-control" type="text" name="section_13_link_alt_208" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 13 conteudo 209</label>
 <input class="form-control" type="text" name="section_13_conteudo_209" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 13 conteudo 210</label>
 <input class="form-control" type="text" name="section_13_conteudo_210" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 13 conteudo 211</label>
 <input class="form-control" type="text" name="section_13_conteudo_211" />
  </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 13 link 212</label>
  <input class="form-control" type="text" name="section_13_link_212"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 13 link alt 212</label>
<input class="form-control" type="text" name="section_13_link_alt_212" />
</div>
<div class="col-md-4 col-sm-12">
   <label class="col-form-label">section 13 link conteudo 212</label>
<input class="form-control" type="text" name="section_13_link_conteudo_212" />
  </div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 13 img 213 () </label>
 <input class="form-control" type="file" name="section_13_img_213" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 13 image alt 213</label>
<input class="form-control" type="text" name="section_13_image_alt_213" />
</div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 13 link 214</label>
  <input class="form-control" type="text" name="section_13_link_214"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 13 link alt 214</label>
<input class="form-control" type="text" name="section_13_link_alt_214" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 13 conteudo 215</label>
 <input class="form-control" type="text" name="section_13_conteudo_215" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 13 conteudo 216</label>
 <input class="form-control" type="text" name="section_13_conteudo_216" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 13 conteudo 217</label>
 <input class="form-control" type="text" name="section_13_conteudo_217" />
  </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 13 link 218</label>
  <input class="form-control" type="text" name="section_13_link_218"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 13 link alt 218</label>
<input class="form-control" type="text" name="section_13_link_alt_218" />
</div>
<div class="col-md-4 col-sm-12">
   <label class="col-form-label">section 13 link conteudo 218</label>
<input class="form-control" type="text" name="section_13_link_conteudo_218" />
  </div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 13 img 219 () </label>
 <input class="form-control" type="file" name="section_13_img_219" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 13 image alt 219</label>
<input class="form-control" type="text" name="section_13_image_alt_219" />
</div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 13 link 220</label>
  <input class="form-control" type="text" name="section_13_link_220"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 13 link alt 220</label>
<input class="form-control" type="text" name="section_13_link_alt_220" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 13 conteudo 221</label>
 <input class="form-control" type="text" name="section_13_conteudo_221" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 13 conteudo 222</label>
 <input class="form-control" type="text" name="section_13_conteudo_222" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 13 conteudo 223</label>
 <input class="form-control" type="text" name="section_13_conteudo_223" />
  </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 13 link 224</label>
  <input class="form-control" type="text" name="section_13_link_224"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 13 link alt 224</label>
<input class="form-control" type="text" name="section_13_link_alt_224" />
</div>
<div class="col-md-4 col-sm-12">
   <label class="col-form-label">section 13 link conteudo 224</label>
<input class="form-control" type="text" name="section_13_link_conteudo_224" />
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
<input type="hidden" name="acao" value="addHome">
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
