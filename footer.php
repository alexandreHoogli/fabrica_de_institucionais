<footer>
    <div class="tp-footer-area pt-120 p-relative z-index-3 black-bg">
        <div class="tp-footer-shape-1 d-none d-lg-block">
            <img src="<?php echo SITE_URL; ?>/assets/img/footer/shape-1-1.png" alt="">
        </div>
        <div class="tp-footer-shape-2 d-none d-lg-block">
            <img src="<?php echo SITE_URL; ?>/assets/img/footer/shape-1-2.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-50 wow tpfadeUp" data-wow-duration=".9s"
                    data-wow-delay=".3s">
                    <div class="tp-footer-widget footer-cols-1">
                        <div class="tp-footer-logo">
                            <a href="<?php echo SITE_URL; ?>"><img loading="lazy"
                                    src="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->logo_principal; ?>"
                                    alt="Logo Principal"></a>
                        </div>
                        <div class="tp-footer-text">
                            <?php echo $infoSistema->sobre_breve ?>
                        </div>
                        <div class="tp-footer-contact">
                            <a href="mailto:<?php echo $infoSistema->email1 ?>"
                                aria-label="Link de encaminhamento para o E-mail da <?php echo $infoSistema->nome_empresa ?>"><i
                                    class="flaticon-mail-1"></i>
                                <?php echo $infoSistema->email1 ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 mb-50 wow tpfadeUp" data-wow-duration=".9s"
                    data-wow-delay=".5s">
                    <div class="tp-footer-widget footer-cols-2">
                        <h4 class="tp-footer-title">Site Map</h4>
                        <div class="tp-footer-list">
                            <ul>
                                <li><a href="<?php echo SITE_URL; ?>"><i class="fa-sharp fa-solid fa-plus"></i>Home</a>
                                </li>
                                <li><a href="<?php echo SITE_URL; ?>/sobre"><i
                                            class="fa-sharp fa-solid fa-plus"></i>sobre</a></li>
                                <li><a href="<?php echo SITE_URL; ?>/servicos"><i
                                            class="fa-sharp fa-solid fa-plus"></i>Serviços</a></li>
                                <li><a href="<?php echo SITE_URL; ?>/produtos"><i
                                            class="fa-sharp fa-solid fa-plus"></i>produtos</a></li>
                                <li><a href="<?php echo SITE_URL; ?>/blog"><i
                                            class="fa-sharp fa-solid fa-plus"></i>Blog</a></li>
                                <li><a href="<?php echo SITE_URL; ?>/contato"><i
                                            class="fa-sharp fa-solid fa-plus"></i>contato</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-50 wow tpfadeUp" data-wow-duration=".9s"
                    data-wow-delay=".7s">
                    <div class="tp-footer-widget footer-cols-3">
                        <h4 class="tp-footer-title">Contato</h4>
                        <div class="tp-footer-list">
                            <ul>
                                <?php if ($infoSistema->hora_atendimento <> "") { ?>
                                    <li><a href="javascript:void(0)"><i class="fa-sharp fa-solid fa-plus"></i>
                                            <?php echo $infoSistema->hora_atendimento; ?>
                                        </a></li>
                                <?php } ?>
                                <?php if ($infoSistema->endereco <> "") { ?>
                                    <li><a href="javascript:void(0)"><i class="fa-sharp fa-solid fa-plus"></i>
                                            <?php echo $infoSistema->endereco; ?>
                                        </a></li>
                                <?php } ?>
                                <?php if ($infoSistema->telefone1 <> "") { ?>
                                    <li><a href="tel:<?php echo $infoSistema->telefone1; ?>"
                                            aria-label="Link de encaminhamento para o Telefone da <?php echo $infiSistema->nome_empresa ?>"><i
                                                class="fa-sharp fa-solid fa-plus"></i>
                                            <?php echo $infoSistema->telefone1; ?>
                                        </a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-50 wow tpfadeUp" data-wow-duration=".9s"
                    data-wow-delay=".9s">
                    <div class="tp-footer-widget footer-cols-4">
                        <h4 class="tp-footer-title">Redes Sociais</h4>
                        <div class="tp-footer-thumb-wrap">
                            <div class="tp-copyright-social text-start">
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
            </div>
        </div>

        <div class="tp-copyright-area tp-copyright-space black-bg-2">
            <?php include "copy.php" ?>
        </div>
</footer>