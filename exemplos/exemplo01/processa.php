<?php
require_once 'Produto.php';

// POST do formulário do index.php
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];

// Validação de Dados
if (!$nome || !$preco || !$quantidade){
    exit('Dados Incorretos!');
}

// Objeto da classe Produto
$produto1 = new Produto($nome, (float)$preco, (int)$quantidade);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto Cadastrado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Produtos Cadastrado</h1>
    </header>
    <main class="resultado">
        <table>
            <thead>
                <tr>
                    <th>Informação</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nome</td>
                    <td><?=$produto1->GetNome()?></td>
                </tr>
                <tr>
                    <td>Preço</td>
                    <td>R$<?=Number_format($produto1->GetPreco(), 2, ",", ".")?></td>
                </tr>
                <tr>
                    <td>Quantidade</td>
                    <td><?=$produto1->GetQuantidade()?></td>
                </tr>
                <tr>
                    <td>Valor Valor</td>
                    <td>R$<?=Number_format($produto1->ValorTotal(), 2, ",", ".")?></td>
                </tr>
            </tbody>
        </table>
        <a class="voltar" href="index.php">Voltar para o Cadastro</a>
    </main>
</body>
</html>