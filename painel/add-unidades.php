<?php include "verifica.php";
$unidades->add();
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
<title>Painel Hoogli - Adicionar unidades</title>
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
<h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Adicionar unidades</h4>
<div class="d-flex align-items-center">
<nav aria-label="breadcrumb">
<ol class="breadcrumb m-0 p-0">
<li class="breadcrumb-item"><a href="." class="text-muted">Home</a></li>
<li class="breadcrumb-item text-muted active" aria-current="page"><a href="unidades.php" class="text-muted">unidades</a></li>
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
<div class="form-group row">
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 1 img 1 (416X277) </label>
 <input class="form-control" type="file" name="section_1_img_1" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 1 image alt 1</label>
<input class="form-control" type="text" name="section_1_image_alt_1" />
</div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 1 img 2 (416X277) </label>
 <input class="form-control" type="file" name="section_1_img_2" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 1 image alt 2</label>
<input class="form-control" type="text" name="section_1_image_alt_2" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 1 conteudo 3</label>
 <input class="form-control" type="text" name="section_1_conteudo_3" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 1 conteudo 4</label>
 <input class="form-control" type="text" name="section_1_conteudo_4" />
  </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 1 link 5</label>
  <input class="form-control" type="text" name="section_1_link_5"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 1 link alt 5</label>
<input class="form-control" type="text" name="section_1_link_alt_5" />
</div>
<div class="col-md-4 col-sm-12">
   <label class="col-form-label">section 1 link conteudo 5</label>
<input class="form-control" type="text" name="section_1_link_conteudo_5" />
  </div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 2 img 6 (416X277) </label>
 <input class="form-control" type="file" name="section_2_img_6" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 2 image alt 6</label>
<input class="form-control" type="text" name="section_2_image_alt_6" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 2 conteudo 7</label>
 <input class="form-control" type="text" name="section_2_conteudo_7" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 2 conteudo 8</label>
 <input class="form-control" type="text" name="section_2_conteudo_8" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 2 conteudo 9</label>
 <input class="form-control" type="text" name="section_2_conteudo_9" />
  </div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 2 img 10 (416X277) </label>
 <input class="form-control" type="file" name="section_2_img_10" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 2 image alt 10</label>
<input class="form-control" type="text" name="section_2_image_alt_10" />
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
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 2 img 13 (416X277) </label>
 <input class="form-control" type="file" name="section_2_img_13" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 2 image alt 13</label>
<input class="form-control" type="text" name="section_2_image_alt_13" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 2 conteudo 14</label>
 <input class="form-control" type="text" name="section_2_conteudo_14" />
  </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 2 link 15</label>
  <input class="form-control" type="text" name="section_2_link_15"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 2 link alt 15</label>
<input class="form-control" type="text" name="section_2_link_alt_15" />
</div>
<div class="col-md-4 col-sm-12">
   <label class="col-form-label">section 2 link conteudo 15</label>
<input class="form-control" type="text" name="section_2_link_conteudo_15" />
  </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 2 link 16</label>
  <input class="form-control" type="text" name="section_2_link_16"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 2 link alt 16</label>
<input class="form-control" type="text" name="section_2_link_alt_16" />
</div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 2 img 17 (416X277) </label>
 <input class="form-control" type="file" name="section_2_img_17" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 2 image alt 17</label>
<input class="form-control" type="text" name="section_2_image_alt_17" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 2 conteudo 18</label>
 <input class="form-control" type="text" name="section_2_conteudo_18" />
  </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 2 link 19</label>
  <input class="form-control" type="text" name="section_2_link_19"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 2 link alt 19</label>
<input class="form-control" type="text" name="section_2_link_alt_19" />
</div>
<div class="col-md-4 col-sm-12">
   <label class="col-form-label">section 2 link conteudo 19</label>
<input class="form-control" type="text" name="section_2_link_conteudo_19" />
  </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 2 link 20</label>
  <input class="form-control" type="text" name="section_2_link_20"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 2 link alt 20</label>
<input class="form-control" type="text" name="section_2_link_alt_20" />
</div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 2 img 21 (416X277) </label>
 <input class="form-control" type="file" name="section_2_img_21" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 2 image alt 21</label>
