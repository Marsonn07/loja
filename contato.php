<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Roupas - Bem-vindo</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>Renova</h1>
        </div>
        <nav>
            <ul>
                <li><a class="cabecalho_menu" href="inicio.php">Início</a></li>
                <li><a class="cabecalho_menu" href="produtos.php">Produtos</a></li>
                <li><a class="cabecalho_menu" href="sobre.php">Sobre Nós</a></li>
                <li><a class="cabecalho_menu_a" href="contato.php">Contato</a></li>
                <li><a class="cabecalho_menu" href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>




    <section id="contato">
        <h2>Contato</h2>
        <br>
        <h2>Se você quiser conversar conosco para tirar alguma dúvida ou fazer alguma reclamação, é só preencher esse campo abaixo,
            <br> que entraremos em contato com você!</h2>
            <br>
            <br>
        <form action="envia-formulario.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" required></textarea>
            <button type="submit">Enviar</button>
        </form>
    </section>
    <br>
    <br>

    <footer class= "rodape">
        <p>&copy; 2024 Renova. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
