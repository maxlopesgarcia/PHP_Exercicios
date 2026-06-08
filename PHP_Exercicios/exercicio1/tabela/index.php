<?php

/*
Aqui estamos criando um array (vetor) multidimensional chamado $usuarios.

- Cada item do array representa um usuário.
- Cada usuário é um array associativo (chave => valor).

Ex:
"nome" => "Max"
*/
$usuarios = [
    ["id" => 1, "nome" => "Max", "sobrenome" => "Oliveira", "ddd" => 41, "telefone" => "99999-1111"],
    ["id" => 2, "nome" => "Karin", "sobrenome" => "Silva", "ddd" => 41, "telefone" => "99999-2222"],
    ["id" => 3, "nome" => "Ana", "sobrenome" => "Souza", "ddd" => 11, "telefone" => "98888-3333"]
];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <!-- Define o padrão de caracteres -->
    <meta charset="UTF-8">

    <!-- Título da página -->
    <title>Tabela de Usuários</title>

    <style>
        /*
        Estilização básica da tabela
        */

        /* Remove espaços entre bordas */
        table { border-collapse: collapse; width: 100%; }

        /* Estilo das células */
        th, td { 
            border: 1px solid black; 
            padding: 8px; 
            text-align: left; 
        }

        /* Cor de fundo do cabeçalho */
        th { background-color: #f2f2f2; }
    </style>

</head>
<body>

    <!-- Título visível da página -->
    <h2>Lista de Usuários</h2>

    <!-- Início da tabela -->
    <table>

        <!-- Cabeçalho da tabela -->
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>DDD</th>
                <th>Telefone</th>
            </tr>
        </thead>

        <!-- Corpo da tabela -->
        <tbody>

            <?php 
            /*
            foreach percorre cada usuário dentro do array $usuarios.

            A cada repetição:
            - $usuario representa UM usuário do array.
            */
            foreach ($usuarios as $usuario): 
            ?>

                <tr>

                    <!-- 
                    echo imprime o valor na tela.

                    $usuario['id'] acessa o campo "id" do usuário atual.
                    -->
                    <td><?php echo $usuario['id']; ?></td>

                    <td><?php echo $usuario['nome']; ?></td>

                    <td><?php echo $usuario['sobrenome']; ?></td>

                    <td><?php echo $usuario['ddd']; ?></td>

                    <td><?php echo $usuario['telefone']; ?></td>

                </tr>

            <?php endforeach; ?>
            <!-- endforeach encerra o foreach no formato alternativo -->

        </tbody>
    </table>

</body>
</html>

<!-- 
Resumo geral:
- Criamos um array multidimensional com usuários.
- Usamos foreach para percorrer os dados.
- Para cada usuário, criamos uma linha (<tr>) na tabela.
- echo mostra os valores de cada campo.
- Mistura de PHP + HTML permite gerar conteúdo dinâmico.

Esse padrão é MUITO usado para listar dados vindos de banco de dados.
-->