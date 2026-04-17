<?php

/*
var_dump($_GET);
Linha comentada usada para debug.
Mostraria todos os parâmetros passados pela URL.
Ex: index.php?abobora=form
*/

/*
Aqui estamos pegando o valor do parâmetro "abobora" da URL.

$_GET["abobora"]:
- Recupera o valor passado na URL.

?? "home":
- Caso não exista o parâmetro, assume "home" como padrão.

Ex:
- Sem parâmetro → $pagina = "home"
- ?abobora=form → $pagina = "form"
*/
$pagina = $_GET["abobora"] ?? "home";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <!-- Define o padrão de caracteres (acentuação correta) -->
    <meta charset="UTF-8">

    <!-- Responsividade (adaptação para celular) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Título da aba do navegador -->
    <title>Aula 04</title>
</head>

<body>  

<?php

    /*
    Inclui o cabeçalho do site (header).
    Pode conter logo, título, etc.
    */
    require_once "./header.php";

    /*
    Inclui o menu de navegação.
    */
    require_once("./menu.php");

    /*
    Aqui está o "roteamento" da aplicação (bem importante).

    match($pagina):
    - Estrutura moderna do PHP (similar ao switch).
    - Verifica o valor de $pagina e retorna o caminho do arquivo correspondente.

    Ex:
    - "home" → carrega home.php
    - "form" → carrega formulario.php
    - "tab" → carrega tabela.php

    default:
    - Caso não exista correspondência, carrega página 404.
    */

    require_once match($pagina){
        "home" => "./paginas/home.php",
        "form" => "./paginas/formulario.php",
        "tab" => "./paginas/tabela.php",
        default => "./paginas/404.php",
    };

    /*
    Inclui o rodapé do site.
    */
    require_once("./rodape.php");

?>

</body>
</html>

<!-- 
Resumo geral:
- Usa $_GET para controlar qual página será exibida.
- Usa match para fazer um "roteador simples".
- require_once inclui arquivos apenas uma vez.
- Estrutura típica de site dinâmico em PHP sem framework.

Na prática:
index.php?abobora=home  → mostra Home
index.php?abobora=form  → mostra Formulário
index.php?abobora=tab   → mostra Tabela
Qualquer outro valor    → mostra 404
-->