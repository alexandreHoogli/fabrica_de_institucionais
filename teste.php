<?php
include('pastas.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["arquivos_selecionados"])) {
    $arquivos_selecionados = $_POST["arquivos_selecionados"];
    $arquivos_dropdown = $_POST["arquivos_dropdown"];
    require_once('./simple_html_dom.php');
    for ($i = 0; $i < count($arquivos_selecionados); $i++) {
        $arquivo = $arquivos_selecionados[$i];
        $valor_dropdown = $arquivos_dropdown[$i];
        $content = file_get_contents('./linkagem/' . $arquivo);
        $dom = str_get_html($content);
        $body_element = $dom->find('body', 0);
        $arquivo = pathinfo($arquivo, PATHINFO_FILENAME);
        gerarHtml($arquivo, $body_element, $valor_dropdown);
    }
} else {
    echo "<p>Nenhum arquivo foi selecionado.</p>";
}
?>