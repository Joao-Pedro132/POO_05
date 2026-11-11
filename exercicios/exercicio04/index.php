<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Multas de Biblioteca</title>
</head>
<body>
    <header>
        <h1>Sistema de Multas de Biblioteca</h1>
    </header>
    <main>
        <form action="processa.php" method="POST">
            <label for="nome">Nome do usuário</label>
            <input type="text" id="nome" name="nome" required>

            <label for="titulo">Título do livro</label>
            <input type="text" id="titulo" name="titulo" required>

            <label for="qtdatraso">Quantidade de dias de atraso</label>
            <input type="number" id="qtdatraso" name="qtdatraso" required>

            <button type="submit">Enviar</button>
        </form>
    </main>
</body>
</html>