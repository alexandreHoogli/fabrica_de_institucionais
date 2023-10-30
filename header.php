<?php
include "flutuante/flutuante.php";
require_once "Class/unidades.class.php";
$Unitss = Unidades::getInstance(Conexao::getInstance());
$units = $Unitss->rsDados();
require_once "Class/servicos.class.php";
$Servi = Servicos::getInstance(Conexao::getInstance());
$Servis = $Servi->rsDados();
?>
<header class="main-header main-header-two clearfix">
    <nav class="main-menu main-menu-two clearfix">
        <div class="main-menu-wrapper clearfix">
            <div class="main-menu-wrapper__left">
                <div class="main-menu-wrapper__logo">
                        <a href="<?php echo SITE_URL;?>"><img width="150" height="40" loading="lazy"  src="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->logo_principal;?>" alt="Logo Principal"></a>
                </div>
                <div class="main-menu-wrapper__main-menu">
                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                    <ul class="main-menu__list">
                        <li class="dropdown current megamenu">
                            <a href="<?php echo SITE_URL ?>">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="<?php echo SITE_URL;?>/sobre">Sobre</a>
                        </li>
                        <li class="dropdown">
                            <a href="<?php echo SITE_URL;?>/projetos">Cases de sucesso</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" onclick="event.preventDefault();">Serviços</a>
                            <ul>
                                <?php foreach($Servis as $sevico){ ?>
                                <li><a href="<?php echo SITE_URL;?>/servicos/<?php echo $sevico->pagina_individual?>"><?php echo $sevico->section_1_conteudo_3?></a></li>
                                <?php }?>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" onclick="event.preventDefault();">Unidades</a>
                            <ul>
                                <?php foreach($units as $unit){ ?>
                                <li><a href="<?php echo SITE_URL;?>/unidades/<?php echo $unit->pagina_individual?>"><?php echo $unit->section_1_conteudo_3?></a></li>
                                <?php }?>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="<?php echo SITE_URL;?>/blog">Blog</a>
                        </li>
                        <li><a href="<?php echo SITE_URL;?>/contato">Contato</a></li>
                    </ul>
                </div>
            </div>
            <div class="main-menu-wrapper__right">

                <div class="main-menu-wrapper__call">
                    <div class="main-menu-wrapper__call-icon">
                        <span class="icon-chatting"></span>
                    </div>
                    <div class="main-menu-wrapper__call-number">
                        <p>Entre em contato</p>
                        <h5><a href="tel:<?php echo $infoSistema->telefone1; ?>"
                      aria-label="Link de encaminhamento para o Telefone da <?php echo $infiSistema->nome_empresa ?>">
                      <?php echo $infoSistema->telefone1; ?>
                    </a></h5>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>