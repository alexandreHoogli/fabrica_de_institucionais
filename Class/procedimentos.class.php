<?php
@ session_start();
$ProcedimentosInstanciada = '';
if(empty($ProcedimentosInstanciada)) {
	if(file_exists('Connection/conexao.php')) {
		require_once('Connection/con-pdo.php');
		require_once('Class/funcoes.php');
	} else {
		require_once('../Connection/con-pdo.php');
		require_once('../Class/funcoes.php');
	}
	
	class Procedimentos {
		
		private $pdo = null;  

		private static $Procedimentos = null; 

		private function __construct($conexao){  
			$this->pdo = $conexao;  
		}
	  
		public static function getInstance($conexao){   
			if (!isset(self::$Procedimentos)):    
				self::$Procedimentos = new Procedimentos($conexao);   
			endif;
			return self::$Procedimentos;    
		}
		
	
		function rsDados($id='', $orderBy='', $limite='', $idCat='', $idDiferente='', $url_amigavel='', $destaque='') {
			
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
			if(!empty($idCat)) {
				$sql .= " and id_cat = ?"; 
				$nCampos++;
				$campo[$nCampos] = $idCat;
			}
			
			if(!empty($destaque)) {
				$sql .= " and destaque = ?"; 
				$nCampos++;
				$campo[$nCampos] = $destaque;
			}
			
			if(!empty($idDiferente)) {
				$sql .= " and id != ?"; 
				$nCampos++;
				$campo[$nCampos] = $idDiferente;
			}
			if(!empty($url_amigavel)) {
				$sql .= " and url_amigavel = ?"; 
				$nCampos++;
				$campo[$nCampos] = $url_amigavel;
			}
		
			/// ORDEM		
			if(!empty($orderBy)) {
				$sqlOrdem = " order by {$orderBy}";
			}
			
			if(!empty($limite)) {
				$sqlLimite = " limit {$limite}";
			}
			
			try{   
				$sql = "SELECT * FROM tbl_procedimentos where 1=1 $sql $sqlOrdem $sqlLimite";
				$stm = $this->pdo->prepare($sql);
				
				for($i=1; $i<=$nCampos; $i++) {
					$stm->bindValue($i, $campo[$i]);
				}
				
				$stm->execute();
				$rsDados = $stm->fetchAll(PDO::FETCH_OBJ);
				//print_r($rsDados);
				if($id <> '' or $limite == 1 or $url_amigavel <> '') {
					return($rsDados[0]);
				} else {
					return($rsDados);
				}
			} catch(PDOException $erro){   
				echo $erro->getMessage(); 
			}
		}

		function add($redireciona='') {
			if(isset($_POST['acao']) && $_POST['acao'] == 'addProcedimento') {
				if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
					$titulo = $_POST['titulo'];
				}else{
					$titulo = '';	
				}
				if(isset($_POST['legenda_imagem']) && !empty($_POST['legenda_imagem'])){
					$legenda_imagem = $_POST['legenda_imagem'];
				}else{
					$legenda_imagem = '';	
				}
				
				$meta_title = filter_input(INPUT_POST, 'meta_title');
				$id_cat = filter_input(INPUT_POST, 'id_cat');
				$meta_keywords = filter_input(INPUT_POST, 'meta_keywords');
				$meta_description = filter_input(INPUT_POST, 'meta_description');
				if(isset($_POST['url_amigavel']) && !empty($_POST['url_amigavel'])){
				    $urlAmigavel = $_POST['url_amigavel'];
				}else{
				   $urlAmigavel = gerarTituloSEO($titulo); 
				}
                
                
                $destaque = filter_input(INPUT_POST, 'destaque');
                
				$maximo = 150000;
                // Verificação
               
				if($_FILES["imagem_principal"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["imagem_principal"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 1. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
                

					try{

						if(file_exists('Connection/conexao.php')) {
							$pastaArquivos = 'img';
						} else {
							$pastaArquivos = '../img';
						}
						
						$sql = "INSERT INTO tbl_procedimentos (titulo, imagem_principal, legenda_imagem) VALUES (?, ?, ?)";   
						$stm = $this->pdo->prepare($sql);   
						$stm->bindValue(1, $titulo); 
						$stm->bindValue(2, upload('imagem_principal', $pastaArquivos, 'N'));
						$stm->bindValue(1, $legenda_imagem); 


						$stm->execute(); 
						$idServico = $this->pdo->lastInsertId();
						
					} catch(PDOException $erro){
						echo $erro->getMessage(); 
					}
					
					if($redireciona == '') {
						$redireciona = '.';
					}
				
				// 	exit;
					
					echo "	<script>
								window.location='procedimentos.php';
								</script>";
								exit;
				
			}
		}
		
		function editar($redireciona='procedimentos.php') {
			if(isset($_POST['acao']) && $_POST['acao'] == 'editaProcedimento') {			
				$id = filter_input(INPUT_POST, 'id');
				if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
					$titulo = $_POST['titulo'];
				}else{
					$titulo = '';	
				}
				if(isset($_POST['legenda_imagem']) && !empty($_POST['titulo'])){
					$legenda_imagem = $_POST['legenda_imagem'];
				}else{
					$legenda_imagem = '';	
				}
				if(isset($_POST['texto1']) && !empty($_POST['texto1'])){
					$texto1 = $_POST['texto1'];
				}else{
					$texto1 = '';	
				}
				if(isset($_POST['breve_cta1']) && !empty($_POST['breve_cta1'])){
					$breve_cta1 = $_POST['breve_cta1'];
				}else{
					$breve_cta1 = '';	
				}
				if(isset($_POST['nome_botao_cta1']) && !empty($_POST['nome_botao_cta1'])){
					$nome_botao_cta1 = $_POST['nome_botao_cta1'];
				}else{
					$nome_botao_cta1 = '';	
				}
				if(isset($_POST['link_botao_cta1']) && !empty($_POST['link_botao_cta1'])){
					$link_botao_cta1 = $_POST['link_botao_cta1'];
				}else{
					$link_botao_cta1 = '';	
				}
				if(isset($_POST['bullets_esquerda']) && !empty($_POST['bullets_esquerda'])){
					$bullets_esquerda = $_POST['bullets_esquerda'];
				}else{
					$bullets_esquerda = '';	
				}
				if(isset($_POST['bullets_direita']) && !empty($_POST['bullets_direita'])){
					$bullets_direita = $_POST['bullets_direita'];
				}else{
					$bullets_direita = '';	
				}
				if(isset($_POST['texto2']) && !empty($_POST['texto2'])){
					$texto2 = $_POST['texto2'];
				}else{
					$texto2 = '';	
				}
				if(isset($_POST['breve_cta2']) && !empty($_POST['breve_cta2'])){
					$breve_cta2 = $_POST['breve_cta2'];
				}else{
					$breve_cta2 = '';	
				}
				if(isset($_POST['nome_botao_cta2']) && !empty($_POST['nome_botao_cta2'])){
					$nome_botao_cta2 = $_POST['nome_botao_cta2'];
				}else{
					$nome_botao_cta2 = '';	
				}
				if(isset($_POST['link_botao_cta2']) && !empty($_POST['link_botao_cta2'])){
					$link_botao_cta2 = $_POST['link_botao_cta2'];
				}else{
					$link_botao_cta2 = '';	
				}
				if(isset($_POST['texto3']) && !empty($_POST['texto3'])){
					$texto3 = $_POST['texto3'];
				}else{
					$texto3 = '';	
				}
				if(isset($_POST['titulo_cta']) && !empty($_POST['titulo_cta'])){
					$titulo_cta = $_POST['titulo_cta'];
				}else{
					$titulo_cta = '';	
				}
				if(isset($_POST['nome_botao_cta3']) && !empty($_POST['nome_botao_cta3'])){
					$nome_botao_cta3 = $_POST['nome_botao_cta3'];
				}else{
					$nome_botao_cta3 = '';	
				}
				if(isset($_POST['link_botao_cta3']) && !empty($_POST['link_botao_cta3'])){
					$link_botao_cta3 = $_POST['link_botao_cta3'];
				}else{
					$link_botao_cta3 = '';	
				}
				if(isset($_POST['titulo_cta1']) && !empty($_POST['titulo_cta1'])){
					$titulo_cta1 = $_POST['titulo_cta1'];
				}else{
					$titulo_cta1 = '';	
				}
				if(isset($_POST['titulo_cta2']) && !empty($_POST['titulo_cta2'])){
					$titulo_cta2 = $_POST['titulo_cta2'];
				}else{
					$titulo_cta2 = '';	
				}
				if(isset($_POST['legenda_imagem_1']) && !empty($_POST['legenda_imagem_1'])){
					$legenda_imagem_1 = $_POST['legenda_imagem_1'];
				}else{
					$legenda_imagem_1 = '';	
				}
				if(isset($_POST['legenda_imagem_2']) && !empty($_POST['legenda_imagem_2'])){
					$legenda_imagem_2 = $_POST['legenda_imagem_2'];
				}else{
					$legenda_imagem_2 = '';	
				}
				if(isset($_POST['legenda_imagem_3']) && !empty($_POST['legenda_imagem_3'])){
					$legenda_imagem_3 = $_POST['legenda_imagem_3'];
				}else{
					$legenda_imagem_3 = '';	
				}
				

				$meta_title = filter_input(INPUT_POST, 'meta_title');
				$meta_keywords = filter_input(INPUT_POST, 'meta_keywords');
				$meta_description = filter_input(INPUT_POST, 'meta_description');
				if(isset($_POST['url_amigavel']) && !empty($_POST['url_amigavel'])){
				    $urlAmigavel = $_POST['url_amigavel'];
				}else{
				   $urlAmigavel = gerarTituloSEO($titulo); 
				}

				$maximo = 150000;
                // Verificação
               
				if($_FILES["imagem_principal"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["imagem_principal"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 1. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
                // Verificação
               
				if($_FILES["imagem_esquerda"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["imagem_esquerda"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 1. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
                // Verificação
               
				if($_FILES["imagem_direita"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["imagem_direita"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 1. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
                // Verificação
               
				if($_FILES["imagem_cta"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["imagem_cta"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 1. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
                

				$destaque = filter_input(INPUT_POST, 'destaque');
				$id_cat = filter_input(INPUT_POST, 'id_cat');
				try { 

					if(file_exists('Connection/conexao.php')) {
							$pastaArquivos = 'img';
						} else {
							$pastaArquivos = '../img';
						}
				
					$sql = "UPDATE tbl_procedimentos SET titulo=?, imagem_principal=?, legenda_imagem=?, texto1=?, breve_cta1=?, nome_botao_cta1=?, link_botao_cta1=?, imagem_esquerda=?, bullets_direita=?, bullets_esquerda=?, imagem_direita=?, texto2=?, breve_cta2=?, nome_botao_cta2=?, link_botao_cta2=?, texto3=?, imagem_cta=?, titulo_cta=?, nome_botao_cta3=?, link_botao_cta3=?, titulo_cta1=?, titulo_cta2=?, legenda_imagem_1=?, legenda_imagem_2=?, legenda_imagem_3=?, meta_title=?, meta_keywords=?, meta_description=?  WHERE id=?";
					$stm = $this->pdo->prepare($sql);
					$stm->bindValue(1, $titulo); 
					$stm->bindValue(2, upload('imagem_principal', $pastaArquivos, 'N'));
					$stm->bindValue(3, $legenda_imagem);
					$stm->bindValue(4, $texto1);
					$stm->bindValue(5, $breve_cta1);
					$stm->bindValue(6, $nome_botao_cta1);
					$stm->bindValue(7, $link_botao_cta1);
					$stm->bindValue(8, upload('imagem_esquerda', $pastaArquivos, 'N'));
					$stm->bindValue(9, $bullets_direita);
					$stm->bindValue(10, $bullets_esquerda);
					$stm->bindValue(11, upload('imagem_direita', $pastaArquivos, 'N'));
					$stm->bindValue(12, $texto2);
					$stm->bindValue(13, $breve_cta2);
					$stm->bindValue(14, $nome_botao_cta2);
					$stm->bindValue(15, $link_botao_cta2);
					$stm->bindValue(16, $texto3);
					$stm->bindValue(17, upload('imagem_cta', $pastaArquivos, 'N'));
					$stm->bindValue(18, $titulo_cta);
					$stm->bindValue(19, $nome_botao_cta3);
					$stm->bindValue(20, $link_botao_cta3);
					$stm->bindValue(21, $titulo_cta1);
					$stm->bindValue(22, $titulo_cta2);
					$stm->bindValue(23, $legenda_imagem_1);
					$stm->bindValue(24, $legenda_imagem_2);
					$stm->bindValue(25, $legenda_imagem_3);
				    $stm->bindValue(26, $meta_title);
				    $stm->bindValue(27, $meta_keywords);
				    $stm->bindValue(28, $meta_description);
					$stm->bindValue(29, $id);
					$stm->execute(); 
				
				} catch(PDOException $erro){
					echo $erro->getMessage(); 
				}

				// exit;
				echo "	<script>
							window.location='editar-procedimento.php?pi=S&id=79';
							</script>";
							exit;
			}
		}
		
		function excluir() {
			if(isset($_GET['acao']) && $_GET['acao'] == 'excluirProcedimento') {
				
				try{   
					$sql = "DELETE FROM tbl_procedimentos WHERE id=? ";   
					$stm = $this->pdo->prepare($sql);   
					$stm->bindValue(1, $_GET['id']);   
					$stm->execute();
				} catch(PDOException $erro){
					echo $erro->getMessage(); 
				}

				echo "	<script>
								window.location='procedimentos.php';
								</script>";
								exit;
			}
		}
	}
	$ProcedimentosInstanciada = 'S';
}