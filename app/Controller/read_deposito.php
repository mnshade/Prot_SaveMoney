<?php

    require '../Model/Deposito.php';

    $json = $_POST['data'];

    $data = json_decode($json, true);

    $deposito = new Deposito();
    $resultado = $deposito->Read($data['param'], $data['id']);

    // $retorno = $resultado['SUM(DepositoEconomiaValor)'];

    echo $resultado;