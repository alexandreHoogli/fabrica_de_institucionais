<?php
@session_start();
$PricingInstanciada = '';
if (empty($PricingInstanciada)) {
    if (file_exists('Connection/conexao.php')) {
        require_once('Connection/con-pdo.php');
        require_once('Class/funcoes.php');
    } else {
        require_once('../Connection/con-pdo.php');
        require_once('../Class/funcoes.php');
    }

    class Pricing
    {
        private $pdo = null;

        private static $Pricing = null;

        private function __construct($conexao)
        {
            $this->pdo = $conexao;
        }

        public static function getInstance($conexao)
        {
            if (!isset(self::$Pricing)) :
                self::$Pricing = new Pricing($conexao);
            endif;
            return self::$Pricing;
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
                $sql = "SELECT * FROM tbl_pricing where 1=1 $sql $sqlOrdem $sqlLimite";
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
        function editar($redireciona = 'editar-pricing.php?pi=S&id=1')
        {
            if (isset($_POST['acao']) && $_POST['acao'] == 'editaPricing') {
                $meta_title = (isset($_POST['meta_title']) && !empty($_POST['meta_title'])) ? $_POST['meta_title'] : '';
                $meta_keywords = (isset($_POST['meta_keywords']) && !empty($_POST['meta_keywords'])) ? $_POST['meta_keywords'] : '';
                $meta_description = (isset($_POST['meta_description']) && !empty($_POST['meta_description'])) ? $_POST['meta_description'] : '';
                $section_1_image_alt_1 = (isset($_POST['section_1_image_alt_1']) && !empty($_POST['section_1_image_alt_1'])) ? $_POST['section_1_image_alt_1'] : '';
                $section_1_conteudo_2 = (isset($_POST['section_1_conteudo_2']) && !empty($_POST['section_1_conteudo_2'])) ? $_POST['section_1_conteudo_2'] : '';
                $section_1_conteudo_3 = (isset($_POST['section_1_conteudo_3']) && !empty($_POST['section_1_conteudo_3'])) ? $_POST['section_1_conteudo_3'] : '';
                $section_1_conteudo_4 = (isset($_POST['section_1_conteudo_4']) && !empty($_POST['section_1_conteudo_4'])) ? $_POST['section_1_conteudo_4'] : '';
                $section_1_image_alt_5 = (isset($_POST['section_1_image_alt_5']) && !empty($_POST['section_1_image_alt_5'])) ? $_POST['section_1_image_alt_5'] : '';
                $section_1_conteudo_6 = (isset($_POST['section_1_conteudo_6']) && !empty($_POST['section_1_conteudo_6'])) ? $_POST['section_1_conteudo_6'] : '';
                $section_2_image_alt_7 = (isset($_POST['section_2_image_alt_7']) && !empty($_POST['section_2_image_alt_7'])) ? $_POST['section_2_image_alt_7'] : '';
                $section_2_conteudo_8 = (isset($_POST['section_2_conteudo_8']) && !empty($_POST['section_2_conteudo_8'])) ? $_POST['section_2_conteudo_8'] : '';
                $section_2_conteudo_9 = (isset($_POST['section_2_conteudo_9']) && !empty($_POST['section_2_conteudo_9'])) ? $_POST['section_2_conteudo_9'] : '';
                $section_2_image_alt_10 = (isset($_POST['section_2_image_alt_10']) && !empty($_POST['section_2_image_alt_10'])) ? $_POST['section_2_image_alt_10'] : '';
                $section_2_image_alt_11 = (isset($_POST['section_2_image_alt_11']) && !empty($_POST['section_2_image_alt_11'])) ? $_POST['section_2_image_alt_11'] : '';
                $section_2_conteudo_12 = (isset($_POST['section_2_conteudo_12']) && !empty($_POST['section_2_conteudo_12'])) ? $_POST['section_2_conteudo_12'] : '';
                $section_2_conteudo_13 = (isset($_POST['section_2_conteudo_13']) && !empty($_POST['section_2_conteudo_13'])) ? $_POST['section_2_conteudo_13'] : '';
                $section_2_link_14 = (isset($_POST['section_2_link_14']) && !empty($_POST['section_2_link_14'])) ? $_POST['section_2_link_14'] : '';
                $section_2_link_alt_14 = (isset($_POST['section_2_link_alt_14']) && !empty($_POST['section_2_link_alt_14'])) ? $_POST['section_2_link_alt_14'] : '';
                $section_2_link_conteudo_14 = (isset($_POST['section_2_link_conteudo_14']) && !empty($_POST['section_2_link_conteudo_14'])) ? $_POST['section_2_link_conteudo_14'] : '';
                $section_2_image_alt_15 = (isset($_POST['section_2_image_alt_15']) && !empty($_POST['section_2_image_alt_15'])) ? $_POST['section_2_image_alt_15'] : '';
                $section_2_conteudo_16 = (isset($_POST['section_2_conteudo_16']) && !empty($_POST['section_2_conteudo_16'])) ? $_POST['section_2_conteudo_16'] : '';
                $section_2_conteudo_17 = (isset($_POST['section_2_conteudo_17']) && !empty($_POST['section_2_conteudo_17'])) ? $_POST['section_2_conteudo_17'] : '';
                $section_2_link_18 = (isset($_POST['section_2_link_18']) && !empty($_POST['section_2_link_18'])) ? $_POST['section_2_link_18'] : '';
                $section_2_link_alt_18 = (isset($_POST['section_2_link_alt_18']) && !empty($_POST['section_2_link_alt_18'])) ? $_POST['section_2_link_alt_18'] : '';
                $section_2_link_conteudo_18 = (isset($_POST['section_2_link_conteudo_18']) && !empty($_POST['section_2_link_conteudo_18'])) ? $_POST['section_2_link_conteudo_18'] : '';
                $section_2_image_alt_19 = (isset($_POST['section_2_image_alt_19']) && !empty($_POST['section_2_image_alt_19'])) ? $_POST['section_2_image_alt_19'] : '';
                $section_2_conteudo_20 = (isset($_POST['section_2_conteudo_20']) && !empty($_POST['section_2_conteudo_20'])) ? $_POST['section_2_conteudo_20'] : '';
                $section_2_conteudo_21 = (isset($_POST['section_2_conteudo_21']) && !empty($_POST['section_2_conteudo_21'])) ? $_POST['section_2_conteudo_21'] : '';
                $section_2_link_22 = (isset($_POST['section_2_link_22']) && !empty($_POST['section_2_link_22'])) ? $_POST['section_2_link_22'] : '';
                $section_2_link_alt_22 = (isset($_POST['section_2_link_alt_22']) && !empty($_POST['section_2_link_alt_22'])) ? $_POST['section_2_link_alt_22'] : '';
                $section_2_link_conteudo_22 = (isset($_POST['section_2_link_conteudo_22']) && !empty($_POST['section_2_link_conteudo_22'])) ? $_POST['section_2_link_conteudo_22'] : '';
                $section_2_image_alt_23 = (isset($_POST['section_2_image_alt_23']) && !empty($_POST['section_2_image_alt_23'])) ? $_POST['section_2_image_alt_23'] : '';
                $section_3_image_alt_24 = (isset($_POST['section_3_image_alt_24']) && !empty($_POST['section_3_image_alt_24'])) ? $_POST['section_3_image_alt_24'] : '';
                $section_3_image_alt_25 = (isset($_POST['section_3_image_alt_25']) && !empty($_POST['section_3_image_alt_25'])) ? $_POST['section_3_image_alt_25'] : '';
                $section_3_conteudo_26 = (isset($_POST['section_3_conteudo_26']) && !empty($_POST['section_3_conteudo_26'])) ? $_POST['section_3_conteudo_26'] : '';
                $section_3_conteudo_27 = (isset($_POST['section_3_conteudo_27']) && !empty($_POST['section_3_conteudo_27'])) ? $_POST['section_3_conteudo_27'] : '';
                $section_3_link_28 = (isset($_POST['section_3_link_28']) && !empty($_POST['section_3_link_28'])) ? $_POST['section_3_link_28'] : '';
                $section_3_link_alt_28 = (isset($_POST['section_3_link_alt_28']) && !empty($_POST['section_3_link_alt_28'])) ? $_POST['section_3_link_alt_28'] : '';
                $section_3_link_conteudo_28 = (isset($_POST['section_3_link_conteudo_28']) && !empty($_POST['section_3_link_conteudo_28'])) ? $_POST['section_3_link_conteudo_28'] : '';
                $section_3_image_alt_29 = (isset($_POST['section_3_image_alt_29']) && !empty($_POST['section_3_image_alt_29'])) ? $_POST['section_3_image_alt_29'] : '';
                $section_3_image_alt_30 = (isset($_POST['section_3_image_alt_30']) && !empty($_POST['section_3_image_alt_30'])) ? $_POST['section_3_image_alt_30'] : '';
                $section_3_conteudo_31 = (isset($_POST['section_3_conteudo_31']) && !empty($_POST['section_3_conteudo_31'])) ? $_POST['section_3_conteudo_31'] : '';
                $section_3_conteudo_32 = (isset($_POST['section_3_conteudo_32']) && !empty($_POST['section_3_conteudo_32'])) ? $_POST['section_3_conteudo_32'] : '';
                $section_3_image_alt_33 = (isset($_POST['section_3_image_alt_33']) && !empty($_POST['section_3_image_alt_33'])) ? $_POST['section_3_image_alt_33'] : '';
                $section_3_conteudo_34 = (isset($_POST['section_3_conteudo_34']) && !empty($_POST['section_3_conteudo_34'])) ? $_POST['section_3_conteudo_34'] : '';
                $section_3_conteudo_35 = (isset($_POST['section_3_conteudo_35']) && !empty($_POST['section_3_conteudo_35'])) ? $_POST['section_3_conteudo_35'] : '';
                $section_3_image_alt_36 = (isset($_POST['section_3_image_alt_36']) && !empty($_POST['section_3_image_alt_36'])) ? $_POST['section_3_image_alt_36'] : '';
                $section_3_conteudo_37 = (isset($_POST['section_3_conteudo_37']) && !empty($_POST['section_3_conteudo_37'])) ? $_POST['section_3_conteudo_37'] : '';
                $section_3_conteudo_38 = (isset($_POST['section_3_conteudo_38']) && !empty($_POST['section_3_conteudo_38'])) ? $_POST['section_3_conteudo_38'] : '';
                $section_3_conteudo_39 = (isset($_POST['section_3_conteudo_39']) && !empty($_POST['section_3_conteudo_39'])) ? $_POST['section_3_conteudo_39'] : '';
                $section_3_image_alt_40 = (isset($_POST['section_3_image_alt_40']) && !empty($_POST['section_3_image_alt_40'])) ? $_POST['section_3_image_alt_40'] : '';
                $section_3_conteudo_41 = (isset($_POST['section_3_conteudo_41']) && !empty($_POST['section_3_conteudo_41'])) ? $_POST['section_3_conteudo_41'] : '';
                $section_3_conteudo_42 = (isset($_POST['section_3_conteudo_42']) && !empty($_POST['section_3_conteudo_42'])) ? $_POST['section_3_conteudo_42'] : '';
                $section_3_conteudo_43 = (isset($_POST['section_3_conteudo_43']) && !empty($_POST['section_3_conteudo_43'])) ? $_POST['section_3_conteudo_43'] : '';
                $section_3_image_alt_44 = (isset($_POST['section_3_image_alt_44']) && !empty($_POST['section_3_image_alt_44'])) ? $_POST['section_3_image_alt_44'] : '';
                $section_4_image_alt_45 = (isset($_POST['section_4_image_alt_45']) && !empty($_POST['section_4_image_alt_45'])) ? $_POST['section_4_image_alt_45'] : '';
                $section_4_conteudo_46 = (isset($_POST['section_4_conteudo_46']) && !empty($_POST['section_4_conteudo_46'])) ? $_POST['section_4_conteudo_46'] : '';
                $section_4_conteudo_47 = (isset($_POST['section_4_conteudo_47']) && !empty($_POST['section_4_conteudo_47'])) ? $_POST['section_4_conteudo_47'] : '';
                $section_4_image_alt_48 = (isset($_POST['section_4_image_alt_48']) && !empty($_POST['section_4_image_alt_48'])) ? $_POST['section_4_image_alt_48'] : '';
                $section_4_image_alt_49 = (isset($_POST['section_4_image_alt_49']) && !empty($_POST['section_4_image_alt_49'])) ? $_POST['section_4_image_alt_49'] : '';
                $section_4_conteudo_50 = (isset($_POST['section_4_conteudo_50']) && !empty($_POST['section_4_conteudo_50'])) ? $_POST['section_4_conteudo_50'] : '';
                $section_4_conteudo_51 = (isset($_POST['section_4_conteudo_51']) && !empty($_POST['section_4_conteudo_51'])) ? $_POST['section_4_conteudo_51'] : '';
                $section_4_conteudo_52 = (isset($_POST['section_4_conteudo_52']) && !empty($_POST['section_4_conteudo_52'])) ? $_POST['section_4_conteudo_52'] : '';
                $section_4_conteudo_53 = (isset($_POST['section_4_conteudo_53']) && !empty($_POST['section_4_conteudo_53'])) ? $_POST['section_4_conteudo_53'] : '';
                $section_4_link_54 = (isset($_POST['section_4_link_54']) && !empty($_POST['section_4_link_54'])) ? $_POST['section_4_link_54'] : '';
                $section_4_link_alt_54 = (isset($_POST['section_4_link_alt_54']) && !empty($_POST['section_4_link_alt_54'])) ? $_POST['section_4_link_alt_54'] : '';
                $section_4_link_conteudo_54 = (isset($_POST['section_4_link_conteudo_54']) && !empty($_POST['section_4_link_conteudo_54'])) ? $_POST['section_4_link_conteudo_54'] : '';
                $section_4_image_alt_55 = (isset($_POST['section_4_image_alt_55']) && !empty($_POST['section_4_image_alt_55'])) ? $_POST['section_4_image_alt_55'] : '';
                $section_4_image_alt_56 = (isset($_POST['section_4_image_alt_56']) && !empty($_POST['section_4_image_alt_56'])) ? $_POST['section_4_image_alt_56'] : '';
                $section_4_conteudo_57 = (isset($_POST['section_4_conteudo_57']) && !empty($_POST['section_4_conteudo_57'])) ? $_POST['section_4_conteudo_57'] : '';
                $section_4_conteudo_58 = (isset($_POST['section_4_conteudo_58']) && !empty($_POST['section_4_conteudo_58'])) ? $_POST['section_4_conteudo_58'] : '';
                $section_4_conteudo_59 = (isset($_POST['section_4_conteudo_59']) && !empty($_POST['section_4_conteudo_59'])) ? $_POST['section_4_conteudo_59'] : '';
                $section_4_conteudo_60 = (isset($_POST['section_4_conteudo_60']) && !empty($_POST['section_4_conteudo_60'])) ? $_POST['section_4_conteudo_60'] : '';
                $section_4_link_61 = (isset($_POST['section_4_link_61']) && !empty($_POST['section_4_link_61'])) ? $_POST['section_4_link_61'] : '';
                $section_4_link_alt_61 = (isset($_POST['section_4_link_alt_61']) && !empty($_POST['section_4_link_alt_61'])) ? $_POST['section_4_link_alt_61'] : '';
                $section_4_link_conteudo_61 = (isset($_POST['section_4_link_conteudo_61']) && !empty($_POST['section_4_link_conteudo_61'])) ? $_POST['section_4_link_conteudo_61'] : '';
                $section_4_image_alt_62 = (isset($_POST['section_4_image_alt_62']) && !empty($_POST['section_4_image_alt_62'])) ? $_POST['section_4_image_alt_62'] : '';
                $section_4_image_alt_63 = (isset($_POST['section_4_image_alt_63']) && !empty($_POST['section_4_image_alt_63'])) ? $_POST['section_4_image_alt_63'] : '';
                $section_4_conteudo_64 = (isset($_POST['section_4_conteudo_64']) && !empty($_POST['section_4_conteudo_64'])) ? $_POST['section_4_conteudo_64'] : '';
                $section_4_conteudo_65 = (isset($_POST['section_4_conteudo_65']) && !empty($_POST['section_4_conteudo_65'])) ? $_POST['section_4_conteudo_65'] : '';
                $section_4_conteudo_66 = (isset($_POST['section_4_conteudo_66']) && !empty($_POST['section_4_conteudo_66'])) ? $_POST['section_4_conteudo_66'] : '';
                $section_4_conteudo_67 = (isset($_POST['section_4_conteudo_67']) && !empty($_POST['section_4_conteudo_67'])) ? $_POST['section_4_conteudo_67'] : '';
                $section_4_link_68 = (isset($_POST['section_4_link_68']) && !empty($_POST['section_4_link_68'])) ? $_POST['section_4_link_68'] : '';
                $section_4_link_alt_68 = (isset($_POST['section_4_link_alt_68']) && !empty($_POST['section_4_link_alt_68'])) ? $_POST['section_4_link_alt_68'] : '';
                $section_4_link_conteudo_68 = (isset($_POST['section_4_link_conteudo_68']) && !empty($_POST['section_4_link_conteudo_68'])) ? $_POST['section_4_link_conteudo_68'] : '';
                $section_4_image_alt_69 = (isset($_POST['section_4_image_alt_69']) && !empty($_POST['section_4_image_alt_69'])) ? $_POST['section_4_image_alt_69'] : '';
                $section_4_image_alt_70 = (isset($_POST['section_4_image_alt_70']) && !empty($_POST['section_4_image_alt_70'])) ? $_POST['section_4_image_alt_70'] : '';
                $section_4_conteudo_71 = (isset($_POST['section_4_conteudo_71']) && !empty($_POST['section_4_conteudo_71'])) ? $_POST['section_4_conteudo_71'] : '';
                $section_4_conteudo_72 = (isset($_POST['section_4_conteudo_72']) && !empty($_POST['section_4_conteudo_72'])) ? $_POST['section_4_conteudo_72'] : '';
                $section_4_conteudo_73 = (isset($_POST['section_4_conteudo_73']) && !empty($_POST['section_4_conteudo_73'])) ? $_POST['section_4_conteudo_73'] : '';
                $section_4_conteudo_74 = (isset($_POST['section_4_conteudo_74']) && !empty($_POST['section_4_conteudo_74'])) ? $_POST['section_4_conteudo_74'] : '';
                $section_4_link_75 = (isset($_POST['section_4_link_75']) && !empty($_POST['section_4_link_75'])) ? $_POST['section_4_link_75'] : '';
                $section_4_link_alt_75 = (isset($_POST['section_4_link_alt_75']) && !empty($_POST['section_4_link_alt_75'])) ? $_POST['section_4_link_alt_75'] : '';
                $section_4_link_conteudo_75 = (isset($_POST['section_4_link_conteudo_75']) && !empty($_POST['section_4_link_conteudo_75'])) ? $_POST['section_4_link_conteudo_75'] : '';
                $section_4_image_alt_76 = (isset($_POST['section_4_image_alt_76']) && !empty($_POST['section_4_image_alt_76'])) ? $_POST['section_4_image_alt_76'] : '';
                $section_4_image_alt_77 = (isset($_POST['section_4_image_alt_77']) && !empty($_POST['section_4_image_alt_77'])) ? $_POST['section_4_image_alt_77'] : '';
                $section_4_conteudo_78 = (isset($_POST['section_4_conteudo_78']) && !empty($_POST['section_4_conteudo_78'])) ? $_POST['section_4_conteudo_78'] : '';
                $section_4_conteudo_79 = (isset($_POST['section_4_conteudo_79']) && !empty($_POST['section_4_conteudo_79'])) ? $_POST['section_4_conteudo_79'] : '';
                $section_4_conteudo_80 = (isset($_POST['section_4_conteudo_80']) && !empty($_POST['section_4_conteudo_80'])) ? $_POST['section_4_conteudo_80'] : '';
                $section_4_conteudo_81 = (isset($_POST['section_4_conteudo_81']) && !empty($_POST['section_4_conteudo_81'])) ? $_POST['section_4_conteudo_81'] : '';
                $section_4_link_82 = (isset($_POST['section_4_link_82']) && !empty($_POST['section_4_link_82'])) ? $_POST['section_4_link_82'] : '';
                $section_4_link_alt_82 = (isset($_POST['section_4_link_alt_82']) && !empty($_POST['section_4_link_alt_82'])) ? $_POST['section_4_link_alt_82'] : '';
                $section_4_link_conteudo_82 = (isset($_POST['section_4_link_conteudo_82']) && !empty($_POST['section_4_link_conteudo_82'])) ? $_POST['section_4_link_conteudo_82'] : '';
                $section_4_image_alt_83 = (isset($_POST['section_4_image_alt_83']) && !empty($_POST['section_4_image_alt_83'])) ? $_POST['section_4_image_alt_83'] : '';
                $section_4_image_alt_84 = (isset($_POST['section_4_image_alt_84']) && !empty($_POST['section_4_image_alt_84'])) ? $_POST['section_4_image_alt_84'] : '';
                $section_4_conteudo_85 = (isset($_POST['section_4_conteudo_85']) && !empty($_POST['section_4_conteudo_85'])) ? $_POST['section_4_conteudo_85'] : '';
                $section_4_conteudo_86 = (isset($_POST['section_4_conteudo_86']) && !empty($_POST['section_4_conteudo_86'])) ? $_POST['section_4_conteudo_86'] : '';
                $section_4_conteudo_87 = (isset($_POST['section_4_conteudo_87']) && !empty($_POST['section_4_conteudo_87'])) ? $_POST['section_4_conteudo_87'] : '';
                $section_4_conteudo_88 = (isset($_POST['section_4_conteudo_88']) && !empty($_POST['section_4_conteudo_88'])) ? $_POST['section_4_conteudo_88'] : '';
                $section_4_link_89 = (isset($_POST['section_4_link_89']) && !empty($_POST['section_4_link_89'])) ? $_POST['section_4_link_89'] : '';
                $section_4_link_alt_89 = (isset($_POST['section_4_link_alt_89']) && !empty($_POST['section_4_link_alt_89'])) ? $_POST['section_4_link_alt_89'] : '';
                $section_4_link_conteudo_89 = (isset($_POST['section_4_link_conteudo_89']) && !empty($_POST['section_4_link_conteudo_89'])) ? $_POST['section_4_link_conteudo_89'] : '';
                $section_4_image_alt_90 = (isset($_POST['section_4_image_alt_90']) && !empty($_POST['section_4_image_alt_90'])) ? $_POST['section_4_image_alt_90'] : '';
                $section_4_image_alt_91 = (isset($_POST['section_4_image_alt_91']) && !empty($_POST['section_4_image_alt_91'])) ? $_POST['section_4_image_alt_91'] : '';
                $section_4_conteudo_92 = (isset($_POST['section_4_conteudo_92']) && !empty($_POST['section_4_conteudo_92'])) ? $_POST['section_4_conteudo_92'] : '';
                $section_4_conteudo_93 = (isset($_POST['section_4_conteudo_93']) && !empty($_POST['section_4_conteudo_93'])) ? $_POST['section_4_conteudo_93'] : '';
                $section_4_conteudo_94 = (isset($_POST['section_4_conteudo_94']) && !empty($_POST['section_4_conteudo_94'])) ? $_POST['section_4_conteudo_94'] : '';
                $section_4_conteudo_95 = (isset($_POST['section_4_conteudo_95']) && !empty($_POST['section_4_conteudo_95'])) ? $_POST['section_4_conteudo_95'] : '';
                $section_4_link_96 = (isset($_POST['section_4_link_96']) && !empty($_POST['section_4_link_96'])) ? $_POST['section_4_link_96'] : '';
                $section_4_link_alt_96 = (isset($_POST['section_4_link_alt_96']) && !empty($_POST['section_4_link_alt_96'])) ? $_POST['section_4_link_alt_96'] : '';
                $section_4_link_conteudo_96 = (isset($_POST['section_4_link_conteudo_96']) && !empty($_POST['section_4_link_conteudo_96'])) ? $_POST['section_4_link_conteudo_96'] : '';
                $section_4_image_alt_97 = (isset($_POST['section_4_image_alt_97']) && !empty($_POST['section_4_image_alt_97'])) ? $_POST['section_4_image_alt_97'] : '';
                $section_4_image_alt_98 = (isset($_POST['section_4_image_alt_98']) && !empty($_POST['section_4_image_alt_98'])) ? $_POST['section_4_image_alt_98'] : '';
                $section_4_conteudo_99 = (isset($_POST['section_4_conteudo_99']) && !empty($_POST['section_4_conteudo_99'])) ? $_POST['section_4_conteudo_99'] : '';
                $section_4_conteudo_100 = (isset($_POST['section_4_conteudo_100']) && !empty($_POST['section_4_conteudo_100'])) ? $_POST['section_4_conteudo_100'] : '';
                $section_4_conteudo_101 = (isset($_POST['section_4_conteudo_101']) && !empty($_POST['section_4_conteudo_101'])) ? $_POST['section_4_conteudo_101'] : '';
                $section_4_conteudo_102 = (isset($_POST['section_4_conteudo_102']) && !empty($_POST['section_4_conteudo_102'])) ? $_POST['section_4_conteudo_102'] : '';
                $section_4_link_103 = (isset($_POST['section_4_link_103']) && !empty($_POST['section_4_link_103'])) ? $_POST['section_4_link_103'] : '';
                $section_4_link_alt_103 = (isset($_POST['section_4_link_alt_103']) && !empty($_POST['section_4_link_alt_103'])) ? $_POST['section_4_link_alt_103'] : '';
                $section_4_link_conteudo_103 = (isset($_POST['section_4_link_conteudo_103']) && !empty($_POST['section_4_link_conteudo_103'])) ? $_POST['section_4_link_conteudo_103'] : '';
                $section_4_image_alt_104 = (isset($_POST['section_4_image_alt_104']) && !empty($_POST['section_4_image_alt_104'])) ? $_POST['section_4_image_alt_104'] : '';
                $section_4_image_alt_105 = (isset($_POST['section_4_image_alt_105']) && !empty($_POST['section_4_image_alt_105'])) ? $_POST['section_4_image_alt_105'] : '';
                $section_4_conteudo_106 = (isset($_POST['section_4_conteudo_106']) && !empty($_POST['section_4_conteudo_106'])) ? $_POST['section_4_conteudo_106'] : '';
                $section_4_conteudo_107 = (isset($_POST['section_4_conteudo_107']) && !empty($_POST['section_4_conteudo_107'])) ? $_POST['section_4_conteudo_107'] : '';
                $section_4_conteudo_108 = (isset($_POST['section_4_conteudo_108']) && !empty($_POST['section_4_conteudo_108'])) ? $_POST['section_4_conteudo_108'] : '';
                $section_4_conteudo_109 = (isset($_POST['section_4_conteudo_109']) && !empty($_POST['section_4_conteudo_109'])) ? $_POST['section_4_conteudo_109'] : '';
                $section_4_link_110 = (isset($_POST['section_4_link_110']) && !empty($_POST['section_4_link_110'])) ? $_POST['section_4_link_110'] : '';
                $section_4_link_alt_110 = (isset($_POST['section_4_link_alt_110']) && !empty($_POST['section_4_link_alt_110'])) ? $_POST['section_4_link_alt_110'] : '';
                $section_4_link_conteudo_110 = (isset($_POST['section_4_link_conteudo_110']) && !empty($_POST['section_4_link_conteudo_110'])) ? $_POST['section_4_link_conteudo_110'] : '';
                $section_4_image_alt_111 = (isset($_POST['section_4_image_alt_111']) && !empty($_POST['section_4_image_alt_111'])) ? $_POST['section_4_image_alt_111'] : '';
                $section_4_image_alt_112 = (isset($_POST['section_4_image_alt_112']) && !empty($_POST['section_4_image_alt_112'])) ? $_POST['section_4_image_alt_112'] : '';
                $section_5_image_alt_113 = (isset($_POST['section_5_image_alt_113']) && !empty($_POST['section_5_image_alt_113'])) ? $_POST['section_5_image_alt_113'] : '';
                $section_5_image_alt_114 = (isset($_POST['section_5_image_alt_114']) && !empty($_POST['section_5_image_alt_114'])) ? $_POST['section_5_image_alt_114'] : '';
                $section_5_link_115 = (isset($_POST['section_5_link_115']) && !empty($_POST['section_5_link_115'])) ? $_POST['section_5_link_115'] : '';
                $section_5_link_alt_115 = (isset($_POST['section_5_link_alt_115']) && !empty($_POST['section_5_link_alt_115'])) ? $_POST['section_5_link_alt_115'] : '';
                $section_5_image_alt_116 = (isset($_POST['section_5_image_alt_116']) && !empty($_POST['section_5_image_alt_116'])) ? $_POST['section_5_image_alt_116'] : '';
                $section_5_conteudo_117 = (isset($_POST['section_5_conteudo_117']) && !empty($_POST['section_5_conteudo_117'])) ? $_POST['section_5_conteudo_117'] : '';
                $section_5_image_alt_118 = (isset($_POST['section_5_image_alt_118']) && !empty($_POST['section_5_image_alt_118'])) ? $_POST['section_5_image_alt_118'] : '';
                $section_5_conteudo_119 = (isset($_POST['section_5_conteudo_119']) && !empty($_POST['section_5_conteudo_119'])) ? $_POST['section_5_conteudo_119'] : '';
                $section_5_link_120 = (isset($_POST['section_5_link_120']) && !empty($_POST['section_5_link_120'])) ? $_POST['section_5_link_120'] : '';
                $section_5_link_alt_120 = (isset($_POST['section_5_link_alt_120']) && !empty($_POST['section_5_link_alt_120'])) ? $_POST['section_5_link_alt_120'] : '';
                $section_5_link_conteudo_120 = (isset($_POST['section_5_link_conteudo_120']) && !empty($_POST['section_5_link_conteudo_120'])) ? $_POST['section_5_link_conteudo_120'] : '';
                $section_5_image_alt_121 = (isset($_POST['section_5_image_alt_121']) && !empty($_POST['section_5_image_alt_121'])) ? $_POST['section_5_image_alt_121'] : '';
                $section_5_conteudo_122 = (isset($_POST['section_5_conteudo_122']) && !empty($_POST['section_5_conteudo_122'])) ? $_POST['section_5_conteudo_122'] : '';
                $section_5_link_123 = (isset($_POST['section_5_link_123']) && !empty($_POST['section_5_link_123'])) ? $_POST['section_5_link_123'] : '';
                $section_5_link_alt_123 = (isset($_POST['section_5_link_alt_123']) && !empty($_POST['section_5_link_alt_123'])) ? $_POST['section_5_link_alt_123'] : '';
                $section_5_link_conteudo_123 = (isset($_POST['section_5_link_conteudo_123']) && !empty($_POST['section_5_link_conteudo_123'])) ? $_POST['section_5_link_conteudo_123'] : '';
                $section_5_conteudo_124 = (isset($_POST['section_5_conteudo_124']) && !empty($_POST['section_5_conteudo_124'])) ? $_POST['section_5_conteudo_124'] : '';
                $section_5_link_125 = (isset($_POST['section_5_link_125']) && !empty($_POST['section_5_link_125'])) ? $_POST['section_5_link_125'] : '';
                $section_5_link_alt_125 = (isset($_POST['section_5_link_alt_125']) && !empty($_POST['section_5_link_alt_125'])) ? $_POST['section_5_link_alt_125'] : '';
                $section_5_link_conteudo_125 = (isset($_POST['section_5_link_conteudo_125']) && !empty($_POST['section_5_link_conteudo_125'])) ? $_POST['section_5_link_conteudo_125'] : '';
                $section_5_link_126 = (isset($_POST['section_5_link_126']) && !empty($_POST['section_5_link_126'])) ? $_POST['section_5_link_126'] : '';
                $section_5_link_alt_126 = (isset($_POST['section_5_link_alt_126']) && !empty($_POST['section_5_link_alt_126'])) ? $_POST['section_5_link_alt_126'] : '';
                $section_5_link_conteudo_126 = (isset($_POST['section_5_link_conteudo_126']) && !empty($_POST['section_5_link_conteudo_126'])) ? $_POST['section_5_link_conteudo_126'] : '';
                $section_5_link_127 = (isset($_POST['section_5_link_127']) && !empty($_POST['section_5_link_127'])) ? $_POST['section_5_link_127'] : '';
                $section_5_link_alt_127 = (isset($_POST['section_5_link_alt_127']) && !empty($_POST['section_5_link_alt_127'])) ? $_POST['section_5_link_alt_127'] : '';
                $section_5_link_conteudo_127 = (isset($_POST['section_5_link_conteudo_127']) && !empty($_POST['section_5_link_conteudo_127'])) ? $_POST['section_5_link_conteudo_127'] : '';
                $section_5_link_128 = (isset($_POST['section_5_link_128']) && !empty($_POST['section_5_link_128'])) ? $_POST['section_5_link_128'] : '';
                $section_5_link_alt_128 = (isset($_POST['section_5_link_alt_128']) && !empty($_POST['section_5_link_alt_128'])) ? $_POST['section_5_link_alt_128'] : '';
                $section_5_link_conteudo_128 = (isset($_POST['section_5_link_conteudo_128']) && !empty($_POST['section_5_link_conteudo_128'])) ? $_POST['section_5_link_conteudo_128'] : '';
                $section_5_link_129 = (isset($_POST['section_5_link_129']) && !empty($_POST['section_5_link_129'])) ? $_POST['section_5_link_129'] : '';
                $section_5_link_alt_129 = (isset($_POST['section_5_link_alt_129']) && !empty($_POST['section_5_link_alt_129'])) ? $_POST['section_5_link_alt_129'] : '';
                $section_5_link_conteudo_129 = (isset($_POST['section_5_link_conteudo_129']) && !empty($_POST['section_5_link_conteudo_129'])) ? $_POST['section_5_link_conteudo_129'] : '';
                $section_5_conteudo_130 = (isset($_POST['section_5_conteudo_130']) && !empty($_POST['section_5_conteudo_130'])) ? $_POST['section_5_conteudo_130'] : '';
                $section_5_link_131 = (isset($_POST['section_5_link_131']) && !empty($_POST['section_5_link_131'])) ? $_POST['section_5_link_131'] : '';
                $section_5_link_alt_131 = (isset($_POST['section_5_link_alt_131']) && !empty($_POST['section_5_link_alt_131'])) ? $_POST['section_5_link_alt_131'] : '';
                $section_5_link_conteudo_131 = (isset($_POST['section_5_link_conteudo_131']) && !empty($_POST['section_5_link_conteudo_131'])) ? $_POST['section_5_link_conteudo_131'] : '';
                $section_5_link_132 = (isset($_POST['section_5_link_132']) && !empty($_POST['section_5_link_132'])) ? $_POST['section_5_link_132'] : '';
                $section_5_link_alt_132 = (isset($_POST['section_5_link_alt_132']) && !empty($_POST['section_5_link_alt_132'])) ? $_POST['section_5_link_alt_132'] : '';
                $section_5_link_conteudo_132 = (isset($_POST['section_5_link_conteudo_132']) && !empty($_POST['section_5_link_conteudo_132'])) ? $_POST['section_5_link_conteudo_132'] : '';
                $section_5_link_133 = (isset($_POST['section_5_link_133']) && !empty($_POST['section_5_link_133'])) ? $_POST['section_5_link_133'] : '';
                $section_5_link_alt_133 = (isset($_POST['section_5_link_alt_133']) && !empty($_POST['section_5_link_alt_133'])) ? $_POST['section_5_link_alt_133'] : '';
                $section_5_link_conteudo_133 = (isset($_POST['section_5_link_conteudo_133']) && !empty($_POST['section_5_link_conteudo_133'])) ? $_POST['section_5_link_conteudo_133'] : '';
                $section_5_link_134 = (isset($_POST['section_5_link_134']) && !empty($_POST['section_5_link_134'])) ? $_POST['section_5_link_134'] : '';
                $section_5_link_alt_134 = (isset($_POST['section_5_link_alt_134']) && !empty($_POST['section_5_link_alt_134'])) ? $_POST['section_5_link_alt_134'] : '';
                $section_5_link_conteudo_134 = (isset($_POST['section_5_link_conteudo_134']) && !empty($_POST['section_5_link_conteudo_134'])) ? $_POST['section_5_link_conteudo_134'] : '';
                $section_5_link_135 = (isset($_POST['section_5_link_135']) && !empty($_POST['section_5_link_135'])) ? $_POST['section_5_link_135'] : '';
                $section_5_link_alt_135 = (isset($_POST['section_5_link_alt_135']) && !empty($_POST['section_5_link_alt_135'])) ? $_POST['section_5_link_alt_135'] : '';
                $section_5_link_conteudo_135 = (isset($_POST['section_5_link_conteudo_135']) && !empty($_POST['section_5_link_conteudo_135'])) ? $_POST['section_5_link_conteudo_135'] : '';
                $section_5_conteudo_136 = (isset($_POST['section_5_conteudo_136']) && !empty($_POST['section_5_conteudo_136'])) ? $_POST['section_5_conteudo_136'] : '';
                $section_5_conteudo_137 = (isset($_POST['section_5_conteudo_137']) && !empty($_POST['section_5_conteudo_137'])) ? $_POST['section_5_conteudo_137'] : '';
                $section_5_conteudo_138 = (isset($_POST['section_5_conteudo_138']) && !empty($_POST['section_5_conteudo_138'])) ? $_POST['section_5_conteudo_138'] : '';
                $section_5_button139 = (isset($_POST['section_5_button139']) && !empty($_POST['section_5_button139'])) ? $_POST['section_5_button139'] : '';
                $section_5_conteudo_140 = (isset($_POST['section_5_conteudo_140']) && !empty($_POST['section_5_conteudo_140'])) ? $_POST['section_5_conteudo_140'] : '';
                $section_5_link_141 = (isset($_POST['section_5_link_141']) && !empty($_POST['section_5_link_141'])) ? $_POST['section_5_link_141'] : '';
                $section_5_link_alt_141 = (isset($_POST['section_5_link_alt_141']) && !empty($_POST['section_5_link_alt_141'])) ? $_POST['section_5_link_alt_141'] : '';
                $section_5_link_142 = (isset($_POST['section_5_link_142']) && !empty($_POST['section_5_link_142'])) ? $_POST['section_5_link_142'] : '';
                $section_5_link_alt_142 = (isset($_POST['section_5_link_alt_142']) && !empty($_POST['section_5_link_alt_142'])) ? $_POST['section_5_link_alt_142'] : '';
                $section_5_link_143 = (isset($_POST['section_5_link_143']) && !empty($_POST['section_5_link_143'])) ? $_POST['section_5_link_143'] : '';
                $section_5_link_alt_143 = (isset($_POST['section_5_link_alt_143']) && !empty($_POST['section_5_link_alt_143'])) ? $_POST['section_5_link_alt_143'] : '';
                $section_5_link_144 = (isset($_POST['section_5_link_144']) && !empty($_POST['section_5_link_144'])) ? $_POST['section_5_link_144'] : '';
                $section_5_link_alt_144 = (isset($_POST['section_5_link_alt_144']) && !empty($_POST['section_5_link_alt_144'])) ? $_POST['section_5_link_alt_144'] : '';
                $section_5_image_alt_145 = (isset($_POST['section_5_image_alt_145']) && !empty($_POST['section_5_image_alt_145'])) ? $_POST['section_5_image_alt_145'] : '';
                $section_5_image_alt_146 = (isset($_POST['section_5_image_alt_146']) && !empty($_POST['section_5_image_alt_146'])) ? $_POST['section_5_image_alt_146'] : '';
                $id = filter_input(INPUT_POST, 'id');
                if (isset($_POST['pagina_individual']) && !empty($_POST['pagina_individual'])) {
                    $pagina_individual = $_POST['pagina_individual'];
                } else {
                    $pagina_individual = gerarTituloSEO($section_1_conteudo_2);
                }
                $maximo = 180000;
                if ($_FILES["section_1_img_1"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_1_img_1"]["size"] / 1000;
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
                if ($_FILES["section_2_img_7"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_2_img_7"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_2_img_10"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_2_img_10"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_2_img_11"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_2_img_11"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_2_img_15"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_2_img_15"]["size"] / 1000;
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
                if ($_FILES["section_2_img_23"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_2_img_23"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_3_img_24"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_3_img_24"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_3_img_25"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_3_img_25"]["size"] / 1000;
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
                if ($_FILES["section_3_img_30"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_3_img_30"]["size"] / 1000;
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
                if ($_FILES["section_3_img_36"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_3_img_36"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_3_img_40"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_3_img_40"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_3_img_44"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_3_img_44"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_4_img_45"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_4_img_45"]["size"] / 1000;
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
                if ($_FILES["section_4_img_49"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_4_img_49"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_4_img_55"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_4_img_55"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_4_img_56"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_4_img_56"]["size"] / 1000;
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
                if ($_FILES["section_4_img_76"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_4_img_76"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_4_img_77"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_4_img_77"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_4_img_83"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_4_img_83"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_4_img_84"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_4_img_84"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_4_img_90"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_4_img_90"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_4_img_91"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_4_img_91"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_4_img_97"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_4_img_97"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_4_img_98"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_4_img_98"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_4_img_104"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_4_img_104"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_4_img_105"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_4_img_105"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_4_img_111"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_4_img_111"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_4_img_112"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_4_img_112"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_5_img_113"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_5_img_113"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_5_img_114"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_5_img_114"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_5_img_116"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_5_img_116"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_5_img_118"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_5_img_118"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_5_img_121"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_5_img_121"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_5_img_145"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_5_img_145"]["size"] / 1000;
                    echo "<script>
    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem " . $tamanhoFoto . " KB');
    history.back();
    </script>";
                    exit;
                }
                if ($_FILES["section_5_img_146"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["section_5_img_146"]["size"] / 1000;
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
                    $sql = "UPDATE tbl_pricing SET meta_title=?, meta_keywords=?, meta_description=?, section_1_img_1=?, section_1_image_alt_1=?, section_1_conteudo_2=?, section_1_conteudo_3=?, section_1_conteudo_4=?, section_1_img_5=?, section_1_image_alt_5=?, section_1_conteudo_6=?, section_2_img_7=?, section_2_image_alt_7=?, section_2_conteudo_8=?, section_2_conteudo_9=?, section_2_img_10=?, section_2_image_alt_10=?, section_2_img_11=?, section_2_image_alt_11=?, section_2_conteudo_12=?, section_2_conteudo_13=?, section_2_link_14=?, section_2_link_alt_14=?, section_2_link_conteudo_14=?, section_2_img_15=?, section_2_image_alt_15=?, section_2_conteudo_16=?, section_2_conteudo_17=?, section_2_link_18=?, section_2_link_alt_18=?, section_2_link_conteudo_18=?, section_2_img_19=?, section_2_image_alt_19=?, section_2_conteudo_20=?, section_2_conteudo_21=?, section_2_link_22=?, section_2_link_alt_22=?, section_2_link_conteudo_22=?, section_2_img_23=?, section_2_image_alt_23=?, section_3_img_24=?, section_3_image_alt_24=?, section_3_img_25=?, section_3_image_alt_25=?, section_3_conteudo_26=?, section_3_conteudo_27=?, section_3_link_28=?, section_3_link_alt_28=?, section_3_link_conteudo_28=?, section_3_img_29=?, section_3_image_alt_29=?, section_3_img_30=?, section_3_image_alt_30=?, section_3_conteudo_31=?, section_3_conteudo_32=?, section_3_img_33=?, section_3_image_alt_33=?, section_3_conteudo_34=?, section_3_conteudo_35=?, section_3_img_36=?, section_3_image_alt_36=?, section_3_conteudo_37=?, section_3_conteudo_38=?, section_3_conteudo_39=?, section_3_img_40=?, section_3_image_alt_40=?, section_3_conteudo_41=?, section_3_conteudo_42=?, section_3_conteudo_43=?, section_3_img_44=?, section_3_image_alt_44=?, section_4_img_45=?, section_4_image_alt_45=?, section_4_conteudo_46=?, section_4_conteudo_47=?, section_4_img_48=?, section_4_image_alt_48=?, section_4_img_49=?, section_4_image_alt_49=?, section_4_conteudo_50=?, section_4_conteudo_51=?, section_4_conteudo_52=?, section_4_conteudo_53=?, section_4_link_54=?, section_4_link_alt_54=?, section_4_link_conteudo_54=?, section_4_img_55=?, section_4_image_alt_55=?, section_4_img_56=?, section_4_image_alt_56=?, section_4_conteudo_57=?, section_4_conteudo_58=?, section_4_conteudo_59=?, section_4_conteudo_60=?, section_4_link_61=?, section_4_link_alt_61=?, section_4_link_conteudo_61=?, section_4_img_62=?, section_4_image_alt_62=?, section_4_img_63=?, section_4_image_alt_63=?, section_4_conteudo_64=?, section_4_conteudo_65=?, section_4_conteudo_66=?, section_4_conteudo_67=?, section_4_link_68=?, section_4_link_alt_68=?, section_4_link_conteudo_68=?, section_4_img_69=?, section_4_image_alt_69=?, section_4_img_70=?, section_4_image_alt_70=?, section_4_conteudo_71=?, section_4_conteudo_72=?, section_4_conteudo_73=?, section_4_conteudo_74=?, section_4_link_75=?, section_4_link_alt_75=?, section_4_link_conteudo_75=?, section_4_img_76=?, section_4_image_alt_76=?, section_4_img_77=?, section_4_image_alt_77=?, section_4_conteudo_78=?, section_4_conteudo_79=?, section_4_conteudo_80=?, section_4_conteudo_81=?, section_4_link_82=?, section_4_link_alt_82=?, section_4_link_conteudo_82=?, section_4_img_83=?, section_4_image_alt_83=?, section_4_img_84=?, section_4_image_alt_84=?, section_4_conteudo_85=?, section_4_conteudo_86=?, section_4_conteudo_87=?, section_4_conteudo_88=?, section_4_link_89=?, section_4_link_alt_89=?, section_4_link_conteudo_89=?, section_4_img_90=?, section_4_image_alt_90=?, section_4_img_91=?, section_4_image_alt_91=?, section_4_conteudo_92=?, section_4_conteudo_93=?, section_4_conteudo_94=?, section_4_conteudo_95=?, section_4_link_96=?, section_4_link_alt_96=?, section_4_link_conteudo_96=?, section_4_img_97=?, section_4_image_alt_97=?, section_4_img_98=?, section_4_image_alt_98=?, section_4_conteudo_99=?, section_4_conteudo_100=?, section_4_conteudo_101=?, section_4_conteudo_102=?, section_4_link_103=?, section_4_link_alt_103=?, section_4_link_conteudo_103=?, section_4_img_104=?, section_4_image_alt_104=?, section_4_img_105=?, section_4_image_alt_105=?, section_4_conteudo_106=?, section_4_conteudo_107=?, section_4_conteudo_108=?, section_4_conteudo_109=?, section_4_link_110=?, section_4_link_alt_110=?, section_4_link_conteudo_110=?, section_4_img_111=?, section_4_image_alt_111=?, section_4_img_112=?, section_4_image_alt_112=?, section_5_img_113=?, section_5_image_alt_113=?, section_5_img_114=?, section_5_image_alt_114=?, section_5_link_115=?, section_5_link_alt_115=?, section_5_img_116=?, section_5_image_alt_116=?, section_5_conteudo_117=?, section_5_img_118=?, section_5_image_alt_118=?, section_5_conteudo_119=?, section_5_link_120=?, section_5_link_alt_120=?, section_5_link_conteudo_120=?, section_5_img_121=?, section_5_image_alt_121=?, section_5_conteudo_122=?, section_5_link_123=?, section_5_link_alt_123=?, section_5_link_conteudo_123=?, section_5_conteudo_124=?, section_5_link_125=?, section_5_link_alt_125=?, section_5_link_conteudo_125=?, section_5_link_126=?, section_5_link_alt_126=?, section_5_link_conteudo_126=?, section_5_link_127=?, section_5_link_alt_127=?, section_5_link_conteudo_127=?, section_5_link_128=?, section_5_link_alt_128=?, section_5_link_conteudo_128=?, section_5_link_129=?, section_5_link_alt_129=?, section_5_link_conteudo_129=?, section_5_conteudo_130=?, section_5_link_131=?, section_5_link_alt_131=?, section_5_link_conteudo_131=?, section_5_link_132=?, section_5_link_alt_132=?, section_5_link_conteudo_132=?, section_5_link_133=?, section_5_link_alt_133=?, section_5_link_conteudo_133=?, section_5_link_134=?, section_5_link_alt_134=?, section_5_link_conteudo_134=?, section_5_link_135=?, section_5_link_alt_135=?, section_5_link_conteudo_135=?, section_5_conteudo_136=?, section_5_conteudo_137=?, section_5_conteudo_138=?, section_5_button139=?, section_5_conteudo_140=?, section_5_link_141=?, section_5_link_alt_141=?, section_5_link_142=?, section_5_link_alt_142=?, section_5_link_143=?, section_5_link_alt_143=?, section_5_link_144=?, section_5_link_alt_144=?, section_5_img_145=?, section_5_image_alt_145=?, section_5_img_146=?, section_5_image_alt_146=? WHERE id=?";
                    $stm = $this->pdo->prepare($sql);
                    $stm->bindValue(1, $meta_title);
                    $stm->bindValue(2, $meta_keywords);
                    $stm->bindValue(3, $meta_description);
                    $stm->bindValue(4, upload("section_1_img_1", $pastaArquivos, "N"));
                    $stm->bindValue(5, $section_1_image_alt_1);
                    $stm->bindValue(6, $section_1_conteudo_2);
                    $stm->bindValue(7, $section_1_conteudo_3);
                    $stm->bindValue(8, $section_1_conteudo_4);
                    $stm->bindValue(9, upload("section_1_img_5", $pastaArquivos, "N"));
                    $stm->bindValue(10, $section_1_image_alt_5);
                    $stm->bindValue(11, $section_1_conteudo_6);
                    $stm->bindValue(12, upload("section_2_img_7", $pastaArquivos, "N"));
                    $stm->bindValue(13, $section_2_image_alt_7);
                    $stm->bindValue(14, $section_2_conteudo_8);
                    $stm->bindValue(15, $section_2_conteudo_9);
                    $stm->bindValue(16, upload("section_2_img_10", $pastaArquivos, "N"));
                    $stm->bindValue(17, $section_2_image_alt_10);
                    $stm->bindValue(18, upload("section_2_img_11", $pastaArquivos, "N"));
                    $stm->bindValue(19, $section_2_image_alt_11);
                    $stm->bindValue(20, $section_2_conteudo_12);
                    $stm->bindValue(21, $section_2_conteudo_13);
                    $stm->bindValue(22, $section_2_link_14);
                    $stm->bindValue(23, $section_2_link_alt_14);
                    $stm->bindValue(24, $section_2_link_conteudo_14);
                    $stm->bindValue(25, upload("section_2_img_15", $pastaArquivos, "N"));
                    $stm->bindValue(26, $section_2_image_alt_15);
                    $stm->bindValue(27, $section_2_conteudo_16);
                    $stm->bindValue(28, $section_2_conteudo_17);
                    $stm->bindValue(29, $section_2_link_18);
                    $stm->bindValue(30, $section_2_link_alt_18);
                    $stm->bindValue(31, $section_2_link_conteudo_18);
                    $stm->bindValue(32, upload("section_2_img_19", $pastaArquivos, "N"));
                    $stm->bindValue(33, $section_2_image_alt_19);
                    $stm->bindValue(34, $section_2_conteudo_20);
                    $stm->bindValue(35, $section_2_conteudo_21);
                    $stm->bindValue(36, $section_2_link_22);
                    $stm->bindValue(37, $section_2_link_alt_22);
                    $stm->bindValue(38, $section_2_link_conteudo_22);
                    $stm->bindValue(39, upload("section_2_img_23", $pastaArquivos, "N"));
                    $stm->bindValue(40, $section_2_image_alt_23);
                    $stm->bindValue(41, upload("section_3_img_24", $pastaArquivos, "N"));
                    $stm->bindValue(42, $section_3_image_alt_24);
                    $stm->bindValue(43, upload("section_3_img_25", $pastaArquivos, "N"));
                    $stm->bindValue(44, $section_3_image_alt_25);
                    $stm->bindValue(45, $section_3_conteudo_26);
                    $stm->bindValue(46, $section_3_conteudo_27);
                    $stm->bindValue(47, $section_3_link_28);
                    $stm->bindValue(48, $section_3_link_alt_28);
                    $stm->bindValue(49, $section_3_link_conteudo_28);
                    $stm->bindValue(50, upload("section_3_img_29", $pastaArquivos, "N"));
                    $stm->bindValue(51, $section_3_image_alt_29);
                    $stm->bindValue(52, upload("section_3_img_30", $pastaArquivos, "N"));
                    $stm->bindValue(53, $section_3_image_alt_30);
                    $stm->bindValue(54, $section_3_conteudo_31);
                    $stm->bindValue(55, $section_3_conteudo_32);
                    $stm->bindValue(56, upload("section_3_img_33", $pastaArquivos, "N"));
                    $stm->bindValue(57, $section_3_image_alt_33);
                    $stm->bindValue(58, $section_3_conteudo_34);
                    $stm->bindValue(59, $section_3_conteudo_35);
                    $stm->bindValue(60, upload("section_3_img_36", $pastaArquivos, "N"));
                    $stm->bindValue(61, $section_3_image_alt_36);
                    $stm->bindValue(62, $section_3_conteudo_37);
                    $stm->bindValue(63, $section_3_conteudo_38);
                    $stm->bindValue(64, $section_3_conteudo_39);
                    $stm->bindValue(65, upload("section_3_img_40", $pastaArquivos, "N"));
                    $stm->bindValue(66, $section_3_image_alt_40);
                    $stm->bindValue(67, $section_3_conteudo_41);
                    $stm->bindValue(68, $section_3_conteudo_42);
                    $stm->bindValue(69, $section_3_conteudo_43);
                    $stm->bindValue(70, upload("section_3_img_44", $pastaArquivos, "N"));
                    $stm->bindValue(71, $section_3_image_alt_44);
                    $stm->bindValue(72, upload("section_4_img_45", $pastaArquivos, "N"));
                    $stm->bindValue(73, $section_4_image_alt_45);
                    $stm->bindValue(74, $section_4_conteudo_46);
                    $stm->bindValue(75, $section_4_conteudo_47);
                    $stm->bindValue(76, upload("section_4_img_48", $pastaArquivos, "N"));
                    $stm->bindValue(77, $section_4_image_alt_48);
                    $stm->bindValue(78, upload("section_4_img_49", $pastaArquivos, "N"));
                    $stm->bindValue(79, $section_4_image_alt_49);
                    $stm->bindValue(80, $section_4_conteudo_50);
                    $stm->bindValue(81, $section_4_conteudo_51);
                    $stm->bindValue(82, $section_4_conteudo_52);
                    $stm->bindValue(83, $section_4_conteudo_53);
                    $stm->bindValue(84, $section_4_link_54);
                    $stm->bindValue(85, $section_4_link_alt_54);
                    $stm->bindValue(86, $section_4_link_conteudo_54);
                    $stm->bindValue(87, upload("section_4_img_55", $pastaArquivos, "N"));
                    $stm->bindValue(88, $section_4_image_alt_55);
                    $stm->bindValue(89, upload("section_4_img_56", $pastaArquivos, "N"));
                    $stm->bindValue(90, $section_4_image_alt_56);
                    $stm->bindValue(91, $section_4_conteudo_57);
                    $stm->bindValue(92, $section_4_conteudo_58);
                    $stm->bindValue(93, $section_4_conteudo_59);
                    $stm->bindValue(94, $section_4_conteudo_60);
                    $stm->bindValue(95, $section_4_link_61);
                    $stm->bindValue(96, $section_4_link_alt_61);
                    $stm->bindValue(97, $section_4_link_conteudo_61);
                    $stm->bindValue(98, upload("section_4_img_62", $pastaArquivos, "N"));
                    $stm->bindValue(99, $section_4_image_alt_62);
                    $stm->bindValue(100, upload("section_4_img_63", $pastaArquivos, "N"));
                    $stm->bindValue(101, $section_4_image_alt_63);
                    $stm->bindValue(102, $section_4_conteudo_64);
                    $stm->bindValue(103, $section_4_conteudo_65);
                    $stm->bindValue(104, $section_4_conteudo_66);
                    $stm->bindValue(105, $section_4_conteudo_67);
                    $stm->bindValue(106, $section_4_link_68);
                    $stm->bindValue(107, $section_4_link_alt_68);
                    $stm->bindValue(108, $section_4_link_conteudo_68);
                    $stm->bindValue(109, upload("section_4_img_69", $pastaArquivos, "N"));
                    $stm->bindValue(110, $section_4_image_alt_69);
                    $stm->bindValue(111, upload("section_4_img_70", $pastaArquivos, "N"));
                    $stm->bindValue(112, $section_4_image_alt_70);
                    $stm->bindValue(113, $section_4_conteudo_71);
                    $stm->bindValue(114, $section_4_conteudo_72);
                    $stm->bindValue(115, $section_4_conteudo_73);
                    $stm->bindValue(116, $section_4_conteudo_74);
                    $stm->bindValue(117, $section_4_link_75);
                    $stm->bindValue(118, $section_4_link_alt_75);
                    $stm->bindValue(119, $section_4_link_conteudo_75);
                    $stm->bindValue(120, upload("section_4_img_76", $pastaArquivos, "N"));
                    $stm->bindValue(121, $section_4_image_alt_76);
                    $stm->bindValue(122, upload("section_4_img_77", $pastaArquivos, "N"));
                    $stm->bindValue(123, $section_4_image_alt_77);
                    $stm->bindValue(124, $section_4_conteudo_78);
                    $stm->bindValue(125, $section_4_conteudo_79);
                    $stm->bindValue(126, $section_4_conteudo_80);
                    $stm->bindValue(127, $section_4_conteudo_81);
                    $stm->bindValue(128, $section_4_link_82);
                    $stm->bindValue(129, $section_4_link_alt_82);
                    $stm->bindValue(130, $section_4_link_conteudo_82);
                    $stm->bindValue(131, upload("section_4_img_83", $pastaArquivos, "N"));
                    $stm->bindValue(132, $section_4_image_alt_83);
                    $stm->bindValue(133, upload("section_4_img_84", $pastaArquivos, "N"));
                    $stm->bindValue(134, $section_4_image_alt_84);
                    $stm->bindValue(135, $section_4_conteudo_85);
                    $stm->bindValue(136, $section_4_conteudo_86);
                    $stm->bindValue(137, $section_4_conteudo_87);
                    $stm->bindValue(138, $section_4_conteudo_88);
                    $stm->bindValue(139, $section_4_link_89);
                    $stm->bindValue(140, $section_4_link_alt_89);
                    $stm->bindValue(141, $section_4_link_conteudo_89);
                    $stm->bindValue(142, upload("section_4_img_90", $pastaArquivos, "N"));
                    $stm->bindValue(143, $section_4_image_alt_90);
                    $stm->bindValue(144, upload("section_4_img_91", $pastaArquivos, "N"));
                    $stm->bindValue(145, $section_4_image_alt_91);
                    $stm->bindValue(146, $section_4_conteudo_92);
                    $stm->bindValue(147, $section_4_conteudo_93);
                    $stm->bindValue(148, $section_4_conteudo_94);
                    $stm->bindValue(149, $section_4_conteudo_95);
                    $stm->bindValue(150, $section_4_link_96);
                    $stm->bindValue(151, $section_4_link_alt_96);
                    $stm->bindValue(152, $section_4_link_conteudo_96);
                    $stm->bindValue(153, upload("section_4_img_97", $pastaArquivos, "N"));
                    $stm->bindValue(154, $section_4_image_alt_97);
                    $stm->bindValue(155, upload("section_4_img_98", $pastaArquivos, "N"));
                    $stm->bindValue(156, $section_4_image_alt_98);
                    $stm->bindValue(157, $section_4_conteudo_99);
                    $stm->bindValue(158, $section_4_conteudo_100);
                    $stm->bindValue(159, $section_4_conteudo_101);
                    $stm->bindValue(160, $section_4_conteudo_102);
                    $stm->bindValue(161, $section_4_link_103);
                    $stm->bindValue(162, $section_4_link_alt_103);
                    $stm->bindValue(163, $section_4_link_conteudo_103);
                    $stm->bindValue(164, upload("section_4_img_104", $pastaArquivos, "N"));
                    $stm->bindValue(165, $section_4_image_alt_104);
                    $stm->bindValue(166, upload("section_4_img_105", $pastaArquivos, "N"));
                    $stm->bindValue(167, $section_4_image_alt_105);
                    $stm->bindValue(168, $section_4_conteudo_106);
                    $stm->bindValue(169, $section_4_conteudo_107);
                    $stm->bindValue(170, $section_4_conteudo_108);
                    $stm->bindValue(171, $section_4_conteudo_109);
                    $stm->bindValue(172, $section_4_link_110);
                    $stm->bindValue(173, $section_4_link_alt_110);
                    $stm->bindValue(174, $section_4_link_conteudo_110);
                    $stm->bindValue(175, upload("section_4_img_111", $pastaArquivos, "N"));
                    $stm->bindValue(176, $section_4_image_alt_111);
                    $stm->bindValue(177, upload("section_4_img_112", $pastaArquivos, "N"));
                    $stm->bindValue(178, $section_4_image_alt_112);
                    $stm->bindValue(179, upload("section_5_img_113", $pastaArquivos, "N"));
                    $stm->bindValue(180, $section_5_image_alt_113);
                    $stm->bindValue(181, upload("section_5_img_114", $pastaArquivos, "N"));
                    $stm->bindValue(182, $section_5_image_alt_114);
                    $stm->bindValue(183, $section_5_link_115);
                    $stm->bindValue(184, $section_5_link_alt_115);
                    $stm->bindValue(185, upload("section_5_img_116", $pastaArquivos, "N"));
                    $stm->bindValue(186, $section_5_image_alt_116);
                    $stm->bindValue(187, $section_5_conteudo_117);
                    $stm->bindValue(188, upload("section_5_img_118", $pastaArquivos, "N"));
                    $stm->bindValue(189, $section_5_image_alt_118);
                    $stm->bindValue(190, $section_5_conteudo_119);
                    $stm->bindValue(191, $section_5_link_120);
                    $stm->bindValue(192, $section_5_link_alt_120);
                    $stm->bindValue(193, $section_5_link_conteudo_120);
                    $stm->bindValue(194, upload("section_5_img_121", $pastaArquivos, "N"));
                    $stm->bindValue(195, $section_5_image_alt_121);
                    $stm->bindValue(196, $section_5_conteudo_122);
                    $stm->bindValue(197, $section_5_link_123);
                    $stm->bindValue(198, $section_5_link_alt_123);
                    $stm->bindValue(199, $section_5_link_conteudo_123);
                    $stm->bindValue(200, $section_5_conteudo_124);
                    $stm->bindValue(201, $section_5_link_125);
                    $stm->bindValue(202, $section_5_link_alt_125);
                    $stm->bindValue(203, $section_5_link_conteudo_125);
                    $stm->bindValue(204, $section_5_link_126);
                    $stm->bindValue(205, $section_5_link_alt_126);
                    $stm->bindValue(206, $section_5_link_conteudo_126);
                    $stm->bindValue(207, $section_5_link_127);
                    $stm->bindValue(208, $section_5_link_alt_127);
                    $stm->bindValue(209, $section_5_link_conteudo_127);
                    $stm->bindValue(210, $section_5_link_128);
                    $stm->bindValue(211, $section_5_link_alt_128);
                    $stm->bindValue(212, $section_5_link_conteudo_128);
                    $stm->bindValue(213, $section_5_link_129);
                    $stm->bindValue(214, $section_5_link_alt_129);
                    $stm->bindValue(215, $section_5_link_conteudo_129);
                    $stm->bindValue(216, $section_5_conteudo_130);
                    $stm->bindValue(217, $section_5_link_131);
                    $stm->bindValue(218, $section_5_link_alt_131);
                    $stm->bindValue(219, $section_5_link_conteudo_131);
                    $stm->bindValue(220, $section_5_link_132);
                    $stm->bindValue(221, $section_5_link_alt_132);
                    $stm->bindValue(222, $section_5_link_conteudo_132);
                    $stm->bindValue(223, $section_5_link_133);
                    $stm->bindValue(224, $section_5_link_alt_133);
                    $stm->bindValue(225, $section_5_link_conteudo_133);
                    $stm->bindValue(226, $section_5_link_134);
                    $stm->bindValue(227, $section_5_link_alt_134);
                    $stm->bindValue(228, $section_5_link_conteudo_134);
                    $stm->bindValue(229, $section_5_link_135);
                    $stm->bindValue(230, $section_5_link_alt_135);
                    $stm->bindValue(231, $section_5_link_conteudo_135);
                    $stm->bindValue(232, $section_5_conteudo_136);
                    $stm->bindValue(233, $section_5_conteudo_137);
                    $stm->bindValue(234, $section_5_conteudo_138);
                    $stm->bindValue(235, $section_5_button139);
                    $stm->bindValue(236, $section_5_conteudo_140);
                    $stm->bindValue(237, $section_5_link_141);
                    $stm->bindValue(238, $section_5_link_alt_141);
                    $stm->bindValue(239, $section_5_link_142);
                    $stm->bindValue(240, $section_5_link_alt_142);
                    $stm->bindValue(241, $section_5_link_143);
                    $stm->bindValue(242, $section_5_link_alt_143);
                    $stm->bindValue(243, $section_5_link_144);
                    $stm->bindValue(244, $section_5_link_alt_144);
                    $stm->bindValue(245, upload("section_5_img_145", $pastaArquivos, "N"));
                    $stm->bindValue(246, $section_5_image_alt_145);
                    $stm->bindValue(247, upload("section_5_img_146", $pastaArquivos, "N"));
                    $stm->bindValue(248, $section_5_image_alt_146);
                    $stm->bindValue(249, $id);
                    $stm->execute();
                } catch (PDOException $erro) {
                    echo $erro->getMessage();
                }

                // Trecho adicional
                if ($pagina_individual == 'S') {
                    echo "  <script>
          alert('Modificado com sucesso!');
          window.location='editar-pricing.php?pi=S&id=$id';
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
            if (isset($_GET['acao']) && $_GET['acao'] == 'excluirPricing') {
                try {
                    $sql = "DELETE FROM tbl_pricing WHERE id=? ";
                    $stm = $this->pdo->prepare($sql);
                    $stm->bindValue(1, $_GET['id']);
                    $stm->execute();
                } catch (PDOException $erro) {
                    echo $erro->getMessage();
                }

                echo "  <script>
            window.location='pricing.php';
        </script>";
                exit;
            }
        }
    }
}
