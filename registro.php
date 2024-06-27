<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Loja de Roupas</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>Loja de Roupas</h1>
        </div>
        <nav>
            <ul>
                <li><a class="cabecalho_menu" href="login.php">Voltar</a></li>
                <li><a class="cabecalho_menu_a" href="registro.php">registro</a></li>
            </ul>
        </nav>
    </header>   

    <section id="registro">
        <div class="login-container">
            <h2>Login</h2>
            <form action="processa-login.php" method="POST">
                <label for="nomeusuario">Nome de Usuário:</label>
                <input type="nomeusuario" id="nomeusuario" name="nomeusuario" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
                <button href="inicio.php" class="btn">criar conta</buttun>
            </form>
            <br>
        </div>

    </section>

    <footer class= "rodape">
        <p>&copy; 2024 Renova. Todos os direitos reservados.</p>
    </footer>
</body>
</html>



<?php
// processa-login.php

// Conectar ao banco de dados
$conexao = new PDO("mysql:host=localhost;dbname=mysql", 'root','');


// Verificar se os dados foram enviados
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Consulta ao banco de dados
    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        // Login bem-sucedido
        header("Location: dashboard.html");
    } else {
        // Login falhou
        echo "Email ou senha incorretos.";
    }
}

$conn->close();
?>
