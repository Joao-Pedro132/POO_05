<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Pagamento de Vendedores</title>
</head>
<body>
    <header>
        <h1>Sistema de Pagamento de Vendedores</h1>
    </header>
    <main>
        <form action="processa.php" method="POST">
            <label for="nome">Nome do Vendedor</label>
            <input type="text" id="nome" name="nome" required>

            <label for="sbase">Salário Base</labael>
            <input type="number" id="sbase" name="sbase" required>

            <label for="tvendas">Total de vendas realizadas no mês</label>
            <input type="number" id="tvendas" name="tvendas" required>

            <button type="submit">Enviar</button>
        </form>
    </main>
</body>
</html>