<?php
require_once 'EmprestimoLivro.php';

if (!$_POST['nome'] || !$_POST['titulo'] || !$_POST['qtdatraso']){
    exit('Dados Incorretos!');
}

$livro1 = new EmprestimoLivro($_POST['nome'], $_POST['titulo'], (int)$_POST['qtdatraso']);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações</title>
</head>
<body>
    <header>
        <h2>Informações</h2>
    </header>
    <main>
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
                    <td><?=$livro1->getNome()?></td>
                </tr>
                <tr>
                    <td>Título</td>
                    <td><?=$livro1->getTitulo()?></td>
                </tr>
                <tr>
                    <td>Dias de Atraso</td>
                    <td><?=$livro1->getQtdAtraso()?></td>
                </tr>
                <tr>
                    <td>Situação</td>
                    <td><?=$livro1->verificarSituacao()?></td>
                </tr>
                <tr>
                    <td>Multa</td>
                    <td>R$<?=Number_format($livro1->calcularMulta(), 2, ",", ".")?></td>
                </tr>
            </tbody>
        </table>
    </main>
</body>
</html>