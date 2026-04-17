<?php

/*
Importa o arquivo de funções auxiliares (helpers),
onde estão definidas funções como validaInput() e calcularIdade().
O require_once garante que o arquivo será incluído apenas uma vez.
*/
require_once "./helpers/functions.php";

/*
Trecho comentado usado para debug:
- var_dump($_POST) mostra todos os dados enviados pelo formulário.
- <pre> deixa a saída formatada e mais legível.
*/
/*
echo "<pre>";
var_dump($_POST);
echo "</pre>";
*/

/*
Verifica se o formulário foi enviado.
Se existir o campo "nome" no POST, significa que houve envio.
*/
if (isset($_POST["nome"])) {

    /*
    Array com os nomes dos campos esperados do formulário.
    */
    $chaves = ["nome", "email", "senha", "conf_senha", "data_nasc", "hora", "genero"];

    /*
    array_map:
    - Percorre cada chave do array.
    - Para cada uma, pega o valor em $_POST[$key]
    - Passa pela função validaInput() para limpar/proteger o dado.

    fn($key) => ... é uma arrow function (função curta).

    O resultado é atribuído diretamente às variáveis usando destructuring:
    [$nome, $email, $senha, $confSenha, $dataNasc, $hora, $genero]
    */
    [$nome, $email, $senha, $confSenha, $dataNasc, $hora, $genero] = array_map(
        fn($key) => validaInput($_POST[$key]),
        $chaves
    );

    /*
    Calcula a idade com base na data de nascimento informada.
    Usa a função criada anteriormente.
    */
    $idade = calcularIdade($dataNasc);

    // var_dump($nome); // usado para testes/debug
}
?>

<!-- 
Seção que exibe os dados recebidos em formato de tabela.
-->
<section>
    <table>

        <!-- Cabeçalho da tabela -->
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Senha Confere</th>
                <th>Data de Nascimento</th>
                <th>Idade</th>
                <th>Periodo</th>
                <th>Genero</th>
            </tr>
        </thead>

        <!-- Corpo da tabela -->
        <tbody>
            <tr>

                <!-- 
                < ?= ... ?> é atalho para echo no PHP.
                O operador ?? "" evita erro caso a variável não exista.
                -->

                <td><?= $nome ?? "" ?></td>
                <td><?= $email ?? "" ?></td>

                <!-- Aqui poderia verificar se senha e confirmação são iguais -->
                <td></td>

                <td><?= $dataNasc ?? "" ?></td>
                <td><?= $idade ?? "" ?></td>

                <!-- Aqui poderia tratar o período com base na hora (manhã/tarde/noite) -->
                <td></td>

                <td><?= $genero ?? "" ?></td>
            </tr>
        </tbody>

    </table>
</section>

<!-- 
Resumo geral:
- Recebe dados do formulário via $_POST.
- Usa array_map para limpar todos os dados com validaInput().
- Calcula idade com base na data.
- Exibe tudo em uma tabela.
- Usa < ?= ?> para imprimir valores rapidamente.
- ?? "" evita erros caso não haja envio ainda.

Melhorias possíveis:
- Validar se senha == conf_senha.
- Definir período baseado na hora.
- Validar campos obrigatórios.
-->