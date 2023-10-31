<?php
@session_start();
$PriceInstanciada = '';
if (empty($PriceInstanciada)) {
  if (file_exists('Connection/conexao.php')) {
    require_once('Connection/con-pdo.php');
    require_once('Class/funcoes.php');
  } else {
    require_once('../Connection/con-pdo.php');
    require_once('../Class/funcoes.php');
  }

  class Price
  {
    private $pdo = null;

    private static $Price = null;

    private function __construct($conexao)
    {
      $this->pdo = $conexao;
    }

    public static function getInstance($conexao)
    {
      if (!isset(self::$Price)):
        self::$Price = new Price($conexao);
      endif;
      return self::$Price;
    }

    function rsDados($id = '', $orderBy = '', $limite = '', $pagina_individual = '', $ativo = '')
    {
      /// FILTROS
      $nCampos = 0;
      $sql = '';
      $sqlOrdem = '';
      $sqlLimite = '';
      if (!empty($id)) {
        $sql .= " and id = ?";
        $nCampos++;
        $campo[$nCampos] = $id;
      }
      if (!empty($pagina_individual)) {
        $sql .= " and pagina_individual = ?";
        $nCampos++;
        $campo[$nCampos] = $pagina_individual;
      }
      if (!empty($ativo)) {
        $sql .= " and ativo = ?";
        $nCampos++;
        $campo[$nCampos] = $ativo;
      }

      /// ORDEM
      if (!empty($orderBy)) {
        $sqlOrdem = " order by {$orderBy}";
      }

      if (!empty($limite)) {
        $sqlLimite = " limit 0,{$limite}";
      }

      try {
        $sql = "SELECT * FROM tbl_price where 1=1 $sql $sqlOrdem $sqlLimite";
        $stm = $this->pdo->prepare($sql);

        for ($i = 1; $i <= $nCampos; $i++) {
          $stm->bindValue($i, $campo[$i]);
        }

        $stm->execute();
        $rsDados = $stm->fetchAll(PDO::FETCH_OBJ);

        if ($id <> '' or $limite == 1 or $pagina_individual <> '') {
          if (isset($rsDados[0]) && !empty($rsDados[0])) {
            return ($rsDados[0]);
          }
        } else {
          return ($rsDados);
        }
      } catch (PDOException $erro) {
        echo $erro->getMessage();
      }
    }
    function add($redireciona = '')
    {
      if (isset($_POST['acao']) && $_POST['acao'] == 'addPrice') {
        $meta_title = (isset($_POST['meta_title']) && !empty($_POST['meta_title'])) ? $_POST['meta_title'] : '';
        $meta_keywords = (isset($_POST['meta_keywords']) && !empty($_POST['meta_keywords'])) ? $_POST['meta_keywords'] : '';
        $meta_description = (isset($_POST['meta_description']) && !empty($_POST['meta_description'])) ? $_POST['meta_description'] : '';
        $section_1_link_1 = (isset($_POST['section_1_link_1']) && !empty($_POST['section_1_link_1'])) ? $_POST['section_1_link_1'] : '';
        $section_1_link_alt_1 = (isset($_POST['section_1_link_alt_1']) && !empty($_POST['section_1_link_alt_1'])) ? $_POST['section_1_link_alt_1'] : '';
        $section_1_image_alt_2 = (isset($_POST['section_1_image_alt_2']) && !empty($_POST['section_1_image_alt_2'])) ? $_POST['section_1_image_alt_2'] : '';
        $section_1_button3 = (isset($_POST['section_1_button3']) && !empty($_POST['section_1_button3'])) ? $_POST['section_1_button3'] : '';
        $section_1_conteudo_4 = (isset($_POST['section_1_conteudo_4']) && !empty($_POST['section_1_conteudo_4'])) ? $_POST['section_1_conteudo_4'] : '';
        $section_1_button5 = (isset($_POST['section_1_button5']) && !empty($_POST['section_1_button5'])) ? $_POST['section_1_button5'] : '';
        $section_2_button6 = (isset($_POST['section_2_button6']) && !empty($_POST['section_2_button6'])) ? $_POST['section_2_button6'] : '';
        $section_2_link_7 = (isset($_POST['section_2_link_7']) && !empty($_POST['section_2_link_7'])) ? $_POST['section_2_link_7'] : '';
        $section_2_link_alt_7 = (isset($_POST['section_2_link_alt_7']) && !empty($_POST['section_2_link_alt_7'])) ? $_POST['section_2_link_alt_7'] : '';
        $section_2_image_alt_8 = (isset($_POST['section_2_image_alt_8']) && !empty($_POST['section_2_image_alt_8'])) ? $_POST['section_2_image_alt_8'] : '';
        $section_2_conteudo_9 = (isset($_POST['section_2_conteudo_9']) && !empty($_POST['section_2_conteudo_9'])) ? $_POST['section_2_conteudo_9'] : '';
        $section_2_conteudo_10 = (isset($_POST['section_2_conteudo_10']) && !empty($_POST['section_2_conteudo_10'])) ? $_POST['section_2_conteudo_10'] : '';
        $section_2_link_11 = (isset($_POST['section_2_link_11']) && !empty($_POST['section_2_link_11'])) ? $_POST['section_2_link_11'] : '';
        $section_2_link_alt_11 = (isset($_POST['section_2_link_alt_11']) && !empty($_POST['section_2_link_alt_11'])) ? $_POST['section_2_link_alt_11'] : '';
        $section_2_link_conteudo_11 = (isset($_POST['section_2_link_conteudo_11']) && !empty($_POST['section_2_link_conteudo_11'])) ? $_POST['section_2_link_conteudo_11'] : '';
        $section_2_link_12 = (isset($_POST['section_2_link_12']) && !empty($_POST['section_2_link_12'])) ? $_POST['section_2_link_12'] : '';
        $section_2_link_alt_12 = (isset($_POST['section_2_link_alt_12']) && !empty($_POST['section_2_link_alt_12'])) ? $_POST['section_2_link_alt_12'] : '';
        $section_2_link_conteudo_12 = (isset($_POST['section_2_link_conteudo_12']) && !empty($_POST['section_2_link_conteudo_12'])) ? $_POST['section_2_link_conteudo_12'] : '';
        $section_2_link_13 = (isset($_POST['section_2_link_13']) && !empty($_POST['section_2_link_13'])) ? $_POST['section_2_link_13'] : '';
        $section_2_link_alt_13 = (isset($_POST['section_2_link_alt_13']) && !empty($_POST['section_2_link_alt_13'])) ? $_POST['section_2_link_alt_13'] : '';
        $section_2_link_conteudo_13 = (isset($_POST['section_2_link_conteudo_13']) && !empty($_POST['section_2_link_conteudo_13'])) ? $_POST['section_2_link_conteudo_13'] : '';
        $section_2_conteudo_14 = (isset($_POST['section_2_conteudo_14']) && !empty($_POST['section_2_conteudo_14'])) ? $_POST['section_2_conteudo_14'] : '';
        $section_2_button15 = (isset($_POST['section_2_button15']) && !empty($_POST['section_2_button15'])) ? $_POST['section_2_button15'] : '';
        $section_2_link_16 = (isset($_POST['section_2_link_16']) && !empty($_POST['section_2_link_16'])) ? $_POST['section_2_link_16'] : '';
        $section_2_link_alt_16 = (isset($_POST['section_2_link_alt_16']) && !empty($_POST['section_2_link_alt_16'])) ? $_POST['section_2_link_alt_16'] : '';
        $section_2_link_17 = (isset($_POST['section_2_link_17']) && !empty($_POST['section_2_link_17'])) ? $_POST['section_2_link_17'] : '';
        $section_2_link_alt_17 = (isset($_POST['section_2_link_alt_17']) && !empty($_POST['section_2_link_alt_17'])) ? $_POST['section_2_link_alt_17'] : '';
        $section_2_link_18 = (isset($_POST['section_2_link_18']) && !empty($_POST['section_2_link_18'])) ? $_POST['section_2_link_18'] : '';
        $section_2_link_alt_18 = (isset($_POST['section_2_link_alt_18']) && !empty($_POST['section_2_link_alt_18'])) ? $_POST['section_2_link_alt_18'] : '';
        $section_2_link_19 = (isset($_POST['section_2_link_19']) && !empty($_POST['section_2_link_19'])) ? $_POST['section_2_link_19'] : '';
        $section_2_link_alt_19 = (isset($_POST['section_2_link_alt_19']) && !empty($_POST['section_2_link_alt_19'])) ? $_POST['section_2_link_alt_19'] : '';
        if (isset($_POST['pagina_individual']) && !empty($_POST['pagina_individual'])) {
          $pagina_individual = $_POST['pagina_individual'];
        } else {
          $pagina_individual = gerarTituloSEO('.$section_1_link_1.');
        }
        $maximo = 180000;
        if ($_FILES["section_1_img_2"]["size"] > $maximo) {
          echo "Erro! O arquivo enviado por você ultrapassa o ";
          $valorKb = $maximo / 1000;
          $tamanhoFoto = $_FILES["section_1_img_2"]["size"] / 1000;
          echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
          exit;
        }
        if ($_FILES["section_2_img_8"]["size"] > $maximo) {
          echo "Erro! O arquivo enviado por você ultrapassa o ";
          $valorKb = $maximo / 1000;
          $tamanhoFoto = $_FILES["section_2_img_8"]["size"] / 1000;
          echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
          exit;
        }
        try {
          if (file_exists('Connection/conexao.php')) {
            $pastaArquivos = 'img';
          } else {
            $pastaArquivos = '../img';
          }
          $sql = "INSERT INTO tbl_price (meta_title, meta_keywords, meta_description, section_1_link_1, section_1_link_alt_1, section_1_img_2, section_1_image_alt_2, section_1_button3, section_1_conteudo_4, section_1_button5, section_2_button6, section_2_link_7, section_2_link_alt_7, section_2_img_8, section_2_image_alt_8, section_2_conteudo_9, section_2_conteudo_10, section_2_link_11, section_2_link_alt_11, section_2_link_conteudo_11, section_2_link_12, section_2_link_alt_12, section_2_link_conteudo_12, section_2_link_13, section_2_link_alt_13, section_2_link_conteudo_13, section_2_conteudo_14, section_2_button15, section_2_link_16, section_2_link_alt_16, section_2_link_17, section_2_link_alt_17, section_2_link_18, section_2_link_alt_18, section_2_link_19, section_2_link_alt_19) VALUES ( ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?)";
          $stm = $this->pdo->prepare($sql);
          $stm->bindValue(1, $meta_title);
          $stm->bindValue(2, $meta_keywords);
          $stm->bindValue(3, $meta_description);
          $stm->bindValue(4, $section_1_link_1);
          $stm->bindValue(5, $section_1_link_alt_1);
          $stm->bindValue(6, upload("section_1_img_2", $pastaArquivos, "N"));
          $stm->bindValue(7, $section_1_image_alt_2);
          $stm->bindValue(8, $section_1_button3);
          $stm->bindValue(9, $section_1_conteudo_4);
          $stm->bindValue(10, $section_1_button5);
          $stm->bindValue(11, $section_2_button6);
          $stm->bindValue(12, $section_2_link_7);
          $stm->bindValue(13, $section_2_link_alt_7);
          $stm->bindValue(14, upload("section_2_img_8", $pastaArquivos, "N"));
          $stm->bindValue(15, $section_2_image_alt_8);
          $stm->bindValue(16, $section_2_conteudo_9);
          $stm->bindValue(17, $section_2_conteudo_10);
          $stm->bindValue(18, $section_2_link_11);
          $stm->bindValue(19, $section_2_link_alt_11);
          $stm->bindValue(20, $section_2_link_conteudo_11);
          $stm->bindValue(21, $section_2_link_12);
          $stm->bindValue(22, $section_2_link_alt_12);
          $stm->bindValue(23, $section_2_link_conteudo_12);
          $stm->bindValue(24, $section_2_link_13);
          $stm->bindValue(25, $section_2_link_alt_13);
          $stm->bindValue(26, $section_2_link_conteudo_13);
          $stm->bindValue(27, $section_2_conteudo_14);
          $stm->bindValue(28, $section_2_button15);
          $stm->bindValue(29, $section_2_link_16);
          $stm->bindValue(30, $section_2_link_alt_16);
          $stm->bindValue(31, $section_2_link_17);
          $stm->bindValue(32, $section_2_link_alt_17);
          $stm->bindValue(33, $section_2_link_18);
          $stm->bindValue(34, $section_2_link_alt_18);
          $stm->bindValue(35, $section_2_link_19);
          $stm->bindValue(36, $section_2_link_alt_19);
          $stm->execute();
          $idBanner = $this->pdo->lastInsertId();
        } catch (PDOException $erro) {
          echo $erro->getMessage();
        }
      }
    }
    function editar($redireciona = 'price.php')
    {
      if (isset($_POST['acao']) && $_POST['acao'] == 'editaPrice') {
        $meta_title = (isset($_POST['meta_title']) && !empty($_POST['meta_title'])) ? $_POST['meta_title'] : '';
        $meta_keywords = (isset($_POST['meta_keywords']) && !empty($_POST['meta_keywords'])) ? $_POST['meta_keywords'] : '';
        $meta_description = (isset($_POST['meta_description']) && !empty($_POST['meta_description'])) ? $_POST['meta_description'] : '';
        $section_1_link_1 = (isset($_POST['section_1_link_1']) && !empty($_POST['section_1_link_1'])) ? $_POST['section_1_link_1'] : '';
        $section_1_link_alt_1 = (isset($_POST['section_1_link_alt_1']) && !empty($_POST['section_1_link_alt_1'])) ? $_POST['section_1_link_alt_1'] : '';
        $section_1_image_alt_2 = (isset($_POST['section_1_image_alt_2']) && !empty($_POST['section_1_image_alt_2'])) ? $_POST['section_1_image_alt_2'] : '';
        $section_1_button3 = (isset($_POST['section_1_button3']) && !empty($_POST['section_1_button3'])) ? $_POST['section_1_button3'] : '';
        $section_1_conteudo_4 = (isset($_POST['section_1_conteudo_4']) && !empty($_POST['section_1_conteudo_4'])) ? $_POST['section_1_conteudo_4'] : '';
        $section_1_button5 = (isset($_POST['section_1_button5']) && !empty($_POST['section_1_button5'])) ? $_POST['section_1_button5'] : '';
        $section_2_button6 = (isset($_POST['section_2_button6']) && !empty($_POST['section_2_button6'])) ? $_POST['section_2_button6'] : '';
        $section_2_link_7 = (isset($_POST['section_2_link_7']) && !empty($_POST['section_2_link_7'])) ? $_POST['section_2_link_7'] : '';
        $section_2_link_alt_7 = (isset($_POST['section_2_link_alt_7']) && !empty($_POST['section_2_link_alt_7'])) ? $_POST['section_2_link_alt_7'] : '';
        $section_2_image_alt_8 = (isset($_POST['section_2_image_alt_8']) && !empty($_POST['section_2_image_alt_8'])) ? $_POST['section_2_image_alt_8'] : '';
        $section_2_conteudo_9 = (isset($_POST['section_2_conteudo_9']) && !empty($_POST['section_2_conteudo_9'])) ? $_POST['section_2_conteudo_9'] : '';
        $section_2_conteudo_10 = (isset($_POST['section_2_conteudo_10']) && !empty($_POST['section_2_conteudo_10'])) ? $_POST['section_2_conteudo_10'] : '';
        $section_2_link_11 = (isset($_POST['section_2_link_11']) && !empty($_POST['section_2_link_11'])) ? $_POST['section_2_link_11'] : '';
        $section_2_link_alt_11 = (isset($_POST['section_2_link_alt_11']) && !empty($_POST['section_2_link_alt_11'])) ? $_POST['section_2_link_alt_11'] : '';
        $section_2_link_conteudo_11 = (isset($_POST['section_2_link_conteudo_11']) && !empty($_POST['section_2_link_conteudo_11'])) ? $_POST['section_2_link_conteudo_11'] : '';
        $section_2_link_12 = (isset($_POST['section_2_link_12']) && !empty($_POST['section_2_link_12'])) ? $_POST['section_2_link_12'] : '';
        $section_2_link_alt_12 = (isset($_POST['section_2_link_alt_12']) && !empty($_POST['section_2_link_alt_12'])) ? $_POST['section_2_link_alt_12'] : '';
        $section_2_link_conteudo_12 = (isset($_POST['section_2_link_conteudo_12']) && !empty($_POST['section_2_link_conteudo_12'])) ? $_POST['section_2_link_conteudo_12'] : '';
        $section_2_link_13 = (isset($_POST['section_2_link_13']) && !empty($_POST['section_2_link_13'])) ? $_POST['section_2_link_13'] : '';
        $section_2_link_alt_13 = (isset($_POST['section_2_link_alt_13']) && !empty($_POST['section_2_link_alt_13'])) ? $_POST['section_2_link_alt_13'] : '';
        $section_2_link_conteudo_13 = (isset($_POST['section_2_link_conteudo_13']) && !empty($_POST['section_2_link_conteudo_13'])) ? $_POST['section_2_link_conteudo_13'] : '';
        $section_2_conteudo_14 = (isset($_POST['section_2_conteudo_14']) && !empty($_POST['section_2_conteudo_14'])) ? $_POST['section_2_conteudo_14'] : '';
        $section_2_button15 = (isset($_POST['section_2_button15']) && !empty($_POST['section_2_button15'])) ? $_POST['section_2_button15'] : '';
        $section_2_link_16 = (isset($_POST['section_2_link_16']) && !empty($_POST['section_2_link_16'])) ? $_POST['section_2_link_16'] : '';
        $section_2_link_alt_16 = (isset($_POST['section_2_link_alt_16']) && !empty($_POST['section_2_link_alt_16'])) ? $_POST['section_2_link_alt_16'] : '';
        $section_2_link_17 = (isset($_POST['section_2_link_17']) && !empty($_POST['section_2_link_17'])) ? $_POST['section_2_link_17'] : '';
        $section_2_link_alt_17 = (isset($_POST['section_2_link_alt_17']) && !empty($_POST['section_2_link_alt_17'])) ? $_POST['section_2_link_alt_17'] : '';
        $section_2_link_18 = (isset($_POST['section_2_link_18']) && !empty($_POST['section_2_link_18'])) ? $_POST['section_2_link_18'] : '';
        $section_2_link_alt_18 = (isset($_POST['section_2_link_alt_18']) && !empty($_POST['section_2_link_alt_18'])) ? $_POST['section_2_link_alt_18'] : '';
        $section_2_link_19 = (isset($_POST['section_2_link_19']) && !empty($_POST['section_2_link_19'])) ? $_POST['section_2_link_19'] : '';
        $section_2_link_alt_19 = (isset($_POST['section_2_link_alt_19']) && !empty($_POST['section_2_link_alt_19'])) ? $_POST['section_2_link_alt_19'] : '';
        $id = filter_input(INPUT_POST, 'id');
        if (isset($_POST['pagina_individual']) && !empty($_POST['pagina_individual'])) {
          $pagina_individual = $_POST['pagina_individual'];
        } else {
          $pagina_individual = gerarTituloSEO($section_1_link_1);
        }
        $maximo = 180000;
        if ($_FILES["section_1_img_2"]["size"] > $maximo) {
          echo "Erro! O arquivo enviado por você ultrapassa o ";
          $valorKb = $maximo / 1000;
          $tamanhoFoto = $_FILES["section_1_img_2"]["size"] / 1000;
          echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
          exit;
        }
        if ($_FILES["section_2_img_8"]["size"] > $maximo) {
          echo "Erro! O arquivo enviado por você ultrapassa o ";
          $valorKb = $maximo / 1000;
          $tamanhoFoto = $_FILES["section_2_img_8"]["size"] / 1000;
          echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
          exit;
        }
        try {
          if (file_exists('Connection/conexao.php')) {
            $pastaArquivos = 'img';
          } else {
            $pastaArquivos = '../img';
          }
          $sql = "UPDATE tbl_price SET meta_title=?, meta_keywords=?, meta_description=?, section_1_link_1=?, section_1_link_alt_1=?, section_1_img_2=?, section_1_image_alt_2=?, section_1_button3=?, section_1_conteudo_4=?, section_1_button5=?, section_2_button6=?, section_2_link_7=?, section_2_link_alt_7=?, section_2_img_8=?, section_2_image_alt_8=?, section_2_conteudo_9=?, section_2_conteudo_10=?, section_2_link_11=?, section_2_link_alt_11=?, section_2_link_conteudo_11=?, section_2_link_12=?, section_2_link_alt_12=?, section_2_link_conteudo_12=?, section_2_link_13=?, section_2_link_alt_13=?, section_2_link_conteudo_13=?, section_2_conteudo_14=?, section_2_button15=?, section_2_link_16=?, section_2_link_alt_16=?, section_2_link_17=?, section_2_link_alt_17=?, section_2_link_18=?, section_2_link_alt_18=?, section_2_link_19=?, section_2_link_alt_19=? WHERE id=?";
          $stm = $this->pdo->prepare($sql);
          $stm->bindValue(1, $meta_title);
          $stm->bindValue(2, $meta_keywords);
          $stm->bindValue(3, $meta_description);
          $stm->bindValue(4, $section_1_link_1);
          $stm->bindValue(5, $section_1_link_alt_1);
          $stm->bindValue(6, upload("section_1_img_2", $pastaArquivos, "N"));
          $stm->bindValue(7, $section_1_image_alt_2);
          $stm->bindValue(8, $section_1_button3);
          $stm->bindValue(9, $section_1_conteudo_4);
          $stm->bindValue(10, $section_1_button5);
          $stm->bindValue(11, $section_2_button6);
          $stm->bindValue(12, $section_2_link_7);
          $stm->bindValue(13, $section_2_link_alt_7);
          $stm->bindValue(14, upload("section_2_img_8", $pastaArquivos, "N"));
          $stm->bindValue(15, $section_2_image_alt_8);
          $stm->bindValue(16, $section_2_conteudo_9);
          $stm->bindValue(17, $section_2_conteudo_10);
          $stm->bindValue(18, $section_2_link_11);
          $stm->bindValue(19, $section_2_link_alt_11);
          $stm->bindValue(20, $section_2_link_conteudo_11);
          $stm->bindValue(21, $section_2_link_12);
          $stm->bindValue(22, $section_2_link_alt_12);
          $stm->bindValue(23, $section_2_link_conteudo_12);
          $stm->bindValue(24, $section_2_link_13);
          $stm->bindValue(25, $section_2_link_alt_13);
          $stm->bindValue(26, $section_2_link_conteudo_13);
          $stm->bindValue(27, $section_2_conteudo_14);
          $stm->bindValue(28, $section_2_button15);
          $stm->bindValue(29, $section_2_link_16);
          $stm->bindValue(30, $section_2_link_alt_16);
          $stm->bindValue(31, $section_2_link_17);
          $stm->bindValue(32, $section_2_link_alt_17);
          $stm->bindValue(33, $section_2_link_18);
          $stm->bindValue(34, $section_2_link_alt_18);
          $stm->bindValue(35, $section_2_link_19);
          $stm->bindValue(36, $section_2_link_alt_19);
          $stm->bindValue(37, $id);
          $stm->execute();
        } catch (PDOException $erro) {
          echo $erro->getMessage();
        }

        // Trecho adicional
        if ($pagina_individual == 'S') {
          echo "  <script>
          alert('Modificado com sucesso!');
          window.location='editar-price.php?pi=S&id=$id';
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
    function excluir()
    {
      if (isset($_GET['acao']) && $_GET['acao'] == 'excluirPrice') {
        try {
          $sql = "DELETE FROM tbl_price WHERE id=? ";
          $stm = $this->pdo->prepare($sql);
          $stm->bindValue(1, $_GET['id']);
          $stm->execute();
        } catch (PDOException $erro) {
          echo $erro->getMessage();
        }

        echo "  <script>
            window.location='price.php';
        </script>";
        exit;
      }
    }
  }
}
?>