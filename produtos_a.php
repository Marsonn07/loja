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
                <li><a class="cabecalho_menu" href="inicio_a.php">Início</a></li>
                <li><a class="cabecalho_menu_a" href="produtos_a.php">Produtos</a></li>
                <li><a class="cabecalho_menu" href="sobre_a.php">Sobre Nós</a></li>
                <li><a class="cabecalho_menu" href="contato_a.php">Contato</a></li>
            </ul>
        </nav>
    </header>

    <section id="pesquisa">
    <div class="search-container">
        <form action="/search" method="get">
            <div class="container-flex">
                <input type="text" id="search" name="search" placeholder="Digite sua pesquisa aqui..." required>
                <input type="submit" value="Pesquisar">
            </div>
        </form>
    </div>
    </section>

    <section id="produtos">
        <h2>Novidades</h2>
        <div class="container-flex">
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
                    <div class="produto-item">
                        <img src="assets/slim.png" width="400px" height="400px" alt="Produto 3">
                        <h3>slim</h3>
                        <p>R$ 100,90</p>
                        <a href="comprar_slim.php" class="btn">Comprar</a>
                    </div>
                    <div class="produto-item">
                        <img src="assets/manga_longa.png" width="400px" height="400px" alt="Produto 3">
                        <h3>Manga Longa</h3>
                        <p>R$ 90,00</p>
                        <a href="comprar_manga_longa.php" class="btn">Comprar</a>
                    </div>

                
                    <!-- Adicione mais produtos conforme necessário -->
                </div>
        </div>        
    </section>

    <footer class= "rodape">
        <p>&copy; 2024 Renova. Todos os direitos reservados.</p>
    </footer>
</html>
