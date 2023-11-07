<?php
include "flutuante/flutuante.php";
?>
<header class="main-header main-header--one main-header--one--two  clearfix">
  <div class="main-header--one__wrapper">
    <div class="main-header--one__bottom clearfix">
      <div class="auto-container">
        <div class="main-header--one__bottom-inner">
          <div class="main-header--one__bottom-middel">
            <div class="logo">
              <a href="<?php echo SITE_URL; ?>"><img loading="lazy" class="light-logo"
                  src="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->logo_principal; ?>"
                  alt="Logo Principal"></a>
            </div>
          </div>
          <nav class="main-menu main-menu--1">
            <div class="main-menu__inner">
              <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>

              <div class="stricky-one-logo">
                <div class="logo">
                  <div class="logo">
                    <a href="<?php echo SITE_URL; ?>">
                      <img src="<?php echo SITE_URL; ?>/assets/images/resources/logo-1.png" class="dark-logo" alt="">
                      <img src="<?php echo SITE_URL; ?>/assets/images/resources/logo-2.png" class="light-logo" alt="">
                    </a>
                  </div>
                </div>
              </div>
              <div class="main-header--one__bottom-left">
                <ul class="main-menu__list">
                  <li class="dropdown megamenu">
                    <a href="<?php echo SITE_URL; ?>">Home</a>
                  </li>
                  <li><a href="<?php echo SITE_URL; ?>/sobre">Sobre</a></li>
                  <li class="dropdown">
                    <a href="<?php echo SITE_URL; ?>/livros">Livros</a>
                  </li>
                  <li class="dropdown">
                    <a href="<?php echo SITE_URL; ?>/colunistas">colunistas</a>
                  </li>
                  <li class="dropdown">
                    <a href="<?php echo SITE_URL; ?>/blog">Blog</a>
                  </li>
                  <li><a href="<?php echo SITE_URL; ?>/contato">Contato</a></li>
                </ul>
              </div>
            </div>
          </nav>

          <div class="main-header--one__bottom-right clearfix">
            <div class="search-cart">
              <a href="#" class="search search-toggler"><span class="icon-magnifying-glass"></span></a>
              <a href="#" class="cart mini-cart__toggler"><span class="icon-shopping-cart"></span></a>
            </div>
            <div class="contact-box">
              <div class="icon">
                <span class="icon-phone-call-2"></span>
              </div>
              <div class="text">
                <p>Entre em contatoZ</p>
                <a href="tel:<?php echo $infoSistema->telefone1; ?>">
                  <?php echo $infoSistema->telefone1; ?>
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</header>
<div class="stricky-header stricked-menu main-menu">
  <div class="sticky-header__content">
  </div>
</div>