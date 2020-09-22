<?php
    
require_once 'src/Conta.php';
require_once 'src/Titular.php';

$contaRicardo = new Conta(new Titular("Ricardo", "123.456.789-10"), "5000");
$contaAngela = new Conta(new Titular("Angela", "123.456.789-11"), "10000");
$contaAniete = new Conta(new Titular("Aniete", "123.456.789-12"), "15000");

$clientes = [$contaRicardo, $contaAngela, $contaAniete];

?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AnRi Bank</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <h1>Clientes</h1>

    <table class="table table-dark">
    <thead>
        <tr>
        <th scope="col">Nome</th>
        <th scope="col">CPF</th>
        <th scope="col">Saldo</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($clientes as $cliente) {?>
        <tr>
        <th scope="row"><?=$cliente->recuperaNomeTitular()?></th>
        <td><?=$cliente->recuperaCpfTitular()?></td>
        <td>R$ <?=$cliente->recuperaSaldo()?></td>
        </tr>
    <?php } ?>
    </tbody>
    </table>


</body>
</html>