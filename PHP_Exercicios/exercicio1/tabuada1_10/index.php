<?php

/*
Exibe um título na página usando HTML dentro do PHP.
echo serve para imprimir conteúdo na tela.
*/
echo "<h1>Tabuadas do 1 ao 10</h1>";

/*
Laço externo (for):
- Controla qual tabuada será exibida.
- $i começa em 1 e vai até 10.
- Cada valor de $i representa uma tabuada diferente.
*/
for ($i = 1; $i <= 10; $i++) {

    /*
    Mostra o título da tabuada atual.
    Ex: Tabuada do 1, Tabuada do 2, etc.
    */
    echo "<h3>Tabuada do $i</h3>";
    
    /*
    Laço interno (for):
    - Responsável pelos cálculos de multiplicação.
    - $j vai de 1 até 10.
    */
    for ($j = 1; $j <= 10; $j++) {

        /*
        Realiza a multiplicação entre $i e $j.
        */
        $resultado = $i * $j;

        /*
        Exibe o cálculo na tela.
        Ex: 2 x 3 = 6
        <br> quebra a linha no HTML.
        */
        echo "$i x $j = $resultado <br>";
    }

    /*
    <hr> cria uma linha horizontal para separar as tabuadas.
    */
    echo "<hr>";
}

?>

<!-- 
Resumo geral:
- Usa dois loops (for) aninhados.
- O primeiro define a tabuada (1 a 10).
- O segundo faz as multiplicações (1 a 10).
- echo imprime os resultados no formato HTML.
- Estrutura clássica para entender repetição e lógica.
-->