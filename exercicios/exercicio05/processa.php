<?php
require_once 'Vendedor.php';

if (!$_POST['nome'] || !$_POST['sbase'] || !$_POST['tvendas']){
    exit('Dados Incorretos!');
}

$vendedor1 = new Vendedor($_POST['nome'], (float)$_POST['sbase'], (float)$_POST['tvendas']);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Pagamento de Vendedores</title>
</head>
<body>
    <header>
        <h2>Informações</h2>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>informação</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nome do Vendedor</td>
                    <td><?=$vendedor1->getNome()?></td>
                </tr>
                <tr>
                    <td>Salário Base</td>
                    <td>R$ <?=Number_format($vendedor1->getSalarioBase(), 2, ",", ".")?></td>
                </tr>
                <tr>
                    <td>Vendas Realizadas no Mês</td>
                    <td>R$ <?=Number_format($vendedor1->getTotalVendasMes(), 2, ",", ".")?></td>
                </tr>
                <tr>
                    <td>Comissão</td>
                    <td>comissão de R$ <?=Number_format($vendedor1->calcularComissao(), 2, ",", ".")?></td>
                </tr>
                <tr>
                    <td>Calcular Bônus</td>
                    <td><?=$vendedor1->calcularBonus()?></td>
                </tr>
                <tr>
                    <td>Salário Final</td>
                    <td><?=Number_format($vendedor1->calcularSalarioFinal(), 2, ",", ".")?></td>
                </tr>
            </tbody>
        </table>
    </main>
</body>
</html>