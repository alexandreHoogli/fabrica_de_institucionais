<?php
@session_start();
$ParceirosInstanciada = '';
if(empty($ParceirosInstanciada)) {
  if(file_exists('Connection/conexao.php')) {
    require_once('Connection/con-pdo.php');
    require_once('Class/funcoes.php');
  } else {
    require_once('../Connection/con-pdo.php');
    require_once('../Class/funcoes.php');
  }

  class Parceiros {
    private $pdo = null;

    private static $Parceiros = null;

    private function __construct($conexao){
      $this->pdo = $conexao;
    }

    public static function getInstance($conexao){
      if (!isset(self::$Parceiros)):
        self::$Parceiros = new Parceiros($conexao);
      endif;
      return self::$Parceiros;
    }

function rsDados($id='', $orderBy='', $limite='', $pagina_individual='', $ativo='') {
  /// FILTROS
  $nCampos = 0;
  $sql = '';
  $sqlOrdem = '';
  $sqlLimite = '';
  if(!empty($id)) {
    $sql .= " and id = ?";
    $nCampos++;
    $campo[$nCampos] = $id;
  }
  if(!empty($pagina_individual)) {
    $sql .= " and pagina_individual = ?";
    $nCampos++;
    $campo[$nCampos] = $pagina_individual;
  }
  if(!empty($ativo)) {
    $sql .= " and ativo = ?";
    $nCampos++;
    $campo[$nCampos] = $ativo;
  }

  /// ORDEM
  if(!empty($orderBy)) {
    $sqlOrdem = " order by {$orderBy}";
  }

  if(!empty($limite)) {
    $sqlLimite = " limit 0,{$limite}";
  }

  try {
    $sql = "SELECT * FROM tbl_parceiros where 1=1 $sql $sqlOrdem $sqlLimite";
    $stm = $this->pdo->prepare($sql);

    for($i=1; $i<=$nCampos; $i++) {
      $stm->bindValue($i, $campo[$i]);
    }

    $stm->execute();
    $rsDados = $stm->fetchAll(PDO::FETCH_OBJ);

    if($id <> '' or $limite == 1) {
      if(isset($rsDados[0]) && !empty($rsDados[0])) {
        return($rsDados[0]);
      }
    } else {
      return($rsDados);
    }
  } catch(PDOException $erro) {
    echo $erro->getMessage();
  }
  }
function add($redireciona='') {
    if(isset($_POST['acao']) && $_POST['acao'] == 'addParceiros') {
if(isset($_POST['meta_title']) && !empty($_POST['meta_title'])){
    $meta_title = $_POST['meta_title'];
}else{
    $meta_title = '';
}
if(isset($_POST['meta_keywords']) && !empty($_POST['meta_keywords'])){
    $meta_keywords = $_POST['meta_keywords'];
}else{
    $meta_keywords = '';
}
if(isset($_POST['meta_description']) && !empty($_POST['meta_description'])){
    $meta_description = $_POST['meta_description'];
}else{
    $meta_description = '';
}
if(isset($_POST['section_1_conteudo_1']) && !empty($_POST['section_1_conteudo_1'])){
    $section_1_conteudo_1 = $_POST['section_1_conteudo_1'];
}else{
    $section_1_conteudo_1 = '';
}
if(isset($_POST['section_1_conteudo_2']) && !empty($_POST['section_1_conteudo_2'])){
    $section_1_conteudo_2 = $_POST['section_1_conteudo_2'];
}else{
    $section_1_conteudo_2 = '';
}
if(isset($_POST['img_alt']) && !empty($_POST['img_alt'])){
    $img_alt = $_POST['img_alt'];
}else{
    $img_alt = '';
}
 try { 
        if(file_exists('Connection/conexao.php')) {
            $pastaArquivos = 'img';
        } else {
            $pastaArquivos = '../img';
        }
            $sql = "INSERT INTO tbl_parceiros (meta_title, meta_keywords, meta_description, section_1_conteudo_1, section_1_conteudo_2,img,img_alt) VALUES ( ?,  ?,  ?,  ?,  ?,?,?)";        $stm = $this->pdo->prepare($sql);
        $stm->bindValue(1, $meta_title);
        $stm->bindValue(2, $meta_keywords);
        $stm->bindValue(3, $meta_description);
        $stm->bindValue(4, $section_1_conteudo_1);
        $stm->bindValue(5, $section_1_conteudo_2);
        $stm->bindValue(6, upload('img', $pastaArquivos, 'N'));      
        $stm->bindValue(7, $img_alt);
        $stm->execute();
$idBanner = $this->pdo->lastInsertId();
    } catch(PDOException $erro){
        echo $erro->getMessage();
    }
  }
}
function editar($redireciona='parceiros.php') {
    if(isset($_POST['acao']) && $_POST['acao'] == 'editaParceiros') {
if(isset($_POST['meta_title']) && !empty($_POST['meta_title'])){
    $meta_title = $_POST['meta_title'];
}else{
    $meta_title = '';
}
if(isset($_POST['meta_keywords']) && !empty($_POST['meta_keywords'])){
    $meta_keywords = $_POST['meta_keywords'];
}else{
    $meta_keywords = '';
}
if(isset($_POST['meta_description']) && !empty($_POST['meta_description'])){
    $meta_description = $_POST['meta_description'];
}else{
    $meta_description = '';
}
if(isset($_POST['section_1_conteudo_1']) && !empty($_POST['section_1_conteudo_1'])){
    $section_1_conteudo_1 = $_POST['section_1_conteudo_1'];
}else{
    $section_1_conteudo_1 = '';
}
if(isset($_POST['section_1_conteudo_2']) && !empty($_POST['section_1_conteudo_2'])){
    $section_1_conteudo_2 = $_POST['section_1_conteudo_2'];
}else{
    $section_1_conteudo_2 = '';
}
if(isset($_POST['img_alt']) && !empty($_POST['img_alt'])){
    $img_alt = $_POST['img_alt'];
}else{
    $img_alt = '';
}
 $id = filter_input(INPUT_POST, 'id');
 $pagina_individual = filter_input(INPUT_POST, 'pagina_individual');
        try { 
        if(file_exists('Connection/conexao.php')) {
            $pastaArquivos = 'img';
        } else {
            $pastaArquivos = '../img';
        }
            $sql = "UPDATE tbl_parceiros SET meta_title=?, meta_keywords=?, meta_description=?, section_1_conteudo_1=?, section_1_conteudo_2=?,img=?,img_alt=? WHERE id=?";
            $stm = $this->pdo->prepare($sql);
        $stm->bindValue(1, $meta_title);
        $stm->bindValue(2, $meta_keywords);
        $stm->bindValue(3, $meta_description);
        $stm->bindValue(4, $section_1_conteudo_1);
        $stm->bindValue(5, $section_1_conteudo_2);
        $stm->bindValue(6, upload('img', $pastaArquivos, 'N')); 
        $stm->bindValue(7, $img_alt);
        $stm->bindValue(8, $id);
        $stm->execute();
    } catch(PDOException $erro){
        echo $erro->getMessage();
    }

// Trecho adicional
if($pagina_individual == 'S') {
  echo "  <script>
          alert('Modificado com sucesso!');
          window.location='editar-parceiros.php?pi=S&id=$id';
      </script>";
  exit;
} else {
  echo "  <script>
          window.location='{$redireciona}';
      </script>";
  exit;
}
}
}
function excluir() {
  if (isset($_GET['acao']) && $_GET['acao'] == 'excluirServico') {
    try {
      $sql = "DELETE FROM tbl_parceiros WHERE id=? ";
      $stm = $this->pdo->prepare($sql);
      $stm->bindValue(1, $_GET['id']);
      $stm->execute();
    } catch (PDOException $erro) {
      echo $erro->getMessage();
    }

    echo "  <script>
            window.location='parceiros.php';
        </script>";
    exit;
  }
}
  }
}
?>
