<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03</title>
</head>
<body>
        <header>
        <h1>Sistema de Multas de Biblioteca</h1>
    </header>
    <main>
        <form action="processa.php" method="POST">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" required>

            <label for="tipoquarto">Tipo do Quarto</label>
            <select name="tipoquarto" id="tipoquarto" required>
                <option value="Standard">Standard</option>
                <option value="Suite">Suíte</option>
            </select>

            <label for="qtddiarias">Quantidade de Diárias</label>
            <input type="number" id="qtddiarias" name="qtddiarias" required>

            <label for="">Deseja café da manha?</label>
            <label for="quercafe">Sim</label>
            <input type="radio" value="Sim" id="quercafe" name="cafeManha" required>
            <br>
            <label for="nquercafe">Não</label>
            <input type="radio" value="Nao" id="nquercafe" name="cafeManha" required>
            <br>

            <button type="submit">Enviar</button>
        </form>
    </main>
</body>
</html>