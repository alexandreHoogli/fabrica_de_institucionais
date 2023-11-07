<?php
include "includes.php";
include "Class/blog.class.php";
$blo = Blog::getInstance(Conexao::getInstance());
$blog = $blo->rsDados(1);

include "Class/blogs.class.php";
$Blogs = Blogs::getInstance(Conexao::getInstance());
$puxaBlogs = $Blogs->rsDados('', 'id DESC');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head.php'; ?>
</head>

<body>
    <div class="page-wrapper">
        <?php include 'header.php'; ?>
        <style>
            .image_blog {
                background-image: url(<?php echo SITE_URL . '/img/' . $blog->section_1_img_1 ?>);
                background-position-y: center;
                background-size: cover;
            }

            @media (max-width:600px) {
                .image_blog {
                    background-image: url(<?php echo SITE_URL . '/img/' . $blog->section_1_img_2 ?>);
                    background-position-y: center;
                    background-size: cover;
                }
            }
        </style>
        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content">
            </div>
        </div>

        <section class="page-header clearfix image_blog">
            <div class="container">
                <div class="page-header__inner text-center clearfix">
                    <ul class="thm-breadcrumb">
                        <li><a href="<?php echo SITE_URL; ?>">Home</a></li>
                        <li>blog</li>
                    </ul>
                    <h2>
                        <?php echo $blog->section_1_conteudo_3 ?>
                    </h2>
                </div>
            </div>
        </section>
        <section class="blog-one blog-one--news">
            <div class="blog-one__bg wow slideInDown" data-wow-delay="100ms" data-wow-duration="2500ms"></div>
            <div class="container">
                <div class="row">
                    <?php foreach ($puxaBlogs as $blogSingle) { ?>
                        <div class="col-xl-4 col-lg-4  wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="blog-one__single">
                                <div class="blog-one__single-img">
                                    <img src="<?php echo SITE_URL; ?>/img/<?php echo $blogSingle->foto ?>" alt="" />
                                    <div class="date-box">
                                        <span>
                                            <?php echo $blogSingle->data_postagem ?>
                                        </span>
                                    </div>
                                    <div class="overlay-icon">
                                        <a href="<?php echo SITE_URL; ?>/blog/<?php echo $blogSingle->url_amigavel ?>"><span
                                                class="icon-plus"></span></a>
                                    </div>
                                </div>

                                <div class="blog-one__single-content">
                                    <ul class="meta-info">
                                        <li><a href="#"><i class="far fa-user-circle"></i>
                                                <?php echo $blogSingle->postado_por ?>
                                            </a></li>
                                    </ul>
                                    <h2><a href="<?php echo SITE_URL; ?>/blog/<?php echo $blogSingle->url_amigavel ?>">
                                            <?php echo $blogSingle->titulo ?>
                                        </a></h2>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

            </div>
        </section>
        <?php include "footer.php" ?>
    </div>

    <?php include "scripts.php" ?>



</body>

</html>