<?php
@session_start();
$FaqInstanciada = '';
if(empty($FaqInstanciada)) {
  if(file_exists('Connection/conexao.php')) {
    require_once('Connection/con-pdo.php');
    require_once('Class/funcoes.php');
  } else {
    require_once('../Connection/con-pdo.php');
    require_once('../Class/funcoes.php');
  }

  class Faq {
    private $pdo = null;

    private static $Faq = null;

    private function __construct($conexao){
      $this->pdo = $conexao;
    }

    public static function getInstance($conexao){
      if (!isset(self::$Faq)):
        self::$Faq = new Faq($conexao);
      endif;
      return self::$Faq;
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
    $sql = "SELECT * FROM tbl_faq where 1=1 $sql $sqlOrdem $sqlLimite";
    $stm = $this->pdo->prepare($sql);

    for($i=1; $i<=$nCampos; $i++) {
      $stm->bindValue($i, $campo[$i]);
    }

    $stm->execute();
    $rsDados = $stm->fetchAll(PDO::FETCH_OBJ);

    if($id <> '' or $limite == 1 or $pagina_individual <> '') {
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
    if(isset($_POST['acao']) && $_POST['acao'] == 'addFaq') {
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
if(isset($_POST['section_1_button3']) && !empty($_POST['section_1_button3'])){
    $section_1_button3 = $_POST['section_1_button3'];
}else{
    $section_1_button3 = '';
}
if(isset($_POST['section_1_conteudo_4']) && !empty($_POST['section_1_conteudo_4'])){
    $section_1_conteudo_4 = $_POST['section_1_conteudo_4'];
}else{
    $section_1_conteudo_4 = '';
}
if(isset($_POST['section_1_button5']) && !empty($_POST['section_1_button5'])){
    $section_1_button5 = $_POST['section_1_button5'];
}else{
    $section_1_button5 = '';
}
if(isset($_POST['section_1_conteudo_6']) && !empty($_POST['section_1_conteudo_6'])){
    $section_1_conteudo_6 = $_POST['section_1_conteudo_6'];
}else{
    $section_1_conteudo_6 = '';
}
if(isset($_POST['section_1_button7']) && !empty($_POST['section_1_button7'])){
    $section_1_button7 = $_POST['section_1_button7'];
}else{
    $section_1_button7 = '';
}
if(isset($_POST['section_1_conteudo_8']) && !empty($_POST['section_1_conteudo_8'])){
    $section_1_conteudo_8 = $_POST['section_1_conteudo_8'];
}else{
    $section_1_conteudo_8 = '';
}
if(isset($_POST['section_1_button9']) && !empty($_POST['section_1_button9'])){
    $section_1_button9 = $_POST['section_1_button9'];
}else{
    $section_1_button9 = '';
}
 $maximo = 180000;    try { 
        if(file_exists('Connection/conexao.php')) {
            $pastaArquivos = 'img';
        } else {
            $pastaArquivos = '../img';
        }
            $sql = "INSERT INTO tbl_faq (meta_title, meta_keywords, meta_description, section_1_conteudo_1, section_1_conteudo_2, section_1_button3, section_1_conteudo_4, section_1_button5, section_1_conteudo_6, section_1_button7, section_1_conteudo_8, section_1_button9) VALUES ( ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?)";        $stm = $this->pdo->prepare($sql);
        $stm->bindValue(1, $meta_title);
        $stm->bindValue(2, $meta_keywords);
        $stm->bindValue(3, $meta_description);
        $stm->bindValue(4, $section_1_conteudo_1);
        $stm->bindValue(5, $section_1_conteudo_2);
        $stm->bindValue(6, $section_1_button3);
        $stm->bindValue(7, $section_1_conteudo_4);
        $stm->bindValue(8, $section_1_button5);
        $stm->bindValue(9, $section_1_conteudo_6);
        $stm->bindValue(10, $section_1_button7);
        $stm->bindValue(11, $section_1_conteudo_8);
        $stm->bindValue(12, $section_1_button9);
        $stm->execute();
$idBanner = $this->pdo->lastInsertId();
    } catch(PDOException $erro){
        echo $erro->getMessage();
    }
  }
}
function editar($redireciona='faq.php') {
function editar($redireciona='faq.php') {
    if(isset($_POST['acao']) && $_POST['acao'] == 'editaFaq') {
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
if(isset($_POST['section_1_button3']) && !empty($_POST['section_1_button3'])){
    $section_1_button3 = $_POST['section_1_button3'];
}else{
    $section_1_button3 = '';
}
if(isset($_POST['section_1_conteudo_4']) && !empty($_POST['section_1_conteudo_4'])){
    $section_1_conteudo_4 = $_POST['section_1_conteudo_4'];
}else{
    $section_1_conteudo_4 = '';
}
if(isset($_POST['section_1_button5']) && !empty($_POST['section_1_button5'])){
    $section_1_button5 = $_POST['section_1_button5'];
}else{
    $section_1_button5 = '';
}
if(isset($_POST['section_1_conteudo_6']) && !empty($_POST['section_1_conteudo_6'])){
    $section_1_conteudo_6 = $_POST['section_1_conteudo_6'];
}else{
    $section_1_conteudo_6 = '';
}
if(isset($_POST['section_1_button7']) && !empty($_POST['section_1_button7'])){
    $section_1_button7 = $_POST['section_1_button7'];
}else{
    $section_1_button7 = '';
}
if(isset($_POST['section_1_conteudo_8']) && !empty($_POST['section_1_conteudo_8'])){
    $section_1_conteudo_8 = $_POST['section_1_conteudo_8'];
}else{
    $section_1_conteudo_8 = '';
}
if(isset($_POST['section_1_button9']) && !empty($_POST['section_1_button9'])){
    $section_1_button9 = $_POST['section_1_button9'];
}else{
    $section_1_button9 = '';
}
  }
        $maximo = 180000;
            try { 
        if(file_exists('Connection/conexao.php')) {
            $pastaArquivos = 'img';
        } else {
            $pastaArquivos = '../img';
        }
            $sql = "UPDATE tbl_faq SET meta_title=?, meta_keywords=?, meta_description=?, section_1_conteudo_1=?, section_1_conteudo_2=?, section_1_button3=?, section_1_conteudo_4=?, section_1_button5=?, section_1_conteudo_6=?, section_1_button7=?, section_1_conteudo_8=?, section_1_button9=? WHERE id=?";        $stm = $this->pdo->prepare($sql);
        $stm->bindValue(1, $meta_title);
        $stm->bindValue(2, $meta_keywords);
        $stm->bindValue(3, $meta_description);
        $stm->bindValue(4, $section_1_conteudo_1);
        $stm->bindValue(5, $section_1_conteudo_2);
        $stm->bindValue(6, $section_1_button3);
        $stm->bindValue(7, $section_1_conteudo_4);
        $stm->bindValue(8, $section_1_button5);
        $stm->bindValue(9, $section_1_conteudo_6);
        $stm->bindValue(10, $section_1_button7);
        $stm->bindValue(11, $section_1_conteudo_8);
        $stm->bindValue(12, $section_1_button9);
$stm->bindValue(13, $id);
        $stm->execute();
    } catch(PDOException $erro){
        echo $erro->getMessage();
    }

// Trecho adicional
if($pagina_individual == 'S') {
  echo "  <script>
          alert('Modificado com sucesso!');
          window.location='editar-faq.php?pi=S&id=$id';
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
  if (isset($_GET['acao']) && $_GET['acao'] == 'excluirFaq') {
    try {
      $sql = "DELETE FROM tbl_faq WHERE id=? ";
      $stm = $this->pdo->prepare($sql);
      $stm->bindValue(1, $_GET['id']);
      $stm->execute();
    } catch (PDOException $erro) {
      echo $erro->getMessage();
    }

    echo "  <script>
            window.location='faq.php';
        </script>";
    exit;
  }
}
  }
}
?>
