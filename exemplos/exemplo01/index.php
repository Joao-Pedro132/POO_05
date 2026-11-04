<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Cadastro de Produtos</h1>
    </header>

    <div class="formulario">
        <form action="processa.php" method="POST">
            <!-- Campos para preencher o objeto Produto -->
            <!-- Campo Nome -->
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" placeholder="Escreva o Nome do Produto..." required>

            <!-- Campo Preço -->
            <label for="preco">Preço</label>
            <input type="number" id="preco" name="preco" placeholder="Escreva o Preço do Produto..." required>

            <!-- Campo Quantidade -->
            <label for="quantidade">Quantidade</label>
            <input type="number" id="quantidade" name="quantidade" placeholder="Escreva a Quantidade do Produto..." required>

            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>