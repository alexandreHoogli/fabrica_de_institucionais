<footer class="site-footer">
  <div class="site-footer__middle">
    <div class="site-footer-shape" style="background-image: url(assets/images/shapes/site-footer-shape.png)"></div>
    <div class="container">
      <div class="site-footer__middle-inner">
        <div class="row">
          <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
            <div class="footer-widget__column footer-widget__about">
              <h3 class="footer-widget__title">Sobre</h3>
              <div class="footer-widget__about-text-box">
                <p class="footer-widget__about-text">É simples: você precisa de soluções assertivas e com resultados
                  claros.<br><strong>E a Hoogli entrega.</strong></p>
              </div>

            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
            <div class="footer-widget__column footer-widget__links clearfix">
              <h3 class="footer-widget__title">Site Map</h3>
              <ul class="footer-widget__links-list list-unstyled clearfix">
                <li class="dropdown current megamenu">
                  <a href="<?php echo SITE_URL ?>">Home</a>
                </li>
                <li class="dropdown">
                  <a href="<?php echo SITE_URL; ?>/sobre">Sobre</a>
                </li>
                <li class="dropdown">
                  <a href="<?php echo SITE_URL; ?>/projetos">Cases de sucesso</a>
                </li>
                <li class="dropdown">
                  <a href="<?php echo SITE_URL; ?>/blog">Blog</a>
                </li>
                <li><a href="<?php echo SITE_URL; ?>/contato">Contato</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
            <div class="footer-widget__column footer-widget__explore clearfix">
              <h3 class="footer-widget__title">Localização</h3>
              <ul class="footer-widget__about-contact list-unstyled">
                <li>
                  <div class="icon">
                    <i class="fas fa-phone-square-alt"></i>
                  </div>
                  <div class="text">
                    <a href="tel:<?php echo $infoSistema->telefone1; ?>"
                      aria-label="Link de encaminhamento para o Telefone da <?php echo $infiSistema->nome_empresa ?>">
                      <?php echo $infoSistema->telefone1; ?>
                    </a>
                  </div>
                </li>
                <li>
                  <div class="icon">
                    <i class="fas fa-envelope"></i>
                  </div>
                  <div class="text">
                    <a href="mailto:<?php echo $infoSistema->email1; ?>">Contato via e-mail</a>
                  </div>
                </li>
                <li>
                  <div class="icon">
                    <i class="fas fa-map-marker-alt"></i>
                  </div>
                  <div class="text">
                    <p>
                      <?php echo $infoSistema->endereco; ?>
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-xl-3 col-lg-6 col-md-6 " data-wow-delay="400ms">
            <div class="footer-widget__column footer-widget__services clearfix">
              <h3 class="footer-widget__title">Redes Sociais</h3>
              <div class="site-footer__top-right-social">
                <?php if (isset($infoSistema->instagram) && !empty($infoSistema->instagram)) { ?>
                  <a href="<?php echo $infoSistema->instagram; ?>"
                    aria-label="Link de encaminhamento para o Instagram da <?php echo $infiSistema->nome_empresa ?>"
                    target="_blank" class="ico-instagram"><i class="fab fa-instagram"></i></a>
                <?php } ?>
                <?php if (isset($infoSistema->youtube) && !empty($infoSistema->youtube)) { ?>
                  <a href="<?php echo $infoSistema->youtube; ?>"
                    aria-label="Link de encaminhamento para o Youtube da <?php echo $infiSistema->nome_empresa ?>"
                    target="_blank" class="ico-youtube"><i class="fab fa-youtube"></i></a>
                <?php } ?>
                <?php if (isset($infoSistema->twitter) && !empty($infoSistema->twitter)) { ?>
                  <a href="<?php echo $infoSistema->twitter; ?>"
                    aria-label="Link de encaminhamento para o Twitter da <?php echo $infiSistema->nome_empresa ?>"
                    target="_blank" class="ico-twitter"><i class="fab fa-twitter"></i></a>
                <?php } ?>
                <?php if (isset($infoSistema->facebook) && !empty($infoSistema->facebook)) { ?>
                  <a href="<?php echo $infoSistema->facebook; ?>"
                    aria-label="Link de encaminhamento para o Facebook da <?php echo $infiSistema->nome_empresa ?>"
                    target="_blank" class="ico-facebook"><i class="fab fa-facebook-square"></i></a>
                <?php } ?>
                <?php if (isset($infoSistema->linkedln) && !empty($infoSistema->linkedln)) { ?>
                  <a href="<?php echo $infoSistema->linkedln; ?>"
                    aria-label="Link de encaminhamento para o Linkedin da <?php echo $infiSistema->nome_empresa ?>"
                    target="_blank" class="ico-linkedin"><i class="fab fa-linkedin"></i></a>
                <?php } ?>
                <?php if (isset($infoSistema->pinterest) && !empty($infoSistema->pinterest)) { ?>
                  <a href="<?php echo $infoSistema->pinterest; ?>"
                    aria-label="Link de encaminhamento para o Pinterest da <?php echo $infiSistema->nome_empresa ?>"
                    target="_blank" class="ico-pinterest"><i class="fab fa-pinterest-p"></i></a>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-copyright wow fadeInDown bg-color-three copyright-two">
        <?php include "copy.php" ?>
      </div>
    </div>
  </div>

</footer>

<div class="mobile-nav__wrapper">
  <div class="mobile-nav__overlay mobile-nav__toggler"></div>
  <div class="mobile-nav__content">
    <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

    <div class="logo-box">
      <a href="<?php echo SITE_URL; ?>"><img width="176" height="69" loading="lazy"
          src="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->logo_principal; ?>" alt="Logo Principal"></a>
    </div>
    <div class="mobile-nav__container"></div>

    <ul class="mobile-nav__contact list-unstyled">
      <li>
        <i class="fa fa-envelope"></i>
        <a href="mailto:<?php echo $infoSistema->email1; ?>">Contato via e-mail</a>
      </li>
      <li>
        <i class="fa fa-phone-alt"></i>
        <a href="tel:<?php echo $infoSistema->telefone1; ?>"
          aria-label="Link de encaminhamento para o Telefone da <?php echo $infiSistema->nome_empresa ?>">
          <?php echo $infoSistema->telefone1; ?>
        </a>
      </li>
    </ul>
    <div class="mobile-nav__top">
      <div class="mobile-nav__social">
        <?php if (isset($infoSistema->instagram) && !empty($infoSistema->instagram)) { ?>
          <a href="<?php echo $infoSistema->instagram; ?>"
            aria-label="Link de encaminhamento para o Instagram da <?php echo $infiSistema->nome_empresa ?>"
            target="_blank" class="ico-instagram"><i class="fab fa-instagram"></i></a>
        <?php } ?>
        <?php if (isset($infoSistema->youtube) && !empty($infoSistema->youtube)) { ?>
          <a href="<?php echo $infoSistema->youtube; ?>"
            aria-label="Link de encaminhamento para o Youtube da <?php echo $infiSistema->nome_empresa ?>" target="_blank"
            class="ico-youtube"><i class="bx bxl-youtube"></i></a>
        <?php } ?>
        <?php if (isset($infoSistema->twitter) && !empty($infoSistema->twitter)) { ?>
          <a href="<?php echo $infoSistema->twitter; ?>"
            aria-label="Link de encaminhamento para o Twitter da <?php echo $infiSistema->nome_empresa ?>" target="_blank"
            class="ico-twitter"><i class="fab fa-twitter"></i></a>
        <?php } ?>
        <?php if (isset($infoSistema->facebook) && !empty($infoSistema->facebook)) { ?>
          <a href="<?php echo $infoSistema->facebook; ?>"
            aria-label="Link de encaminhamento para o Facebook da <?php echo $infiSistema->nome_empresa ?>"
            target="_blank" class="ico-facebook"><i class="fab fa-facebook-square"></i></a>
        <?php } ?>
        <?php if (isset($infoSistema->linkedln) && !empty($infoSistema->linkedln)) { ?>
          <a href="<?php echo $infoSistema->linkedln; ?>"
            aria-label="Link de encaminhamento para o Linkedin da <?php echo $infiSistema->nome_empresa ?>"
            target="_blank" class="ico-linkedin"><i class="bx bxl-linkedin"></i></a>
        <?php } ?>
        <?php if (isset($infoSistema->pinterest) && !empty($infoSistema->pinterest)) { ?>
          <a href="<?php echo $infoSistema->pinterest; ?>"
            aria-label="Link de encaminhamento para o Pinterest da <?php echo $infiSistema->nome_empresa ?>"
            target="_blank" class="ico-pinterest"><i class="fab fa-pinterest-p"></i></a>
        <?php } ?>
      </div>
    </div>
  </div>
</div>