<?php
require_once 'ReservaHotel.php';

if (!$_POST['nome'] || !$_POST['tipoQuarto'] || !$_POST['qtddiarias'] || !$_POST['cafeManha']){
    exit('Dados Incorretos!');
}

$reserva1 = new ReservaHotel($_POST['nome'], $_POST['tipoQuarto'], $_POST['qtddiarias'], $_POST['cafeManha']);

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
        <h1>Informações</h1>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>Informações</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nome</td>
                    <td><?=$reserva1->getNome()?></td>
                </tr>
                <tr>
                    <td>Tipo do Quarto</td>
                    <td><?=$reserva1->getTipoQuarto()?></td>
                </tr>
                <tr>
                    <td>Diarias</td>
                    <td><?=$reserva1->getqtdDiarias()?></td>
                </tr>
                <tr>
                    <td>Com Café da Manhã?</td>
                    <td><?=$reserva1->getCafeManha()?></td>
                </tr>
                <tr>
                    <td>Calcular o Valor da Hospedagem</td>
                    <td>R$<?=Number_format($reserva1->calcularHospedagem(), 2, ",", ".")?></td>
                </tr>
                <tr>
                    <td>Calcular o Valor do Desconto</td>
                    <td>R$<?=Number_format($reserva1->calcularDesconto(), 2, ",", ".")?></td>
                </tr>
                <tr>
                    <td>Calcular o Valor Total</td>
                    <td>R$<?=Number_format($reserva1->calcularTotal(), 2, ",", ".")?></td>
                </tr>
            </tbody>
        </table>
    </main>
</body>
</html>