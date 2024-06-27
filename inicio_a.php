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
                <li><a class="cabecalho_menu_a" href="inicio_a.php">Início</a></li>
                <li><a class="cabecalho_menu" href="produtos_a.php">Produtos</a></li>
                <li><a class="cabecalho_menu" href="sobre_a.php">Sobre Nós</a></li>
                <li><a class="cabecalho_menu" href="contato_a.php">Contato</a></li>
            </ul>
        </nav>
    </header>

   
    <section id="home">
        <div class="banner">
                <h2>Bem-vindo à nossa Loja de Roupas</h2>
                <p>Descubra as últimas tendências da moda.</p>
                <a type="button" href="produtos.php" class="btn">Explore Agora</a>
              
        </div>
    </section>
    

    
    <section id="produtos">
        <h2>Novidades</h2>
        <div class="produtos-grid">
            <div class="produto-item">
                <img src="assets/regata.jpg" width="400px" height="400px" alt="Produto 1">
                <h3>Regata</h3>
                <p>R$ 99,90</p>
                <a href="comprar_regata.php" class="btn">Comprar</a>
            </div>
            <div class="produto-item">
                <img src="assets/oversized.png" width="400px" height="400px" alt="Produto 2">
                <h3>oversized</h3>
                <p>R$ 129,90</p>
                <a href="comprar_oversized.php" class="btn">Comprar</a>
            </div>
        </div>
    </section>

    <footer class= "rodape">
        <p>&copy; 2024 Renova. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
