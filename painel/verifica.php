<?php
include "../Class/acesso.class.php";
$verificaRestrito = Acesso::getInstance(Conexao::getInstance());
$usuarios = Acesso::getInstance(Conexao::getInstance());

include "../Class/config.class.php";
$infoSistema = ConfigSistema::getInstance(Conexao::getInstance())->rsDados();
$acessosSite = ConfigSistema::getInstance(Conexao::getInstance());

include "../Class/metasTags.class.php";
$metastags = MetasTags::getInstance(Conexao::getInstance());

include "../Class/menus.class.php";
$menus = Menus::getInstance(Conexao::getInstance());

include "../Class/categoriasvideos.class.php";
$categoriasvideos = CategoriasVideos::getInstance(Conexao::getInstance());


include "../Class/blogs.class.php";
$blogs = Blogs::getInstance(Conexao::getInstance());


include "../Class/newsletters.class.php";
$newsletters = Newsletters::getInstance(Conexao::getInstance());


include "../Class/convenios.class.php";
$convenios = Convenios::getInstance(Conexao::getInstance());


include "../Class/procedimentos.class.php";
$procedimentos = Procedimentos::getInstance(Conexao::getInstance());


$verificaRestrito->restritoAdmin();
$dadosUsuarioLogado = $verificaRestrito->rsDados($_SESSION['dadosLogado']->id);

function get_url()
{
  return $_SERVER['SCRIPT_NAME'] . $_SERVER['REQUEST_URI'];
}
?>