<input class="form-control" type="text" name="section_2_image_alt_21" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 2 conteudo 22</label>
 <input class="form-control" type="text" name="section_2_conteudo_22" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 2 conteudo 23</label>
 <input class="form-control" type="text" name="section_2_conteudo_23" />
  </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 2 link 24</label>
  <input class="form-control" type="text" name="section_2_link_24"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 2 link alt 24</label>
<input class="form-control" type="text" name="section_2_link_alt_24" />
</div>
<div class="col-md-4 col-sm-12">
   <label class="col-form-label">section 2 link conteudo 24</label>
<input class="form-control" type="text" name="section_2_link_conteudo_24" />
  </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 2 link 25</label>
  <input class="form-control" type="text" name="section_2_link_25"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 2 link alt 25</label>
<input class="form-control" type="text" name="section_2_link_alt_25" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 2 conteudo 26</label>
 <input class="form-control" type="text" name="section_2_conteudo_26" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 2 conteudo 27</label>
 <input class="form-control" type="text" name="section_2_conteudo_27" />
  </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 2 link 28</label>
  <input class="form-control" type="text" name="section_2_link_28"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 2 link alt 28</label>
<input class="form-control" type="text" name="section_2_link_alt_28" />
</div>
<div class="col-md-4 col-sm-12">
   <label class="col-form-label">section 2 link conteudo 28</label>
<input class="form-control" type="text" name="section_2_link_conteudo_28" />
  </div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 3 img 29 (416X277) </label>
 <input class="form-control" type="file" name="section_3_img_29" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 3 image alt 29</label>
<input class="form-control" type="text" name="section_3_image_alt_29" />
</div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 3 link 30</label>
  <input class="form-control" type="text" name="section_3_link_30"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 3 link alt 30</label>
<input class="form-control" type="text" name="section_3_link_alt_30" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 3 conteudo 31</label>
 <input class="form-control" type="text" name="section_3_conteudo_31" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 3 conteudo 32</label>
 <input class="form-control" type="text" name="section_3_conteudo_32" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 3 conteudo 33</label>
 <input class="form-control" type="text" name="section_3_conteudo_33" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 3 conteudo 34</label>
 <input class="form-control" type="text" name="section_3_conteudo_34" />
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
<label class="col-form-label">section 3 img 39 (416X277) </label>
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
<label class="col-form-label">section 4 conteudo 42</label>
 <input class="form-control" type="text" name="section_4_conteudo_42" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 4 conteudo 43</label>
 <input class="form-control" type="text" name="section_4_conteudo_43" />
  </div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 5 img 44 (416X277) </label>
 <input class="form-control" type="file" name="section_5_img_44" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 5 image alt 44</label>
<input class="form-control" type="text" name="section_5_image_alt_44" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 5 conteudo 45</label>
 <input class="form-control" type="text" name="section_5_conteudo_45" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 5 conteudo 46</label>
 <input class="form-control" type="text" name="section_5_conteudo_46" />
  </div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 5 img 47 (416X277) </label>
 <input class="form-control" type="file" name="section_5_img_47" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 5 image alt 47</label>
<input class="form-control" type="text" name="section_5_image_alt_47" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 5 conteudo 48</label>
 <input class="form-control" type="text" name="section_5_conteudo_48" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 5 conteudo 49</label>
 <input class="form-control" type="text" name="section_5_conteudo_49" />
  </div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 5 img 50 (416X277) </label>
 <input class="form-control" type="file" name="section_5_img_50" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 5 image alt 50</label>
<input class="form-control" type="text" name="section_5_image_alt_50" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 5 conteudo 51</label>
 <input class="form-control" type="text" name="section_5_conteudo_51" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 5 conteudo 52</label>
 <input class="form-control" type="text" name="section_5_conteudo_52" />
  </div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 5 img 53 (416X277) </label>
 <input class="form-control" type="file" name="section_5_img_53" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 5 image alt 53</label>
