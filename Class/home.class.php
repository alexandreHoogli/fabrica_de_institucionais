<?php
@session_start();
$HomeInstanciada = '';
if (empty($HomeInstanciada)) {
    if (file_exists('Connection/conexao.php')) {
        require_once('Connection/con-pdo.php');
        require_once('Class/funcoes.php');
    } else {
        require_once('../Connection/con-pdo.php');
        require_once('../Class/funcoes.php');
    }

    class Home
    {
        private $pdo = null;

        private static $Home = null;

        private function __construct($conexao)
        {
            $this->pdo = $conexao;
        }

        public static function getInstance($conexao)
        {
            if (!isset(self::$Home)) :
                self::$Home = new Home($conexao);
            endif;
            return self::$Home;
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
                $sql = "SELECT * FROM tbl_home where 1=1 $sql $sqlOrdem $sqlLimite";
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
        function editar($redireciona = 'editar-home.php?pi=S&id=1')
        {
            if (isset($_POST['acao']) && $_POST['acao'] == 'editaHome') {
                $meta_title = (isset($_POST['meta_title']) && !empty($_POST['meta_title'])) ? $_POST['meta_title'] : '';
                $meta_keywords = (isset($_POST['meta_keywords']) && !empty($_POST['meta_keywords'])) ? $_POST['meta_keywords'] : '';
                $meta_description = (isset($_POST['meta_description']) && !empty($_POST['meta_description'])) ? $_POST['meta_description'] : '';
                $section_1_button1 = (isset($_POST['section_1_button1']) && !empty($_POST['section_1_button1'])) ? $_POST['section_1_button1'] : '';
                $section_1_button2 = (isset($_POST['section_1_button2']) && !empty($_POST['section_1_button2'])) ? $_POST['section_1_button2'] : '';
                $section_1_image_alt_3 = (isset($_POST['section_1_image_alt_3']) && !empty($_POST['section_1_image_alt_3'])) ? $_POST['section_1_image_alt_3'] : '';
                $section_1_image_alt_4 = (isset($_POST['section_1_image_alt_4']) && !empty($_POST['section_1_image_alt_4'])) ? $_POST['section_1_image_alt_4'] : '';
                $section_1_conteudo_5 = (isset($_POST['section_1_conteudo_5']) && !empty($_POST['section_1_conteudo_5'])) ? $_POST['section_1_conteudo_5'] : '';
                $section_1_conteudo_6 = (isset($_POST['section_1_conteudo_6']) && !empty($_POST['section_1_conteudo_6'])) ? $_POST['section_1_conteudo_6'] : '';
                $section_1_link_7 = (isset($_POST['section_1_link_7']) && !empty($_POST['section_1_link_7'])) ? $_POST['section_1_link_7'] : '';
                $section_1_link_alt_7 = (isset($_POST['section_1_link_alt_7']) && !empty($_POST['section_1_link_alt_7'])) ? $_POST['section_1_link_alt_7'] : '';
                $section_1_link_conteudo_7 = (isset($_POST['section_1_link_conteudo_7']) && !empty($_POST['section_1_link_conteudo_7'])) ? $_POST['section_1_link_conteudo_7'] : '';
                $section_1_conteudo_8 = (isset($_POST['section_1_conteudo_8']) && !empty($_POST['section_1_conteudo_8'])) ? $_POST['section_1_conteudo_8'] : '';
                $section_1_image_alt_9 = (isset($_POST['section_1_image_alt_9']) && !empty($_POST['section_1_image_alt_9'])) ? $_POST['section_1_image_alt_9'] : '';
                $section_1_image_alt_10 = (isset($_POST['section_1_image_alt_10']) && !empty($_POST['section_1_image_alt_10'])) ? $_POST['section_1_image_alt_10'] : '';
                $section_1_conteudo_11 = (isset($_POST['section_1_conteudo_11']) && !empty($_POST['section_1_conteudo_11'])) ? $_POST['section_1_conteudo_11'] : '';
                $section_1_conteudo_12 = (isset($_POST['section_1_conteudo_12']) && !empty($_POST['section_1_conteudo_12'])) ? $_POST['section_1_conteudo_12'] : '';
                $section_1_link_13 = (isset($_POST['section_1_link_13']) && !empty($_POST['section_1_link_13'])) ? $_POST['section_1_link_13'] : '';
                $section_1_link_alt_13 = (isset($_POST['section_1_link_alt_13']) && !empty($_POST['section_1_link_alt_13'])) ? $_POST['section_1_link_alt_13'] : '';
                $section_1_link_conteudo_13 = (isset($_POST['section_1_link_conteudo_13']) && !empty($_POST['section_1_link_conteudo_13'])) ? $_POST['section_1_link_conteudo_13'] : '';
                $section_1_conteudo_14 = (isset($_POST['section_1_conteudo_14']) && !empty($_POST['section_1_conteudo_14'])) ? $_POST['section_1_conteudo_14'] : '';
                $section_1_image_alt_15 = (isset($_POST['section_1_image_alt_15']) && !empty($_POST['section_1_image_alt_15'])) ? $_POST['section_1_image_alt_15'] : '';
                $section_1_image_alt_16 = (isset($_POST['section_1_image_alt_16']) && !empty($_POST['section_1_image_alt_16'])) ? $_POST['section_1_image_alt_16'] : '';
                $section_1_conteudo_17 = (isset($_POST['section_1_conteudo_17']) && !empty($_POST['section_1_conteudo_17'])) ? $_POST['section_1_conteudo_17'] : '';
                $section_1_conteudo_18 = (isset($_POST['section_1_conteudo_18']) && !empty($_POST['section_1_conteudo_18'])) ? $_POST['section_1_conteudo_18'] : '';
                $section_1_link_19 = (isset($_POST['section_1_link_19']) && !empty($_POST['section_1_link_19'])) ? $_POST['section_1_link_19'] : '';
                $section_1_link_alt_19 = (isset($_POST['section_1_link_alt_19']) && !empty($_POST['section_1_link_alt_19'])) ? $_POST['section_1_link_alt_19'] : '';
                $section_1_link_conteudo_19 = (isset($_POST['section_1_link_conteudo_19']) && !empty($_POST['section_1_link_conteudo_19'])) ? $_POST['section_1_link_conteudo_19'] : '';
                $section_1_conteudo_20 = (isset($_POST['section_1_conteudo_20']) && !empty($_POST['section_1_conteudo_20'])) ? $_POST['section_1_conteudo_20'] : '';
                $section_2_conteudo_21 = (isset($_POST['section_2_conteudo_21']) && !empty($_POST['section_2_conteudo_21'])) ? $_POST['section_2_conteudo_21'] : '';
                $section_2_conteudo_22 = (isset($_POST['section_2_conteudo_22']) && !empty($_POST['section_2_conteudo_22'])) ? $_POST['section_2_conteudo_22'] : '';
                $section_2_conteudo_23 = (isset($_POST['section_2_conteudo_23']) && !empty($_POST['section_2_conteudo_23'])) ? $_POST['section_2_conteudo_23'] : '';
                $section_2_conteudo_24 = (isset($_POST['section_2_conteudo_24']) && !empty($_POST['section_2_conteudo_24'])) ? $_POST['section_2_conteudo_24'] : '';
                $section_2_conteudo_25 = (isset($_POST['section_2_conteudo_25']) && !empty($_POST['section_2_conteudo_25'])) ? $_POST['section_2_conteudo_25'] : '';
                $section_2_conteudo_26 = (isset($_POST['section_2_conteudo_26']) && !empty($_POST['section_2_conteudo_26'])) ? $_POST['section_2_conteudo_26'] : '';
                $section_2_conteudo_27 = (isset($_POST['section_2_conteudo_27']) && !empty($_POST['section_2_conteudo_27'])) ? $_POST['section_2_conteudo_27'] : '';
                $section_2_conteudo_28 = (isset($_POST['section_2_conteudo_28']) && !empty($_POST['section_2_conteudo_28'])) ? $_POST['section_2_conteudo_28'] : '';
                $section_3_image_alt_29 = (isset($_POST['section_3_image_alt_29']) && !empty($_POST['section_3_image_alt_29'])) ? $_POST['section_3_image_alt_29'] : '';
                $section_3_conteudo_30 = (isset($_POST['section_3_conteudo_30']) && !empty($_POST['section_3_conteudo_30'])) ? $_POST['section_3_conteudo_30'] : '';
                $section_3_image_alt_31 = (isset($_POST['section_3_image_alt_31']) && !empty($_POST['section_3_image_alt_31'])) ? $_POST['section_3_image_alt_31'] : '';
                $section_3_image_alt_32 = (isset($_POST['section_3_image_alt_32']) && !empty($_POST['section_3_image_alt_32'])) ? $_POST['section_3_image_alt_32'] : '';
                $section_3_image_alt_33 = (isset($_POST['section_3_image_alt_33']) && !empty($_POST['section_3_image_alt_33'])) ? $_POST['section_3_image_alt_33'] : '';
                $section_3_image_alt_34 = (isset($_POST['section_3_image_alt_34']) && !empty($_POST['section_3_image_alt_34'])) ? $_POST['section_3_image_alt_34'] : '';
                $section_3_conteudo_35 = (isset($_POST['section_3_conteudo_35']) && !empty($_POST['section_3_conteudo_35'])) ? $_POST['section_3_conteudo_35'] : '';
                $section_3_conteudo_36 = (isset($_POST['section_3_conteudo_36']) && !empty($_POST['section_3_conteudo_36'])) ? $_POST['section_3_conteudo_36'] : '';
                $section_3_conteudo_37 = (isset($_POST['section_3_conteudo_37']) && !empty($_POST['section_3_conteudo_37'])) ? $_POST['section_3_conteudo_37'] : '';
                $section_3_conteudo_38 = (isset($_POST['section_3_conteudo_38']) && !empty($_POST['section_3_conteudo_38'])) ? $_POST['section_3_conteudo_38'] : '';
                $section_3_image_alt_39 = (isset($_POST['section_3_image_alt_39']) && !empty($_POST['section_3_image_alt_39'])) ? $_POST['section_3_image_alt_39'] : '';
                $section_3_conteudo_40 = (isset($_POST['section_3_conteudo_40']) && !empty($_POST['section_3_conteudo_40'])) ? $_POST['section_3_conteudo_40'] : '';
                $section_3_conteudo_41 = (isset($_POST['section_3_conteudo_41']) && !empty($_POST['section_3_conteudo_41'])) ? $_POST['section_3_conteudo_41'] : '';
                $section_3_conteudo_42 = (isset($_POST['section_3_conteudo_42']) && !empty($_POST['section_3_conteudo_42'])) ? $_POST['section_3_conteudo_42'] : '';
                $section_3_conteudo_43 = (isset($_POST['section_3_conteudo_43']) && !empty($_POST['section_3_conteudo_43'])) ? $_POST['section_3_conteudo_43'] : '';
                $section_3_link_44 = (isset($_POST['section_3_link_44']) && !empty($_POST['section_3_link_44'])) ? $_POST['section_3_link_44'] : '';
                $section_3_link_alt_44 = (isset($_POST['section_3_link_alt_44']) && !empty($_POST['section_3_link_alt_44'])) ? $_POST['section_3_link_alt_44'] : '';
                $section_3_link_conteudo_44 = (isset($_POST['section_3_link_conteudo_44']) && !empty($_POST['section_3_link_conteudo_44'])) ? $_POST['section_3_link_conteudo_44'] : '';
                $section_3_conteudo_45 = (isset($_POST['section_3_conteudo_45']) && !empty($_POST['section_3_conteudo_45'])) ? $_POST['section_3_conteudo_45'] : '';
                $section_3_image_alt_46 = (isset($_POST['section_3_image_alt_46']) && !empty($_POST['section_3_image_alt_46'])) ? $_POST['section_3_image_alt_46'] : '';
                $section_4_image_alt_47 = (isset($_POST['section_4_image_alt_47']) && !empty($_POST['section_4_image_alt_47'])) ? $_POST['section_4_image_alt_47'] : '';
                $section_4_image_alt_48 = (isset($_POST['section_4_image_alt_48']) && !empty($_POST['section_4_image_alt_48'])) ? $_POST['section_4_image_alt_48'] : '';
                $section_4_conteudo_49 = (isset($_POST['section_4_conteudo_49']) && !empty($_POST['section_4_conteudo_49'])) ? $_POST['section_4_conteudo_49'] : '';
                $section_4_conteudo_50 = (isset($_POST['section_4_conteudo_50']) && !empty($_POST['section_4_conteudo_50'])) ? $_POST['section_4_conteudo_50'] : '';
                $section_4_conteudo_51 = (isset($_POST['section_4_conteudo_51']) && !empty($_POST['section_4_conteudo_51'])) ? $_POST['section_4_conteudo_51'] : '';
                $section_4_image_alt_52 = (isset($_POST['section_4_image_alt_52']) && !empty($_POST['section_4_image_alt_52'])) ? $_POST['section_4_image_alt_52'] : '';
                $section_4_conteudo_53 = (isset($_POST['section_4_conteudo_53']) && !empty($_POST['section_4_conteudo_53'])) ? $_POST['section_4_conteudo_53'] : '';
                $section_4_conteudo_54 = (isset($_POST['section_4_conteudo_54']) && !empty($_POST['section_4_conteudo_54'])) ? $_POST['section_4_conteudo_54'] : '';
                $section_4_link_55 = (isset($_POST['section_4_link_55']) && !empty($_POST['section_4_link_55'])) ? $_POST['section_4_link_55'] : '';
                $section_4_link_alt_55 = (isset($_POST['section_4_link_alt_55']) && !empty($_POST['section_4_link_alt_55'])) ? $_POST['section_4_link_alt_55'] : '';
                $section_4_link_conteudo_55 = (isset($_POST['section_4_link_conteudo_55']) && !empty($_POST['section_4_link_conteudo_55'])) ? $_POST['section_4_link_conteudo_55'] : '';
                $section_4_conteudo_56 = (isset($_POST['section_4_conteudo_56']) && !empty($_POST['section_4_conteudo_56'])) ? $_POST['section_4_conteudo_56'] : '';
                $section_4_link_57 = (isset($_POST['section_4_link_57']) && !empty($_POST['section_4_link_57'])) ? $_POST['section_4_link_57'] : '';
                $section_4_link_alt_57 = (isset($_POST['section_4_link_alt_57']) && !empty($_POST['section_4_link_alt_57'])) ? $_POST['section_4_link_alt_57'] : '';
                $section_4_link_conteudo_57 = (isset($_POST['section_4_link_conteudo_57']) && !empty($_POST['section_4_link_conteudo_57'])) ? $_POST['section_4_link_conteudo_57'] : '';
                $section_4_conteudo_58 = (isset($_POST['section_4_conteudo_58']) && !empty($_POST['section_4_conteudo_58'])) ? $_POST['section_4_conteudo_58'] : '';
                $section_5_image_alt_59 = (isset($_POST['section_5_image_alt_59']) && !empty($_POST['section_5_image_alt_59'])) ? $_POST['section_5_image_alt_59'] : '';
                $section_5_conteudo_60 = (isset($_POST['section_5_conteudo_60']) && !empty($_POST['section_5_conteudo_60'])) ? $_POST['section_5_conteudo_60'] : '';
                $section_5_conteudo_61 = (isset($_POST['section_5_conteudo_61']) && !empty($_POST['section_5_conteudo_61'])) ? $_POST['section_5_conteudo_61'] : '';
                $section_5_link_62 = (isset($_POST['section_5_link_62']) && !empty($_POST['section_5_link_62'])) ? $_POST['section_5_link_62'] : '';
                $section_5_link_alt_62 = (isset($_POST['section_5_link_alt_62']) && !empty($_POST['section_5_link_alt_62'])) ? $_POST['section_5_link_alt_62'] : '';
                $section_5_link_conteudo_62 = (isset($_POST['section_5_link_conteudo_62']) && !empty($_POST['section_5_link_conteudo_62'])) ? $_POST['section_5_link_conteudo_62'] : '';
                $section_5_conteudo_63 = (isset($_POST['section_5_conteudo_63']) && !empty($_POST['section_5_conteudo_63'])) ? $_POST['section_5_conteudo_63'] : '';
                $section_5_link_64 = (isset($_POST['section_5_link_64']) && !empty($_POST['section_5_link_64'])) ? $_POST['section_5_link_64'] : '';
                $section_5_link_alt_64 = (isset($_POST['section_5_link_alt_64']) && !empty($_POST['section_5_link_alt_64'])) ? $_POST['section_5_link_alt_64'] : '';
                $section_5_conteudo_65 = (isset($_POST['section_5_conteudo_65']) && !empty($_POST['section_5_conteudo_65'])) ? $_POST['section_5_conteudo_65'] : '';
                $section_6_conteudo_66 = (isset($_POST['section_6_conteudo_66']) && !empty($_POST['section_6_conteudo_66'])) ? $_POST['section_6_conteudo_66'] : '';
                $section_6_link_67 = (isset($_POST['section_6_link_67']) && !empty($_POST['section_6_link_67'])) ? $_POST['section_6_link_67'] : '';
                $section_6_link_alt_67 = (isset($_POST['section_6_link_alt_67']) && !empty($_POST['section_6_link_alt_67'])) ? $_POST['section_6_link_alt_67'] : '';
                $section_6_link_conteudo_67 = (isset($_POST['section_6_link_conteudo_67']) && !empty($_POST['section_6_link_conteudo_67'])) ? $_POST['section_6_link_conteudo_67'] : '';
                $section_6_conteudo_68 = (isset($_POST['section_6_conteudo_68']) && !empty($_POST['section_6_conteudo_68'])) ? $_POST['section_6_conteudo_68'] : '';
                $section_6_conteudo_69 = (isset($_POST['section_6_conteudo_69']) && !empty($_POST['section_6_conteudo_69'])) ? $_POST['section_6_conteudo_69'] : '';
                $section_6_conteudo_70 = (isset($_POST['section_6_conteudo_70']) && !empty($_POST['section_6_conteudo_70'])) ? $_POST['section_6_conteudo_70'] : '';
                $section_6_image_alt_71 = (isset($_POST['section_6_image_alt_71']) && !empty($_POST['section_6_image_alt_71'])) ? $_POST['section_6_image_alt_71'] : '';
                $section_6_conteudo_72 = (isset($_POST['section_6_conteudo_72']) && !empty($_POST['section_6_conteudo_72'])) ? $_POST['section_6_conteudo_72'] : '';
                $section_6_image_alt_73 = (isset($_POST['section_6_image_alt_73']) && !empty($_POST['section_6_image_alt_73'])) ? $_POST['section_6_image_alt_73'] : '';
                $section_6_conteudo_74 = (isset($_POST['section_6_conteudo_74']) && !empty($_POST['section_6_conteudo_74'])) ? $_POST['section_6_conteudo_74'] : '';
                $section_6_image_alt_75 = (isset($_POST['section_6_image_alt_75']) && !empty($_POST['section_6_image_alt_75'])) ? $_POST['section_6_image_alt_75'] : '';
                $section_6_conteudo_76 = (isset($_POST['section_6_conteudo_76']) && !empty($_POST['section_6_conteudo_76'])) ? $_POST['section_6_conteudo_76'] : '';
                $section_6_image_alt_77 = (isset($_POST['section_6_image_alt_77']) && !empty($_POST['section_6_image_alt_77'])) ? $_POST['section_6_image_alt_77'] : '';
                $section_6_conteudo_78 = (isset($_POST['section_6_conteudo_78']) && !empty($_POST['section_6_conteudo_78'])) ? $_POST['section_6_conteudo_78'] : '';
                $section_7_conteudo_79 = (isset($_POST['section_7_conteudo_79']) && !empty($_POST['section_7_conteudo_79'])) ? $_POST['section_7_conteudo_79'] : '';
                $section_7_conteudo_80 = (isset($_POST['section_7_conteudo_80']) && !empty($_POST['section_7_conteudo_80'])) ? $_POST['section_7_conteudo_80'] : '';
                $section_7_conteudo_81 = (isset($_POST['section_7_conteudo_81']) && !empty($_POST['section_7_conteudo_81'])) ? $_POST['section_7_conteudo_81'] : '';
                $section_7_conteudo_82 = (isset($_POST['section_7_conteudo_82']) && !empty($_POST['section_7_conteudo_82'])) ? $_POST['section_7_conteudo_82'] : '';
                $section_7_conteudo_83 = (isset($_POST['section_7_conteudo_83']) && !empty($_POST['section_7_conteudo_83'])) ? $_POST['section_7_conteudo_83'] : '';
                $section_7_link_84 = (isset($_POST['section_7_link_84']) && !empty($_POST['section_7_link_84'])) ? $_POST['section_7_link_84'] : '';
                $section_7_link_alt_84 = (isset($_POST['section_7_link_alt_84']) && !empty($_POST['section_7_link_alt_84'])) ? $_POST['section_7_link_alt_84'] : '';
                $section_7_link_conteudo_84 = (isset($_POST['section_7_link_conteudo_84']) && !empty($_POST['section_7_link_conteudo_84'])) ? $_POST['section_7_link_conteudo_84'] : '';
                $section_7_conteudo_85 = (isset($_POST['section_7_conteudo_85']) && !empty($_POST['section_7_conteudo_85'])) ? $_POST['section_7_conteudo_85'] : '';
                $section_7_conteudo_86 = (isset($_POST['section_7_conteudo_86']) && !empty($_POST['section_7_conteudo_86'])) ? $_POST['section_7_conteudo_86'] : '';
                $section_7_conteudo_87 = (isset($_POST['section_7_conteudo_87']) && !empty($_POST['section_7_conteudo_87'])) ? $_POST['section_7_conteudo_87'] : '';
                $section_7_conteudo_88 = (isset($_POST['section_7_conteudo_88']) && !empty($_POST['section_7_conteudo_88'])) ? $_POST['section_7_conteudo_88'] : '';
                $section_7_link_89 = (isset($_POST['section_7_link_89']) && !empty($_POST['section_7_link_89'])) ? $_POST['section_7_link_89'] : '';
                $section_7_link_alt_89 = (isset($_POST['section_7_link_alt_89']) && !empty($_POST['section_7_link_alt_89'])) ? $_POST['section_7_link_alt_89'] : '';
                $section_7_link_conteudo_89 = (isset($_POST['section_7_link_conteudo_89']) && !empty($_POST['section_7_link_conteudo_89'])) ? $_POST['section_7_link_conteudo_89'] : '';
                $section_7_conteudo_90 = (isset($_POST['section_7_conteudo_90']) && !empty($_POST['section_7_conteudo_90'])) ? $_POST['section_7_conteudo_90'] : '';
                $section_7_conteudo_91 = (isset($_POST['section_7_conteudo_91']) && !empty($_POST['section_7_conteudo_91'])) ? $_POST['section_7_conteudo_91'] : '';
                $section_7_conteudo_92 = (isset($_POST['section_7_conteudo_92']) && !empty($_POST['section_7_conteudo_92'])) ? $_POST['section_7_conteudo_92'] : '';
                $section_7_conteudo_93 = (isset($_POST['section_7_conteudo_93']) && !empty($_POST['section_7_conteudo_93'])) ? $_POST['section_7_conteudo_93'] : '';
                $section_7_link_94 = (isset($_POST['section_7_link_94']) && !empty($_POST['section_7_link_94'])) ? $_POST['section_7_link_94'] : '';
                $section_7_link_alt_94 = (isset($_POST['section_7_link_alt_94']) && !empty($_POST['section_7_link_alt_94'])) ? $_POST['section_7_link_alt_94'] : '';
                $section_7_link_conteudo_94 = (isset($_POST['section_7_link_conteudo_94']) && !empty($_POST['section_7_link_conteudo_94'])) ? $_POST['section_7_link_conteudo_94'] : '';
                $section_7_conteudo_95 = (isset($_POST['section_7_conteudo_95']) && !empty($_POST['section_7_conteudo_95'])) ? $_POST['section_7_conteudo_95'] : '';
                $section_7_conteudo_96 = (isset($_POST['section_7_conteudo_96']) && !empty($_POST['section_7_conteudo_96'])) ? $_POST['section_7_conteudo_96'] : '';
                $section_7_conteudo_97 = (isset($_POST['section_7_conteudo_97']) && !empty($_POST['section_7_conteudo_97'])) ? $_POST['section_7_conteudo_97'] : '';
                $section_7_conteudo_98 = (isset($_POST['section_7_conteudo_98']) && !empty($_POST['section_7_conteudo_98'])) ? $_POST['section_7_conteudo_98'] : '';
                $section_7_link_99 = (isset($_POST['section_7_link_99']) && !empty($_POST['section_7_link_99'])) ? $_POST['section_7_link_99'] : '';
                $section_7_link_alt_99 = (isset($_POST['section_7_link_alt_99']) && !empty($_POST['section_7_link_alt_99'])) ? $_POST['section_7_link_alt_99'] : '';
                $section_7_link_conteudo_99 = (isset($_POST['section_7_link_conteudo_99']) && !empty($_POST['section_7_link_conteudo_99'])) ? $_POST['section_7_link_conteudo_99'] : '';
                $section_7_conteudo_100 = (isset($_POST['section_7_conteudo_100']) && !empty($_POST['section_7_conteudo_100'])) ? $_POST['section_7_conteudo_100'] : '';
                $section_7_conteudo_101 = (isset($_POST['section_7_conteudo_101']) && !empty($_POST['section_7_conteudo_101'])) ? $_POST['section_7_conteudo_101'] : '';
                $section_8_image_alt_102 = (isset($_POST['section_8_image_alt_102']) && !empty($_POST['section_8_image_alt_102'])) ? $_POST['section_8_image_alt_102'] : '';
                $section_8_link_103 = (isset($_POST['section_8_link_103']) && !empty($_POST['section_8_link_103'])) ? $_POST['section_8_link_103'] : '';
                $section_8_link_alt_103 = (isset($_POST['section_8_link_alt_103']) && !empty($_POST['section_8_link_alt_103'])) ? $_POST['section_8_link_alt_103'] : '';
                $section_8_image_alt_104 = (isset($_POST['section_8_image_alt_104']) && !empty($_POST['section_8_image_alt_104'])) ? $_POST['section_8_image_alt_104'] : '';
                $section_8_image_alt_105 = (isset($_POST['section_8_image_alt_105']) && !empty($_POST['section_8_image_alt_105'])) ? $_POST['section_8_image_alt_105'] : '';
                $section_8_image_alt_106 = (isset($_POST['section_8_image_alt_106']) && !empty($_POST['section_8_image_alt_106'])) ? $_POST['section_8_image_alt_106'] : '';
                $section_8_conteudo_107 = (isset($_POST['section_8_conteudo_107']) && !empty($_POST['section_8_conteudo_107'])) ? $_POST['section_8_conteudo_107'] : '';
                $section_8_conteudo_108 = (isset($_POST['section_8_conteudo_108']) && !empty($_POST['section_8_conteudo_108'])) ? $_POST['section_8_conteudo_108'] : '';
                $section_8_conteudo_109 = (isset($_POST['section_8_conteudo_109']) && !empty($_POST['section_8_conteudo_109'])) ? $_POST['section_8_conteudo_109'] : '';
                $section_8_conteudo_110 = (isset($_POST['section_8_conteudo_110']) && !empty($_POST['section_8_conteudo_110'])) ? $_POST['section_8_conteudo_110'] : '';
                $section_8_link_111 = (isset($_POST['section_8_link_111']) && !empty($_POST['section_8_link_111'])) ? $_POST['section_8_link_111'] : '';
                $section_8_link_alt_111 = (isset($_POST['section_8_link_alt_111']) && !empty($_POST['section_8_link_alt_111'])) ? $_POST['section_8_link_alt_111'] : '';
                $section_8_link_conteudo_111 = (isset($_POST['section_8_link_conteudo_111']) && !empty($_POST['section_8_link_conteudo_111'])) ? $_POST['section_8_link_conteudo_111'] : '';
                $section_8_conteudo_112 = (isset($_POST['section_8_conteudo_112']) && !empty($_POST['section_8_conteudo_112'])) ? $_POST['section_8_conteudo_112'] : '';
                $section_8_link_113 = (isset($_POST['section_8_link_113']) && !empty($_POST['section_8_link_113'])) ? $_POST['section_8_link_113'] : '';
                $section_8_link_alt_113 = (isset($_POST['section_8_link_alt_113']) && !empty($_POST['section_8_link_alt_113'])) ? $_POST['section_8_link_alt_113'] : '';
                $section_8_link_conteudo_113 = (isset($_POST['section_8_link_conteudo_113']) && !empty($_POST['section_8_link_conteudo_113'])) ? $_POST['section_8_link_conteudo_113'] : '';
                $section_8_conteudo_114 = (isset($_POST['section_8_conteudo_114']) && !empty($_POST['section_8_conteudo_114'])) ? $_POST['section_8_conteudo_114'] : '';
                $section_9_image_alt_115 = (isset($_POST['section_9_image_alt_115']) && !empty($_POST['section_9_image_alt_115'])) ? $_POST['section_9_image_alt_115'] : '';
                $section_9_conteudo_116 = (isset($_POST['section_9_conteudo_116']) && !empty($_POST['section_9_conteudo_116'])) ? $_POST['section_9_conteudo_116'] : '';
                $section_9_conteudo_117 = (isset($_POST['section_9_conteudo_117']) && !empty($_POST['section_9_conteudo_117'])) ? $_POST['section_9_conteudo_117'] : '';
                $section_9_button118 = (isset($_POST['section_9_button118']) && !empty($_POST['section_9_button118'])) ? $_POST['section_9_button118'] : '';
                $section_9_conteudo_119 = (isset($_POST['section_9_conteudo_119']) && !empty($_POST['section_9_conteudo_119'])) ? $_POST['section_9_conteudo_119'] : '';
                $section_9_conteudo_120 = (isset($_POST['section_9_conteudo_120']) && !empty($_POST['section_9_conteudo_120'])) ? $_POST['section_9_conteudo_120'] : '';
                $section_9_button121 = (isset($_POST['section_9_button121']) && !empty($_POST['section_9_button121'])) ? $_POST['section_9_button121'] : '';
                $section_9_conteudo_122 = (isset($_POST['section_9_conteudo_122']) && !empty($_POST['section_9_conteudo_122'])) ? $_POST['section_9_conteudo_122'] : '';
                $section_9_conteudo_123 = (isset($_POST['section_9_conteudo_123']) && !empty($_POST['section_9_conteudo_123'])) ? $_POST['section_9_conteudo_123'] : '';
                $section_9_button124 = (isset($_POST['section_9_button124']) && !empty($_POST['section_9_button124'])) ? $_POST['section_9_button124'] : '';
                $section_9_conteudo_125 = (isset($_POST['section_9_conteudo_125']) && !empty($_POST['section_9_conteudo_125'])) ? $_POST['section_9_conteudo_125'] : '';
                $section_9_conteudo_126 = (isset($_POST['section_9_conteudo_126']) && !empty($_POST['section_9_conteudo_126'])) ? $_POST['section_9_conteudo_126'] : '';
                $section_9_button127 = (isset($_POST['section_9_button127']) && !empty($_POST['section_9_button127'])) ? $_POST['section_9_button127'] : '';
                $section_9_conteudo_128 = (isset($_POST['section_9_conteudo_128']) && !empty($_POST['section_9_conteudo_128'])) ? $_POST['section_9_conteudo_128'] : '';
                $section_9_conteudo_129 = (isset($_POST['section_9_conteudo_129']) && !empty($_POST['section_9_conteudo_129'])) ? $_POST['section_9_conteudo_129'] : '';
                $section_9_button130 = (isset($_POST['section_9_button130']) && !empty($_POST['section_9_button130'])) ? $_POST['section_9_button130'] : '';
                $section_9_conteudo_131 = (isset($_POST['section_9_conteudo_131']) && !empty($_POST['section_9_conteudo_131'])) ? $_POST['section_9_conteudo_131'] : '';
                $section_10_image_alt_132 = (isset($_POST['section_10_image_alt_132']) && !empty($_POST['section_10_image_alt_132'])) ? $_POST['section_10_image_alt_132'] : '';
                $section_10_image_alt_133 = (isset($_POST['section_10_image_alt_133']) && !empty($_POST['section_10_image_alt_133'])) ? $_POST['section_10_image_alt_133'] : '';
                $section_10_conteudo_134 = (isset($_POST['section_10_conteudo_134']) && !empty($_POST['section_10_conteudo_134'])) ? $_POST['section_10_conteudo_134'] : '';
                $section_10_conteudo_135 = (isset($_POST['section_10_conteudo_135']) && !empty($_POST['section_10_conteudo_135'])) ? $_POST['section_10_conteudo_135'] : '';
                $section_10_conteudo_136 = (isset($_POST['section_10_conteudo_136']) && !empty($_POST['section_10_conteudo_136'])) ? $_POST['section_10_conteudo_136'] : '';
                $section_10_image_alt_137 = (isset($_POST['section_10_image_alt_137']) && !empty($_POST['section_10_image_alt_137'])) ? $_POST['section_10_image_alt_137'] : '';
                $section_10_image_alt_138 = (isset($_POST['section_10_image_alt_138']) && !empty($_POST['section_10_image_alt_138'])) ? $_POST['section_10_image_alt_138'] : '';
                $section_10_conteudo_139 = (isset($_POST['section_10_conteudo_139']) && !empty($_POST['section_10_conteudo_139'])) ? $_POST['section_10_conteudo_139'] : '';
                $section_10_conteudo_140 = (isset($_POST['section_10_conteudo_140']) && !empty($_POST['section_10_conteudo_140'])) ? $_POST['section_10_conteudo_140'] : '';
                $section_10_conteudo_141 = (isset($_POST['section_10_conteudo_141']) && !empty($_POST['section_10_conteudo_141'])) ? $_POST['section_10_conteudo_141'] : '';
                $section_11_image_alt_142 = (isset($_POST['section_11_image_alt_142']) && !empty($_POST['section_11_image_alt_142'])) ? $_POST['section_11_image_alt_142'] : '';
                $section_11_image_alt_143 = (isset($_POST['section_11_image_alt_143']) && !empty($_POST['section_11_image_alt_143'])) ? $_POST['section_11_image_alt_143'] : '';
                $section_11_conteudo_144 = (isset($_POST['section_11_conteudo_144']) && !empty($_POST['section_11_conteudo_144'])) ? $_POST['section_11_conteudo_144'] : '';
                $section_11_conteudo_145 = (isset($_POST['section_11_conteudo_145']) && !empty($_POST['section_11_conteudo_145'])) ? $_POST['section_11_conteudo_145'] : '';
                $section_11_conteudo_146 = (isset($_POST['section_11_conteudo_146']) && !empty($_POST['section_11_conteudo_146'])) ? $_POST['section_11_conteudo_146'] : '';
                $section_12_image_alt_147 = (isset($_POST['section_12_image_alt_147']) && !empty($_POST['section_12_image_alt_147'])) ? $_POST['section_12_image_alt_147'] : '';
                $section_13_conteudo_148 = (isset($_POST['section_13_conteudo_148']) && !empty($_POST['section_13_conteudo_148'])) ? $_POST['section_13_conteudo_148'] : '';
                $section_13_conteudo_149 = (isset($_POST['section_13_conteudo_149']) && !empty($_POST['section_13_conteudo_149'])) ? $_POST['section_13_conteudo_149'] : '';
                $section_13_conteudo_150 = (isset($_POST['section_13_conteudo_150']) && !empty($_POST['section_13_conteudo_150'])) ? $_POST['section_13_conteudo_150'] : '';
                $section_13_image_alt_151 = (isset($_POST['section_13_image_alt_151']) && !empty($_POST['section_13_image_alt_151'])) ? $_POST['section_13_image_alt_151'] : '';
                $section_13_button152 = (isset($_POST['section_13_button152']) && !empty($_POST['section_13_button152'])) ? $_POST['section_13_button152'] : '';
                $section_13_link_153 = (isset($_POST['section_13_link_153']) && !empty($_POST['section_13_link_153'])) ? $_POST['section_13_link_153'] : '';
                $section_13_link_alt_153 = (isset($_POST['section_13_link_alt_153']) && !empty($_POST['section_13_link_alt_153'])) ? $_POST['section_13_link_alt_153'] : '';
                $section_13_link_154 = (isset($_POST['section_13_link_154']) && !empty($_POST['section_13_link_154'])) ? $_POST['section_13_link_154'] : '';
                $section_13_link_alt_154 = (isset($_POST['section_13_link_alt_154']) && !empty($_POST['section_13_link_alt_154'])) ? $_POST['section_13_link_alt_154'] : '';
                $section_13_link_155 = (isset($_POST['section_13_link_155']) && !empty($_POST['section_13_link_155'])) ? $_POST['section_13_link_155'] : '';
                $section_13_link_alt_155 = (isset($_POST['section_13_link_alt_155']) && !empty($_POST['section_13_link_alt_155'])) ? $_POST['section_13_link_alt_155'] : '';
                $section_13_image_alt_156 = (isset($_POST['section_13_image_alt_156']) && !empty($_POST['section_13_image_alt_156'])) ? $_POST['section_13_image_alt_156'] : '';
                $section_13_image_alt_157 = (isset($_POST['section_13_image_alt_157']) && !empty($_POST['section_13_image_alt_157'])) ? $_POST['section_13_image_alt_157'] : '';
                $section_13_conteudo_158 = (isset($_POST['section_13_conteudo_158']) && !empty($_POST['section_13_conteudo_158'])) ? $_POST['section_13_conteudo_158'] : '';
                $section_13_link_159 = (isset($_POST['section_13_link_159']) && !empty($_POST['section_13_link_159'])) ? $_POST['section_13_link_159'] : '';
                $section_13_link_alt_159 = (isset($_POST['section_13_link_alt_159']) && !empty($_POST['section_13_link_alt_159'])) ? $_POST['section_13_link_alt_159'] : '';
                $section_13_link_conteudo_159 = (isset($_POST['section_13_link_conteudo_159']) && !empty($_POST['section_13_link_conteudo_159'])) ? $_POST['section_13_link_conteudo_159'] : '';
                $section_13_conteudo_160 = (isset($_POST['section_13_conteudo_160']) && !empty($_POST['section_13_conteudo_160'])) ? $_POST['section_13_conteudo_160'] : '';
                $section_14_image_alt_161 = (isset($_POST['section_14_image_alt_161']) && !empty($_POST['section_14_image_alt_161'])) ? $_POST['section_14_image_alt_161'] : '';
                $section_14_button162 = (isset($_POST['section_14_button162']) && !empty($_POST['section_14_button162'])) ? $_POST['section_14_button162'] : '';
                $section_14_link_163 = (isset($_POST['section_14_link_163']) && !empty($_POST['section_14_link_163'])) ? $_POST['section_14_link_163'] : '';
                $section_14_link_alt_163 = (isset($_POST['section_14_link_alt_163']) && !empty($_POST['section_14_link_alt_163'])) ? $_POST['section_14_link_alt_163'] : '';
                $section_14_link_164 = (isset($_POST['section_14_link_164']) && !empty($_POST['section_14_link_164'])) ? $_POST['section_14_link_164'] : '';
                $section_14_link_alt_164 = (isset($_POST['section_14_link_alt_164']) && !empty($_POST['section_14_link_alt_164'])) ? $_POST['section_14_link_alt_164'] : '';
                $section_14_link_165 = (isset($_POST['section_14_link_165']) && !empty($_POST['section_14_link_165'])) ? $_POST['section_14_link_165'] : '';
                $section_14_link_alt_165 = (isset($_POST['section_14_link_alt_165']) && !empty($_POST['section_14_link_alt_165'])) ? $_POST['section_14_link_alt_165'] : '';
                $section_14_image_alt_166 = (isset($_POST['section_14_image_alt_166']) && !empty($_POST['section_14_image_alt_166'])) ? $_POST['section_14_image_alt_166'] : '';
                $section_14_image_alt_167 = (isset($_POST['section_14_image_alt_167']) && !empty($_POST['section_14_image_alt_167'])) ? $_POST['section_14_image_alt_167'] : '';
                $section_14_conteudo_168 = (isset($_POST['section_14_conteudo_168']) && !empty($_POST['section_14_conteudo_168'])) ? $_POST['section_14_conteudo_168'] : '';
                $section_14_link_169 = (isset($_POST['section_14_link_169']) && !empty($_POST['section_14_link_169'])) ? $_POST['section_14_link_169'] : '';
                $section_14_link_alt_169 = (isset($_POST['section_14_link_alt_169']) && !empty($_POST['section_14_link_alt_169'])) ? $_POST['section_14_link_alt_169'] : '';
                $section_14_link_conteudo_169 = (isset($_POST['section_14_link_conteudo_169']) && !empty($_POST['section_14_link_conteudo_169'])) ? $_POST['section_14_link_conteudo_169'] : '';
                $section_14_conteudo_170 = (isset($_POST['section_14_conteudo_170']) && !empty($_POST['section_14_conteudo_170'])) ? $_POST['section_14_conteudo_170'] : '';
                $section_15_image_alt_171 = (isset($_POST['section_15_image_alt_171']) && !empty($_POST['section_15_image_alt_171'])) ? $_POST['section_15_image_alt_171'] : '';
                $section_15_image_alt_172 = (isset($_POST['section_15_image_alt_172']) && !empty($_POST['section_15_image_alt_172'])) ? $_POST['section_15_image_alt_172'] : '';
                $section_15_conteudo_173 = (isset($_POST['section_15_conteudo_173']) && !empty($_POST['section_15_conteudo_173'])) ? $_POST['section_15_conteudo_173'] : '';
                $section_15_link_174 = (isset($_POST['section_15_link_174']) && !empty($_POST['section_15_link_174'])) ? $_POST['section_15_link_174'] : '';
                $section_15_link_alt_174 = (isset($_POST['section_15_link_alt_174']) && !empty($_POST['section_15_link_alt_174'])) ? $_POST['section_15_link_alt_174'] : '';
                $section_15_link_conteudo_174 = (isset($_POST['section_15_link_conteudo_174']) && !empty($_POST['section_15_link_conteudo_174'])) ? $_POST['section_15_link_conteudo_174'] : '';
                $section_15_conteudo_175 = (isset($_POST['section_15_conteudo_175']) && !empty($_POST['section_15_conteudo_175'])) ? $_POST['section_15_conteudo_175'] : '';
                $section_15_conteudo_176 = (isset($_POST['section_15_conteudo_176']) && !empty($_POST['section_15_conteudo_176'])) ? $_POST['section_15_conteudo_176'] : '';
                $section_15_image_alt_177 = (isset($_POST['section_15_image_alt_177']) && !empty($_POST['section_15_image_alt_177'])) ? $_POST['section_15_image_alt_177'] : '';
                $section_16_conteudo_178 = (isset($_POST['section_16_conteudo_178']) && !empty($_POST['section_16_conteudo_178'])) ? $_POST['section_16_conteudo_178'] : '';
                $section_16_conteudo_179 = (isset($_POST['section_16_conteudo_179']) && !empty($_POST['section_16_conteudo_179'])) ? $_POST['section_16_conteudo_179'] : '';
                $section_16_conteudo_180 = (isset($_POST['section_16_conteudo_180']) && !empty($_POST['section_16_conteudo_180'])) ? $_POST['section_16_conteudo_180'] : '';
                $id = filter_input(INPUT_POST, 'id');
                if (isset($_POST['pagina_individual']) && !empty($_POST['pagina_individual'])) {
                    $pagina_individual = $_POST['pagina_individual'];
                } else {
                    $pagina_individual = gerarTituloSEO($section_1_button1);
                }
                $maximo = 180000;
                if ($_FILES["section_1_img_3"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_1_img_3"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_1_img_4"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_1_img_4"]["size"] / 1000;
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
                if ($_FILES["section_1_img_10"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_1_img_10"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_1_img_15"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_1_img_15"]["size"] / 1000;
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
                if ($_FILES["section_3_img_29"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_3_img_29"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_3_img_31"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_3_img_31"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_3_img_32"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_3_img_32"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_3_img_33"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_3_img_33"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_3_img_34"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_3_img_34"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_3_img_39"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_3_img_39"]["size"] / 1000;
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
                if ($_FILES["section_4_img_47"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_4_img_47"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_4_img_48"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_4_img_48"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_4_img_52"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_4_img_52"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_5_img_59"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_5_img_59"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_6_img_71"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_6_img_71"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_6_img_73"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_6_img_73"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_6_img_75"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_6_img_75"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_6_img_77"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_6_img_77"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_8_img_102"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_8_img_102"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_8_img_104"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_8_img_104"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_8_img_105"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_8_img_105"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_8_img_106"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_8_img_106"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_9_img_115"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_9_img_115"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_10_img_132"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_10_img_132"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_10_img_133"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_10_img_133"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_10_img_137"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_10_img_137"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_10_img_138"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_10_img_138"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_11_img_142"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_11_img_142"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_11_img_143"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_11_img_143"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_12_img_147"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_12_img_147"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_13_img_151"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_13_img_151"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_13_img_156"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_13_img_156"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_13_img_157"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_13_img_157"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_14_img_161"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_14_img_161"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_14_img_166"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_14_img_166"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_14_img_167"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_14_img_167"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_15_img_171"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_15_img_171"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_15_img_172"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_15_img_172"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_15_img_177"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_15_img_177"]["size"] / 1000;
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
                    $sql = "UPDATE tbl_home SET meta_title=?, meta_keywords=?, meta_description=?, section_1_button1=?, section_1_button2=?, section_1_img_3=?, section_1_image_alt_3=?, section_1_img_4=?, section_1_image_alt_4=?, section_1_conteudo_5=?, section_1_conteudo_6=?, section_1_link_7=?, section_1_link_alt_7=?, section_1_link_conteudo_7=?, section_1_conteudo_8=?, section_1_img_9=?, section_1_image_alt_9=?, section_1_img_10=?, section_1_image_alt_10=?, section_1_conteudo_11=?, section_1_conteudo_12=?, section_1_link_13=?, section_1_link_alt_13=?, section_1_link_conteudo_13=?, section_1_conteudo_14=?, section_1_img_15=?, section_1_image_alt_15=?, section_1_img_16=?, section_1_image_alt_16=?, section_1_conteudo_17=?, section_1_conteudo_18=?, section_1_link_19=?, section_1_link_alt_19=?, section_1_link_conteudo_19=?, section_1_conteudo_20=?, section_2_conteudo_21=?, section_2_conteudo_22=?, section_2_conteudo_23=?, section_2_conteudo_24=?, section_2_conteudo_25=?, section_2_conteudo_26=?, section_2_conteudo_27=?, section_2_conteudo_28=?, section_3_img_29=?, section_3_image_alt_29=?, section_3_conteudo_30=?, section_3_img_31=?, section_3_image_alt_31=?, section_3_img_32=?, section_3_image_alt_32=?, section_3_img_33=?, section_3_image_alt_33=?, section_3_img_34=?, section_3_image_alt_34=?, section_3_conteudo_35=?, section_3_conteudo_36=?, section_3_conteudo_37=?, section_3_conteudo_38=?, section_3_img_39=?, section_3_image_alt_39=?, section_3_conteudo_40=?, section_3_conteudo_41=?, section_3_conteudo_42=?, section_3_conteudo_43=?, section_3_link_44=?, section_3_link_alt_44=?, section_3_link_conteudo_44=?, section_3_conteudo_45=?, section_3_img_46=?, section_3_image_alt_46=?, section_4_img_47=?, section_4_image_alt_47=?, section_4_img_48=?, section_4_image_alt_48=?, section_4_conteudo_49=?, section_4_conteudo_50=?, section_4_conteudo_51=?, section_4_img_52=?, section_4_image_alt_52=?, section_4_conteudo_53=?, section_4_conteudo_54=?, section_4_link_55=?, section_4_link_alt_55=?, section_4_link_conteudo_55=?, section_4_conteudo_56=?, section_4_link_57=?, section_4_link_alt_57=?, section_4_link_conteudo_57=?, section_4_conteudo_58=?, section_5_img_59=?, section_5_image_alt_59=?, section_5_conteudo_60=?, section_5_conteudo_61=?, section_5_link_62=?, section_5_link_alt_62=?, section_5_link_conteudo_62=?, section_5_conteudo_63=?, section_5_link_64=?, section_5_link_alt_64=?, section_5_conteudo_65=?, section_6_conteudo_66=?, section_6_link_67=?, section_6_link_alt_67=?, section_6_link_conteudo_67=?, section_6_conteudo_68=?, section_6_conteudo_69=?, section_6_conteudo_70=?, section_6_img_71=?, section_6_image_alt_71=?, section_6_conteudo_72=?, section_6_img_73=?, section_6_image_alt_73=?, section_6_conteudo_74=?, section_6_img_75=?, section_6_image_alt_75=?, section_6_conteudo_76=?, section_6_img_77=?, section_6_image_alt_77=?, section_6_conteudo_78=?, section_7_conteudo_79=?, section_7_conteudo_80=?, section_7_conteudo_81=?, section_7_conteudo_82=?, section_7_conteudo_83=?, section_7_link_84=?, section_7_link_alt_84=?, section_7_link_conteudo_84=?, section_7_conteudo_85=?, section_7_conteudo_86=?, section_7_conteudo_87=?, section_7_conteudo_88=?, section_7_link_89=?, section_7_link_alt_89=?, section_7_link_conteudo_89=?, section_7_conteudo_90=?, section_7_conteudo_91=?, section_7_conteudo_92=?, section_7_conteudo_93=?, section_7_link_94=?, section_7_link_alt_94=?, section_7_link_conteudo_94=?, section_7_conteudo_95=?, section_7_conteudo_96=?, section_7_conteudo_97=?, section_7_conteudo_98=?, section_7_link_99=?, section_7_link_alt_99=?, section_7_link_conteudo_99=?, section_7_conteudo_100=?, section_7_conteudo_101=?, section_8_img_102=?, section_8_image_alt_102=?, section_8_link_103=?, section_8_link_alt_103=?, section_8_img_104=?, section_8_image_alt_104=?, section_8_img_105=?, section_8_image_alt_105=?, section_8_img_106=?, section_8_image_alt_106=?, section_8_conteudo_107=?, section_8_conteudo_108=?, section_8_conteudo_109=?, section_8_conteudo_110=?, section_8_link_111=?, section_8_link_alt_111=?, section_8_link_conteudo_111=?, section_8_conteudo_112=?, section_8_link_113=?, section_8_link_alt_113=?, section_8_link_conteudo_113=?, section_8_conteudo_114=?, section_9_img_115=?, section_9_image_alt_115=?, section_9_conteudo_116=?, section_9_conteudo_117=?, section_9_button118=?, section_9_conteudo_119=?, section_9_conteudo_120=?, section_9_button121=?, section_9_conteudo_122=?, section_9_conteudo_123=?, section_9_button124=?, section_9_conteudo_125=?, section_9_conteudo_126=?, section_9_button127=?, section_9_conteudo_128=?, section_9_conteudo_129=?, section_9_button130=?, section_9_conteudo_131=?, section_10_img_132=?, section_10_image_alt_132=?, section_10_img_133=?, section_10_image_alt_133=?, section_10_conteudo_134=?, section_10_conteudo_135=?, section_10_conteudo_136=?, section_10_img_137=?, section_10_image_alt_137=?, section_10_img_138=?, section_10_image_alt_138=?, section_10_conteudo_139=?, section_10_conteudo_140=?, section_10_conteudo_141=?, section_11_img_142=?, section_11_image_alt_142=?, section_11_img_143=?, section_11_image_alt_143=?, section_11_conteudo_144=?, section_11_conteudo_145=?, section_11_conteudo_146=?, section_12_img_147=?, section_12_image_alt_147=?, section_13_conteudo_148=?, section_13_conteudo_149=?, section_13_conteudo_150=?, section_13_img_151=?, section_13_image_alt_151=?, section_13_button152=?, section_13_link_153=?, section_13_link_alt_153=?, section_13_link_154=?, section_13_link_alt_154=?, section_13_link_155=?, section_13_link_alt_155=?, section_13_img_156=?, section_13_image_alt_156=?, section_13_img_157=?, section_13_image_alt_157=?, section_13_conteudo_158=?, section_13_link_159=?, section_13_link_alt_159=?, section_13_link_conteudo_159=?, section_13_conteudo_160=?, section_14_img_161=?, section_14_image_alt_161=?, section_14_button162=?, section_14_link_163=?, section_14_link_alt_163=?, section_14_link_164=?, section_14_link_alt_164=?, section_14_link_165=?, section_14_link_alt_165=?, section_14_img_166=?, section_14_image_alt_166=?, section_14_img_167=?, section_14_image_alt_167=?, section_14_conteudo_168=?, section_14_link_169=?, section_14_link_alt_169=?, section_14_link_conteudo_169=?, section_14_conteudo_170=?, section_15_img_171=?, section_15_image_alt_171=?, section_15_img_172=?, section_15_image_alt_172=?, section_15_conteudo_173=?, section_15_link_174=?, section_15_link_alt_174=?, section_15_link_conteudo_174=?, section_15_conteudo_175=?, section_15_conteudo_176=?, section_15_img_177=?, section_15_image_alt_177=?, section_16_conteudo_178=?, section_16_conteudo_179=?, section_16_conteudo_180=? WHERE id=?";
                    $stm = $this->pdo->prepare($sql);
                    $stm->bindValue(1, $meta_title);
                    $stm->bindValue(2, $meta_keywords);
                    $stm->bindValue(3, $meta_description);
                    $stm->bindValue(4, $section_1_button1);
                    $stm->bindValue(5, $section_1_button2);
                    $stm->bindValue(6, upload("section_1_img_3", $pastaArquivos, "N"));
                    $stm->bindValue(7, $section_1_image_alt_3);
                    $stm->bindValue(8, upload("section_1_img_4", $pastaArquivos, "N"));
                    $stm->bindValue(9, $section_1_image_alt_4);
                    $stm->bindValue(10, $section_1_conteudo_5);
                    $stm->bindValue(11, $section_1_conteudo_6);
                    $stm->bindValue(12, $section_1_link_7);
                    $stm->bindValue(13, $section_1_link_alt_7);
                    $stm->bindValue(14, $section_1_link_conteudo_7);
                    $stm->bindValue(15, $section_1_conteudo_8);
                    $stm->bindValue(16, upload("section_1_img_9", $pastaArquivos, "N"));
                    $stm->bindValue(17, $section_1_image_alt_9);
                    $stm->bindValue(18, upload("section_1_img_10", $pastaArquivos, "N"));
                    $stm->bindValue(19, $section_1_image_alt_10);
                    $stm->bindValue(20, $section_1_conteudo_11);
                    $stm->bindValue(21, $section_1_conteudo_12);
                    $stm->bindValue(22, $section_1_link_13);
                    $stm->bindValue(23, $section_1_link_alt_13);
                    $stm->bindValue(24, $section_1_link_conteudo_13);
                    $stm->bindValue(25, $section_1_conteudo_14);
                    $stm->bindValue(26, upload("section_1_img_15", $pastaArquivos, "N"));
                    $stm->bindValue(27, $section_1_image_alt_15);
                    $stm->bindValue(28, upload("section_1_img_16", $pastaArquivos, "N"));
                    $stm->bindValue(29, $section_1_image_alt_16);
                    $stm->bindValue(30, $section_1_conteudo_17);
                    $stm->bindValue(31, $section_1_conteudo_18);
                    $stm->bindValue(32, $section_1_link_19);
                    $stm->bindValue(33, $section_1_link_alt_19);
                    $stm->bindValue(34, $section_1_link_conteudo_19);
                    $stm->bindValue(35, $section_1_conteudo_20);
                    $stm->bindValue(36, $section_2_conteudo_21);
                    $stm->bindValue(37, $section_2_conteudo_22);
                    $stm->bindValue(38, $section_2_conteudo_23);
                    $stm->bindValue(39, $section_2_conteudo_24);
                    $stm->bindValue(40, $section_2_conteudo_25);
                    $stm->bindValue(41, $section_2_conteudo_26);
                    $stm->bindValue(42, $section_2_conteudo_27);
                    $stm->bindValue(43, $section_2_conteudo_28);
                    $stm->bindValue(44, upload("section_3_img_29", $pastaArquivos, "N"));
                    $stm->bindValue(45, $section_3_image_alt_29);
                    $stm->bindValue(46, $section_3_conteudo_30);
                    $stm->bindValue(47, upload("section_3_img_31", $pastaArquivos, "N"));
                    $stm->bindValue(48, $section_3_image_alt_31);
                    $stm->bindValue(49, upload("section_3_img_32", $pastaArquivos, "N"));
                    $stm->bindValue(50, $section_3_image_alt_32);
                    $stm->bindValue(51, upload("section_3_img_33", $pastaArquivos, "N"));
                    $stm->bindValue(52, $section_3_image_alt_33);
                    $stm->bindValue(53, upload("section_3_img_34", $pastaArquivos, "N"));
                    $stm->bindValue(54, $section_3_image_alt_34);
                    $stm->bindValue(55, $section_3_conteudo_35);
                    $stm->bindValue(56, $section_3_conteudo_36);
                    $stm->bindValue(57, $section_3_conteudo_37);
                    $stm->bindValue(58, $section_3_conteudo_38);
                    $stm->bindValue(59, upload("section_3_img_39", $pastaArquivos, "N"));
                    $stm->bindValue(60, $section_3_image_alt_39);
                    $stm->bindValue(61, $section_3_conteudo_40);
                    $stm->bindValue(62, $section_3_conteudo_41);
                    $stm->bindValue(63, $section_3_conteudo_42);
                    $stm->bindValue(64, $section_3_conteudo_43);
                    $stm->bindValue(65, $section_3_link_44);
                    $stm->bindValue(66, $section_3_link_alt_44);
                    $stm->bindValue(67, $section_3_link_conteudo_44);
                    $stm->bindValue(68, $section_3_conteudo_45);
                    $stm->bindValue(69, upload("section_3_img_46", $pastaArquivos, "N"));
                    $stm->bindValue(70, $section_3_image_alt_46);
                    $stm->bindValue(71, upload("section_4_img_47", $pastaArquivos, "N"));
                    $stm->bindValue(72, $section_4_image_alt_47);
                    $stm->bindValue(73, upload("section_4_img_48", $pastaArquivos, "N"));
                    $stm->bindValue(74, $section_4_image_alt_48);
                    $stm->bindValue(75, $section_4_conteudo_49);
                    $stm->bindValue(76, $section_4_conteudo_50);
                    $stm->bindValue(77, $section_4_conteudo_51);
                    $stm->bindValue(78, upload("section_4_img_52", $pastaArquivos, "N"));
                    $stm->bindValue(79, $section_4_image_alt_52);
                    $stm->bindValue(80, $section_4_conteudo_53);
                    $stm->bindValue(81, $section_4_conteudo_54);
                    $stm->bindValue(82, $section_4_link_55);
                    $stm->bindValue(83, $section_4_link_alt_55);
                    $stm->bindValue(84, $section_4_link_conteudo_55);
                    $stm->bindValue(85, $section_4_conteudo_56);
                    $stm->bindValue(86, $section_4_link_57);
                    $stm->bindValue(87, $section_4_link_alt_57);
                    $stm->bindValue(88, $section_4_link_conteudo_57);
                    $stm->bindValue(89, $section_4_conteudo_58);
                    $stm->bindValue(90, upload("section_5_img_59", $pastaArquivos, "N"));
                    $stm->bindValue(91, $section_5_image_alt_59);
                    $stm->bindValue(92, $section_5_conteudo_60);
                    $stm->bindValue(93, $section_5_conteudo_61);
                    $stm->bindValue(94, $section_5_link_62);
                    $stm->bindValue(95, $section_5_link_alt_62);
                    $stm->bindValue(96, $section_5_link_conteudo_62);
                    $stm->bindValue(97, $section_5_conteudo_63);
                    $stm->bindValue(98, $section_5_link_64);
                    $stm->bindValue(99, $section_5_link_alt_64);
                    $stm->bindValue(100, $section_5_conteudo_65);
                    $stm->bindValue(101, $section_6_conteudo_66);
                    $stm->bindValue(102, $section_6_link_67);
                    $stm->bindValue(103, $section_6_link_alt_67);
                    $stm->bindValue(104, $section_6_link_conteudo_67);
                    $stm->bindValue(105, $section_6_conteudo_68);
                    $stm->bindValue(106, $section_6_conteudo_69);
                    $stm->bindValue(107, $section_6_conteudo_70);
                    $stm->bindValue(108, upload("section_6_img_71", $pastaArquivos, "N"));
                    $stm->bindValue(109, $section_6_image_alt_71);
                    $stm->bindValue(110, $section_6_conteudo_72);
                    $stm->bindValue(111, upload("section_6_img_73", $pastaArquivos, "N"));
                    $stm->bindValue(112, $section_6_image_alt_73);
                    $stm->bindValue(113, $section_6_conteudo_74);
                    $stm->bindValue(114, upload("section_6_img_75", $pastaArquivos, "N"));
                    $stm->bindValue(115, $section_6_image_alt_75);
                    $stm->bindValue(116, $section_6_conteudo_76);
                    $stm->bindValue(117, upload("section_6_img_77", $pastaArquivos, "N"));
                    $stm->bindValue(118, $section_6_image_alt_77);
                    $stm->bindValue(119, $section_6_conteudo_78);
                    $stm->bindValue(120, $section_7_conteudo_79);
                    $stm->bindValue(121, $section_7_conteudo_80);
                    $stm->bindValue(122, $section_7_conteudo_81);
                    $stm->bindValue(123, $section_7_conteudo_82);
                    $stm->bindValue(124, $section_7_conteudo_83);
                    $stm->bindValue(125, $section_7_link_84);
                    $stm->bindValue(126, $section_7_link_alt_84);
                    $stm->bindValue(127, $section_7_link_conteudo_84);
                    $stm->bindValue(128, $section_7_conteudo_85);
                    $stm->bindValue(129, $section_7_conteudo_86);
                    $stm->bindValue(130, $section_7_conteudo_87);
                    $stm->bindValue(131, $section_7_conteudo_88);
                    $stm->bindValue(132, $section_7_link_89);
                    $stm->bindValue(133, $section_7_link_alt_89);
                    $stm->bindValue(134, $section_7_link_conteudo_89);
                    $stm->bindValue(135, $section_7_conteudo_90);
                    $stm->bindValue(136, $section_7_conteudo_91);
                    $stm->bindValue(137, $section_7_conteudo_92);
                    $stm->bindValue(138, $section_7_conteudo_93);
                    $stm->bindValue(139, $section_7_link_94);
                    $stm->bindValue(140, $section_7_link_alt_94);
                    $stm->bindValue(141, $section_7_link_conteudo_94);
                    $stm->bindValue(142, $section_7_conteudo_95);
                    $stm->bindValue(143, $section_7_conteudo_96);
                    $stm->bindValue(144, $section_7_conteudo_97);
                    $stm->bindValue(145, $section_7_conteudo_98);
                    $stm->bindValue(146, $section_7_link_99);
                    $stm->bindValue(147, $section_7_link_alt_99);
                    $stm->bindValue(148, $section_7_link_conteudo_99);
                    $stm->bindValue(149, $section_7_conteudo_100);
                    $stm->bindValue(150, $section_7_conteudo_101);
                    $stm->bindValue(151, upload("section_8_img_102", $pastaArquivos, "N"));
                    $stm->bindValue(152, $section_8_image_alt_102);
                    $stm->bindValue(153, $section_8_link_103);
                    $stm->bindValue(154, $section_8_link_alt_103);
                    $stm->bindValue(155, upload("section_8_img_104", $pastaArquivos, "N"));
                    $stm->bindValue(156, $section_8_image_alt_104);
                    $stm->bindValue(157, upload("section_8_img_105", $pastaArquivos, "N"));
                    $stm->bindValue(158, $section_8_image_alt_105);
                    $stm->bindValue(159, upload("section_8_img_106", $pastaArquivos, "N"));
                    $stm->bindValue(160, $section_8_image_alt_106);
                    $stm->bindValue(161, $section_8_conteudo_107);
                    $stm->bindValue(162, $section_8_conteudo_108);
                    $stm->bindValue(163, $section_8_conteudo_109);
                    $stm->bindValue(164, $section_8_conteudo_110);
                    $stm->bindValue(165, $section_8_link_111);
                    $stm->bindValue(166, $section_8_link_alt_111);
                    $stm->bindValue(167, $section_8_link_conteudo_111);
                    $stm->bindValue(168, $section_8_conteudo_112);
                    $stm->bindValue(169, $section_8_link_113);
                    $stm->bindValue(170, $section_8_link_alt_113);
                    $stm->bindValue(171, $section_8_link_conteudo_113);
                    $stm->bindValue(172, $section_8_conteudo_114);
                    $stm->bindValue(173, upload("section_9_img_115", $pastaArquivos, "N"));
                    $stm->bindValue(174, $section_9_image_alt_115);
                    $stm->bindValue(175, $section_9_conteudo_116);
                    $stm->bindValue(176, $section_9_conteudo_117);
                    $stm->bindValue(177, $section_9_button118);
                    $stm->bindValue(178, $section_9_conteudo_119);
                    $stm->bindValue(179, $section_9_conteudo_120);
                    $stm->bindValue(180, $section_9_button121);
                    $stm->bindValue(181, $section_9_conteudo_122);
                    $stm->bindValue(182, $section_9_conteudo_123);
                    $stm->bindValue(183, $section_9_button124);
                    $stm->bindValue(184, $section_9_conteudo_125);
                    $stm->bindValue(185, $section_9_conteudo_126);
                    $stm->bindValue(186, $section_9_button127);
                    $stm->bindValue(187, $section_9_conteudo_128);
                    $stm->bindValue(188, $section_9_conteudo_129);
                    $stm->bindValue(189, $section_9_button130);
                    $stm->bindValue(190, $section_9_conteudo_131);
                    $stm->bindValue(191, upload("section_10_img_132", $pastaArquivos, "N"));
                    $stm->bindValue(192, $section_10_image_alt_132);
                    $stm->bindValue(193, upload("section_10_img_133", $pastaArquivos, "N"));
                    $stm->bindValue(194, $section_10_image_alt_133);
                    $stm->bindValue(195, $section_10_conteudo_134);
                    $stm->bindValue(196, $section_10_conteudo_135);
                    $stm->bindValue(197, $section_10_conteudo_136);
                    $stm->bindValue(198, upload("section_10_img_137", $pastaArquivos, "N"));
                    $stm->bindValue(199, $section_10_image_alt_137);
                    $stm->bindValue(200, upload("section_10_img_138", $pastaArquivos, "N"));
                    $stm->bindValue(201, $section_10_image_alt_138);
                    $stm->bindValue(202, $section_10_conteudo_139);
                    $stm->bindValue(203, $section_10_conteudo_140);
                    $stm->bindValue(204, $section_10_conteudo_141);
                    $stm->bindValue(205, upload("section_11_img_142", $pastaArquivos, "N"));
                    $stm->bindValue(206, $section_11_image_alt_142);
                    $stm->bindValue(207, upload("section_11_img_143", $pastaArquivos, "N"));
                    $stm->bindValue(208, $section_11_image_alt_143);
                    $stm->bindValue(209, $section_11_conteudo_144);
                    $stm->bindValue(210, $section_11_conteudo_145);
                    $stm->bindValue(211, $section_11_conteudo_146);
                    $stm->bindValue(212, upload("section_12_img_147", $pastaArquivos, "N"));
                    $stm->bindValue(213, $section_12_image_alt_147);
                    $stm->bindValue(214, $section_13_conteudo_148);
                    $stm->bindValue(215, $section_13_conteudo_149);
                    $stm->bindValue(216, $section_13_conteudo_150);
                    $stm->bindValue(217, upload("section_13_img_151", $pastaArquivos, "N"));
                    $stm->bindValue(218, $section_13_image_alt_151);
                    $stm->bindValue(219, $section_13_button152);
                    $stm->bindValue(220, $section_13_link_153);
                    $stm->bindValue(221, $section_13_link_alt_153);
                    $stm->bindValue(222, $section_13_link_154);
                    $stm->bindValue(223, $section_13_link_alt_154);
                    $stm->bindValue(224, $section_13_link_155);
                    $stm->bindValue(225, $section_13_link_alt_155);
                    $stm->bindValue(226, upload("section_13_img_156", $pastaArquivos, "N"));
                    $stm->bindValue(227, $section_13_image_alt_156);
                    $stm->bindValue(228, upload("section_13_img_157", $pastaArquivos, "N"));
                    $stm->bindValue(229, $section_13_image_alt_157);
                    $stm->bindValue(230, $section_13_conteudo_158);
                    $stm->bindValue(231, $section_13_link_159);
                    $stm->bindValue(232, $section_13_link_alt_159);
                    $stm->bindValue(233, $section_13_link_conteudo_159);
                    $stm->bindValue(234, $section_13_conteudo_160);
                    $stm->bindValue(235, upload("section_14_img_161", $pastaArquivos, "N"));
                    $stm->bindValue(236, $section_14_image_alt_161);
                    $stm->bindValue(237, $section_14_button162);
                    $stm->bindValue(238, $section_14_link_163);
                    $stm->bindValue(239, $section_14_link_alt_163);
                    $stm->bindValue(240, $section_14_link_164);
                    $stm->bindValue(241, $section_14_link_alt_164);
                    $stm->bindValue(242, $section_14_link_165);
                    $stm->bindValue(243, $section_14_link_alt_165);
                    $stm->bindValue(244, upload("section_14_img_166", $pastaArquivos, "N"));
                    $stm->bindValue(245, $section_14_image_alt_166);
                    $stm->bindValue(246, upload("section_14_img_167", $pastaArquivos, "N"));
                    $stm->bindValue(247, $section_14_image_alt_167);
                    $stm->bindValue(248, $section_14_conteudo_168);
                    $stm->bindValue(249, $section_14_link_169);
                    $stm->bindValue(250, $section_14_link_alt_169);
                    $stm->bindValue(251, $section_14_link_conteudo_169);
                    $stm->bindValue(252, $section_14_conteudo_170);
                    $stm->bindValue(253, upload("section_15_img_171", $pastaArquivos, "N"));
                    $stm->bindValue(254, $section_15_image_alt_171);
                    $stm->bindValue(255, upload("section_15_img_172", $pastaArquivos, "N"));
                    $stm->bindValue(256, $section_15_image_alt_172);
                    $stm->bindValue(257, $section_15_conteudo_173);
                    $stm->bindValue(258, $section_15_link_174);
                    $stm->bindValue(259, $section_15_link_alt_174);
                    $stm->bindValue(260, $section_15_link_conteudo_174);
                    $stm->bindValue(261, $section_15_conteudo_175);
                    $stm->bindValue(262, $section_15_conteudo_176);
                    $stm->bindValue(263, upload("section_15_img_177", $pastaArquivos, "N"));
                    $stm->bindValue(264, $section_15_image_alt_177);
                    $stm->bindValue(265, $section_16_conteudo_178);
                    $stm->bindValue(266, $section_16_conteudo_179);
                    $stm->bindValue(267, $section_16_conteudo_180);
                    $stm->bindValue(268, $id);
                    $stm->execute();
                } catch (PDOException $erro) {
                    echo $erro->getMessage();
                }

                // Trecho adicional
                if ($pagina_individual == 'S') {
                    echo "  <script>
          alert('Modificado com sucesso!');
          window.location='editar-home.php?pi=S&id=$id';
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
            if (isset($_GET['acao']) && $_GET['acao'] == 'excluirHome') {
                try {
                    $sql = "DELETE FROM tbl_home WHERE id=? ";
                    $stm = $this->pdo->prepare($sql);
                    $stm->bindValue(1, $_GET['id']);
                    $stm->execute();
                } catch (PDOException $erro) {
                    echo $erro->getMessage();
                }

                echo "  <script>
            window.location='home.php';
        </script>";
                exit;
            }
        }
    }
}
