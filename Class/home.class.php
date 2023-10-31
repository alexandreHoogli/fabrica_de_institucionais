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
            if (!isset(self::$Home)):
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
        function add($redireciona = '')
        {
            if (isset($_POST['acao']) && $_POST['acao'] == 'addHome') {
                $meta_title = (isset($_POST['meta_title']) && !empty($_POST['meta_title'])) ? $_POST['meta_title'] : '';
                $meta_keywords = (isset($_POST['meta_keywords']) && !empty($_POST['meta_keywords'])) ? $_POST['meta_keywords'] : '';
                $meta_description = (isset($_POST['meta_description']) && !empty($_POST['meta_description'])) ? $_POST['meta_description'] : '';
                $section_1_link_1 = (isset($_POST['section_1_link_1']) && !empty($_POST['section_1_link_1'])) ? $_POST['section_1_link_1'] : '';
                $section_1_link_alt_1 = (isset($_POST['section_1_link_alt_1']) && !empty($_POST['section_1_link_alt_1'])) ? $_POST['section_1_link_alt_1'] : '';
                $section_1_link_conteudo_1 = (isset($_POST['section_1_link_conteudo_1']) && !empty($_POST['section_1_link_conteudo_1'])) ? $_POST['section_1_link_conteudo_1'] : '';
                $section_1_button2 = (isset($_POST['section_1_button2']) && !empty($_POST['section_1_button2'])) ? $_POST['section_1_button2'] : '';
                $section_1_button3 = (isset($_POST['section_1_button3']) && !empty($_POST['section_1_button3'])) ? $_POST['section_1_button3'] : '';
                $section_1_image_alt_4 = (isset($_POST['section_1_image_alt_4']) && !empty($_POST['section_1_image_alt_4'])) ? $_POST['section_1_image_alt_4'] : '';
                $section_1_image_alt_5 = (isset($_POST['section_1_image_alt_5']) && !empty($_POST['section_1_image_alt_5'])) ? $_POST['section_1_image_alt_5'] : '';
                $section_1_image_alt_6 = (isset($_POST['section_1_image_alt_6']) && !empty($_POST['section_1_image_alt_6'])) ? $_POST['section_1_image_alt_6'] : '';
                $section_1_conteudo_7 = (isset($_POST['section_1_conteudo_7']) && !empty($_POST['section_1_conteudo_7'])) ? $_POST['section_1_conteudo_7'] : '';
                $section_1_conteudo_8 = (isset($_POST['section_1_conteudo_8']) && !empty($_POST['section_1_conteudo_8'])) ? $_POST['section_1_conteudo_8'] : '';
                $section_1_link_9 = (isset($_POST['section_1_link_9']) && !empty($_POST['section_1_link_9'])) ? $_POST['section_1_link_9'] : '';
                $section_1_link_alt_9 = (isset($_POST['section_1_link_alt_9']) && !empty($_POST['section_1_link_alt_9'])) ? $_POST['section_1_link_alt_9'] : '';
                $section_1_link_conteudo_9 = (isset($_POST['section_1_link_conteudo_9']) && !empty($_POST['section_1_link_conteudo_9'])) ? $_POST['section_1_link_conteudo_9'] : '';
                $section_1_conteudo_10 = (isset($_POST['section_1_conteudo_10']) && !empty($_POST['section_1_conteudo_10'])) ? $_POST['section_1_conteudo_10'] : '';
                $section_1_image_alt_11 = (isset($_POST['section_1_image_alt_11']) && !empty($_POST['section_1_image_alt_11'])) ? $_POST['section_1_image_alt_11'] : '';
                $section_1_conteudo_12 = (isset($_POST['section_1_conteudo_12']) && !empty($_POST['section_1_conteudo_12'])) ? $_POST['section_1_conteudo_12'] : '';
                $section_1_conteudo_13 = (isset($_POST['section_1_conteudo_13']) && !empty($_POST['section_1_conteudo_13'])) ? $_POST['section_1_conteudo_13'] : '';
                $section_1_link_14 = (isset($_POST['section_1_link_14']) && !empty($_POST['section_1_link_14'])) ? $_POST['section_1_link_14'] : '';
                $section_1_link_alt_14 = (isset($_POST['section_1_link_alt_14']) && !empty($_POST['section_1_link_alt_14'])) ? $_POST['section_1_link_alt_14'] : '';
                $section_1_link_conteudo_14 = (isset($_POST['section_1_link_conteudo_14']) && !empty($_POST['section_1_link_conteudo_14'])) ? $_POST['section_1_link_conteudo_14'] : '';
                $section_1_conteudo_15 = (isset($_POST['section_1_conteudo_15']) && !empty($_POST['section_1_conteudo_15'])) ? $_POST['section_1_conteudo_15'] : '';
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
                $section_4_image_alt_59 = (isset($_POST['section_4_image_alt_59']) && !empty($_POST['section_4_image_alt_59'])) ? $_POST['section_4_image_alt_59'] : '';
                $section_4_conteudo_60 = (isset($_POST['section_4_conteudo_60']) && !empty($_POST['section_4_conteudo_60'])) ? $_POST['section_4_conteudo_60'] : '';
                $section_4_conteudo_61 = (isset($_POST['section_4_conteudo_61']) && !empty($_POST['section_4_conteudo_61'])) ? $_POST['section_4_conteudo_61'] : '';
                $section_4_link_62 = (isset($_POST['section_4_link_62']) && !empty($_POST['section_4_link_62'])) ? $_POST['section_4_link_62'] : '';
                $section_4_link_alt_62 = (isset($_POST['section_4_link_alt_62']) && !empty($_POST['section_4_link_alt_62'])) ? $_POST['section_4_link_alt_62'] : '';
                $section_4_link_conteudo_62 = (isset($_POST['section_4_link_conteudo_62']) && !empty($_POST['section_4_link_conteudo_62'])) ? $_POST['section_4_link_conteudo_62'] : '';
                $section_4_conteudo_63 = (isset($_POST['section_4_conteudo_63']) && !empty($_POST['section_4_conteudo_63'])) ? $_POST['section_4_conteudo_63'] : '';
                $section_4_link_64 = (isset($_POST['section_4_link_64']) && !empty($_POST['section_4_link_64'])) ? $_POST['section_4_link_64'] : '';
                $section_4_link_alt_64 = (isset($_POST['section_4_link_alt_64']) && !empty($_POST['section_4_link_alt_64'])) ? $_POST['section_4_link_alt_64'] : '';
                $section_4_link_conteudo_64 = (isset($_POST['section_4_link_conteudo_64']) && !empty($_POST['section_4_link_conteudo_64'])) ? $_POST['section_4_link_conteudo_64'] : '';
                $section_4_conteudo_65 = (isset($_POST['section_4_conteudo_65']) && !empty($_POST['section_4_conteudo_65'])) ? $_POST['section_4_conteudo_65'] : '';
                $section_4_image_alt_66 = (isset($_POST['section_4_image_alt_66']) && !empty($_POST['section_4_image_alt_66'])) ? $_POST['section_4_image_alt_66'] : '';
                $section_4_conteudo_67 = (isset($_POST['section_4_conteudo_67']) && !empty($_POST['section_4_conteudo_67'])) ? $_POST['section_4_conteudo_67'] : '';
                $section_4_conteudo_68 = (isset($_POST['section_4_conteudo_68']) && !empty($_POST['section_4_conteudo_68'])) ? $_POST['section_4_conteudo_68'] : '';
                $section_4_link_69 = (isset($_POST['section_4_link_69']) && !empty($_POST['section_4_link_69'])) ? $_POST['section_4_link_69'] : '';
                $section_4_link_alt_69 = (isset($_POST['section_4_link_alt_69']) && !empty($_POST['section_4_link_alt_69'])) ? $_POST['section_4_link_alt_69'] : '';
                $section_4_link_conteudo_69 = (isset($_POST['section_4_link_conteudo_69']) && !empty($_POST['section_4_link_conteudo_69'])) ? $_POST['section_4_link_conteudo_69'] : '';
                $section_4_conteudo_70 = (isset($_POST['section_4_conteudo_70']) && !empty($_POST['section_4_conteudo_70'])) ? $_POST['section_4_conteudo_70'] : '';
                $section_4_link_71 = (isset($_POST['section_4_link_71']) && !empty($_POST['section_4_link_71'])) ? $_POST['section_4_link_71'] : '';
                $section_4_link_alt_71 = (isset($_POST['section_4_link_alt_71']) && !empty($_POST['section_4_link_alt_71'])) ? $_POST['section_4_link_alt_71'] : '';
                $section_4_link_conteudo_71 = (isset($_POST['section_4_link_conteudo_71']) && !empty($_POST['section_4_link_conteudo_71'])) ? $_POST['section_4_link_conteudo_71'] : '';
                $section_4_conteudo_72 = (isset($_POST['section_4_conteudo_72']) && !empty($_POST['section_4_conteudo_72'])) ? $_POST['section_4_conteudo_72'] : '';
                $section_5_conteudo_73 = (isset($_POST['section_5_conteudo_73']) && !empty($_POST['section_5_conteudo_73'])) ? $_POST['section_5_conteudo_73'] : '';
                $section_5_link_74 = (isset($_POST['section_5_link_74']) && !empty($_POST['section_5_link_74'])) ? $_POST['section_5_link_74'] : '';
                $section_5_link_alt_74 = (isset($_POST['section_5_link_alt_74']) && !empty($_POST['section_5_link_alt_74'])) ? $_POST['section_5_link_alt_74'] : '';
                $section_5_link_conteudo_74 = (isset($_POST['section_5_link_conteudo_74']) && !empty($_POST['section_5_link_conteudo_74'])) ? $_POST['section_5_link_conteudo_74'] : '';
                $section_5_conteudo_75 = (isset($_POST['section_5_conteudo_75']) && !empty($_POST['section_5_conteudo_75'])) ? $_POST['section_5_conteudo_75'] : '';
                $section_5_conteudo_76 = (isset($_POST['section_5_conteudo_76']) && !empty($_POST['section_5_conteudo_76'])) ? $_POST['section_5_conteudo_76'] : '';
                $section_5_conteudo_77 = (isset($_POST['section_5_conteudo_77']) && !empty($_POST['section_5_conteudo_77'])) ? $_POST['section_5_conteudo_77'] : '';
                $section_5_conteudo_78 = (isset($_POST['section_5_conteudo_78']) && !empty($_POST['section_5_conteudo_78'])) ? $_POST['section_5_conteudo_78'] : '';
                $section_5_conteudo_79 = (isset($_POST['section_5_conteudo_79']) && !empty($_POST['section_5_conteudo_79'])) ? $_POST['section_5_conteudo_79'] : '';
                $section_5_conteudo_80 = (isset($_POST['section_5_conteudo_80']) && !empty($_POST['section_5_conteudo_80'])) ? $_POST['section_5_conteudo_80'] : '';
                $section_5_conteudo_81 = (isset($_POST['section_5_conteudo_81']) && !empty($_POST['section_5_conteudo_81'])) ? $_POST['section_5_conteudo_81'] : '';
                $section_5_conteudo_82 = (isset($_POST['section_5_conteudo_82']) && !empty($_POST['section_5_conteudo_82'])) ? $_POST['section_5_conteudo_82'] : '';
                $section_5_conteudo_83 = (isset($_POST['section_5_conteudo_83']) && !empty($_POST['section_5_conteudo_83'])) ? $_POST['section_5_conteudo_83'] : '';
                $section_5_conteudo_84 = (isset($_POST['section_5_conteudo_84']) && !empty($_POST['section_5_conteudo_84'])) ? $_POST['section_5_conteudo_84'] : '';
                $section_5_conteudo_85 = (isset($_POST['section_5_conteudo_85']) && !empty($_POST['section_5_conteudo_85'])) ? $_POST['section_5_conteudo_85'] : '';
                $section_5_conteudo_86 = (isset($_POST['section_5_conteudo_86']) && !empty($_POST['section_5_conteudo_86'])) ? $_POST['section_5_conteudo_86'] : '';
                $section_6_conteudo_87 = (isset($_POST['section_6_conteudo_87']) && !empty($_POST['section_6_conteudo_87'])) ? $_POST['section_6_conteudo_87'] : '';
                $section_6_conteudo_88 = (isset($_POST['section_6_conteudo_88']) && !empty($_POST['section_6_conteudo_88'])) ? $_POST['section_6_conteudo_88'] : '';
                $section_6_conteudo_89 = (isset($_POST['section_6_conteudo_89']) && !empty($_POST['section_6_conteudo_89'])) ? $_POST['section_6_conteudo_89'] : '';
                $section_6_conteudo_90 = (isset($_POST['section_6_conteudo_90']) && !empty($_POST['section_6_conteudo_90'])) ? $_POST['section_6_conteudo_90'] : '';
                $section_6_conteudo_91 = (isset($_POST['section_6_conteudo_91']) && !empty($_POST['section_6_conteudo_91'])) ? $_POST['section_6_conteudo_91'] : '';
                $section_6_link_92 = (isset($_POST['section_6_link_92']) && !empty($_POST['section_6_link_92'])) ? $_POST['section_6_link_92'] : '';
                $section_6_link_alt_92 = (isset($_POST['section_6_link_alt_92']) && !empty($_POST['section_6_link_alt_92'])) ? $_POST['section_6_link_alt_92'] : '';
                $section_6_link_conteudo_92 = (isset($_POST['section_6_link_conteudo_92']) && !empty($_POST['section_6_link_conteudo_92'])) ? $_POST['section_6_link_conteudo_92'] : '';
                $section_6_conteudo_93 = (isset($_POST['section_6_conteudo_93']) && !empty($_POST['section_6_conteudo_93'])) ? $_POST['section_6_conteudo_93'] : '';
                $section_6_conteudo_94 = (isset($_POST['section_6_conteudo_94']) && !empty($_POST['section_6_conteudo_94'])) ? $_POST['section_6_conteudo_94'] : '';
                $section_6_conteudo_95 = (isset($_POST['section_6_conteudo_95']) && !empty($_POST['section_6_conteudo_95'])) ? $_POST['section_6_conteudo_95'] : '';
                $section_6_conteudo_96 = (isset($_POST['section_6_conteudo_96']) && !empty($_POST['section_6_conteudo_96'])) ? $_POST['section_6_conteudo_96'] : '';
                $section_6_link_97 = (isset($_POST['section_6_link_97']) && !empty($_POST['section_6_link_97'])) ? $_POST['section_6_link_97'] : '';
                $section_6_link_alt_97 = (isset($_POST['section_6_link_alt_97']) && !empty($_POST['section_6_link_alt_97'])) ? $_POST['section_6_link_alt_97'] : '';
                $section_6_link_conteudo_97 = (isset($_POST['section_6_link_conteudo_97']) && !empty($_POST['section_6_link_conteudo_97'])) ? $_POST['section_6_link_conteudo_97'] : '';
                $section_6_conteudo_98 = (isset($_POST['section_6_conteudo_98']) && !empty($_POST['section_6_conteudo_98'])) ? $_POST['section_6_conteudo_98'] : '';
                $section_6_conteudo_99 = (isset($_POST['section_6_conteudo_99']) && !empty($_POST['section_6_conteudo_99'])) ? $_POST['section_6_conteudo_99'] : '';
                $section_6_conteudo_100 = (isset($_POST['section_6_conteudo_100']) && !empty($_POST['section_6_conteudo_100'])) ? $_POST['section_6_conteudo_100'] : '';
                $section_6_conteudo_101 = (isset($_POST['section_6_conteudo_101']) && !empty($_POST['section_6_conteudo_101'])) ? $_POST['section_6_conteudo_101'] : '';
                $section_6_link_102 = (isset($_POST['section_6_link_102']) && !empty($_POST['section_6_link_102'])) ? $_POST['section_6_link_102'] : '';
                $section_6_link_alt_102 = (isset($_POST['section_6_link_alt_102']) && !empty($_POST['section_6_link_alt_102'])) ? $_POST['section_6_link_alt_102'] : '';
                $section_6_link_conteudo_102 = (isset($_POST['section_6_link_conteudo_102']) && !empty($_POST['section_6_link_conteudo_102'])) ? $_POST['section_6_link_conteudo_102'] : '';
                $section_6_conteudo_103 = (isset($_POST['section_6_conteudo_103']) && !empty($_POST['section_6_conteudo_103'])) ? $_POST['section_6_conteudo_103'] : '';
                $section_6_conteudo_104 = (isset($_POST['section_6_conteudo_104']) && !empty($_POST['section_6_conteudo_104'])) ? $_POST['section_6_conteudo_104'] : '';
                $section_6_conteudo_105 = (isset($_POST['section_6_conteudo_105']) && !empty($_POST['section_6_conteudo_105'])) ? $_POST['section_6_conteudo_105'] : '';
                $section_6_conteudo_106 = (isset($_POST['section_6_conteudo_106']) && !empty($_POST['section_6_conteudo_106'])) ? $_POST['section_6_conteudo_106'] : '';
                $section_6_link_107 = (isset($_POST['section_6_link_107']) && !empty($_POST['section_6_link_107'])) ? $_POST['section_6_link_107'] : '';
                $section_6_link_alt_107 = (isset($_POST['section_6_link_alt_107']) && !empty($_POST['section_6_link_alt_107'])) ? $_POST['section_6_link_alt_107'] : '';
                $section_6_link_conteudo_107 = (isset($_POST['section_6_link_conteudo_107']) && !empty($_POST['section_6_link_conteudo_107'])) ? $_POST['section_6_link_conteudo_107'] : '';
                $section_6_conteudo_108 = (isset($_POST['section_6_conteudo_108']) && !empty($_POST['section_6_conteudo_108'])) ? $_POST['section_6_conteudo_108'] : '';
                $section_6_conteudo_109 = (isset($_POST['section_6_conteudo_109']) && !empty($_POST['section_6_conteudo_109'])) ? $_POST['section_6_conteudo_109'] : '';
                $section_7_link_110 = (isset($_POST['section_7_link_110']) && !empty($_POST['section_7_link_110'])) ? $_POST['section_7_link_110'] : '';
                $section_7_link_alt_110 = (isset($_POST['section_7_link_alt_110']) && !empty($_POST['section_7_link_alt_110'])) ? $_POST['section_7_link_alt_110'] : '';
                $section_7_image_alt_111 = (isset($_POST['section_7_image_alt_111']) && !empty($_POST['section_7_image_alt_111'])) ? $_POST['section_7_image_alt_111'] : '';
                $section_7_image_alt_112 = (isset($_POST['section_7_image_alt_112']) && !empty($_POST['section_7_image_alt_112'])) ? $_POST['section_7_image_alt_112'] : '';
                $section_7_image_alt_113 = (isset($_POST['section_7_image_alt_113']) && !empty($_POST['section_7_image_alt_113'])) ? $_POST['section_7_image_alt_113'] : '';
                $section_7_conteudo_114 = (isset($_POST['section_7_conteudo_114']) && !empty($_POST['section_7_conteudo_114'])) ? $_POST['section_7_conteudo_114'] : '';
                $section_7_conteudo_115 = (isset($_POST['section_7_conteudo_115']) && !empty($_POST['section_7_conteudo_115'])) ? $_POST['section_7_conteudo_115'] : '';
                $section_7_conteudo_116 = (isset($_POST['section_7_conteudo_116']) && !empty($_POST['section_7_conteudo_116'])) ? $_POST['section_7_conteudo_116'] : '';
                $section_7_conteudo_117 = (isset($_POST['section_7_conteudo_117']) && !empty($_POST['section_7_conteudo_117'])) ? $_POST['section_7_conteudo_117'] : '';
                $section_7_link_118 = (isset($_POST['section_7_link_118']) && !empty($_POST['section_7_link_118'])) ? $_POST['section_7_link_118'] : '';
                $section_7_link_alt_118 = (isset($_POST['section_7_link_alt_118']) && !empty($_POST['section_7_link_alt_118'])) ? $_POST['section_7_link_alt_118'] : '';
                $section_7_link_conteudo_118 = (isset($_POST['section_7_link_conteudo_118']) && !empty($_POST['section_7_link_conteudo_118'])) ? $_POST['section_7_link_conteudo_118'] : '';
                $section_7_conteudo_119 = (isset($_POST['section_7_conteudo_119']) && !empty($_POST['section_7_conteudo_119'])) ? $_POST['section_7_conteudo_119'] : '';
                $section_7_link_120 = (isset($_POST['section_7_link_120']) && !empty($_POST['section_7_link_120'])) ? $_POST['section_7_link_120'] : '';
                $section_7_link_alt_120 = (isset($_POST['section_7_link_alt_120']) && !empty($_POST['section_7_link_alt_120'])) ? $_POST['section_7_link_alt_120'] : '';
                $section_7_link_conteudo_120 = (isset($_POST['section_7_link_conteudo_120']) && !empty($_POST['section_7_link_conteudo_120'])) ? $_POST['section_7_link_conteudo_120'] : '';
                $section_7_conteudo_121 = (isset($_POST['section_7_conteudo_121']) && !empty($_POST['section_7_conteudo_121'])) ? $_POST['section_7_conteudo_121'] : '';
                $section_8_conteudo_122 = (isset($_POST['section_8_conteudo_122']) && !empty($_POST['section_8_conteudo_122'])) ? $_POST['section_8_conteudo_122'] : '';
                $section_8_conteudo_123 = (isset($_POST['section_8_conteudo_123']) && !empty($_POST['section_8_conteudo_123'])) ? $_POST['section_8_conteudo_123'] : '';
                $section_8_button124 = (isset($_POST['section_8_button124']) && !empty($_POST['section_8_button124'])) ? $_POST['section_8_button124'] : '';
                $section_8_conteudo_125 = (isset($_POST['section_8_conteudo_125']) && !empty($_POST['section_8_conteudo_125'])) ? $_POST['section_8_conteudo_125'] : '';
                $section_8_button126 = (isset($_POST['section_8_button126']) && !empty($_POST['section_8_button126'])) ? $_POST['section_8_button126'] : '';
                $section_8_conteudo_127 = (isset($_POST['section_8_conteudo_127']) && !empty($_POST['section_8_conteudo_127'])) ? $_POST['section_8_conteudo_127'] : '';
                $section_8_button128 = (isset($_POST['section_8_button128']) && !empty($_POST['section_8_button128'])) ? $_POST['section_8_button128'] : '';
                $section_8_conteudo_129 = (isset($_POST['section_8_conteudo_129']) && !empty($_POST['section_8_conteudo_129'])) ? $_POST['section_8_conteudo_129'] : '';
                $section_8_button130 = (isset($_POST['section_8_button130']) && !empty($_POST['section_8_button130'])) ? $_POST['section_8_button130'] : '';
                $section_8_conteudo_131 = (isset($_POST['section_8_conteudo_131']) && !empty($_POST['section_8_conteudo_131'])) ? $_POST['section_8_conteudo_131'] : '';
                $section_8_button132 = (isset($_POST['section_8_button132']) && !empty($_POST['section_8_button132'])) ? $_POST['section_8_button132'] : '';
                $section_9_image_alt_133 = (isset($_POST['section_9_image_alt_133']) && !empty($_POST['section_9_image_alt_133'])) ? $_POST['section_9_image_alt_133'] : '';
                $section_9_image_alt_134 = (isset($_POST['section_9_image_alt_134']) && !empty($_POST['section_9_image_alt_134'])) ? $_POST['section_9_image_alt_134'] : '';
                $section_9_conteudo_135 = (isset($_POST['section_9_conteudo_135']) && !empty($_POST['section_9_conteudo_135'])) ? $_POST['section_9_conteudo_135'] : '';
                $section_9_conteudo_136 = (isset($_POST['section_9_conteudo_136']) && !empty($_POST['section_9_conteudo_136'])) ? $_POST['section_9_conteudo_136'] : '';
                $section_9_conteudo_137 = (isset($_POST['section_9_conteudo_137']) && !empty($_POST['section_9_conteudo_137'])) ? $_POST['section_9_conteudo_137'] : '';
                $section_9_image_alt_138 = (isset($_POST['section_9_image_alt_138']) && !empty($_POST['section_9_image_alt_138'])) ? $_POST['section_9_image_alt_138'] : '';
                $section_9_image_alt_139 = (isset($_POST['section_9_image_alt_139']) && !empty($_POST['section_9_image_alt_139'])) ? $_POST['section_9_image_alt_139'] : '';
                $section_9_conteudo_140 = (isset($_POST['section_9_conteudo_140']) && !empty($_POST['section_9_conteudo_140'])) ? $_POST['section_9_conteudo_140'] : '';
                $section_9_conteudo_141 = (isset($_POST['section_9_conteudo_141']) && !empty($_POST['section_9_conteudo_141'])) ? $_POST['section_9_conteudo_141'] : '';
                $section_9_conteudo_142 = (isset($_POST['section_9_conteudo_142']) && !empty($_POST['section_9_conteudo_142'])) ? $_POST['section_9_conteudo_142'] : '';
                $section_9_image_alt_143 = (isset($_POST['section_9_image_alt_143']) && !empty($_POST['section_9_image_alt_143'])) ? $_POST['section_9_image_alt_143'] : '';
                $section_9_image_alt_144 = (isset($_POST['section_9_image_alt_144']) && !empty($_POST['section_9_image_alt_144'])) ? $_POST['section_9_image_alt_144'] : '';
                $section_9_conteudo_145 = (isset($_POST['section_9_conteudo_145']) && !empty($_POST['section_9_conteudo_145'])) ? $_POST['section_9_conteudo_145'] : '';
                $section_9_conteudo_146 = (isset($_POST['section_9_conteudo_146']) && !empty($_POST['section_9_conteudo_146'])) ? $_POST['section_9_conteudo_146'] : '';
                $section_9_conteudo_147 = (isset($_POST['section_9_conteudo_147']) && !empty($_POST['section_9_conteudo_147'])) ? $_POST['section_9_conteudo_147'] : '';
                $section_9_image_alt_148 = (isset($_POST['section_9_image_alt_148']) && !empty($_POST['section_9_image_alt_148'])) ? $_POST['section_9_image_alt_148'] : '';
                $section_9_image_alt_149 = (isset($_POST['section_9_image_alt_149']) && !empty($_POST['section_9_image_alt_149'])) ? $_POST['section_9_image_alt_149'] : '';
                $section_9_conteudo_150 = (isset($_POST['section_9_conteudo_150']) && !empty($_POST['section_9_conteudo_150'])) ? $_POST['section_9_conteudo_150'] : '';
                $section_9_conteudo_151 = (isset($_POST['section_9_conteudo_151']) && !empty($_POST['section_9_conteudo_151'])) ? $_POST['section_9_conteudo_151'] : '';
                $section_9_conteudo_152 = (isset($_POST['section_9_conteudo_152']) && !empty($_POST['section_9_conteudo_152'])) ? $_POST['section_9_conteudo_152'] : '';
                $section_9_image_alt_153 = (isset($_POST['section_9_image_alt_153']) && !empty($_POST['section_9_image_alt_153'])) ? $_POST['section_9_image_alt_153'] : '';
                $section_9_image_alt_154 = (isset($_POST['section_9_image_alt_154']) && !empty($_POST['section_9_image_alt_154'])) ? $_POST['section_9_image_alt_154'] : '';
                $section_9_conteudo_155 = (isset($_POST['section_9_conteudo_155']) && !empty($_POST['section_9_conteudo_155'])) ? $_POST['section_9_conteudo_155'] : '';
                $section_9_conteudo_156 = (isset($_POST['section_9_conteudo_156']) && !empty($_POST['section_9_conteudo_156'])) ? $_POST['section_9_conteudo_156'] : '';
                $section_9_conteudo_157 = (isset($_POST['section_9_conteudo_157']) && !empty($_POST['section_9_conteudo_157'])) ? $_POST['section_9_conteudo_157'] : '';
                $section_10_image_alt_158 = (isset($_POST['section_10_image_alt_158']) && !empty($_POST['section_10_image_alt_158'])) ? $_POST['section_10_image_alt_158'] : '';
                $section_10_image_alt_159 = (isset($_POST['section_10_image_alt_159']) && !empty($_POST['section_10_image_alt_159'])) ? $_POST['section_10_image_alt_159'] : '';
                $section_10_image_alt_160 = (isset($_POST['section_10_image_alt_160']) && !empty($_POST['section_10_image_alt_160'])) ? $_POST['section_10_image_alt_160'] : '';
                $section_10_image_alt_161 = (isset($_POST['section_10_image_alt_161']) && !empty($_POST['section_10_image_alt_161'])) ? $_POST['section_10_image_alt_161'] : '';
                $section_10_image_alt_162 = (isset($_POST['section_10_image_alt_162']) && !empty($_POST['section_10_image_alt_162'])) ? $_POST['section_10_image_alt_162'] : '';
                $section_10_image_alt_163 = (isset($_POST['section_10_image_alt_163']) && !empty($_POST['section_10_image_alt_163'])) ? $_POST['section_10_image_alt_163'] : '';
                $section_11_conteudo_164 = (isset($_POST['section_11_conteudo_164']) && !empty($_POST['section_11_conteudo_164'])) ? $_POST['section_11_conteudo_164'] : '';
                $section_11_conteudo_165 = (isset($_POST['section_11_conteudo_165']) && !empty($_POST['section_11_conteudo_165'])) ? $_POST['section_11_conteudo_165'] : '';
                $section_11_conteudo_166 = (isset($_POST['section_11_conteudo_166']) && !empty($_POST['section_11_conteudo_166'])) ? $_POST['section_11_conteudo_166'] : '';
                $section_11_image_alt_167 = (isset($_POST['section_11_image_alt_167']) && !empty($_POST['section_11_image_alt_167'])) ? $_POST['section_11_image_alt_167'] : '';
                $section_11_button168 = (isset($_POST['section_11_button168']) && !empty($_POST['section_11_button168'])) ? $_POST['section_11_button168'] : '';
                $section_11_link_169 = (isset($_POST['section_11_link_169']) && !empty($_POST['section_11_link_169'])) ? $_POST['section_11_link_169'] : '';
                $section_11_link_alt_169 = (isset($_POST['section_11_link_alt_169']) && !empty($_POST['section_11_link_alt_169'])) ? $_POST['section_11_link_alt_169'] : '';
                $section_11_link_170 = (isset($_POST['section_11_link_170']) && !empty($_POST['section_11_link_170'])) ? $_POST['section_11_link_170'] : '';
                $section_11_link_alt_170 = (isset($_POST['section_11_link_alt_170']) && !empty($_POST['section_11_link_alt_170'])) ? $_POST['section_11_link_alt_170'] : '';
                $section_11_link_171 = (isset($_POST['section_11_link_171']) && !empty($_POST['section_11_link_171'])) ? $_POST['section_11_link_171'] : '';
                $section_11_link_alt_171 = (isset($_POST['section_11_link_alt_171']) && !empty($_POST['section_11_link_alt_171'])) ? $_POST['section_11_link_alt_171'] : '';
                $section_11_image_alt_172 = (isset($_POST['section_11_image_alt_172']) && !empty($_POST['section_11_image_alt_172'])) ? $_POST['section_11_image_alt_172'] : '';
                $section_11_image_alt_173 = (isset($_POST['section_11_image_alt_173']) && !empty($_POST['section_11_image_alt_173'])) ? $_POST['section_11_image_alt_173'] : '';
                $section_11_conteudo_174 = (isset($_POST['section_11_conteudo_174']) && !empty($_POST['section_11_conteudo_174'])) ? $_POST['section_11_conteudo_174'] : '';
                $section_11_link_175 = (isset($_POST['section_11_link_175']) && !empty($_POST['section_11_link_175'])) ? $_POST['section_11_link_175'] : '';
                $section_11_link_alt_175 = (isset($_POST['section_11_link_alt_175']) && !empty($_POST['section_11_link_alt_175'])) ? $_POST['section_11_link_alt_175'] : '';
                $section_11_link_conteudo_175 = (isset($_POST['section_11_link_conteudo_175']) && !empty($_POST['section_11_link_conteudo_175'])) ? $_POST['section_11_link_conteudo_175'] : '';
                $section_11_conteudo_176 = (isset($_POST['section_11_conteudo_176']) && !empty($_POST['section_11_conteudo_176'])) ? $_POST['section_11_conteudo_176'] : '';
                $section_11_image_alt_177 = (isset($_POST['section_11_image_alt_177']) && !empty($_POST['section_11_image_alt_177'])) ? $_POST['section_11_image_alt_177'] : '';
                $section_11_button178 = (isset($_POST['section_11_button178']) && !empty($_POST['section_11_button178'])) ? $_POST['section_11_button178'] : '';
                $section_11_link_179 = (isset($_POST['section_11_link_179']) && !empty($_POST['section_11_link_179'])) ? $_POST['section_11_link_179'] : '';
                $section_11_link_alt_179 = (isset($_POST['section_11_link_alt_179']) && !empty($_POST['section_11_link_alt_179'])) ? $_POST['section_11_link_alt_179'] : '';
                $section_11_link_180 = (isset($_POST['section_11_link_180']) && !empty($_POST['section_11_link_180'])) ? $_POST['section_11_link_180'] : '';
                $section_11_link_alt_180 = (isset($_POST['section_11_link_alt_180']) && !empty($_POST['section_11_link_alt_180'])) ? $_POST['section_11_link_alt_180'] : '';
                $section_11_link_181 = (isset($_POST['section_11_link_181']) && !empty($_POST['section_11_link_181'])) ? $_POST['section_11_link_181'] : '';
                $section_11_link_alt_181 = (isset($_POST['section_11_link_alt_181']) && !empty($_POST['section_11_link_alt_181'])) ? $_POST['section_11_link_alt_181'] : '';
                $section_11_image_alt_182 = (isset($_POST['section_11_image_alt_182']) && !empty($_POST['section_11_image_alt_182'])) ? $_POST['section_11_image_alt_182'] : '';
                $section_11_image_alt_183 = (isset($_POST['section_11_image_alt_183']) && !empty($_POST['section_11_image_alt_183'])) ? $_POST['section_11_image_alt_183'] : '';
                $section_11_conteudo_184 = (isset($_POST['section_11_conteudo_184']) && !empty($_POST['section_11_conteudo_184'])) ? $_POST['section_11_conteudo_184'] : '';
                $section_11_link_185 = (isset($_POST['section_11_link_185']) && !empty($_POST['section_11_link_185'])) ? $_POST['section_11_link_185'] : '';
                $section_11_link_alt_185 = (isset($_POST['section_11_link_alt_185']) && !empty($_POST['section_11_link_alt_185'])) ? $_POST['section_11_link_alt_185'] : '';
                $section_11_link_conteudo_185 = (isset($_POST['section_11_link_conteudo_185']) && !empty($_POST['section_11_link_conteudo_185'])) ? $_POST['section_11_link_conteudo_185'] : '';
                $section_11_conteudo_186 = (isset($_POST['section_11_conteudo_186']) && !empty($_POST['section_11_conteudo_186'])) ? $_POST['section_11_conteudo_186'] : '';
                $section_11_image_alt_187 = (isset($_POST['section_11_image_alt_187']) && !empty($_POST['section_11_image_alt_187'])) ? $_POST['section_11_image_alt_187'] : '';
                $section_11_button188 = (isset($_POST['section_11_button188']) && !empty($_POST['section_11_button188'])) ? $_POST['section_11_button188'] : '';
                $section_11_link_189 = (isset($_POST['section_11_link_189']) && !empty($_POST['section_11_link_189'])) ? $_POST['section_11_link_189'] : '';
                $section_11_link_alt_189 = (isset($_POST['section_11_link_alt_189']) && !empty($_POST['section_11_link_alt_189'])) ? $_POST['section_11_link_alt_189'] : '';
                $section_11_link_190 = (isset($_POST['section_11_link_190']) && !empty($_POST['section_11_link_190'])) ? $_POST['section_11_link_190'] : '';
                $section_11_link_alt_190 = (isset($_POST['section_11_link_alt_190']) && !empty($_POST['section_11_link_alt_190'])) ? $_POST['section_11_link_alt_190'] : '';
                $section_11_link_191 = (isset($_POST['section_11_link_191']) && !empty($_POST['section_11_link_191'])) ? $_POST['section_11_link_191'] : '';
                $section_11_link_alt_191 = (isset($_POST['section_11_link_alt_191']) && !empty($_POST['section_11_link_alt_191'])) ? $_POST['section_11_link_alt_191'] : '';
                $section_11_image_alt_192 = (isset($_POST['section_11_image_alt_192']) && !empty($_POST['section_11_image_alt_192'])) ? $_POST['section_11_image_alt_192'] : '';
                $section_11_image_alt_193 = (isset($_POST['section_11_image_alt_193']) && !empty($_POST['section_11_image_alt_193'])) ? $_POST['section_11_image_alt_193'] : '';
                $section_11_conteudo_194 = (isset($_POST['section_11_conteudo_194']) && !empty($_POST['section_11_conteudo_194'])) ? $_POST['section_11_conteudo_194'] : '';
                $section_11_link_195 = (isset($_POST['section_11_link_195']) && !empty($_POST['section_11_link_195'])) ? $_POST['section_11_link_195'] : '';
                $section_11_link_alt_195 = (isset($_POST['section_11_link_alt_195']) && !empty($_POST['section_11_link_alt_195'])) ? $_POST['section_11_link_alt_195'] : '';
                $section_11_link_conteudo_195 = (isset($_POST['section_11_link_conteudo_195']) && !empty($_POST['section_11_link_conteudo_195'])) ? $_POST['section_11_link_conteudo_195'] : '';
                $section_11_conteudo_196 = (isset($_POST['section_11_conteudo_196']) && !empty($_POST['section_11_conteudo_196'])) ? $_POST['section_11_conteudo_196'] : '';
                $section_12_image_alt_197 = (isset($_POST['section_12_image_alt_197']) && !empty($_POST['section_12_image_alt_197'])) ? $_POST['section_12_image_alt_197'] : '';
                $section_12_image_alt_198 = (isset($_POST['section_12_image_alt_198']) && !empty($_POST['section_12_image_alt_198'])) ? $_POST['section_12_image_alt_198'] : '';
                $section_12_conteudo_199 = (isset($_POST['section_12_conteudo_199']) && !empty($_POST['section_12_conteudo_199'])) ? $_POST['section_12_conteudo_199'] : '';
                $section_12_link_200 = (isset($_POST['section_12_link_200']) && !empty($_POST['section_12_link_200'])) ? $_POST['section_12_link_200'] : '';
                $section_12_link_alt_200 = (isset($_POST['section_12_link_alt_200']) && !empty($_POST['section_12_link_alt_200'])) ? $_POST['section_12_link_alt_200'] : '';
                $section_12_link_conteudo_200 = (isset($_POST['section_12_link_conteudo_200']) && !empty($_POST['section_12_link_conteudo_200'])) ? $_POST['section_12_link_conteudo_200'] : '';
                $section_12_conteudo_201 = (isset($_POST['section_12_conteudo_201']) && !empty($_POST['section_12_conteudo_201'])) ? $_POST['section_12_conteudo_201'] : '';
                $section_12_conteudo_202 = (isset($_POST['section_12_conteudo_202']) && !empty($_POST['section_12_conteudo_202'])) ? $_POST['section_12_conteudo_202'] : '';
                $section_12_image_alt_203 = (isset($_POST['section_12_image_alt_203']) && !empty($_POST['section_12_image_alt_203'])) ? $_POST['section_12_image_alt_203'] : '';
                $section_13_conteudo_204 = (isset($_POST['section_13_conteudo_204']) && !empty($_POST['section_13_conteudo_204'])) ? $_POST['section_13_conteudo_204'] : '';
                $section_13_conteudo_205 = (isset($_POST['section_13_conteudo_205']) && !empty($_POST['section_13_conteudo_205'])) ? $_POST['section_13_conteudo_205'] : '';
                $section_13_conteudo_206 = (isset($_POST['section_13_conteudo_206']) && !empty($_POST['section_13_conteudo_206'])) ? $_POST['section_13_conteudo_206'] : '';
                $section_13_image_alt_207 = (isset($_POST['section_13_image_alt_207']) && !empty($_POST['section_13_image_alt_207'])) ? $_POST['section_13_image_alt_207'] : '';
                $section_13_link_208 = (isset($_POST['section_13_link_208']) && !empty($_POST['section_13_link_208'])) ? $_POST['section_13_link_208'] : '';
                $section_13_link_alt_208 = (isset($_POST['section_13_link_alt_208']) && !empty($_POST['section_13_link_alt_208'])) ? $_POST['section_13_link_alt_208'] : '';
                $section_13_conteudo_209 = (isset($_POST['section_13_conteudo_209']) && !empty($_POST['section_13_conteudo_209'])) ? $_POST['section_13_conteudo_209'] : '';
                $section_13_conteudo_210 = (isset($_POST['section_13_conteudo_210']) && !empty($_POST['section_13_conteudo_210'])) ? $_POST['section_13_conteudo_210'] : '';
                $section_13_conteudo_211 = (isset($_POST['section_13_conteudo_211']) && !empty($_POST['section_13_conteudo_211'])) ? $_POST['section_13_conteudo_211'] : '';
                $section_13_link_212 = (isset($_POST['section_13_link_212']) && !empty($_POST['section_13_link_212'])) ? $_POST['section_13_link_212'] : '';
                $section_13_link_alt_212 = (isset($_POST['section_13_link_alt_212']) && !empty($_POST['section_13_link_alt_212'])) ? $_POST['section_13_link_alt_212'] : '';
                $section_13_link_conteudo_212 = (isset($_POST['section_13_link_conteudo_212']) && !empty($_POST['section_13_link_conteudo_212'])) ? $_POST['section_13_link_conteudo_212'] : '';
                $section_13_image_alt_213 = (isset($_POST['section_13_image_alt_213']) && !empty($_POST['section_13_image_alt_213'])) ? $_POST['section_13_image_alt_213'] : '';
                $section_13_link_214 = (isset($_POST['section_13_link_214']) && !empty($_POST['section_13_link_214'])) ? $_POST['section_13_link_214'] : '';
                $section_13_link_alt_214 = (isset($_POST['section_13_link_alt_214']) && !empty($_POST['section_13_link_alt_214'])) ? $_POST['section_13_link_alt_214'] : '';
                $section_13_conteudo_215 = (isset($_POST['section_13_conteudo_215']) && !empty($_POST['section_13_conteudo_215'])) ? $_POST['section_13_conteudo_215'] : '';
                $section_13_conteudo_216 = (isset($_POST['section_13_conteudo_216']) && !empty($_POST['section_13_conteudo_216'])) ? $_POST['section_13_conteudo_216'] : '';
                $section_13_conteudo_217 = (isset($_POST['section_13_conteudo_217']) && !empty($_POST['section_13_conteudo_217'])) ? $_POST['section_13_conteudo_217'] : '';
                $section_13_link_218 = (isset($_POST['section_13_link_218']) && !empty($_POST['section_13_link_218'])) ? $_POST['section_13_link_218'] : '';
                $section_13_link_alt_218 = (isset($_POST['section_13_link_alt_218']) && !empty($_POST['section_13_link_alt_218'])) ? $_POST['section_13_link_alt_218'] : '';
                $section_13_link_conteudo_218 = (isset($_POST['section_13_link_conteudo_218']) && !empty($_POST['section_13_link_conteudo_218'])) ? $_POST['section_13_link_conteudo_218'] : '';
                $section_13_image_alt_219 = (isset($_POST['section_13_image_alt_219']) && !empty($_POST['section_13_image_alt_219'])) ? $_POST['section_13_image_alt_219'] : '';
                $section_13_link_220 = (isset($_POST['section_13_link_220']) && !empty($_POST['section_13_link_220'])) ? $_POST['section_13_link_220'] : '';
                $section_13_link_alt_220 = (isset($_POST['section_13_link_alt_220']) && !empty($_POST['section_13_link_alt_220'])) ? $_POST['section_13_link_alt_220'] : '';
                $section_13_conteudo_221 = (isset($_POST['section_13_conteudo_221']) && !empty($_POST['section_13_conteudo_221'])) ? $_POST['section_13_conteudo_221'] : '';
                $section_13_conteudo_222 = (isset($_POST['section_13_conteudo_222']) && !empty($_POST['section_13_conteudo_222'])) ? $_POST['section_13_conteudo_222'] : '';
                $section_13_conteudo_223 = (isset($_POST['section_13_conteudo_223']) && !empty($_POST['section_13_conteudo_223'])) ? $_POST['section_13_conteudo_223'] : '';
                $section_13_link_224 = (isset($_POST['section_13_link_224']) && !empty($_POST['section_13_link_224'])) ? $_POST['section_13_link_224'] : '';
                $section_13_link_alt_224 = (isset($_POST['section_13_link_alt_224']) && !empty($_POST['section_13_link_alt_224'])) ? $_POST['section_13_link_alt_224'] : '';
                $section_13_link_conteudo_224 = (isset($_POST['section_13_link_conteudo_224']) && !empty($_POST['section_13_link_conteudo_224'])) ? $_POST['section_13_link_conteudo_224'] : '';
                if (isset($_POST['pagina_individual']) && !empty($_POST['pagina_individual'])) {
                    $pagina_individual = $_POST['pagina_individual'];
                } else {
                    $pagina_individual = gerarTituloSEO('.$section_1_link_1.');
                }
                $maximo = 180000;
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
                if ($_FILES["section_1_img_6"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_1_img_6"]["size"] / 1000;
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
                if ($_FILES["section_4_img_59"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_4_img_59"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_4_img_66"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_4_img_66"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_7_img_111"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_7_img_111"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_7_img_112"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_7_img_112"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_7_img_113"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_7_img_113"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_9_img_133"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_9_img_133"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_9_img_134"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_9_img_134"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_9_img_138"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_9_img_138"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_9_img_139"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_9_img_139"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_9_img_143"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_9_img_143"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_9_img_144"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_9_img_144"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_9_img_148"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_9_img_148"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_9_img_149"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_9_img_149"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_9_img_153"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_9_img_153"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_9_img_154"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_9_img_154"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_10_img_158"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_10_img_158"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_10_img_159"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_10_img_159"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_10_img_160"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_10_img_160"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_10_img_161"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_10_img_161"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_10_img_162"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_10_img_162"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_10_img_163"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_10_img_163"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_11_img_167"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_11_img_167"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_11_img_172"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_11_img_172"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_11_img_173"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_11_img_173"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_11_img_177"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_11_img_177"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_11_img_182"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_11_img_182"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_11_img_183"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_11_img_183"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_11_img_187"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_11_img_187"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_11_img_192"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_11_img_192"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_11_img_193"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_11_img_193"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_12_img_197"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_12_img_197"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_12_img_198"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_12_img_198"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_12_img_203"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_12_img_203"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_13_img_207"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_13_img_207"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_13_img_213"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_13_img_213"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_13_img_219"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_13_img_219"]["size"] / 1000;
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
                    $sql = "INSERT INTO tbl_home (meta_title, meta_keywords, meta_description, section_1_link_1, section_1_link_alt_1, section_1_link_conteudo_1, section_1_button2, section_1_button3, section_1_img_4, section_1_image_alt_4, section_1_img_5, section_1_image_alt_5, section_1_img_6, section_1_image_alt_6, section_1_conteudo_7, section_1_conteudo_8, section_1_link_9, section_1_link_alt_9, section_1_link_conteudo_9, section_1_conteudo_10, section_1_img_11, section_1_image_alt_11, section_1_conteudo_12, section_1_conteudo_13, section_1_link_14, section_1_link_alt_14, section_1_link_conteudo_14, section_1_conteudo_15, section_1_img_16, section_1_image_alt_16, section_1_conteudo_17, section_1_conteudo_18, section_1_link_19, section_1_link_alt_19, section_1_link_conteudo_19, section_1_conteudo_20, section_2_conteudo_21, section_2_conteudo_22, section_2_conteudo_23, section_2_conteudo_24, section_2_conteudo_25, section_2_conteudo_26, section_2_conteudo_27, section_2_conteudo_28, section_3_img_29, section_3_image_alt_29, section_3_conteudo_30, section_3_img_31, section_3_image_alt_31, section_3_img_32, section_3_image_alt_32, section_3_img_33, section_3_image_alt_33, section_3_img_34, section_3_image_alt_34, section_3_conteudo_35, section_3_conteudo_36, section_3_conteudo_37, section_3_conteudo_38, section_3_img_39, section_3_image_alt_39, section_3_conteudo_40, section_3_conteudo_41, section_3_conteudo_42, section_3_conteudo_43, section_3_link_44, section_3_link_alt_44, section_3_link_conteudo_44, section_3_conteudo_45, section_3_img_46, section_3_image_alt_46, section_4_img_47, section_4_image_alt_47, section_4_img_48, section_4_image_alt_48, section_4_conteudo_49, section_4_conteudo_50, section_4_conteudo_51, section_4_img_52, section_4_image_alt_52, section_4_conteudo_53, section_4_conteudo_54, section_4_link_55, section_4_link_alt_55, section_4_link_conteudo_55, section_4_conteudo_56, section_4_link_57, section_4_link_alt_57, section_4_link_conteudo_57, section_4_conteudo_58, section_4_img_59, section_4_image_alt_59, section_4_conteudo_60, section_4_conteudo_61, section_4_link_62, section_4_link_alt_62, section_4_link_conteudo_62, section_4_conteudo_63, section_4_link_64, section_4_link_alt_64, section_4_link_conteudo_64, section_4_conteudo_65, section_4_img_66, section_4_image_alt_66, section_4_conteudo_67, section_4_conteudo_68, section_4_link_69, section_4_link_alt_69, section_4_link_conteudo_69, section_4_conteudo_70, section_4_link_71, section_4_link_alt_71, section_4_link_conteudo_71, section_4_conteudo_72, section_5_conteudo_73, section_5_link_74, section_5_link_alt_74, section_5_link_conteudo_74, section_5_conteudo_75, section_5_conteudo_76, section_5_conteudo_77, section_5_conteudo_78, section_5_conteudo_79, section_5_conteudo_80, section_5_conteudo_81, section_5_conteudo_82, section_5_conteudo_83, section_5_conteudo_84, section_5_conteudo_85, section_5_conteudo_86, section_6_conteudo_87, section_6_conteudo_88, section_6_conteudo_89, section_6_conteudo_90, section_6_conteudo_91, section_6_link_92, section_6_link_alt_92, section_6_link_conteudo_92, section_6_conteudo_93, section_6_conteudo_94, section_6_conteudo_95, section_6_conteudo_96, section_6_link_97, section_6_link_alt_97, section_6_link_conteudo_97, section_6_conteudo_98, section_6_conteudo_99, section_6_conteudo_100, section_6_conteudo_101, section_6_link_102, section_6_link_alt_102, section_6_link_conteudo_102, section_6_conteudo_103, section_6_conteudo_104, section_6_conteudo_105, section_6_conteudo_106, section_6_link_107, section_6_link_alt_107, section_6_link_conteudo_107, section_6_conteudo_108, section_6_conteudo_109, section_7_link_110, section_7_link_alt_110, section_7_img_111, section_7_image_alt_111, section_7_img_112, section_7_image_alt_112, section_7_img_113, section_7_image_alt_113, section_7_conteudo_114, section_7_conteudo_115, section_7_conteudo_116, section_7_conteudo_117, section_7_link_118, section_7_link_alt_118, section_7_link_conteudo_118, section_7_conteudo_119, section_7_link_120, section_7_link_alt_120, section_7_link_conteudo_120, section_7_conteudo_121, section_8_conteudo_122, section_8_conteudo_123, section_8_button124, section_8_conteudo_125, section_8_button126, section_8_conteudo_127, section_8_button128, section_8_conteudo_129, section_8_button130, section_8_conteudo_131, section_8_button132, section_9_img_133, section_9_image_alt_133, section_9_img_134, section_9_image_alt_134, section_9_conteudo_135, section_9_conteudo_136, section_9_conteudo_137, section_9_img_138, section_9_image_alt_138, section_9_img_139, section_9_image_alt_139, section_9_conteudo_140, section_9_conteudo_141, section_9_conteudo_142, section_9_img_143, section_9_image_alt_143, section_9_img_144, section_9_image_alt_144, section_9_conteudo_145, section_9_conteudo_146, section_9_conteudo_147, section_9_img_148, section_9_image_alt_148, section_9_img_149, section_9_image_alt_149, section_9_conteudo_150, section_9_conteudo_151, section_9_conteudo_152, section_9_img_153, section_9_image_alt_153, section_9_img_154, section_9_image_alt_154, section_9_conteudo_155, section_9_conteudo_156, section_9_conteudo_157, section_10_img_158, section_10_image_alt_158, section_10_img_159, section_10_image_alt_159, section_10_img_160, section_10_image_alt_160, section_10_img_161, section_10_image_alt_161, section_10_img_162, section_10_image_alt_162, section_10_img_163, section_10_image_alt_163, section_11_conteudo_164, section_11_conteudo_165, section_11_conteudo_166, section_11_img_167, section_11_image_alt_167, section_11_button168, section_11_link_169, section_11_link_alt_169, section_11_link_170, section_11_link_alt_170, section_11_link_171, section_11_link_alt_171, section_11_img_172, section_11_image_alt_172, section_11_img_173, section_11_image_alt_173, section_11_conteudo_174, section_11_link_175, section_11_link_alt_175, section_11_link_conteudo_175, section_11_conteudo_176, section_11_img_177, section_11_image_alt_177, section_11_button178, section_11_link_179, section_11_link_alt_179, section_11_link_180, section_11_link_alt_180, section_11_link_181, section_11_link_alt_181, section_11_img_182, section_11_image_alt_182, section_11_img_183, section_11_image_alt_183, section_11_conteudo_184, section_11_link_185, section_11_link_alt_185, section_11_link_conteudo_185, section_11_conteudo_186, section_11_img_187, section_11_image_alt_187, section_11_button188, section_11_link_189, section_11_link_alt_189, section_11_link_190, section_11_link_alt_190, section_11_link_191, section_11_link_alt_191, section_11_img_192, section_11_image_alt_192, section_11_img_193, section_11_image_alt_193, section_11_conteudo_194, section_11_link_195, section_11_link_alt_195, section_11_link_conteudo_195, section_11_conteudo_196, section_12_img_197, section_12_image_alt_197, section_12_img_198, section_12_image_alt_198, section_12_conteudo_199, section_12_link_200, section_12_link_alt_200, section_12_link_conteudo_200, section_12_conteudo_201, section_12_conteudo_202, section_12_img_203, section_12_image_alt_203, section_13_conteudo_204, section_13_conteudo_205, section_13_conteudo_206, section_13_img_207, section_13_image_alt_207, section_13_link_208, section_13_link_alt_208, section_13_conteudo_209, section_13_conteudo_210, section_13_conteudo_211, section_13_link_212, section_13_link_alt_212, section_13_link_conteudo_212, section_13_img_213, section_13_image_alt_213, section_13_link_214, section_13_link_alt_214, section_13_conteudo_215, section_13_conteudo_216, section_13_conteudo_217, section_13_link_218, section_13_link_alt_218, section_13_link_conteudo_218, section_13_img_219, section_13_image_alt_219, section_13_link_220, section_13_link_alt_220, section_13_conteudo_221, section_13_conteudo_222, section_13_conteudo_223, section_13_link_224, section_13_link_alt_224, section_13_link_conteudo_224) VALUES ( ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?)";
                    $stm = $this->pdo->prepare($sql);
                    $stm->bindValue(1, $meta_title);
                    $stm->bindValue(2, $meta_keywords);
                    $stm->bindValue(3, $meta_description);
                    $stm->bindValue(4, $section_1_link_1);
                    $stm->bindValue(5, $section_1_link_alt_1);
                    $stm->bindValue(6, $section_1_link_conteudo_1);
                    $stm->bindValue(7, $section_1_button2);
                    $stm->bindValue(8, $section_1_button3);
                    $stm->bindValue(9, upload("section_1_img_4", $pastaArquivos, "N"));
                    $stm->bindValue(10, $section_1_image_alt_4);
                    $stm->bindValue(11, upload("section_1_img_5", $pastaArquivos, "N"));
                    $stm->bindValue(12, $section_1_image_alt_5);
                    $stm->bindValue(13, upload("section_1_img_6", $pastaArquivos, "N"));
                    $stm->bindValue(14, $section_1_image_alt_6);
                    $stm->bindValue(15, $section_1_conteudo_7);
                    $stm->bindValue(16, $section_1_conteudo_8);
                    $stm->bindValue(17, $section_1_link_9);
                    $stm->bindValue(18, $section_1_link_alt_9);
                    $stm->bindValue(19, $section_1_link_conteudo_9);
                    $stm->bindValue(20, $section_1_conteudo_10);
                    $stm->bindValue(21, upload("section_1_img_11", $pastaArquivos, "N"));
                    $stm->bindValue(22, $section_1_image_alt_11);
                    $stm->bindValue(23, $section_1_conteudo_12);
                    $stm->bindValue(24, $section_1_conteudo_13);
                    $stm->bindValue(25, $section_1_link_14);
                    $stm->bindValue(26, $section_1_link_alt_14);
                    $stm->bindValue(27, $section_1_link_conteudo_14);
                    $stm->bindValue(28, $section_1_conteudo_15);
                    $stm->bindValue(29, upload("section_1_img_16", $pastaArquivos, "N"));
                    $stm->bindValue(30, $section_1_image_alt_16);
                    $stm->bindValue(31, $section_1_conteudo_17);
                    $stm->bindValue(32, $section_1_conteudo_18);
                    $stm->bindValue(33, $section_1_link_19);
                    $stm->bindValue(34, $section_1_link_alt_19);
                    $stm->bindValue(35, $section_1_link_conteudo_19);
                    $stm->bindValue(36, $section_1_conteudo_20);
                    $stm->bindValue(37, $section_2_conteudo_21);
                    $stm->bindValue(38, $section_2_conteudo_22);
                    $stm->bindValue(39, $section_2_conteudo_23);
                    $stm->bindValue(40, $section_2_conteudo_24);
                    $stm->bindValue(41, $section_2_conteudo_25);
                    $stm->bindValue(42, $section_2_conteudo_26);
                    $stm->bindValue(43, $section_2_conteudo_27);
                    $stm->bindValue(44, $section_2_conteudo_28);
                    $stm->bindValue(45, upload("section_3_img_29", $pastaArquivos, "N"));
                    $stm->bindValue(46, $section_3_image_alt_29);
                    $stm->bindValue(47, $section_3_conteudo_30);
                    $stm->bindValue(48, upload("section_3_img_31", $pastaArquivos, "N"));
                    $stm->bindValue(49, $section_3_image_alt_31);
                    $stm->bindValue(50, upload("section_3_img_32", $pastaArquivos, "N"));
                    $stm->bindValue(51, $section_3_image_alt_32);
                    $stm->bindValue(52, upload("section_3_img_33", $pastaArquivos, "N"));
                    $stm->bindValue(53, $section_3_image_alt_33);
                    $stm->bindValue(54, upload("section_3_img_34", $pastaArquivos, "N"));
                    $stm->bindValue(55, $section_3_image_alt_34);
                    $stm->bindValue(56, $section_3_conteudo_35);
                    $stm->bindValue(57, $section_3_conteudo_36);
                    $stm->bindValue(58, $section_3_conteudo_37);
                    $stm->bindValue(59, $section_3_conteudo_38);
                    $stm->bindValue(60, upload("section_3_img_39", $pastaArquivos, "N"));
                    $stm->bindValue(61, $section_3_image_alt_39);
                    $stm->bindValue(62, $section_3_conteudo_40);
                    $stm->bindValue(63, $section_3_conteudo_41);
                    $stm->bindValue(64, $section_3_conteudo_42);
                    $stm->bindValue(65, $section_3_conteudo_43);
                    $stm->bindValue(66, $section_3_link_44);
                    $stm->bindValue(67, $section_3_link_alt_44);
                    $stm->bindValue(68, $section_3_link_conteudo_44);
                    $stm->bindValue(69, $section_3_conteudo_45);
                    $stm->bindValue(70, upload("section_3_img_46", $pastaArquivos, "N"));
                    $stm->bindValue(71, $section_3_image_alt_46);
                    $stm->bindValue(72, upload("section_4_img_47", $pastaArquivos, "N"));
                    $stm->bindValue(73, $section_4_image_alt_47);
                    $stm->bindValue(74, upload("section_4_img_48", $pastaArquivos, "N"));
                    $stm->bindValue(75, $section_4_image_alt_48);
                    $stm->bindValue(76, $section_4_conteudo_49);
                    $stm->bindValue(77, $section_4_conteudo_50);
                    $stm->bindValue(78, $section_4_conteudo_51);
                    $stm->bindValue(79, upload("section_4_img_52", $pastaArquivos, "N"));
                    $stm->bindValue(80, $section_4_image_alt_52);
                    $stm->bindValue(81, $section_4_conteudo_53);
                    $stm->bindValue(82, $section_4_conteudo_54);
                    $stm->bindValue(83, $section_4_link_55);
                    $stm->bindValue(84, $section_4_link_alt_55);
                    $stm->bindValue(85, $section_4_link_conteudo_55);
                    $stm->bindValue(86, $section_4_conteudo_56);
                    $stm->bindValue(87, $section_4_link_57);
                    $stm->bindValue(88, $section_4_link_alt_57);
                    $stm->bindValue(89, $section_4_link_conteudo_57);
                    $stm->bindValue(90, $section_4_conteudo_58);
                    $stm->bindValue(91, upload("section_4_img_59", $pastaArquivos, "N"));
                    $stm->bindValue(92, $section_4_image_alt_59);
                    $stm->bindValue(93, $section_4_conteudo_60);
                    $stm->bindValue(94, $section_4_conteudo_61);
                    $stm->bindValue(95, $section_4_link_62);
                    $stm->bindValue(96, $section_4_link_alt_62);
                    $stm->bindValue(97, $section_4_link_conteudo_62);
                    $stm->bindValue(98, $section_4_conteudo_63);
                    $stm->bindValue(99, $section_4_link_64);
                    $stm->bindValue(100, $section_4_link_alt_64);
                    $stm->bindValue(101, $section_4_link_conteudo_64);
                    $stm->bindValue(102, $section_4_conteudo_65);
                    $stm->bindValue(103, upload("section_4_img_66", $pastaArquivos, "N"));
                    $stm->bindValue(104, $section_4_image_alt_66);
                    $stm->bindValue(105, $section_4_conteudo_67);
                    $stm->bindValue(106, $section_4_conteudo_68);
                    $stm->bindValue(107, $section_4_link_69);
                    $stm->bindValue(108, $section_4_link_alt_69);
                    $stm->bindValue(109, $section_4_link_conteudo_69);
                    $stm->bindValue(110, $section_4_conteudo_70);
                    $stm->bindValue(111, $section_4_link_71);
                    $stm->bindValue(112, $section_4_link_alt_71);
                    $stm->bindValue(113, $section_4_link_conteudo_71);
                    $stm->bindValue(114, $section_4_conteudo_72);
                    $stm->bindValue(115, $section_5_conteudo_73);
                    $stm->bindValue(116, $section_5_link_74);
                    $stm->bindValue(117, $section_5_link_alt_74);
                    $stm->bindValue(118, $section_5_link_conteudo_74);
                    $stm->bindValue(119, $section_5_conteudo_75);
                    $stm->bindValue(120, $section_5_conteudo_76);
                    $stm->bindValue(121, $section_5_conteudo_77);
                    $stm->bindValue(122, $section_5_conteudo_78);
                    $stm->bindValue(123, $section_5_conteudo_79);
                    $stm->bindValue(124, $section_5_conteudo_80);
                    $stm->bindValue(125, $section_5_conteudo_81);
                    $stm->bindValue(126, $section_5_conteudo_82);
                    $stm->bindValue(127, $section_5_conteudo_83);
                    $stm->bindValue(128, $section_5_conteudo_84);
                    $stm->bindValue(129, $section_5_conteudo_85);
                    $stm->bindValue(130, $section_5_conteudo_86);
                    $stm->bindValue(131, $section_6_conteudo_87);
                    $stm->bindValue(132, $section_6_conteudo_88);
                    $stm->bindValue(133, $section_6_conteudo_89);
                    $stm->bindValue(134, $section_6_conteudo_90);
                    $stm->bindValue(135, $section_6_conteudo_91);
                    $stm->bindValue(136, $section_6_link_92);
                    $stm->bindValue(137, $section_6_link_alt_92);
                    $stm->bindValue(138, $section_6_link_conteudo_92);
                    $stm->bindValue(139, $section_6_conteudo_93);
                    $stm->bindValue(140, $section_6_conteudo_94);
                    $stm->bindValue(141, $section_6_conteudo_95);
                    $stm->bindValue(142, $section_6_conteudo_96);
                    $stm->bindValue(143, $section_6_link_97);
                    $stm->bindValue(144, $section_6_link_alt_97);
                    $stm->bindValue(145, $section_6_link_conteudo_97);
                    $stm->bindValue(146, $section_6_conteudo_98);
                    $stm->bindValue(147, $section_6_conteudo_99);
                    $stm->bindValue(148, $section_6_conteudo_100);
                    $stm->bindValue(149, $section_6_conteudo_101);
                    $stm->bindValue(150, $section_6_link_102);
                    $stm->bindValue(151, $section_6_link_alt_102);
                    $stm->bindValue(152, $section_6_link_conteudo_102);
                    $stm->bindValue(153, $section_6_conteudo_103);
                    $stm->bindValue(154, $section_6_conteudo_104);
                    $stm->bindValue(155, $section_6_conteudo_105);
                    $stm->bindValue(156, $section_6_conteudo_106);
                    $stm->bindValue(157, $section_6_link_107);
                    $stm->bindValue(158, $section_6_link_alt_107);
                    $stm->bindValue(159, $section_6_link_conteudo_107);
                    $stm->bindValue(160, $section_6_conteudo_108);
                    $stm->bindValue(161, $section_6_conteudo_109);
                    $stm->bindValue(162, $section_7_link_110);
                    $stm->bindValue(163, $section_7_link_alt_110);
                    $stm->bindValue(164, upload("section_7_img_111", $pastaArquivos, "N"));
                    $stm->bindValue(165, $section_7_image_alt_111);
                    $stm->bindValue(166, upload("section_7_img_112", $pastaArquivos, "N"));
                    $stm->bindValue(167, $section_7_image_alt_112);
                    $stm->bindValue(168, upload("section_7_img_113", $pastaArquivos, "N"));
                    $stm->bindValue(169, $section_7_image_alt_113);
                    $stm->bindValue(170, $section_7_conteudo_114);
                    $stm->bindValue(171, $section_7_conteudo_115);
                    $stm->bindValue(172, $section_7_conteudo_116);
                    $stm->bindValue(173, $section_7_conteudo_117);
                    $stm->bindValue(174, $section_7_link_118);
                    $stm->bindValue(175, $section_7_link_alt_118);
                    $stm->bindValue(176, $section_7_link_conteudo_118);
                    $stm->bindValue(177, $section_7_conteudo_119);
                    $stm->bindValue(178, $section_7_link_120);
                    $stm->bindValue(179, $section_7_link_alt_120);
                    $stm->bindValue(180, $section_7_link_conteudo_120);
                    $stm->bindValue(181, $section_7_conteudo_121);
                    $stm->bindValue(182, $section_8_conteudo_122);
                    $stm->bindValue(183, $section_8_conteudo_123);
                    $stm->bindValue(184, $section_8_button124);
                    $stm->bindValue(185, $section_8_conteudo_125);
                    $stm->bindValue(186, $section_8_button126);
                    $stm->bindValue(187, $section_8_conteudo_127);
                    $stm->bindValue(188, $section_8_button128);
                    $stm->bindValue(189, $section_8_conteudo_129);
                    $stm->bindValue(190, $section_8_button130);
                    $stm->bindValue(191, $section_8_conteudo_131);
                    $stm->bindValue(192, $section_8_button132);
                    $stm->bindValue(193, upload("section_9_img_133", $pastaArquivos, "N"));
                    $stm->bindValue(194, $section_9_image_alt_133);
                    $stm->bindValue(195, upload("section_9_img_134", $pastaArquivos, "N"));
                    $stm->bindValue(196, $section_9_image_alt_134);
                    $stm->bindValue(197, $section_9_conteudo_135);
                    $stm->bindValue(198, $section_9_conteudo_136);
                    $stm->bindValue(199, $section_9_conteudo_137);
                    $stm->bindValue(200, upload("section_9_img_138", $pastaArquivos, "N"));
                    $stm->bindValue(201, $section_9_image_alt_138);
                    $stm->bindValue(202, upload("section_9_img_139", $pastaArquivos, "N"));
                    $stm->bindValue(203, $section_9_image_alt_139);
                    $stm->bindValue(204, $section_9_conteudo_140);
                    $stm->bindValue(205, $section_9_conteudo_141);
                    $stm->bindValue(206, $section_9_conteudo_142);
                    $stm->bindValue(207, upload("section_9_img_143", $pastaArquivos, "N"));
                    $stm->bindValue(208, $section_9_image_alt_143);
                    $stm->bindValue(209, upload("section_9_img_144", $pastaArquivos, "N"));
                    $stm->bindValue(210, $section_9_image_alt_144);
                    $stm->bindValue(211, $section_9_conteudo_145);
                    $stm->bindValue(212, $section_9_conteudo_146);
                    $stm->bindValue(213, $section_9_conteudo_147);
                    $stm->bindValue(214, upload("section_9_img_148", $pastaArquivos, "N"));
                    $stm->bindValue(215, $section_9_image_alt_148);
                    $stm->bindValue(216, upload("section_9_img_149", $pastaArquivos, "N"));
                    $stm->bindValue(217, $section_9_image_alt_149);
                    $stm->bindValue(218, $section_9_conteudo_150);
                    $stm->bindValue(219, $section_9_conteudo_151);
                    $stm->bindValue(220, $section_9_conteudo_152);
                    $stm->bindValue(221, upload("section_9_img_153", $pastaArquivos, "N"));
                    $stm->bindValue(222, $section_9_image_alt_153);
                    $stm->bindValue(223, upload("section_9_img_154", $pastaArquivos, "N"));
                    $stm->bindValue(224, $section_9_image_alt_154);
                    $stm->bindValue(225, $section_9_conteudo_155);
                    $stm->bindValue(226, $section_9_conteudo_156);
                    $stm->bindValue(227, $section_9_conteudo_157);
                    $stm->bindValue(228, upload("section_10_img_158", $pastaArquivos, "N"));
                    $stm->bindValue(229, $section_10_image_alt_158);
                    $stm->bindValue(230, upload("section_10_img_159", $pastaArquivos, "N"));
                    $stm->bindValue(231, $section_10_image_alt_159);
                    $stm->bindValue(232, upload("section_10_img_160", $pastaArquivos, "N"));
                    $stm->bindValue(233, $section_10_image_alt_160);
                    $stm->bindValue(234, upload("section_10_img_161", $pastaArquivos, "N"));
                    $stm->bindValue(235, $section_10_image_alt_161);
                    $stm->bindValue(236, upload("section_10_img_162", $pastaArquivos, "N"));
                    $stm->bindValue(237, $section_10_image_alt_162);
                    $stm->bindValue(238, upload("section_10_img_163", $pastaArquivos, "N"));
                    $stm->bindValue(239, $section_10_image_alt_163);
                    $stm->bindValue(240, $section_11_conteudo_164);
                    $stm->bindValue(241, $section_11_conteudo_165);
                    $stm->bindValue(242, $section_11_conteudo_166);
                    $stm->bindValue(243, upload("section_11_img_167", $pastaArquivos, "N"));
                    $stm->bindValue(244, $section_11_image_alt_167);
                    $stm->bindValue(245, $section_11_button168);
                    $stm->bindValue(246, $section_11_link_169);
                    $stm->bindValue(247, $section_11_link_alt_169);
                    $stm->bindValue(248, $section_11_link_170);
                    $stm->bindValue(249, $section_11_link_alt_170);
                    $stm->bindValue(250, $section_11_link_171);
                    $stm->bindValue(251, $section_11_link_alt_171);
                    $stm->bindValue(252, upload("section_11_img_172", $pastaArquivos, "N"));
                    $stm->bindValue(253, $section_11_image_alt_172);
                    $stm->bindValue(254, upload("section_11_img_173", $pastaArquivos, "N"));
                    $stm->bindValue(255, $section_11_image_alt_173);
                    $stm->bindValue(256, $section_11_conteudo_174);
                    $stm->bindValue(257, $section_11_link_175);
                    $stm->bindValue(258, $section_11_link_alt_175);
                    $stm->bindValue(259, $section_11_link_conteudo_175);
                    $stm->bindValue(260, $section_11_conteudo_176);
                    $stm->bindValue(261, upload("section_11_img_177", $pastaArquivos, "N"));
                    $stm->bindValue(262, $section_11_image_alt_177);
                    $stm->bindValue(263, $section_11_button178);
                    $stm->bindValue(264, $section_11_link_179);
                    $stm->bindValue(265, $section_11_link_alt_179);
                    $stm->bindValue(266, $section_11_link_180);
                    $stm->bindValue(267, $section_11_link_alt_180);
                    $stm->bindValue(268, $section_11_link_181);
                    $stm->bindValue(269, $section_11_link_alt_181);
                    $stm->bindValue(270, upload("section_11_img_182", $pastaArquivos, "N"));
                    $stm->bindValue(271, $section_11_image_alt_182);
                    $stm->bindValue(272, upload("section_11_img_183", $pastaArquivos, "N"));
                    $stm->bindValue(273, $section_11_image_alt_183);
                    $stm->bindValue(274, $section_11_conteudo_184);
                    $stm->bindValue(275, $section_11_link_185);
                    $stm->bindValue(276, $section_11_link_alt_185);
                    $stm->bindValue(277, $section_11_link_conteudo_185);
                    $stm->bindValue(278, $section_11_conteudo_186);
                    $stm->bindValue(279, upload("section_11_img_187", $pastaArquivos, "N"));
                    $stm->bindValue(280, $section_11_image_alt_187);
                    $stm->bindValue(281, $section_11_button188);
                    $stm->bindValue(282, $section_11_link_189);
                    $stm->bindValue(283, $section_11_link_alt_189);
                    $stm->bindValue(284, $section_11_link_190);
                    $stm->bindValue(285, $section_11_link_alt_190);
                    $stm->bindValue(286, $section_11_link_191);
                    $stm->bindValue(287, $section_11_link_alt_191);
                    $stm->bindValue(288, upload("section_11_img_192", $pastaArquivos, "N"));
                    $stm->bindValue(289, $section_11_image_alt_192);
                    $stm->bindValue(290, upload("section_11_img_193", $pastaArquivos, "N"));
                    $stm->bindValue(291, $section_11_image_alt_193);
                    $stm->bindValue(292, $section_11_conteudo_194);
                    $stm->bindValue(293, $section_11_link_195);
                    $stm->bindValue(294, $section_11_link_alt_195);
                    $stm->bindValue(295, $section_11_link_conteudo_195);
                    $stm->bindValue(296, $section_11_conteudo_196);
                    $stm->bindValue(297, upload("section_12_img_197", $pastaArquivos, "N"));
                    $stm->bindValue(298, $section_12_image_alt_197);
                    $stm->bindValue(299, upload("section_12_img_198", $pastaArquivos, "N"));
                    $stm->bindValue(300, $section_12_image_alt_198);
                    $stm->bindValue(301, $section_12_conteudo_199);
                    $stm->bindValue(302, $section_12_link_200);
                    $stm->bindValue(303, $section_12_link_alt_200);
                    $stm->bindValue(304, $section_12_link_conteudo_200);
                    $stm->bindValue(305, $section_12_conteudo_201);
                    $stm->bindValue(306, $section_12_conteudo_202);
                    $stm->bindValue(307, upload("section_12_img_203", $pastaArquivos, "N"));
                    $stm->bindValue(308, $section_12_image_alt_203);
                    $stm->bindValue(309, $section_13_conteudo_204);
                    $stm->bindValue(310, $section_13_conteudo_205);
                    $stm->bindValue(311, $section_13_conteudo_206);
                    $stm->bindValue(312, upload("section_13_img_207", $pastaArquivos, "N"));
                    $stm->bindValue(313, $section_13_image_alt_207);
                    $stm->bindValue(314, $section_13_link_208);
                    $stm->bindValue(315, $section_13_link_alt_208);
                    $stm->bindValue(316, $section_13_conteudo_209);
                    $stm->bindValue(317, $section_13_conteudo_210);
                    $stm->bindValue(318, $section_13_conteudo_211);
                    $stm->bindValue(319, $section_13_link_212);
                    $stm->bindValue(320, $section_13_link_alt_212);
                    $stm->bindValue(321, $section_13_link_conteudo_212);
                    $stm->bindValue(322, upload("section_13_img_213", $pastaArquivos, "N"));
                    $stm->bindValue(323, $section_13_image_alt_213);
                    $stm->bindValue(324, $section_13_link_214);
                    $stm->bindValue(325, $section_13_link_alt_214);
                    $stm->bindValue(326, $section_13_conteudo_215);
                    $stm->bindValue(327, $section_13_conteudo_216);
                    $stm->bindValue(328, $section_13_conteudo_217);
                    $stm->bindValue(329, $section_13_link_218);
                    $stm->bindValue(330, $section_13_link_alt_218);
                    $stm->bindValue(331, $section_13_link_conteudo_218);
                    $stm->bindValue(332, upload("section_13_img_219", $pastaArquivos, "N"));
                    $stm->bindValue(333, $section_13_image_alt_219);
                    $stm->bindValue(334, $section_13_link_220);
                    $stm->bindValue(335, $section_13_link_alt_220);
                    $stm->bindValue(336, $section_13_conteudo_221);
                    $stm->bindValue(337, $section_13_conteudo_222);
                    $stm->bindValue(338, $section_13_conteudo_223);
                    $stm->bindValue(339, $section_13_link_224);
                    $stm->bindValue(340, $section_13_link_alt_224);
                    $stm->bindValue(341, $section_13_link_conteudo_224);
                    $stm->execute();
                    $idBanner = $this->pdo->lastInsertId();
                } catch (PDOException $erro) {
                    echo $erro->getMessage();
                }
            }
        }
        function editar($redireciona = 'home.php')
        {
            if (isset($_POST['acao']) && $_POST['acao'] == 'editaHome') {
                $meta_title = (isset($_POST['meta_title']) && !empty($_POST['meta_title'])) ? $_POST['meta_title'] : '';
                $meta_keywords = (isset($_POST['meta_keywords']) && !empty($_POST['meta_keywords'])) ? $_POST['meta_keywords'] : '';
                $meta_description = (isset($_POST['meta_description']) && !empty($_POST['meta_description'])) ? $_POST['meta_description'] : '';
                $section_1_link_1 = (isset($_POST['section_1_link_1']) && !empty($_POST['section_1_link_1'])) ? $_POST['section_1_link_1'] : '';
                $section_1_link_alt_1 = (isset($_POST['section_1_link_alt_1']) && !empty($_POST['section_1_link_alt_1'])) ? $_POST['section_1_link_alt_1'] : '';
                $section_1_link_conteudo_1 = (isset($_POST['section_1_link_conteudo_1']) && !empty($_POST['section_1_link_conteudo_1'])) ? $_POST['section_1_link_conteudo_1'] : '';
                $section_1_button2 = (isset($_POST['section_1_button2']) && !empty($_POST['section_1_button2'])) ? $_POST['section_1_button2'] : '';
                $section_1_button3 = (isset($_POST['section_1_button3']) && !empty($_POST['section_1_button3'])) ? $_POST['section_1_button3'] : '';
                $section_1_image_alt_4 = (isset($_POST['section_1_image_alt_4']) && !empty($_POST['section_1_image_alt_4'])) ? $_POST['section_1_image_alt_4'] : '';
                $section_1_image_alt_5 = (isset($_POST['section_1_image_alt_5']) && !empty($_POST['section_1_image_alt_5'])) ? $_POST['section_1_image_alt_5'] : '';
                $section_1_image_alt_6 = (isset($_POST['section_1_image_alt_6']) && !empty($_POST['section_1_image_alt_6'])) ? $_POST['section_1_image_alt_6'] : '';
                $section_1_conteudo_7 = (isset($_POST['section_1_conteudo_7']) && !empty($_POST['section_1_conteudo_7'])) ? $_POST['section_1_conteudo_7'] : '';
                $section_1_conteudo_8 = (isset($_POST['section_1_conteudo_8']) && !empty($_POST['section_1_conteudo_8'])) ? $_POST['section_1_conteudo_8'] : '';
                $section_1_link_9 = (isset($_POST['section_1_link_9']) && !empty($_POST['section_1_link_9'])) ? $_POST['section_1_link_9'] : '';
                $section_1_link_alt_9 = (isset($_POST['section_1_link_alt_9']) && !empty($_POST['section_1_link_alt_9'])) ? $_POST['section_1_link_alt_9'] : '';
                $section_1_link_conteudo_9 = (isset($_POST['section_1_link_conteudo_9']) && !empty($_POST['section_1_link_conteudo_9'])) ? $_POST['section_1_link_conteudo_9'] : '';
                $section_1_conteudo_10 = (isset($_POST['section_1_conteudo_10']) && !empty($_POST['section_1_conteudo_10'])) ? $_POST['section_1_conteudo_10'] : '';
                $section_1_image_alt_11 = (isset($_POST['section_1_image_alt_11']) && !empty($_POST['section_1_image_alt_11'])) ? $_POST['section_1_image_alt_11'] : '';
                $section_1_conteudo_12 = (isset($_POST['section_1_conteudo_12']) && !empty($_POST['section_1_conteudo_12'])) ? $_POST['section_1_conteudo_12'] : '';
                $section_1_conteudo_13 = (isset($_POST['section_1_conteudo_13']) && !empty($_POST['section_1_conteudo_13'])) ? $_POST['section_1_conteudo_13'] : '';
                $section_1_link_14 = (isset($_POST['section_1_link_14']) && !empty($_POST['section_1_link_14'])) ? $_POST['section_1_link_14'] : '';
                $section_1_link_alt_14 = (isset($_POST['section_1_link_alt_14']) && !empty($_POST['section_1_link_alt_14'])) ? $_POST['section_1_link_alt_14'] : '';
                $section_1_link_conteudo_14 = (isset($_POST['section_1_link_conteudo_14']) && !empty($_POST['section_1_link_conteudo_14'])) ? $_POST['section_1_link_conteudo_14'] : '';
                $section_1_conteudo_15 = (isset($_POST['section_1_conteudo_15']) && !empty($_POST['section_1_conteudo_15'])) ? $_POST['section_1_conteudo_15'] : '';
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
                $section_4_image_alt_59 = (isset($_POST['section_4_image_alt_59']) && !empty($_POST['section_4_image_alt_59'])) ? $_POST['section_4_image_alt_59'] : '';
                $section_4_conteudo_60 = (isset($_POST['section_4_conteudo_60']) && !empty($_POST['section_4_conteudo_60'])) ? $_POST['section_4_conteudo_60'] : '';
                $section_4_conteudo_61 = (isset($_POST['section_4_conteudo_61']) && !empty($_POST['section_4_conteudo_61'])) ? $_POST['section_4_conteudo_61'] : '';
                $section_4_link_62 = (isset($_POST['section_4_link_62']) && !empty($_POST['section_4_link_62'])) ? $_POST['section_4_link_62'] : '';
                $section_4_link_alt_62 = (isset($_POST['section_4_link_alt_62']) && !empty($_POST['section_4_link_alt_62'])) ? $_POST['section_4_link_alt_62'] : '';
                $section_4_link_conteudo_62 = (isset($_POST['section_4_link_conteudo_62']) && !empty($_POST['section_4_link_conteudo_62'])) ? $_POST['section_4_link_conteudo_62'] : '';
                $section_4_conteudo_63 = (isset($_POST['section_4_conteudo_63']) && !empty($_POST['section_4_conteudo_63'])) ? $_POST['section_4_conteudo_63'] : '';
                $section_4_link_64 = (isset($_POST['section_4_link_64']) && !empty($_POST['section_4_link_64'])) ? $_POST['section_4_link_64'] : '';
                $section_4_link_alt_64 = (isset($_POST['section_4_link_alt_64']) && !empty($_POST['section_4_link_alt_64'])) ? $_POST['section_4_link_alt_64'] : '';
                $section_4_link_conteudo_64 = (isset($_POST['section_4_link_conteudo_64']) && !empty($_POST['section_4_link_conteudo_64'])) ? $_POST['section_4_link_conteudo_64'] : '';
                $section_4_conteudo_65 = (isset($_POST['section_4_conteudo_65']) && !empty($_POST['section_4_conteudo_65'])) ? $_POST['section_4_conteudo_65'] : '';
                $section_4_image_alt_66 = (isset($_POST['section_4_image_alt_66']) && !empty($_POST['section_4_image_alt_66'])) ? $_POST['section_4_image_alt_66'] : '';
                $section_4_conteudo_67 = (isset($_POST['section_4_conteudo_67']) && !empty($_POST['section_4_conteudo_67'])) ? $_POST['section_4_conteudo_67'] : '';
                $section_4_conteudo_68 = (isset($_POST['section_4_conteudo_68']) && !empty($_POST['section_4_conteudo_68'])) ? $_POST['section_4_conteudo_68'] : '';
                $section_4_link_69 = (isset($_POST['section_4_link_69']) && !empty($_POST['section_4_link_69'])) ? $_POST['section_4_link_69'] : '';
                $section_4_link_alt_69 = (isset($_POST['section_4_link_alt_69']) && !empty($_POST['section_4_link_alt_69'])) ? $_POST['section_4_link_alt_69'] : '';
                $section_4_link_conteudo_69 = (isset($_POST['section_4_link_conteudo_69']) && !empty($_POST['section_4_link_conteudo_69'])) ? $_POST['section_4_link_conteudo_69'] : '';
                $section_4_conteudo_70 = (isset($_POST['section_4_conteudo_70']) && !empty($_POST['section_4_conteudo_70'])) ? $_POST['section_4_conteudo_70'] : '';
                $section_4_link_71 = (isset($_POST['section_4_link_71']) && !empty($_POST['section_4_link_71'])) ? $_POST['section_4_link_71'] : '';
                $section_4_link_alt_71 = (isset($_POST['section_4_link_alt_71']) && !empty($_POST['section_4_link_alt_71'])) ? $_POST['section_4_link_alt_71'] : '';
                $section_4_link_conteudo_71 = (isset($_POST['section_4_link_conteudo_71']) && !empty($_POST['section_4_link_conteudo_71'])) ? $_POST['section_4_link_conteudo_71'] : '';
                $section_4_conteudo_72 = (isset($_POST['section_4_conteudo_72']) && !empty($_POST['section_4_conteudo_72'])) ? $_POST['section_4_conteudo_72'] : '';
                $section_5_conteudo_73 = (isset($_POST['section_5_conteudo_73']) && !empty($_POST['section_5_conteudo_73'])) ? $_POST['section_5_conteudo_73'] : '';
                $section_5_link_74 = (isset($_POST['section_5_link_74']) && !empty($_POST['section_5_link_74'])) ? $_POST['section_5_link_74'] : '';
                $section_5_link_alt_74 = (isset($_POST['section_5_link_alt_74']) && !empty($_POST['section_5_link_alt_74'])) ? $_POST['section_5_link_alt_74'] : '';
                $section_5_link_conteudo_74 = (isset($_POST['section_5_link_conteudo_74']) && !empty($_POST['section_5_link_conteudo_74'])) ? $_POST['section_5_link_conteudo_74'] : '';
                $section_5_conteudo_75 = (isset($_POST['section_5_conteudo_75']) && !empty($_POST['section_5_conteudo_75'])) ? $_POST['section_5_conteudo_75'] : '';
                $section_5_conteudo_76 = (isset($_POST['section_5_conteudo_76']) && !empty($_POST['section_5_conteudo_76'])) ? $_POST['section_5_conteudo_76'] : '';
                $section_5_conteudo_77 = (isset($_POST['section_5_conteudo_77']) && !empty($_POST['section_5_conteudo_77'])) ? $_POST['section_5_conteudo_77'] : '';
                $section_5_conteudo_78 = (isset($_POST['section_5_conteudo_78']) && !empty($_POST['section_5_conteudo_78'])) ? $_POST['section_5_conteudo_78'] : '';
                $section_5_conteudo_79 = (isset($_POST['section_5_conteudo_79']) && !empty($_POST['section_5_conteudo_79'])) ? $_POST['section_5_conteudo_79'] : '';
                $section_5_conteudo_80 = (isset($_POST['section_5_conteudo_80']) && !empty($_POST['section_5_conteudo_80'])) ? $_POST['section_5_conteudo_80'] : '';
                $section_5_conteudo_81 = (isset($_POST['section_5_conteudo_81']) && !empty($_POST['section_5_conteudo_81'])) ? $_POST['section_5_conteudo_81'] : '';
                $section_5_conteudo_82 = (isset($_POST['section_5_conteudo_82']) && !empty($_POST['section_5_conteudo_82'])) ? $_POST['section_5_conteudo_82'] : '';
                $section_5_conteudo_83 = (isset($_POST['section_5_conteudo_83']) && !empty($_POST['section_5_conteudo_83'])) ? $_POST['section_5_conteudo_83'] : '';
                $section_5_conteudo_84 = (isset($_POST['section_5_conteudo_84']) && !empty($_POST['section_5_conteudo_84'])) ? $_POST['section_5_conteudo_84'] : '';
                $section_5_conteudo_85 = (isset($_POST['section_5_conteudo_85']) && !empty($_POST['section_5_conteudo_85'])) ? $_POST['section_5_conteudo_85'] : '';
                $section_5_conteudo_86 = (isset($_POST['section_5_conteudo_86']) && !empty($_POST['section_5_conteudo_86'])) ? $_POST['section_5_conteudo_86'] : '';
                $section_6_conteudo_87 = (isset($_POST['section_6_conteudo_87']) && !empty($_POST['section_6_conteudo_87'])) ? $_POST['section_6_conteudo_87'] : '';
                $section_6_conteudo_88 = (isset($_POST['section_6_conteudo_88']) && !empty($_POST['section_6_conteudo_88'])) ? $_POST['section_6_conteudo_88'] : '';
                $section_6_conteudo_89 = (isset($_POST['section_6_conteudo_89']) && !empty($_POST['section_6_conteudo_89'])) ? $_POST['section_6_conteudo_89'] : '';
                $section_6_conteudo_90 = (isset($_POST['section_6_conteudo_90']) && !empty($_POST['section_6_conteudo_90'])) ? $_POST['section_6_conteudo_90'] : '';
                $section_6_conteudo_91 = (isset($_POST['section_6_conteudo_91']) && !empty($_POST['section_6_conteudo_91'])) ? $_POST['section_6_conteudo_91'] : '';
                $section_6_link_92 = (isset($_POST['section_6_link_92']) && !empty($_POST['section_6_link_92'])) ? $_POST['section_6_link_92'] : '';
                $section_6_link_alt_92 = (isset($_POST['section_6_link_alt_92']) && !empty($_POST['section_6_link_alt_92'])) ? $_POST['section_6_link_alt_92'] : '';
                $section_6_link_conteudo_92 = (isset($_POST['section_6_link_conteudo_92']) && !empty($_POST['section_6_link_conteudo_92'])) ? $_POST['section_6_link_conteudo_92'] : '';
                $section_6_conteudo_93 = (isset($_POST['section_6_conteudo_93']) && !empty($_POST['section_6_conteudo_93'])) ? $_POST['section_6_conteudo_93'] : '';
                $section_6_conteudo_94 = (isset($_POST['section_6_conteudo_94']) && !empty($_POST['section_6_conteudo_94'])) ? $_POST['section_6_conteudo_94'] : '';
                $section_6_conteudo_95 = (isset($_POST['section_6_conteudo_95']) && !empty($_POST['section_6_conteudo_95'])) ? $_POST['section_6_conteudo_95'] : '';
                $section_6_conteudo_96 = (isset($_POST['section_6_conteudo_96']) && !empty($_POST['section_6_conteudo_96'])) ? $_POST['section_6_conteudo_96'] : '';
                $section_6_link_97 = (isset($_POST['section_6_link_97']) && !empty($_POST['section_6_link_97'])) ? $_POST['section_6_link_97'] : '';
                $section_6_link_alt_97 = (isset($_POST['section_6_link_alt_97']) && !empty($_POST['section_6_link_alt_97'])) ? $_POST['section_6_link_alt_97'] : '';
                $section_6_link_conteudo_97 = (isset($_POST['section_6_link_conteudo_97']) && !empty($_POST['section_6_link_conteudo_97'])) ? $_POST['section_6_link_conteudo_97'] : '';
                $section_6_conteudo_98 = (isset($_POST['section_6_conteudo_98']) && !empty($_POST['section_6_conteudo_98'])) ? $_POST['section_6_conteudo_98'] : '';
                $section_6_conteudo_99 = (isset($_POST['section_6_conteudo_99']) && !empty($_POST['section_6_conteudo_99'])) ? $_POST['section_6_conteudo_99'] : '';
                $section_6_conteudo_100 = (isset($_POST['section_6_conteudo_100']) && !empty($_POST['section_6_conteudo_100'])) ? $_POST['section_6_conteudo_100'] : '';
                $section_6_conteudo_101 = (isset($_POST['section_6_conteudo_101']) && !empty($_POST['section_6_conteudo_101'])) ? $_POST['section_6_conteudo_101'] : '';
                $section_6_link_102 = (isset($_POST['section_6_link_102']) && !empty($_POST['section_6_link_102'])) ? $_POST['section_6_link_102'] : '';
                $section_6_link_alt_102 = (isset($_POST['section_6_link_alt_102']) && !empty($_POST['section_6_link_alt_102'])) ? $_POST['section_6_link_alt_102'] : '';
                $section_6_link_conteudo_102 = (isset($_POST['section_6_link_conteudo_102']) && !empty($_POST['section_6_link_conteudo_102'])) ? $_POST['section_6_link_conteudo_102'] : '';
                $section_6_conteudo_103 = (isset($_POST['section_6_conteudo_103']) && !empty($_POST['section_6_conteudo_103'])) ? $_POST['section_6_conteudo_103'] : '';
                $section_6_conteudo_104 = (isset($_POST['section_6_conteudo_104']) && !empty($_POST['section_6_conteudo_104'])) ? $_POST['section_6_conteudo_104'] : '';
                $section_6_conteudo_105 = (isset($_POST['section_6_conteudo_105']) && !empty($_POST['section_6_conteudo_105'])) ? $_POST['section_6_conteudo_105'] : '';
                $section_6_conteudo_106 = (isset($_POST['section_6_conteudo_106']) && !empty($_POST['section_6_conteudo_106'])) ? $_POST['section_6_conteudo_106'] : '';
                $section_6_link_107 = (isset($_POST['section_6_link_107']) && !empty($_POST['section_6_link_107'])) ? $_POST['section_6_link_107'] : '';
                $section_6_link_alt_107 = (isset($_POST['section_6_link_alt_107']) && !empty($_POST['section_6_link_alt_107'])) ? $_POST['section_6_link_alt_107'] : '';
                $section_6_link_conteudo_107 = (isset($_POST['section_6_link_conteudo_107']) && !empty($_POST['section_6_link_conteudo_107'])) ? $_POST['section_6_link_conteudo_107'] : '';
                $section_6_conteudo_108 = (isset($_POST['section_6_conteudo_108']) && !empty($_POST['section_6_conteudo_108'])) ? $_POST['section_6_conteudo_108'] : '';
                $section_6_conteudo_109 = (isset($_POST['section_6_conteudo_109']) && !empty($_POST['section_6_conteudo_109'])) ? $_POST['section_6_conteudo_109'] : '';
                $section_7_link_110 = (isset($_POST['section_7_link_110']) && !empty($_POST['section_7_link_110'])) ? $_POST['section_7_link_110'] : '';
                $section_7_link_alt_110 = (isset($_POST['section_7_link_alt_110']) && !empty($_POST['section_7_link_alt_110'])) ? $_POST['section_7_link_alt_110'] : '';
                $section_7_image_alt_111 = (isset($_POST['section_7_image_alt_111']) && !empty($_POST['section_7_image_alt_111'])) ? $_POST['section_7_image_alt_111'] : '';
                $section_7_image_alt_112 = (isset($_POST['section_7_image_alt_112']) && !empty($_POST['section_7_image_alt_112'])) ? $_POST['section_7_image_alt_112'] : '';
                $section_7_image_alt_113 = (isset($_POST['section_7_image_alt_113']) && !empty($_POST['section_7_image_alt_113'])) ? $_POST['section_7_image_alt_113'] : '';
                $section_7_conteudo_114 = (isset($_POST['section_7_conteudo_114']) && !empty($_POST['section_7_conteudo_114'])) ? $_POST['section_7_conteudo_114'] : '';
                $section_7_conteudo_115 = (isset($_POST['section_7_conteudo_115']) && !empty($_POST['section_7_conteudo_115'])) ? $_POST['section_7_conteudo_115'] : '';
                $section_7_conteudo_116 = (isset($_POST['section_7_conteudo_116']) && !empty($_POST['section_7_conteudo_116'])) ? $_POST['section_7_conteudo_116'] : '';
                $section_7_conteudo_117 = (isset($_POST['section_7_conteudo_117']) && !empty($_POST['section_7_conteudo_117'])) ? $_POST['section_7_conteudo_117'] : '';
                $section_7_link_118 = (isset($_POST['section_7_link_118']) && !empty($_POST['section_7_link_118'])) ? $_POST['section_7_link_118'] : '';
                $section_7_link_alt_118 = (isset($_POST['section_7_link_alt_118']) && !empty($_POST['section_7_link_alt_118'])) ? $_POST['section_7_link_alt_118'] : '';
                $section_7_link_conteudo_118 = (isset($_POST['section_7_link_conteudo_118']) && !empty($_POST['section_7_link_conteudo_118'])) ? $_POST['section_7_link_conteudo_118'] : '';
                $section_7_conteudo_119 = (isset($_POST['section_7_conteudo_119']) && !empty($_POST['section_7_conteudo_119'])) ? $_POST['section_7_conteudo_119'] : '';
                $section_7_link_120 = (isset($_POST['section_7_link_120']) && !empty($_POST['section_7_link_120'])) ? $_POST['section_7_link_120'] : '';
                $section_7_link_alt_120 = (isset($_POST['section_7_link_alt_120']) && !empty($_POST['section_7_link_alt_120'])) ? $_POST['section_7_link_alt_120'] : '';
                $section_7_link_conteudo_120 = (isset($_POST['section_7_link_conteudo_120']) && !empty($_POST['section_7_link_conteudo_120'])) ? $_POST['section_7_link_conteudo_120'] : '';
                $section_7_conteudo_121 = (isset($_POST['section_7_conteudo_121']) && !empty($_POST['section_7_conteudo_121'])) ? $_POST['section_7_conteudo_121'] : '';
                $section_8_conteudo_122 = (isset($_POST['section_8_conteudo_122']) && !empty($_POST['section_8_conteudo_122'])) ? $_POST['section_8_conteudo_122'] : '';
                $section_8_conteudo_123 = (isset($_POST['section_8_conteudo_123']) && !empty($_POST['section_8_conteudo_123'])) ? $_POST['section_8_conteudo_123'] : '';
                $section_8_button124 = (isset($_POST['section_8_button124']) && !empty($_POST['section_8_button124'])) ? $_POST['section_8_button124'] : '';
                $section_8_conteudo_125 = (isset($_POST['section_8_conteudo_125']) && !empty($_POST['section_8_conteudo_125'])) ? $_POST['section_8_conteudo_125'] : '';
                $section_8_button126 = (isset($_POST['section_8_button126']) && !empty($_POST['section_8_button126'])) ? $_POST['section_8_button126'] : '';
                $section_8_conteudo_127 = (isset($_POST['section_8_conteudo_127']) && !empty($_POST['section_8_conteudo_127'])) ? $_POST['section_8_conteudo_127'] : '';
                $section_8_button128 = (isset($_POST['section_8_button128']) && !empty($_POST['section_8_button128'])) ? $_POST['section_8_button128'] : '';
                $section_8_conteudo_129 = (isset($_POST['section_8_conteudo_129']) && !empty($_POST['section_8_conteudo_129'])) ? $_POST['section_8_conteudo_129'] : '';
                $section_8_button130 = (isset($_POST['section_8_button130']) && !empty($_POST['section_8_button130'])) ? $_POST['section_8_button130'] : '';
                $section_8_conteudo_131 = (isset($_POST['section_8_conteudo_131']) && !empty($_POST['section_8_conteudo_131'])) ? $_POST['section_8_conteudo_131'] : '';
                $section_8_button132 = (isset($_POST['section_8_button132']) && !empty($_POST['section_8_button132'])) ? $_POST['section_8_button132'] : '';
                $section_9_image_alt_133 = (isset($_POST['section_9_image_alt_133']) && !empty($_POST['section_9_image_alt_133'])) ? $_POST['section_9_image_alt_133'] : '';
                $section_9_image_alt_134 = (isset($_POST['section_9_image_alt_134']) && !empty($_POST['section_9_image_alt_134'])) ? $_POST['section_9_image_alt_134'] : '';
                $section_9_conteudo_135 = (isset($_POST['section_9_conteudo_135']) && !empty($_POST['section_9_conteudo_135'])) ? $_POST['section_9_conteudo_135'] : '';
                $section_9_conteudo_136 = (isset($_POST['section_9_conteudo_136']) && !empty($_POST['section_9_conteudo_136'])) ? $_POST['section_9_conteudo_136'] : '';
                $section_9_conteudo_137 = (isset($_POST['section_9_conteudo_137']) && !empty($_POST['section_9_conteudo_137'])) ? $_POST['section_9_conteudo_137'] : '';
                $section_9_image_alt_138 = (isset($_POST['section_9_image_alt_138']) && !empty($_POST['section_9_image_alt_138'])) ? $_POST['section_9_image_alt_138'] : '';
                $section_9_image_alt_139 = (isset($_POST['section_9_image_alt_139']) && !empty($_POST['section_9_image_alt_139'])) ? $_POST['section_9_image_alt_139'] : '';
                $section_9_conteudo_140 = (isset($_POST['section_9_conteudo_140']) && !empty($_POST['section_9_conteudo_140'])) ? $_POST['section_9_conteudo_140'] : '';
                $section_9_conteudo_141 = (isset($_POST['section_9_conteudo_141']) && !empty($_POST['section_9_conteudo_141'])) ? $_POST['section_9_conteudo_141'] : '';
                $section_9_conteudo_142 = (isset($_POST['section_9_conteudo_142']) && !empty($_POST['section_9_conteudo_142'])) ? $_POST['section_9_conteudo_142'] : '';
                $section_9_image_alt_143 = (isset($_POST['section_9_image_alt_143']) && !empty($_POST['section_9_image_alt_143'])) ? $_POST['section_9_image_alt_143'] : '';
                $section_9_image_alt_144 = (isset($_POST['section_9_image_alt_144']) && !empty($_POST['section_9_image_alt_144'])) ? $_POST['section_9_image_alt_144'] : '';
                $section_9_conteudo_145 = (isset($_POST['section_9_conteudo_145']) && !empty($_POST['section_9_conteudo_145'])) ? $_POST['section_9_conteudo_145'] : '';
                $section_9_conteudo_146 = (isset($_POST['section_9_conteudo_146']) && !empty($_POST['section_9_conteudo_146'])) ? $_POST['section_9_conteudo_146'] : '';
                $section_9_conteudo_147 = (isset($_POST['section_9_conteudo_147']) && !empty($_POST['section_9_conteudo_147'])) ? $_POST['section_9_conteudo_147'] : '';
                $section_9_image_alt_148 = (isset($_POST['section_9_image_alt_148']) && !empty($_POST['section_9_image_alt_148'])) ? $_POST['section_9_image_alt_148'] : '';
                $section_9_image_alt_149 = (isset($_POST['section_9_image_alt_149']) && !empty($_POST['section_9_image_alt_149'])) ? $_POST['section_9_image_alt_149'] : '';
                $section_9_conteudo_150 = (isset($_POST['section_9_conteudo_150']) && !empty($_POST['section_9_conteudo_150'])) ? $_POST['section_9_conteudo_150'] : '';
                $section_9_conteudo_151 = (isset($_POST['section_9_conteudo_151']) && !empty($_POST['section_9_conteudo_151'])) ? $_POST['section_9_conteudo_151'] : '';
                $section_9_conteudo_152 = (isset($_POST['section_9_conteudo_152']) && !empty($_POST['section_9_conteudo_152'])) ? $_POST['section_9_conteudo_152'] : '';
                $section_9_image_alt_153 = (isset($_POST['section_9_image_alt_153']) && !empty($_POST['section_9_image_alt_153'])) ? $_POST['section_9_image_alt_153'] : '';
                $section_9_image_alt_154 = (isset($_POST['section_9_image_alt_154']) && !empty($_POST['section_9_image_alt_154'])) ? $_POST['section_9_image_alt_154'] : '';
                $section_9_conteudo_155 = (isset($_POST['section_9_conteudo_155']) && !empty($_POST['section_9_conteudo_155'])) ? $_POST['section_9_conteudo_155'] : '';
                $section_9_conteudo_156 = (isset($_POST['section_9_conteudo_156']) && !empty($_POST['section_9_conteudo_156'])) ? $_POST['section_9_conteudo_156'] : '';
                $section_9_conteudo_157 = (isset($_POST['section_9_conteudo_157']) && !empty($_POST['section_9_conteudo_157'])) ? $_POST['section_9_conteudo_157'] : '';
                $section_10_image_alt_158 = (isset($_POST['section_10_image_alt_158']) && !empty($_POST['section_10_image_alt_158'])) ? $_POST['section_10_image_alt_158'] : '';
                $section_10_image_alt_159 = (isset($_POST['section_10_image_alt_159']) && !empty($_POST['section_10_image_alt_159'])) ? $_POST['section_10_image_alt_159'] : '';
                $section_10_image_alt_160 = (isset($_POST['section_10_image_alt_160']) && !empty($_POST['section_10_image_alt_160'])) ? $_POST['section_10_image_alt_160'] : '';
                $section_10_image_alt_161 = (isset($_POST['section_10_image_alt_161']) && !empty($_POST['section_10_image_alt_161'])) ? $_POST['section_10_image_alt_161'] : '';
                $section_10_image_alt_162 = (isset($_POST['section_10_image_alt_162']) && !empty($_POST['section_10_image_alt_162'])) ? $_POST['section_10_image_alt_162'] : '';
                $section_10_image_alt_163 = (isset($_POST['section_10_image_alt_163']) && !empty($_POST['section_10_image_alt_163'])) ? $_POST['section_10_image_alt_163'] : '';
                $section_11_conteudo_164 = (isset($_POST['section_11_conteudo_164']) && !empty($_POST['section_11_conteudo_164'])) ? $_POST['section_11_conteudo_164'] : '';
                $section_11_conteudo_165 = (isset($_POST['section_11_conteudo_165']) && !empty($_POST['section_11_conteudo_165'])) ? $_POST['section_11_conteudo_165'] : '';
                $section_11_conteudo_166 = (isset($_POST['section_11_conteudo_166']) && !empty($_POST['section_11_conteudo_166'])) ? $_POST['section_11_conteudo_166'] : '';
                $section_11_image_alt_167 = (isset($_POST['section_11_image_alt_167']) && !empty($_POST['section_11_image_alt_167'])) ? $_POST['section_11_image_alt_167'] : '';
                $section_11_button168 = (isset($_POST['section_11_button168']) && !empty($_POST['section_11_button168'])) ? $_POST['section_11_button168'] : '';
                $section_11_link_169 = (isset($_POST['section_11_link_169']) && !empty($_POST['section_11_link_169'])) ? $_POST['section_11_link_169'] : '';
                $section_11_link_alt_169 = (isset($_POST['section_11_link_alt_169']) && !empty($_POST['section_11_link_alt_169'])) ? $_POST['section_11_link_alt_169'] : '';
                $section_11_link_170 = (isset($_POST['section_11_link_170']) && !empty($_POST['section_11_link_170'])) ? $_POST['section_11_link_170'] : '';
                $section_11_link_alt_170 = (isset($_POST['section_11_link_alt_170']) && !empty($_POST['section_11_link_alt_170'])) ? $_POST['section_11_link_alt_170'] : '';
                $section_11_link_171 = (isset($_POST['section_11_link_171']) && !empty($_POST['section_11_link_171'])) ? $_POST['section_11_link_171'] : '';
                $section_11_link_alt_171 = (isset($_POST['section_11_link_alt_171']) && !empty($_POST['section_11_link_alt_171'])) ? $_POST['section_11_link_alt_171'] : '';
                $section_11_image_alt_172 = (isset($_POST['section_11_image_alt_172']) && !empty($_POST['section_11_image_alt_172'])) ? $_POST['section_11_image_alt_172'] : '';
                $section_11_image_alt_173 = (isset($_POST['section_11_image_alt_173']) && !empty($_POST['section_11_image_alt_173'])) ? $_POST['section_11_image_alt_173'] : '';
                $section_11_conteudo_174 = (isset($_POST['section_11_conteudo_174']) && !empty($_POST['section_11_conteudo_174'])) ? $_POST['section_11_conteudo_174'] : '';
                $section_11_link_175 = (isset($_POST['section_11_link_175']) && !empty($_POST['section_11_link_175'])) ? $_POST['section_11_link_175'] : '';
                $section_11_link_alt_175 = (isset($_POST['section_11_link_alt_175']) && !empty($_POST['section_11_link_alt_175'])) ? $_POST['section_11_link_alt_175'] : '';
                $section_11_link_conteudo_175 = (isset($_POST['section_11_link_conteudo_175']) && !empty($_POST['section_11_link_conteudo_175'])) ? $_POST['section_11_link_conteudo_175'] : '';
                $section_11_conteudo_176 = (isset($_POST['section_11_conteudo_176']) && !empty($_POST['section_11_conteudo_176'])) ? $_POST['section_11_conteudo_176'] : '';
                $section_11_image_alt_177 = (isset($_POST['section_11_image_alt_177']) && !empty($_POST['section_11_image_alt_177'])) ? $_POST['section_11_image_alt_177'] : '';
                $section_11_button178 = (isset($_POST['section_11_button178']) && !empty($_POST['section_11_button178'])) ? $_POST['section_11_button178'] : '';
                $section_11_link_179 = (isset($_POST['section_11_link_179']) && !empty($_POST['section_11_link_179'])) ? $_POST['section_11_link_179'] : '';
                $section_11_link_alt_179 = (isset($_POST['section_11_link_alt_179']) && !empty($_POST['section_11_link_alt_179'])) ? $_POST['section_11_link_alt_179'] : '';
                $section_11_link_180 = (isset($_POST['section_11_link_180']) && !empty($_POST['section_11_link_180'])) ? $_POST['section_11_link_180'] : '';
                $section_11_link_alt_180 = (isset($_POST['section_11_link_alt_180']) && !empty($_POST['section_11_link_alt_180'])) ? $_POST['section_11_link_alt_180'] : '';
                $section_11_link_181 = (isset($_POST['section_11_link_181']) && !empty($_POST['section_11_link_181'])) ? $_POST['section_11_link_181'] : '';
                $section_11_link_alt_181 = (isset($_POST['section_11_link_alt_181']) && !empty($_POST['section_11_link_alt_181'])) ? $_POST['section_11_link_alt_181'] : '';
                $section_11_image_alt_182 = (isset($_POST['section_11_image_alt_182']) && !empty($_POST['section_11_image_alt_182'])) ? $_POST['section_11_image_alt_182'] : '';
                $section_11_image_alt_183 = (isset($_POST['section_11_image_alt_183']) && !empty($_POST['section_11_image_alt_183'])) ? $_POST['section_11_image_alt_183'] : '';
                $section_11_conteudo_184 = (isset($_POST['section_11_conteudo_184']) && !empty($_POST['section_11_conteudo_184'])) ? $_POST['section_11_conteudo_184'] : '';
                $section_11_link_185 = (isset($_POST['section_11_link_185']) && !empty($_POST['section_11_link_185'])) ? $_POST['section_11_link_185'] : '';
                $section_11_link_alt_185 = (isset($_POST['section_11_link_alt_185']) && !empty($_POST['section_11_link_alt_185'])) ? $_POST['section_11_link_alt_185'] : '';
                $section_11_link_conteudo_185 = (isset($_POST['section_11_link_conteudo_185']) && !empty($_POST['section_11_link_conteudo_185'])) ? $_POST['section_11_link_conteudo_185'] : '';
                $section_11_conteudo_186 = (isset($_POST['section_11_conteudo_186']) && !empty($_POST['section_11_conteudo_186'])) ? $_POST['section_11_conteudo_186'] : '';
                $section_11_image_alt_187 = (isset($_POST['section_11_image_alt_187']) && !empty($_POST['section_11_image_alt_187'])) ? $_POST['section_11_image_alt_187'] : '';
                $section_11_button188 = (isset($_POST['section_11_button188']) && !empty($_POST['section_11_button188'])) ? $_POST['section_11_button188'] : '';
                $section_11_link_189 = (isset($_POST['section_11_link_189']) && !empty($_POST['section_11_link_189'])) ? $_POST['section_11_link_189'] : '';
                $section_11_link_alt_189 = (isset($_POST['section_11_link_alt_189']) && !empty($_POST['section_11_link_alt_189'])) ? $_POST['section_11_link_alt_189'] : '';
                $section_11_link_190 = (isset($_POST['section_11_link_190']) && !empty($_POST['section_11_link_190'])) ? $_POST['section_11_link_190'] : '';
                $section_11_link_alt_190 = (isset($_POST['section_11_link_alt_190']) && !empty($_POST['section_11_link_alt_190'])) ? $_POST['section_11_link_alt_190'] : '';
                $section_11_link_191 = (isset($_POST['section_11_link_191']) && !empty($_POST['section_11_link_191'])) ? $_POST['section_11_link_191'] : '';
                $section_11_link_alt_191 = (isset($_POST['section_11_link_alt_191']) && !empty($_POST['section_11_link_alt_191'])) ? $_POST['section_11_link_alt_191'] : '';
                $section_11_image_alt_192 = (isset($_POST['section_11_image_alt_192']) && !empty($_POST['section_11_image_alt_192'])) ? $_POST['section_11_image_alt_192'] : '';
                $section_11_image_alt_193 = (isset($_POST['section_11_image_alt_193']) && !empty($_POST['section_11_image_alt_193'])) ? $_POST['section_11_image_alt_193'] : '';
                $section_11_conteudo_194 = (isset($_POST['section_11_conteudo_194']) && !empty($_POST['section_11_conteudo_194'])) ? $_POST['section_11_conteudo_194'] : '';
                $section_11_link_195 = (isset($_POST['section_11_link_195']) && !empty($_POST['section_11_link_195'])) ? $_POST['section_11_link_195'] : '';
                $section_11_link_alt_195 = (isset($_POST['section_11_link_alt_195']) && !empty($_POST['section_11_link_alt_195'])) ? $_POST['section_11_link_alt_195'] : '';
                $section_11_link_conteudo_195 = (isset($_POST['section_11_link_conteudo_195']) && !empty($_POST['section_11_link_conteudo_195'])) ? $_POST['section_11_link_conteudo_195'] : '';
                $section_11_conteudo_196 = (isset($_POST['section_11_conteudo_196']) && !empty($_POST['section_11_conteudo_196'])) ? $_POST['section_11_conteudo_196'] : '';
                $section_12_image_alt_197 = (isset($_POST['section_12_image_alt_197']) && !empty($_POST['section_12_image_alt_197'])) ? $_POST['section_12_image_alt_197'] : '';
                $section_12_image_alt_198 = (isset($_POST['section_12_image_alt_198']) && !empty($_POST['section_12_image_alt_198'])) ? $_POST['section_12_image_alt_198'] : '';
                $section_12_conteudo_199 = (isset($_POST['section_12_conteudo_199']) && !empty($_POST['section_12_conteudo_199'])) ? $_POST['section_12_conteudo_199'] : '';
                $section_12_link_200 = (isset($_POST['section_12_link_200']) && !empty($_POST['section_12_link_200'])) ? $_POST['section_12_link_200'] : '';
                $section_12_link_alt_200 = (isset($_POST['section_12_link_alt_200']) && !empty($_POST['section_12_link_alt_200'])) ? $_POST['section_12_link_alt_200'] : '';
                $section_12_link_conteudo_200 = (isset($_POST['section_12_link_conteudo_200']) && !empty($_POST['section_12_link_conteudo_200'])) ? $_POST['section_12_link_conteudo_200'] : '';
                $section_12_conteudo_201 = (isset($_POST['section_12_conteudo_201']) && !empty($_POST['section_12_conteudo_201'])) ? $_POST['section_12_conteudo_201'] : '';
                $section_12_conteudo_202 = (isset($_POST['section_12_conteudo_202']) && !empty($_POST['section_12_conteudo_202'])) ? $_POST['section_12_conteudo_202'] : '';
                $section_12_image_alt_203 = (isset($_POST['section_12_image_alt_203']) && !empty($_POST['section_12_image_alt_203'])) ? $_POST['section_12_image_alt_203'] : '';
                $section_13_conteudo_204 = (isset($_POST['section_13_conteudo_204']) && !empty($_POST['section_13_conteudo_204'])) ? $_POST['section_13_conteudo_204'] : '';
                $section_13_conteudo_205 = (isset($_POST['section_13_conteudo_205']) && !empty($_POST['section_13_conteudo_205'])) ? $_POST['section_13_conteudo_205'] : '';
                $section_13_conteudo_206 = (isset($_POST['section_13_conteudo_206']) && !empty($_POST['section_13_conteudo_206'])) ? $_POST['section_13_conteudo_206'] : '';
                $section_13_image_alt_207 = (isset($_POST['section_13_image_alt_207']) && !empty($_POST['section_13_image_alt_207'])) ? $_POST['section_13_image_alt_207'] : '';
                $section_13_link_208 = (isset($_POST['section_13_link_208']) && !empty($_POST['section_13_link_208'])) ? $_POST['section_13_link_208'] : '';
                $section_13_link_alt_208 = (isset($_POST['section_13_link_alt_208']) && !empty($_POST['section_13_link_alt_208'])) ? $_POST['section_13_link_alt_208'] : '';
                $section_13_conteudo_209 = (isset($_POST['section_13_conteudo_209']) && !empty($_POST['section_13_conteudo_209'])) ? $_POST['section_13_conteudo_209'] : '';
                $section_13_conteudo_210 = (isset($_POST['section_13_conteudo_210']) && !empty($_POST['section_13_conteudo_210'])) ? $_POST['section_13_conteudo_210'] : '';
                $section_13_conteudo_211 = (isset($_POST['section_13_conteudo_211']) && !empty($_POST['section_13_conteudo_211'])) ? $_POST['section_13_conteudo_211'] : '';
                $section_13_link_212 = (isset($_POST['section_13_link_212']) && !empty($_POST['section_13_link_212'])) ? $_POST['section_13_link_212'] : '';
                $section_13_link_alt_212 = (isset($_POST['section_13_link_alt_212']) && !empty($_POST['section_13_link_alt_212'])) ? $_POST['section_13_link_alt_212'] : '';
                $section_13_link_conteudo_212 = (isset($_POST['section_13_link_conteudo_212']) && !empty($_POST['section_13_link_conteudo_212'])) ? $_POST['section_13_link_conteudo_212'] : '';
                $section_13_image_alt_213 = (isset($_POST['section_13_image_alt_213']) && !empty($_POST['section_13_image_alt_213'])) ? $_POST['section_13_image_alt_213'] : '';
                $section_13_link_214 = (isset($_POST['section_13_link_214']) && !empty($_POST['section_13_link_214'])) ? $_POST['section_13_link_214'] : '';
                $section_13_link_alt_214 = (isset($_POST['section_13_link_alt_214']) && !empty($_POST['section_13_link_alt_214'])) ? $_POST['section_13_link_alt_214'] : '';
                $section_13_conteudo_215 = (isset($_POST['section_13_conteudo_215']) && !empty($_POST['section_13_conteudo_215'])) ? $_POST['section_13_conteudo_215'] : '';
                $section_13_conteudo_216 = (isset($_POST['section_13_conteudo_216']) && !empty($_POST['section_13_conteudo_216'])) ? $_POST['section_13_conteudo_216'] : '';
                $section_13_conteudo_217 = (isset($_POST['section_13_conteudo_217']) && !empty($_POST['section_13_conteudo_217'])) ? $_POST['section_13_conteudo_217'] : '';
                $section_13_link_218 = (isset($_POST['section_13_link_218']) && !empty($_POST['section_13_link_218'])) ? $_POST['section_13_link_218'] : '';
                $section_13_link_alt_218 = (isset($_POST['section_13_link_alt_218']) && !empty($_POST['section_13_link_alt_218'])) ? $_POST['section_13_link_alt_218'] : '';
                $section_13_link_conteudo_218 = (isset($_POST['section_13_link_conteudo_218']) && !empty($_POST['section_13_link_conteudo_218'])) ? $_POST['section_13_link_conteudo_218'] : '';
                $section_13_image_alt_219 = (isset($_POST['section_13_image_alt_219']) && !empty($_POST['section_13_image_alt_219'])) ? $_POST['section_13_image_alt_219'] : '';
                $section_13_link_220 = (isset($_POST['section_13_link_220']) && !empty($_POST['section_13_link_220'])) ? $_POST['section_13_link_220'] : '';
                $section_13_link_alt_220 = (isset($_POST['section_13_link_alt_220']) && !empty($_POST['section_13_link_alt_220'])) ? $_POST['section_13_link_alt_220'] : '';
                $section_13_conteudo_221 = (isset($_POST['section_13_conteudo_221']) && !empty($_POST['section_13_conteudo_221'])) ? $_POST['section_13_conteudo_221'] : '';
                $section_13_conteudo_222 = (isset($_POST['section_13_conteudo_222']) && !empty($_POST['section_13_conteudo_222'])) ? $_POST['section_13_conteudo_222'] : '';
                $section_13_conteudo_223 = (isset($_POST['section_13_conteudo_223']) && !empty($_POST['section_13_conteudo_223'])) ? $_POST['section_13_conteudo_223'] : '';
                $section_13_link_224 = (isset($_POST['section_13_link_224']) && !empty($_POST['section_13_link_224'])) ? $_POST['section_13_link_224'] : '';
                $section_13_link_alt_224 = (isset($_POST['section_13_link_alt_224']) && !empty($_POST['section_13_link_alt_224'])) ? $_POST['section_13_link_alt_224'] : '';
                $section_13_link_conteudo_224 = (isset($_POST['section_13_link_conteudo_224']) && !empty($_POST['section_13_link_conteudo_224'])) ? $_POST['section_13_link_conteudo_224'] : '';
                $id = filter_input(INPUT_POST, 'id');
                if (isset($_POST['pagina_individual']) && !empty($_POST['pagina_individual'])) {
                    $pagina_individual = $_POST['pagina_individual'];
                } else {
                    $pagina_individual = gerarTituloSEO($section_1_link_1);
                }
                $maximo = 180000;
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
                if ($_FILES["section_1_img_6"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_1_img_6"]["size"] / 1000;
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
                if ($_FILES["section_4_img_59"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_4_img_59"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_4_img_66"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_4_img_66"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_7_img_111"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_7_img_111"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_7_img_112"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_7_img_112"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_7_img_113"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_7_img_113"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_9_img_133"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_9_img_133"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_9_img_134"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_9_img_134"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_9_img_138"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_9_img_138"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_9_img_139"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_9_img_139"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_9_img_143"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_9_img_143"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_9_img_144"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_9_img_144"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_9_img_148"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_9_img_148"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_9_img_149"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_9_img_149"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_9_img_153"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_9_img_153"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_9_img_154"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_9_img_154"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_10_img_158"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_10_img_158"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_10_img_159"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_10_img_159"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_10_img_160"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_10_img_160"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_10_img_161"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_10_img_161"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_10_img_162"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_10_img_162"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_10_img_163"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_10_img_163"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_11_img_167"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_11_img_167"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_11_img_172"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_11_img_172"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_11_img_173"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_11_img_173"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_11_img_177"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_11_img_177"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_11_img_182"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_11_img_182"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_11_img_183"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_11_img_183"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_11_img_187"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_11_img_187"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_11_img_192"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_11_img_192"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_11_img_193"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_11_img_193"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_12_img_197"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_12_img_197"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_12_img_198"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_12_img_198"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_12_img_203"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_12_img_203"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_13_img_207"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_13_img_207"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_13_img_213"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_13_img_213"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_13_img_219"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_13_img_219"]["size"] / 1000;
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
                    $sql = "UPDATE tbl_home SET meta_title=?, meta_keywords=?, meta_description=?, section_1_link_1=?, section_1_link_alt_1=?, section_1_link_conteudo_1=?, section_1_button2=?, section_1_button3=?, section_1_img_4=?, section_1_image_alt_4=?, section_1_img_5=?, section_1_image_alt_5=?, section_1_img_6=?, section_1_image_alt_6=?, section_1_conteudo_7=?, section_1_conteudo_8=?, section_1_link_9=?, section_1_link_alt_9=?, section_1_link_conteudo_9=?, section_1_conteudo_10=?, section_1_img_11=?, section_1_image_alt_11=?, section_1_conteudo_12=?, section_1_conteudo_13=?, section_1_link_14=?, section_1_link_alt_14=?, section_1_link_conteudo_14=?, section_1_conteudo_15=?, section_1_img_16=?, section_1_image_alt_16=?, section_1_conteudo_17=?, section_1_conteudo_18=?, section_1_link_19=?, section_1_link_alt_19=?, section_1_link_conteudo_19=?, section_1_conteudo_20=?, section_2_conteudo_21=?, section_2_conteudo_22=?, section_2_conteudo_23=?, section_2_conteudo_24=?, section_2_conteudo_25=?, section_2_conteudo_26=?, section_2_conteudo_27=?, section_2_conteudo_28=?, section_3_img_29=?, section_3_image_alt_29=?, section_3_conteudo_30=?, section_3_img_31=?, section_3_image_alt_31=?, section_3_img_32=?, section_3_image_alt_32=?, section_3_img_33=?, section_3_image_alt_33=?, section_3_img_34=?, section_3_image_alt_34=?, section_3_conteudo_35=?, section_3_conteudo_36=?, section_3_conteudo_37=?, section_3_conteudo_38=?, section_3_img_39=?, section_3_image_alt_39=?, section_3_conteudo_40=?, section_3_conteudo_41=?, section_3_conteudo_42=?, section_3_conteudo_43=?, section_3_link_44=?, section_3_link_alt_44=?, section_3_link_conteudo_44=?, section_3_conteudo_45=?, section_3_img_46=?, section_3_image_alt_46=?, section_4_img_47=?, section_4_image_alt_47=?, section_4_img_48=?, section_4_image_alt_48=?, section_4_conteudo_49=?, section_4_conteudo_50=?, section_4_conteudo_51=?, section_4_img_52=?, section_4_image_alt_52=?, section_4_conteudo_53=?, section_4_conteudo_54=?, section_4_link_55=?, section_4_link_alt_55=?, section_4_link_conteudo_55=?, section_4_conteudo_56=?, section_4_link_57=?, section_4_link_alt_57=?, section_4_link_conteudo_57=?, section_4_conteudo_58=?, section_4_img_59=?, section_4_image_alt_59=?, section_4_conteudo_60=?, section_4_conteudo_61=?, section_4_link_62=?, section_4_link_alt_62=?, section_4_link_conteudo_62=?, section_4_conteudo_63=?, section_4_link_64=?, section_4_link_alt_64=?, section_4_link_conteudo_64=?, section_4_conteudo_65=?, section_4_img_66=?, section_4_image_alt_66=?, section_4_conteudo_67=?, section_4_conteudo_68=?, section_4_link_69=?, section_4_link_alt_69=?, section_4_link_conteudo_69=?, section_4_conteudo_70=?, section_4_link_71=?, section_4_link_alt_71=?, section_4_link_conteudo_71=?, section_4_conteudo_72=?, section_5_conteudo_73=?, section_5_link_74=?, section_5_link_alt_74=?, section_5_link_conteudo_74=?, section_5_conteudo_75=?, section_5_conteudo_76=?, section_5_conteudo_77=?, section_5_conteudo_78=?, section_5_conteudo_79=?, section_5_conteudo_80=?, section_5_conteudo_81=?, section_5_conteudo_82=?, section_5_conteudo_83=?, section_5_conteudo_84=?, section_5_conteudo_85=?, section_5_conteudo_86=?, section_6_conteudo_87=?, section_6_conteudo_88=?, section_6_conteudo_89=?, section_6_conteudo_90=?, section_6_conteudo_91=?, section_6_link_92=?, section_6_link_alt_92=?, section_6_link_conteudo_92=?, section_6_conteudo_93=?, section_6_conteudo_94=?, section_6_conteudo_95=?, section_6_conteudo_96=?, section_6_link_97=?, section_6_link_alt_97=?, section_6_link_conteudo_97=?, section_6_conteudo_98=?, section_6_conteudo_99=?, section_6_conteudo_100=?, section_6_conteudo_101=?, section_6_link_102=?, section_6_link_alt_102=?, section_6_link_conteudo_102=?, section_6_conteudo_103=?, section_6_conteudo_104=?, section_6_conteudo_105=?, section_6_conteudo_106=?, section_6_link_107=?, section_6_link_alt_107=?, section_6_link_conteudo_107=?, section_6_conteudo_108=?, section_6_conteudo_109=?, section_7_link_110=?, section_7_link_alt_110=?, section_7_img_111=?, section_7_image_alt_111=?, section_7_img_112=?, section_7_image_alt_112=?, section_7_img_113=?, section_7_image_alt_113=?, section_7_conteudo_114=?, section_7_conteudo_115=?, section_7_conteudo_116=?, section_7_conteudo_117=?, section_7_link_118=?, section_7_link_alt_118=?, section_7_link_conteudo_118=?, section_7_conteudo_119=?, section_7_link_120=?, section_7_link_alt_120=?, section_7_link_conteudo_120=?, section_7_conteudo_121=?, section_8_conteudo_122=?, section_8_conteudo_123=?, section_8_button124=?, section_8_conteudo_125=?, section_8_button126=?, section_8_conteudo_127=?, section_8_button128=?, section_8_conteudo_129=?, section_8_button130=?, section_8_conteudo_131=?, section_8_button132=?, section_9_img_133=?, section_9_image_alt_133=?, section_9_img_134=?, section_9_image_alt_134=?, section_9_conteudo_135=?, section_9_conteudo_136=?, section_9_conteudo_137=?, section_9_img_138=?, section_9_image_alt_138=?, section_9_img_139=?, section_9_image_alt_139=?, section_9_conteudo_140=?, section_9_conteudo_141=?, section_9_conteudo_142=?, section_9_img_143=?, section_9_image_alt_143=?, section_9_img_144=?, section_9_image_alt_144=?, section_9_conteudo_145=?, section_9_conteudo_146=?, section_9_conteudo_147=?, section_9_img_148=?, section_9_image_alt_148=?, section_9_img_149=?, section_9_image_alt_149=?, section_9_conteudo_150=?, section_9_conteudo_151=?, section_9_conteudo_152=?, section_9_img_153=?, section_9_image_alt_153=?, section_9_img_154=?, section_9_image_alt_154=?, section_9_conteudo_155=?, section_9_conteudo_156=?, section_9_conteudo_157=?, section_10_img_158=?, section_10_image_alt_158=?, section_10_img_159=?, section_10_image_alt_159=?, section_10_img_160=?, section_10_image_alt_160=?, section_10_img_161=?, section_10_image_alt_161=?, section_10_img_162=?, section_10_image_alt_162=?, section_10_img_163=?, section_10_image_alt_163=?, section_11_conteudo_164=?, section_11_conteudo_165=?, section_11_conteudo_166=?, section_11_img_167=?, section_11_image_alt_167=?, section_11_button168=?, section_11_link_169=?, section_11_link_alt_169=?, section_11_link_170=?, section_11_link_alt_170=?, section_11_link_171=?, section_11_link_alt_171=?, section_11_img_172=?, section_11_image_alt_172=?, section_11_img_173=?, section_11_image_alt_173=?, section_11_conteudo_174=?, section_11_link_175=?, section_11_link_alt_175=?, section_11_link_conteudo_175=?, section_11_conteudo_176=?, section_11_img_177=?, section_11_image_alt_177=?, section_11_button178=?, section_11_link_179=?, section_11_link_alt_179=?, section_11_link_180=?, section_11_link_alt_180=?, section_11_link_181=?, section_11_link_alt_181=?, section_11_img_182=?, section_11_image_alt_182=?, section_11_img_183=?, section_11_image_alt_183=?, section_11_conteudo_184=?, section_11_link_185=?, section_11_link_alt_185=?, section_11_link_conteudo_185=?, section_11_conteudo_186=?, section_11_img_187=?, section_11_image_alt_187=?, section_11_button188=?, section_11_link_189=?, section_11_link_alt_189=?, section_11_link_190=?, section_11_link_alt_190=?, section_11_link_191=?, section_11_link_alt_191=?, section_11_img_192=?, section_11_image_alt_192=?, section_11_img_193=?, section_11_image_alt_193=?, section_11_conteudo_194=?, section_11_link_195=?, section_11_link_alt_195=?, section_11_link_conteudo_195=?, section_11_conteudo_196=?, section_12_img_197=?, section_12_image_alt_197=?, section_12_img_198=?, section_12_image_alt_198=?, section_12_conteudo_199=?, section_12_link_200=?, section_12_link_alt_200=?, section_12_link_conteudo_200=?, section_12_conteudo_201=?, section_12_conteudo_202=?, section_12_img_203=?, section_12_image_alt_203=?, section_13_conteudo_204=?, section_13_conteudo_205=?, section_13_conteudo_206=?, section_13_img_207=?, section_13_image_alt_207=?, section_13_link_208=?, section_13_link_alt_208=?, section_13_conteudo_209=?, section_13_conteudo_210=?, section_13_conteudo_211=?, section_13_link_212=?, section_13_link_alt_212=?, section_13_link_conteudo_212=?, section_13_img_213=?, section_13_image_alt_213=?, section_13_link_214=?, section_13_link_alt_214=?, section_13_conteudo_215=?, section_13_conteudo_216=?, section_13_conteudo_217=?, section_13_link_218=?, section_13_link_alt_218=?, section_13_link_conteudo_218=?, section_13_img_219=?, section_13_image_alt_219=?, section_13_link_220=?, section_13_link_alt_220=?, section_13_conteudo_221=?, section_13_conteudo_222=?, section_13_conteudo_223=?, section_13_link_224=?, section_13_link_alt_224=?, section_13_link_conteudo_224=? WHERE id=?";
                    $stm = $this->pdo->prepare($sql);
                    $stm->bindValue(1, $meta_title);
                    $stm->bindValue(2, $meta_keywords);
                    $stm->bindValue(3, $meta_description);
                    $stm->bindValue(4, $section_1_link_1);
                    $stm->bindValue(5, $section_1_link_alt_1);
                    $stm->bindValue(6, $section_1_link_conteudo_1);
                    $stm->bindValue(7, $section_1_button2);
                    $stm->bindValue(8, $section_1_button3);
                    $stm->bindValue(9, upload("section_1_img_4", $pastaArquivos, "N"));
                    $stm->bindValue(10, $section_1_image_alt_4);
                    $stm->bindValue(11, upload("section_1_img_5", $pastaArquivos, "N"));
                    $stm->bindValue(12, $section_1_image_alt_5);
                    $stm->bindValue(13, upload("section_1_img_6", $pastaArquivos, "N"));
                    $stm->bindValue(14, $section_1_image_alt_6);
                    $stm->bindValue(15, $section_1_conteudo_7);
                    $stm->bindValue(16, $section_1_conteudo_8);
                    $stm->bindValue(17, $section_1_link_9);
                    $stm->bindValue(18, $section_1_link_alt_9);
                    $stm->bindValue(19, $section_1_link_conteudo_9);
                    $stm->bindValue(20, $section_1_conteudo_10);
                    $stm->bindValue(21, upload("section_1_img_11", $pastaArquivos, "N"));
                    $stm->bindValue(22, $section_1_image_alt_11);
                    $stm->bindValue(23, $section_1_conteudo_12);
                    $stm->bindValue(24, $section_1_conteudo_13);
                    $stm->bindValue(25, $section_1_link_14);
                    $stm->bindValue(26, $section_1_link_alt_14);
                    $stm->bindValue(27, $section_1_link_conteudo_14);
                    $stm->bindValue(28, $section_1_conteudo_15);
                    $stm->bindValue(29, upload("section_1_img_16", $pastaArquivos, "N"));
                    $stm->bindValue(30, $section_1_image_alt_16);
                    $stm->bindValue(31, $section_1_conteudo_17);
                    $stm->bindValue(32, $section_1_conteudo_18);
                    $stm->bindValue(33, $section_1_link_19);
                    $stm->bindValue(34, $section_1_link_alt_19);
                    $stm->bindValue(35, $section_1_link_conteudo_19);
                    $stm->bindValue(36, $section_1_conteudo_20);
                    $stm->bindValue(37, $section_2_conteudo_21);
                    $stm->bindValue(38, $section_2_conteudo_22);
                    $stm->bindValue(39, $section_2_conteudo_23);
                    $stm->bindValue(40, $section_2_conteudo_24);
                    $stm->bindValue(41, $section_2_conteudo_25);
                    $stm->bindValue(42, $section_2_conteudo_26);
                    $stm->bindValue(43, $section_2_conteudo_27);
                    $stm->bindValue(44, $section_2_conteudo_28);
                    $stm->bindValue(45, upload("section_3_img_29", $pastaArquivos, "N"));
                    $stm->bindValue(46, $section_3_image_alt_29);
                    $stm->bindValue(47, $section_3_conteudo_30);
                    $stm->bindValue(48, upload("section_3_img_31", $pastaArquivos, "N"));
                    $stm->bindValue(49, $section_3_image_alt_31);
                    $stm->bindValue(50, upload("section_3_img_32", $pastaArquivos, "N"));
                    $stm->bindValue(51, $section_3_image_alt_32);
                    $stm->bindValue(52, upload("section_3_img_33", $pastaArquivos, "N"));
                    $stm->bindValue(53, $section_3_image_alt_33);
                    $stm->bindValue(54, upload("section_3_img_34", $pastaArquivos, "N"));
                    $stm->bindValue(55, $section_3_image_alt_34);
                    $stm->bindValue(56, $section_3_conteudo_35);
                    $stm->bindValue(57, $section_3_conteudo_36);
                    $stm->bindValue(58, $section_3_conteudo_37);
                    $stm->bindValue(59, $section_3_conteudo_38);
                    $stm->bindValue(60, upload("section_3_img_39", $pastaArquivos, "N"));
                    $stm->bindValue(61, $section_3_image_alt_39);
                    $stm->bindValue(62, $section_3_conteudo_40);
                    $stm->bindValue(63, $section_3_conteudo_41);
                    $stm->bindValue(64, $section_3_conteudo_42);
                    $stm->bindValue(65, $section_3_conteudo_43);
                    $stm->bindValue(66, $section_3_link_44);
                    $stm->bindValue(67, $section_3_link_alt_44);
                    $stm->bindValue(68, $section_3_link_conteudo_44);
                    $stm->bindValue(69, $section_3_conteudo_45);
                    $stm->bindValue(70, upload("section_3_img_46", $pastaArquivos, "N"));
                    $stm->bindValue(71, $section_3_image_alt_46);
                    $stm->bindValue(72, upload("section_4_img_47", $pastaArquivos, "N"));
                    $stm->bindValue(73, $section_4_image_alt_47);
                    $stm->bindValue(74, upload("section_4_img_48", $pastaArquivos, "N"));
                    $stm->bindValue(75, $section_4_image_alt_48);
                    $stm->bindValue(76, $section_4_conteudo_49);
                    $stm->bindValue(77, $section_4_conteudo_50);
                    $stm->bindValue(78, $section_4_conteudo_51);
                    $stm->bindValue(79, upload("section_4_img_52", $pastaArquivos, "N"));
                    $stm->bindValue(80, $section_4_image_alt_52);
                    $stm->bindValue(81, $section_4_conteudo_53);
                    $stm->bindValue(82, $section_4_conteudo_54);
                    $stm->bindValue(83, $section_4_link_55);
                    $stm->bindValue(84, $section_4_link_alt_55);
                    $stm->bindValue(85, $section_4_link_conteudo_55);
                    $stm->bindValue(86, $section_4_conteudo_56);
                    $stm->bindValue(87, $section_4_link_57);
                    $stm->bindValue(88, $section_4_link_alt_57);
                    $stm->bindValue(89, $section_4_link_conteudo_57);
                    $stm->bindValue(90, $section_4_conteudo_58);
                    $stm->bindValue(91, upload("section_4_img_59", $pastaArquivos, "N"));
                    $stm->bindValue(92, $section_4_image_alt_59);
                    $stm->bindValue(93, $section_4_conteudo_60);
                    $stm->bindValue(94, $section_4_conteudo_61);
                    $stm->bindValue(95, $section_4_link_62);
                    $stm->bindValue(96, $section_4_link_alt_62);
                    $stm->bindValue(97, $section_4_link_conteudo_62);
                    $stm->bindValue(98, $section_4_conteudo_63);
                    $stm->bindValue(99, $section_4_link_64);
                    $stm->bindValue(100, $section_4_link_alt_64);
                    $stm->bindValue(101, $section_4_link_conteudo_64);
                    $stm->bindValue(102, $section_4_conteudo_65);
                    $stm->bindValue(103, upload("section_4_img_66", $pastaArquivos, "N"));
                    $stm->bindValue(104, $section_4_image_alt_66);
                    $stm->bindValue(105, $section_4_conteudo_67);
                    $stm->bindValue(106, $section_4_conteudo_68);
                    $stm->bindValue(107, $section_4_link_69);
                    $stm->bindValue(108, $section_4_link_alt_69);
                    $stm->bindValue(109, $section_4_link_conteudo_69);
                    $stm->bindValue(110, $section_4_conteudo_70);
                    $stm->bindValue(111, $section_4_link_71);
                    $stm->bindValue(112, $section_4_link_alt_71);
                    $stm->bindValue(113, $section_4_link_conteudo_71);
                    $stm->bindValue(114, $section_4_conteudo_72);
                    $stm->bindValue(115, $section_5_conteudo_73);
                    $stm->bindValue(116, $section_5_link_74);
                    $stm->bindValue(117, $section_5_link_alt_74);
                    $stm->bindValue(118, $section_5_link_conteudo_74);
                    $stm->bindValue(119, $section_5_conteudo_75);
                    $stm->bindValue(120, $section_5_conteudo_76);
                    $stm->bindValue(121, $section_5_conteudo_77);
                    $stm->bindValue(122, $section_5_conteudo_78);
                    $stm->bindValue(123, $section_5_conteudo_79);
                    $stm->bindValue(124, $section_5_conteudo_80);
                    $stm->bindValue(125, $section_5_conteudo_81);
                    $stm->bindValue(126, $section_5_conteudo_82);
                    $stm->bindValue(127, $section_5_conteudo_83);
                    $stm->bindValue(128, $section_5_conteudo_84);
                    $stm->bindValue(129, $section_5_conteudo_85);
                    $stm->bindValue(130, $section_5_conteudo_86);
                    $stm->bindValue(131, $section_6_conteudo_87);
                    $stm->bindValue(132, $section_6_conteudo_88);
                    $stm->bindValue(133, $section_6_conteudo_89);
                    $stm->bindValue(134, $section_6_conteudo_90);
                    $stm->bindValue(135, $section_6_conteudo_91);
                    $stm->bindValue(136, $section_6_link_92);
                    $stm->bindValue(137, $section_6_link_alt_92);
                    $stm->bindValue(138, $section_6_link_conteudo_92);
                    $stm->bindValue(139, $section_6_conteudo_93);
                    $stm->bindValue(140, $section_6_conteudo_94);
                    $stm->bindValue(141, $section_6_conteudo_95);
                    $stm->bindValue(142, $section_6_conteudo_96);
                    $stm->bindValue(143, $section_6_link_97);
                    $stm->bindValue(144, $section_6_link_alt_97);
                    $stm->bindValue(145, $section_6_link_conteudo_97);
                    $stm->bindValue(146, $section_6_conteudo_98);
                    $stm->bindValue(147, $section_6_conteudo_99);
                    $stm->bindValue(148, $section_6_conteudo_100);
                    $stm->bindValue(149, $section_6_conteudo_101);
                    $stm->bindValue(150, $section_6_link_102);
                    $stm->bindValue(151, $section_6_link_alt_102);
                    $stm->bindValue(152, $section_6_link_conteudo_102);
                    $stm->bindValue(153, $section_6_conteudo_103);
                    $stm->bindValue(154, $section_6_conteudo_104);
                    $stm->bindValue(155, $section_6_conteudo_105);
                    $stm->bindValue(156, $section_6_conteudo_106);
                    $stm->bindValue(157, $section_6_link_107);
                    $stm->bindValue(158, $section_6_link_alt_107);
                    $stm->bindValue(159, $section_6_link_conteudo_107);
                    $stm->bindValue(160, $section_6_conteudo_108);
                    $stm->bindValue(161, $section_6_conteudo_109);
                    $stm->bindValue(162, $section_7_link_110);
                    $stm->bindValue(163, $section_7_link_alt_110);
                    $stm->bindValue(164, upload("section_7_img_111", $pastaArquivos, "N"));
                    $stm->bindValue(165, $section_7_image_alt_111);
                    $stm->bindValue(166, upload("section_7_img_112", $pastaArquivos, "N"));
                    $stm->bindValue(167, $section_7_image_alt_112);
                    $stm->bindValue(168, upload("section_7_img_113", $pastaArquivos, "N"));
                    $stm->bindValue(169, $section_7_image_alt_113);
                    $stm->bindValue(170, $section_7_conteudo_114);
                    $stm->bindValue(171, $section_7_conteudo_115);
                    $stm->bindValue(172, $section_7_conteudo_116);
                    $stm->bindValue(173, $section_7_conteudo_117);
                    $stm->bindValue(174, $section_7_link_118);
                    $stm->bindValue(175, $section_7_link_alt_118);
                    $stm->bindValue(176, $section_7_link_conteudo_118);
                    $stm->bindValue(177, $section_7_conteudo_119);
                    $stm->bindValue(178, $section_7_link_120);
                    $stm->bindValue(179, $section_7_link_alt_120);
                    $stm->bindValue(180, $section_7_link_conteudo_120);
                    $stm->bindValue(181, $section_7_conteudo_121);
                    $stm->bindValue(182, $section_8_conteudo_122);
                    $stm->bindValue(183, $section_8_conteudo_123);
                    $stm->bindValue(184, $section_8_button124);
                    $stm->bindValue(185, $section_8_conteudo_125);
                    $stm->bindValue(186, $section_8_button126);
                    $stm->bindValue(187, $section_8_conteudo_127);
                    $stm->bindValue(188, $section_8_button128);
                    $stm->bindValue(189, $section_8_conteudo_129);
                    $stm->bindValue(190, $section_8_button130);
                    $stm->bindValue(191, $section_8_conteudo_131);
                    $stm->bindValue(192, $section_8_button132);
                    $stm->bindValue(193, upload("section_9_img_133", $pastaArquivos, "N"));
                    $stm->bindValue(194, $section_9_image_alt_133);
                    $stm->bindValue(195, upload("section_9_img_134", $pastaArquivos, "N"));
                    $stm->bindValue(196, $section_9_image_alt_134);
                    $stm->bindValue(197, $section_9_conteudo_135);
                    $stm->bindValue(198, $section_9_conteudo_136);
                    $stm->bindValue(199, $section_9_conteudo_137);
                    $stm->bindValue(200, upload("section_9_img_138", $pastaArquivos, "N"));
                    $stm->bindValue(201, $section_9_image_alt_138);
                    $stm->bindValue(202, upload("section_9_img_139", $pastaArquivos, "N"));
                    $stm->bindValue(203, $section_9_image_alt_139);
                    $stm->bindValue(204, $section_9_conteudo_140);
                    $stm->bindValue(205, $section_9_conteudo_141);
                    $stm->bindValue(206, $section_9_conteudo_142);
                    $stm->bindValue(207, upload("section_9_img_143", $pastaArquivos, "N"));
                    $stm->bindValue(208, $section_9_image_alt_143);
                    $stm->bindValue(209, upload("section_9_img_144", $pastaArquivos, "N"));
                    $stm->bindValue(210, $section_9_image_alt_144);
                    $stm->bindValue(211, $section_9_conteudo_145);
                    $stm->bindValue(212, $section_9_conteudo_146);
                    $stm->bindValue(213, $section_9_conteudo_147);
                    $stm->bindValue(214, upload("section_9_img_148", $pastaArquivos, "N"));
                    $stm->bindValue(215, $section_9_image_alt_148);
                    $stm->bindValue(216, upload("section_9_img_149", $pastaArquivos, "N"));
                    $stm->bindValue(217, $section_9_image_alt_149);
                    $stm->bindValue(218, $section_9_conteudo_150);
                    $stm->bindValue(219, $section_9_conteudo_151);
                    $stm->bindValue(220, $section_9_conteudo_152);
                    $stm->bindValue(221, upload("section_9_img_153", $pastaArquivos, "N"));
                    $stm->bindValue(222, $section_9_image_alt_153);
                    $stm->bindValue(223, upload("section_9_img_154", $pastaArquivos, "N"));
                    $stm->bindValue(224, $section_9_image_alt_154);
                    $stm->bindValue(225, $section_9_conteudo_155);
                    $stm->bindValue(226, $section_9_conteudo_156);
                    $stm->bindValue(227, $section_9_conteudo_157);
                    $stm->bindValue(228, upload("section_10_img_158", $pastaArquivos, "N"));
                    $stm->bindValue(229, $section_10_image_alt_158);
                    $stm->bindValue(230, upload("section_10_img_159", $pastaArquivos, "N"));
                    $stm->bindValue(231, $section_10_image_alt_159);
                    $stm->bindValue(232, upload("section_10_img_160", $pastaArquivos, "N"));
                    $stm->bindValue(233, $section_10_image_alt_160);
                    $stm->bindValue(234, upload("section_10_img_161", $pastaArquivos, "N"));
                    $stm->bindValue(235, $section_10_image_alt_161);
                    $stm->bindValue(236, upload("section_10_img_162", $pastaArquivos, "N"));
                    $stm->bindValue(237, $section_10_image_alt_162);
                    $stm->bindValue(238, upload("section_10_img_163", $pastaArquivos, "N"));
                    $stm->bindValue(239, $section_10_image_alt_163);
                    $stm->bindValue(240, $section_11_conteudo_164);
                    $stm->bindValue(241, $section_11_conteudo_165);
                    $stm->bindValue(242, $section_11_conteudo_166);
                    $stm->bindValue(243, upload("section_11_img_167", $pastaArquivos, "N"));
                    $stm->bindValue(244, $section_11_image_alt_167);
                    $stm->bindValue(245, $section_11_button168);
                    $stm->bindValue(246, $section_11_link_169);
                    $stm->bindValue(247, $section_11_link_alt_169);
                    $stm->bindValue(248, $section_11_link_170);
                    $stm->bindValue(249, $section_11_link_alt_170);
                    $stm->bindValue(250, $section_11_link_171);
                    $stm->bindValue(251, $section_11_link_alt_171);
                    $stm->bindValue(252, upload("section_11_img_172", $pastaArquivos, "N"));
                    $stm->bindValue(253, $section_11_image_alt_172);
                    $stm->bindValue(254, upload("section_11_img_173", $pastaArquivos, "N"));
                    $stm->bindValue(255, $section_11_image_alt_173);
                    $stm->bindValue(256, $section_11_conteudo_174);
                    $stm->bindValue(257, $section_11_link_175);
                    $stm->bindValue(258, $section_11_link_alt_175);
                    $stm->bindValue(259, $section_11_link_conteudo_175);
                    $stm->bindValue(260, $section_11_conteudo_176);
                    $stm->bindValue(261, upload("section_11_img_177", $pastaArquivos, "N"));
                    $stm->bindValue(262, $section_11_image_alt_177);
                    $stm->bindValue(263, $section_11_button178);
                    $stm->bindValue(264, $section_11_link_179);
                    $stm->bindValue(265, $section_11_link_alt_179);
                    $stm->bindValue(266, $section_11_link_180);
                    $stm->bindValue(267, $section_11_link_alt_180);
                    $stm->bindValue(268, $section_11_link_181);
                    $stm->bindValue(269, $section_11_link_alt_181);
                    $stm->bindValue(270, upload("section_11_img_182", $pastaArquivos, "N"));
                    $stm->bindValue(271, $section_11_image_alt_182);
                    $stm->bindValue(272, upload("section_11_img_183", $pastaArquivos, "N"));
                    $stm->bindValue(273, $section_11_image_alt_183);
                    $stm->bindValue(274, $section_11_conteudo_184);
                    $stm->bindValue(275, $section_11_link_185);
                    $stm->bindValue(276, $section_11_link_alt_185);
                    $stm->bindValue(277, $section_11_link_conteudo_185);
                    $stm->bindValue(278, $section_11_conteudo_186);
                    $stm->bindValue(279, upload("section_11_img_187", $pastaArquivos, "N"));
                    $stm->bindValue(280, $section_11_image_alt_187);
                    $stm->bindValue(281, $section_11_button188);
                    $stm->bindValue(282, $section_11_link_189);
                    $stm->bindValue(283, $section_11_link_alt_189);
                    $stm->bindValue(284, $section_11_link_190);
                    $stm->bindValue(285, $section_11_link_alt_190);
                    $stm->bindValue(286, $section_11_link_191);
                    $stm->bindValue(287, $section_11_link_alt_191);
                    $stm->bindValue(288, upload("section_11_img_192", $pastaArquivos, "N"));
                    $stm->bindValue(289, $section_11_image_alt_192);
                    $stm->bindValue(290, upload("section_11_img_193", $pastaArquivos, "N"));
                    $stm->bindValue(291, $section_11_image_alt_193);
                    $stm->bindValue(292, $section_11_conteudo_194);
                    $stm->bindValue(293, $section_11_link_195);
                    $stm->bindValue(294, $section_11_link_alt_195);
                    $stm->bindValue(295, $section_11_link_conteudo_195);
                    $stm->bindValue(296, $section_11_conteudo_196);
                    $stm->bindValue(297, upload("section_12_img_197", $pastaArquivos, "N"));
                    $stm->bindValue(298, $section_12_image_alt_197);
                    $stm->bindValue(299, upload("section_12_img_198", $pastaArquivos, "N"));
                    $stm->bindValue(300, $section_12_image_alt_198);
                    $stm->bindValue(301, $section_12_conteudo_199);
                    $stm->bindValue(302, $section_12_link_200);
                    $stm->bindValue(303, $section_12_link_alt_200);
                    $stm->bindValue(304, $section_12_link_conteudo_200);
                    $stm->bindValue(305, $section_12_conteudo_201);
                    $stm->bindValue(306, $section_12_conteudo_202);
                    $stm->bindValue(307, upload("section_12_img_203", $pastaArquivos, "N"));
                    $stm->bindValue(308, $section_12_image_alt_203);
                    $stm->bindValue(309, $section_13_conteudo_204);
                    $stm->bindValue(310, $section_13_conteudo_205);
                    $stm->bindValue(311, $section_13_conteudo_206);
                    $stm->bindValue(312, upload("section_13_img_207", $pastaArquivos, "N"));
                    $stm->bindValue(313, $section_13_image_alt_207);
                    $stm->bindValue(314, $section_13_link_208);
                    $stm->bindValue(315, $section_13_link_alt_208);
                    $stm->bindValue(316, $section_13_conteudo_209);
                    $stm->bindValue(317, $section_13_conteudo_210);
                    $stm->bindValue(318, $section_13_conteudo_211);
                    $stm->bindValue(319, $section_13_link_212);
                    $stm->bindValue(320, $section_13_link_alt_212);
                    $stm->bindValue(321, $section_13_link_conteudo_212);
                    $stm->bindValue(322, upload("section_13_img_213", $pastaArquivos, "N"));
                    $stm->bindValue(323, $section_13_image_alt_213);
                    $stm->bindValue(324, $section_13_link_214);
                    $stm->bindValue(325, $section_13_link_alt_214);
                    $stm->bindValue(326, $section_13_conteudo_215);
                    $stm->bindValue(327, $section_13_conteudo_216);
                    $stm->bindValue(328, $section_13_conteudo_217);
                    $stm->bindValue(329, $section_13_link_218);
                    $stm->bindValue(330, $section_13_link_alt_218);
                    $stm->bindValue(331, $section_13_link_conteudo_218);
                    $stm->bindValue(332, upload("section_13_img_219", $pastaArquivos, "N"));
                    $stm->bindValue(333, $section_13_image_alt_219);
                    $stm->bindValue(334, $section_13_link_220);
                    $stm->bindValue(335, $section_13_link_alt_220);
                    $stm->bindValue(336, $section_13_conteudo_221);
                    $stm->bindValue(337, $section_13_conteudo_222);
                    $stm->bindValue(338, $section_13_conteudo_223);
                    $stm->bindValue(339, $section_13_link_224);
                    $stm->bindValue(340, $section_13_link_alt_224);
                    $stm->bindValue(341, $section_13_link_conteudo_224);
                    $stm->bindValue(342, $id);
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
?>