<input class="form-control" type="text" name="section_5_image_alt_53" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 5 conteudo 54</label>
 <input class="form-control" type="text" name="section_5_conteudo_54" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 5 conteudo 55</label>
 <input class="form-control" type="text" name="section_5_conteudo_55" />
  </div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 6 img 56 (416X277) </label>
 <input class="form-control" type="file" name="section_6_img_56" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 6 image alt 56</label>
<input class="form-control" type="text" name="section_6_image_alt_56" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 6 conteudo 57</label>
 <input class="form-control" type="text" name="section_6_conteudo_57" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 6 conteudo 58</label>
 <input class="form-control" type="text" name="section_6_conteudo_58" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 6 conteudo 59</label>
 <input class="form-control" type="text" name="section_6_conteudo_59" />
  </div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 6 img 60 (416X277) </label>
 <input class="form-control" type="file" name="section_6_img_60" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 6 image alt 60</label>
<input class="form-control" type="text" name="section_6_image_alt_60" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 6 conteudo 61</label>
 <input class="form-control" type="text" name="section_6_conteudo_61" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 6 conteudo 62</label>
 <input class="form-control" type="text" name="section_6_conteudo_62" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 6 conteudo 63</label>
 <input class="form-control" type="text" name="section_6_conteudo_63" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 6 conteudo 64</label>
 <input class="form-control" type="text" name="section_6_conteudo_64" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 7 conteudo 65</label>
 <input class="form-control" type="text" name="section_7_conteudo_65" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 7 conteudo 66</label>
 <input class="form-control" type="text" name="section_7_conteudo_66" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 8 conteudo 67</label>
 <input class="form-control" type="text" name="section_8_conteudo_67" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 8 conteudo 68</label>
 <input class="form-control" type="text" name="section_8_conteudo_68" />
  </div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 9 img 69 (416X277) </label>
 <input class="form-control" type="file" name="section_9_img_69" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 9 image alt 69</label>
<input class="form-control" type="text" name="section_9_image_alt_69" />
</div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 9 img 70 (416X277) </label>
 <input class="form-control" type="file" name="section_9_img_70" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 9 image alt 70</label>
<input class="form-control" type="text" name="section_9_image_alt_70" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 9 conteudo 71</label>
 <input class="form-control" type="text" name="section_9_conteudo_71" />
  </div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 10 img 72 (416X277) </label>
 <input class="form-control" type="file" name="section_10_img_72" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 10 image alt 72</label>
<input class="form-control" type="text" name="section_10_image_alt_72" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 10 conteudo 73</label>
 <input class="form-control" type="text" name="section_10_conteudo_73" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 10 conteudo 74</label>
 <input class="form-control" type="text" name="section_10_conteudo_74" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 10 conteudo 75</label>
 <input class="form-control" type="text" name="section_10_conteudo_75" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 10 conteudo 76</label>
 <input class="form-control" type="text" name="section_10_conteudo_76" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 10 conteudo 77</label>
 <input class="form-control" type="text" name="section_10_conteudo_77" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 10 conteudo 78</label>
 <input class="form-control" type="text" name="section_10_conteudo_78" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 10 conteudo 79</label>
 <input class="form-control" type="text" name="section_10_conteudo_79" />
  </div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 10 img 80 (416X277) </label>
 <input class="form-control" type="file" name="section_10_img_80" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 10 image alt 80</label>
<input class="form-control" type="text" name="section_10_image_alt_80" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 10 conteudo 81</label>
 <input class="form-control" type="text" name="section_10_conteudo_81" />
  </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 10 link 82</label>
  <input class="form-control" type="text" name="section_10_link_82"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 10 link alt 82</label>
<input class="form-control" type="text" name="section_10_link_alt_82" />
</div>
<div class="col-md-4 col-sm-12">
   <label class="col-form-label">section 10 link conteudo 82</label>
<input class="form-control" type="text" name="section_10_link_conteudo_82" />
  </div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 10 img 83 (416X277) </label>
 <input class="form-control" type="file" name="section_10_img_83" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 10 image alt 83</label>
