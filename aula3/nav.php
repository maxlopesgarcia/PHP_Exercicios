<!-- 
Este trecho cria um menu de navegação simples usando HTML.
A tag <nav> indica que o conteúdo dentro dela é uma área de navegação do site.
-->

<nav>
    
    <!-- 
    Link para a página inicial (Home).
    O href="?page=home" envia um parâmetro na URL (page=home).
    Normalmente isso é usado em sistemas PHP para carregar conteúdos dinâmicos,
    por exemplo: index.php?page=home
    -->
    <a href="?page=home">Home</a>

    <!-- 
    Link para a página "Sobre".
    Ao clicar, a URL ficará algo como: ?page=sobre
    O backend pode usar esse valor para incluir ou exibir a página correspondente.
    -->
    <a href="?page=sobre">Sobre</a>

    <!-- 
    Link para a página "Contato".
    Funciona da mesma forma, mudando apenas o valor do parâmetro.
    -->
    <a href="?page=contato">Contato</a>

</nav>

<!-- 
Resumo:
- <nav> organiza os links de navegação.
- <a> cria links clicáveis.
- O "?page=..." é uma query string (parâmetro na URL).
- Esse padrão é muito usado com PHP para controlar qual conteúdo será exibido
  sem precisar de várias páginas HTML separadas.
-->