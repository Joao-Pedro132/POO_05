<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Reservas de Hotel</title>
</head>
<body>
    <header>
        <h1>Sistema de Reservas de Hotel</h1>
    </header>
    <main>
        <form action="processa.php" method="POST">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" required>

            <label for="tipoQuarto">Tipo de Quarto</label>
            <select name="tipoQuarto" id="tipoQuarto">
                <option value="Standard">Standard</option>
                <option value="Suite">Suíte</option>
            </select>

            <label for="qtddiarias">Quantidade de Diárias</label>
            <input type="number" id="qtddiarias" name="qtddiarias" required>

            <label for="">Deseja Café da Manhã</label>
            <label for="Sim">Sim</label>
            <input type="radio" value="Sim" id="Sim" name="cafeManha" required>
            <label for="Não">Não</label>
            <input type="radio" value="Não" id="Nao" name="cafeManha" required>

            <button type="submit">Enviar</button>
        </form>
    </main>
</body>
</html>