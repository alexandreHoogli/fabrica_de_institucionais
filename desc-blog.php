<?php
include "includes.php";
include "Class/blogs.class.php";
$Blogs = Blogs::getInstance(Conexao::getInstance());
$id = '';
if (isset($_GET['id'])) {
    if (empty($_GET['id'])) {
        header('Location: /');
    } else {
        $id = $_GET['id'];
    }
} else {
    header('Location: /');
}
$puxaBlogs = $Blogs->rsDados('', '', '', '', '', $id);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<?php include 'head.php'; ?>

<body>
    <div class="page-wrapper">
    <?php include 'header.php'; ?>
        <div class="stricky-header stricked-menu main-menu">
          <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
        <!--Page Header Start-->
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
            <li><a href="<?php echo SITE_URL ?>"
                                            aria-label="Link de encaminhamento para a página principal do site">Home
                                            /</a></li>
            <li class="active"><a href="<?php echo SITE_URL ?>/blogs"
                                            aria-label="Link de encaminhamento para a página de Blogs da Auto Baterias">Blogs
                                            /</a></li>
          </ul>
          <h2><?php echo $puxaBlogs->titulo ?></h2>
        </div>
      </div>
    </section>
    <!--Page Header End-->
    <section class="blog-details-section pt-50 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-single-post-listing details mb--0">
                        <div class="thumbnail">
                            <img src="<?php echo SITE_URL . '/img/' . $puxaBlogs->banner ?>"
                                alt="<?php echo $puxaBlogs->legenda_imagem ?>">
                        </div>
                        <div class="blog-listing-content">

                            <h1 class="title title-blog-incial">
                                <?php echo $puxaBlogs->titulo ?>
                            </h1>
                            <div class="user-info">
                                <div class="single">
                                    <i class="far fa-user-circle"></i>
                                    <span>Por:
                                        <?php echo $puxaBlogs->postado_por ?>
                                    </span>
                                </div>
                                <div class="single">
                                    <i class="far fa-clock"></i>
                                    <span>
                                        <?php echo formataData($puxaBlogs->data_postagem) ?>
                                    </span>
                                </div>
                            </div>
                            <?php echo $puxaBlogs->conteudo ?>
                            <?php if ($puxaBlogs->tem_cta1 == 'S') { ?>
                                <div class="contact-info-holder">
                                    <div class="left">
                                        <h2>
                                            <?php echo $puxaBlogs->titulo_cta1 ?>
                                        </h2>
                                    </div>
                                    <div class="right">
                                        <div class="contact-button">
                                            <a href="<?php echo $puxaBlogs->link_botao_cta1 ?>"
                                                aria-label="<?php echo $puxaBlogs->texto_ancora_cta1 ?>">
                                                <?php echo $puxaBlogs->nome_botao_cta1 ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php echo $puxaBlogs->conteudo2 ?>
                            <?php if ($puxaBlogs->tem_cta2 == 'S') { ?>
                                <div class="contact-info-holder">
                                    <div class="left">
                                        <h2>
                                            <?php echo $puxaBlogs->titulo_cta2 ?>
                                        </h2>
                                    </div>
                                    <div class="right">
                                        <div class="contact-button">
                                            <a href="<?php echo $puxaBlogs->link_botao_cta2 ?>"
                                                aria-label="<?php echo $puxaBlogs->texto_ancora_cta2 ?>">
                                                <?php echo $puxaBlogs->nome_botao_cta2 ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php echo $puxaBlogs->conteudo3 ?>
                            <?php echo $puxaBlogs->conteudo3 ?>
                            <?php if ($puxaBlogs->tem_cta3 == "S") { ?>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="contact-info-holder-img">
                                            <div class="left">
                                                <img src="<?php echo SITE_URL . '/img/' . $puxaBlogs->foto_cta ?>"
                                                    alt="<?php echo $puxaBlogs->legenda_imagem_cta ?>">
                                            </div>
                                            <div class="right width-cta">
                                                <h2 class="h2-blog">
                                                    <?php echo $puxaBlogs->titulo_cta_3 ?>
                                                </h2>
                                                <div class="contact-button">
                                                    <a href="<?php echo $puxaBlogs->link_botao_cta2 ?>"
                                                        aria-label="<?php echo $puxaBlogs->texto_ancora_cta3 ?>">
                                                        <?php echo $puxaBlogs->nome_botao_cta3 ?>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "footer.php" ?>
     </div>
    <?php include "scripts.php" ?>
</body>

</html>