<input class="form-control" type="text" name="section_10_image_alt_83" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 10 conteudo 84</label>
 <input class="form-control" type="text" name="section_10_conteudo_84" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 10 conteudo 85</label>
 <input class="form-control" type="text" name="section_10_conteudo_85" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 10 conteudo 86</label>
 <input class="form-control" type="text" name="section_10_conteudo_86" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 10 conteudo 87</label>
 <input class="form-control" type="text" name="section_10_conteudo_87" />
  </div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 10 img 88 (416X277) </label>
 <input class="form-control" type="file" name="section_10_img_88" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 10 image alt 88</label>
<input class="form-control" type="text" name="section_10_image_alt_88" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 10 conteudo 89</label>
 <input class="form-control" type="text" name="section_10_conteudo_89" />
  </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 10 link 90</label>
  <input class="form-control" type="text" name="section_10_link_90"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 10 link alt 90</label>
<input class="form-control" type="text" name="section_10_link_alt_90" />
</div>
<div class="col-md-4 col-sm-12">
   <label class="col-form-label">section 10 link conteudo 90</label>
<input class="form-control" type="text" name="section_10_link_conteudo_90" />
  </div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 10 img 91 (416X277) </label>
 <input class="form-control" type="file" name="section_10_img_91" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 10 image alt 91</label>
<input class="form-control" type="text" name="section_10_image_alt_91" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 10 conteudo 92</label>
 <input class="form-control" type="text" name="section_10_conteudo_92" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 10 conteudo 93</label>
 <input class="form-control" type="text" name="section_10_conteudo_93" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 10 conteudo 94</label>
 <input class="form-control" type="text" name="section_10_conteudo_94" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 10 conteudo 95</label>
 <input class="form-control" type="text" name="section_10_conteudo_95" />
  </div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 10 img 96 (416X277) </label>
 <input class="form-control" type="file" name="section_10_img_96" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 10 image alt 96</label>
<input class="form-control" type="text" name="section_10_image_alt_96" />
</div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 10 conteudo 97</label>
 <input class="form-control" type="text" name="section_10_conteudo_97" />
  </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 10 link 98</label>
  <input class="form-control" type="text" name="section_10_link_98"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 10 link alt 98</label>
<input class="form-control" type="text" name="section_10_link_alt_98" />
</div>
<div class="col-md-4 col-sm-12">
   <label class="col-form-label">section 10 link conteudo 98</label>
<input class="form-control" type="text" name="section_10_link_conteudo_98" />
  </div>
 <div class="col-md-6 col-sm-12">
<label class="col-form-label">section 10 img 99 (416X277) </label>
 <input class="form-control" type="file" name="section_10_img_99" />
 </div>
<div class="col-md-6 col-sm-12">
<label class="col-form-label">section 10 image alt 99</label>
<input class="form-control" type="text" name="section_10_image_alt_99" />
</div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 10 link 100</label>
  <input class="form-control" type="text" name="section_10_link_100"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 10 link alt 100</label>
<input class="form-control" type="text" name="section_10_link_alt_100" />
</div>
<div class="col-md-4 col-sm-12">
   <label class="col-form-label">section 10 link conteudo 100</label>
<input class="form-control" type="text" name="section_10_link_conteudo_100" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 11 conteudo 101</label>
 <input class="form-control" type="text" name="section_11_conteudo_101" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 11 conteudo 102</label>
 <input class="form-control" type="text" name="section_11_conteudo_102" />
  </div>
 <div class="col-md-12 col-sm-12">
<label class="col-form-label">section 12 conteudo 103</label>
 <input class="form-control" type="text" name="section_12_conteudo_103" />
  </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 12 link 104</label>
  <input class="form-control" type="text" name="section_12_link_104"/>
    </div>
<div class="col-md-4 col-sm-12">
 <label class="col-form-label">section 12 link alt 104</label>
<input class="form-control" type="text" name="section_12_link_alt_104" />
</div>
<div class="col-md-4 col-sm-12">
   <label class="col-form-label">section 12 link conteudo 104</label>
<input class="form-control" type="text" name="section_12_link_conteudo_104" />
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
<input type="hidden" name="acao" value="addUnidades">
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
