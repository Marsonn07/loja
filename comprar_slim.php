<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loja de Roupas - Comprar</title>
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
                <li><a class="cabecalho_menu_a" href="comprar.php">Comprar</a></li>
                <li><a class="cabecalho_menu" href="sobre.php">Sobre Nós</a></li>
                <li><a class="cabecalho_menu" href="contato.php">Contato</a></li>
                <li><a class="cabecalho_menu" href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>

  <section id="produto">
    <h2>Detalhes do Produto</h2>
    <div class="container-flex">
      <div class="produto-imagem">
        <img src="assets/slim.png" alt="Imagem do Produto">
      </div>
      <div class="produto-detalhes">
        <h3>Slim</h3>
        <p>R$ 100,90</p>
        <p>
Nossa camiseta slim é a peça perfeita para quem busca conforto, estilo e versatilidade. Ela é leve, respirável e macia ao toque, ideal para os dias de calor. O corte garante um caimento perfeito no corpo, valorizando suas curvas.
<br>
<br>
Disponível em cores vibrantes e estampas exclusivas
Ideal para usar no dia a dia, em atividades físicas ou em ocasiões mais casuais
<br>Composição:

<br>[100% algodão]
<br>
<br>Tamanhos:

<br>[Disponível nos tamanhos PP, P, M, G e GG]
<br>Consulte a tabela de medidas para encontrar o tamanho ideal para você
<br>Cuidados:

<br>Lavar com água fria e sabão neutro
Não usar alvejante
Secar à sombra
Passar a ferro em temperatura baixa.
<br>Combine com:

Short jeans, saia ou calça
Tênis, sandálias ou rasteirinhas
Acessórios como chapéus, colares e pulseiras</p>
<br>
</p>
        <form action="cart.php" method="post">
          <label for="quantidade">Quantidade:</label>
          <input type="number" id="quantidade" name="quantidade" min="1" value="1" required>
          <button type="submit">Adicionar ao Carrinho</button>
        </form>
      </div>
    </div>
  </section>

  <footer class="rodape">
    <p>&copy; 2024 Renova. Todos os direitos reservados.</p>
  </footer>
</body>
</html>
