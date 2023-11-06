<?php
include "flutuante/flutuante.php";
require_once "Class/servicos.class.php";
$Servi = Servicos::getInstance(Conexao::getInstance());
$servicoss = $Servi->rsDados();

require_once "Class/servico_principal.class.php";
$servico_principal_homee = Servico_principal::getInstance(Conexao::getInstance());
$servico_principal_home = $servico_principal_homee->rsDados();
?>
<div class="back-to-top-wrapper">
    <button id="back_to_top" type="button" class="back-to-top-btn">
        <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" />
        </svg>
    </button>
</div>
<div class="search__popup">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="search__wrapper">
                    <div class="search__top d-flex justify-content-between align-items-center">
                        <div class="search__logo">
                            <a href="<?php echo SITE_URL; ?>"><img loading="lazy"
                                    src="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->logo_principal; ?>"
                                    alt="Logo Principal"></a>
                        </div>
                        <div class="search__close">
                            <button type="button" class="search__close-btn search-close-btn">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="search__form">
                        <form action="#">
                            <div class="search__input">
                                <input class="search-input-field" type="text" placeholder="Type here to search...">
                                <span class="search-focus-border"></span>
                                <button type="submit">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="tpoffcanvas-area">
    <div class="tpoffcanvas">
        <div class="tpoffcanvas__close-btn">
            <button class="close-btn"><i class="fal fa-times"></i></button>
        </div>
        <div class="tpoffcanvas__logo">
            <a href="<?php echo SITE_URL; ?>"><img width="176" height="69" loading="lazy"
                    src="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->logo_principal; ?>"
                    alt="Logo Principal"></a>
        </div>
        <div class="tpoffcanvas__title">
            <p>
                <?php echo $infoSistema->sobre_breve; ?>
            </p>
        </div>
        <div class="tp-main-menu-mobile d-xl-none"></div>
        <div class="tpoffcanvas__contact-info">
            <div class="tpoffcanvas__contact-title">
                <h5>Contact us</h5>
            </div>
            <ul>
                <li>
                    <i class="fa-light fa-location-dot"></i>
                    <a href="https://www.google.com/maps/@23.8223586,90.3661283,15z" target="_blank">
                        <?php echo $infoSistema->endereco; ?>
                    </a>
                </li>
                <li>
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:<?php echo $infoSistema->email1 ?>"
                        aria-label="Link de encaminhamento para o E-mail da <?php echo $infoSistema->nome_empresa ?>">
                        <?php echo $infoSistema->email1 ?>
                    </a>
                </li>
                <li>
                    <i class="fal fa-phone-alt"></i>
                    <a href="tel:<?php echo $infoSistema->telefone1; ?>">
                        <?php echo $infoSistema->telefone1; ?>
                    </a>
                </li>
            </ul>
        </div>
        <div class="tpoffcanvas__input">
            <div class="tpoffcanvas__input-title">
                <h4>Get UPdate</h4>
            </div>
            <form action="#">
                <div class="p-relative">
                    <input type="text" placeholder="Enter mail">
                    <button>
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </div>
            </form>
        </div>
        <div class="tpoffcanvas__social">
            <div class="social-icon">
                <?php if ($infoSistema->facebook <> '') { ?>
                    <a href="<?php echo $infoSistema->facebook ?>"
                        aria-label="Link de encaminhamento para o Facebook da <?php echo $infoSistema->nome_empresa ?>"
                        target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                <?php } ?>
                <?php if ($infoSistema->instagram <> '') { ?>
                    <a href="<?php echo $infoSistema->instagram ?>" target="_blank"
                        aria-label="Link de encaminhamento para o Instagram da <?php echo $infoSistema->nome_empresa ?>"><i
                            class="fa-brands fa-instagram"></i></a>
                <?php } ?>
                <?php if ($infoSistema->instagram <> '') { ?>
                    <a href="<?php echo $infoSistema->linkedin ?>"><i class="fa-brands fa-linkedin-in"
                            aria-label="Link de encaminhamento para o Linkedin da <?php echo $infoSistema->nome_empresa ?>"
                            target="_blank"></i></a>
                <?php } ?>
                <?php if ($infoSistema->twitter <> '') { ?>
                    <a href="<?php echo $infoSistema->twitter ?>" target="_blank"
                        aria-label="Link de encaminhamento para o Twitter da <?php echo $infoSistema->nome_empresa ?>"><i
                            class="fa-brands fa-twitter"></i></a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<div class="body-overlay"></div>

<header>
    <div class="tp-header-transparent">
        <div class="tp-header-top-area tp-header-top-wrap tp-header-top-space p-relative black-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-8 col-md-8 col-sm-6">
                        <div class="tp-header-top-left-box text-center text-md-start">
                            <ul>
                                <li>
                                    <i class="flaticon-pin"></i>
                                    <a href="javascript:void(0)">
                                        <?php echo $infoSistema->endereco; ?>
                                    </a>
                                </li>
                                <li class="d-none d-md-inline-block">
                                    <i class="flaticon-mail-1"></i>
                                    <a href="mailto:<?php echo $infoSistema->email1 ?>"
                                        aria-label="Link de encaminhamento para o E-mail da <?php echo $infoSistema->nome_empresa ?>">
                                        <?php echo $infoSistema->email1 ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4 col-md-4 col-sm-6 d-none d-sm-block">
                        <div class="tp-header-top-right-box text-end">
                            <ul>
                                <li>
                                    <div class="tp-header-top-right-social">
                                        <?php if ($infoSistema->facebook <> '') { ?>
                                            <a href="<?php echo $infoSistema->facebook ?>"
                                                aria-label="Link de encaminhamento para o Facebook da <?php echo $infoSistema->nome_empresa ?>"
                                                target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                                        <?php } ?>
                                        <?php if ($infoSistema->instagram <> '') { ?>
                                            <a href="<?php echo $infoSistema->instagram ?>" target="_blank"
                                                aria-label="Link de encaminhamento para o Instagram da <?php echo $infoSistema->nome_empresa ?>"><i
                                                    class="fa-brands fa-instagram"></i></a>
                                        <?php } ?>
                                        <?php if ($infoSistema->instagram <> '') { ?>
                                            <a href="<?php echo $infoSistema->linkedin ?>"><i
                                                    class="fa-brands fa-linkedin-in"
                                                    aria-label="Link de encaminhamento para o Linkedin da <?php echo $infoSistema->nome_empresa ?>"
                                                    target="_blank"></i></a>
                                        <?php } ?>
                                        <?php if ($infoSistema->twitter <> '') { ?>
                                            <a href="<?php echo $infoSistema->twitter ?>" target="_blank"
                                                aria-label="Link de encaminhamento para o Twitter da <?php echo $infoSistema->nome_empresa ?>"><i
                                                    class="fa-brands fa-twitter"></i></a>
                                        <?php } ?>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .has-dropdown:hover .submenu {
                display: block;
            }
            .has-dropdown .submenu .has-dropdown:hover .sub-submenu {
                display: block;
            }
            .has-dropdown .submenu,
            .has-dropdown .submenu .has-dropdown .sub-submenu {
                display: none;
            }
            .menu {
                list-style: none;
                padding: 0;
            }

            .menu li {
                position: relative;
            }

            .menu li a {
                display: block;
                padding: 10px;
                text-decoration: none;
                color: #333;
            }
            .submenu,
            .sub-submenu {
                position: absolute;
                top: 0;
                left: 145px;
                width: 100%;
                background-color: var(--tp-common-black);
                border-top: 5px solid var(--tp-theme-1);
                box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
                z-index: 9999;
            }
            .submenu li,
            .sub-submenu li {
                padding: 10px;
            }
        </style>
        <div id="header-sticky" class="tp-header-area tp-header-style-2 tp-header-style-3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-4 col-md-4 col-6">
                        <div class="tp-header-logo">
                            <a href="<?php echo SITE_URL; ?>"><img loading="lazy"
                                    src="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->logo_principal; ?>"
                                    alt="Logo Principal"></a>
                        </div>
                    </div>
                    <div class="col-xl-8 d-none d-xl-block">
                        <div class="tp-header-main-menu tp-header-menu-border-2 text-end text-xxl-start">
                            <nav class="tp-main-menu-content">
                                <ul>
                                    <li class="has-dropdown">
                                        <a href="<?php echo SITE_URL; ?>">Home</a>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="<?php echo SITE_URL; ?>/sobre">Sobre</a>

                                    </li>

                                    <li class="has-dropdown">
                                        <a href="<?php echo SITE_URL; ?>/servicos">Serviços</a>
                                        <ul class="submenu tp-submenu">
                                            <?php foreach ($servico_principal_home as $servicos) { ?>
                                                <li class="has-dropdown">
                                                    <a
                                                        href="<?php echo SITE_URL; ?>/produtos-descritivo/<?php echo $servicos->pagina_individual ?>">
                                                        <?php echo $servicos->section_1_conteudo_2 ?>
                                                    </a>
                                                    <ul class="sub-submenu">
                                                        <?php foreach ($servicoss as $ser_principal) { ?>
                                                            <?php if ($ser_principal->section_1_image_alt_1 == $servicos->section_1_conteudo_2) { ?>
                                                                <li><a
                                                                        href="<?php echo SITE_URL; ?>/servico/<?php echo $ser_principal->pagina_individual ?>">
                                                                        <?php echo $ser_principal->section_1_conteudo_2 ?>
                                                                    </a></li>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    </ul>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="<?php echo SITE_URL; ?>/produtos">produtos</a>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="<?php echo SITE_URL; ?>/blog">Blog</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo SITE_URL; ?>/contato">contato</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-8 col-md-8 col-6">
                        <div class="tp-header-right-box">
                            <div class="tp-header-right-action d-flex align-items-center justify-content-end">
                                <div class="tp-header-right-icon-action d-none d-lg-block">
                                    <div class="tp-header-right-icon d-flex align-items-center">
                                    </div>
                                </div>
                                <div class="tp-header-bar d-xl-none">
                                    <button class="tp-menu-bar"><i
                                            class="fa-sharp fa-regular fa-bars-staggered"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header area end -->
    </div>
</header>