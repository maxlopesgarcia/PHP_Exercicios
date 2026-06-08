<?php
    // =================================================================================
    // O QUE ESTÁ ACONTECENDO: Captura de parâmetros via URL (Query String).
    // COM QUEM CONVERSA: Conversa com a URL do navegador (ex: site.com/?page=sobre).
    // O QUE FAZ: O operador "??" (null coalesce) verifica se existe algo em "page".
    // Se existir, guarda na variável; se não, define "home" como padrão.
    // =================================================================================
    $pagina = $_GET["page"] ?? "home";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página em PHP</title>
</head>
<body>
<?php 
    // =================================================================================
    // O QUE ESTÁ ACONTECENDO: Inclusão de arquivos externos (Modularização).
    // COM QUEM CONVERSA: Conversa com o Sistema de Arquivos do servidor.
    // O QUE FAZ:
    // 1. include: Tenta trazer o header. Se não achar, dá um aviso (Warning) mas segue o site.
    // 2. require: É obrigatório. Se o nav.php não existir, o site para de funcionar (Fatal Error).
    // =================================================================================
    include "./header.php"; 
    require "./nav.php"; 

    echo "<main>";

    // =================================================================================
    // O QUE ESTÁ ACONTECENDO: Sistema de Roteamento Dinâmico.
    // COM QUEM CONVERSA: Com a variável $pagina definida no topo do arquivo.
    // O QUE FAZ: O 'match' seleciona o caminho do arquivo correto. O 'require_once' 
    // garante que o conteúdo da página seja carregado apenas uma vez, evitando duplicidade.
    // =================================================================================
    require_once match ($pagina) {
        "home" => "./pages/home.php",
        "sobre" => "./pages/sobre.php",
        "contato" => "./pages/contato.php",
        default => "./pages/home.php"
    };

    echo "</main>";

    // O QUE FAZ: Inclui o rodapé apenas uma vez, mesmo que o comando fosse repetido.
    include_once "./footer.php";

    // =================================================================================
    // O QUE ESTÁ ACONTECENDO: Depuração de dados globais.
    // COM QUEM CONVERSA: Desenvolvedor.
    // O QUE FAZ: Mostra tudo o que o PHP "pegou" da URL para conferência.
    // =================================================================================
    var_dump($_GET);
?>
</body>
</html>