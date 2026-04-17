<?php

/*
define("TAXA_JUROS", 0.02);

Define uma constante chamada TAXA_JUROS.
- Constantes não podem ser alteradas depois de definidas.
- Aqui representa 2% ao mês (0.02).
*/
define("TAXA_JUROS", 0.02); 


/*
Função: calcularEmprestimo

Parâmetros:
- float $valor → valor inicial do empréstimo
- int $meses → quantidade de meses

Retorno:
- float → valor total a ser pago
*/
function calcularEmprestimo(float $valor, int $meses): float {

    /*
    Fórmula de juros simples:
    M = P * (1 + (i * n))

    Onde:
    - M = montante final
    - P = valor inicial (principal)
    - i = taxa de juros
    - n = tempo (meses)
    */

    $valorTotal = $valor * (1 + (TAXA_JUROS * $meses));

    // Retorna o valor total calculado
    return $valorTotal;
}


/*
Exemplo de uso da função:

- Empréstimo de 1000 reais
- Por 12 meses
*/
$total = calcularEmprestimo(1000, 12);


/*
number_format:
- Formata o número para padrão brasileiro:
  2 casas decimais, vírgula como decimal, ponto como milhar.

Ex: 1240 vira 1.240,00
*/
echo "Total a pagar após o período: R$ " . number_format($total, 2, ',', '.');

?>

<!-- 
Resumo geral:
- define() cria uma constante fixa (taxa de juros).
- A função calcula o valor final com juros simples.
- Usa tipagem (float, int) para maior controle.
- number_format deixa o valor no padrão monetário brasileiro.

Possível melhoria:
- Implementar juros compostos (mais usado no mercado).
-->