<?php

/*
Função: formatarNomes

Parâmetro:
- array $nomes → recebe uma lista de nomes completos (nome + sobrenome)

Retorno:
- array → retorna uma nova lista com os nomes formatados
*/
function formatarNomes(array $nomes): array {

    /*
    array_map:
    - Percorre cada elemento do array $nomes
    - Aplica uma função (callback) em cada item
    - Retorna um novo array com os resultados
    */
    return array_map(function($nomeCompleto) {

        /*
        explode(" ", $nomeCompleto):
        - Divide a string sempre que encontrar um espaço
        - Ex: "Max Oliveira" → ["Max", "Oliveira"]
        */
        $partes = explode(" ", $nomeCompleto);
        
        /*
        Pega o primeiro nome (posição 0)
        */
        $nome = $partes[0];

        /*
        Pega o sobrenome (posição 1)
        ?? '' evita erro caso não exista sobrenome
        */
        $sobrenome = $partes[1] ?? '';

        /*
        Retorna no formato: "Sobrenome, Nome"
        Ex: "Oliveira, Max"
        */
        return "$sobrenome, $nome";

    }, $nomes);
}


/*
Exemplo de uso:
Lista original com nomes completos
*/
$listaOriginal = ["Max Oliveira", "Karin Silva", "João Santos"];

/*
Chama a função para formatar os nomes
*/
$listaFormatada = formatarNomes($listaOriginal);


/*
Exibe o resultado formatado

<pre> mantém a formatação do print_r organizada
*/
echo "<pre>";
print_r($listaFormatada);
echo "</pre>";

?>

<!-- 
Resumo geral:
- array_map aplica uma função em todos os itens do array.
- explode separa nome e sobrenome.
- ?? evita erro caso não exista sobrenome.
- Retorna nomes no formato "Sobrenome, Nome".
- print_r mostra o array de forma legível.

Possível melhoria:
- Suportar nomes com mais de dois termos (ex: "João da Silva Santos").
-->