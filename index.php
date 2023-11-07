<?php
include "includes.php";
/* include "Class/home.class.php";
$hor = Home::getInstance(Conexao::getInstance());
$home = $hor->rsDados(1);

include "Class/desc_livro.class.php";
$live = Desc_livro::getInstance(Conexao::getInstance());
$desc_livro = $live->rsDados();

include "Class/desc_colunista.class.php";
$col = Desc_colunista::getInstance(Conexao::getInstance());
$desc_colunista = $col->rsDados();

include "Class/blogs.class.php";
$Blogs = Blogs::getInstance(Conexao::getInstance());
$puxaBlogs = $Blogs->rsDados('', 'id DESC'); */
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
            .image_home {
                background-image: url(<?php echo SITE_URL . '/img/' . $home->section_1_img_1 ?>);
                background-position-y: center;
                background-size: cover;
            }


            @media (max-width:600px) {
                .image_home {
                    background-image: url(<?php echo SITE_URL . '/img/' . $home->section_1_img_2 ?>);
                    background-position-y: center;
                    background-size: cover;
                }
            }
        </style>
        <!--Main Slider Start-->
        <section class="main-slider main-slider-one main-slider-one--two">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": false, "effect": "fade", "pagination": {
            "el": "#main-slider-pagination",
            "type": "bullets",
            "clickable": false
            },

            "autoplay": {
            "delay": 7000
            }}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="image-layer image_home"></div>
                        <div class="image-layer-overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="main-slider-inner text-center">
                                        <div class="main-slider__content">
                                            <span class="main-slider-tagline">
                                                <?php echo $home->section_1_conteudo_3 ?>
                                            </span>
                                            <h2 class="main-slider__title">
                                                <?php echo $home->section_1_conteudo_4 ?>
                                            </h2>
                                        </div>
                                        <div class="main-slider__button-box">
                                            <a href="<?php echo $home->section_1_link_6 ?>"
                                                aria-label="<?php echo $home->section_1_link_alt_6 ?>" class="thm-btn">
                                                <?php echo $home->section_1_link_conteudo_6 ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="features-two">
            <div class="container">
                <div class="row">
                    <!--Start Single Features One-->
                    <div class="col-xl-3 col-lg-6 col-md-6  wow fadeInLeft" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="features-two__single">
                            <div class="features-two__single-top">
                                <div class="icon">
                                    <span class="icon-information"><img
                                            src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_2_img_7 ?>"
                                            alt="<?php echo $home->section_2_image_alt_7 ?>" class=""></span>
                                </div>
                                <div class="count-box"></div>
                            </div>
                            <div class="features-two__single-title">
                                <h3>
                                    <?php echo $home->section_2_conteudo_8 ?>
                                </h3>
                                <p>
                                    <?php echo $home->section_2_conteudo_9 ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--End Single Features One-->

                    <!--Start Single Features One-->
                    <div class="col-xl-3 col-lg-6 col-md-6  wow fadeInLeft" data-wow-delay="200ms"
                        data-wow-duration="1500ms">
                        <div class="features-two__single">
                            <div class="features-two__single-top">
                                <div class="icon">
                                    <span class="icon-farmer"><img
                                            src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_2_img_10 ?>"
                                            alt="<?php echo $home->section_2_image_alt_10 ?>" class=""></span>
                                </div>
                                <div class="count-box"></div>
                            </div>
                            <div class="features-two__single-title">
                                <h3>
                                    <?php echo $home->section_2_conteudo_11 ?>
                                </h3>
                                <p>
                                    <?php echo $home->section_2_conteudo_12 ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6  wow fadeInRight" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="features-two__single">
                            <div class="features-two__single-top">
                                <div class="icon">
                                    <span class="icon-setting"><img
                                            src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_2_img_13 ?>"
                                            alt="<?php echo $home->section_2_image_alt_13 ?>" class=""></span>
                                </div>
                                <div class="count-box"></div>
                            </div>
                            <div class="features-two__single-title">
                                <h3>
                                    <?php echo $home->section_2_conteudo_14 ?>
                                </h3>
                                <p>
                                    <?php echo $home->section_2_conteudo_15 ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6  wow fadeInRight" data-wow-delay="200ms"
                        data-wow-duration="1500ms">
                        <div class="features-two__single">
                            <div class="features-two__single-top">
                                <div class="icon">
                                    <span class="icon-conveyor"><img
                                            src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_2_img_16 ?>"
                                            alt="<?php echo $home->section_2_image_alt_16 ?>" class=""></span>
                                </div>
                                <div class="count-box"></div>
                            </div>
                            <div class="features-two__single-title">
                                <h3>
                                    <?php echo $home->section_2_conteudo_17 ?>
                                </h3>
                                <p>
                                    <?php echo $home->section_2_conteudo_18 ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="features-two__call-box  wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="features-two__call-box-inner">
                                <div class="img-box">
                                    <div class="icon">
                                        <span class="icon-phone-call-2"></span>
                                    </div>
                                    <div class="inner">
                                        <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_2_img_19 ?>"
                                            alt="<?php echo $home->section_2_image_alt_19 ?>" class="">
                                    </div>
                                </div>
                                <div class="title">
                                    <p>
                                        <?php echo $home->section_2_conteudo_20 ?>
                                    </p>
                                    <h2>
                                        <?php echo $home->section_2_conteudo_21 ?>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-two">
            <div class="about-two__bg"><img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_3_img_22 ?>"
                    alt="<?php echo $home->section_3_image_alt_22 ?>" class=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="about-two__img-box clearfix">
                            <div class="about-two__img-box-img1">
                                <div class="about-two__img-box-img1-inner">
                                    <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_3_img_23 ?>"
                                        alt="<?php echo $home->section_3_image_alt_23 ?>" class="">
                                </div>
                            </div>
                            <div class="about-two__img-box-img2">
                                <div class="about-two__img-box-img2__shape"></div>
                                <div class="logo"><img
                                        src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_3_img_24 ?>"
                                        alt="<?php echo $home->section_3_image_alt_24 ?>" class=""></div>
                                <div class="about-two__img-box-img2-inner">
                                    <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_3_img_25 ?>"
                                        alt="<?php echo $home->section_3_image_alt_25 ?>" class="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6">
                        <div class="about-two__content-box">
                            <div class="sec-title">
                                <div class="icon">
                                    <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_3_img_26 ?>"
                                        alt="<?php echo $home->section_3_image_alt_26 ?>" class="">
                                </div>
                                <span class="sec-title__tagline">
                                    <?php echo $home->section_3_conteudo_27 ?>
                                </span>
                                <h2 class="sec-title__title">
                                    <?php echo $home->section_3_conteudo_28 ?>
                                </h2>
                            </div>
                            <p class="about-two__content-box-text">
                                <?php echo $home->section_3_conteudo_29 ?>
                            </p>
                            <div class="about-two__content-box-list">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="about-two__content-box-list-single">
                                            <ul>
                                                <li>
                                                    <div class="icon">
                                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="text">
                                                        <p>
                                                            <?php echo $home->section_3_conteudo_30 ?>
                                                        </p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="icon">
                                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="text">
                                                        <p>
                                                            <?php echo $home->section_3_conteudo_31 ?>
                                                        </p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="icon">
                                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="text">
                                                        <p>
                                                            <?php echo $home->section_3_conteudo_32 ?>
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="about-two__content-box-list-single">
                                            <ul>
                                                <li>
                                                    <div class="icon">
                                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="text">
                                                        <p>
                                                            <?php echo $home->section_3_conteudo_33 ?>
                                                        </p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="icon">
                                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="text">
                                                        <p>
                                                            <?php echo $home->section_3_conteudo_34 ?>
                                                        </p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="icon">
                                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="text">
                                                        <p>
                                                            <?php echo $home->section_3_conteudo_35 ?>
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="about-two__progress">
                                <div class="about-two__progress-single">
                                    <h4 class="about-two__progress-title">
                                        <?php echo $home->section_3_conteudo_36 ?>
                                    </h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar"
                                            data-percent="<?php echo $home->section_3_conteudo_37 ?>%">
                                            <div class="count-text">
                                                <?php echo $home->section_3_conteudo_37 ?>%
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="about-two__progress-single">
                                    <h4 class="about-two__progress-title">
                                        <?php echo $home->section_3_conteudo_38 ?>
                                    </h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar"
                                            data-percent="<?php echo $home->section_3_conteudo_39 ?>%">
                                            <div class="count-text">
                                                <?php echo $home->section_3_conteudo_39 ?>%
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="about-two__author">
                                <h2>
                                    <?php echo $home->section_3_conteudo_40 ?>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="cta-two">
            <div class="cta-two__shape"></div>
            <div class="container">
                <div class="cta-two__inner">
                    <div class="row">
                        <div class="col-lg-6 d-flex align-items-center">
                            <h2 class="cta-two__title">
                                <?php echo $home->section_4_conteudo_41 ?>
                            </h2>
                        </div>
                        <div class="col-lg-6">
                            <div class="cta-two__right">
                                <ul class="cta-two__list list-unstyled">
                                    <li>
                                        <i class="fa fa-check-circle"></i>
                                        <?php echo $home->section_4_conteudo_42 ?>
                                    </li>
                                    <li>
                                        <i class="fa fa-check-circle"></i>
                                        <?php echo $home->section_4_conteudo_43 ?>
                                    </li>
                                </ul>

                                <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_4_img_44 ?>"
                                    alt="<?php echo $home->section_4_image_alt_44 ?>" class="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="features-three">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="features-three__image clearfix">
                            <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_5_img_45 ?>"
                                alt="<?php echo $home->section_5_image_alt_45 ?>" class="">
                            <div class="features-three__image__caption">
                                <i class="icon-growth"><img
                                        src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_5_img_46 ?>"
                                        alt="<?php echo $home->section_5_image_alt_46 ?>" class=""></i>
                                <h3>
                                    <?php echo $home->section_5_conteudo_47 ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="features-three__content">
                            <div class="sec-title text-left">
                                <div class="icon">
                                    <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_5_img_48 ?>"
                                        alt="<?php echo $home->section_5_image_alt_48 ?>" class="">
                                </div>
                                <span class="sec-title__tagline">
                                    <?php echo $home->section_5_conteudo_49 ?>
                                </span>
                                <h2 class="sec-title__title">
                                    <?php echo $home->section_5_conteudo_50 ?>
                                </h2>
                            </div>
                            <ul class="list-unstyled features-three__list">
                                <li>
                                    <i class="fa fa-check"></i>
                                    <div class="features-three__list__content">
                                        <h3>
                                            <?php echo $home->section_5_conteudo_51 ?>
                                        </h3>
                                        <p>
                                            <?php echo $home->section_5_conteudo_52 ?>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-check"></i>
                                    <div class="features-three__list__content">
                                        <h3>
                                            <?php echo $home->section_5_conteudo_53 ?>
                                        </h3>
                                        <p>
                                            <?php echo $home->section_5_conteudo_54 ?>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-check"></i>
                                    <div class="features-three__list__content">
                                        <h3>
                                            <?php echo $home->section_5_conteudo_55 ?>
                                        </h3>
                                        <p>
                                            <?php echo $home->section_5_conteudo_56 ?>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="faq-one faq-one__dark">
            <!--    <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_6_img_57 ?>"
                alt="<?php echo $home->section_6_image_alt_57 ?>" class=""> -->
            <div class="faq-one__shape"></div>
            <div class="container">
                <div class="row">

                    <div class="col-xl-6 col-lg-6">
                        <div class="faq-one__content">
                            <div class="sec-title">
                                <div class="icon">
                                    <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_6_img_58 ?>"
                                        alt="<?php echo $home->section_6_image_alt_58 ?>" class="">
                                </div>
                                <span class="sec-title__tagline">
                                    <?php echo $home->section_6_conteudo_59 ?>
                                </span>
                                <h2 class="sec-title__title">
                                    <?php echo $home->section_6_conteudo_60 ?>
                                </h2>
                            </div>
                            <div class="faq-one__inner-content">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="faq-one__inner-content-left">
                                            <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_6_img_61 ?>"
                                                alt="<?php echo $home->section_6_image_alt_61 ?>" class="">
                                            <p>
                                                <?php echo $home->section_6_conteudo_62 ?>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="faq-one__inner-content-list">
                                            <ul>
                                                <li>
                                                    <div class="icon">
                                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="text">
                                                        <p>
                                                            <?php echo $home->section_6_conteudo_63 ?>
                                                        </p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="icon">
                                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="text">
                                                        <p>
                                                            <?php echo $home->section_6_conteudo_64 ?>
                                                        </p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="icon">
                                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="text">
                                                        <p>
                                                            <?php echo $home->section_6_conteudo_65 ?>
                                                        </p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="icon">
                                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="text">
                                                        <p>
                                                            <?php echo $home->section_6_conteudo_66 ?>
                                                        </p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="icon">
                                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="text">
                                                        <p>
                                                            <?php echo $home->section_6_conteudo_67 ?>
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-one__btn">
                                <a href="<?php echo $home->section_6_link_68 ?>"
                                    aria-label="<?php echo $home->section_6_link_alt_68 ?>" class="thm-btn">
                                    <?php echo $home->section_6_link_conteudo_68 ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="faq-one__accordions">
                            <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                <div class="accrodion active  wow fadeInUp" data-wow-delay="0ms"
                                    data-wow-duration="1000ms">
                                    <div class="accrodion-title">
                                        <h4>
                                            <?php echo $home->section_6_conteudo_69 ?>
                                        </h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>
                                                <?php echo $home->section_6_conteudo_70 ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accrodion wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms">
                                    <div class="accrodion-title">
                                        <h4>
                                            <?php echo $home->section_6_conteudo_71 ?>
                                        </h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>
                                                <?php echo $home->section_6_conteudo_72 ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accrodion wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                                    <div class="accrodion-title">
                                        <h4>
                                            <?php echo $home->section_6_conteudo_73 ?>
                                        </h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>
                                                <?php echo $home->section_6_conteudo_74 ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accrodion wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
                                    <div class="accrodion-title">
                                        <h4>
                                            <?php echo $home->section_6_conteudo_75 ?>
                                        </h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>
                                                <?php echo $home->section_6_conteudo_76 ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="projects-one projects-one--two">
            <div class="container">
                <div class="sec-title text-center">
                    <div class="icon">
                        <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_7_img_77 ?>"
                            alt="<?php echo $home->section_7_image_alt_77 ?>" class="">
                    </div>
                    <span class="sec-title__tagline">
                        <?php echo $home->section_7_conteudo_78 ?>
                    </span>
                    <h2 class="sec-title__title">
                        <?php echo $home->section_7_conteudo_79 ?>
                    </h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="projects-two__carousel owl-carousel owl-theme owl-dot-type1">
                            <?php foreach ($desc_livro as $desc_livros) { ?>
                                <!--Start Single Projects One-->
                                <div class="projects-one__single wow fadeInUp" data-wow-delay="0ms"
                                    data-wow-duration="1500ms">
                                    <div class="projects-one__single-img">
                                        <img src="<?php echo SITE_URL; ?>/img/<?php echo $desc_livros->section_1_img_1 ?>"
                                            alt="<?php echo $desc_livros->section_1_image_alt_1 ?>" class="">
                                        <div class="overlay-content">
                                            <h3><a
                                                    href="<?php echo SITE_URL; ?>/livro/<?php echo $desc_livros->pagina_individual ?>">
                                                    <?php echo $desc_livros->section_1_conteudo_2 ?>
                                                </a></h3>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Projects One-->
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Projects One End-->


        <!--Story One Start-->
        <section class="story-one">
            <div class="story-one__shape"></div><!-- /.story-one__shape -->
            <div class="auto-container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="story-one__img"
                            style="background-image: url(<?php echo SITE_URL . '/img/' . $home->section_8_img_80 ?>);">
                            <div class="story-one__img__line float-bob-y"></div>
                            <h3>
                                <?php echo $home->section_8_conteudo_81 ?>
                            </h3>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="story-one__counters">
                            <div class="story-one__bg">
                                <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_8_img_82 ?>"
                                    alt="<?php echo $home->section_8_image_alt_82 ?>" class="">
                            </div>
                            <div class="sec-title">
                                <div class="icon">
                                    <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_8_img_83 ?>"
                                        alt="<?php echo $home->section_8_image_alt_83 ?>" class="">
                                </div>
                                <span class="sec-title__tagline">
                                    <?php echo $home->section_8_conteudo_84 ?>
                                </span>
                                <h2 class="sec-title__title">
                                    <?php echo $home->section_8_conteudo_85 ?>
                                </h2>
                            </div>
                            <p class="story-one__counters-text">
                                <?php echo $home->section_8_conteudo_86 ?>
                            </p>

                            <div class="story-one__counters-box">
                                <ul>
                                    <li class="story-one__counters-box-single text-center wow slideInUp animated"
                                        data-wow-delay="0.1s" data-wow-duration="1500ms">
                                        <h3 class="odometer" data-count="<?php echo $home->section_8_conteudo_87 ?>">00
                                        </h3>
                                        <p class="story-one__counters-box-single-text">
                                            <?php echo $home->section_8_conteudo_88 ?>
                                        </p>
                                    </li>
                                    <li class="story-one__counters-box-single text-center wow slideInUp animated"
                                        data-wow-delay="0.3s" data-wow-duration="1500ms">
                                        <h3 class="odometer" data-count="<?php echo $home->section_8_conteudo_89 ?>">00
                                        </h3>
                                        <p class="story-one__counters-box-single-text">
                                            <?php echo $home->section_8_conteudo_90 ?>
                                        </p>
                                    </li>
                                    <li class="story-one__counters-box-single text-center wow slideInUp animated"
                                        data-wow-delay="0.5s" data-wow-duration="1500ms">
                                        <h3 class="odometer" data-count="<?php echo $home->section_8_conteudo_91 ?>">00
                                        </h3>
                                        <p class="story-one__counters-box-single-text">
                                            <?php echo $home->section_8_conteudo_92 ?>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="meet-farmers-one">
            <div class="container">
                <div class="sec-title text-center">
                    <div class="icon">
                        <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_9_img_93 ?>"
                            alt="<?php echo $home->section_9_image_alt_93 ?>" class="">
                    </div>
                    <span class="sec-title__tagline">
                        <?php echo $home->section_9_conteudo_94 ?>
                    </span>
                    <h2 class="sec-title__title">
                        <?php echo $home->section_9_conteudo_95 ?>
                    </h2>
                </div>
                <div class="row">
                    <?php foreach ($desc_colunista as $desc_colunistas) { ?>
                        <div class="col-xl-3 col-lg-6  wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                            <div class="meet-farmers-one__single">
                                <div class="meet-farmers-one__single-img">
                                    <img src="
                  <?php echo SITE_URL; ?>/img/<?php echo $desc_colunistas->section_1_img_1 ?>"
                                        alt="<?php echo $desc_colunistas->section_1_image_alt_1 ?>" class="">
                                </div>
                                <div class="meet-farmers-one__single-title text-center">
                                    <p>
                                        <?php echo $desc_colunistas->section_1_conteudo_2 ?>
                                    </p>
                                    <h2><a
                                            href="<?php echo SITE_URL; ?>/colunista/<?php echo $desc_colunistas->pagina_individual ?>">
                                            <?php echo $desc_colunistas->section_1_conteudo_3 ?>
                                        </a></h2>
                                    <div class="social-link">
                                        <ul>
                                            <li><a href="<?php echo $desc_colunistas->section_1_link_4 ?>"
                                                    aria-label="<?php echo $desc_colunistas->section_1_link_alt_4 ?>><i class="
                                                    fab fa-twitter"></i></a></li>
                                            <li><a href="<?php echo $desc_colunistas->section_1_link_5 ?>"
                                                    aria-label="<?php echo $desc_colunistas->section_1_link_alt_5 ?>"><i
                                                        class="fab fa-facebook"></i></a></li>
                                            <li><a href="<?php echo $desc_colunistas->section_1_link_6 ?>"
                                                    aria-label="<?php echo $desc_colunistas->section_1_link_alt_6 ?>"><i
                                                        class="fab fa-pinterest-p"></i></a></li>
                                            <li><a href="<?php echo $desc_colunistas->section_1_link_7 ?>"
                                                    aria-label="<?php echo $desc_colunistas->section_1_link_alt_7 ?>"><i
                                                        class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </section>
        <!--Meet Farmers One End-->



        <!--Video One Start-->
        <section class="video-one video-one--two jarallax clearfix" data-jarallax data-speed="0.2"
            data-imgPosition="50% 0%"
            style="background-image: url(<?php echo SITE_URL . '/img/' . $home->section_10_img_96 ?>);">
            <div class="video-one-border"></div>
            <div class="video-one-border video-one-border-two"></div>
            <div class="video-one-border video-one-border-three"></div>
            <div class="video-one-border video-one-border-four"></div>
            <div class="video-one-border video-one-border-five"></div>
            <div class="video-one-border video-one-border-six"></div>

            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="video-one__wrpper">
                            <div class="video-one__left">
                                <div class="video-one__leaf"></div><!-- /.video-one__leaf -->
                                <h2 class="video-one__title">
                                    <?php echo $home->section_10_conteudo_97 ?>
                                </h2>
                                <div class="video-one__btn">
                                    <a href="<?php echo $home->section_10_link_98 ?>"
                                        aria-label="<?php echo $home->section_10_link_alt_98 ?>" class="thm-btn">
                                        <?php echo $home->section_10_link_conteudo_98 ?>
                                    </a>
                                </div>
                            </div>
                            <div class="video-one__right">
                                <div class="icon wow zoomIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <a href="<?php echo $home->section_10_link_99 ?>"
                                        aria-label="<?php echo $home->section_10_link_alt_99 ?>" class="video-popup">
                                        <span class="icon-play-button-1"></span> </a>
                                    <span class="border-animation border-1"></span>
                                    <span class="border-animation border-2"></span>
                                    <span class="border-animation border-3"></span>
                                </div>
                                <div class="title">
                                    <h2>
                                        <?php echo $home->section_10_conteudo_101 ?>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="blog-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="blog-two__left">
                            <div class="blog-two__left-bg"></div>
                            <div class="sec-title">
                                <div class="icon">
                                    <img src="<?php echo SITE_URL; ?>/img/<?php echo $home->section_11_img_102 ?>"
                                        alt="<?php echo $home->section_11_image_alt_102 ?>" class="">
                                </div>
                                <span class="sec-title__tagline">
                                    <?php echo $home->section_11_conteudo_103 ?>
                                </span>
                                <h2 class="sec-title__title">
                                    <?php echo $home->section_11_conteudo_104 ?>
                                </h2>
                            </div>
                            <p class="blog-two__left-text">
                                <?php echo $home->section_11_conteudo_105 ?>
                            </p>
                            <div class="blog-two__carousel__custom-nav">
                                <a href="#" class="left-btn"><span class="icon-right-arrow-2"></span></a>
                                <a href="#" class="right-btn"><span class="icon-right-arrow-2"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="blog-two__right">
                            <div class="blog-two__carousel owl-carousel owl-theme">

                                <?php foreach ($puxaBlogs as $blogSingle) { ?>


                                    <div class="blog-one__single">
                                        <div class="blog-one__single-img">
                                            <img src="<?php echo SITE_URL; ?>/img/<?php echo $blogSingle->foto ?>" alt="" />
                                            <div class="date-box">
                                                <span>
                                                    <?php echo $blogSingle->data_postagem ?>
                                                </span>
                                            </div>
                                            <div class="overlay-icon">
                                                <a
                                                    href="<?php echo SITE_URL; ?>/blog/<?php echo $blogSingle->url_amigavel ?>"><span
                                                        class="icon-plus"></span></a>
                                            </div>
                                        </div>

                                        <div class="blog-one__single-content">
                                            <ul class="meta-info">
                                                <li><a href="#"><i class="far fa-user-circle"></i>
                                                        <?php echo $blogSingle->postado_por ?>
                                                    </a></li>
                                            </ul>
                                            <h2><a
                                                    href="<?php echo SITE_URL; ?>/blog/<?php echo $blogSingle->url_amigavel ?>">
                                                    <?php echo $blogSingle->titulo ?>
                                                </a></h2>
                                        </div>
                                    </div>

                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include "footer.php" ?>

    <?php include "scripts.php" ?>
</body>

</html>