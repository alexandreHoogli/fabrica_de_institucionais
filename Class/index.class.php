<?php
@session_start();
$IndexInstanciada = '';
if(empty($IndexInstanciada)) {
  if(file_exists('Connection/conexao.php')) {
    require_once('Connection/con-pdo.php');
    require_once('Class/funcoes.php');
  } else {
    require_once('../Connection/con-pdo.php');
    require_once('../Class/funcoes.php');
  }

  class Index {
    private $pdo = null;

    private static $Index = null;

    private function __construct($conexao){
      $this->pdo = $conexao;
    }

    public static function getInstance($conexao){
      if (!isset(self::$Index)):
        self::$Index = new Index($conexao);
      endif;
      return self::$Index;
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
    $sql = "SELECT * FROM tbl_index where 1=1 $sql $sqlOrdem $sqlLimite";
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
    if(isset($_POST['acao']) && $_POST['acao'] == 'addIndex') {
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
if(isset($_POST['section_1_link_1']) && !empty($_POST['section_1_link_1'])){
    $section_1_link_1 = $_POST['section_1_link_1'];
}else{
    $section_1_link_1 = '';
}
if(isset($_POST['section_1_link_alt_1']) && !empty($_POST['section_1_link_alt_1'])){
    $section_1_link_alt_1 = $_POST['section_1_link_alt_1'];
}else{
    $section_1_link_alt_1 = '';
}
if(isset($_POST['section_1_link_2']) && !empty($_POST['section_1_link_2'])){
    $section_1_link_2 = $_POST['section_1_link_2'];
}else{
    $section_1_link_2 = '';
}
if(isset($_POST['section_1_link_alt_2']) && !empty($_POST['section_1_link_alt_2'])){
    $section_1_link_alt_2 = $_POST['section_1_link_alt_2'];
}else{
    $section_1_link_alt_2 = '';
}
if(isset($_POST['section_1_link_3']) && !empty($_POST['section_1_link_3'])){
    $section_1_link_3 = $_POST['section_1_link_3'];
}else{
    $section_1_link_3 = '';
}
if(isset($_POST['section_1_link_alt_3']) && !empty($_POST['section_1_link_alt_3'])){
    $section_1_link_alt_3 = $_POST['section_1_link_alt_3'];
}else{
    $section_1_link_alt_3 = '';
}
if(isset($_POST['section_1_link_4']) && !empty($_POST['section_1_link_4'])){
    $section_1_link_4 = $_POST['section_1_link_4'];
}else{
    $section_1_link_4 = '';
}
if(isset($_POST['section_1_link_alt_4']) && !empty($_POST['section_1_link_alt_4'])){
    $section_1_link_alt_4 = $_POST['section_1_link_alt_4'];
}else{
    $section_1_link_alt_4 = '';
}
if(isset($_POST['section_1_image_alt_5']) && !empty($_POST['section_1_image_alt_5'])){
    $section_1_image_alt_5 = $_POST['section_1_image_alt_5'];
}else{
    $section_1_image_alt_5 = '';
}
if(isset($_POST['section_1_conteudo_6']) && !empty($_POST['section_1_conteudo_6'])){
    $section_1_conteudo_6 = $_POST['section_1_conteudo_6'];
}else{
    $section_1_conteudo_6 = '';
}
if(isset($_POST['section_1_conteudo_7']) && !empty($_POST['section_1_conteudo_7'])){
    $section_1_conteudo_7 = $_POST['section_1_conteudo_7'];
}else{
    $section_1_conteudo_7 = '';
}
if(isset($_POST['section_1_link_8']) && !empty($_POST['section_1_link_8'])){
    $section_1_link_8 = $_POST['section_1_link_8'];
}else{
    $section_1_link_8 = '';
}
if(isset($_POST['section_1_link_alt_8']) && !empty($_POST['section_1_link_alt_8'])){
    $section_1_link_alt_8 = $_POST['section_1_link_alt_8'];
}else{
    $section_1_link_alt_8 = '';
}
if(isset($_POST['section_1_link_conteudo_8']) && !empty($_POST['section_1_link_conteudo_8'])){
    $section_1_link_conteudo_8 = $_POST['section_1_link_conteudo_8'];
}else{
    $section_1_link_conteudo_8 = '';
}
if(isset($_POST['section_1_image_alt_9']) && !empty($_POST['section_1_image_alt_9'])){
    $section_1_image_alt_9 = $_POST['section_1_image_alt_9'];
}else{
    $section_1_image_alt_9 = '';
}
if(isset($_POST['section_1_link_10']) && !empty($_POST['section_1_link_10'])){
    $section_1_link_10 = $_POST['section_1_link_10'];
}else{
    $section_1_link_10 = '';
}
if(isset($_POST['section_1_link_alt_10']) && !empty($_POST['section_1_link_alt_10'])){
    $section_1_link_alt_10 = $_POST['section_1_link_alt_10'];
}else{
    $section_1_link_alt_10 = '';
}
if(isset($_POST['section_1_link_conteudo_10']) && !empty($_POST['section_1_link_conteudo_10'])){
    $section_1_link_conteudo_10 = $_POST['section_1_link_conteudo_10'];
}else{
    $section_1_link_conteudo_10 = '';
}
if(isset($_POST['section_1_image_alt_11']) && !empty($_POST['section_1_image_alt_11'])){
    $section_1_image_alt_11 = $_POST['section_1_image_alt_11'];
}else{
    $section_1_image_alt_11 = '';
}
if(isset($_POST['section_1_image_alt_12']) && !empty($_POST['section_1_image_alt_12'])){
    $section_1_image_alt_12 = $_POST['section_1_image_alt_12'];
}else{
    $section_1_image_alt_12 = '';
}
if(isset($_POST['section_1_image_alt_13']) && !empty($_POST['section_1_image_alt_13'])){
    $section_1_image_alt_13 = $_POST['section_1_image_alt_13'];
}else{
    $section_1_image_alt_13 = '';
}
if(isset($_POST['section_1_image_alt_14']) && !empty($_POST['section_1_image_alt_14'])){
    $section_1_image_alt_14 = $_POST['section_1_image_alt_14'];
}else{
    $section_1_image_alt_14 = '';
}
if(isset($_POST['section_1_link_15']) && !empty($_POST['section_1_link_15'])){
    $section_1_link_15 = $_POST['section_1_link_15'];
}else{
    $section_1_link_15 = '';
}
if(isset($_POST['section_1_link_alt_15']) && !empty($_POST['section_1_link_alt_15'])){
    $section_1_link_alt_15 = $_POST['section_1_link_alt_15'];
}else{
    $section_1_link_alt_15 = '';
}
if(isset($_POST['section_1_image_alt_16']) && !empty($_POST['section_1_image_alt_16'])){
    $section_1_image_alt_16 = $_POST['section_1_image_alt_16'];
}else{
    $section_1_image_alt_16 = '';
}
if(isset($_POST['section_1_image_alt_17']) && !empty($_POST['section_1_image_alt_17'])){
    $section_1_image_alt_17 = $_POST['section_1_image_alt_17'];
}else{
    $section_1_image_alt_17 = '';
}
if(isset($_POST['section_1_image_alt_18']) && !empty($_POST['section_1_image_alt_18'])){
    $section_1_image_alt_18 = $_POST['section_1_image_alt_18'];
}else{
    $section_1_image_alt_18 = '';
}
if(isset($_POST['section_2_image_alt_19']) && !empty($_POST['section_2_image_alt_19'])){
    $section_2_image_alt_19 = $_POST['section_2_image_alt_19'];
}else{
    $section_2_image_alt_19 = '';
}
if(isset($_POST['section_2_image_alt_20']) && !empty($_POST['section_2_image_alt_20'])){
    $section_2_image_alt_20 = $_POST['section_2_image_alt_20'];
}else{
    $section_2_image_alt_20 = '';
}
if(isset($_POST['section_2_image_alt_21']) && !empty($_POST['section_2_image_alt_21'])){
    $section_2_image_alt_21 = $_POST['section_2_image_alt_21'];
}else{
    $section_2_image_alt_21 = '';
}
if(isset($_POST['section_2_conteudo_22']) && !empty($_POST['section_2_conteudo_22'])){
    $section_2_conteudo_22 = $_POST['section_2_conteudo_22'];
}else{
    $section_2_conteudo_22 = '';
}
if(isset($_POST['section_2_conteudo_23']) && !empty($_POST['section_2_conteudo_23'])){
    $section_2_conteudo_23 = $_POST['section_2_conteudo_23'];
}else{
    $section_2_conteudo_23 = '';
}
if(isset($_POST['section_2_link_24']) && !empty($_POST['section_2_link_24'])){
    $section_2_link_24 = $_POST['section_2_link_24'];
}else{
    $section_2_link_24 = '';
}
if(isset($_POST['section_2_link_alt_24']) && !empty($_POST['section_2_link_alt_24'])){
    $section_2_link_alt_24 = $_POST['section_2_link_alt_24'];
}else{
    $section_2_link_alt_24 = '';
}
if(isset($_POST['section_2_image_alt_25']) && !empty($_POST['section_2_image_alt_25'])){
    $section_2_image_alt_25 = $_POST['section_2_image_alt_25'];
}else{
    $section_2_image_alt_25 = '';
}
if(isset($_POST['section_2_conteudo_26']) && !empty($_POST['section_2_conteudo_26'])){
    $section_2_conteudo_26 = $_POST['section_2_conteudo_26'];
}else{
    $section_2_conteudo_26 = '';
}
if(isset($_POST['section_2_conteudo_27']) && !empty($_POST['section_2_conteudo_27'])){
    $section_2_conteudo_27 = $_POST['section_2_conteudo_27'];
}else{
    $section_2_conteudo_27 = '';
}
if(isset($_POST['section_2_link_28']) && !empty($_POST['section_2_link_28'])){
    $section_2_link_28 = $_POST['section_2_link_28'];
}else{
    $section_2_link_28 = '';
}
if(isset($_POST['section_2_link_alt_28']) && !empty($_POST['section_2_link_alt_28'])){
    $section_2_link_alt_28 = $_POST['section_2_link_alt_28'];
}else{
    $section_2_link_alt_28 = '';
}
if(isset($_POST['section_2_image_alt_29']) && !empty($_POST['section_2_image_alt_29'])){
    $section_2_image_alt_29 = $_POST['section_2_image_alt_29'];
}else{
    $section_2_image_alt_29 = '';
}
if(isset($_POST['section_2_conteudo_30']) && !empty($_POST['section_2_conteudo_30'])){
    $section_2_conteudo_30 = $_POST['section_2_conteudo_30'];
}else{
    $section_2_conteudo_30 = '';
}
if(isset($_POST['section_2_conteudo_31']) && !empty($_POST['section_2_conteudo_31'])){
    $section_2_conteudo_31 = $_POST['section_2_conteudo_31'];
}else{
    $section_2_conteudo_31 = '';
}
if(isset($_POST['section_2_link_32']) && !empty($_POST['section_2_link_32'])){
    $section_2_link_32 = $_POST['section_2_link_32'];
}else{
    $section_2_link_32 = '';
}
if(isset($_POST['section_2_link_alt_32']) && !empty($_POST['section_2_link_alt_32'])){
    $section_2_link_alt_32 = $_POST['section_2_link_alt_32'];
}else{
    $section_2_link_alt_32 = '';
}
if(isset($_POST['section_2_image_alt_33']) && !empty($_POST['section_2_image_alt_33'])){
    $section_2_image_alt_33 = $_POST['section_2_image_alt_33'];
}else{
    $section_2_image_alt_33 = '';
}
if(isset($_POST['section_2_conteudo_34']) && !empty($_POST['section_2_conteudo_34'])){
    $section_2_conteudo_34 = $_POST['section_2_conteudo_34'];
}else{
    $section_2_conteudo_34 = '';
}
if(isset($_POST['section_2_conteudo_35']) && !empty($_POST['section_2_conteudo_35'])){
    $section_2_conteudo_35 = $_POST['section_2_conteudo_35'];
}else{
    $section_2_conteudo_35 = '';
}
if(isset($_POST['section_2_link_36']) && !empty($_POST['section_2_link_36'])){
    $section_2_link_36 = $_POST['section_2_link_36'];
}else{
    $section_2_link_36 = '';
}
if(isset($_POST['section_2_link_alt_36']) && !empty($_POST['section_2_link_alt_36'])){
    $section_2_link_alt_36 = $_POST['section_2_link_alt_36'];
}else{
    $section_2_link_alt_36 = '';
}
if(isset($_POST['section_2_image_alt_37']) && !empty($_POST['section_2_image_alt_37'])){
    $section_2_image_alt_37 = $_POST['section_2_image_alt_37'];
}else{
    $section_2_image_alt_37 = '';
}
if(isset($_POST['section_2_conteudo_38']) && !empty($_POST['section_2_conteudo_38'])){
    $section_2_conteudo_38 = $_POST['section_2_conteudo_38'];
}else{
    $section_2_conteudo_38 = '';
}
if(isset($_POST['section_2_conteudo_39']) && !empty($_POST['section_2_conteudo_39'])){
    $section_2_conteudo_39 = $_POST['section_2_conteudo_39'];
}else{
    $section_2_conteudo_39 = '';
}
if(isset($_POST['section_2_link_40']) && !empty($_POST['section_2_link_40'])){
    $section_2_link_40 = $_POST['section_2_link_40'];
}else{
    $section_2_link_40 = '';
}
if(isset($_POST['section_2_link_alt_40']) && !empty($_POST['section_2_link_alt_40'])){
    $section_2_link_alt_40 = $_POST['section_2_link_alt_40'];
}else{
    $section_2_link_alt_40 = '';
}
if(isset($_POST['section_2_link_conteudo_40']) && !empty($_POST['section_2_link_conteudo_40'])){
    $section_2_link_conteudo_40 = $_POST['section_2_link_conteudo_40'];
}else{
    $section_2_link_conteudo_40 = '';
}
if(isset($_POST['section_2_image_alt_41']) && !empty($_POST['section_2_image_alt_41'])){
    $section_2_image_alt_41 = $_POST['section_2_image_alt_41'];
}else{
    $section_2_image_alt_41 = '';
}
if(isset($_POST['section_2_image_alt_42']) && !empty($_POST['section_2_image_alt_42'])){
    $section_2_image_alt_42 = $_POST['section_2_image_alt_42'];
}else{
    $section_2_image_alt_42 = '';
}
if(isset($_POST['section_3_image_alt_43']) && !empty($_POST['section_3_image_alt_43'])){
    $section_3_image_alt_43 = $_POST['section_3_image_alt_43'];
}else{
    $section_3_image_alt_43 = '';
}
if(isset($_POST['section_3_conteudo_44']) && !empty($_POST['section_3_conteudo_44'])){
    $section_3_conteudo_44 = $_POST['section_3_conteudo_44'];
}else{
    $section_3_conteudo_44 = '';
}
if(isset($_POST['section_3_conteudo_45']) && !empty($_POST['section_3_conteudo_45'])){
    $section_3_conteudo_45 = $_POST['section_3_conteudo_45'];
}else{
    $section_3_conteudo_45 = '';
}
if(isset($_POST['section_3_image_alt_46']) && !empty($_POST['section_3_image_alt_46'])){
    $section_3_image_alt_46 = $_POST['section_3_image_alt_46'];
}else{
    $section_3_image_alt_46 = '';
}
if(isset($_POST['section_3_image_alt_47']) && !empty($_POST['section_3_image_alt_47'])){
    $section_3_image_alt_47 = $_POST['section_3_image_alt_47'];
}else{
    $section_3_image_alt_47 = '';
}
if(isset($_POST['section_3_image_alt_48']) && !empty($_POST['section_3_image_alt_48'])){
    $section_3_image_alt_48 = $_POST['section_3_image_alt_48'];
}else{
    $section_3_image_alt_48 = '';
}
if(isset($_POST['section_3_conteudo_49']) && !empty($_POST['section_3_conteudo_49'])){
    $section_3_conteudo_49 = $_POST['section_3_conteudo_49'];
}else{
    $section_3_conteudo_49 = '';
}
if(isset($_POST['section_3_image_alt_50']) && !empty($_POST['section_3_image_alt_50'])){
    $section_3_image_alt_50 = $_POST['section_3_image_alt_50'];
}else{
    $section_3_image_alt_50 = '';
}
if(isset($_POST['section_3_image_alt_51']) && !empty($_POST['section_3_image_alt_51'])){
    $section_3_image_alt_51 = $_POST['section_3_image_alt_51'];
}else{
    $section_3_image_alt_51 = '';
}
if(isset($_POST['section_3_conteudo_52']) && !empty($_POST['section_3_conteudo_52'])){
    $section_3_conteudo_52 = $_POST['section_3_conteudo_52'];
}else{
    $section_3_conteudo_52 = '';
}
if(isset($_POST['section_3_image_alt_53']) && !empty($_POST['section_3_image_alt_53'])){
    $section_3_image_alt_53 = $_POST['section_3_image_alt_53'];
}else{
    $section_3_image_alt_53 = '';
}
if(isset($_POST['section_3_image_alt_54']) && !empty($_POST['section_3_image_alt_54'])){
    $section_3_image_alt_54 = $_POST['section_3_image_alt_54'];
}else{
    $section_3_image_alt_54 = '';
}
if(isset($_POST['section_3_conteudo_55']) && !empty($_POST['section_3_conteudo_55'])){
    $section_3_conteudo_55 = $_POST['section_3_conteudo_55'];
}else{
    $section_3_conteudo_55 = '';
}
if(isset($_POST['section_3_image_alt_56']) && !empty($_POST['section_3_image_alt_56'])){
    $section_3_image_alt_56 = $_POST['section_3_image_alt_56'];
}else{
    $section_3_image_alt_56 = '';
}
if(isset($_POST['section_4_image_alt_57']) && !empty($_POST['section_4_image_alt_57'])){
    $section_4_image_alt_57 = $_POST['section_4_image_alt_57'];
}else{
    $section_4_image_alt_57 = '';
}
if(isset($_POST['section_4_image_alt_58']) && !empty($_POST['section_4_image_alt_58'])){
    $section_4_image_alt_58 = $_POST['section_4_image_alt_58'];
}else{
    $section_4_image_alt_58 = '';
}
if(isset($_POST['section_4_conteudo_59']) && !empty($_POST['section_4_conteudo_59'])){
    $section_4_conteudo_59 = $_POST['section_4_conteudo_59'];
}else{
    $section_4_conteudo_59 = '';
}
if(isset($_POST['section_4_conteudo_60']) && !empty($_POST['section_4_conteudo_60'])){
    $section_4_conteudo_60 = $_POST['section_4_conteudo_60'];
}else{
    $section_4_conteudo_60 = '';
}
if(isset($_POST['section_4_image_alt_61']) && !empty($_POST['section_4_image_alt_61'])){
    $section_4_image_alt_61 = $_POST['section_4_image_alt_61'];
}else{
    $section_4_image_alt_61 = '';
}
if(isset($_POST['section_4_image_alt_62']) && !empty($_POST['section_4_image_alt_62'])){
    $section_4_image_alt_62 = $_POST['section_4_image_alt_62'];
}else{
    $section_4_image_alt_62 = '';
}
if(isset($_POST['section_4_image_alt_63']) && !empty($_POST['section_4_image_alt_63'])){
    $section_4_image_alt_63 = $_POST['section_4_image_alt_63'];
}else{
    $section_4_image_alt_63 = '';
}
if(isset($_POST['section_4_image_alt_64']) && !empty($_POST['section_4_image_alt_64'])){
    $section_4_image_alt_64 = $_POST['section_4_image_alt_64'];
}else{
    $section_4_image_alt_64 = '';
}
if(isset($_POST['section_4_conteudo_65']) && !empty($_POST['section_4_conteudo_65'])){
    $section_4_conteudo_65 = $_POST['section_4_conteudo_65'];
}else{
    $section_4_conteudo_65 = '';
}
if(isset($_POST['section_4_conteudo_66']) && !empty($_POST['section_4_conteudo_66'])){
    $section_4_conteudo_66 = $_POST['section_4_conteudo_66'];
}else{
    $section_4_conteudo_66 = '';
}
if(isset($_POST['section_4_conteudo_67']) && !empty($_POST['section_4_conteudo_67'])){
    $section_4_conteudo_67 = $_POST['section_4_conteudo_67'];
}else{
    $section_4_conteudo_67 = '';
}
if(isset($_POST['section_4_link_68']) && !empty($_POST['section_4_link_68'])){
    $section_4_link_68 = $_POST['section_4_link_68'];
}else{
    $section_4_link_68 = '';
}
if(isset($_POST['section_4_link_alt_68']) && !empty($_POST['section_4_link_alt_68'])){
    $section_4_link_alt_68 = $_POST['section_4_link_alt_68'];
}else{
    $section_4_link_alt_68 = '';
}
if(isset($_POST['section_4_link_conteudo_68']) && !empty($_POST['section_4_link_conteudo_68'])){
    $section_4_link_conteudo_68 = $_POST['section_4_link_conteudo_68'];
}else{
    $section_4_link_conteudo_68 = '';
}
if(isset($_POST['section_4_image_alt_69']) && !empty($_POST['section_4_image_alt_69'])){
    $section_4_image_alt_69 = $_POST['section_4_image_alt_69'];
}else{
    $section_4_image_alt_69 = '';
}
if(isset($_POST['section_4_image_alt_70']) && !empty($_POST['section_4_image_alt_70'])){
    $section_4_image_alt_70 = $_POST['section_4_image_alt_70'];
}else{
    $section_4_image_alt_70 = '';
}
if(isset($_POST['section_4_image_alt_71']) && !empty($_POST['section_4_image_alt_71'])){
    $section_4_image_alt_71 = $_POST['section_4_image_alt_71'];
}else{
    $section_4_image_alt_71 = '';
}
if(isset($_POST['section_5_image_alt_72']) && !empty($_POST['section_5_image_alt_72'])){
    $section_5_image_alt_72 = $_POST['section_5_image_alt_72'];
}else{
    $section_5_image_alt_72 = '';
}
if(isset($_POST['section_5_image_alt_73']) && !empty($_POST['section_5_image_alt_73'])){
    $section_5_image_alt_73 = $_POST['section_5_image_alt_73'];
}else{
    $section_5_image_alt_73 = '';
}
if(isset($_POST['section_5_conteudo_74']) && !empty($_POST['section_5_conteudo_74'])){
    $section_5_conteudo_74 = $_POST['section_5_conteudo_74'];
}else{
    $section_5_conteudo_74 = '';
}
if(isset($_POST['section_5_conteudo_75']) && !empty($_POST['section_5_conteudo_75'])){
    $section_5_conteudo_75 = $_POST['section_5_conteudo_75'];
}else{
    $section_5_conteudo_75 = '';
}
if(isset($_POST['section_5_link_76']) && !empty($_POST['section_5_link_76'])){
    $section_5_link_76 = $_POST['section_5_link_76'];
}else{
    $section_5_link_76 = '';
}
if(isset($_POST['section_5_link_alt_76']) && !empty($_POST['section_5_link_alt_76'])){
    $section_5_link_alt_76 = $_POST['section_5_link_alt_76'];
}else{
    $section_5_link_alt_76 = '';
}
if(isset($_POST['section_5_link_conteudo_76']) && !empty($_POST['section_5_link_conteudo_76'])){
    $section_5_link_conteudo_76 = $_POST['section_5_link_conteudo_76'];
}else{
    $section_5_link_conteudo_76 = '';
}
if(isset($_POST['section_5_image_alt_77']) && !empty($_POST['section_5_image_alt_77'])){
    $section_5_image_alt_77 = $_POST['section_5_image_alt_77'];
}else{
    $section_5_image_alt_77 = '';
}
if(isset($_POST['section_5_image_alt_78']) && !empty($_POST['section_5_image_alt_78'])){
    $section_5_image_alt_78 = $_POST['section_5_image_alt_78'];
}else{
    $section_5_image_alt_78 = '';
}
if(isset($_POST['section_5_conteudo_79']) && !empty($_POST['section_5_conteudo_79'])){
    $section_5_conteudo_79 = $_POST['section_5_conteudo_79'];
}else{
    $section_5_conteudo_79 = '';
}
if(isset($_POST['section_5_conteudo_80']) && !empty($_POST['section_5_conteudo_80'])){
    $section_5_conteudo_80 = $_POST['section_5_conteudo_80'];
}else{
    $section_5_conteudo_80 = '';
}
if(isset($_POST['section_5_image_alt_81']) && !empty($_POST['section_5_image_alt_81'])){
    $section_5_image_alt_81 = $_POST['section_5_image_alt_81'];
}else{
    $section_5_image_alt_81 = '';
}
if(isset($_POST['section_5_conteudo_82']) && !empty($_POST['section_5_conteudo_82'])){
    $section_5_conteudo_82 = $_POST['section_5_conteudo_82'];
}else{
    $section_5_conteudo_82 = '';
}
if(isset($_POST['section_5_conteudo_83']) && !empty($_POST['section_5_conteudo_83'])){
    $section_5_conteudo_83 = $_POST['section_5_conteudo_83'];
}else{
    $section_5_conteudo_83 = '';
}
if(isset($_POST['section_5_image_alt_84']) && !empty($_POST['section_5_image_alt_84'])){
    $section_5_image_alt_84 = $_POST['section_5_image_alt_84'];
}else{
    $section_5_image_alt_84 = '';
}
if(isset($_POST['section_5_conteudo_85']) && !empty($_POST['section_5_conteudo_85'])){
    $section_5_conteudo_85 = $_POST['section_5_conteudo_85'];
}else{
    $section_5_conteudo_85 = '';
}
if(isset($_POST['section_5_conteudo_86']) && !empty($_POST['section_5_conteudo_86'])){
    $section_5_conteudo_86 = $_POST['section_5_conteudo_86'];
}else{
    $section_5_conteudo_86 = '';
}
if(isset($_POST['section_5_conteudo_87']) && !empty($_POST['section_5_conteudo_87'])){
    $section_5_conteudo_87 = $_POST['section_5_conteudo_87'];
}else{
    $section_5_conteudo_87 = '';
}
if(isset($_POST['section_5_image_alt_88']) && !empty($_POST['section_5_image_alt_88'])){
    $section_5_image_alt_88 = $_POST['section_5_image_alt_88'];
}else{
    $section_5_image_alt_88 = '';
}
if(isset($_POST['section_5_conteudo_89']) && !empty($_POST['section_5_conteudo_89'])){
    $section_5_conteudo_89 = $_POST['section_5_conteudo_89'];
}else{
    $section_5_conteudo_89 = '';
}
if(isset($_POST['section_5_conteudo_90']) && !empty($_POST['section_5_conteudo_90'])){
    $section_5_conteudo_90 = $_POST['section_5_conteudo_90'];
}else{
    $section_5_conteudo_90 = '';
}
if(isset($_POST['section_5_conteudo_91']) && !empty($_POST['section_5_conteudo_91'])){
    $section_5_conteudo_91 = $_POST['section_5_conteudo_91'];
}else{
    $section_5_conteudo_91 = '';
}
if(isset($_POST['section_5_image_alt_92']) && !empty($_POST['section_5_image_alt_92'])){
    $section_5_image_alt_92 = $_POST['section_5_image_alt_92'];
}else{
    $section_5_image_alt_92 = '';
}
if(isset($_POST['section_6_image_alt_93']) && !empty($_POST['section_6_image_alt_93'])){
    $section_6_image_alt_93 = $_POST['section_6_image_alt_93'];
}else{
    $section_6_image_alt_93 = '';
}
if(isset($_POST['section_6_conteudo_94']) && !empty($_POST['section_6_conteudo_94'])){
    $section_6_conteudo_94 = $_POST['section_6_conteudo_94'];
}else{
    $section_6_conteudo_94 = '';
}
if(isset($_POST['section_6_conteudo_95']) && !empty($_POST['section_6_conteudo_95'])){
    $section_6_conteudo_95 = $_POST['section_6_conteudo_95'];
}else{
    $section_6_conteudo_95 = '';
}
if(isset($_POST['section_6_image_alt_96']) && !empty($_POST['section_6_image_alt_96'])){
    $section_6_image_alt_96 = $_POST['section_6_image_alt_96'];
}else{
    $section_6_image_alt_96 = '';
}
if(isset($_POST['section_6_image_alt_97']) && !empty($_POST['section_6_image_alt_97'])){
    $section_6_image_alt_97 = $_POST['section_6_image_alt_97'];
}else{
    $section_6_image_alt_97 = '';
}
if(isset($_POST['section_6_conteudo_98']) && !empty($_POST['section_6_conteudo_98'])){
    $section_6_conteudo_98 = $_POST['section_6_conteudo_98'];
}else{
    $section_6_conteudo_98 = '';
}
if(isset($_POST['section_6_conteudo_99']) && !empty($_POST['section_6_conteudo_99'])){
    $section_6_conteudo_99 = $_POST['section_6_conteudo_99'];
}else{
    $section_6_conteudo_99 = '';
}
if(isset($_POST['section_6_conteudo_100']) && !empty($_POST['section_6_conteudo_100'])){
    $section_6_conteudo_100 = $_POST['section_6_conteudo_100'];
}else{
    $section_6_conteudo_100 = '';
}
if(isset($_POST['section_6_image_alt_101']) && !empty($_POST['section_6_image_alt_101'])){
    $section_6_image_alt_101 = $_POST['section_6_image_alt_101'];
}else{
    $section_6_image_alt_101 = '';
}
if(isset($_POST['section_6_conteudo_102']) && !empty($_POST['section_6_conteudo_102'])){
    $section_6_conteudo_102 = $_POST['section_6_conteudo_102'];
}else{
    $section_6_conteudo_102 = '';
}
if(isset($_POST['section_6_conteudo_103']) && !empty($_POST['section_6_conteudo_103'])){
    $section_6_conteudo_103 = $_POST['section_6_conteudo_103'];
}else{
    $section_6_conteudo_103 = '';
}
if(isset($_POST['section_6_conteudo_104']) && !empty($_POST['section_6_conteudo_104'])){
    $section_6_conteudo_104 = $_POST['section_6_conteudo_104'];
}else{
    $section_6_conteudo_104 = '';
}
if(isset($_POST['section_6_image_alt_105']) && !empty($_POST['section_6_image_alt_105'])){
    $section_6_image_alt_105 = $_POST['section_6_image_alt_105'];
}else{
    $section_6_image_alt_105 = '';
}
if(isset($_POST['section_6_conteudo_106']) && !empty($_POST['section_6_conteudo_106'])){
    $section_6_conteudo_106 = $_POST['section_6_conteudo_106'];
}else{
    $section_6_conteudo_106 = '';
}
if(isset($_POST['section_6_conteudo_107']) && !empty($_POST['section_6_conteudo_107'])){
    $section_6_conteudo_107 = $_POST['section_6_conteudo_107'];
}else{
    $section_6_conteudo_107 = '';
}
if(isset($_POST['section_6_conteudo_108']) && !empty($_POST['section_6_conteudo_108'])){
    $section_6_conteudo_108 = $_POST['section_6_conteudo_108'];
}else{
    $section_6_conteudo_108 = '';
}
if(isset($_POST['section_6_image_alt_109']) && !empty($_POST['section_6_image_alt_109'])){
    $section_6_image_alt_109 = $_POST['section_6_image_alt_109'];
}else{
    $section_6_image_alt_109 = '';
}
if(isset($_POST['section_6_conteudo_110']) && !empty($_POST['section_6_conteudo_110'])){
    $section_6_conteudo_110 = $_POST['section_6_conteudo_110'];
}else{
    $section_6_conteudo_110 = '';
}
if(isset($_POST['section_6_conteudo_111']) && !empty($_POST['section_6_conteudo_111'])){
    $section_6_conteudo_111 = $_POST['section_6_conteudo_111'];
}else{
    $section_6_conteudo_111 = '';
}
if(isset($_POST['section_6_conteudo_112']) && !empty($_POST['section_6_conteudo_112'])){
    $section_6_conteudo_112 = $_POST['section_6_conteudo_112'];
}else{
    $section_6_conteudo_112 = '';
}
if(isset($_POST['section_6_image_alt_113']) && !empty($_POST['section_6_image_alt_113'])){
    $section_6_image_alt_113 = $_POST['section_6_image_alt_113'];
}else{
    $section_6_image_alt_113 = '';
}
if(isset($_POST['section_6_conteudo_114']) && !empty($_POST['section_6_conteudo_114'])){
    $section_6_conteudo_114 = $_POST['section_6_conteudo_114'];
}else{
    $section_6_conteudo_114 = '';
}
if(isset($_POST['section_6_conteudo_115']) && !empty($_POST['section_6_conteudo_115'])){
    $section_6_conteudo_115 = $_POST['section_6_conteudo_115'];
}else{
    $section_6_conteudo_115 = '';
}
if(isset($_POST['section_6_conteudo_116']) && !empty($_POST['section_6_conteudo_116'])){
    $section_6_conteudo_116 = $_POST['section_6_conteudo_116'];
}else{
    $section_6_conteudo_116 = '';
}
if(isset($_POST['section_6_image_alt_117']) && !empty($_POST['section_6_image_alt_117'])){
    $section_6_image_alt_117 = $_POST['section_6_image_alt_117'];
}else{
    $section_6_image_alt_117 = '';
}
if(isset($_POST['section_6_conteudo_118']) && !empty($_POST['section_6_conteudo_118'])){
    $section_6_conteudo_118 = $_POST['section_6_conteudo_118'];
}else{
    $section_6_conteudo_118 = '';
}
if(isset($_POST['section_6_conteudo_119']) && !empty($_POST['section_6_conteudo_119'])){
    $section_6_conteudo_119 = $_POST['section_6_conteudo_119'];
}else{
    $section_6_conteudo_119 = '';
}
if(isset($_POST['section_6_conteudo_120']) && !empty($_POST['section_6_conteudo_120'])){
    $section_6_conteudo_120 = $_POST['section_6_conteudo_120'];
}else{
    $section_6_conteudo_120 = '';
}
if(isset($_POST['section_6_image_alt_121']) && !empty($_POST['section_6_image_alt_121'])){
    $section_6_image_alt_121 = $_POST['section_6_image_alt_121'];
}else{
    $section_6_image_alt_121 = '';
}
if(isset($_POST['section_6_conteudo_122']) && !empty($_POST['section_6_conteudo_122'])){
    $section_6_conteudo_122 = $_POST['section_6_conteudo_122'];
}else{
    $section_6_conteudo_122 = '';
}
if(isset($_POST['section_6_conteudo_123']) && !empty($_POST['section_6_conteudo_123'])){
    $section_6_conteudo_123 = $_POST['section_6_conteudo_123'];
}else{
    $section_6_conteudo_123 = '';
}
if(isset($_POST['section_6_conteudo_124']) && !empty($_POST['section_6_conteudo_124'])){
    $section_6_conteudo_124 = $_POST['section_6_conteudo_124'];
}else{
    $section_6_conteudo_124 = '';
}
if(isset($_POST['section_6_image_alt_125']) && !empty($_POST['section_6_image_alt_125'])){
    $section_6_image_alt_125 = $_POST['section_6_image_alt_125'];
}else{
    $section_6_image_alt_125 = '';
}
if(isset($_POST['section_6_conteudo_126']) && !empty($_POST['section_6_conteudo_126'])){
    $section_6_conteudo_126 = $_POST['section_6_conteudo_126'];
}else{
    $section_6_conteudo_126 = '';
}
if(isset($_POST['section_6_conteudo_127']) && !empty($_POST['section_6_conteudo_127'])){
    $section_6_conteudo_127 = $_POST['section_6_conteudo_127'];
}else{
    $section_6_conteudo_127 = '';
}
if(isset($_POST['section_6_conteudo_128']) && !empty($_POST['section_6_conteudo_128'])){
    $section_6_conteudo_128 = $_POST['section_6_conteudo_128'];
}else{
    $section_6_conteudo_128 = '';
}
if(isset($_POST['section_6_image_alt_129']) && !empty($_POST['section_6_image_alt_129'])){
    $section_6_image_alt_129 = $_POST['section_6_image_alt_129'];
}else{
    $section_6_image_alt_129 = '';
}
if(isset($_POST['section_6_conteudo_130']) && !empty($_POST['section_6_conteudo_130'])){
    $section_6_conteudo_130 = $_POST['section_6_conteudo_130'];
}else{
    $section_6_conteudo_130 = '';
}
if(isset($_POST['section_6_conteudo_131']) && !empty($_POST['section_6_conteudo_131'])){
    $section_6_conteudo_131 = $_POST['section_6_conteudo_131'];
}else{
    $section_6_conteudo_131 = '';
}
if(isset($_POST['section_6_conteudo_132']) && !empty($_POST['section_6_conteudo_132'])){
    $section_6_conteudo_132 = $_POST['section_6_conteudo_132'];
}else{
    $section_6_conteudo_132 = '';
}
if(isset($_POST['section_6_image_alt_133']) && !empty($_POST['section_6_image_alt_133'])){
    $section_6_image_alt_133 = $_POST['section_6_image_alt_133'];
}else{
    $section_6_image_alt_133 = '';
}
if(isset($_POST['section_6_conteudo_134']) && !empty($_POST['section_6_conteudo_134'])){
    $section_6_conteudo_134 = $_POST['section_6_conteudo_134'];
}else{
    $section_6_conteudo_134 = '';
}
if(isset($_POST['section_6_conteudo_135']) && !empty($_POST['section_6_conteudo_135'])){
    $section_6_conteudo_135 = $_POST['section_6_conteudo_135'];
}else{
    $section_6_conteudo_135 = '';
}
if(isset($_POST['section_6_conteudo_136']) && !empty($_POST['section_6_conteudo_136'])){
    $section_6_conteudo_136 = $_POST['section_6_conteudo_136'];
}else{
    $section_6_conteudo_136 = '';
}
if(isset($_POST['section_6_image_alt_137']) && !empty($_POST['section_6_image_alt_137'])){
    $section_6_image_alt_137 = $_POST['section_6_image_alt_137'];
}else{
    $section_6_image_alt_137 = '';
}
if(isset($_POST['section_6_conteudo_138']) && !empty($_POST['section_6_conteudo_138'])){
    $section_6_conteudo_138 = $_POST['section_6_conteudo_138'];
}else{
    $section_6_conteudo_138 = '';
}
if(isset($_POST['section_6_conteudo_139']) && !empty($_POST['section_6_conteudo_139'])){
    $section_6_conteudo_139 = $_POST['section_6_conteudo_139'];
}else{
    $section_6_conteudo_139 = '';
}
if(isset($_POST['section_6_conteudo_140']) && !empty($_POST['section_6_conteudo_140'])){
    $section_6_conteudo_140 = $_POST['section_6_conteudo_140'];
}else{
    $section_6_conteudo_140 = '';
}
if(isset($_POST['section_6_image_alt_141']) && !empty($_POST['section_6_image_alt_141'])){
    $section_6_image_alt_141 = $_POST['section_6_image_alt_141'];
}else{
    $section_6_image_alt_141 = '';
}
if(isset($_POST['section_6_conteudo_142']) && !empty($_POST['section_6_conteudo_142'])){
    $section_6_conteudo_142 = $_POST['section_6_conteudo_142'];
}else{
    $section_6_conteudo_142 = '';
}
if(isset($_POST['section_6_conteudo_143']) && !empty($_POST['section_6_conteudo_143'])){
    $section_6_conteudo_143 = $_POST['section_6_conteudo_143'];
}else{
    $section_6_conteudo_143 = '';
}
if(isset($_POST['section_6_conteudo_144']) && !empty($_POST['section_6_conteudo_144'])){
    $section_6_conteudo_144 = $_POST['section_6_conteudo_144'];
}else{
    $section_6_conteudo_144 = '';
}
if(isset($_POST['section_6_image_alt_145']) && !empty($_POST['section_6_image_alt_145'])){
    $section_6_image_alt_145 = $_POST['section_6_image_alt_145'];
}else{
    $section_6_image_alt_145 = '';
}
if(isset($_POST['section_6_conteudo_146']) && !empty($_POST['section_6_conteudo_146'])){
    $section_6_conteudo_146 = $_POST['section_6_conteudo_146'];
}else{
    $section_6_conteudo_146 = '';
}
if(isset($_POST['section_6_conteudo_147']) && !empty($_POST['section_6_conteudo_147'])){
    $section_6_conteudo_147 = $_POST['section_6_conteudo_147'];
}else{
    $section_6_conteudo_147 = '';
}
if(isset($_POST['section_6_conteudo_148']) && !empty($_POST['section_6_conteudo_148'])){
    $section_6_conteudo_148 = $_POST['section_6_conteudo_148'];
}else{
    $section_6_conteudo_148 = '';
}
if(isset($_POST['section_6_image_alt_149']) && !empty($_POST['section_6_image_alt_149'])){
    $section_6_image_alt_149 = $_POST['section_6_image_alt_149'];
}else{
    $section_6_image_alt_149 = '';
}
if(isset($_POST['section_6_conteudo_150']) && !empty($_POST['section_6_conteudo_150'])){
    $section_6_conteudo_150 = $_POST['section_6_conteudo_150'];
}else{
    $section_6_conteudo_150 = '';
}
if(isset($_POST['section_6_conteudo_151']) && !empty($_POST['section_6_conteudo_151'])){
    $section_6_conteudo_151 = $_POST['section_6_conteudo_151'];
}else{
    $section_6_conteudo_151 = '';
}
if(isset($_POST['section_6_conteudo_152']) && !empty($_POST['section_6_conteudo_152'])){
    $section_6_conteudo_152 = $_POST['section_6_conteudo_152'];
}else{
    $section_6_conteudo_152 = '';
}
if(isset($_POST['section_6_image_alt_153']) && !empty($_POST['section_6_image_alt_153'])){
    $section_6_image_alt_153 = $_POST['section_6_image_alt_153'];
}else{
    $section_6_image_alt_153 = '';
}
if(isset($_POST['section_6_conteudo_154']) && !empty($_POST['section_6_conteudo_154'])){
    $section_6_conteudo_154 = $_POST['section_6_conteudo_154'];
}else{
    $section_6_conteudo_154 = '';
}
if(isset($_POST['section_6_conteudo_155']) && !empty($_POST['section_6_conteudo_155'])){
    $section_6_conteudo_155 = $_POST['section_6_conteudo_155'];
}else{
    $section_6_conteudo_155 = '';
}
if(isset($_POST['section_6_conteudo_156']) && !empty($_POST['section_6_conteudo_156'])){
    $section_6_conteudo_156 = $_POST['section_6_conteudo_156'];
}else{
    $section_6_conteudo_156 = '';
}
if(isset($_POST['section_6_image_alt_157']) && !empty($_POST['section_6_image_alt_157'])){
    $section_6_image_alt_157 = $_POST['section_6_image_alt_157'];
}else{
    $section_6_image_alt_157 = '';
}
if(isset($_POST['section_7_image_alt_158']) && !empty($_POST['section_7_image_alt_158'])){
    $section_7_image_alt_158 = $_POST['section_7_image_alt_158'];
}else{
    $section_7_image_alt_158 = '';
}
if(isset($_POST['section_7_image_alt_159']) && !empty($_POST['section_7_image_alt_159'])){
    $section_7_image_alt_159 = $_POST['section_7_image_alt_159'];
}else{
    $section_7_image_alt_159 = '';
}
if(isset($_POST['section_7_image_alt_160']) && !empty($_POST['section_7_image_alt_160'])){
    $section_7_image_alt_160 = $_POST['section_7_image_alt_160'];
}else{
    $section_7_image_alt_160 = '';
}
if(isset($_POST['section_7_image_alt_161']) && !empty($_POST['section_7_image_alt_161'])){
    $section_7_image_alt_161 = $_POST['section_7_image_alt_161'];
}else{
    $section_7_image_alt_161 = '';
}
if(isset($_POST['section_7_image_alt_162']) && !empty($_POST['section_7_image_alt_162'])){
    $section_7_image_alt_162 = $_POST['section_7_image_alt_162'];
}else{
    $section_7_image_alt_162 = '';
}
if(isset($_POST['section_7_image_alt_163']) && !empty($_POST['section_7_image_alt_163'])){
    $section_7_image_alt_163 = $_POST['section_7_image_alt_163'];
}else{
    $section_7_image_alt_163 = '';
}
if(isset($_POST['section_7_image_alt_164']) && !empty($_POST['section_7_image_alt_164'])){
    $section_7_image_alt_164 = $_POST['section_7_image_alt_164'];
}else{
    $section_7_image_alt_164 = '';
}
if(isset($_POST['section_7_conteudo_165']) && !empty($_POST['section_7_conteudo_165'])){
    $section_7_conteudo_165 = $_POST['section_7_conteudo_165'];
}else{
    $section_7_conteudo_165 = '';
}
if(isset($_POST['section_7_conteudo_166']) && !empty($_POST['section_7_conteudo_166'])){
    $section_7_conteudo_166 = $_POST['section_7_conteudo_166'];
}else{
    $section_7_conteudo_166 = '';
}
if(isset($_POST['section_7_image_alt_167']) && !empty($_POST['section_7_image_alt_167'])){
    $section_7_image_alt_167 = $_POST['section_7_image_alt_167'];
}else{
    $section_7_image_alt_167 = '';
}
if(isset($_POST['section_7_conteudo_168']) && !empty($_POST['section_7_conteudo_168'])){
    $section_7_conteudo_168 = $_POST['section_7_conteudo_168'];
}else{
    $section_7_conteudo_168 = '';
}
if(isset($_POST['section_7_conteudo_169']) && !empty($_POST['section_7_conteudo_169'])){
    $section_7_conteudo_169 = $_POST['section_7_conteudo_169'];
}else{
    $section_7_conteudo_169 = '';
}
if(isset($_POST['section_7_conteudo_170']) && !empty($_POST['section_7_conteudo_170'])){
    $section_7_conteudo_170 = $_POST['section_7_conteudo_170'];
}else{
    $section_7_conteudo_170 = '';
}
if(isset($_POST['section_7_image_alt_171']) && !empty($_POST['section_7_image_alt_171'])){
    $section_7_image_alt_171 = $_POST['section_7_image_alt_171'];
}else{
    $section_7_image_alt_171 = '';
}
if(isset($_POST['section_7_conteudo_172']) && !empty($_POST['section_7_conteudo_172'])){
    $section_7_conteudo_172 = $_POST['section_7_conteudo_172'];
}else{
    $section_7_conteudo_172 = '';
}
if(isset($_POST['section_7_conteudo_173']) && !empty($_POST['section_7_conteudo_173'])){
    $section_7_conteudo_173 = $_POST['section_7_conteudo_173'];
}else{
    $section_7_conteudo_173 = '';
}
if(isset($_POST['section_7_link_174']) && !empty($_POST['section_7_link_174'])){
    $section_7_link_174 = $_POST['section_7_link_174'];
}else{
    $section_7_link_174 = '';
}
if(isset($_POST['section_7_link_alt_174']) && !empty($_POST['section_7_link_alt_174'])){
    $section_7_link_alt_174 = $_POST['section_7_link_alt_174'];
}else{
    $section_7_link_alt_174 = '';
}
if(isset($_POST['section_7_link_conteudo_174']) && !empty($_POST['section_7_link_conteudo_174'])){
    $section_7_link_conteudo_174 = $_POST['section_7_link_conteudo_174'];
}else{
    $section_7_link_conteudo_174 = '';
}
if(isset($_POST['section_7_conteudo_175']) && !empty($_POST['section_7_conteudo_175'])){
    $section_7_conteudo_175 = $_POST['section_7_conteudo_175'];
}else{
    $section_7_conteudo_175 = '';
}
if(isset($_POST['section_7_link_176']) && !empty($_POST['section_7_link_176'])){
    $section_7_link_176 = $_POST['section_7_link_176'];
}else{
    $section_7_link_176 = '';
}
if(isset($_POST['section_7_link_alt_176']) && !empty($_POST['section_7_link_alt_176'])){
    $section_7_link_alt_176 = $_POST['section_7_link_alt_176'];
}else{
    $section_7_link_alt_176 = '';
}
if(isset($_POST['section_7_link_conteudo_176']) && !empty($_POST['section_7_link_conteudo_176'])){
    $section_7_link_conteudo_176 = $_POST['section_7_link_conteudo_176'];
}else{
    $section_7_link_conteudo_176 = '';
}
if(isset($_POST['section_7_conteudo_177']) && !empty($_POST['section_7_conteudo_177'])){
    $section_7_conteudo_177 = $_POST['section_7_conteudo_177'];
}else{
    $section_7_conteudo_177 = '';
}
if(isset($_POST['section_7_image_alt_178']) && !empty($_POST['section_7_image_alt_178'])){
    $section_7_image_alt_178 = $_POST['section_7_image_alt_178'];
}else{
    $section_7_image_alt_178 = '';
}
if(isset($_POST['section_8_image_alt_179']) && !empty($_POST['section_8_image_alt_179'])){
    $section_8_image_alt_179 = $_POST['section_8_image_alt_179'];
}else{
    $section_8_image_alt_179 = '';
}
if(isset($_POST['section_8_conteudo_180']) && !empty($_POST['section_8_conteudo_180'])){
    $section_8_conteudo_180 = $_POST['section_8_conteudo_180'];
}else{
    $section_8_conteudo_180 = '';
}
if(isset($_POST['section_8_conteudo_181']) && !empty($_POST['section_8_conteudo_181'])){
    $section_8_conteudo_181 = $_POST['section_8_conteudo_181'];
}else{
    $section_8_conteudo_181 = '';
}
if(isset($_POST['section_8_image_alt_182']) && !empty($_POST['section_8_image_alt_182'])){
    $section_8_image_alt_182 = $_POST['section_8_image_alt_182'];
}else{
    $section_8_image_alt_182 = '';
}
if(isset($_POST['section_8_image_alt_183']) && !empty($_POST['section_8_image_alt_183'])){
    $section_8_image_alt_183 = $_POST['section_8_image_alt_183'];
}else{
    $section_8_image_alt_183 = '';
}
if(isset($_POST['section_8_conteudo_184']) && !empty($_POST['section_8_conteudo_184'])){
    $section_8_conteudo_184 = $_POST['section_8_conteudo_184'];
}else{
    $section_8_conteudo_184 = '';
}
if(isset($_POST['section_8_conteudo_185']) && !empty($_POST['section_8_conteudo_185'])){
    $section_8_conteudo_185 = $_POST['section_8_conteudo_185'];
}else{
    $section_8_conteudo_185 = '';
}
if(isset($_POST['section_8_conteudo_186']) && !empty($_POST['section_8_conteudo_186'])){
    $section_8_conteudo_186 = $_POST['section_8_conteudo_186'];
}else{
    $section_8_conteudo_186 = '';
}
if(isset($_POST['section_8_conteudo_187']) && !empty($_POST['section_8_conteudo_187'])){
    $section_8_conteudo_187 = $_POST['section_8_conteudo_187'];
}else{
    $section_8_conteudo_187 = '';
}
if(isset($_POST['section_8_link_188']) && !empty($_POST['section_8_link_188'])){
    $section_8_link_188 = $_POST['section_8_link_188'];
}else{
    $section_8_link_188 = '';
}
if(isset($_POST['section_8_link_alt_188']) && !empty($_POST['section_8_link_alt_188'])){
    $section_8_link_alt_188 = $_POST['section_8_link_alt_188'];
}else{
    $section_8_link_alt_188 = '';
}
if(isset($_POST['section_8_link_conteudo_188']) && !empty($_POST['section_8_link_conteudo_188'])){
    $section_8_link_conteudo_188 = $_POST['section_8_link_conteudo_188'];
}else{
    $section_8_link_conteudo_188 = '';
}
if(isset($_POST['section_8_image_alt_189']) && !empty($_POST['section_8_image_alt_189'])){
    $section_8_image_alt_189 = $_POST['section_8_image_alt_189'];
}else{
    $section_8_image_alt_189 = '';
}
if(isset($_POST['section_8_image_alt_190']) && !empty($_POST['section_8_image_alt_190'])){
    $section_8_image_alt_190 = $_POST['section_8_image_alt_190'];
}else{
    $section_8_image_alt_190 = '';
}
if(isset($_POST['section_8_conteudo_191']) && !empty($_POST['section_8_conteudo_191'])){
    $section_8_conteudo_191 = $_POST['section_8_conteudo_191'];
}else{
    $section_8_conteudo_191 = '';
}
if(isset($_POST['section_8_conteudo_192']) && !empty($_POST['section_8_conteudo_192'])){
    $section_8_conteudo_192 = $_POST['section_8_conteudo_192'];
}else{
    $section_8_conteudo_192 = '';
}
if(isset($_POST['section_8_conteudo_193']) && !empty($_POST['section_8_conteudo_193'])){
    $section_8_conteudo_193 = $_POST['section_8_conteudo_193'];
}else{
    $section_8_conteudo_193 = '';
}
if(isset($_POST['section_8_conteudo_194']) && !empty($_POST['section_8_conteudo_194'])){
    $section_8_conteudo_194 = $_POST['section_8_conteudo_194'];
}else{
    $section_8_conteudo_194 = '';
}
if(isset($_POST['section_8_link_195']) && !empty($_POST['section_8_link_195'])){
    $section_8_link_195 = $_POST['section_8_link_195'];
}else{
    $section_8_link_195 = '';
}
if(isset($_POST['section_8_link_alt_195']) && !empty($_POST['section_8_link_alt_195'])){
    $section_8_link_alt_195 = $_POST['section_8_link_alt_195'];
}else{
    $section_8_link_alt_195 = '';
}
if(isset($_POST['section_8_link_conteudo_195']) && !empty($_POST['section_8_link_conteudo_195'])){
    $section_8_link_conteudo_195 = $_POST['section_8_link_conteudo_195'];
}else{
    $section_8_link_conteudo_195 = '';
}
if(isset($_POST['section_8_image_alt_196']) && !empty($_POST['section_8_image_alt_196'])){
    $section_8_image_alt_196 = $_POST['section_8_image_alt_196'];
}else{
    $section_8_image_alt_196 = '';
}
if(isset($_POST['section_8_image_alt_197']) && !empty($_POST['section_8_image_alt_197'])){
    $section_8_image_alt_197 = $_POST['section_8_image_alt_197'];
}else{
    $section_8_image_alt_197 = '';
}
if(isset($_POST['section_8_conteudo_198']) && !empty($_POST['section_8_conteudo_198'])){
    $section_8_conteudo_198 = $_POST['section_8_conteudo_198'];
}else{
    $section_8_conteudo_198 = '';
}
if(isset($_POST['section_8_conteudo_199']) && !empty($_POST['section_8_conteudo_199'])){
    $section_8_conteudo_199 = $_POST['section_8_conteudo_199'];
}else{
    $section_8_conteudo_199 = '';
}
if(isset($_POST['section_8_conteudo_200']) && !empty($_POST['section_8_conteudo_200'])){
    $section_8_conteudo_200 = $_POST['section_8_conteudo_200'];
}else{
    $section_8_conteudo_200 = '';
}
if(isset($_POST['section_8_conteudo_201']) && !empty($_POST['section_8_conteudo_201'])){
    $section_8_conteudo_201 = $_POST['section_8_conteudo_201'];
}else{
    $section_8_conteudo_201 = '';
}
if(isset($_POST['section_8_link_202']) && !empty($_POST['section_8_link_202'])){
    $section_8_link_202 = $_POST['section_8_link_202'];
}else{
    $section_8_link_202 = '';
}
if(isset($_POST['section_8_link_alt_202']) && !empty($_POST['section_8_link_alt_202'])){
    $section_8_link_alt_202 = $_POST['section_8_link_alt_202'];
}else{
    $section_8_link_alt_202 = '';
}
if(isset($_POST['section_8_link_conteudo_202']) && !empty($_POST['section_8_link_conteudo_202'])){
    $section_8_link_conteudo_202 = $_POST['section_8_link_conteudo_202'];
}else{
    $section_8_link_conteudo_202 = '';
}
if(isset($_POST['section_8_image_alt_203']) && !empty($_POST['section_8_image_alt_203'])){
    $section_8_image_alt_203 = $_POST['section_8_image_alt_203'];
}else{
    $section_8_image_alt_203 = '';
}
if(isset($_POST['section_8_image_alt_204']) && !empty($_POST['section_8_image_alt_204'])){
    $section_8_image_alt_204 = $_POST['section_8_image_alt_204'];
}else{
    $section_8_image_alt_204 = '';
}
if(isset($_POST['section_8_conteudo_205']) && !empty($_POST['section_8_conteudo_205'])){
    $section_8_conteudo_205 = $_POST['section_8_conteudo_205'];
}else{
    $section_8_conteudo_205 = '';
}
if(isset($_POST['section_8_conteudo_206']) && !empty($_POST['section_8_conteudo_206'])){
    $section_8_conteudo_206 = $_POST['section_8_conteudo_206'];
}else{
    $section_8_conteudo_206 = '';
}
if(isset($_POST['section_8_conteudo_207']) && !empty($_POST['section_8_conteudo_207'])){
    $section_8_conteudo_207 = $_POST['section_8_conteudo_207'];
}else{
    $section_8_conteudo_207 = '';
}
if(isset($_POST['section_8_conteudo_208']) && !empty($_POST['section_8_conteudo_208'])){
    $section_8_conteudo_208 = $_POST['section_8_conteudo_208'];
}else{
    $section_8_conteudo_208 = '';
}
if(isset($_POST['section_8_link_209']) && !empty($_POST['section_8_link_209'])){
    $section_8_link_209 = $_POST['section_8_link_209'];
}else{
    $section_8_link_209 = '';
}
if(isset($_POST['section_8_link_alt_209']) && !empty($_POST['section_8_link_alt_209'])){
    $section_8_link_alt_209 = $_POST['section_8_link_alt_209'];
}else{
    $section_8_link_alt_209 = '';
}
if(isset($_POST['section_8_link_conteudo_209']) && !empty($_POST['section_8_link_conteudo_209'])){
    $section_8_link_conteudo_209 = $_POST['section_8_link_conteudo_209'];
}else{
    $section_8_link_conteudo_209 = '';
}
if(isset($_POST['section_8_image_alt_210']) && !empty($_POST['section_8_image_alt_210'])){
    $section_8_image_alt_210 = $_POST['section_8_image_alt_210'];
}else{
    $section_8_image_alt_210 = '';
}
if(isset($_POST['section_8_image_alt_211']) && !empty($_POST['section_8_image_alt_211'])){
    $section_8_image_alt_211 = $_POST['section_8_image_alt_211'];
}else{
    $section_8_image_alt_211 = '';
}
if(isset($_POST['section_8_conteudo_212']) && !empty($_POST['section_8_conteudo_212'])){
    $section_8_conteudo_212 = $_POST['section_8_conteudo_212'];
}else{
    $section_8_conteudo_212 = '';
}
if(isset($_POST['section_8_conteudo_213']) && !empty($_POST['section_8_conteudo_213'])){
    $section_8_conteudo_213 = $_POST['section_8_conteudo_213'];
}else{
    $section_8_conteudo_213 = '';
}
if(isset($_POST['section_8_conteudo_214']) && !empty($_POST['section_8_conteudo_214'])){
    $section_8_conteudo_214 = $_POST['section_8_conteudo_214'];
}else{
    $section_8_conteudo_214 = '';
}
if(isset($_POST['section_8_conteudo_215']) && !empty($_POST['section_8_conteudo_215'])){
    $section_8_conteudo_215 = $_POST['section_8_conteudo_215'];
}else{
    $section_8_conteudo_215 = '';
}
if(isset($_POST['section_8_link_216']) && !empty($_POST['section_8_link_216'])){
    $section_8_link_216 = $_POST['section_8_link_216'];
}else{
    $section_8_link_216 = '';
}
if(isset($_POST['section_8_link_alt_216']) && !empty($_POST['section_8_link_alt_216'])){
    $section_8_link_alt_216 = $_POST['section_8_link_alt_216'];
}else{
    $section_8_link_alt_216 = '';
}
if(isset($_POST['section_8_link_conteudo_216']) && !empty($_POST['section_8_link_conteudo_216'])){
    $section_8_link_conteudo_216 = $_POST['section_8_link_conteudo_216'];
}else{
    $section_8_link_conteudo_216 = '';
}
if(isset($_POST['section_8_image_alt_217']) && !empty($_POST['section_8_image_alt_217'])){
    $section_8_image_alt_217 = $_POST['section_8_image_alt_217'];
}else{
    $section_8_image_alt_217 = '';
}
if(isset($_POST['section_8_image_alt_218']) && !empty($_POST['section_8_image_alt_218'])){
    $section_8_image_alt_218 = $_POST['section_8_image_alt_218'];
}else{
    $section_8_image_alt_218 = '';
}
if(isset($_POST['section_8_conteudo_219']) && !empty($_POST['section_8_conteudo_219'])){
    $section_8_conteudo_219 = $_POST['section_8_conteudo_219'];
}else{
    $section_8_conteudo_219 = '';
}
if(isset($_POST['section_8_conteudo_220']) && !empty($_POST['section_8_conteudo_220'])){
    $section_8_conteudo_220 = $_POST['section_8_conteudo_220'];
}else{
    $section_8_conteudo_220 = '';
}
if(isset($_POST['section_8_conteudo_221']) && !empty($_POST['section_8_conteudo_221'])){
    $section_8_conteudo_221 = $_POST['section_8_conteudo_221'];
}else{
    $section_8_conteudo_221 = '';
}
if(isset($_POST['section_8_conteudo_222']) && !empty($_POST['section_8_conteudo_222'])){
    $section_8_conteudo_222 = $_POST['section_8_conteudo_222'];
}else{
    $section_8_conteudo_222 = '';
}
if(isset($_POST['section_8_link_223']) && !empty($_POST['section_8_link_223'])){
    $section_8_link_223 = $_POST['section_8_link_223'];
}else{
    $section_8_link_223 = '';
}
if(isset($_POST['section_8_link_alt_223']) && !empty($_POST['section_8_link_alt_223'])){
    $section_8_link_alt_223 = $_POST['section_8_link_alt_223'];
}else{
    $section_8_link_alt_223 = '';
}
if(isset($_POST['section_8_link_conteudo_223']) && !empty($_POST['section_8_link_conteudo_223'])){
    $section_8_link_conteudo_223 = $_POST['section_8_link_conteudo_223'];
}else{
    $section_8_link_conteudo_223 = '';
}
if(isset($_POST['section_8_image_alt_224']) && !empty($_POST['section_8_image_alt_224'])){
    $section_8_image_alt_224 = $_POST['section_8_image_alt_224'];
}else{
    $section_8_image_alt_224 = '';
}
if(isset($_POST['section_8_image_alt_225']) && !empty($_POST['section_8_image_alt_225'])){
    $section_8_image_alt_225 = $_POST['section_8_image_alt_225'];
}else{
    $section_8_image_alt_225 = '';
}
if(isset($_POST['section_8_conteudo_226']) && !empty($_POST['section_8_conteudo_226'])){
    $section_8_conteudo_226 = $_POST['section_8_conteudo_226'];
}else{
    $section_8_conteudo_226 = '';
}
if(isset($_POST['section_8_conteudo_227']) && !empty($_POST['section_8_conteudo_227'])){
    $section_8_conteudo_227 = $_POST['section_8_conteudo_227'];
}else{
    $section_8_conteudo_227 = '';
}
if(isset($_POST['section_8_conteudo_228']) && !empty($_POST['section_8_conteudo_228'])){
    $section_8_conteudo_228 = $_POST['section_8_conteudo_228'];
}else{
    $section_8_conteudo_228 = '';
}
if(isset($_POST['section_8_conteudo_229']) && !empty($_POST['section_8_conteudo_229'])){
    $section_8_conteudo_229 = $_POST['section_8_conteudo_229'];
}else{
    $section_8_conteudo_229 = '';
}
if(isset($_POST['section_8_link_230']) && !empty($_POST['section_8_link_230'])){
    $section_8_link_230 = $_POST['section_8_link_230'];
}else{
    $section_8_link_230 = '';
}
if(isset($_POST['section_8_link_alt_230']) && !empty($_POST['section_8_link_alt_230'])){
    $section_8_link_alt_230 = $_POST['section_8_link_alt_230'];
}else{
    $section_8_link_alt_230 = '';
}
if(isset($_POST['section_8_link_conteudo_230']) && !empty($_POST['section_8_link_conteudo_230'])){
    $section_8_link_conteudo_230 = $_POST['section_8_link_conteudo_230'];
}else{
    $section_8_link_conteudo_230 = '';
}
if(isset($_POST['section_8_image_alt_231']) && !empty($_POST['section_8_image_alt_231'])){
    $section_8_image_alt_231 = $_POST['section_8_image_alt_231'];
}else{
    $section_8_image_alt_231 = '';
}
if(isset($_POST['section_8_image_alt_232']) && !empty($_POST['section_8_image_alt_232'])){
    $section_8_image_alt_232 = $_POST['section_8_image_alt_232'];
}else{
    $section_8_image_alt_232 = '';
}
if(isset($_POST['section_8_conteudo_233']) && !empty($_POST['section_8_conteudo_233'])){
    $section_8_conteudo_233 = $_POST['section_8_conteudo_233'];
}else{
    $section_8_conteudo_233 = '';
}
if(isset($_POST['section_8_conteudo_234']) && !empty($_POST['section_8_conteudo_234'])){
    $section_8_conteudo_234 = $_POST['section_8_conteudo_234'];
}else{
    $section_8_conteudo_234 = '';
}
if(isset($_POST['section_8_conteudo_235']) && !empty($_POST['section_8_conteudo_235'])){
    $section_8_conteudo_235 = $_POST['section_8_conteudo_235'];
}else{
    $section_8_conteudo_235 = '';
}
if(isset($_POST['section_8_conteudo_236']) && !empty($_POST['section_8_conteudo_236'])){
    $section_8_conteudo_236 = $_POST['section_8_conteudo_236'];
}else{
    $section_8_conteudo_236 = '';
}
if(isset($_POST['section_8_link_237']) && !empty($_POST['section_8_link_237'])){
    $section_8_link_237 = $_POST['section_8_link_237'];
}else{
    $section_8_link_237 = '';
}
if(isset($_POST['section_8_link_alt_237']) && !empty($_POST['section_8_link_alt_237'])){
    $section_8_link_alt_237 = $_POST['section_8_link_alt_237'];
}else{
    $section_8_link_alt_237 = '';
}
if(isset($_POST['section_8_link_conteudo_237']) && !empty($_POST['section_8_link_conteudo_237'])){
    $section_8_link_conteudo_237 = $_POST['section_8_link_conteudo_237'];
}else{
    $section_8_link_conteudo_237 = '';
}
if(isset($_POST['section_8_image_alt_238']) && !empty($_POST['section_8_image_alt_238'])){
    $section_8_image_alt_238 = $_POST['section_8_image_alt_238'];
}else{
    $section_8_image_alt_238 = '';
}
if(isset($_POST['section_8_image_alt_239']) && !empty($_POST['section_8_image_alt_239'])){
    $section_8_image_alt_239 = $_POST['section_8_image_alt_239'];
}else{
    $section_8_image_alt_239 = '';
}
if(isset($_POST['section_8_conteudo_240']) && !empty($_POST['section_8_conteudo_240'])){
    $section_8_conteudo_240 = $_POST['section_8_conteudo_240'];
}else{
    $section_8_conteudo_240 = '';
}
if(isset($_POST['section_8_conteudo_241']) && !empty($_POST['section_8_conteudo_241'])){
    $section_8_conteudo_241 = $_POST['section_8_conteudo_241'];
}else{
    $section_8_conteudo_241 = '';
}
if(isset($_POST['section_8_conteudo_242']) && !empty($_POST['section_8_conteudo_242'])){
    $section_8_conteudo_242 = $_POST['section_8_conteudo_242'];
}else{
    $section_8_conteudo_242 = '';
}
if(isset($_POST['section_8_conteudo_243']) && !empty($_POST['section_8_conteudo_243'])){
    $section_8_conteudo_243 = $_POST['section_8_conteudo_243'];
}else{
    $section_8_conteudo_243 = '';
}
if(isset($_POST['section_8_link_244']) && !empty($_POST['section_8_link_244'])){
    $section_8_link_244 = $_POST['section_8_link_244'];
}else{
    $section_8_link_244 = '';
}
if(isset($_POST['section_8_link_alt_244']) && !empty($_POST['section_8_link_alt_244'])){
    $section_8_link_alt_244 = $_POST['section_8_link_alt_244'];
}else{
    $section_8_link_alt_244 = '';
}
if(isset($_POST['section_8_link_conteudo_244']) && !empty($_POST['section_8_link_conteudo_244'])){
    $section_8_link_conteudo_244 = $_POST['section_8_link_conteudo_244'];
}else{
    $section_8_link_conteudo_244 = '';
}
if(isset($_POST['section_8_image_alt_245']) && !empty($_POST['section_8_image_alt_245'])){
    $section_8_image_alt_245 = $_POST['section_8_image_alt_245'];
}else{
    $section_8_image_alt_245 = '';
}
if(isset($_POST['section_8_image_alt_246']) && !empty($_POST['section_8_image_alt_246'])){
    $section_8_image_alt_246 = $_POST['section_8_image_alt_246'];
}else{
    $section_8_image_alt_246 = '';
}
if(isset($_POST['section_9_image_alt_247']) && !empty($_POST['section_9_image_alt_247'])){
    $section_9_image_alt_247 = $_POST['section_9_image_alt_247'];
}else{
    $section_9_image_alt_247 = '';
}
if(isset($_POST['section_9_image_alt_248']) && !empty($_POST['section_9_image_alt_248'])){
    $section_9_image_alt_248 = $_POST['section_9_image_alt_248'];
}else{
    $section_9_image_alt_248 = '';
}
if(isset($_POST['section_9_link_249']) && !empty($_POST['section_9_link_249'])){
    $section_9_link_249 = $_POST['section_9_link_249'];
}else{
    $section_9_link_249 = '';
}
if(isset($_POST['section_9_link_alt_249']) && !empty($_POST['section_9_link_alt_249'])){
    $section_9_link_alt_249 = $_POST['section_9_link_alt_249'];
}else{
    $section_9_link_alt_249 = '';
}
if(isset($_POST['section_9_image_alt_250']) && !empty($_POST['section_9_image_alt_250'])){
    $section_9_image_alt_250 = $_POST['section_9_image_alt_250'];
}else{
    $section_9_image_alt_250 = '';
}
if(isset($_POST['section_9_conteudo_251']) && !empty($_POST['section_9_conteudo_251'])){
    $section_9_conteudo_251 = $_POST['section_9_conteudo_251'];
}else{
    $section_9_conteudo_251 = '';
}
if(isset($_POST['section_9_image_alt_252']) && !empty($_POST['section_9_image_alt_252'])){
    $section_9_image_alt_252 = $_POST['section_9_image_alt_252'];
}else{
    $section_9_image_alt_252 = '';
}
if(isset($_POST['section_9_conteudo_253']) && !empty($_POST['section_9_conteudo_253'])){
    $section_9_conteudo_253 = $_POST['section_9_conteudo_253'];
}else{
    $section_9_conteudo_253 = '';
}
if(isset($_POST['section_9_link_254']) && !empty($_POST['section_9_link_254'])){
    $section_9_link_254 = $_POST['section_9_link_254'];
}else{
    $section_9_link_254 = '';
}
if(isset($_POST['section_9_link_alt_254']) && !empty($_POST['section_9_link_alt_254'])){
    $section_9_link_alt_254 = $_POST['section_9_link_alt_254'];
}else{
    $section_9_link_alt_254 = '';
}
if(isset($_POST['section_9_link_conteudo_254']) && !empty($_POST['section_9_link_conteudo_254'])){
    $section_9_link_conteudo_254 = $_POST['section_9_link_conteudo_254'];
}else{
    $section_9_link_conteudo_254 = '';
}
if(isset($_POST['section_9_image_alt_255']) && !empty($_POST['section_9_image_alt_255'])){
    $section_9_image_alt_255 = $_POST['section_9_image_alt_255'];
}else{
    $section_9_image_alt_255 = '';
}
if(isset($_POST['section_9_conteudo_256']) && !empty($_POST['section_9_conteudo_256'])){
    $section_9_conteudo_256 = $_POST['section_9_conteudo_256'];
}else{
    $section_9_conteudo_256 = '';
}
if(isset($_POST['section_9_link_257']) && !empty($_POST['section_9_link_257'])){
    $section_9_link_257 = $_POST['section_9_link_257'];
}else{
    $section_9_link_257 = '';
}
if(isset($_POST['section_9_link_alt_257']) && !empty($_POST['section_9_link_alt_257'])){
    $section_9_link_alt_257 = $_POST['section_9_link_alt_257'];
}else{
    $section_9_link_alt_257 = '';
}
if(isset($_POST['section_9_link_conteudo_257']) && !empty($_POST['section_9_link_conteudo_257'])){
    $section_9_link_conteudo_257 = $_POST['section_9_link_conteudo_257'];
}else{
    $section_9_link_conteudo_257 = '';
}
if(isset($_POST['section_9_conteudo_258']) && !empty($_POST['section_9_conteudo_258'])){
    $section_9_conteudo_258 = $_POST['section_9_conteudo_258'];
}else{
    $section_9_conteudo_258 = '';
}
if(isset($_POST['section_9_link_259']) && !empty($_POST['section_9_link_259'])){
    $section_9_link_259 = $_POST['section_9_link_259'];
}else{
    $section_9_link_259 = '';
}
if(isset($_POST['section_9_link_alt_259']) && !empty($_POST['section_9_link_alt_259'])){
    $section_9_link_alt_259 = $_POST['section_9_link_alt_259'];
}else{
    $section_9_link_alt_259 = '';
}
if(isset($_POST['section_9_link_conteudo_259']) && !empty($_POST['section_9_link_conteudo_259'])){
    $section_9_link_conteudo_259 = $_POST['section_9_link_conteudo_259'];
}else{
    $section_9_link_conteudo_259 = '';
}
if(isset($_POST['section_9_link_260']) && !empty($_POST['section_9_link_260'])){
    $section_9_link_260 = $_POST['section_9_link_260'];
}else{
    $section_9_link_260 = '';
}
if(isset($_POST['section_9_link_alt_260']) && !empty($_POST['section_9_link_alt_260'])){
    $section_9_link_alt_260 = $_POST['section_9_link_alt_260'];
}else{
    $section_9_link_alt_260 = '';
}
if(isset($_POST['section_9_link_conteudo_260']) && !empty($_POST['section_9_link_conteudo_260'])){
    $section_9_link_conteudo_260 = $_POST['section_9_link_conteudo_260'];
}else{
    $section_9_link_conteudo_260 = '';
}
if(isset($_POST['section_9_link_261']) && !empty($_POST['section_9_link_261'])){
    $section_9_link_261 = $_POST['section_9_link_261'];
}else{
    $section_9_link_261 = '';
}
if(isset($_POST['section_9_link_alt_261']) && !empty($_POST['section_9_link_alt_261'])){
    $section_9_link_alt_261 = $_POST['section_9_link_alt_261'];
}else{
    $section_9_link_alt_261 = '';
}
if(isset($_POST['section_9_link_conteudo_261']) && !empty($_POST['section_9_link_conteudo_261'])){
    $section_9_link_conteudo_261 = $_POST['section_9_link_conteudo_261'];
}else{
    $section_9_link_conteudo_261 = '';
}
if(isset($_POST['section_9_link_262']) && !empty($_POST['section_9_link_262'])){
    $section_9_link_262 = $_POST['section_9_link_262'];
}else{
    $section_9_link_262 = '';
}
if(isset($_POST['section_9_link_alt_262']) && !empty($_POST['section_9_link_alt_262'])){
    $section_9_link_alt_262 = $_POST['section_9_link_alt_262'];
}else{
    $section_9_link_alt_262 = '';
}
if(isset($_POST['section_9_link_conteudo_262']) && !empty($_POST['section_9_link_conteudo_262'])){
    $section_9_link_conteudo_262 = $_POST['section_9_link_conteudo_262'];
}else{
    $section_9_link_conteudo_262 = '';
}
if(isset($_POST['section_9_link_263']) && !empty($_POST['section_9_link_263'])){
    $section_9_link_263 = $_POST['section_9_link_263'];
}else{
    $section_9_link_263 = '';
}
if(isset($_POST['section_9_link_alt_263']) && !empty($_POST['section_9_link_alt_263'])){
    $section_9_link_alt_263 = $_POST['section_9_link_alt_263'];
}else{
    $section_9_link_alt_263 = '';
}
if(isset($_POST['section_9_link_conteudo_263']) && !empty($_POST['section_9_link_conteudo_263'])){
    $section_9_link_conteudo_263 = $_POST['section_9_link_conteudo_263'];
}else{
    $section_9_link_conteudo_263 = '';
}
if(isset($_POST['section_9_conteudo_264']) && !empty($_POST['section_9_conteudo_264'])){
    $section_9_conteudo_264 = $_POST['section_9_conteudo_264'];
}else{
    $section_9_conteudo_264 = '';
}
if(isset($_POST['section_9_link_265']) && !empty($_POST['section_9_link_265'])){
    $section_9_link_265 = $_POST['section_9_link_265'];
}else{
    $section_9_link_265 = '';
}
if(isset($_POST['section_9_link_alt_265']) && !empty($_POST['section_9_link_alt_265'])){
    $section_9_link_alt_265 = $_POST['section_9_link_alt_265'];
}else{
    $section_9_link_alt_265 = '';
}
if(isset($_POST['section_9_link_conteudo_265']) && !empty($_POST['section_9_link_conteudo_265'])){
    $section_9_link_conteudo_265 = $_POST['section_9_link_conteudo_265'];
}else{
    $section_9_link_conteudo_265 = '';
}
if(isset($_POST['section_9_link_266']) && !empty($_POST['section_9_link_266'])){
    $section_9_link_266 = $_POST['section_9_link_266'];
}else{
    $section_9_link_266 = '';
}
if(isset($_POST['section_9_link_alt_266']) && !empty($_POST['section_9_link_alt_266'])){
    $section_9_link_alt_266 = $_POST['section_9_link_alt_266'];
}else{
    $section_9_link_alt_266 = '';
}
if(isset($_POST['section_9_link_conteudo_266']) && !empty($_POST['section_9_link_conteudo_266'])){
    $section_9_link_conteudo_266 = $_POST['section_9_link_conteudo_266'];
}else{
    $section_9_link_conteudo_266 = '';
}
if(isset($_POST['section_9_link_267']) && !empty($_POST['section_9_link_267'])){
    $section_9_link_267 = $_POST['section_9_link_267'];
}else{
    $section_9_link_267 = '';
}
if(isset($_POST['section_9_link_alt_267']) && !empty($_POST['section_9_link_alt_267'])){
    $section_9_link_alt_267 = $_POST['section_9_link_alt_267'];
}else{
    $section_9_link_alt_267 = '';
}
if(isset($_POST['section_9_link_conteudo_267']) && !empty($_POST['section_9_link_conteudo_267'])){
    $section_9_link_conteudo_267 = $_POST['section_9_link_conteudo_267'];
}else{
    $section_9_link_conteudo_267 = '';
}
if(isset($_POST['section_9_link_268']) && !empty($_POST['section_9_link_268'])){
    $section_9_link_268 = $_POST['section_9_link_268'];
}else{
    $section_9_link_268 = '';
}
if(isset($_POST['section_9_link_alt_268']) && !empty($_POST['section_9_link_alt_268'])){
    $section_9_link_alt_268 = $_POST['section_9_link_alt_268'];
}else{
    $section_9_link_alt_268 = '';
}
if(isset($_POST['section_9_link_conteudo_268']) && !empty($_POST['section_9_link_conteudo_268'])){
    $section_9_link_conteudo_268 = $_POST['section_9_link_conteudo_268'];
}else{
    $section_9_link_conteudo_268 = '';
}
if(isset($_POST['section_9_link_269']) && !empty($_POST['section_9_link_269'])){
    $section_9_link_269 = $_POST['section_9_link_269'];
}else{
    $section_9_link_269 = '';
}
if(isset($_POST['section_9_link_alt_269']) && !empty($_POST['section_9_link_alt_269'])){
    $section_9_link_alt_269 = $_POST['section_9_link_alt_269'];
}else{
    $section_9_link_alt_269 = '';
}
if(isset($_POST['section_9_link_conteudo_269']) && !empty($_POST['section_9_link_conteudo_269'])){
    $section_9_link_conteudo_269 = $_POST['section_9_link_conteudo_269'];
}else{
    $section_9_link_conteudo_269 = '';
}
if(isset($_POST['section_9_conteudo_270']) && !empty($_POST['section_9_conteudo_270'])){
    $section_9_conteudo_270 = $_POST['section_9_conteudo_270'];
}else{
    $section_9_conteudo_270 = '';
}
if(isset($_POST['section_9_conteudo_271']) && !empty($_POST['section_9_conteudo_271'])){
    $section_9_conteudo_271 = $_POST['section_9_conteudo_271'];
}else{
    $section_9_conteudo_271 = '';
}
if(isset($_POST['section_9_conteudo_272']) && !empty($_POST['section_9_conteudo_272'])){
    $section_9_conteudo_272 = $_POST['section_9_conteudo_272'];
}else{
    $section_9_conteudo_272 = '';
}
if(isset($_POST['section_9_button273']) && !empty($_POST['section_9_button273'])){
    $section_9_button273 = $_POST['section_9_button273'];
}else{
    $section_9_button273 = '';
}
if(isset($_POST['section_9_conteudo_274']) && !empty($_POST['section_9_conteudo_274'])){
    $section_9_conteudo_274 = $_POST['section_9_conteudo_274'];
}else{
    $section_9_conteudo_274 = '';
}
if(isset($_POST['section_9_link_275']) && !empty($_POST['section_9_link_275'])){
    $section_9_link_275 = $_POST['section_9_link_275'];
}else{
    $section_9_link_275 = '';
}
if(isset($_POST['section_9_link_alt_275']) && !empty($_POST['section_9_link_alt_275'])){
    $section_9_link_alt_275 = $_POST['section_9_link_alt_275'];
}else{
    $section_9_link_alt_275 = '';
}
if(isset($_POST['section_9_link_276']) && !empty($_POST['section_9_link_276'])){
    $section_9_link_276 = $_POST['section_9_link_276'];
}else{
    $section_9_link_276 = '';
}
if(isset($_POST['section_9_link_alt_276']) && !empty($_POST['section_9_link_alt_276'])){
    $section_9_link_alt_276 = $_POST['section_9_link_alt_276'];
}else{
    $section_9_link_alt_276 = '';
}
if(isset($_POST['section_9_link_277']) && !empty($_POST['section_9_link_277'])){
    $section_9_link_277 = $_POST['section_9_link_277'];
}else{
    $section_9_link_277 = '';
}
if(isset($_POST['section_9_link_alt_277']) && !empty($_POST['section_9_link_alt_277'])){
    $section_9_link_alt_277 = $_POST['section_9_link_alt_277'];
}else{
    $section_9_link_alt_277 = '';
}
if(isset($_POST['section_9_link_278']) && !empty($_POST['section_9_link_278'])){
    $section_9_link_278 = $_POST['section_9_link_278'];
}else{
    $section_9_link_278 = '';
}
if(isset($_POST['section_9_link_alt_278']) && !empty($_POST['section_9_link_alt_278'])){
    $section_9_link_alt_278 = $_POST['section_9_link_alt_278'];
}else{
    $section_9_link_alt_278 = '';
}
if(isset($_POST['section_9_image_alt_279']) && !empty($_POST['section_9_image_alt_279'])){
    $section_9_image_alt_279 = $_POST['section_9_image_alt_279'];
}else{
    $section_9_image_alt_279 = '';
}
if(isset($_POST['section_9_image_alt_280']) && !empty($_POST['section_9_image_alt_280'])){
    $section_9_image_alt_280 = $_POST['section_9_image_alt_280'];
}else{
    $section_9_image_alt_280 = '';
}
 $maximo = 180000;if ($_FILES["section_1_img_5"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_1_img_5"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_1_img_9"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_1_img_9"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_1_img_11"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_1_img_11"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_1_img_12"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_1_img_12"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_1_img_13"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_1_img_13"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_1_img_14"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_1_img_14"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_1_img_16"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_1_img_16"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_1_img_17"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_1_img_17"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_1_img_18"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_1_img_18"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_2_img_19"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_2_img_19"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_2_img_20"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_2_img_20"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_2_img_21"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_2_img_21"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_2_img_25"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_2_img_25"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_2_img_29"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_2_img_29"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_2_img_33"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_2_img_33"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_2_img_37"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_2_img_37"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_2_img_41"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_2_img_41"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_2_img_42"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_2_img_42"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_3_img_43"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_3_img_43"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_3_img_46"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_3_img_46"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_3_img_47"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_3_img_47"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_3_img_48"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_3_img_48"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_3_img_50"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_3_img_50"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_3_img_51"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_3_img_51"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_3_img_53"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_3_img_53"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_3_img_54"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_3_img_54"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_3_img_56"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_3_img_56"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_4_img_57"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_4_img_57"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_4_img_58"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_4_img_58"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_4_img_61"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_4_img_61"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_4_img_62"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_4_img_62"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_4_img_63"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_4_img_63"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_4_img_64"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_4_img_64"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_4_img_69"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_4_img_69"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_4_img_70"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_4_img_70"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_4_img_71"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_4_img_71"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_5_img_72"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_5_img_72"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_5_img_73"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_5_img_73"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_5_img_77"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_5_img_77"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_5_img_78"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_5_img_78"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_5_img_81"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_5_img_81"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_5_img_84"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_5_img_84"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_5_img_88"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_5_img_88"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_5_img_92"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_5_img_92"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_6_img_93"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_6_img_93"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_6_img_96"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_6_img_96"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_6_img_97"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_6_img_97"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_6_img_101"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_6_img_101"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_6_img_105"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_6_img_105"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_6_img_109"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_6_img_109"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_6_img_113"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_6_img_113"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_6_img_117"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_6_img_117"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_6_img_121"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_6_img_121"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_6_img_125"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_6_img_125"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_6_img_129"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_6_img_129"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_6_img_133"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_6_img_133"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_6_img_137"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_6_img_137"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_6_img_141"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_6_img_141"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_6_img_145"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_6_img_145"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_6_img_149"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_6_img_149"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_6_img_153"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_6_img_153"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_6_img_157"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_6_img_157"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_7_img_158"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_7_img_158"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_7_img_159"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_7_img_159"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_7_img_160"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_7_img_160"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_7_img_161"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_7_img_161"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_7_img_162"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_7_img_162"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_7_img_163"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_7_img_163"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_7_img_164"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_7_img_164"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_7_img_167"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_7_img_167"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_7_img_171"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_7_img_171"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_7_img_178"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_7_img_178"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_179"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_179"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_182"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_182"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_183"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_183"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_189"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_189"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_190"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_190"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_196"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_196"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_197"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_197"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_203"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_203"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_204"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_204"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_210"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_210"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_211"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_211"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_217"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_217"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_218"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_218"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_224"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_224"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_225"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_225"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_231"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_231"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_232"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_232"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_238"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_238"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_239"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_239"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_245"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_245"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_246"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_246"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_9_img_247"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_9_img_247"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_9_img_248"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_9_img_248"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_9_img_250"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_9_img_250"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_9_img_252"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_9_img_252"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_9_img_255"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_9_img_255"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_9_img_279"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_9_img_279"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_9_img_280"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_9_img_280"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
    try { 
        if(file_exists('Connection/conexao.php')) {
            $pastaArquivos = 'img';
        } else {
            $pastaArquivos = '../img';
        }
            $sql = "INSERT INTO tbl_index (meta_title, meta_keywords, meta_description, section_1_link_1, section_1_link_alt_1, section_1_link_2, section_1_link_alt_2, section_1_link_3, section_1_link_alt_3, section_1_link_4, section_1_link_alt_4, section_1_img_5, section_1_image_alt_5, section_1_conteudo_6, section_1_conteudo_7, section_1_link_8, section_1_link_alt_8, section_1_link_conteudo_8, section_1_img_9, section_1_image_alt_9, section_1_link_10, section_1_link_alt_10, section_1_link_conteudo_10, section_1_img_11, section_1_image_alt_11, section_1_img_12, section_1_image_alt_12, section_1_img_13, section_1_image_alt_13, section_1_img_14, section_1_image_alt_14, section_1_link_15, section_1_link_alt_15, section_1_img_16, section_1_image_alt_16, section_1_img_17, section_1_image_alt_17, section_1_img_18, section_1_image_alt_18, section_2_img_19, section_2_image_alt_19, section_2_img_20, section_2_image_alt_20, section_2_img_21, section_2_image_alt_21, section_2_conteudo_22, section_2_conteudo_23, section_2_link_24, section_2_link_alt_24, section_2_img_25, section_2_image_alt_25, section_2_conteudo_26, section_2_conteudo_27, section_2_link_28, section_2_link_alt_28, section_2_img_29, section_2_image_alt_29, section_2_conteudo_30, section_2_conteudo_31, section_2_link_32, section_2_link_alt_32, section_2_img_33, section_2_image_alt_33, section_2_conteudo_34, section_2_conteudo_35, section_2_link_36, section_2_link_alt_36, section_2_img_37, section_2_image_alt_37, section_2_conteudo_38, section_2_conteudo_39, section_2_link_40, section_2_link_alt_40, section_2_link_conteudo_40, section_2_img_41, section_2_image_alt_41, section_2_img_42, section_2_image_alt_42, section_3_img_43, section_3_image_alt_43, section_3_conteudo_44, section_3_conteudo_45, section_3_img_46, section_3_image_alt_46, section_3_img_47, section_3_image_alt_47, section_3_img_48, section_3_image_alt_48, section_3_conteudo_49, section_3_img_50, section_3_image_alt_50, section_3_img_51, section_3_image_alt_51, section_3_conteudo_52, section_3_img_53, section_3_image_alt_53, section_3_img_54, section_3_image_alt_54, section_3_conteudo_55, section_3_img_56, section_3_image_alt_56, section_4_img_57, section_4_image_alt_57, section_4_img_58, section_4_image_alt_58, section_4_conteudo_59, section_4_conteudo_60, section_4_img_61, section_4_image_alt_61, section_4_img_62, section_4_image_alt_62, section_4_img_63, section_4_image_alt_63, section_4_img_64, section_4_image_alt_64, section_4_conteudo_65, section_4_conteudo_66, section_4_conteudo_67, section_4_link_68, section_4_link_alt_68, section_4_link_conteudo_68, section_4_img_69, section_4_image_alt_69, section_4_img_70, section_4_image_alt_70, section_4_img_71, section_4_image_alt_71, section_5_img_72, section_5_image_alt_72, section_5_img_73, section_5_image_alt_73, section_5_conteudo_74, section_5_conteudo_75, section_5_link_76, section_5_link_alt_76, section_5_link_conteudo_76, section_5_img_77, section_5_image_alt_77, section_5_img_78, section_5_image_alt_78, section_5_conteudo_79, section_5_conteudo_80, section_5_img_81, section_5_image_alt_81, section_5_conteudo_82, section_5_conteudo_83, section_5_img_84, section_5_image_alt_84, section_5_conteudo_85, section_5_conteudo_86, section_5_conteudo_87, section_5_img_88, section_5_image_alt_88, section_5_conteudo_89, section_5_conteudo_90, section_5_conteudo_91, section_5_img_92, section_5_image_alt_92, section_6_img_93, section_6_image_alt_93, section_6_conteudo_94, section_6_conteudo_95, section_6_img_96, section_6_image_alt_96, section_6_img_97, section_6_image_alt_97, section_6_conteudo_98, section_6_conteudo_99, section_6_conteudo_100, section_6_img_101, section_6_image_alt_101, section_6_conteudo_102, section_6_conteudo_103, section_6_conteudo_104, section_6_img_105, section_6_image_alt_105, section_6_conteudo_106, section_6_conteudo_107, section_6_conteudo_108, section_6_img_109, section_6_image_alt_109, section_6_conteudo_110, section_6_conteudo_111, section_6_conteudo_112, section_6_img_113, section_6_image_alt_113, section_6_conteudo_114, section_6_conteudo_115, section_6_conteudo_116, section_6_img_117, section_6_image_alt_117, section_6_conteudo_118, section_6_conteudo_119, section_6_conteudo_120, section_6_img_121, section_6_image_alt_121, section_6_conteudo_122, section_6_conteudo_123, section_6_conteudo_124, section_6_img_125, section_6_image_alt_125, section_6_conteudo_126, section_6_conteudo_127, section_6_conteudo_128, section_6_img_129, section_6_image_alt_129, section_6_conteudo_130, section_6_conteudo_131, section_6_conteudo_132, section_6_img_133, section_6_image_alt_133, section_6_conteudo_134, section_6_conteudo_135, section_6_conteudo_136, section_6_img_137, section_6_image_alt_137, section_6_conteudo_138, section_6_conteudo_139, section_6_conteudo_140, section_6_img_141, section_6_image_alt_141, section_6_conteudo_142, section_6_conteudo_143, section_6_conteudo_144, section_6_img_145, section_6_image_alt_145, section_6_conteudo_146, section_6_conteudo_147, section_6_conteudo_148, section_6_img_149, section_6_image_alt_149, section_6_conteudo_150, section_6_conteudo_151, section_6_conteudo_152, section_6_img_153, section_6_image_alt_153, section_6_conteudo_154, section_6_conteudo_155, section_6_conteudo_156, section_6_img_157, section_6_image_alt_157, section_7_img_158, section_7_image_alt_158, section_7_img_159, section_7_image_alt_159, section_7_img_160, section_7_image_alt_160, section_7_img_161, section_7_image_alt_161, section_7_img_162, section_7_image_alt_162, section_7_img_163, section_7_image_alt_163, section_7_img_164, section_7_image_alt_164, section_7_conteudo_165, section_7_conteudo_166, section_7_img_167, section_7_image_alt_167, section_7_conteudo_168, section_7_conteudo_169, section_7_conteudo_170, section_7_img_171, section_7_image_alt_171, section_7_conteudo_172, section_7_conteudo_173, section_7_link_174, section_7_link_alt_174, section_7_link_conteudo_174, section_7_conteudo_175, section_7_link_176, section_7_link_alt_176, section_7_link_conteudo_176, section_7_conteudo_177, section_7_img_178, section_7_image_alt_178, section_8_img_179, section_8_image_alt_179, section_8_conteudo_180, section_8_conteudo_181, section_8_img_182, section_8_image_alt_182, section_8_img_183, section_8_image_alt_183, section_8_conteudo_184, section_8_conteudo_185, section_8_conteudo_186, section_8_conteudo_187, section_8_link_188, section_8_link_alt_188, section_8_link_conteudo_188, section_8_img_189, section_8_image_alt_189, section_8_img_190, section_8_image_alt_190, section_8_conteudo_191, section_8_conteudo_192, section_8_conteudo_193, section_8_conteudo_194, section_8_link_195, section_8_link_alt_195, section_8_link_conteudo_195, section_8_img_196, section_8_image_alt_196, section_8_img_197, section_8_image_alt_197, section_8_conteudo_198, section_8_conteudo_199, section_8_conteudo_200, section_8_conteudo_201, section_8_link_202, section_8_link_alt_202, section_8_link_conteudo_202, section_8_img_203, section_8_image_alt_203, section_8_img_204, section_8_image_alt_204, section_8_conteudo_205, section_8_conteudo_206, section_8_conteudo_207, section_8_conteudo_208, section_8_link_209, section_8_link_alt_209, section_8_link_conteudo_209, section_8_img_210, section_8_image_alt_210, section_8_img_211, section_8_image_alt_211, section_8_conteudo_212, section_8_conteudo_213, section_8_conteudo_214, section_8_conteudo_215, section_8_link_216, section_8_link_alt_216, section_8_link_conteudo_216, section_8_img_217, section_8_image_alt_217, section_8_img_218, section_8_image_alt_218, section_8_conteudo_219, section_8_conteudo_220, section_8_conteudo_221, section_8_conteudo_222, section_8_link_223, section_8_link_alt_223, section_8_link_conteudo_223, section_8_img_224, section_8_image_alt_224, section_8_img_225, section_8_image_alt_225, section_8_conteudo_226, section_8_conteudo_227, section_8_conteudo_228, section_8_conteudo_229, section_8_link_230, section_8_link_alt_230, section_8_link_conteudo_230, section_8_img_231, section_8_image_alt_231, section_8_img_232, section_8_image_alt_232, section_8_conteudo_233, section_8_conteudo_234, section_8_conteudo_235, section_8_conteudo_236, section_8_link_237, section_8_link_alt_237, section_8_link_conteudo_237, section_8_img_238, section_8_image_alt_238, section_8_img_239, section_8_image_alt_239, section_8_conteudo_240, section_8_conteudo_241, section_8_conteudo_242, section_8_conteudo_243, section_8_link_244, section_8_link_alt_244, section_8_link_conteudo_244, section_8_img_245, section_8_image_alt_245, section_8_img_246, section_8_image_alt_246, section_9_img_247, section_9_image_alt_247, section_9_img_248, section_9_image_alt_248, section_9_link_249, section_9_link_alt_249, section_9_img_250, section_9_image_alt_250, section_9_conteudo_251, section_9_img_252, section_9_image_alt_252, section_9_conteudo_253, section_9_link_254, section_9_link_alt_254, section_9_link_conteudo_254, section_9_img_255, section_9_image_alt_255, section_9_conteudo_256, section_9_link_257, section_9_link_alt_257, section_9_link_conteudo_257, section_9_conteudo_258, section_9_link_259, section_9_link_alt_259, section_9_link_conteudo_259, section_9_link_260, section_9_link_alt_260, section_9_link_conteudo_260, section_9_link_261, section_9_link_alt_261, section_9_link_conteudo_261, section_9_link_262, section_9_link_alt_262, section_9_link_conteudo_262, section_9_link_263, section_9_link_alt_263, section_9_link_conteudo_263, section_9_conteudo_264, section_9_link_265, section_9_link_alt_265, section_9_link_conteudo_265, section_9_link_266, section_9_link_alt_266, section_9_link_conteudo_266, section_9_link_267, section_9_link_alt_267, section_9_link_conteudo_267, section_9_link_268, section_9_link_alt_268, section_9_link_conteudo_268, section_9_link_269, section_9_link_alt_269, section_9_link_conteudo_269, section_9_conteudo_270, section_9_conteudo_271, section_9_conteudo_272, section_9_button273, section_9_conteudo_274, section_9_link_275, section_9_link_alt_275, section_9_link_276, section_9_link_alt_276, section_9_link_277, section_9_link_alt_277, section_9_link_278, section_9_link_alt_278, section_9_img_279, section_9_image_alt_279, section_9_img_280, section_9_image_alt_280) VALUES ( ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?)";        $stm = $this->pdo->prepare($sql);
        $stm->bindValue(1, $meta_title);
        $stm->bindValue(2, $meta_keywords);
        $stm->bindValue(3, $meta_description);
        $stm->bindValue(4, $section_1_link_1);
        $stm->bindValue(5, $section_1_link_alt_1);
        $stm->bindValue(6, $section_1_link_2);
        $stm->bindValue(7, $section_1_link_alt_2);
        $stm->bindValue(8, $section_1_link_3);
        $stm->bindValue(9, $section_1_link_alt_3);
        $stm->bindValue(10, $section_1_link_4);
        $stm->bindValue(11, $section_1_link_alt_4);
        $stm->bindValue(12, upload("section_1_img_5",$pastaArquivos, "N"));
        $stm->bindValue(13, $section_1_image_alt_5);
        $stm->bindValue(14, $section_1_conteudo_6);
        $stm->bindValue(15, $section_1_conteudo_7);
        $stm->bindValue(16, $section_1_link_8);
        $stm->bindValue(17, $section_1_link_alt_8);
        $stm->bindValue(18, $section_1_link_conteudo_8);
        $stm->bindValue(19, upload("section_1_img_9",$pastaArquivos, "N"));
        $stm->bindValue(20, $section_1_image_alt_9);
        $stm->bindValue(21, $section_1_link_10);
        $stm->bindValue(22, $section_1_link_alt_10);
        $stm->bindValue(23, $section_1_link_conteudo_10);
        $stm->bindValue(24, upload("section_1_img_11",$pastaArquivos, "N"));
        $stm->bindValue(25, $section_1_image_alt_11);
        $stm->bindValue(26, upload("section_1_img_12",$pastaArquivos, "N"));
        $stm->bindValue(27, $section_1_image_alt_12);
        $stm->bindValue(28, upload("section_1_img_13",$pastaArquivos, "N"));
        $stm->bindValue(29, $section_1_image_alt_13);
        $stm->bindValue(30, upload("section_1_img_14",$pastaArquivos, "N"));
        $stm->bindValue(31, $section_1_image_alt_14);
        $stm->bindValue(32, $section_1_link_15);
        $stm->bindValue(33, $section_1_link_alt_15);
        $stm->bindValue(34, upload("section_1_img_16",$pastaArquivos, "N"));
        $stm->bindValue(35, $section_1_image_alt_16);
        $stm->bindValue(36, upload("section_1_img_17",$pastaArquivos, "N"));
        $stm->bindValue(37, $section_1_image_alt_17);
        $stm->bindValue(38, upload("section_1_img_18",$pastaArquivos, "N"));
        $stm->bindValue(39, $section_1_image_alt_18);
        $stm->bindValue(40, upload("section_2_img_19",$pastaArquivos, "N"));
        $stm->bindValue(41, $section_2_image_alt_19);
        $stm->bindValue(42, upload("section_2_img_20",$pastaArquivos, "N"));
        $stm->bindValue(43, $section_2_image_alt_20);
        $stm->bindValue(44, upload("section_2_img_21",$pastaArquivos, "N"));
        $stm->bindValue(45, $section_2_image_alt_21);
        $stm->bindValue(46, $section_2_conteudo_22);
        $stm->bindValue(47, $section_2_conteudo_23);
        $stm->bindValue(48, $section_2_link_24);
        $stm->bindValue(49, $section_2_link_alt_24);
        $stm->bindValue(50, upload("section_2_img_25",$pastaArquivos, "N"));
        $stm->bindValue(51, $section_2_image_alt_25);
        $stm->bindValue(52, $section_2_conteudo_26);
        $stm->bindValue(53, $section_2_conteudo_27);
        $stm->bindValue(54, $section_2_link_28);
        $stm->bindValue(55, $section_2_link_alt_28);
        $stm->bindValue(56, upload("section_2_img_29",$pastaArquivos, "N"));
        $stm->bindValue(57, $section_2_image_alt_29);
        $stm->bindValue(58, $section_2_conteudo_30);
        $stm->bindValue(59, $section_2_conteudo_31);
        $stm->bindValue(60, $section_2_link_32);
        $stm->bindValue(61, $section_2_link_alt_32);
        $stm->bindValue(62, upload("section_2_img_33",$pastaArquivos, "N"));
        $stm->bindValue(63, $section_2_image_alt_33);
        $stm->bindValue(64, $section_2_conteudo_34);
        $stm->bindValue(65, $section_2_conteudo_35);
        $stm->bindValue(66, $section_2_link_36);
        $stm->bindValue(67, $section_2_link_alt_36);
        $stm->bindValue(68, upload("section_2_img_37",$pastaArquivos, "N"));
        $stm->bindValue(69, $section_2_image_alt_37);
        $stm->bindValue(70, $section_2_conteudo_38);
        $stm->bindValue(71, $section_2_conteudo_39);
        $stm->bindValue(72, $section_2_link_40);
        $stm->bindValue(73, $section_2_link_alt_40);
        $stm->bindValue(74, $section_2_link_conteudo_40);
        $stm->bindValue(75, upload("section_2_img_41",$pastaArquivos, "N"));
        $stm->bindValue(76, $section_2_image_alt_41);
        $stm->bindValue(77, upload("section_2_img_42",$pastaArquivos, "N"));
        $stm->bindValue(78, $section_2_image_alt_42);
        $stm->bindValue(79, upload("section_3_img_43",$pastaArquivos, "N"));
        $stm->bindValue(80, $section_3_image_alt_43);
        $stm->bindValue(81, $section_3_conteudo_44);
        $stm->bindValue(82, $section_3_conteudo_45);
        $stm->bindValue(83, upload("section_3_img_46",$pastaArquivos, "N"));
        $stm->bindValue(84, $section_3_image_alt_46);
        $stm->bindValue(85, upload("section_3_img_47",$pastaArquivos, "N"));
        $stm->bindValue(86, $section_3_image_alt_47);
        $stm->bindValue(87, upload("section_3_img_48",$pastaArquivos, "N"));
        $stm->bindValue(88, $section_3_image_alt_48);
        $stm->bindValue(89, $section_3_conteudo_49);
        $stm->bindValue(90, upload("section_3_img_50",$pastaArquivos, "N"));
        $stm->bindValue(91, $section_3_image_alt_50);
        $stm->bindValue(92, upload("section_3_img_51",$pastaArquivos, "N"));
        $stm->bindValue(93, $section_3_image_alt_51);
        $stm->bindValue(94, $section_3_conteudo_52);
        $stm->bindValue(95, upload("section_3_img_53",$pastaArquivos, "N"));
        $stm->bindValue(96, $section_3_image_alt_53);
        $stm->bindValue(97, upload("section_3_img_54",$pastaArquivos, "N"));
        $stm->bindValue(98, $section_3_image_alt_54);
        $stm->bindValue(99, $section_3_conteudo_55);
        $stm->bindValue(100, upload("section_3_img_56",$pastaArquivos, "N"));
        $stm->bindValue(101, $section_3_image_alt_56);
        $stm->bindValue(102, upload("section_4_img_57",$pastaArquivos, "N"));
        $stm->bindValue(103, $section_4_image_alt_57);
        $stm->bindValue(104, upload("section_4_img_58",$pastaArquivos, "N"));
        $stm->bindValue(105, $section_4_image_alt_58);
        $stm->bindValue(106, $section_4_conteudo_59);
        $stm->bindValue(107, $section_4_conteudo_60);
        $stm->bindValue(108, upload("section_4_img_61",$pastaArquivos, "N"));
        $stm->bindValue(109, $section_4_image_alt_61);
        $stm->bindValue(110, upload("section_4_img_62",$pastaArquivos, "N"));
        $stm->bindValue(111, $section_4_image_alt_62);
        $stm->bindValue(112, upload("section_4_img_63",$pastaArquivos, "N"));
        $stm->bindValue(113, $section_4_image_alt_63);
        $stm->bindValue(114, upload("section_4_img_64",$pastaArquivos, "N"));
        $stm->bindValue(115, $section_4_image_alt_64);
        $stm->bindValue(116, $section_4_conteudo_65);
        $stm->bindValue(117, $section_4_conteudo_66);
        $stm->bindValue(118, $section_4_conteudo_67);
        $stm->bindValue(119, $section_4_link_68);
        $stm->bindValue(120, $section_4_link_alt_68);
        $stm->bindValue(121, $section_4_link_conteudo_68);
        $stm->bindValue(122, upload("section_4_img_69",$pastaArquivos, "N"));
        $stm->bindValue(123, $section_4_image_alt_69);
        $stm->bindValue(124, upload("section_4_img_70",$pastaArquivos, "N"));
        $stm->bindValue(125, $section_4_image_alt_70);
        $stm->bindValue(126, upload("section_4_img_71",$pastaArquivos, "N"));
        $stm->bindValue(127, $section_4_image_alt_71);
        $stm->bindValue(128, upload("section_5_img_72",$pastaArquivos, "N"));
        $stm->bindValue(129, $section_5_image_alt_72);
        $stm->bindValue(130, upload("section_5_img_73",$pastaArquivos, "N"));
        $stm->bindValue(131, $section_5_image_alt_73);
        $stm->bindValue(132, $section_5_conteudo_74);
        $stm->bindValue(133, $section_5_conteudo_75);
        $stm->bindValue(134, $section_5_link_76);
        $stm->bindValue(135, $section_5_link_alt_76);
        $stm->bindValue(136, $section_5_link_conteudo_76);
        $stm->bindValue(137, upload("section_5_img_77",$pastaArquivos, "N"));
        $stm->bindValue(138, $section_5_image_alt_77);
        $stm->bindValue(139, upload("section_5_img_78",$pastaArquivos, "N"));
        $stm->bindValue(140, $section_5_image_alt_78);
        $stm->bindValue(141, $section_5_conteudo_79);
        $stm->bindValue(142, $section_5_conteudo_80);
        $stm->bindValue(143, upload("section_5_img_81",$pastaArquivos, "N"));
        $stm->bindValue(144, $section_5_image_alt_81);
        $stm->bindValue(145, $section_5_conteudo_82);
        $stm->bindValue(146, $section_5_conteudo_83);
        $stm->bindValue(147, upload("section_5_img_84",$pastaArquivos, "N"));
        $stm->bindValue(148, $section_5_image_alt_84);
        $stm->bindValue(149, $section_5_conteudo_85);
        $stm->bindValue(150, $section_5_conteudo_86);
        $stm->bindValue(151, $section_5_conteudo_87);
        $stm->bindValue(152, upload("section_5_img_88",$pastaArquivos, "N"));
        $stm->bindValue(153, $section_5_image_alt_88);
        $stm->bindValue(154, $section_5_conteudo_89);
        $stm->bindValue(155, $section_5_conteudo_90);
        $stm->bindValue(156, $section_5_conteudo_91);
        $stm->bindValue(157, upload("section_5_img_92",$pastaArquivos, "N"));
        $stm->bindValue(158, $section_5_image_alt_92);
        $stm->bindValue(159, upload("section_6_img_93",$pastaArquivos, "N"));
        $stm->bindValue(160, $section_6_image_alt_93);
        $stm->bindValue(161, $section_6_conteudo_94);
        $stm->bindValue(162, $section_6_conteudo_95);
        $stm->bindValue(163, upload("section_6_img_96",$pastaArquivos, "N"));
        $stm->bindValue(164, $section_6_image_alt_96);
        $stm->bindValue(165, upload("section_6_img_97",$pastaArquivos, "N"));
        $stm->bindValue(166, $section_6_image_alt_97);
        $stm->bindValue(167, $section_6_conteudo_98);
        $stm->bindValue(168, $section_6_conteudo_99);
        $stm->bindValue(169, $section_6_conteudo_100);
        $stm->bindValue(170, upload("section_6_img_101",$pastaArquivos, "N"));
        $stm->bindValue(171, $section_6_image_alt_101);
        $stm->bindValue(172, $section_6_conteudo_102);
        $stm->bindValue(173, $section_6_conteudo_103);
        $stm->bindValue(174, $section_6_conteudo_104);
        $stm->bindValue(175, upload("section_6_img_105",$pastaArquivos, "N"));
        $stm->bindValue(176, $section_6_image_alt_105);
        $stm->bindValue(177, $section_6_conteudo_106);
        $stm->bindValue(178, $section_6_conteudo_107);
        $stm->bindValue(179, $section_6_conteudo_108);
        $stm->bindValue(180, upload("section_6_img_109",$pastaArquivos, "N"));
        $stm->bindValue(181, $section_6_image_alt_109);
        $stm->bindValue(182, $section_6_conteudo_110);
        $stm->bindValue(183, $section_6_conteudo_111);
        $stm->bindValue(184, $section_6_conteudo_112);
        $stm->bindValue(185, upload("section_6_img_113",$pastaArquivos, "N"));
        $stm->bindValue(186, $section_6_image_alt_113);
        $stm->bindValue(187, $section_6_conteudo_114);
        $stm->bindValue(188, $section_6_conteudo_115);
        $stm->bindValue(189, $section_6_conteudo_116);
        $stm->bindValue(190, upload("section_6_img_117",$pastaArquivos, "N"));
        $stm->bindValue(191, $section_6_image_alt_117);
        $stm->bindValue(192, $section_6_conteudo_118);
        $stm->bindValue(193, $section_6_conteudo_119);
        $stm->bindValue(194, $section_6_conteudo_120);
        $stm->bindValue(195, upload("section_6_img_121",$pastaArquivos, "N"));
        $stm->bindValue(196, $section_6_image_alt_121);
        $stm->bindValue(197, $section_6_conteudo_122);
        $stm->bindValue(198, $section_6_conteudo_123);
        $stm->bindValue(199, $section_6_conteudo_124);
        $stm->bindValue(200, upload("section_6_img_125",$pastaArquivos, "N"));
        $stm->bindValue(201, $section_6_image_alt_125);
        $stm->bindValue(202, $section_6_conteudo_126);
        $stm->bindValue(203, $section_6_conteudo_127);
        $stm->bindValue(204, $section_6_conteudo_128);
        $stm->bindValue(205, upload("section_6_img_129",$pastaArquivos, "N"));
        $stm->bindValue(206, $section_6_image_alt_129);
        $stm->bindValue(207, $section_6_conteudo_130);
        $stm->bindValue(208, $section_6_conteudo_131);
        $stm->bindValue(209, $section_6_conteudo_132);
        $stm->bindValue(210, upload("section_6_img_133",$pastaArquivos, "N"));
        $stm->bindValue(211, $section_6_image_alt_133);
        $stm->bindValue(212, $section_6_conteudo_134);
        $stm->bindValue(213, $section_6_conteudo_135);
        $stm->bindValue(214, $section_6_conteudo_136);
        $stm->bindValue(215, upload("section_6_img_137",$pastaArquivos, "N"));
        $stm->bindValue(216, $section_6_image_alt_137);
        $stm->bindValue(217, $section_6_conteudo_138);
        $stm->bindValue(218, $section_6_conteudo_139);
        $stm->bindValue(219, $section_6_conteudo_140);
        $stm->bindValue(220, upload("section_6_img_141",$pastaArquivos, "N"));
        $stm->bindValue(221, $section_6_image_alt_141);
        $stm->bindValue(222, $section_6_conteudo_142);
        $stm->bindValue(223, $section_6_conteudo_143);
        $stm->bindValue(224, $section_6_conteudo_144);
        $stm->bindValue(225, upload("section_6_img_145",$pastaArquivos, "N"));
        $stm->bindValue(226, $section_6_image_alt_145);
        $stm->bindValue(227, $section_6_conteudo_146);
        $stm->bindValue(228, $section_6_conteudo_147);
        $stm->bindValue(229, $section_6_conteudo_148);
        $stm->bindValue(230, upload("section_6_img_149",$pastaArquivos, "N"));
        $stm->bindValue(231, $section_6_image_alt_149);
        $stm->bindValue(232, $section_6_conteudo_150);
        $stm->bindValue(233, $section_6_conteudo_151);
        $stm->bindValue(234, $section_6_conteudo_152);
        $stm->bindValue(235, upload("section_6_img_153",$pastaArquivos, "N"));
        $stm->bindValue(236, $section_6_image_alt_153);
        $stm->bindValue(237, $section_6_conteudo_154);
        $stm->bindValue(238, $section_6_conteudo_155);
        $stm->bindValue(239, $section_6_conteudo_156);
        $stm->bindValue(240, upload("section_6_img_157",$pastaArquivos, "N"));
        $stm->bindValue(241, $section_6_image_alt_157);
        $stm->bindValue(242, upload("section_7_img_158",$pastaArquivos, "N"));
        $stm->bindValue(243, $section_7_image_alt_158);
        $stm->bindValue(244, upload("section_7_img_159",$pastaArquivos, "N"));
        $stm->bindValue(245, $section_7_image_alt_159);
        $stm->bindValue(246, upload("section_7_img_160",$pastaArquivos, "N"));
        $stm->bindValue(247, $section_7_image_alt_160);
        $stm->bindValue(248, upload("section_7_img_161",$pastaArquivos, "N"));
        $stm->bindValue(249, $section_7_image_alt_161);
        $stm->bindValue(250, upload("section_7_img_162",$pastaArquivos, "N"));
        $stm->bindValue(251, $section_7_image_alt_162);
        $stm->bindValue(252, upload("section_7_img_163",$pastaArquivos, "N"));
        $stm->bindValue(253, $section_7_image_alt_163);
        $stm->bindValue(254, upload("section_7_img_164",$pastaArquivos, "N"));
        $stm->bindValue(255, $section_7_image_alt_164);
        $stm->bindValue(256, $section_7_conteudo_165);
        $stm->bindValue(257, $section_7_conteudo_166);
        $stm->bindValue(258, upload("section_7_img_167",$pastaArquivos, "N"));
        $stm->bindValue(259, $section_7_image_alt_167);
        $stm->bindValue(260, $section_7_conteudo_168);
        $stm->bindValue(261, $section_7_conteudo_169);
        $stm->bindValue(262, $section_7_conteudo_170);
        $stm->bindValue(263, upload("section_7_img_171",$pastaArquivos, "N"));
        $stm->bindValue(264, $section_7_image_alt_171);
        $stm->bindValue(265, $section_7_conteudo_172);
        $stm->bindValue(266, $section_7_conteudo_173);
        $stm->bindValue(267, $section_7_link_174);
        $stm->bindValue(268, $section_7_link_alt_174);
        $stm->bindValue(269, $section_7_link_conteudo_174);
        $stm->bindValue(270, $section_7_conteudo_175);
        $stm->bindValue(271, $section_7_link_176);
        $stm->bindValue(272, $section_7_link_alt_176);
        $stm->bindValue(273, $section_7_link_conteudo_176);
        $stm->bindValue(274, $section_7_conteudo_177);
        $stm->bindValue(275, upload("section_7_img_178",$pastaArquivos, "N"));
        $stm->bindValue(276, $section_7_image_alt_178);
        $stm->bindValue(277, upload("section_8_img_179",$pastaArquivos, "N"));
        $stm->bindValue(278, $section_8_image_alt_179);
        $stm->bindValue(279, $section_8_conteudo_180);
        $stm->bindValue(280, $section_8_conteudo_181);
        $stm->bindValue(281, upload("section_8_img_182",$pastaArquivos, "N"));
        $stm->bindValue(282, $section_8_image_alt_182);
        $stm->bindValue(283, upload("section_8_img_183",$pastaArquivos, "N"));
        $stm->bindValue(284, $section_8_image_alt_183);
        $stm->bindValue(285, $section_8_conteudo_184);
        $stm->bindValue(286, $section_8_conteudo_185);
        $stm->bindValue(287, $section_8_conteudo_186);
        $stm->bindValue(288, $section_8_conteudo_187);
        $stm->bindValue(289, $section_8_link_188);
        $stm->bindValue(290, $section_8_link_alt_188);
        $stm->bindValue(291, $section_8_link_conteudo_188);
        $stm->bindValue(292, upload("section_8_img_189",$pastaArquivos, "N"));
        $stm->bindValue(293, $section_8_image_alt_189);
        $stm->bindValue(294, upload("section_8_img_190",$pastaArquivos, "N"));
        $stm->bindValue(295, $section_8_image_alt_190);
        $stm->bindValue(296, $section_8_conteudo_191);
        $stm->bindValue(297, $section_8_conteudo_192);
        $stm->bindValue(298, $section_8_conteudo_193);
        $stm->bindValue(299, $section_8_conteudo_194);
        $stm->bindValue(300, $section_8_link_195);
        $stm->bindValue(301, $section_8_link_alt_195);
        $stm->bindValue(302, $section_8_link_conteudo_195);
        $stm->bindValue(303, upload("section_8_img_196",$pastaArquivos, "N"));
        $stm->bindValue(304, $section_8_image_alt_196);
        $stm->bindValue(305, upload("section_8_img_197",$pastaArquivos, "N"));
        $stm->bindValue(306, $section_8_image_alt_197);
        $stm->bindValue(307, $section_8_conteudo_198);
        $stm->bindValue(308, $section_8_conteudo_199);
        $stm->bindValue(309, $section_8_conteudo_200);
        $stm->bindValue(310, $section_8_conteudo_201);
        $stm->bindValue(311, $section_8_link_202);
        $stm->bindValue(312, $section_8_link_alt_202);
        $stm->bindValue(313, $section_8_link_conteudo_202);
        $stm->bindValue(314, upload("section_8_img_203",$pastaArquivos, "N"));
        $stm->bindValue(315, $section_8_image_alt_203);
        $stm->bindValue(316, upload("section_8_img_204",$pastaArquivos, "N"));
        $stm->bindValue(317, $section_8_image_alt_204);
        $stm->bindValue(318, $section_8_conteudo_205);
        $stm->bindValue(319, $section_8_conteudo_206);
        $stm->bindValue(320, $section_8_conteudo_207);
        $stm->bindValue(321, $section_8_conteudo_208);
        $stm->bindValue(322, $section_8_link_209);
        $stm->bindValue(323, $section_8_link_alt_209);
        $stm->bindValue(324, $section_8_link_conteudo_209);
        $stm->bindValue(325, upload("section_8_img_210",$pastaArquivos, "N"));
        $stm->bindValue(326, $section_8_image_alt_210);
        $stm->bindValue(327, upload("section_8_img_211",$pastaArquivos, "N"));
        $stm->bindValue(328, $section_8_image_alt_211);
        $stm->bindValue(329, $section_8_conteudo_212);
        $stm->bindValue(330, $section_8_conteudo_213);
        $stm->bindValue(331, $section_8_conteudo_214);
        $stm->bindValue(332, $section_8_conteudo_215);
        $stm->bindValue(333, $section_8_link_216);
        $stm->bindValue(334, $section_8_link_alt_216);
        $stm->bindValue(335, $section_8_link_conteudo_216);
        $stm->bindValue(336, upload("section_8_img_217",$pastaArquivos, "N"));
        $stm->bindValue(337, $section_8_image_alt_217);
        $stm->bindValue(338, upload("section_8_img_218",$pastaArquivos, "N"));
        $stm->bindValue(339, $section_8_image_alt_218);
        $stm->bindValue(340, $section_8_conteudo_219);
        $stm->bindValue(341, $section_8_conteudo_220);
        $stm->bindValue(342, $section_8_conteudo_221);
        $stm->bindValue(343, $section_8_conteudo_222);
        $stm->bindValue(344, $section_8_link_223);
        $stm->bindValue(345, $section_8_link_alt_223);
        $stm->bindValue(346, $section_8_link_conteudo_223);
        $stm->bindValue(347, upload("section_8_img_224",$pastaArquivos, "N"));
        $stm->bindValue(348, $section_8_image_alt_224);
        $stm->bindValue(349, upload("section_8_img_225",$pastaArquivos, "N"));
        $stm->bindValue(350, $section_8_image_alt_225);
        $stm->bindValue(351, $section_8_conteudo_226);
        $stm->bindValue(352, $section_8_conteudo_227);
        $stm->bindValue(353, $section_8_conteudo_228);
        $stm->bindValue(354, $section_8_conteudo_229);
        $stm->bindValue(355, $section_8_link_230);
        $stm->bindValue(356, $section_8_link_alt_230);
        $stm->bindValue(357, $section_8_link_conteudo_230);
        $stm->bindValue(358, upload("section_8_img_231",$pastaArquivos, "N"));
        $stm->bindValue(359, $section_8_image_alt_231);
        $stm->bindValue(360, upload("section_8_img_232",$pastaArquivos, "N"));
        $stm->bindValue(361, $section_8_image_alt_232);
        $stm->bindValue(362, $section_8_conteudo_233);
        $stm->bindValue(363, $section_8_conteudo_234);
        $stm->bindValue(364, $section_8_conteudo_235);
        $stm->bindValue(365, $section_8_conteudo_236);
        $stm->bindValue(366, $section_8_link_237);
        $stm->bindValue(367, $section_8_link_alt_237);
        $stm->bindValue(368, $section_8_link_conteudo_237);
        $stm->bindValue(369, upload("section_8_img_238",$pastaArquivos, "N"));
        $stm->bindValue(370, $section_8_image_alt_238);
        $stm->bindValue(371, upload("section_8_img_239",$pastaArquivos, "N"));
        $stm->bindValue(372, $section_8_image_alt_239);
        $stm->bindValue(373, $section_8_conteudo_240);
        $stm->bindValue(374, $section_8_conteudo_241);
        $stm->bindValue(375, $section_8_conteudo_242);
        $stm->bindValue(376, $section_8_conteudo_243);
        $stm->bindValue(377, $section_8_link_244);
        $stm->bindValue(378, $section_8_link_alt_244);
        $stm->bindValue(379, $section_8_link_conteudo_244);
        $stm->bindValue(380, upload("section_8_img_245",$pastaArquivos, "N"));
        $stm->bindValue(381, $section_8_image_alt_245);
        $stm->bindValue(382, upload("section_8_img_246",$pastaArquivos, "N"));
        $stm->bindValue(383, $section_8_image_alt_246);
        $stm->bindValue(384, upload("section_9_img_247",$pastaArquivos, "N"));
        $stm->bindValue(385, $section_9_image_alt_247);
        $stm->bindValue(386, upload("section_9_img_248",$pastaArquivos, "N"));
        $stm->bindValue(387, $section_9_image_alt_248);
        $stm->bindValue(388, $section_9_link_249);
        $stm->bindValue(389, $section_9_link_alt_249);
        $stm->bindValue(390, upload("section_9_img_250",$pastaArquivos, "N"));
        $stm->bindValue(391, $section_9_image_alt_250);
        $stm->bindValue(392, $section_9_conteudo_251);
        $stm->bindValue(393, upload("section_9_img_252",$pastaArquivos, "N"));
        $stm->bindValue(394, $section_9_image_alt_252);
        $stm->bindValue(395, $section_9_conteudo_253);
        $stm->bindValue(396, $section_9_link_254);
        $stm->bindValue(397, $section_9_link_alt_254);
        $stm->bindValue(398, $section_9_link_conteudo_254);
        $stm->bindValue(399, upload("section_9_img_255",$pastaArquivos, "N"));
        $stm->bindValue(400, $section_9_image_alt_255);
        $stm->bindValue(401, $section_9_conteudo_256);
        $stm->bindValue(402, $section_9_link_257);
        $stm->bindValue(403, $section_9_link_alt_257);
        $stm->bindValue(404, $section_9_link_conteudo_257);
        $stm->bindValue(405, $section_9_conteudo_258);
        $stm->bindValue(406, $section_9_link_259);
        $stm->bindValue(407, $section_9_link_alt_259);
        $stm->bindValue(408, $section_9_link_conteudo_259);
        $stm->bindValue(409, $section_9_link_260);
        $stm->bindValue(410, $section_9_link_alt_260);
        $stm->bindValue(411, $section_9_link_conteudo_260);
        $stm->bindValue(412, $section_9_link_261);
        $stm->bindValue(413, $section_9_link_alt_261);
        $stm->bindValue(414, $section_9_link_conteudo_261);
        $stm->bindValue(415, $section_9_link_262);
        $stm->bindValue(416, $section_9_link_alt_262);
        $stm->bindValue(417, $section_9_link_conteudo_262);
        $stm->bindValue(418, $section_9_link_263);
        $stm->bindValue(419, $section_9_link_alt_263);
        $stm->bindValue(420, $section_9_link_conteudo_263);
        $stm->bindValue(421, $section_9_conteudo_264);
        $stm->bindValue(422, $section_9_link_265);
        $stm->bindValue(423, $section_9_link_alt_265);
        $stm->bindValue(424, $section_9_link_conteudo_265);
        $stm->bindValue(425, $section_9_link_266);
        $stm->bindValue(426, $section_9_link_alt_266);
        $stm->bindValue(427, $section_9_link_conteudo_266);
        $stm->bindValue(428, $section_9_link_267);
        $stm->bindValue(429, $section_9_link_alt_267);
        $stm->bindValue(430, $section_9_link_conteudo_267);
        $stm->bindValue(431, $section_9_link_268);
        $stm->bindValue(432, $section_9_link_alt_268);
        $stm->bindValue(433, $section_9_link_conteudo_268);
        $stm->bindValue(434, $section_9_link_269);
        $stm->bindValue(435, $section_9_link_alt_269);
        $stm->bindValue(436, $section_9_link_conteudo_269);
        $stm->bindValue(437, $section_9_conteudo_270);
        $stm->bindValue(438, $section_9_conteudo_271);
        $stm->bindValue(439, $section_9_conteudo_272);
        $stm->bindValue(440, $section_9_button273);
        $stm->bindValue(441, $section_9_conteudo_274);
        $stm->bindValue(442, $section_9_link_275);
        $stm->bindValue(443, $section_9_link_alt_275);
        $stm->bindValue(444, $section_9_link_276);
        $stm->bindValue(445, $section_9_link_alt_276);
        $stm->bindValue(446, $section_9_link_277);
        $stm->bindValue(447, $section_9_link_alt_277);
        $stm->bindValue(448, $section_9_link_278);
        $stm->bindValue(449, $section_9_link_alt_278);
        $stm->bindValue(450, upload("section_9_img_279",$pastaArquivos, "N"));
        $stm->bindValue(451, $section_9_image_alt_279);
        $stm->bindValue(452, upload("section_9_img_280",$pastaArquivos, "N"));
        $stm->bindValue(453, $section_9_image_alt_280);
        $stm->execute();
$idBanner = $this->pdo->lastInsertId();
    } catch(PDOException $erro){
        echo $erro->getMessage();
    }
  }
}
function editar($redireciona='index.php') {
    if(isset($_POST['acao']) && $_POST['acao'] == 'editaIndex') {
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
if(isset($_POST['section_1_link_1']) && !empty($_POST['section_1_link_1'])){
    $section_1_link_1 = $_POST['section_1_link_1'];
}else{
    $section_1_link_1 = '';
}
if(isset($_POST['section_1_link_alt_1']) && !empty($_POST['section_1_link_alt_1'])){
    $section_1_link_alt_1 = $_POST['section_1_link_alt_1'];
}else{
    $section_1_link_alt_1 = '';
}
if(isset($_POST['section_1_link_2']) && !empty($_POST['section_1_link_2'])){
    $section_1_link_2 = $_POST['section_1_link_2'];
}else{
    $section_1_link_2 = '';
}
if(isset($_POST['section_1_link_alt_2']) && !empty($_POST['section_1_link_alt_2'])){
    $section_1_link_alt_2 = $_POST['section_1_link_alt_2'];
}else{
    $section_1_link_alt_2 = '';
}
if(isset($_POST['section_1_link_3']) && !empty($_POST['section_1_link_3'])){
    $section_1_link_3 = $_POST['section_1_link_3'];
}else{
    $section_1_link_3 = '';
}
if(isset($_POST['section_1_link_alt_3']) && !empty($_POST['section_1_link_alt_3'])){
    $section_1_link_alt_3 = $_POST['section_1_link_alt_3'];
}else{
    $section_1_link_alt_3 = '';
}
if(isset($_POST['section_1_link_4']) && !empty($_POST['section_1_link_4'])){
    $section_1_link_4 = $_POST['section_1_link_4'];
}else{
    $section_1_link_4 = '';
}
if(isset($_POST['section_1_link_alt_4']) && !empty($_POST['section_1_link_alt_4'])){
    $section_1_link_alt_4 = $_POST['section_1_link_alt_4'];
}else{
    $section_1_link_alt_4 = '';
}
if(isset($_POST['section_1_image_alt_5']) && !empty($_POST['section_1_image_alt_5'])){
    $section_1_image_alt_5 = $_POST['section_1_image_alt_5'];
}else{
    $section_1_image_alt_5 = '';
}
if(isset($_POST['section_1_conteudo_6']) && !empty($_POST['section_1_conteudo_6'])){
    $section_1_conteudo_6 = $_POST['section_1_conteudo_6'];
}else{
    $section_1_conteudo_6 = '';
}
if(isset($_POST['section_1_conteudo_7']) && !empty($_POST['section_1_conteudo_7'])){
    $section_1_conteudo_7 = $_POST['section_1_conteudo_7'];
}else{
    $section_1_conteudo_7 = '';
}
if(isset($_POST['section_1_link_8']) && !empty($_POST['section_1_link_8'])){
    $section_1_link_8 = $_POST['section_1_link_8'];
}else{
    $section_1_link_8 = '';
}
if(isset($_POST['section_1_link_alt_8']) && !empty($_POST['section_1_link_alt_8'])){
    $section_1_link_alt_8 = $_POST['section_1_link_alt_8'];
}else{
    $section_1_link_alt_8 = '';
}
if(isset($_POST['section_1_link_conteudo_8']) && !empty($_POST['section_1_link_conteudo_8'])){
    $section_1_link_conteudo_8 = $_POST['section_1_link_conteudo_8'];
}else{
    $section_1_link_conteudo_8 = '';
}
if(isset($_POST['section_1_image_alt_9']) && !empty($_POST['section_1_image_alt_9'])){
    $section_1_image_alt_9 = $_POST['section_1_image_alt_9'];
}else{
    $section_1_image_alt_9 = '';
}
if(isset($_POST['section_1_link_10']) && !empty($_POST['section_1_link_10'])){
    $section_1_link_10 = $_POST['section_1_link_10'];
}else{
    $section_1_link_10 = '';
}
if(isset($_POST['section_1_link_alt_10']) && !empty($_POST['section_1_link_alt_10'])){
    $section_1_link_alt_10 = $_POST['section_1_link_alt_10'];
}else{
    $section_1_link_alt_10 = '';
}
if(isset($_POST['section_1_link_conteudo_10']) && !empty($_POST['section_1_link_conteudo_10'])){
    $section_1_link_conteudo_10 = $_POST['section_1_link_conteudo_10'];
}else{
    $section_1_link_conteudo_10 = '';
}
if(isset($_POST['section_1_image_alt_11']) && !empty($_POST['section_1_image_alt_11'])){
    $section_1_image_alt_11 = $_POST['section_1_image_alt_11'];
}else{
    $section_1_image_alt_11 = '';
}
if(isset($_POST['section_1_image_alt_12']) && !empty($_POST['section_1_image_alt_12'])){
    $section_1_image_alt_12 = $_POST['section_1_image_alt_12'];
}else{
    $section_1_image_alt_12 = '';
}
if(isset($_POST['section_1_image_alt_13']) && !empty($_POST['section_1_image_alt_13'])){
    $section_1_image_alt_13 = $_POST['section_1_image_alt_13'];
}else{
    $section_1_image_alt_13 = '';
}
if(isset($_POST['section_1_image_alt_14']) && !empty($_POST['section_1_image_alt_14'])){
    $section_1_image_alt_14 = $_POST['section_1_image_alt_14'];
}else{
    $section_1_image_alt_14 = '';
}
if(isset($_POST['section_1_link_15']) && !empty($_POST['section_1_link_15'])){
    $section_1_link_15 = $_POST['section_1_link_15'];
}else{
    $section_1_link_15 = '';
}
if(isset($_POST['section_1_link_alt_15']) && !empty($_POST['section_1_link_alt_15'])){
    $section_1_link_alt_15 = $_POST['section_1_link_alt_15'];
}else{
    $section_1_link_alt_15 = '';
}
if(isset($_POST['section_1_image_alt_16']) && !empty($_POST['section_1_image_alt_16'])){
    $section_1_image_alt_16 = $_POST['section_1_image_alt_16'];
}else{
    $section_1_image_alt_16 = '';
}
if(isset($_POST['section_1_image_alt_17']) && !empty($_POST['section_1_image_alt_17'])){
    $section_1_image_alt_17 = $_POST['section_1_image_alt_17'];
}else{
    $section_1_image_alt_17 = '';
}
if(isset($_POST['section_1_image_alt_18']) && !empty($_POST['section_1_image_alt_18'])){
    $section_1_image_alt_18 = $_POST['section_1_image_alt_18'];
}else{
    $section_1_image_alt_18 = '';
}
if(isset($_POST['section_2_image_alt_19']) && !empty($_POST['section_2_image_alt_19'])){
    $section_2_image_alt_19 = $_POST['section_2_image_alt_19'];
}else{
    $section_2_image_alt_19 = '';
}
if(isset($_POST['section_2_image_alt_20']) && !empty($_POST['section_2_image_alt_20'])){
    $section_2_image_alt_20 = $_POST['section_2_image_alt_20'];
}else{
    $section_2_image_alt_20 = '';
}
if(isset($_POST['section_2_image_alt_21']) && !empty($_POST['section_2_image_alt_21'])){
    $section_2_image_alt_21 = $_POST['section_2_image_alt_21'];
}else{
    $section_2_image_alt_21 = '';
}
if(isset($_POST['section_2_conteudo_22']) && !empty($_POST['section_2_conteudo_22'])){
    $section_2_conteudo_22 = $_POST['section_2_conteudo_22'];
}else{
    $section_2_conteudo_22 = '';
}
if(isset($_POST['section_2_conteudo_23']) && !empty($_POST['section_2_conteudo_23'])){
    $section_2_conteudo_23 = $_POST['section_2_conteudo_23'];
}else{
    $section_2_conteudo_23 = '';
}
if(isset($_POST['section_2_link_24']) && !empty($_POST['section_2_link_24'])){
    $section_2_link_24 = $_POST['section_2_link_24'];
}else{
    $section_2_link_24 = '';
}
if(isset($_POST['section_2_link_alt_24']) && !empty($_POST['section_2_link_alt_24'])){
    $section_2_link_alt_24 = $_POST['section_2_link_alt_24'];
}else{
    $section_2_link_alt_24 = '';
}
if(isset($_POST['section_2_image_alt_25']) && !empty($_POST['section_2_image_alt_25'])){
    $section_2_image_alt_25 = $_POST['section_2_image_alt_25'];
}else{
    $section_2_image_alt_25 = '';
}
if(isset($_POST['section_2_conteudo_26']) && !empty($_POST['section_2_conteudo_26'])){
    $section_2_conteudo_26 = $_POST['section_2_conteudo_26'];
}else{
    $section_2_conteudo_26 = '';
}
if(isset($_POST['section_2_conteudo_27']) && !empty($_POST['section_2_conteudo_27'])){
    $section_2_conteudo_27 = $_POST['section_2_conteudo_27'];
}else{
    $section_2_conteudo_27 = '';
}
if(isset($_POST['section_2_link_28']) && !empty($_POST['section_2_link_28'])){
    $section_2_link_28 = $_POST['section_2_link_28'];
}else{
    $section_2_link_28 = '';
}
if(isset($_POST['section_2_link_alt_28']) && !empty($_POST['section_2_link_alt_28'])){
    $section_2_link_alt_28 = $_POST['section_2_link_alt_28'];
}else{
    $section_2_link_alt_28 = '';
}
if(isset($_POST['section_2_image_alt_29']) && !empty($_POST['section_2_image_alt_29'])){
    $section_2_image_alt_29 = $_POST['section_2_image_alt_29'];
}else{
    $section_2_image_alt_29 = '';
}
if(isset($_POST['section_2_conteudo_30']) && !empty($_POST['section_2_conteudo_30'])){
    $section_2_conteudo_30 = $_POST['section_2_conteudo_30'];
}else{
    $section_2_conteudo_30 = '';
}
if(isset($_POST['section_2_conteudo_31']) && !empty($_POST['section_2_conteudo_31'])){
    $section_2_conteudo_31 = $_POST['section_2_conteudo_31'];
}else{
    $section_2_conteudo_31 = '';
}
if(isset($_POST['section_2_link_32']) && !empty($_POST['section_2_link_32'])){
    $section_2_link_32 = $_POST['section_2_link_32'];
}else{
    $section_2_link_32 = '';
}
if(isset($_POST['section_2_link_alt_32']) && !empty($_POST['section_2_link_alt_32'])){
    $section_2_link_alt_32 = $_POST['section_2_link_alt_32'];
}else{
    $section_2_link_alt_32 = '';
}
if(isset($_POST['section_2_image_alt_33']) && !empty($_POST['section_2_image_alt_33'])){
    $section_2_image_alt_33 = $_POST['section_2_image_alt_33'];
}else{
    $section_2_image_alt_33 = '';
}
if(isset($_POST['section_2_conteudo_34']) && !empty($_POST['section_2_conteudo_34'])){
    $section_2_conteudo_34 = $_POST['section_2_conteudo_34'];
}else{
    $section_2_conteudo_34 = '';
}
if(isset($_POST['section_2_conteudo_35']) && !empty($_POST['section_2_conteudo_35'])){
    $section_2_conteudo_35 = $_POST['section_2_conteudo_35'];
}else{
    $section_2_conteudo_35 = '';
}
if(isset($_POST['section_2_link_36']) && !empty($_POST['section_2_link_36'])){
    $section_2_link_36 = $_POST['section_2_link_36'];
}else{
    $section_2_link_36 = '';
}
if(isset($_POST['section_2_link_alt_36']) && !empty($_POST['section_2_link_alt_36'])){
    $section_2_link_alt_36 = $_POST['section_2_link_alt_36'];
}else{
    $section_2_link_alt_36 = '';
}
if(isset($_POST['section_2_image_alt_37']) && !empty($_POST['section_2_image_alt_37'])){
    $section_2_image_alt_37 = $_POST['section_2_image_alt_37'];
}else{
    $section_2_image_alt_37 = '';
}
if(isset($_POST['section_2_conteudo_38']) && !empty($_POST['section_2_conteudo_38'])){
    $section_2_conteudo_38 = $_POST['section_2_conteudo_38'];
}else{
    $section_2_conteudo_38 = '';
}
if(isset($_POST['section_2_conteudo_39']) && !empty($_POST['section_2_conteudo_39'])){
    $section_2_conteudo_39 = $_POST['section_2_conteudo_39'];
}else{
    $section_2_conteudo_39 = '';
}
if(isset($_POST['section_2_link_40']) && !empty($_POST['section_2_link_40'])){
    $section_2_link_40 = $_POST['section_2_link_40'];
}else{
    $section_2_link_40 = '';
}
if(isset($_POST['section_2_link_alt_40']) && !empty($_POST['section_2_link_alt_40'])){
    $section_2_link_alt_40 = $_POST['section_2_link_alt_40'];
}else{
    $section_2_link_alt_40 = '';
}
if(isset($_POST['section_2_link_conteudo_40']) && !empty($_POST['section_2_link_conteudo_40'])){
    $section_2_link_conteudo_40 = $_POST['section_2_link_conteudo_40'];
}else{
    $section_2_link_conteudo_40 = '';
}
if(isset($_POST['section_2_image_alt_41']) && !empty($_POST['section_2_image_alt_41'])){
    $section_2_image_alt_41 = $_POST['section_2_image_alt_41'];
}else{
    $section_2_image_alt_41 = '';
}
if(isset($_POST['section_2_image_alt_42']) && !empty($_POST['section_2_image_alt_42'])){
    $section_2_image_alt_42 = $_POST['section_2_image_alt_42'];
}else{
    $section_2_image_alt_42 = '';
}
if(isset($_POST['section_3_image_alt_43']) && !empty($_POST['section_3_image_alt_43'])){
    $section_3_image_alt_43 = $_POST['section_3_image_alt_43'];
}else{
    $section_3_image_alt_43 = '';
}
if(isset($_POST['section_3_conteudo_44']) && !empty($_POST['section_3_conteudo_44'])){
    $section_3_conteudo_44 = $_POST['section_3_conteudo_44'];
}else{
    $section_3_conteudo_44 = '';
}
if(isset($_POST['section_3_conteudo_45']) && !empty($_POST['section_3_conteudo_45'])){
    $section_3_conteudo_45 = $_POST['section_3_conteudo_45'];
}else{
    $section_3_conteudo_45 = '';
}
if(isset($_POST['section_3_image_alt_46']) && !empty($_POST['section_3_image_alt_46'])){
    $section_3_image_alt_46 = $_POST['section_3_image_alt_46'];
}else{
    $section_3_image_alt_46 = '';
}
if(isset($_POST['section_3_image_alt_47']) && !empty($_POST['section_3_image_alt_47'])){
    $section_3_image_alt_47 = $_POST['section_3_image_alt_47'];
}else{
    $section_3_image_alt_47 = '';
}
if(isset($_POST['section_3_image_alt_48']) && !empty($_POST['section_3_image_alt_48'])){
    $section_3_image_alt_48 = $_POST['section_3_image_alt_48'];
}else{
    $section_3_image_alt_48 = '';
}
if(isset($_POST['section_3_conteudo_49']) && !empty($_POST['section_3_conteudo_49'])){
    $section_3_conteudo_49 = $_POST['section_3_conteudo_49'];
}else{
    $section_3_conteudo_49 = '';
}
if(isset($_POST['section_3_image_alt_50']) && !empty($_POST['section_3_image_alt_50'])){
    $section_3_image_alt_50 = $_POST['section_3_image_alt_50'];
}else{
    $section_3_image_alt_50 = '';
}
if(isset($_POST['section_3_image_alt_51']) && !empty($_POST['section_3_image_alt_51'])){
    $section_3_image_alt_51 = $_POST['section_3_image_alt_51'];
}else{
    $section_3_image_alt_51 = '';
}
if(isset($_POST['section_3_conteudo_52']) && !empty($_POST['section_3_conteudo_52'])){
    $section_3_conteudo_52 = $_POST['section_3_conteudo_52'];
}else{
    $section_3_conteudo_52 = '';
}
if(isset($_POST['section_3_image_alt_53']) && !empty($_POST['section_3_image_alt_53'])){
    $section_3_image_alt_53 = $_POST['section_3_image_alt_53'];
}else{
    $section_3_image_alt_53 = '';
}
if(isset($_POST['section_3_image_alt_54']) && !empty($_POST['section_3_image_alt_54'])){
    $section_3_image_alt_54 = $_POST['section_3_image_alt_54'];
}else{
    $section_3_image_alt_54 = '';
}
if(isset($_POST['section_3_conteudo_55']) && !empty($_POST['section_3_conteudo_55'])){
    $section_3_conteudo_55 = $_POST['section_3_conteudo_55'];
}else{
    $section_3_conteudo_55 = '';
}
if(isset($_POST['section_3_image_alt_56']) && !empty($_POST['section_3_image_alt_56'])){
    $section_3_image_alt_56 = $_POST['section_3_image_alt_56'];
}else{
    $section_3_image_alt_56 = '';
}
if(isset($_POST['section_4_image_alt_57']) && !empty($_POST['section_4_image_alt_57'])){
    $section_4_image_alt_57 = $_POST['section_4_image_alt_57'];
}else{
    $section_4_image_alt_57 = '';
}
if(isset($_POST['section_4_image_alt_58']) && !empty($_POST['section_4_image_alt_58'])){
    $section_4_image_alt_58 = $_POST['section_4_image_alt_58'];
}else{
    $section_4_image_alt_58 = '';
}
if(isset($_POST['section_4_conteudo_59']) && !empty($_POST['section_4_conteudo_59'])){
    $section_4_conteudo_59 = $_POST['section_4_conteudo_59'];
}else{
    $section_4_conteudo_59 = '';
}
if(isset($_POST['section_4_conteudo_60']) && !empty($_POST['section_4_conteudo_60'])){
    $section_4_conteudo_60 = $_POST['section_4_conteudo_60'];
}else{
    $section_4_conteudo_60 = '';
}
if(isset($_POST['section_4_image_alt_61']) && !empty($_POST['section_4_image_alt_61'])){
    $section_4_image_alt_61 = $_POST['section_4_image_alt_61'];
}else{
    $section_4_image_alt_61 = '';
}
if(isset($_POST['section_4_image_alt_62']) && !empty($_POST['section_4_image_alt_62'])){
    $section_4_image_alt_62 = $_POST['section_4_image_alt_62'];
}else{
    $section_4_image_alt_62 = '';
}
if(isset($_POST['section_4_image_alt_63']) && !empty($_POST['section_4_image_alt_63'])){
    $section_4_image_alt_63 = $_POST['section_4_image_alt_63'];
}else{
    $section_4_image_alt_63 = '';
}
if(isset($_POST['section_4_image_alt_64']) && !empty($_POST['section_4_image_alt_64'])){
    $section_4_image_alt_64 = $_POST['section_4_image_alt_64'];
}else{
    $section_4_image_alt_64 = '';
}
if(isset($_POST['section_4_conteudo_65']) && !empty($_POST['section_4_conteudo_65'])){
    $section_4_conteudo_65 = $_POST['section_4_conteudo_65'];
}else{
    $section_4_conteudo_65 = '';
}
if(isset($_POST['section_4_conteudo_66']) && !empty($_POST['section_4_conteudo_66'])){
    $section_4_conteudo_66 = $_POST['section_4_conteudo_66'];
}else{
    $section_4_conteudo_66 = '';
}
if(isset($_POST['section_4_conteudo_67']) && !empty($_POST['section_4_conteudo_67'])){
    $section_4_conteudo_67 = $_POST['section_4_conteudo_67'];
}else{
    $section_4_conteudo_67 = '';
}
if(isset($_POST['section_4_link_68']) && !empty($_POST['section_4_link_68'])){
    $section_4_link_68 = $_POST['section_4_link_68'];
}else{
    $section_4_link_68 = '';
}
if(isset($_POST['section_4_link_alt_68']) && !empty($_POST['section_4_link_alt_68'])){
    $section_4_link_alt_68 = $_POST['section_4_link_alt_68'];
}else{
    $section_4_link_alt_68 = '';
}
if(isset($_POST['section_4_link_conteudo_68']) && !empty($_POST['section_4_link_conteudo_68'])){
    $section_4_link_conteudo_68 = $_POST['section_4_link_conteudo_68'];
}else{
    $section_4_link_conteudo_68 = '';
}
if(isset($_POST['section_4_image_alt_69']) && !empty($_POST['section_4_image_alt_69'])){
    $section_4_image_alt_69 = $_POST['section_4_image_alt_69'];
}else{
    $section_4_image_alt_69 = '';
}
if(isset($_POST['section_4_image_alt_70']) && !empty($_POST['section_4_image_alt_70'])){
    $section_4_image_alt_70 = $_POST['section_4_image_alt_70'];
}else{
    $section_4_image_alt_70 = '';
}
if(isset($_POST['section_4_image_alt_71']) && !empty($_POST['section_4_image_alt_71'])){
    $section_4_image_alt_71 = $_POST['section_4_image_alt_71'];
}else{
    $section_4_image_alt_71 = '';
}
if(isset($_POST['section_5_image_alt_72']) && !empty($_POST['section_5_image_alt_72'])){
    $section_5_image_alt_72 = $_POST['section_5_image_alt_72'];
}else{
    $section_5_image_alt_72 = '';
}
if(isset($_POST['section_5_image_alt_73']) && !empty($_POST['section_5_image_alt_73'])){
    $section_5_image_alt_73 = $_POST['section_5_image_alt_73'];
}else{
    $section_5_image_alt_73 = '';
}
if(isset($_POST['section_5_conteudo_74']) && !empty($_POST['section_5_conteudo_74'])){
    $section_5_conteudo_74 = $_POST['section_5_conteudo_74'];
}else{
    $section_5_conteudo_74 = '';
}
if(isset($_POST['section_5_conteudo_75']) && !empty($_POST['section_5_conteudo_75'])){
    $section_5_conteudo_75 = $_POST['section_5_conteudo_75'];
}else{
    $section_5_conteudo_75 = '';
}
if(isset($_POST['section_5_link_76']) && !empty($_POST['section_5_link_76'])){
    $section_5_link_76 = $_POST['section_5_link_76'];
}else{
    $section_5_link_76 = '';
}
if(isset($_POST['section_5_link_alt_76']) && !empty($_POST['section_5_link_alt_76'])){
    $section_5_link_alt_76 = $_POST['section_5_link_alt_76'];
}else{
    $section_5_link_alt_76 = '';
}
if(isset($_POST['section_5_link_conteudo_76']) && !empty($_POST['section_5_link_conteudo_76'])){
    $section_5_link_conteudo_76 = $_POST['section_5_link_conteudo_76'];
}else{
    $section_5_link_conteudo_76 = '';
}
if(isset($_POST['section_5_image_alt_77']) && !empty($_POST['section_5_image_alt_77'])){
    $section_5_image_alt_77 = $_POST['section_5_image_alt_77'];
}else{
    $section_5_image_alt_77 = '';
}
if(isset($_POST['section_5_image_alt_78']) && !empty($_POST['section_5_image_alt_78'])){
    $section_5_image_alt_78 = $_POST['section_5_image_alt_78'];
}else{
    $section_5_image_alt_78 = '';
}
if(isset($_POST['section_5_conteudo_79']) && !empty($_POST['section_5_conteudo_79'])){
    $section_5_conteudo_79 = $_POST['section_5_conteudo_79'];
}else{
    $section_5_conteudo_79 = '';
}
if(isset($_POST['section_5_conteudo_80']) && !empty($_POST['section_5_conteudo_80'])){
    $section_5_conteudo_80 = $_POST['section_5_conteudo_80'];
}else{
    $section_5_conteudo_80 = '';
}
if(isset($_POST['section_5_image_alt_81']) && !empty($_POST['section_5_image_alt_81'])){
    $section_5_image_alt_81 = $_POST['section_5_image_alt_81'];
}else{
    $section_5_image_alt_81 = '';
}
if(isset($_POST['section_5_conteudo_82']) && !empty($_POST['section_5_conteudo_82'])){
    $section_5_conteudo_82 = $_POST['section_5_conteudo_82'];
}else{
    $section_5_conteudo_82 = '';
}
if(isset($_POST['section_5_conteudo_83']) && !empty($_POST['section_5_conteudo_83'])){
    $section_5_conteudo_83 = $_POST['section_5_conteudo_83'];
}else{
    $section_5_conteudo_83 = '';
}
if(isset($_POST['section_5_image_alt_84']) && !empty($_POST['section_5_image_alt_84'])){
    $section_5_image_alt_84 = $_POST['section_5_image_alt_84'];
}else{
    $section_5_image_alt_84 = '';
}
if(isset($_POST['section_5_conteudo_85']) && !empty($_POST['section_5_conteudo_85'])){
    $section_5_conteudo_85 = $_POST['section_5_conteudo_85'];
}else{
    $section_5_conteudo_85 = '';
}
if(isset($_POST['section_5_conteudo_86']) && !empty($_POST['section_5_conteudo_86'])){
    $section_5_conteudo_86 = $_POST['section_5_conteudo_86'];
}else{
    $section_5_conteudo_86 = '';
}
if(isset($_POST['section_5_conteudo_87']) && !empty($_POST['section_5_conteudo_87'])){
    $section_5_conteudo_87 = $_POST['section_5_conteudo_87'];
}else{
    $section_5_conteudo_87 = '';
}
if(isset($_POST['section_5_image_alt_88']) && !empty($_POST['section_5_image_alt_88'])){
    $section_5_image_alt_88 = $_POST['section_5_image_alt_88'];
}else{
    $section_5_image_alt_88 = '';
}
if(isset($_POST['section_5_conteudo_89']) && !empty($_POST['section_5_conteudo_89'])){
    $section_5_conteudo_89 = $_POST['section_5_conteudo_89'];
}else{
    $section_5_conteudo_89 = '';
}
if(isset($_POST['section_5_conteudo_90']) && !empty($_POST['section_5_conteudo_90'])){
    $section_5_conteudo_90 = $_POST['section_5_conteudo_90'];
}else{
    $section_5_conteudo_90 = '';
}
if(isset($_POST['section_5_conteudo_91']) && !empty($_POST['section_5_conteudo_91'])){
    $section_5_conteudo_91 = $_POST['section_5_conteudo_91'];
}else{
    $section_5_conteudo_91 = '';
}
if(isset($_POST['section_5_image_alt_92']) && !empty($_POST['section_5_image_alt_92'])){
    $section_5_image_alt_92 = $_POST['section_5_image_alt_92'];
}else{
    $section_5_image_alt_92 = '';
}
if(isset($_POST['section_6_image_alt_93']) && !empty($_POST['section_6_image_alt_93'])){
    $section_6_image_alt_93 = $_POST['section_6_image_alt_93'];
}else{
    $section_6_image_alt_93 = '';
}
if(isset($_POST['section_6_conteudo_94']) && !empty($_POST['section_6_conteudo_94'])){
    $section_6_conteudo_94 = $_POST['section_6_conteudo_94'];
}else{
    $section_6_conteudo_94 = '';
}
if(isset($_POST['section_6_conteudo_95']) && !empty($_POST['section_6_conteudo_95'])){
    $section_6_conteudo_95 = $_POST['section_6_conteudo_95'];
}else{
    $section_6_conteudo_95 = '';
}
if(isset($_POST['section_6_image_alt_96']) && !empty($_POST['section_6_image_alt_96'])){
    $section_6_image_alt_96 = $_POST['section_6_image_alt_96'];
}else{
    $section_6_image_alt_96 = '';
}
if(isset($_POST['section_6_image_alt_97']) && !empty($_POST['section_6_image_alt_97'])){
    $section_6_image_alt_97 = $_POST['section_6_image_alt_97'];
}else{
    $section_6_image_alt_97 = '';
}
if(isset($_POST['section_6_conteudo_98']) && !empty($_POST['section_6_conteudo_98'])){
    $section_6_conteudo_98 = $_POST['section_6_conteudo_98'];
}else{
    $section_6_conteudo_98 = '';
}
if(isset($_POST['section_6_conteudo_99']) && !empty($_POST['section_6_conteudo_99'])){
    $section_6_conteudo_99 = $_POST['section_6_conteudo_99'];
}else{
    $section_6_conteudo_99 = '';
}
if(isset($_POST['section_6_conteudo_100']) && !empty($_POST['section_6_conteudo_100'])){
    $section_6_conteudo_100 = $_POST['section_6_conteudo_100'];
}else{
    $section_6_conteudo_100 = '';
}
if(isset($_POST['section_6_image_alt_101']) && !empty($_POST['section_6_image_alt_101'])){
    $section_6_image_alt_101 = $_POST['section_6_image_alt_101'];
}else{
    $section_6_image_alt_101 = '';
}
if(isset($_POST['section_6_conteudo_102']) && !empty($_POST['section_6_conteudo_102'])){
    $section_6_conteudo_102 = $_POST['section_6_conteudo_102'];
}else{
    $section_6_conteudo_102 = '';
}
if(isset($_POST['section_6_conteudo_103']) && !empty($_POST['section_6_conteudo_103'])){
    $section_6_conteudo_103 = $_POST['section_6_conteudo_103'];
}else{
    $section_6_conteudo_103 = '';
}
if(isset($_POST['section_6_conteudo_104']) && !empty($_POST['section_6_conteudo_104'])){
    $section_6_conteudo_104 = $_POST['section_6_conteudo_104'];
}else{
    $section_6_conteudo_104 = '';
}
if(isset($_POST['section_6_image_alt_105']) && !empty($_POST['section_6_image_alt_105'])){
    $section_6_image_alt_105 = $_POST['section_6_image_alt_105'];
}else{
    $section_6_image_alt_105 = '';
}
if(isset($_POST['section_6_conteudo_106']) && !empty($_POST['section_6_conteudo_106'])){
    $section_6_conteudo_106 = $_POST['section_6_conteudo_106'];
}else{
    $section_6_conteudo_106 = '';
}
if(isset($_POST['section_6_conteudo_107']) && !empty($_POST['section_6_conteudo_107'])){
    $section_6_conteudo_107 = $_POST['section_6_conteudo_107'];
}else{
    $section_6_conteudo_107 = '';
}
if(isset($_POST['section_6_conteudo_108']) && !empty($_POST['section_6_conteudo_108'])){
    $section_6_conteudo_108 = $_POST['section_6_conteudo_108'];
}else{
    $section_6_conteudo_108 = '';
}
if(isset($_POST['section_6_image_alt_109']) && !empty($_POST['section_6_image_alt_109'])){
    $section_6_image_alt_109 = $_POST['section_6_image_alt_109'];
}else{
    $section_6_image_alt_109 = '';
}
if(isset($_POST['section_6_conteudo_110']) && !empty($_POST['section_6_conteudo_110'])){
    $section_6_conteudo_110 = $_POST['section_6_conteudo_110'];
}else{
    $section_6_conteudo_110 = '';
}
if(isset($_POST['section_6_conteudo_111']) && !empty($_POST['section_6_conteudo_111'])){
    $section_6_conteudo_111 = $_POST['section_6_conteudo_111'];
}else{
    $section_6_conteudo_111 = '';
}
if(isset($_POST['section_6_conteudo_112']) && !empty($_POST['section_6_conteudo_112'])){
    $section_6_conteudo_112 = $_POST['section_6_conteudo_112'];
}else{
    $section_6_conteudo_112 = '';
}
if(isset($_POST['section_6_image_alt_113']) && !empty($_POST['section_6_image_alt_113'])){
    $section_6_image_alt_113 = $_POST['section_6_image_alt_113'];
}else{
    $section_6_image_alt_113 = '';
}
if(isset($_POST['section_6_conteudo_114']) && !empty($_POST['section_6_conteudo_114'])){
    $section_6_conteudo_114 = $_POST['section_6_conteudo_114'];
}else{
    $section_6_conteudo_114 = '';
}
if(isset($_POST['section_6_conteudo_115']) && !empty($_POST['section_6_conteudo_115'])){
    $section_6_conteudo_115 = $_POST['section_6_conteudo_115'];
}else{
    $section_6_conteudo_115 = '';
}
if(isset($_POST['section_6_conteudo_116']) && !empty($_POST['section_6_conteudo_116'])){
    $section_6_conteudo_116 = $_POST['section_6_conteudo_116'];
}else{
    $section_6_conteudo_116 = '';
}
if(isset($_POST['section_6_image_alt_117']) && !empty($_POST['section_6_image_alt_117'])){
    $section_6_image_alt_117 = $_POST['section_6_image_alt_117'];
}else{
    $section_6_image_alt_117 = '';
}
if(isset($_POST['section_6_conteudo_118']) && !empty($_POST['section_6_conteudo_118'])){
    $section_6_conteudo_118 = $_POST['section_6_conteudo_118'];
}else{
    $section_6_conteudo_118 = '';
}
if(isset($_POST['section_6_conteudo_119']) && !empty($_POST['section_6_conteudo_119'])){
    $section_6_conteudo_119 = $_POST['section_6_conteudo_119'];
}else{
    $section_6_conteudo_119 = '';
}
if(isset($_POST['section_6_conteudo_120']) && !empty($_POST['section_6_conteudo_120'])){
    $section_6_conteudo_120 = $_POST['section_6_conteudo_120'];
}else{
    $section_6_conteudo_120 = '';
}
if(isset($_POST['section_6_image_alt_121']) && !empty($_POST['section_6_image_alt_121'])){
    $section_6_image_alt_121 = $_POST['section_6_image_alt_121'];
}else{
    $section_6_image_alt_121 = '';
}
if(isset($_POST['section_6_conteudo_122']) && !empty($_POST['section_6_conteudo_122'])){
    $section_6_conteudo_122 = $_POST['section_6_conteudo_122'];
}else{
    $section_6_conteudo_122 = '';
}
if(isset($_POST['section_6_conteudo_123']) && !empty($_POST['section_6_conteudo_123'])){
    $section_6_conteudo_123 = $_POST['section_6_conteudo_123'];
}else{
    $section_6_conteudo_123 = '';
}
if(isset($_POST['section_6_conteudo_124']) && !empty($_POST['section_6_conteudo_124'])){
    $section_6_conteudo_124 = $_POST['section_6_conteudo_124'];
}else{
    $section_6_conteudo_124 = '';
}
if(isset($_POST['section_6_image_alt_125']) && !empty($_POST['section_6_image_alt_125'])){
    $section_6_image_alt_125 = $_POST['section_6_image_alt_125'];
}else{
    $section_6_image_alt_125 = '';
}
if(isset($_POST['section_6_conteudo_126']) && !empty($_POST['section_6_conteudo_126'])){
    $section_6_conteudo_126 = $_POST['section_6_conteudo_126'];
}else{
    $section_6_conteudo_126 = '';
}
if(isset($_POST['section_6_conteudo_127']) && !empty($_POST['section_6_conteudo_127'])){
    $section_6_conteudo_127 = $_POST['section_6_conteudo_127'];
}else{
    $section_6_conteudo_127 = '';
}
if(isset($_POST['section_6_conteudo_128']) && !empty($_POST['section_6_conteudo_128'])){
    $section_6_conteudo_128 = $_POST['section_6_conteudo_128'];
}else{
    $section_6_conteudo_128 = '';
}
if(isset($_POST['section_6_image_alt_129']) && !empty($_POST['section_6_image_alt_129'])){
    $section_6_image_alt_129 = $_POST['section_6_image_alt_129'];
}else{
    $section_6_image_alt_129 = '';
}
if(isset($_POST['section_6_conteudo_130']) && !empty($_POST['section_6_conteudo_130'])){
    $section_6_conteudo_130 = $_POST['section_6_conteudo_130'];
}else{
    $section_6_conteudo_130 = '';
}
if(isset($_POST['section_6_conteudo_131']) && !empty($_POST['section_6_conteudo_131'])){
    $section_6_conteudo_131 = $_POST['section_6_conteudo_131'];
}else{
    $section_6_conteudo_131 = '';
}
if(isset($_POST['section_6_conteudo_132']) && !empty($_POST['section_6_conteudo_132'])){
    $section_6_conteudo_132 = $_POST['section_6_conteudo_132'];
}else{
    $section_6_conteudo_132 = '';
}
if(isset($_POST['section_6_image_alt_133']) && !empty($_POST['section_6_image_alt_133'])){
    $section_6_image_alt_133 = $_POST['section_6_image_alt_133'];
}else{
    $section_6_image_alt_133 = '';
}
if(isset($_POST['section_6_conteudo_134']) && !empty($_POST['section_6_conteudo_134'])){
    $section_6_conteudo_134 = $_POST['section_6_conteudo_134'];
}else{
    $section_6_conteudo_134 = '';
}
if(isset($_POST['section_6_conteudo_135']) && !empty($_POST['section_6_conteudo_135'])){
    $section_6_conteudo_135 = $_POST['section_6_conteudo_135'];
}else{
    $section_6_conteudo_135 = '';
}
if(isset($_POST['section_6_conteudo_136']) && !empty($_POST['section_6_conteudo_136'])){
    $section_6_conteudo_136 = $_POST['section_6_conteudo_136'];
}else{
    $section_6_conteudo_136 = '';
}
if(isset($_POST['section_6_image_alt_137']) && !empty($_POST['section_6_image_alt_137'])){
    $section_6_image_alt_137 = $_POST['section_6_image_alt_137'];
}else{
    $section_6_image_alt_137 = '';
}
if(isset($_POST['section_6_conteudo_138']) && !empty($_POST['section_6_conteudo_138'])){
    $section_6_conteudo_138 = $_POST['section_6_conteudo_138'];
}else{
    $section_6_conteudo_138 = '';
}
if(isset($_POST['section_6_conteudo_139']) && !empty($_POST['section_6_conteudo_139'])){
    $section_6_conteudo_139 = $_POST['section_6_conteudo_139'];
}else{
    $section_6_conteudo_139 = '';
}
if(isset($_POST['section_6_conteudo_140']) && !empty($_POST['section_6_conteudo_140'])){
    $section_6_conteudo_140 = $_POST['section_6_conteudo_140'];
}else{
    $section_6_conteudo_140 = '';
}
if(isset($_POST['section_6_image_alt_141']) && !empty($_POST['section_6_image_alt_141'])){
    $section_6_image_alt_141 = $_POST['section_6_image_alt_141'];
}else{
    $section_6_image_alt_141 = '';
}
if(isset($_POST['section_6_conteudo_142']) && !empty($_POST['section_6_conteudo_142'])){
    $section_6_conteudo_142 = $_POST['section_6_conteudo_142'];
}else{
    $section_6_conteudo_142 = '';
}
if(isset($_POST['section_6_conteudo_143']) && !empty($_POST['section_6_conteudo_143'])){
    $section_6_conteudo_143 = $_POST['section_6_conteudo_143'];
}else{
    $section_6_conteudo_143 = '';
}
if(isset($_POST['section_6_conteudo_144']) && !empty($_POST['section_6_conteudo_144'])){
    $section_6_conteudo_144 = $_POST['section_6_conteudo_144'];
}else{
    $section_6_conteudo_144 = '';
}
if(isset($_POST['section_6_image_alt_145']) && !empty($_POST['section_6_image_alt_145'])){
    $section_6_image_alt_145 = $_POST['section_6_image_alt_145'];
}else{
    $section_6_image_alt_145 = '';
}
if(isset($_POST['section_6_conteudo_146']) && !empty($_POST['section_6_conteudo_146'])){
    $section_6_conteudo_146 = $_POST['section_6_conteudo_146'];
}else{
    $section_6_conteudo_146 = '';
}
if(isset($_POST['section_6_conteudo_147']) && !empty($_POST['section_6_conteudo_147'])){
    $section_6_conteudo_147 = $_POST['section_6_conteudo_147'];
}else{
    $section_6_conteudo_147 = '';
}
if(isset($_POST['section_6_conteudo_148']) && !empty($_POST['section_6_conteudo_148'])){
    $section_6_conteudo_148 = $_POST['section_6_conteudo_148'];
}else{
    $section_6_conteudo_148 = '';
}
if(isset($_POST['section_6_image_alt_149']) && !empty($_POST['section_6_image_alt_149'])){
    $section_6_image_alt_149 = $_POST['section_6_image_alt_149'];
}else{
    $section_6_image_alt_149 = '';
}
if(isset($_POST['section_6_conteudo_150']) && !empty($_POST['section_6_conteudo_150'])){
    $section_6_conteudo_150 = $_POST['section_6_conteudo_150'];
}else{
    $section_6_conteudo_150 = '';
}
if(isset($_POST['section_6_conteudo_151']) && !empty($_POST['section_6_conteudo_151'])){
    $section_6_conteudo_151 = $_POST['section_6_conteudo_151'];
}else{
    $section_6_conteudo_151 = '';
}
if(isset($_POST['section_6_conteudo_152']) && !empty($_POST['section_6_conteudo_152'])){
    $section_6_conteudo_152 = $_POST['section_6_conteudo_152'];
}else{
    $section_6_conteudo_152 = '';
}
if(isset($_POST['section_6_image_alt_153']) && !empty($_POST['section_6_image_alt_153'])){
    $section_6_image_alt_153 = $_POST['section_6_image_alt_153'];
}else{
    $section_6_image_alt_153 = '';
}
if(isset($_POST['section_6_conteudo_154']) && !empty($_POST['section_6_conteudo_154'])){
    $section_6_conteudo_154 = $_POST['section_6_conteudo_154'];
}else{
    $section_6_conteudo_154 = '';
}
if(isset($_POST['section_6_conteudo_155']) && !empty($_POST['section_6_conteudo_155'])){
    $section_6_conteudo_155 = $_POST['section_6_conteudo_155'];
}else{
    $section_6_conteudo_155 = '';
}
if(isset($_POST['section_6_conteudo_156']) && !empty($_POST['section_6_conteudo_156'])){
    $section_6_conteudo_156 = $_POST['section_6_conteudo_156'];
}else{
    $section_6_conteudo_156 = '';
}
if(isset($_POST['section_6_image_alt_157']) && !empty($_POST['section_6_image_alt_157'])){
    $section_6_image_alt_157 = $_POST['section_6_image_alt_157'];
}else{
    $section_6_image_alt_157 = '';
}
if(isset($_POST['section_7_image_alt_158']) && !empty($_POST['section_7_image_alt_158'])){
    $section_7_image_alt_158 = $_POST['section_7_image_alt_158'];
}else{
    $section_7_image_alt_158 = '';
}
if(isset($_POST['section_7_image_alt_159']) && !empty($_POST['section_7_image_alt_159'])){
    $section_7_image_alt_159 = $_POST['section_7_image_alt_159'];
}else{
    $section_7_image_alt_159 = '';
}
if(isset($_POST['section_7_image_alt_160']) && !empty($_POST['section_7_image_alt_160'])){
    $section_7_image_alt_160 = $_POST['section_7_image_alt_160'];
}else{
    $section_7_image_alt_160 = '';
}
if(isset($_POST['section_7_image_alt_161']) && !empty($_POST['section_7_image_alt_161'])){
    $section_7_image_alt_161 = $_POST['section_7_image_alt_161'];
}else{
    $section_7_image_alt_161 = '';
}
if(isset($_POST['section_7_image_alt_162']) && !empty($_POST['section_7_image_alt_162'])){
    $section_7_image_alt_162 = $_POST['section_7_image_alt_162'];
}else{
    $section_7_image_alt_162 = '';
}
if(isset($_POST['section_7_image_alt_163']) && !empty($_POST['section_7_image_alt_163'])){
    $section_7_image_alt_163 = $_POST['section_7_image_alt_163'];
}else{
    $section_7_image_alt_163 = '';
}
if(isset($_POST['section_7_image_alt_164']) && !empty($_POST['section_7_image_alt_164'])){
    $section_7_image_alt_164 = $_POST['section_7_image_alt_164'];
}else{
    $section_7_image_alt_164 = '';
}
if(isset($_POST['section_7_conteudo_165']) && !empty($_POST['section_7_conteudo_165'])){
    $section_7_conteudo_165 = $_POST['section_7_conteudo_165'];
}else{
    $section_7_conteudo_165 = '';
}
if(isset($_POST['section_7_conteudo_166']) && !empty($_POST['section_7_conteudo_166'])){
    $section_7_conteudo_166 = $_POST['section_7_conteudo_166'];
}else{
    $section_7_conteudo_166 = '';
}
if(isset($_POST['section_7_image_alt_167']) && !empty($_POST['section_7_image_alt_167'])){
    $section_7_image_alt_167 = $_POST['section_7_image_alt_167'];
}else{
    $section_7_image_alt_167 = '';
}
if(isset($_POST['section_7_conteudo_168']) && !empty($_POST['section_7_conteudo_168'])){
    $section_7_conteudo_168 = $_POST['section_7_conteudo_168'];
}else{
    $section_7_conteudo_168 = '';
}
if(isset($_POST['section_7_conteudo_169']) && !empty($_POST['section_7_conteudo_169'])){
    $section_7_conteudo_169 = $_POST['section_7_conteudo_169'];
}else{
    $section_7_conteudo_169 = '';
}
if(isset($_POST['section_7_conteudo_170']) && !empty($_POST['section_7_conteudo_170'])){
    $section_7_conteudo_170 = $_POST['section_7_conteudo_170'];
}else{
    $section_7_conteudo_170 = '';
}
if(isset($_POST['section_7_image_alt_171']) && !empty($_POST['section_7_image_alt_171'])){
    $section_7_image_alt_171 = $_POST['section_7_image_alt_171'];
}else{
    $section_7_image_alt_171 = '';
}
if(isset($_POST['section_7_conteudo_172']) && !empty($_POST['section_7_conteudo_172'])){
    $section_7_conteudo_172 = $_POST['section_7_conteudo_172'];
}else{
    $section_7_conteudo_172 = '';
}
if(isset($_POST['section_7_conteudo_173']) && !empty($_POST['section_7_conteudo_173'])){
    $section_7_conteudo_173 = $_POST['section_7_conteudo_173'];
}else{
    $section_7_conteudo_173 = '';
}
if(isset($_POST['section_7_link_174']) && !empty($_POST['section_7_link_174'])){
    $section_7_link_174 = $_POST['section_7_link_174'];
}else{
    $section_7_link_174 = '';
}
if(isset($_POST['section_7_link_alt_174']) && !empty($_POST['section_7_link_alt_174'])){
    $section_7_link_alt_174 = $_POST['section_7_link_alt_174'];
}else{
    $section_7_link_alt_174 = '';
}
if(isset($_POST['section_7_link_conteudo_174']) && !empty($_POST['section_7_link_conteudo_174'])){
    $section_7_link_conteudo_174 = $_POST['section_7_link_conteudo_174'];
}else{
    $section_7_link_conteudo_174 = '';
}
if(isset($_POST['section_7_conteudo_175']) && !empty($_POST['section_7_conteudo_175'])){
    $section_7_conteudo_175 = $_POST['section_7_conteudo_175'];
}else{
    $section_7_conteudo_175 = '';
}
if(isset($_POST['section_7_link_176']) && !empty($_POST['section_7_link_176'])){
    $section_7_link_176 = $_POST['section_7_link_176'];
}else{
    $section_7_link_176 = '';
}
if(isset($_POST['section_7_link_alt_176']) && !empty($_POST['section_7_link_alt_176'])){
    $section_7_link_alt_176 = $_POST['section_7_link_alt_176'];
}else{
    $section_7_link_alt_176 = '';
}
if(isset($_POST['section_7_link_conteudo_176']) && !empty($_POST['section_7_link_conteudo_176'])){
    $section_7_link_conteudo_176 = $_POST['section_7_link_conteudo_176'];
}else{
    $section_7_link_conteudo_176 = '';
}
if(isset($_POST['section_7_conteudo_177']) && !empty($_POST['section_7_conteudo_177'])){
    $section_7_conteudo_177 = $_POST['section_7_conteudo_177'];
}else{
    $section_7_conteudo_177 = '';
}
if(isset($_POST['section_7_image_alt_178']) && !empty($_POST['section_7_image_alt_178'])){
    $section_7_image_alt_178 = $_POST['section_7_image_alt_178'];
}else{
    $section_7_image_alt_178 = '';
}
if(isset($_POST['section_8_image_alt_179']) && !empty($_POST['section_8_image_alt_179'])){
    $section_8_image_alt_179 = $_POST['section_8_image_alt_179'];
}else{
    $section_8_image_alt_179 = '';
}
if(isset($_POST['section_8_conteudo_180']) && !empty($_POST['section_8_conteudo_180'])){
    $section_8_conteudo_180 = $_POST['section_8_conteudo_180'];
}else{
    $section_8_conteudo_180 = '';
}
if(isset($_POST['section_8_conteudo_181']) && !empty($_POST['section_8_conteudo_181'])){
    $section_8_conteudo_181 = $_POST['section_8_conteudo_181'];
}else{
    $section_8_conteudo_181 = '';
}
if(isset($_POST['section_8_image_alt_182']) && !empty($_POST['section_8_image_alt_182'])){
    $section_8_image_alt_182 = $_POST['section_8_image_alt_182'];
}else{
    $section_8_image_alt_182 = '';
}
if(isset($_POST['section_8_image_alt_183']) && !empty($_POST['section_8_image_alt_183'])){
    $section_8_image_alt_183 = $_POST['section_8_image_alt_183'];
}else{
    $section_8_image_alt_183 = '';
}
if(isset($_POST['section_8_conteudo_184']) && !empty($_POST['section_8_conteudo_184'])){
    $section_8_conteudo_184 = $_POST['section_8_conteudo_184'];
}else{
    $section_8_conteudo_184 = '';
}
if(isset($_POST['section_8_conteudo_185']) && !empty($_POST['section_8_conteudo_185'])){
    $section_8_conteudo_185 = $_POST['section_8_conteudo_185'];
}else{
    $section_8_conteudo_185 = '';
}
if(isset($_POST['section_8_conteudo_186']) && !empty($_POST['section_8_conteudo_186'])){
    $section_8_conteudo_186 = $_POST['section_8_conteudo_186'];
}else{
    $section_8_conteudo_186 = '';
}
if(isset($_POST['section_8_conteudo_187']) && !empty($_POST['section_8_conteudo_187'])){
    $section_8_conteudo_187 = $_POST['section_8_conteudo_187'];
}else{
    $section_8_conteudo_187 = '';
}
if(isset($_POST['section_8_link_188']) && !empty($_POST['section_8_link_188'])){
    $section_8_link_188 = $_POST['section_8_link_188'];
}else{
    $section_8_link_188 = '';
}
if(isset($_POST['section_8_link_alt_188']) && !empty($_POST['section_8_link_alt_188'])){
    $section_8_link_alt_188 = $_POST['section_8_link_alt_188'];
}else{
    $section_8_link_alt_188 = '';
}
if(isset($_POST['section_8_link_conteudo_188']) && !empty($_POST['section_8_link_conteudo_188'])){
    $section_8_link_conteudo_188 = $_POST['section_8_link_conteudo_188'];
}else{
    $section_8_link_conteudo_188 = '';
}
if(isset($_POST['section_8_image_alt_189']) && !empty($_POST['section_8_image_alt_189'])){
    $section_8_image_alt_189 = $_POST['section_8_image_alt_189'];
}else{
    $section_8_image_alt_189 = '';
}
if(isset($_POST['section_8_image_alt_190']) && !empty($_POST['section_8_image_alt_190'])){
    $section_8_image_alt_190 = $_POST['section_8_image_alt_190'];
}else{
    $section_8_image_alt_190 = '';
}
if(isset($_POST['section_8_conteudo_191']) && !empty($_POST['section_8_conteudo_191'])){
    $section_8_conteudo_191 = $_POST['section_8_conteudo_191'];
}else{
    $section_8_conteudo_191 = '';
}
if(isset($_POST['section_8_conteudo_192']) && !empty($_POST['section_8_conteudo_192'])){
    $section_8_conteudo_192 = $_POST['section_8_conteudo_192'];
}else{
    $section_8_conteudo_192 = '';
}
if(isset($_POST['section_8_conteudo_193']) && !empty($_POST['section_8_conteudo_193'])){
    $section_8_conteudo_193 = $_POST['section_8_conteudo_193'];
}else{
    $section_8_conteudo_193 = '';
}
if(isset($_POST['section_8_conteudo_194']) && !empty($_POST['section_8_conteudo_194'])){
    $section_8_conteudo_194 = $_POST['section_8_conteudo_194'];
}else{
    $section_8_conteudo_194 = '';
}
if(isset($_POST['section_8_link_195']) && !empty($_POST['section_8_link_195'])){
    $section_8_link_195 = $_POST['section_8_link_195'];
}else{
    $section_8_link_195 = '';
}
if(isset($_POST['section_8_link_alt_195']) && !empty($_POST['section_8_link_alt_195'])){
    $section_8_link_alt_195 = $_POST['section_8_link_alt_195'];
}else{
    $section_8_link_alt_195 = '';
}
if(isset($_POST['section_8_link_conteudo_195']) && !empty($_POST['section_8_link_conteudo_195'])){
    $section_8_link_conteudo_195 = $_POST['section_8_link_conteudo_195'];
}else{
    $section_8_link_conteudo_195 = '';
}
if(isset($_POST['section_8_image_alt_196']) && !empty($_POST['section_8_image_alt_196'])){
    $section_8_image_alt_196 = $_POST['section_8_image_alt_196'];
}else{
    $section_8_image_alt_196 = '';
}
if(isset($_POST['section_8_image_alt_197']) && !empty($_POST['section_8_image_alt_197'])){
    $section_8_image_alt_197 = $_POST['section_8_image_alt_197'];
}else{
    $section_8_image_alt_197 = '';
}
if(isset($_POST['section_8_conteudo_198']) && !empty($_POST['section_8_conteudo_198'])){
    $section_8_conteudo_198 = $_POST['section_8_conteudo_198'];
}else{
    $section_8_conteudo_198 = '';
}
if(isset($_POST['section_8_conteudo_199']) && !empty($_POST['section_8_conteudo_199'])){
    $section_8_conteudo_199 = $_POST['section_8_conteudo_199'];
}else{
    $section_8_conteudo_199 = '';
}
if(isset($_POST['section_8_conteudo_200']) && !empty($_POST['section_8_conteudo_200'])){
    $section_8_conteudo_200 = $_POST['section_8_conteudo_200'];
}else{
    $section_8_conteudo_200 = '';
}
if(isset($_POST['section_8_conteudo_201']) && !empty($_POST['section_8_conteudo_201'])){
    $section_8_conteudo_201 = $_POST['section_8_conteudo_201'];
}else{
    $section_8_conteudo_201 = '';
}
if(isset($_POST['section_8_link_202']) && !empty($_POST['section_8_link_202'])){
    $section_8_link_202 = $_POST['section_8_link_202'];
}else{
    $section_8_link_202 = '';
}
if(isset($_POST['section_8_link_alt_202']) && !empty($_POST['section_8_link_alt_202'])){
    $section_8_link_alt_202 = $_POST['section_8_link_alt_202'];
}else{
    $section_8_link_alt_202 = '';
}
if(isset($_POST['section_8_link_conteudo_202']) && !empty($_POST['section_8_link_conteudo_202'])){
    $section_8_link_conteudo_202 = $_POST['section_8_link_conteudo_202'];
}else{
    $section_8_link_conteudo_202 = '';
}
if(isset($_POST['section_8_image_alt_203']) && !empty($_POST['section_8_image_alt_203'])){
    $section_8_image_alt_203 = $_POST['section_8_image_alt_203'];
}else{
    $section_8_image_alt_203 = '';
}
if(isset($_POST['section_8_image_alt_204']) && !empty($_POST['section_8_image_alt_204'])){
    $section_8_image_alt_204 = $_POST['section_8_image_alt_204'];
}else{
    $section_8_image_alt_204 = '';
}
if(isset($_POST['section_8_conteudo_205']) && !empty($_POST['section_8_conteudo_205'])){
    $section_8_conteudo_205 = $_POST['section_8_conteudo_205'];
}else{
    $section_8_conteudo_205 = '';
}
if(isset($_POST['section_8_conteudo_206']) && !empty($_POST['section_8_conteudo_206'])){
    $section_8_conteudo_206 = $_POST['section_8_conteudo_206'];
}else{
    $section_8_conteudo_206 = '';
}
if(isset($_POST['section_8_conteudo_207']) && !empty($_POST['section_8_conteudo_207'])){
    $section_8_conteudo_207 = $_POST['section_8_conteudo_207'];
}else{
    $section_8_conteudo_207 = '';
}
if(isset($_POST['section_8_conteudo_208']) && !empty($_POST['section_8_conteudo_208'])){
    $section_8_conteudo_208 = $_POST['section_8_conteudo_208'];
}else{
    $section_8_conteudo_208 = '';
}
if(isset($_POST['section_8_link_209']) && !empty($_POST['section_8_link_209'])){
    $section_8_link_209 = $_POST['section_8_link_209'];
}else{
    $section_8_link_209 = '';
}
if(isset($_POST['section_8_link_alt_209']) && !empty($_POST['section_8_link_alt_209'])){
    $section_8_link_alt_209 = $_POST['section_8_link_alt_209'];
}else{
    $section_8_link_alt_209 = '';
}
if(isset($_POST['section_8_link_conteudo_209']) && !empty($_POST['section_8_link_conteudo_209'])){
    $section_8_link_conteudo_209 = $_POST['section_8_link_conteudo_209'];
}else{
    $section_8_link_conteudo_209 = '';
}
if(isset($_POST['section_8_image_alt_210']) && !empty($_POST['section_8_image_alt_210'])){
    $section_8_image_alt_210 = $_POST['section_8_image_alt_210'];
}else{
    $section_8_image_alt_210 = '';
}
if(isset($_POST['section_8_image_alt_211']) && !empty($_POST['section_8_image_alt_211'])){
    $section_8_image_alt_211 = $_POST['section_8_image_alt_211'];
}else{
    $section_8_image_alt_211 = '';
}
if(isset($_POST['section_8_conteudo_212']) && !empty($_POST['section_8_conteudo_212'])){
    $section_8_conteudo_212 = $_POST['section_8_conteudo_212'];
}else{
    $section_8_conteudo_212 = '';
}
if(isset($_POST['section_8_conteudo_213']) && !empty($_POST['section_8_conteudo_213'])){
    $section_8_conteudo_213 = $_POST['section_8_conteudo_213'];
}else{
    $section_8_conteudo_213 = '';
}
if(isset($_POST['section_8_conteudo_214']) && !empty($_POST['section_8_conteudo_214'])){
    $section_8_conteudo_214 = $_POST['section_8_conteudo_214'];
}else{
    $section_8_conteudo_214 = '';
}
if(isset($_POST['section_8_conteudo_215']) && !empty($_POST['section_8_conteudo_215'])){
    $section_8_conteudo_215 = $_POST['section_8_conteudo_215'];
}else{
    $section_8_conteudo_215 = '';
}
if(isset($_POST['section_8_link_216']) && !empty($_POST['section_8_link_216'])){
    $section_8_link_216 = $_POST['section_8_link_216'];
}else{
    $section_8_link_216 = '';
}
if(isset($_POST['section_8_link_alt_216']) && !empty($_POST['section_8_link_alt_216'])){
    $section_8_link_alt_216 = $_POST['section_8_link_alt_216'];
}else{
    $section_8_link_alt_216 = '';
}
if(isset($_POST['section_8_link_conteudo_216']) && !empty($_POST['section_8_link_conteudo_216'])){
    $section_8_link_conteudo_216 = $_POST['section_8_link_conteudo_216'];
}else{
    $section_8_link_conteudo_216 = '';
}
if(isset($_POST['section_8_image_alt_217']) && !empty($_POST['section_8_image_alt_217'])){
    $section_8_image_alt_217 = $_POST['section_8_image_alt_217'];
}else{
    $section_8_image_alt_217 = '';
}
if(isset($_POST['section_8_image_alt_218']) && !empty($_POST['section_8_image_alt_218'])){
    $section_8_image_alt_218 = $_POST['section_8_image_alt_218'];
}else{
    $section_8_image_alt_218 = '';
}
if(isset($_POST['section_8_conteudo_219']) && !empty($_POST['section_8_conteudo_219'])){
    $section_8_conteudo_219 = $_POST['section_8_conteudo_219'];
}else{
    $section_8_conteudo_219 = '';
}
if(isset($_POST['section_8_conteudo_220']) && !empty($_POST['section_8_conteudo_220'])){
    $section_8_conteudo_220 = $_POST['section_8_conteudo_220'];
}else{
    $section_8_conteudo_220 = '';
}
if(isset($_POST['section_8_conteudo_221']) && !empty($_POST['section_8_conteudo_221'])){
    $section_8_conteudo_221 = $_POST['section_8_conteudo_221'];
}else{
    $section_8_conteudo_221 = '';
}
if(isset($_POST['section_8_conteudo_222']) && !empty($_POST['section_8_conteudo_222'])){
    $section_8_conteudo_222 = $_POST['section_8_conteudo_222'];
}else{
    $section_8_conteudo_222 = '';
}
if(isset($_POST['section_8_link_223']) && !empty($_POST['section_8_link_223'])){
    $section_8_link_223 = $_POST['section_8_link_223'];
}else{
    $section_8_link_223 = '';
}
if(isset($_POST['section_8_link_alt_223']) && !empty($_POST['section_8_link_alt_223'])){
    $section_8_link_alt_223 = $_POST['section_8_link_alt_223'];
}else{
    $section_8_link_alt_223 = '';
}
if(isset($_POST['section_8_link_conteudo_223']) && !empty($_POST['section_8_link_conteudo_223'])){
    $section_8_link_conteudo_223 = $_POST['section_8_link_conteudo_223'];
}else{
    $section_8_link_conteudo_223 = '';
}
if(isset($_POST['section_8_image_alt_224']) && !empty($_POST['section_8_image_alt_224'])){
    $section_8_image_alt_224 = $_POST['section_8_image_alt_224'];
}else{
    $section_8_image_alt_224 = '';
}
if(isset($_POST['section_8_image_alt_225']) && !empty($_POST['section_8_image_alt_225'])){
    $section_8_image_alt_225 = $_POST['section_8_image_alt_225'];
}else{
    $section_8_image_alt_225 = '';
}
if(isset($_POST['section_8_conteudo_226']) && !empty($_POST['section_8_conteudo_226'])){
    $section_8_conteudo_226 = $_POST['section_8_conteudo_226'];
}else{
    $section_8_conteudo_226 = '';
}
if(isset($_POST['section_8_conteudo_227']) && !empty($_POST['section_8_conteudo_227'])){
    $section_8_conteudo_227 = $_POST['section_8_conteudo_227'];
}else{
    $section_8_conteudo_227 = '';
}
if(isset($_POST['section_8_conteudo_228']) && !empty($_POST['section_8_conteudo_228'])){
    $section_8_conteudo_228 = $_POST['section_8_conteudo_228'];
}else{
    $section_8_conteudo_228 = '';
}
if(isset($_POST['section_8_conteudo_229']) && !empty($_POST['section_8_conteudo_229'])){
    $section_8_conteudo_229 = $_POST['section_8_conteudo_229'];
}else{
    $section_8_conteudo_229 = '';
}
if(isset($_POST['section_8_link_230']) && !empty($_POST['section_8_link_230'])){
    $section_8_link_230 = $_POST['section_8_link_230'];
}else{
    $section_8_link_230 = '';
}
if(isset($_POST['section_8_link_alt_230']) && !empty($_POST['section_8_link_alt_230'])){
    $section_8_link_alt_230 = $_POST['section_8_link_alt_230'];
}else{
    $section_8_link_alt_230 = '';
}
if(isset($_POST['section_8_link_conteudo_230']) && !empty($_POST['section_8_link_conteudo_230'])){
    $section_8_link_conteudo_230 = $_POST['section_8_link_conteudo_230'];
}else{
    $section_8_link_conteudo_230 = '';
}
if(isset($_POST['section_8_image_alt_231']) && !empty($_POST['section_8_image_alt_231'])){
    $section_8_image_alt_231 = $_POST['section_8_image_alt_231'];
}else{
    $section_8_image_alt_231 = '';
}
if(isset($_POST['section_8_image_alt_232']) && !empty($_POST['section_8_image_alt_232'])){
    $section_8_image_alt_232 = $_POST['section_8_image_alt_232'];
}else{
    $section_8_image_alt_232 = '';
}
if(isset($_POST['section_8_conteudo_233']) && !empty($_POST['section_8_conteudo_233'])){
    $section_8_conteudo_233 = $_POST['section_8_conteudo_233'];
}else{
    $section_8_conteudo_233 = '';
}
if(isset($_POST['section_8_conteudo_234']) && !empty($_POST['section_8_conteudo_234'])){
    $section_8_conteudo_234 = $_POST['section_8_conteudo_234'];
}else{
    $section_8_conteudo_234 = '';
}
if(isset($_POST['section_8_conteudo_235']) && !empty($_POST['section_8_conteudo_235'])){
    $section_8_conteudo_235 = $_POST['section_8_conteudo_235'];
}else{
    $section_8_conteudo_235 = '';
}
if(isset($_POST['section_8_conteudo_236']) && !empty($_POST['section_8_conteudo_236'])){
    $section_8_conteudo_236 = $_POST['section_8_conteudo_236'];
}else{
    $section_8_conteudo_236 = '';
}
if(isset($_POST['section_8_link_237']) && !empty($_POST['section_8_link_237'])){
    $section_8_link_237 = $_POST['section_8_link_237'];
}else{
    $section_8_link_237 = '';
}
if(isset($_POST['section_8_link_alt_237']) && !empty($_POST['section_8_link_alt_237'])){
    $section_8_link_alt_237 = $_POST['section_8_link_alt_237'];
}else{
    $section_8_link_alt_237 = '';
}
if(isset($_POST['section_8_link_conteudo_237']) && !empty($_POST['section_8_link_conteudo_237'])){
    $section_8_link_conteudo_237 = $_POST['section_8_link_conteudo_237'];
}else{
    $section_8_link_conteudo_237 = '';
}
if(isset($_POST['section_8_image_alt_238']) && !empty($_POST['section_8_image_alt_238'])){
    $section_8_image_alt_238 = $_POST['section_8_image_alt_238'];
}else{
    $section_8_image_alt_238 = '';
}
if(isset($_POST['section_8_image_alt_239']) && !empty($_POST['section_8_image_alt_239'])){
    $section_8_image_alt_239 = $_POST['section_8_image_alt_239'];
}else{
    $section_8_image_alt_239 = '';
}
if(isset($_POST['section_8_conteudo_240']) && !empty($_POST['section_8_conteudo_240'])){
    $section_8_conteudo_240 = $_POST['section_8_conteudo_240'];
}else{
    $section_8_conteudo_240 = '';
}
if(isset($_POST['section_8_conteudo_241']) && !empty($_POST['section_8_conteudo_241'])){
    $section_8_conteudo_241 = $_POST['section_8_conteudo_241'];
}else{
    $section_8_conteudo_241 = '';
}
if(isset($_POST['section_8_conteudo_242']) && !empty($_POST['section_8_conteudo_242'])){
    $section_8_conteudo_242 = $_POST['section_8_conteudo_242'];
}else{
    $section_8_conteudo_242 = '';
}
if(isset($_POST['section_8_conteudo_243']) && !empty($_POST['section_8_conteudo_243'])){
    $section_8_conteudo_243 = $_POST['section_8_conteudo_243'];
}else{
    $section_8_conteudo_243 = '';
}
if(isset($_POST['section_8_link_244']) && !empty($_POST['section_8_link_244'])){
    $section_8_link_244 = $_POST['section_8_link_244'];
}else{
    $section_8_link_244 = '';
}
if(isset($_POST['section_8_link_alt_244']) && !empty($_POST['section_8_link_alt_244'])){
    $section_8_link_alt_244 = $_POST['section_8_link_alt_244'];
}else{
    $section_8_link_alt_244 = '';
}
if(isset($_POST['section_8_link_conteudo_244']) && !empty($_POST['section_8_link_conteudo_244'])){
    $section_8_link_conteudo_244 = $_POST['section_8_link_conteudo_244'];
}else{
    $section_8_link_conteudo_244 = '';
}
if(isset($_POST['section_8_image_alt_245']) && !empty($_POST['section_8_image_alt_245'])){
    $section_8_image_alt_245 = $_POST['section_8_image_alt_245'];
}else{
    $section_8_image_alt_245 = '';
}
if(isset($_POST['section_8_image_alt_246']) && !empty($_POST['section_8_image_alt_246'])){
    $section_8_image_alt_246 = $_POST['section_8_image_alt_246'];
}else{
    $section_8_image_alt_246 = '';
}
if(isset($_POST['section_9_image_alt_247']) && !empty($_POST['section_9_image_alt_247'])){
    $section_9_image_alt_247 = $_POST['section_9_image_alt_247'];
}else{
    $section_9_image_alt_247 = '';
}
if(isset($_POST['section_9_image_alt_248']) && !empty($_POST['section_9_image_alt_248'])){
    $section_9_image_alt_248 = $_POST['section_9_image_alt_248'];
}else{
    $section_9_image_alt_248 = '';
}
if(isset($_POST['section_9_link_249']) && !empty($_POST['section_9_link_249'])){
    $section_9_link_249 = $_POST['section_9_link_249'];
}else{
    $section_9_link_249 = '';
}
if(isset($_POST['section_9_link_alt_249']) && !empty($_POST['section_9_link_alt_249'])){
    $section_9_link_alt_249 = $_POST['section_9_link_alt_249'];
}else{
    $section_9_link_alt_249 = '';
}
if(isset($_POST['section_9_image_alt_250']) && !empty($_POST['section_9_image_alt_250'])){
    $section_9_image_alt_250 = $_POST['section_9_image_alt_250'];
}else{
    $section_9_image_alt_250 = '';
}
if(isset($_POST['section_9_conteudo_251']) && !empty($_POST['section_9_conteudo_251'])){
    $section_9_conteudo_251 = $_POST['section_9_conteudo_251'];
}else{
    $section_9_conteudo_251 = '';
}
if(isset($_POST['section_9_image_alt_252']) && !empty($_POST['section_9_image_alt_252'])){
    $section_9_image_alt_252 = $_POST['section_9_image_alt_252'];
}else{
    $section_9_image_alt_252 = '';
}
if(isset($_POST['section_9_conteudo_253']) && !empty($_POST['section_9_conteudo_253'])){
    $section_9_conteudo_253 = $_POST['section_9_conteudo_253'];
}else{
    $section_9_conteudo_253 = '';
}
if(isset($_POST['section_9_link_254']) && !empty($_POST['section_9_link_254'])){
    $section_9_link_254 = $_POST['section_9_link_254'];
}else{
    $section_9_link_254 = '';
}
if(isset($_POST['section_9_link_alt_254']) && !empty($_POST['section_9_link_alt_254'])){
    $section_9_link_alt_254 = $_POST['section_9_link_alt_254'];
}else{
    $section_9_link_alt_254 = '';
}
if(isset($_POST['section_9_link_conteudo_254']) && !empty($_POST['section_9_link_conteudo_254'])){
    $section_9_link_conteudo_254 = $_POST['section_9_link_conteudo_254'];
}else{
    $section_9_link_conteudo_254 = '';
}
if(isset($_POST['section_9_image_alt_255']) && !empty($_POST['section_9_image_alt_255'])){
    $section_9_image_alt_255 = $_POST['section_9_image_alt_255'];
}else{
    $section_9_image_alt_255 = '';
}
if(isset($_POST['section_9_conteudo_256']) && !empty($_POST['section_9_conteudo_256'])){
    $section_9_conteudo_256 = $_POST['section_9_conteudo_256'];
}else{
    $section_9_conteudo_256 = '';
}
if(isset($_POST['section_9_link_257']) && !empty($_POST['section_9_link_257'])){
    $section_9_link_257 = $_POST['section_9_link_257'];
}else{
    $section_9_link_257 = '';
}
if(isset($_POST['section_9_link_alt_257']) && !empty($_POST['section_9_link_alt_257'])){
    $section_9_link_alt_257 = $_POST['section_9_link_alt_257'];
}else{
    $section_9_link_alt_257 = '';
}
if(isset($_POST['section_9_link_conteudo_257']) && !empty($_POST['section_9_link_conteudo_257'])){
    $section_9_link_conteudo_257 = $_POST['section_9_link_conteudo_257'];
}else{
    $section_9_link_conteudo_257 = '';
}
if(isset($_POST['section_9_conteudo_258']) && !empty($_POST['section_9_conteudo_258'])){
    $section_9_conteudo_258 = $_POST['section_9_conteudo_258'];
}else{
    $section_9_conteudo_258 = '';
}
if(isset($_POST['section_9_link_259']) && !empty($_POST['section_9_link_259'])){
    $section_9_link_259 = $_POST['section_9_link_259'];
}else{
    $section_9_link_259 = '';
}
if(isset($_POST['section_9_link_alt_259']) && !empty($_POST['section_9_link_alt_259'])){
    $section_9_link_alt_259 = $_POST['section_9_link_alt_259'];
}else{
    $section_9_link_alt_259 = '';
}
if(isset($_POST['section_9_link_conteudo_259']) && !empty($_POST['section_9_link_conteudo_259'])){
    $section_9_link_conteudo_259 = $_POST['section_9_link_conteudo_259'];
}else{
    $section_9_link_conteudo_259 = '';
}
if(isset($_POST['section_9_link_260']) && !empty($_POST['section_9_link_260'])){
    $section_9_link_260 = $_POST['section_9_link_260'];
}else{
    $section_9_link_260 = '';
}
if(isset($_POST['section_9_link_alt_260']) && !empty($_POST['section_9_link_alt_260'])){
    $section_9_link_alt_260 = $_POST['section_9_link_alt_260'];
}else{
    $section_9_link_alt_260 = '';
}
if(isset($_POST['section_9_link_conteudo_260']) && !empty($_POST['section_9_link_conteudo_260'])){
    $section_9_link_conteudo_260 = $_POST['section_9_link_conteudo_260'];
}else{
    $section_9_link_conteudo_260 = '';
}
if(isset($_POST['section_9_link_261']) && !empty($_POST['section_9_link_261'])){
    $section_9_link_261 = $_POST['section_9_link_261'];
}else{
    $section_9_link_261 = '';
}
if(isset($_POST['section_9_link_alt_261']) && !empty($_POST['section_9_link_alt_261'])){
    $section_9_link_alt_261 = $_POST['section_9_link_alt_261'];
}else{
    $section_9_link_alt_261 = '';
}
if(isset($_POST['section_9_link_conteudo_261']) && !empty($_POST['section_9_link_conteudo_261'])){
    $section_9_link_conteudo_261 = $_POST['section_9_link_conteudo_261'];
}else{
    $section_9_link_conteudo_261 = '';
}
if(isset($_POST['section_9_link_262']) && !empty($_POST['section_9_link_262'])){
    $section_9_link_262 = $_POST['section_9_link_262'];
}else{
    $section_9_link_262 = '';
}
if(isset($_POST['section_9_link_alt_262']) && !empty($_POST['section_9_link_alt_262'])){
    $section_9_link_alt_262 = $_POST['section_9_link_alt_262'];
}else{
    $section_9_link_alt_262 = '';
}
if(isset($_POST['section_9_link_conteudo_262']) && !empty($_POST['section_9_link_conteudo_262'])){
    $section_9_link_conteudo_262 = $_POST['section_9_link_conteudo_262'];
}else{
    $section_9_link_conteudo_262 = '';
}
if(isset($_POST['section_9_link_263']) && !empty($_POST['section_9_link_263'])){
    $section_9_link_263 = $_POST['section_9_link_263'];
}else{
    $section_9_link_263 = '';
}
if(isset($_POST['section_9_link_alt_263']) && !empty($_POST['section_9_link_alt_263'])){
    $section_9_link_alt_263 = $_POST['section_9_link_alt_263'];
}else{
    $section_9_link_alt_263 = '';
}
if(isset($_POST['section_9_link_conteudo_263']) && !empty($_POST['section_9_link_conteudo_263'])){
    $section_9_link_conteudo_263 = $_POST['section_9_link_conteudo_263'];
}else{
    $section_9_link_conteudo_263 = '';
}
if(isset($_POST['section_9_conteudo_264']) && !empty($_POST['section_9_conteudo_264'])){
    $section_9_conteudo_264 = $_POST['section_9_conteudo_264'];
}else{
    $section_9_conteudo_264 = '';
}
if(isset($_POST['section_9_link_265']) && !empty($_POST['section_9_link_265'])){
    $section_9_link_265 = $_POST['section_9_link_265'];
}else{
    $section_9_link_265 = '';
}
if(isset($_POST['section_9_link_alt_265']) && !empty($_POST['section_9_link_alt_265'])){
    $section_9_link_alt_265 = $_POST['section_9_link_alt_265'];
}else{
    $section_9_link_alt_265 = '';
}
if(isset($_POST['section_9_link_conteudo_265']) && !empty($_POST['section_9_link_conteudo_265'])){
    $section_9_link_conteudo_265 = $_POST['section_9_link_conteudo_265'];
}else{
    $section_9_link_conteudo_265 = '';
}
if(isset($_POST['section_9_link_266']) && !empty($_POST['section_9_link_266'])){
    $section_9_link_266 = $_POST['section_9_link_266'];
}else{
    $section_9_link_266 = '';
}
if(isset($_POST['section_9_link_alt_266']) && !empty($_POST['section_9_link_alt_266'])){
    $section_9_link_alt_266 = $_POST['section_9_link_alt_266'];
}else{
    $section_9_link_alt_266 = '';
}
if(isset($_POST['section_9_link_conteudo_266']) && !empty($_POST['section_9_link_conteudo_266'])){
    $section_9_link_conteudo_266 = $_POST['section_9_link_conteudo_266'];
}else{
    $section_9_link_conteudo_266 = '';
}
if(isset($_POST['section_9_link_267']) && !empty($_POST['section_9_link_267'])){
    $section_9_link_267 = $_POST['section_9_link_267'];
}else{
    $section_9_link_267 = '';
}
if(isset($_POST['section_9_link_alt_267']) && !empty($_POST['section_9_link_alt_267'])){
    $section_9_link_alt_267 = $_POST['section_9_link_alt_267'];
}else{
    $section_9_link_alt_267 = '';
}
if(isset($_POST['section_9_link_conteudo_267']) && !empty($_POST['section_9_link_conteudo_267'])){
    $section_9_link_conteudo_267 = $_POST['section_9_link_conteudo_267'];
}else{
    $section_9_link_conteudo_267 = '';
}
if(isset($_POST['section_9_link_268']) && !empty($_POST['section_9_link_268'])){
    $section_9_link_268 = $_POST['section_9_link_268'];
}else{
    $section_9_link_268 = '';
}
if(isset($_POST['section_9_link_alt_268']) && !empty($_POST['section_9_link_alt_268'])){
    $section_9_link_alt_268 = $_POST['section_9_link_alt_268'];
}else{
    $section_9_link_alt_268 = '';
}
if(isset($_POST['section_9_link_conteudo_268']) && !empty($_POST['section_9_link_conteudo_268'])){
    $section_9_link_conteudo_268 = $_POST['section_9_link_conteudo_268'];
}else{
    $section_9_link_conteudo_268 = '';
}
if(isset($_POST['section_9_link_269']) && !empty($_POST['section_9_link_269'])){
    $section_9_link_269 = $_POST['section_9_link_269'];
}else{
    $section_9_link_269 = '';
}
if(isset($_POST['section_9_link_alt_269']) && !empty($_POST['section_9_link_alt_269'])){
    $section_9_link_alt_269 = $_POST['section_9_link_alt_269'];
}else{
    $section_9_link_alt_269 = '';
}
if(isset($_POST['section_9_link_conteudo_269']) && !empty($_POST['section_9_link_conteudo_269'])){
    $section_9_link_conteudo_269 = $_POST['section_9_link_conteudo_269'];
}else{
    $section_9_link_conteudo_269 = '';
}
if(isset($_POST['section_9_conteudo_270']) && !empty($_POST['section_9_conteudo_270'])){
    $section_9_conteudo_270 = $_POST['section_9_conteudo_270'];
}else{
    $section_9_conteudo_270 = '';
}
if(isset($_POST['section_9_conteudo_271']) && !empty($_POST['section_9_conteudo_271'])){
    $section_9_conteudo_271 = $_POST['section_9_conteudo_271'];
}else{
    $section_9_conteudo_271 = '';
}
if(isset($_POST['section_9_conteudo_272']) && !empty($_POST['section_9_conteudo_272'])){
    $section_9_conteudo_272 = $_POST['section_9_conteudo_272'];
}else{
    $section_9_conteudo_272 = '';
}
if(isset($_POST['section_9_button273']) && !empty($_POST['section_9_button273'])){
    $section_9_button273 = $_POST['section_9_button273'];
}else{
    $section_9_button273 = '';
}
if(isset($_POST['section_9_conteudo_274']) && !empty($_POST['section_9_conteudo_274'])){
    $section_9_conteudo_274 = $_POST['section_9_conteudo_274'];
}else{
    $section_9_conteudo_274 = '';
}
if(isset($_POST['section_9_link_275']) && !empty($_POST['section_9_link_275'])){
    $section_9_link_275 = $_POST['section_9_link_275'];
}else{
    $section_9_link_275 = '';
}
if(isset($_POST['section_9_link_alt_275']) && !empty($_POST['section_9_link_alt_275'])){
    $section_9_link_alt_275 = $_POST['section_9_link_alt_275'];
}else{
    $section_9_link_alt_275 = '';
}
if(isset($_POST['section_9_link_276']) && !empty($_POST['section_9_link_276'])){
    $section_9_link_276 = $_POST['section_9_link_276'];
}else{
    $section_9_link_276 = '';
}
if(isset($_POST['section_9_link_alt_276']) && !empty($_POST['section_9_link_alt_276'])){
    $section_9_link_alt_276 = $_POST['section_9_link_alt_276'];
}else{
    $section_9_link_alt_276 = '';
}
if(isset($_POST['section_9_link_277']) && !empty($_POST['section_9_link_277'])){
    $section_9_link_277 = $_POST['section_9_link_277'];
}else{
    $section_9_link_277 = '';
}
if(isset($_POST['section_9_link_alt_277']) && !empty($_POST['section_9_link_alt_277'])){
    $section_9_link_alt_277 = $_POST['section_9_link_alt_277'];
}else{
    $section_9_link_alt_277 = '';
}
if(isset($_POST['section_9_link_278']) && !empty($_POST['section_9_link_278'])){
    $section_9_link_278 = $_POST['section_9_link_278'];
}else{
    $section_9_link_278 = '';
}
if(isset($_POST['section_9_link_alt_278']) && !empty($_POST['section_9_link_alt_278'])){
    $section_9_link_alt_278 = $_POST['section_9_link_alt_278'];
}else{
    $section_9_link_alt_278 = '';
}
if(isset($_POST['section_9_image_alt_279']) && !empty($_POST['section_9_image_alt_279'])){
    $section_9_image_alt_279 = $_POST['section_9_image_alt_279'];
}else{
    $section_9_image_alt_279 = '';
}
if(isset($_POST['section_9_image_alt_280']) && !empty($_POST['section_9_image_alt_280'])){
    $section_9_image_alt_280 = $_POST['section_9_image_alt_280'];
}else{
    $section_9_image_alt_280 = '';
}
 $id = filter_input(INPUT_POST, 'id');
 $pagina_individual = filter_input(INPUT_POST, 'pagina_individual');
    $maximo = 180000;
    if ($_FILES["section_1_img_5"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_1_img_5"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_1_img_9"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_1_img_9"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_1_img_11"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_1_img_11"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_1_img_12"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_1_img_12"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_1_img_13"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_1_img_13"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_1_img_14"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_1_img_14"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_1_img_16"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_1_img_16"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_1_img_17"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_1_img_17"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_1_img_18"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_1_img_18"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_2_img_19"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_2_img_19"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_2_img_20"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_2_img_20"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_2_img_21"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_2_img_21"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_2_img_25"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_2_img_25"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_2_img_29"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_2_img_29"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_2_img_33"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_2_img_33"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_2_img_37"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_2_img_37"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_2_img_41"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_2_img_41"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_2_img_42"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_2_img_42"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_3_img_43"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_3_img_43"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_3_img_46"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_3_img_46"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_3_img_47"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_3_img_47"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_3_img_48"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_3_img_48"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_3_img_50"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_3_img_50"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_3_img_51"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_3_img_51"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_3_img_53"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_3_img_53"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_3_img_54"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_3_img_54"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_3_img_56"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_3_img_56"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_4_img_57"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_4_img_57"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_4_img_58"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_4_img_58"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_4_img_61"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_4_img_61"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_4_img_62"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_4_img_62"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_4_img_63"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_4_img_63"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_4_img_64"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_4_img_64"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_4_img_69"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_4_img_69"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_4_img_70"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_4_img_70"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_4_img_71"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_4_img_71"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_5_img_72"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_5_img_72"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_5_img_73"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_5_img_73"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_5_img_77"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_5_img_77"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_5_img_78"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_5_img_78"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_5_img_81"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_5_img_81"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_5_img_84"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_5_img_84"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_5_img_88"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_5_img_88"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_5_img_92"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_5_img_92"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_6_img_93"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_6_img_93"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_6_img_96"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_6_img_96"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_6_img_97"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_6_img_97"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_6_img_101"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_6_img_101"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_6_img_105"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_6_img_105"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_6_img_109"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_6_img_109"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_6_img_113"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_6_img_113"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_6_img_117"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_6_img_117"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_6_img_121"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_6_img_121"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_6_img_125"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_6_img_125"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_6_img_129"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_6_img_129"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_6_img_133"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_6_img_133"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_6_img_137"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_6_img_137"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_6_img_141"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_6_img_141"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_6_img_145"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_6_img_145"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_6_img_149"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_6_img_149"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_6_img_153"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_6_img_153"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_6_img_157"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_6_img_157"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_7_img_158"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_7_img_158"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_7_img_159"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_7_img_159"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_7_img_160"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_7_img_160"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_7_img_161"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_7_img_161"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_7_img_162"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_7_img_162"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_7_img_163"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_7_img_163"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_7_img_164"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_7_img_164"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_7_img_167"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_7_img_167"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_7_img_171"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_7_img_171"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_7_img_178"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_7_img_178"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_179"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_179"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_182"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_182"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_183"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_183"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_189"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_189"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_190"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_190"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_196"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_196"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_197"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_197"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_203"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_203"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_204"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_204"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_210"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_210"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_211"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_211"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_217"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_217"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_218"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_218"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_224"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_224"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_225"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_225"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_231"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_231"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_232"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_232"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_238"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_238"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_239"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_239"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_245"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_245"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_8_img_246"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_8_img_246"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_9_img_247"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_9_img_247"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_9_img_248"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_9_img_248"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_9_img_250"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_9_img_250"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_9_img_252"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_9_img_252"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_9_img_255"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_9_img_255"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_9_img_279"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_9_img_279"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
if ($_FILES["section_9_img_280"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por você ultrapassa o ";
    $valorKb = $maximo / 1000;
    $tamanhoFoto = $_FILES["section_9_img_280"]["size"] / 1000;
    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
    exit;
}
    try { 
        if(file_exists('Connection/conexao.php')) {
            $pastaArquivos = 'img';
        } else {
            $pastaArquivos = '../img';
        }
            $sql = "UPDATE tbl_index SET meta_title=?, meta_keywords=?, meta_description=?, section_1_link_1=?, section_1_link_alt_1=?, section_1_link_2=?, section_1_link_alt_2=?, section_1_link_3=?, section_1_link_alt_3=?, section_1_link_4=?, section_1_link_alt_4=?, section_1_img_5=?, section_1_image_alt_5=?, section_1_conteudo_6=?, section_1_conteudo_7=?, section_1_link_8=?, section_1_link_alt_8=?, section_1_link_conteudo_8=?, section_1_img_9=?, section_1_image_alt_9=?, section_1_link_10=?, section_1_link_alt_10=?, section_1_link_conteudo_10=?, section_1_img_11=?, section_1_image_alt_11=?, section_1_img_12=?, section_1_image_alt_12=?, section_1_img_13=?, section_1_image_alt_13=?, section_1_img_14=?, section_1_image_alt_14=?, section_1_link_15=?, section_1_link_alt_15=?, section_1_img_16=?, section_1_image_alt_16=?, section_1_img_17=?, section_1_image_alt_17=?, section_1_img_18=?, section_1_image_alt_18=?, section_2_img_19=?, section_2_image_alt_19=?, section_2_img_20=?, section_2_image_alt_20=?, section_2_img_21=?, section_2_image_alt_21=?, section_2_conteudo_22=?, section_2_conteudo_23=?, section_2_link_24=?, section_2_link_alt_24=?, section_2_img_25=?, section_2_image_alt_25=?, section_2_conteudo_26=?, section_2_conteudo_27=?, section_2_link_28=?, section_2_link_alt_28=?, section_2_img_29=?, section_2_image_alt_29=?, section_2_conteudo_30=?, section_2_conteudo_31=?, section_2_link_32=?, section_2_link_alt_32=?, section_2_img_33=?, section_2_image_alt_33=?, section_2_conteudo_34=?, section_2_conteudo_35=?, section_2_link_36=?, section_2_link_alt_36=?, section_2_img_37=?, section_2_image_alt_37=?, section_2_conteudo_38=?, section_2_conteudo_39=?, section_2_link_40=?, section_2_link_alt_40=?, section_2_link_conteudo_40=?, section_2_img_41=?, section_2_image_alt_41=?, section_2_img_42=?, section_2_image_alt_42=?, section_3_img_43=?, section_3_image_alt_43=?, section_3_conteudo_44=?, section_3_conteudo_45=?, section_3_img_46=?, section_3_image_alt_46=?, section_3_img_47=?, section_3_image_alt_47=?, section_3_img_48=?, section_3_image_alt_48=?, section_3_conteudo_49=?, section_3_img_50=?, section_3_image_alt_50=?, section_3_img_51=?, section_3_image_alt_51=?, section_3_conteudo_52=?, section_3_img_53=?, section_3_image_alt_53=?, section_3_img_54=?, section_3_image_alt_54=?, section_3_conteudo_55=?, section_3_img_56=?, section_3_image_alt_56=?, section_4_img_57=?, section_4_image_alt_57=?, section_4_img_58=?, section_4_image_alt_58=?, section_4_conteudo_59=?, section_4_conteudo_60=?, section_4_img_61=?, section_4_image_alt_61=?, section_4_img_62=?, section_4_image_alt_62=?, section_4_img_63=?, section_4_image_alt_63=?, section_4_img_64=?, section_4_image_alt_64=?, section_4_conteudo_65=?, section_4_conteudo_66=?, section_4_conteudo_67=?, section_4_link_68=?, section_4_link_alt_68=?, section_4_link_conteudo_68=?, section_4_img_69=?, section_4_image_alt_69=?, section_4_img_70=?, section_4_image_alt_70=?, section_4_img_71=?, section_4_image_alt_71=?, section_5_img_72=?, section_5_image_alt_72=?, section_5_img_73=?, section_5_image_alt_73=?, section_5_conteudo_74=?, section_5_conteudo_75=?, section_5_link_76=?, section_5_link_alt_76=?, section_5_link_conteudo_76=?, section_5_img_77=?, section_5_image_alt_77=?, section_5_img_78=?, section_5_image_alt_78=?, section_5_conteudo_79=?, section_5_conteudo_80=?, section_5_img_81=?, section_5_image_alt_81=?, section_5_conteudo_82=?, section_5_conteudo_83=?, section_5_img_84=?, section_5_image_alt_84=?, section_5_conteudo_85=?, section_5_conteudo_86=?, section_5_conteudo_87=?, section_5_img_88=?, section_5_image_alt_88=?, section_5_conteudo_89=?, section_5_conteudo_90=?, section_5_conteudo_91=?, section_5_img_92=?, section_5_image_alt_92=?, section_6_img_93=?, section_6_image_alt_93=?, section_6_conteudo_94=?, section_6_conteudo_95=?, section_6_img_96=?, section_6_image_alt_96=?, section_6_img_97=?, section_6_image_alt_97=?, section_6_conteudo_98=?, section_6_conteudo_99=?, section_6_conteudo_100=?, section_6_img_101=?, section_6_image_alt_101=?, section_6_conteudo_102=?, section_6_conteudo_103=?, section_6_conteudo_104=?, section_6_img_105=?, section_6_image_alt_105=?, section_6_conteudo_106=?, section_6_conteudo_107=?, section_6_conteudo_108=?, section_6_img_109=?, section_6_image_alt_109=?, section_6_conteudo_110=?, section_6_conteudo_111=?, section_6_conteudo_112=?, section_6_img_113=?, section_6_image_alt_113=?, section_6_conteudo_114=?, section_6_conteudo_115=?, section_6_conteudo_116=?, section_6_img_117=?, section_6_image_alt_117=?, section_6_conteudo_118=?, section_6_conteudo_119=?, section_6_conteudo_120=?, section_6_img_121=?, section_6_image_alt_121=?, section_6_conteudo_122=?, section_6_conteudo_123=?, section_6_conteudo_124=?, section_6_img_125=?, section_6_image_alt_125=?, section_6_conteudo_126=?, section_6_conteudo_127=?, section_6_conteudo_128=?, section_6_img_129=?, section_6_image_alt_129=?, section_6_conteudo_130=?, section_6_conteudo_131=?, section_6_conteudo_132=?, section_6_img_133=?, section_6_image_alt_133=?, section_6_conteudo_134=?, section_6_conteudo_135=?, section_6_conteudo_136=?, section_6_img_137=?, section_6_image_alt_137=?, section_6_conteudo_138=?, section_6_conteudo_139=?, section_6_conteudo_140=?, section_6_img_141=?, section_6_image_alt_141=?, section_6_conteudo_142=?, section_6_conteudo_143=?, section_6_conteudo_144=?, section_6_img_145=?, section_6_image_alt_145=?, section_6_conteudo_146=?, section_6_conteudo_147=?, section_6_conteudo_148=?, section_6_img_149=?, section_6_image_alt_149=?, section_6_conteudo_150=?, section_6_conteudo_151=?, section_6_conteudo_152=?, section_6_img_153=?, section_6_image_alt_153=?, section_6_conteudo_154=?, section_6_conteudo_155=?, section_6_conteudo_156=?, section_6_img_157=?, section_6_image_alt_157=?, section_7_img_158=?, section_7_image_alt_158=?, section_7_img_159=?, section_7_image_alt_159=?, section_7_img_160=?, section_7_image_alt_160=?, section_7_img_161=?, section_7_image_alt_161=?, section_7_img_162=?, section_7_image_alt_162=?, section_7_img_163=?, section_7_image_alt_163=?, section_7_img_164=?, section_7_image_alt_164=?, section_7_conteudo_165=?, section_7_conteudo_166=?, section_7_img_167=?, section_7_image_alt_167=?, section_7_conteudo_168=?, section_7_conteudo_169=?, section_7_conteudo_170=?, section_7_img_171=?, section_7_image_alt_171=?, section_7_conteudo_172=?, section_7_conteudo_173=?, section_7_link_174=?, section_7_link_alt_174=?, section_7_link_conteudo_174=?, section_7_conteudo_175=?, section_7_link_176=?, section_7_link_alt_176=?, section_7_link_conteudo_176=?, section_7_conteudo_177=?, section_7_img_178=?, section_7_image_alt_178=?, section_8_img_179=?, section_8_image_alt_179=?, section_8_conteudo_180=?, section_8_conteudo_181=?, section_8_img_182=?, section_8_image_alt_182=?, section_8_img_183=?, section_8_image_alt_183=?, section_8_conteudo_184=?, section_8_conteudo_185=?, section_8_conteudo_186=?, section_8_conteudo_187=?, section_8_link_188=?, section_8_link_alt_188=?, section_8_link_conteudo_188=?, section_8_img_189=?, section_8_image_alt_189=?, section_8_img_190=?, section_8_image_alt_190=?, section_8_conteudo_191=?, section_8_conteudo_192=?, section_8_conteudo_193=?, section_8_conteudo_194=?, section_8_link_195=?, section_8_link_alt_195=?, section_8_link_conteudo_195=?, section_8_img_196=?, section_8_image_alt_196=?, section_8_img_197=?, section_8_image_alt_197=?, section_8_conteudo_198=?, section_8_conteudo_199=?, section_8_conteudo_200=?, section_8_conteudo_201=?, section_8_link_202=?, section_8_link_alt_202=?, section_8_link_conteudo_202=?, section_8_img_203=?, section_8_image_alt_203=?, section_8_img_204=?, section_8_image_alt_204=?, section_8_conteudo_205=?, section_8_conteudo_206=?, section_8_conteudo_207=?, section_8_conteudo_208=?, section_8_link_209=?, section_8_link_alt_209=?, section_8_link_conteudo_209=?, section_8_img_210=?, section_8_image_alt_210=?, section_8_img_211=?, section_8_image_alt_211=?, section_8_conteudo_212=?, section_8_conteudo_213=?, section_8_conteudo_214=?, section_8_conteudo_215=?, section_8_link_216=?, section_8_link_alt_216=?, section_8_link_conteudo_216=?, section_8_img_217=?, section_8_image_alt_217=?, section_8_img_218=?, section_8_image_alt_218=?, section_8_conteudo_219=?, section_8_conteudo_220=?, section_8_conteudo_221=?, section_8_conteudo_222=?, section_8_link_223=?, section_8_link_alt_223=?, section_8_link_conteudo_223=?, section_8_img_224=?, section_8_image_alt_224=?, section_8_img_225=?, section_8_image_alt_225=?, section_8_conteudo_226=?, section_8_conteudo_227=?, section_8_conteudo_228=?, section_8_conteudo_229=?, section_8_link_230=?, section_8_link_alt_230=?, section_8_link_conteudo_230=?, section_8_img_231=?, section_8_image_alt_231=?, section_8_img_232=?, section_8_image_alt_232=?, section_8_conteudo_233=?, section_8_conteudo_234=?, section_8_conteudo_235=?, section_8_conteudo_236=?, section_8_link_237=?, section_8_link_alt_237=?, section_8_link_conteudo_237=?, section_8_img_238=?, section_8_image_alt_238=?, section_8_img_239=?, section_8_image_alt_239=?, section_8_conteudo_240=?, section_8_conteudo_241=?, section_8_conteudo_242=?, section_8_conteudo_243=?, section_8_link_244=?, section_8_link_alt_244=?, section_8_link_conteudo_244=?, section_8_img_245=?, section_8_image_alt_245=?, section_8_img_246=?, section_8_image_alt_246=?, section_9_img_247=?, section_9_image_alt_247=?, section_9_img_248=?, section_9_image_alt_248=?, section_9_link_249=?, section_9_link_alt_249=?, section_9_img_250=?, section_9_image_alt_250=?, section_9_conteudo_251=?, section_9_img_252=?, section_9_image_alt_252=?, section_9_conteudo_253=?, section_9_link_254=?, section_9_link_alt_254=?, section_9_link_conteudo_254=?, section_9_img_255=?, section_9_image_alt_255=?, section_9_conteudo_256=?, section_9_link_257=?, section_9_link_alt_257=?, section_9_link_conteudo_257=?, section_9_conteudo_258=?, section_9_link_259=?, section_9_link_alt_259=?, section_9_link_conteudo_259=?, section_9_link_260=?, section_9_link_alt_260=?, section_9_link_conteudo_260=?, section_9_link_261=?, section_9_link_alt_261=?, section_9_link_conteudo_261=?, section_9_link_262=?, section_9_link_alt_262=?, section_9_link_conteudo_262=?, section_9_link_263=?, section_9_link_alt_263=?, section_9_link_conteudo_263=?, section_9_conteudo_264=?, section_9_link_265=?, section_9_link_alt_265=?, section_9_link_conteudo_265=?, section_9_link_266=?, section_9_link_alt_266=?, section_9_link_conteudo_266=?, section_9_link_267=?, section_9_link_alt_267=?, section_9_link_conteudo_267=?, section_9_link_268=?, section_9_link_alt_268=?, section_9_link_conteudo_268=?, section_9_link_269=?, section_9_link_alt_269=?, section_9_link_conteudo_269=?, section_9_conteudo_270=?, section_9_conteudo_271=?, section_9_conteudo_272=?, section_9_button273=?, section_9_conteudo_274=?, section_9_link_275=?, section_9_link_alt_275=?, section_9_link_276=?, section_9_link_alt_276=?, section_9_link_277=?, section_9_link_alt_277=?, section_9_link_278=?, section_9_link_alt_278=?, section_9_img_279=?, section_9_image_alt_279=?, section_9_img_280=?, section_9_image_alt_280=? WHERE id=?";        $stm = $this->pdo->prepare($sql);
        $stm->bindValue(1, $meta_title);
        $stm->bindValue(2, $meta_keywords);
        $stm->bindValue(3, $meta_description);
        $stm->bindValue(4, $section_1_link_1);
        $stm->bindValue(5, $section_1_link_alt_1);
        $stm->bindValue(6, $section_1_link_2);
        $stm->bindValue(7, $section_1_link_alt_2);
        $stm->bindValue(8, $section_1_link_3);
        $stm->bindValue(9, $section_1_link_alt_3);
        $stm->bindValue(10, $section_1_link_4);
        $stm->bindValue(11, $section_1_link_alt_4);
        $stm->bindValue(12, upload("section_1_img_5",$pastaArquivos, "N"));
        $stm->bindValue(13, $section_1_image_alt_5);
        $stm->bindValue(14, $section_1_conteudo_6);
        $stm->bindValue(15, $section_1_conteudo_7);
        $stm->bindValue(16, $section_1_link_8);
        $stm->bindValue(17, $section_1_link_alt_8);
        $stm->bindValue(18, $section_1_link_conteudo_8);
        $stm->bindValue(19, upload("section_1_img_9",$pastaArquivos, "N"));
        $stm->bindValue(20, $section_1_image_alt_9);
        $stm->bindValue(21, $section_1_link_10);
        $stm->bindValue(22, $section_1_link_alt_10);
        $stm->bindValue(23, $section_1_link_conteudo_10);
        $stm->bindValue(24, upload("section_1_img_11",$pastaArquivos, "N"));
        $stm->bindValue(25, $section_1_image_alt_11);
        $stm->bindValue(26, upload("section_1_img_12",$pastaArquivos, "N"));
        $stm->bindValue(27, $section_1_image_alt_12);
        $stm->bindValue(28, upload("section_1_img_13",$pastaArquivos, "N"));
        $stm->bindValue(29, $section_1_image_alt_13);
        $stm->bindValue(30, upload("section_1_img_14",$pastaArquivos, "N"));
        $stm->bindValue(31, $section_1_image_alt_14);
        $stm->bindValue(32, $section_1_link_15);
        $stm->bindValue(33, $section_1_link_alt_15);
        $stm->bindValue(34, upload("section_1_img_16",$pastaArquivos, "N"));
        $stm->bindValue(35, $section_1_image_alt_16);
        $stm->bindValue(36, upload("section_1_img_17",$pastaArquivos, "N"));
        $stm->bindValue(37, $section_1_image_alt_17);
        $stm->bindValue(38, upload("section_1_img_18",$pastaArquivos, "N"));
        $stm->bindValue(39, $section_1_image_alt_18);
        $stm->bindValue(40, upload("section_2_img_19",$pastaArquivos, "N"));
        $stm->bindValue(41, $section_2_image_alt_19);
        $stm->bindValue(42, upload("section_2_img_20",$pastaArquivos, "N"));
        $stm->bindValue(43, $section_2_image_alt_20);
        $stm->bindValue(44, upload("section_2_img_21",$pastaArquivos, "N"));
        $stm->bindValue(45, $section_2_image_alt_21);
        $stm->bindValue(46, $section_2_conteudo_22);
        $stm->bindValue(47, $section_2_conteudo_23);
        $stm->bindValue(48, $section_2_link_24);
        $stm->bindValue(49, $section_2_link_alt_24);
        $stm->bindValue(50, upload("section_2_img_25",$pastaArquivos, "N"));
        $stm->bindValue(51, $section_2_image_alt_25);
        $stm->bindValue(52, $section_2_conteudo_26);
        $stm->bindValue(53, $section_2_conteudo_27);
        $stm->bindValue(54, $section_2_link_28);
        $stm->bindValue(55, $section_2_link_alt_28);
        $stm->bindValue(56, upload("section_2_img_29",$pastaArquivos, "N"));
        $stm->bindValue(57, $section_2_image_alt_29);
        $stm->bindValue(58, $section_2_conteudo_30);
        $stm->bindValue(59, $section_2_conteudo_31);
        $stm->bindValue(60, $section_2_link_32);
        $stm->bindValue(61, $section_2_link_alt_32);
        $stm->bindValue(62, upload("section_2_img_33",$pastaArquivos, "N"));
        $stm->bindValue(63, $section_2_image_alt_33);
        $stm->bindValue(64, $section_2_conteudo_34);
        $stm->bindValue(65, $section_2_conteudo_35);
        $stm->bindValue(66, $section_2_link_36);
        $stm->bindValue(67, $section_2_link_alt_36);
        $stm->bindValue(68, upload("section_2_img_37",$pastaArquivos, "N"));
        $stm->bindValue(69, $section_2_image_alt_37);
        $stm->bindValue(70, $section_2_conteudo_38);
        $stm->bindValue(71, $section_2_conteudo_39);
        $stm->bindValue(72, $section_2_link_40);
        $stm->bindValue(73, $section_2_link_alt_40);
        $stm->bindValue(74, $section_2_link_conteudo_40);
        $stm->bindValue(75, upload("section_2_img_41",$pastaArquivos, "N"));
        $stm->bindValue(76, $section_2_image_alt_41);
        $stm->bindValue(77, upload("section_2_img_42",$pastaArquivos, "N"));
        $stm->bindValue(78, $section_2_image_alt_42);
        $stm->bindValue(79, upload("section_3_img_43",$pastaArquivos, "N"));
        $stm->bindValue(80, $section_3_image_alt_43);
        $stm->bindValue(81, $section_3_conteudo_44);
        $stm->bindValue(82, $section_3_conteudo_45);
        $stm->bindValue(83, upload("section_3_img_46",$pastaArquivos, "N"));
        $stm->bindValue(84, $section_3_image_alt_46);
        $stm->bindValue(85, upload("section_3_img_47",$pastaArquivos, "N"));
        $stm->bindValue(86, $section_3_image_alt_47);
        $stm->bindValue(87, upload("section_3_img_48",$pastaArquivos, "N"));
        $stm->bindValue(88, $section_3_image_alt_48);
        $stm->bindValue(89, $section_3_conteudo_49);
        $stm->bindValue(90, upload("section_3_img_50",$pastaArquivos, "N"));
        $stm->bindValue(91, $section_3_image_alt_50);
        $stm->bindValue(92, upload("section_3_img_51",$pastaArquivos, "N"));
        $stm->bindValue(93, $section_3_image_alt_51);
        $stm->bindValue(94, $section_3_conteudo_52);
        $stm->bindValue(95, upload("section_3_img_53",$pastaArquivos, "N"));
        $stm->bindValue(96, $section_3_image_alt_53);
        $stm->bindValue(97, upload("section_3_img_54",$pastaArquivos, "N"));
        $stm->bindValue(98, $section_3_image_alt_54);
        $stm->bindValue(99, $section_3_conteudo_55);
        $stm->bindValue(100, upload("section_3_img_56",$pastaArquivos, "N"));
        $stm->bindValue(101, $section_3_image_alt_56);
        $stm->bindValue(102, upload("section_4_img_57",$pastaArquivos, "N"));
        $stm->bindValue(103, $section_4_image_alt_57);
        $stm->bindValue(104, upload("section_4_img_58",$pastaArquivos, "N"));
        $stm->bindValue(105, $section_4_image_alt_58);
        $stm->bindValue(106, $section_4_conteudo_59);
        $stm->bindValue(107, $section_4_conteudo_60);
        $stm->bindValue(108, upload("section_4_img_61",$pastaArquivos, "N"));
        $stm->bindValue(109, $section_4_image_alt_61);
        $stm->bindValue(110, upload("section_4_img_62",$pastaArquivos, "N"));
        $stm->bindValue(111, $section_4_image_alt_62);
        $stm->bindValue(112, upload("section_4_img_63",$pastaArquivos, "N"));
        $stm->bindValue(113, $section_4_image_alt_63);
        $stm->bindValue(114, upload("section_4_img_64",$pastaArquivos, "N"));
        $stm->bindValue(115, $section_4_image_alt_64);
        $stm->bindValue(116, $section_4_conteudo_65);
        $stm->bindValue(117, $section_4_conteudo_66);
        $stm->bindValue(118, $section_4_conteudo_67);
        $stm->bindValue(119, $section_4_link_68);
        $stm->bindValue(120, $section_4_link_alt_68);
        $stm->bindValue(121, $section_4_link_conteudo_68);
        $stm->bindValue(122, upload("section_4_img_69",$pastaArquivos, "N"));
        $stm->bindValue(123, $section_4_image_alt_69);
        $stm->bindValue(124, upload("section_4_img_70",$pastaArquivos, "N"));
        $stm->bindValue(125, $section_4_image_alt_70);
        $stm->bindValue(126, upload("section_4_img_71",$pastaArquivos, "N"));
        $stm->bindValue(127, $section_4_image_alt_71);
        $stm->bindValue(128, upload("section_5_img_72",$pastaArquivos, "N"));
        $stm->bindValue(129, $section_5_image_alt_72);
        $stm->bindValue(130, upload("section_5_img_73",$pastaArquivos, "N"));
        $stm->bindValue(131, $section_5_image_alt_73);
        $stm->bindValue(132, $section_5_conteudo_74);
        $stm->bindValue(133, $section_5_conteudo_75);
        $stm->bindValue(134, $section_5_link_76);
        $stm->bindValue(135, $section_5_link_alt_76);
        $stm->bindValue(136, $section_5_link_conteudo_76);
        $stm->bindValue(137, upload("section_5_img_77",$pastaArquivos, "N"));
        $stm->bindValue(138, $section_5_image_alt_77);
        $stm->bindValue(139, upload("section_5_img_78",$pastaArquivos, "N"));
        $stm->bindValue(140, $section_5_image_alt_78);
        $stm->bindValue(141, $section_5_conteudo_79);
        $stm->bindValue(142, $section_5_conteudo_80);
        $stm->bindValue(143, upload("section_5_img_81",$pastaArquivos, "N"));
        $stm->bindValue(144, $section_5_image_alt_81);
        $stm->bindValue(145, $section_5_conteudo_82);
        $stm->bindValue(146, $section_5_conteudo_83);
        $stm->bindValue(147, upload("section_5_img_84",$pastaArquivos, "N"));
        $stm->bindValue(148, $section_5_image_alt_84);
        $stm->bindValue(149, $section_5_conteudo_85);
        $stm->bindValue(150, $section_5_conteudo_86);
        $stm->bindValue(151, $section_5_conteudo_87);
        $stm->bindValue(152, upload("section_5_img_88",$pastaArquivos, "N"));
        $stm->bindValue(153, $section_5_image_alt_88);
        $stm->bindValue(154, $section_5_conteudo_89);
        $stm->bindValue(155, $section_5_conteudo_90);
        $stm->bindValue(156, $section_5_conteudo_91);
        $stm->bindValue(157, upload("section_5_img_92",$pastaArquivos, "N"));
        $stm->bindValue(158, $section_5_image_alt_92);
        $stm->bindValue(159, upload("section_6_img_93",$pastaArquivos, "N"));
        $stm->bindValue(160, $section_6_image_alt_93);
        $stm->bindValue(161, $section_6_conteudo_94);
        $stm->bindValue(162, $section_6_conteudo_95);
        $stm->bindValue(163, upload("section_6_img_96",$pastaArquivos, "N"));
        $stm->bindValue(164, $section_6_image_alt_96);
        $stm->bindValue(165, upload("section_6_img_97",$pastaArquivos, "N"));
        $stm->bindValue(166, $section_6_image_alt_97);
        $stm->bindValue(167, $section_6_conteudo_98);
        $stm->bindValue(168, $section_6_conteudo_99);
        $stm->bindValue(169, $section_6_conteudo_100);
        $stm->bindValue(170, upload("section_6_img_101",$pastaArquivos, "N"));
        $stm->bindValue(171, $section_6_image_alt_101);
        $stm->bindValue(172, $section_6_conteudo_102);
        $stm->bindValue(173, $section_6_conteudo_103);
        $stm->bindValue(174, $section_6_conteudo_104);
        $stm->bindValue(175, upload("section_6_img_105",$pastaArquivos, "N"));
        $stm->bindValue(176, $section_6_image_alt_105);
        $stm->bindValue(177, $section_6_conteudo_106);
        $stm->bindValue(178, $section_6_conteudo_107);
        $stm->bindValue(179, $section_6_conteudo_108);
        $stm->bindValue(180, upload("section_6_img_109",$pastaArquivos, "N"));
        $stm->bindValue(181, $section_6_image_alt_109);
        $stm->bindValue(182, $section_6_conteudo_110);
        $stm->bindValue(183, $section_6_conteudo_111);
        $stm->bindValue(184, $section_6_conteudo_112);
        $stm->bindValue(185, upload("section_6_img_113",$pastaArquivos, "N"));
        $stm->bindValue(186, $section_6_image_alt_113);
        $stm->bindValue(187, $section_6_conteudo_114);
        $stm->bindValue(188, $section_6_conteudo_115);
        $stm->bindValue(189, $section_6_conteudo_116);
        $stm->bindValue(190, upload("section_6_img_117",$pastaArquivos, "N"));
        $stm->bindValue(191, $section_6_image_alt_117);
        $stm->bindValue(192, $section_6_conteudo_118);
        $stm->bindValue(193, $section_6_conteudo_119);
        $stm->bindValue(194, $section_6_conteudo_120);
        $stm->bindValue(195, upload("section_6_img_121",$pastaArquivos, "N"));
        $stm->bindValue(196, $section_6_image_alt_121);
        $stm->bindValue(197, $section_6_conteudo_122);
        $stm->bindValue(198, $section_6_conteudo_123);
        $stm->bindValue(199, $section_6_conteudo_124);
        $stm->bindValue(200, upload("section_6_img_125",$pastaArquivos, "N"));
        $stm->bindValue(201, $section_6_image_alt_125);
        $stm->bindValue(202, $section_6_conteudo_126);
        $stm->bindValue(203, $section_6_conteudo_127);
        $stm->bindValue(204, $section_6_conteudo_128);
        $stm->bindValue(205, upload("section_6_img_129",$pastaArquivos, "N"));
        $stm->bindValue(206, $section_6_image_alt_129);
        $stm->bindValue(207, $section_6_conteudo_130);
        $stm->bindValue(208, $section_6_conteudo_131);
        $stm->bindValue(209, $section_6_conteudo_132);
        $stm->bindValue(210, upload("section_6_img_133",$pastaArquivos, "N"));
        $stm->bindValue(211, $section_6_image_alt_133);
        $stm->bindValue(212, $section_6_conteudo_134);
        $stm->bindValue(213, $section_6_conteudo_135);
        $stm->bindValue(214, $section_6_conteudo_136);
        $stm->bindValue(215, upload("section_6_img_137",$pastaArquivos, "N"));
        $stm->bindValue(216, $section_6_image_alt_137);
        $stm->bindValue(217, $section_6_conteudo_138);
        $stm->bindValue(218, $section_6_conteudo_139);
        $stm->bindValue(219, $section_6_conteudo_140);
        $stm->bindValue(220, upload("section_6_img_141",$pastaArquivos, "N"));
        $stm->bindValue(221, $section_6_image_alt_141);
        $stm->bindValue(222, $section_6_conteudo_142);
        $stm->bindValue(223, $section_6_conteudo_143);
        $stm->bindValue(224, $section_6_conteudo_144);
        $stm->bindValue(225, upload("section_6_img_145",$pastaArquivos, "N"));
        $stm->bindValue(226, $section_6_image_alt_145);
        $stm->bindValue(227, $section_6_conteudo_146);
        $stm->bindValue(228, $section_6_conteudo_147);
        $stm->bindValue(229, $section_6_conteudo_148);
        $stm->bindValue(230, upload("section_6_img_149",$pastaArquivos, "N"));
        $stm->bindValue(231, $section_6_image_alt_149);
        $stm->bindValue(232, $section_6_conteudo_150);
        $stm->bindValue(233, $section_6_conteudo_151);
        $stm->bindValue(234, $section_6_conteudo_152);
        $stm->bindValue(235, upload("section_6_img_153",$pastaArquivos, "N"));
        $stm->bindValue(236, $section_6_image_alt_153);
        $stm->bindValue(237, $section_6_conteudo_154);
        $stm->bindValue(238, $section_6_conteudo_155);
        $stm->bindValue(239, $section_6_conteudo_156);
        $stm->bindValue(240, upload("section_6_img_157",$pastaArquivos, "N"));
        $stm->bindValue(241, $section_6_image_alt_157);
        $stm->bindValue(242, upload("section_7_img_158",$pastaArquivos, "N"));
        $stm->bindValue(243, $section_7_image_alt_158);
        $stm->bindValue(244, upload("section_7_img_159",$pastaArquivos, "N"));
        $stm->bindValue(245, $section_7_image_alt_159);
        $stm->bindValue(246, upload("section_7_img_160",$pastaArquivos, "N"));
        $stm->bindValue(247, $section_7_image_alt_160);
        $stm->bindValue(248, upload("section_7_img_161",$pastaArquivos, "N"));
        $stm->bindValue(249, $section_7_image_alt_161);
        $stm->bindValue(250, upload("section_7_img_162",$pastaArquivos, "N"));
        $stm->bindValue(251, $section_7_image_alt_162);
        $stm->bindValue(252, upload("section_7_img_163",$pastaArquivos, "N"));
        $stm->bindValue(253, $section_7_image_alt_163);
        $stm->bindValue(254, upload("section_7_img_164",$pastaArquivos, "N"));
        $stm->bindValue(255, $section_7_image_alt_164);
        $stm->bindValue(256, $section_7_conteudo_165);
        $stm->bindValue(257, $section_7_conteudo_166);
        $stm->bindValue(258, upload("section_7_img_167",$pastaArquivos, "N"));
        $stm->bindValue(259, $section_7_image_alt_167);
        $stm->bindValue(260, $section_7_conteudo_168);
        $stm->bindValue(261, $section_7_conteudo_169);
        $stm->bindValue(262, $section_7_conteudo_170);
        $stm->bindValue(263, upload("section_7_img_171",$pastaArquivos, "N"));
        $stm->bindValue(264, $section_7_image_alt_171);
        $stm->bindValue(265, $section_7_conteudo_172);
        $stm->bindValue(266, $section_7_conteudo_173);
        $stm->bindValue(267, $section_7_link_174);
        $stm->bindValue(268, $section_7_link_alt_174);
        $stm->bindValue(269, $section_7_link_conteudo_174);
        $stm->bindValue(270, $section_7_conteudo_175);
        $stm->bindValue(271, $section_7_link_176);
        $stm->bindValue(272, $section_7_link_alt_176);
        $stm->bindValue(273, $section_7_link_conteudo_176);
        $stm->bindValue(274, $section_7_conteudo_177);
        $stm->bindValue(275, upload("section_7_img_178",$pastaArquivos, "N"));
        $stm->bindValue(276, $section_7_image_alt_178);
        $stm->bindValue(277, upload("section_8_img_179",$pastaArquivos, "N"));
        $stm->bindValue(278, $section_8_image_alt_179);
        $stm->bindValue(279, $section_8_conteudo_180);
        $stm->bindValue(280, $section_8_conteudo_181);
        $stm->bindValue(281, upload("section_8_img_182",$pastaArquivos, "N"));
        $stm->bindValue(282, $section_8_image_alt_182);
        $stm->bindValue(283, upload("section_8_img_183",$pastaArquivos, "N"));
        $stm->bindValue(284, $section_8_image_alt_183);
        $stm->bindValue(285, $section_8_conteudo_184);
        $stm->bindValue(286, $section_8_conteudo_185);
        $stm->bindValue(287, $section_8_conteudo_186);
        $stm->bindValue(288, $section_8_conteudo_187);
        $stm->bindValue(289, $section_8_link_188);
        $stm->bindValue(290, $section_8_link_alt_188);
        $stm->bindValue(291, $section_8_link_conteudo_188);
        $stm->bindValue(292, upload("section_8_img_189",$pastaArquivos, "N"));
        $stm->bindValue(293, $section_8_image_alt_189);
        $stm->bindValue(294, upload("section_8_img_190",$pastaArquivos, "N"));
        $stm->bindValue(295, $section_8_image_alt_190);
        $stm->bindValue(296, $section_8_conteudo_191);
        $stm->bindValue(297, $section_8_conteudo_192);
        $stm->bindValue(298, $section_8_conteudo_193);
        $stm->bindValue(299, $section_8_conteudo_194);
        $stm->bindValue(300, $section_8_link_195);
        $stm->bindValue(301, $section_8_link_alt_195);
        $stm->bindValue(302, $section_8_link_conteudo_195);
        $stm->bindValue(303, upload("section_8_img_196",$pastaArquivos, "N"));
        $stm->bindValue(304, $section_8_image_alt_196);
        $stm->bindValue(305, upload("section_8_img_197",$pastaArquivos, "N"));
        $stm->bindValue(306, $section_8_image_alt_197);
        $stm->bindValue(307, $section_8_conteudo_198);
        $stm->bindValue(308, $section_8_conteudo_199);
        $stm->bindValue(309, $section_8_conteudo_200);
        $stm->bindValue(310, $section_8_conteudo_201);
        $stm->bindValue(311, $section_8_link_202);
        $stm->bindValue(312, $section_8_link_alt_202);
        $stm->bindValue(313, $section_8_link_conteudo_202);
        $stm->bindValue(314, upload("section_8_img_203",$pastaArquivos, "N"));
        $stm->bindValue(315, $section_8_image_alt_203);
        $stm->bindValue(316, upload("section_8_img_204",$pastaArquivos, "N"));
        $stm->bindValue(317, $section_8_image_alt_204);
        $stm->bindValue(318, $section_8_conteudo_205);
        $stm->bindValue(319, $section_8_conteudo_206);
        $stm->bindValue(320, $section_8_conteudo_207);
        $stm->bindValue(321, $section_8_conteudo_208);
        $stm->bindValue(322, $section_8_link_209);
        $stm->bindValue(323, $section_8_link_alt_209);
        $stm->bindValue(324, $section_8_link_conteudo_209);
        $stm->bindValue(325, upload("section_8_img_210",$pastaArquivos, "N"));
        $stm->bindValue(326, $section_8_image_alt_210);
        $stm->bindValue(327, upload("section_8_img_211",$pastaArquivos, "N"));
        $stm->bindValue(328, $section_8_image_alt_211);
        $stm->bindValue(329, $section_8_conteudo_212);
        $stm->bindValue(330, $section_8_conteudo_213);
        $stm->bindValue(331, $section_8_conteudo_214);
        $stm->bindValue(332, $section_8_conteudo_215);
        $stm->bindValue(333, $section_8_link_216);
        $stm->bindValue(334, $section_8_link_alt_216);
        $stm->bindValue(335, $section_8_link_conteudo_216);
        $stm->bindValue(336, upload("section_8_img_217",$pastaArquivos, "N"));
        $stm->bindValue(337, $section_8_image_alt_217);
        $stm->bindValue(338, upload("section_8_img_218",$pastaArquivos, "N"));
        $stm->bindValue(339, $section_8_image_alt_218);
        $stm->bindValue(340, $section_8_conteudo_219);
        $stm->bindValue(341, $section_8_conteudo_220);
        $stm->bindValue(342, $section_8_conteudo_221);
        $stm->bindValue(343, $section_8_conteudo_222);
        $stm->bindValue(344, $section_8_link_223);
        $stm->bindValue(345, $section_8_link_alt_223);
        $stm->bindValue(346, $section_8_link_conteudo_223);
        $stm->bindValue(347, upload("section_8_img_224",$pastaArquivos, "N"));
        $stm->bindValue(348, $section_8_image_alt_224);
        $stm->bindValue(349, upload("section_8_img_225",$pastaArquivos, "N"));
        $stm->bindValue(350, $section_8_image_alt_225);
        $stm->bindValue(351, $section_8_conteudo_226);
        $stm->bindValue(352, $section_8_conteudo_227);
        $stm->bindValue(353, $section_8_conteudo_228);
        $stm->bindValue(354, $section_8_conteudo_229);
        $stm->bindValue(355, $section_8_link_230);
        $stm->bindValue(356, $section_8_link_alt_230);
        $stm->bindValue(357, $section_8_link_conteudo_230);
        $stm->bindValue(358, upload("section_8_img_231",$pastaArquivos, "N"));
        $stm->bindValue(359, $section_8_image_alt_231);
        $stm->bindValue(360, upload("section_8_img_232",$pastaArquivos, "N"));
        $stm->bindValue(361, $section_8_image_alt_232);
        $stm->bindValue(362, $section_8_conteudo_233);
        $stm->bindValue(363, $section_8_conteudo_234);
        $stm->bindValue(364, $section_8_conteudo_235);
        $stm->bindValue(365, $section_8_conteudo_236);
        $stm->bindValue(366, $section_8_link_237);
        $stm->bindValue(367, $section_8_link_alt_237);
        $stm->bindValue(368, $section_8_link_conteudo_237);
        $stm->bindValue(369, upload("section_8_img_238",$pastaArquivos, "N"));
        $stm->bindValue(370, $section_8_image_alt_238);
        $stm->bindValue(371, upload("section_8_img_239",$pastaArquivos, "N"));
        $stm->bindValue(372, $section_8_image_alt_239);
        $stm->bindValue(373, $section_8_conteudo_240);
        $stm->bindValue(374, $section_8_conteudo_241);
        $stm->bindValue(375, $section_8_conteudo_242);
        $stm->bindValue(376, $section_8_conteudo_243);
        $stm->bindValue(377, $section_8_link_244);
        $stm->bindValue(378, $section_8_link_alt_244);
        $stm->bindValue(379, $section_8_link_conteudo_244);
        $stm->bindValue(380, upload("section_8_img_245",$pastaArquivos, "N"));
        $stm->bindValue(381, $section_8_image_alt_245);
        $stm->bindValue(382, upload("section_8_img_246",$pastaArquivos, "N"));
        $stm->bindValue(383, $section_8_image_alt_246);
        $stm->bindValue(384, upload("section_9_img_247",$pastaArquivos, "N"));
        $stm->bindValue(385, $section_9_image_alt_247);
        $stm->bindValue(386, upload("section_9_img_248",$pastaArquivos, "N"));
        $stm->bindValue(387, $section_9_image_alt_248);
        $stm->bindValue(388, $section_9_link_249);
        $stm->bindValue(389, $section_9_link_alt_249);
        $stm->bindValue(390, upload("section_9_img_250",$pastaArquivos, "N"));
        $stm->bindValue(391, $section_9_image_alt_250);
        $stm->bindValue(392, $section_9_conteudo_251);
        $stm->bindValue(393, upload("section_9_img_252",$pastaArquivos, "N"));
        $stm->bindValue(394, $section_9_image_alt_252);
        $stm->bindValue(395, $section_9_conteudo_253);
        $stm->bindValue(396, $section_9_link_254);
        $stm->bindValue(397, $section_9_link_alt_254);
        $stm->bindValue(398, $section_9_link_conteudo_254);
        $stm->bindValue(399, upload("section_9_img_255",$pastaArquivos, "N"));
        $stm->bindValue(400, $section_9_image_alt_255);
        $stm->bindValue(401, $section_9_conteudo_256);
        $stm->bindValue(402, $section_9_link_257);
        $stm->bindValue(403, $section_9_link_alt_257);
        $stm->bindValue(404, $section_9_link_conteudo_257);
        $stm->bindValue(405, $section_9_conteudo_258);
        $stm->bindValue(406, $section_9_link_259);
        $stm->bindValue(407, $section_9_link_alt_259);
        $stm->bindValue(408, $section_9_link_conteudo_259);
        $stm->bindValue(409, $section_9_link_260);
        $stm->bindValue(410, $section_9_link_alt_260);
        $stm->bindValue(411, $section_9_link_conteudo_260);
        $stm->bindValue(412, $section_9_link_261);
        $stm->bindValue(413, $section_9_link_alt_261);
        $stm->bindValue(414, $section_9_link_conteudo_261);
        $stm->bindValue(415, $section_9_link_262);
        $stm->bindValue(416, $section_9_link_alt_262);
        $stm->bindValue(417, $section_9_link_conteudo_262);
        $stm->bindValue(418, $section_9_link_263);
        $stm->bindValue(419, $section_9_link_alt_263);
        $stm->bindValue(420, $section_9_link_conteudo_263);
        $stm->bindValue(421, $section_9_conteudo_264);
        $stm->bindValue(422, $section_9_link_265);
        $stm->bindValue(423, $section_9_link_alt_265);
        $stm->bindValue(424, $section_9_link_conteudo_265);
        $stm->bindValue(425, $section_9_link_266);
        $stm->bindValue(426, $section_9_link_alt_266);
        $stm->bindValue(427, $section_9_link_conteudo_266);
        $stm->bindValue(428, $section_9_link_267);
        $stm->bindValue(429, $section_9_link_alt_267);
        $stm->bindValue(430, $section_9_link_conteudo_267);
        $stm->bindValue(431, $section_9_link_268);
        $stm->bindValue(432, $section_9_link_alt_268);
        $stm->bindValue(433, $section_9_link_conteudo_268);
        $stm->bindValue(434, $section_9_link_269);
        $stm->bindValue(435, $section_9_link_alt_269);
        $stm->bindValue(436, $section_9_link_conteudo_269);
        $stm->bindValue(437, $section_9_conteudo_270);
        $stm->bindValue(438, $section_9_conteudo_271);
        $stm->bindValue(439, $section_9_conteudo_272);
        $stm->bindValue(440, $section_9_button273);
        $stm->bindValue(441, $section_9_conteudo_274);
        $stm->bindValue(442, $section_9_link_275);
        $stm->bindValue(443, $section_9_link_alt_275);
        $stm->bindValue(444, $section_9_link_276);
        $stm->bindValue(445, $section_9_link_alt_276);
        $stm->bindValue(446, $section_9_link_277);
        $stm->bindValue(447, $section_9_link_alt_277);
        $stm->bindValue(448, $section_9_link_278);
        $stm->bindValue(449, $section_9_link_alt_278);
        $stm->bindValue(450, upload("section_9_img_279",$pastaArquivos, "N"));
        $stm->bindValue(451, $section_9_image_alt_279);
        $stm->bindValue(452, upload("section_9_img_280",$pastaArquivos, "N"));
        $stm->bindValue(453, $section_9_image_alt_280);
$stm->bindValue(454, $id);
        $stm->execute();
    } catch(PDOException $erro){
        echo $erro->getMessage();
    }

// Trecho adicional
if($pagina_individual == 'S') {
  echo "  <script>
          alert('Modificado com sucesso!');
          window.location='editar-index.php?pi=S&id=$id';
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
  if (isset($_GET['acao']) && $_GET['acao'] == 'excluirIndex') {
    try {
      $sql = "DELETE FROM tbl_index WHERE id=? ";
      $stm = $this->pdo->prepare($sql);
      $stm->bindValue(1, $_GET['id']);
      $stm->execute();
    } catch (PDOException $erro) {
      echo $erro->getMessage();
    }

    echo "  <script>
            window.location='index.php';
        </script>";
    exit;
  }
}
  }
}
?>
