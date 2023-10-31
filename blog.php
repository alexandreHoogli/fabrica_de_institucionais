<?php
include "includes.php";
include "Class/blogs.class.php";
$Blogs = Blogs::getInstance(Conexao::getInstance());
$puxaBlogs = $Blogs->rsDados('', 'id DESC');
$puxaBlogsRecentes = $Blogs->rsDados('', 'id DESC');

include "Class/blog.class.php";
$blogsPage = Blog::getInstance(Conexao::getInstance());
$blogPage = $blogsPage->rsDados(1);
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php include 'head.php'; ?>
    <title>
        <?php if (isset($blogPage->meta_title) && !empty($blogPage->meta_title)) {
            echo $blogPage->meta_title;
        } ?>
    </title>
    <meta name="description" content="<?php if (isset($blogPage->meta_description) && !empty($blogPage->meta_description)) {
        echo $blogPage->meta_description;
    } ?>" />
    <meta name="keywords" content="<?php if (isset($blogPage->meta_keywords) && !empty($blogPage->meta_keywords)) {
        echo $blogPage->meta_keywords;
    } ?>">
    <meta name="twitter:card" content="<?php if (isset($blogPage->meta_title) && !empty($blogPage->meta_title)) {
        echo $blogPage->meta_title;
    } ?>" />
    <meta name="twitter:site" content="<?php echo SITE_URL; ?>" />
    <meta name="twitter:creator" content="Hoogli" />
    <meta property="og:title" content="<?php if (isset($blogPage->meta_title) && !empty($blogPage->meta_title)) {
        echo $blogPage->meta_title;
    } ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo SITE_URL; ?>" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image" content="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->logo_principal; ?>" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" />
    <meta property="og:description" content="<?php if (isset($blogPage->meta_description) && !empty($blogPage->meta_description)) {
        echo $blogPage->meta_description;
    } ?>" />
    <meta property="og:determiner" content="A" />
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:site_name" content="<?php echo $infoSistema->nome_empresa ?>" />
</head>

<body>
    <?php include 'header.php'; ?>

    <style>
        .image_single_blog {
            background-image: url(<?php echo SITE_URL . '/img/' . $blogPage->section_1_img_1 ?>);
            background-position-y: center;
            background-size: cover;
        }

        @media (max-width:600px) {
            .image_single_blog {
                background-image: url(<?php echo SITE_URL . '/img/' . $blogPage->section_1_img_2 ?>);
                background-position-y: center;
                background-size: cover;
            }
        }
    </style>
    <div class="breadcrumb__area breadcrumb__overlay breadcrumb__height p-relative fix image_single_blog">
        <img src="" alt="">
        <img src="" alt="">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content z-index d-flex justify-content-between align-items-end">
                        <div class="breadcrumb__section-title-box">
                            <h4 class="breadcrumb__subtitle">
                                <?php echo $blogPage->section_1_conteudo_3 ?>
                            </h4>
                            <h3 class="breadcrumb__title">
                                <?php echo $blogPage->section_1_conteudo_4 ?>
                            </h3>
                        </div>
                        <div class="breadcrumb__list">
                            <span><a href="/">Home</a></span>
                            <span class="dvdr"><i>/</i></span>
                            <span>
                                <?php echo $blogPage->section_1_conteudo_4 ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tp-blog-3-area pt-120 pb-90">
        <div class="container">
            <div class="row">
                <?php foreach ($puxaBlogs as $blogSingle) { ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30  wow tpfadeUp" data-wow-duration=".9s"
                        data-wow-delay=".3s">
                        <div class="tp-blog-3-item">
                            <div class="tp-blog-3-thumb p-relative">
                                <img src="<?php echo SITE_URL; ?>/img/<?php echo $blogSingle->foto ?>">
                                <div class="tp-blog-3-icon">
                                    <a href="<?php echo SITE_URL; ?>/blog/<?php echo $blogSingle->url_amigavel ?>"><i
                                            class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                            <div class="tp-blog-3-content text-center z-index">
                                <div class="tp-blog-meta pb-10">
                                    <span><i class="fa-light fa-circle-user"></i>postado por
                                        <?php echo $blogSingle->postado_por ?>
                                    </span>
                                    <span><i class="flaticon-price-tag"></i>
                                        <?php echo $blogSingle->data_postagem ?>
                                    </span>
                                </div>
                                <h4 class="tp-blog-3-title"><a
                                        href="<?php echo SITE_URL; ?>/blog/<?php echo $blogSingle->url_amigavel ?>">
                                        <?php echo $blogSingle->titulo ?>
                                    </a></h4>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php include "footer.php" ?>

    <?php include "scripts.php" ?>
</body>

</html>