<?php
// Inicia sessão para acessar os dados salvos
session_start();

// Recupera os usuários da sessão
$usuarios = $_SESSION['usuarios'] ?? [];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Usuários</title>
</head>
<body>

<h2>Lista de Usuários</h2>

<!-- Navegação para o formulário -->
<a href="formulario.php">Cadastrar Novo</a>

<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>#</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Idade</th>
        <th>Gênero</th>
    </tr>

    <?php if (!empty($usuarios)): ?>
        <?php foreach ($usuarios as $index => $u): ?>
            <tr>
                <!-- Ordem de cadastro (FIFO) -->
                <td><?= $index + 1 ?></td>

                <!-- htmlspecialchars protege contra XSS -->
                <td><?= htmlspecialchars($u['nome']) ?></td>
                <td><?= htmlspecialchars($u['email']) ?></td>
                <td><?= htmlspecialchars($u['idade']) ?></td>
                <td><?= htmlspecialchars($u['genero']) ?></td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="5">Nenhum usuário cadastrado</td>
        </tr>
    <?php endif; ?>

</table>

</body>
</html>