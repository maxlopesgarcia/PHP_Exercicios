<?php
// =================================================================================
// O QUE ESTÁ ACONTECENDO: Declaração de variáveis e Tipagem Dinâmica.
// COM QUEM CONVERSA: Memória do servidor (onde os dados são armazenados temporariamente).
// O QUE FAZ: Cria espaços na memória para guardar textos e números. No PHP, você não 
// precisa dizer se é "String" ou "Int", o PHP descobre sozinho.
// =================================================================================
$variavel_em_php = "Não tem tipo";
$outra_variavel = 123;

// =================================================================================
// O QUE ESTÁ ACONTECENDO: Saída de dados para o Navegador.
// COM QUEM CONVERSA: Com o Navegador do usuário (Front-end).
// O QUE FAZ: Envia texto para ser exibido na tela.
// PHP_EOL e \n pulam linha no código-fonte; <br> pula linha visualmente no navegador.
// =================================================================================
echo "Olá, mundo! \n" . PHP_EOL;
print("<br>Olá, mundo!");

// O print retorna 1 se a exibição deu certo. Aqui, $var guardará o valor 1.
$var = print "Olá"; 
echo "<br> $var";

// =================================================================================
// O QUE ESTÁ ACONTECENDO: TypeCast (Conversão Forçada de Tipos).
// O QUE FAZ: Força uma variável a ser de um tipo específico (Inteiro, Float, etc).
// NOTA: A linha de soma com string ($texto) gera aviso/erro em versões recentes (8.2+).
// =================================================================================
$inteiro = (int) 10;
$float = (float) 10;
$texto = 10 + ".10. dfbdfbsd d "; // Tentativa de somar número com texto
$bool = (bool) 0; // 0 é convertido para "false"

// COM QUEM CONVERSA: Desenvolvedor (ferramenta de depuração).
// O QUE FAZ: var_dump mostra o tipo e o valor da variável detalhadamente.
echo "<pre>";
    var_dump($inteiro);
    var_dump($float);
    var_dump($texto);
    var_dump($bool);
echo "</pre>";

// =================================================================================
// O QUE ESTÁ ACONTECENDO: Manipulação de Arrays (Vetores).
// O QUE FAZ: Cria uma lista de números e percorre cada um deles.
// O símbolo "&" em &$valor (Referência) permite que você altere o valor original 
// do vetor dentro do loop.
// =================================================================================
$vetor = [1,2,3,5,4,6,9];

echo "<hr>";
var_dump($vetor);

foreach($vetor as $key => &$valor){
    if($valor == 6) $valor++; // Se achar o 6, transforma ele em 7 no vetor original.
}
echo "<br>";
var_dump($vetor);

// =================================================================================
// O QUE ESTÁ ACONTECENDO: Array Associativo (Chave => Valor).
// O QUE FAZ: Cria uma lista onde você define o "nome" da posição (índice), 
// podendo ser números decimais ou textos (strings).
// =================================================================================
$array_associativo = [
    1 => "Primeiro Valor",
    2.6 => "Segundo Valor",
    "p" => "Terceiro Valor"
];

echo "<pre>";
    var_dump($array_associativo);
echo "</pre>";

foreach($array_associativo as $valor){
    echo "<br> $valor";
}

// =================================================================================
// O QUE ESTÁ ACONTECENDO: Estruturas de Controle (Condicionais).
// COM QUEM CONVERSA: Lógica de navegação ou sistema.
// O QUE FAZ: Verifica se uma variável existe (isset) e decide qual bloco de código 
// executar com base no valor de $page.
// =================================================================================
$page;
if (!isset($page)) {
    $page = "value";
}

// SWITCH: Clássico para múltiplas escolhas.
switch ($page) {
    case 'value':
        echo "<hr> $page <hr>";
    break;
    default:
        echo "<hr> Nenhuma Página <hr>";
    break;
}

// MATCH: Nova funcionalidade do PHP 8, mais curta e moderna que o Switch.
echo "<hr> Match: <br>" . match($page){
    'value' => $page,
    'teste' => $page,
    default => "Nenhuma Página"
} . "<hr>";

// =================================================================================
// O QUE ESTÁ ACONTECENDO: Funções e Retornos.
// O QUE FAZ: Blocos de código reutilizáveis. 
// "soma" exige dois números e garante que o retorno seja um número decimal (float).
// =================================================================================
echo "<hr>";

function ola(){
    echo "<br>Olá<br>";
}

function soma($num1, $num2) : float {
    return $num1 + $num2;
}

echo "Função soma " . soma(10, 5);
ola();

// =================================================================================
// O QUE ESTÁ ACONTECENDO: Desestruturação de Array.
// O QUE FAZ: Pega um array retornado por uma função e já distribui os valores 
// em variáveis individuais ($um, $dois, $tres).
// =================================================================================
function retorna_vetor(){
    return [1,2,3];
}

[$um, $dois, $tres] = retorna_vetor();

echo "<p>Vetor recebido em varável = " . ($um + $dois + $tres) ."</p>";

?>