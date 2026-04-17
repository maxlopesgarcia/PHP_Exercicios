<!-- 
Este trecho cria o rodapé (footer) da página.
A tag <footer> é usada para representar a parte inferior do site,
normalmente contendo informações como direitos autorais, contatos, etc.
-->

<footer>
    
    <!-- 
    A tag <p> define um parágrafo.
    
    &copy; é uma entidade HTML que representa o símbolo de copyright (©).
    
    < ?= date("Y") ?> é um código PHP:
    -< ?= ... ?> é uma forma curta de "echo", ou seja, imprime algo na tela.
    - date("Y") retorna o ano atual (ex: 2026).
    
    Então, isso faz com que o ano seja atualizado automaticamente,
    sem precisar alterar manualmente todo ano.
    -->
    <p>&copy; <?= date("Y") ?> - Todos os direitos reservados</p>

</footer>

<!-- 
Resumo:
- <footer> define o rodapé da página.
- &copy; mostra o símbolo ©.
- <?= date("Y") ?> insere dinamicamente o ano atual usando PHP.
- Muito útil para manter o site sempre atualizado automaticamente.
-->