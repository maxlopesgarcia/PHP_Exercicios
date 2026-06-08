<?php
// Inicia a sessão (permite guardar dados entre páginas)
session_start();

// Se não existir a lista de usuários, cria uma
if (!isset($_SESSION['usuarios'])) {
    $_SESSION['usuarios'] = [];
}

// Função para limpar dados (remove espaços extras)
function limpar($dado) {
    return trim($dado);
}

// Verifica se o formulário foi enviado (método POST)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Coleta os dados enviados pelo formulário (cliente → servidor)
    $nome = limpar($_POST['nome'] ?? '');
    $email = limpar($_POST['email'] ?? '');
    $idade = intval($_POST['idade'] ?? 0);
    $genero = limpar($_POST['genero'] ?? '');
    $senha = $_POST['senha'] ?? '';

    $erros = [];

    // ===== VALIDAÇÕES =====

    if (empty($nome)) $erros[] = "Nome inválido";

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erros[] = "Email inválido";
    }

    if ($idade <= 0) $erros[] = "Idade inválida";

    if (empty($genero)) $erros[] = "Selecione um gênero";

    if (strlen($senha) < 4) $erros[] = "Senha muito curta";

    // ===== SE NÃO HOUVER ERROS =====
    if (empty($erros)) {

        // Armazena os dados na sessão (servidor)
        $_SESSION['usuarios'][] = [
            'nome' => $nome,
            'email' => $email,
            'idade' => $idade,
            'genero' => $genero,
            // Senha protegida (não salva em texto puro)
            'senha' => password_hash($senha, PASSWORD_DEFAULT)
        ];

        // Redireciona para a página de usuários
        header("Location: usuarios.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>

<h2>Cadastro Seguro</h2>

<!-- Link para outra página (navegação entre arquivos) -->
<a href="usuarios.php">Ver Usuários</a>

<!-- Exibe erros (protegido contra XSS) -->
<?php if (!empty($erros)): ?>
    <ul style="color:red;">
        <?php foreach ($erros as $e): ?>
            <li><?= htmlspecialchars($e) ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<!-- Formulário envia dados para o próprio arquivo -->
<form method="POST">

    Nome:<br>
    <input type="text" name="nome" required><br><br>

    Email:<br>
    <input type="email" name="email" required><br><br>

    Idade:<br>
    <input type="number" name="idade" required><br><br>

    Gênero:<br>
    <select name="genero" required>
        <option value="">Selecione</option>
        <option value="Masculino">Masculino</option>
        <option value="Feminino">Feminino</option>
        <option value="Outro">Outro</option>
    </select><br><br>

    Senha:<br>
    <input type="password" name="senha" required><br><br>

    <button type="submit">Cadastrar</button>
</form>

</body>
</html>