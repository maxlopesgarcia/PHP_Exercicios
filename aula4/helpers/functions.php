<?php

/*
Função: validaInput
Objetivo: "limpar" e proteger dados recebidos (ex: de formulários)
para evitar problemas como espaços indesejados e ataques XSS.
*/
function validaInput($dados){

    /*
    trim():
    Remove espaços em branco no início e no fim da string.
    Ex: "  texto  " vira "texto"
    */
    $dados = trim($dados);

    /*
    htmlspecialchars():
    Converte caracteres especiais em entidades HTML.
    Ex: < vira &lt; e > vira &gt;
    Isso evita que códigos HTML/JS sejam executados (proteção contra XSS).
    */
    $dados = htmlspecialchars($dados);

    // Retorna o dado já tratado
    return $dados;
}


/*
Função: calcularIdade
Objetivo: calcular a idade com base em uma data (geralmente data de nascimento)
*/
function calcularIdade($data): int{

    /*
    Cria um objeto DateTime com a data informada.
    Isso permite trabalhar com datas de forma mais fácil no PHP.
    */
    $data = new DateTime($data);

    /*
    Cria um objeto com a data atual (momento atual).
    */
    $agora = new DateTime();

    /*
    diff():
    Calcula a diferença entre duas datas.
    
    ->y:
    Retorna apenas a diferença em anos (idade).
    */
    return $agora->diff($data)->y;
}

?>

/*
Resumo geral:
- validaInput(): limpa e protege dados de entrada (boa prática de segurança).
- calcularIdade(): usa DateTime para calcular idade automaticamente.
- O uso de DateTime é mais confiável do que cálculos manuais com datas.
*/