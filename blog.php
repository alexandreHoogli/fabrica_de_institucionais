<?php
include "includes.php";
include "Class/blogs.class.php";
$Blogs = Blogs::getInstance(Conexao::getInstance());
$puxaBlogs = $Blogs->rsDados('', 'id DESC');
$puxaBlogsRecentes = $Blogs->rsDados('', 'id DESC');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <?php include 'head.php'; ?>
  <title>
    <?php if (isset($metastags->meta_title) && !empty($metastags->meta_title)) {
      echo $metastags->meta_title;
    } ?>
  </title>
  <meta name="description" content="<?php if (isset($metastags->meta_description) && !empty($metastags->meta_description)) {
    echo $metastags->meta_description;
  } ?>" />
  <meta name="keywords" content="<?php if (isset($metastags->meta_keywords) && !empty($metastags->meta_keywords)) {
    echo $metastags->meta_keywords;
  } ?>">
  <meta name="twitter:card" content="<?php if (isset($metastags->meta_title) && !empty($metastags->meta_title)) {
    echo $metastags->meta_title;
  } ?>" />
  <meta name="twitter:site" content="<?php echo SITE_URL; ?>" />
  <meta name="twitter:creator" content="Hoogli" />
  <meta property="og:title" content="<?php if (isset($metastags->meta_title) && !empty($metastags->meta_title)) {
    echo $metastags->meta_title;
  } ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo SITE_URL; ?>" />
  <meta property="og:image:type" content="image/png" />
  <meta property="og:image" content="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->logo_principal; ?>" />
  <meta property="og:image:width" content="400" />
  <meta property="og:image:height" content="300" />
  <meta property="og:description" content="<?php if (isset($metastags->meta_description) && !empty($metastags->meta_description)) {
    echo $metastags->meta_description;
  } ?>" />
  <meta property="og:determiner" content="A" />
  <meta property="og:locale" content="pt_BR" />
  <meta property="og:site_name" content="<?php echo $infoSistema->nome_empresa ?>" />
</head>
<body>
    <div class="page-wrapper">
        <?php include "header.php" ?>
        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div>
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="page-header-border"></div>
            <div class="page-header-border page-header-border-two"></div>
            <div class="page-header-border page-header-border-three"></div>
            <div class="page-header-border page-header-border-four"></div>
            <div class="page-header-border page-header-border-five"></div>
            <div class="page-header-border page-header-border-six"></div>

            <div class="page-header-shape-1"></div>
            <div class="page-header-shape-2"></div>
            <div class="page-header-shape-3"></div>

            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Blog</li>
                    </ul>
                    <h2>Blog</h2>
                </div>
            </div>
        </section>

        <section class="blog-one blog-one__blog-page">
            <div class="container">
                <div class="row">
                    <?php foreach($puxaBlogs as $blog){?>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="<?php echo SITE_URL; ?>/img/<?php echo $blog->foto ?>"alt="<?php echo $blog->descricao_imagem ?>" class="">
                                <img src="assets/images/blog/blog-page-img-1.jpg" alt="">
                                <a href="<?php echo SITE_URL;?>/blog/<?php echo $blog->url_amigavel?>">
                                    <span class="blog-one__plus"></span>
                                </a>
                                <div class="blog-one__date">
                                    <p><?php echo $blog->data_postagem ?></p>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <h3 class="blog-one__title">
                                    <a href="<?php echo SITE_URL;?>/blog/<?php echo $blog->url_amigavel?>"><?php echo $blog->titulo ?></a>
                                </h3>
                                <div class="blog-one__person">
                                    <div class="blog-one__person-img">
                                        <img src="assets/images/blog/blog-one-person-img-1.jpg" alt="">
                                    </div>
                                    <div class="blog-one__person-content">
                                        <p>postado por <?php echo $blog->postado_por ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </section>

        <?php include "footer.php" ?>
    </div>
    <?php include "scripts.php" ?>
</body>

</html>