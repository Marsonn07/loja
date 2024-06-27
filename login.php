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
                <li><a class="cabecalho_menu" href="inicio.php">Início</a></li>
                <li><a class="cabecalho_menu" href="produtos.php">Produtos</a></li>
                <li><a class="cabecalho_menu" href="sobre.php">Sobre Nós</a></li>
                <li><a class="cabecalho_menu" href="contato.php">Contato</a></li>
                <li><a class="cabecalho_menu_a" href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <section id="login">
        <div class="login-container">
            <h2>Login</h2>
            <form action="inicio_a.php" method="POST">
                <label for="nomeusuario">Nome de Usuário:</label>
                <input type="nomeusuario" id="nomeusuario" name="nomeusuario" required>
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
                <button href="inicio.php" class="btn">Entrar</buttun>
            </form>
            <br>
        </div>
        <p>Não tem uma conta? <a href="registro.php">Registre-se aqui</a></p>

    </section>

    <footer class= "rodape">
        <p>&copy; 2024 Renova. Todos os direitos reservados.</p>
    </footer>
</body>
</html>



<?php

$conexao = new PDO("mysql:host=localhost;dbname=loja", 'root','');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        header("Location: conexao.php");
    } else {
        echo "Email ou senha incorretos.";
    }
}

$conn->close();
?>


