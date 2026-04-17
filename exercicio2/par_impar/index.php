<?php

/*
Função: parOuImpar

Parâmetro:
- int $numero → número inteiro que será analisado

Retorno:
- string → mensagem informando se é par ou ímpar
*/
function parOuImpar(int $numero): string {

    /*
    Operador % (módulo):
    - Retorna o resto da divisão.
    - Se $numero % 2 === 0 → o número é par.
    */
    if ($numero % 2 === 0) {

        // Caso seja par
        return "O número $numero é Par.";

    } else {

        // Caso seja ímpar
        return "O número $numero é Ímpar.";
    }
}


/*
Exemplo de uso:

Chama a função passando um número como argumento.
*/
echo parOuImpar(10); // Saída: O número 10 é Par.

/*
<br> quebra a linha no HTML
*/
echo "<br>";

echo parOuImpar(7);  // Saída: O número 7 é Ímpar.

?>

<!-- 
Resumo geral:
- Usa o operador % para verificar divisibilidade por 2.
- Se o resto for 0 → par.
- Caso contrário → ímpar.
- Retorna uma string pronta para exibição.

Esse é um dos exemplos mais clássicos de lógica condicional.
-->