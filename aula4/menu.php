<!-- 
Este trecho define o menu de navegação do site.
A tag <nav> indica que os links dentro dela servem para navegação entre páginas.
-->

<nav>

    <!-- 
    Link para a página "Home".
    ?abobora=home envia um parâmetro via URL (GET).
    O index.php vai ler esse valor e carregar a página correspondente.
    -->
    <a href="?abobora=home">Home</a>

    <!-- 
    Link para o formulário.
    Quando clicado, a URL ficará algo como: ?abobora=form
    O sistema então carregará o arquivo formulario.php.
    -->
    <a href="?abobora=form">Formulário</a>

    <!-- 
    Link para a tabela.
    Vai carregar a página tabela.php através do roteamento.
    -->
    <a href="?abobora=tab">Tabela</a>

</nav>

<!-- 
Resumo:
- <nav> organiza os links principais do site.
- <a> cria links clicáveis.
- ?abobora=... é um parâmetro GET usado como "roteador".
- Esse valor é capturado no index.php ($_GET["abobora"])
  e usado no match para decidir qual página carregar.
-->