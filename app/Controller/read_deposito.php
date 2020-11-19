<?php

    require '../Model/Deposito.php';

    $json = $_POST['data'];

    $data = json_decode($json, true);

    if(isset($_post['saldo'])){
        $saldo = $_POST['saldo'];
    }

    $deposito = new Deposito();
    $resultado = $deposito->Read($data['param'], $data['id'], $saldo);

    // $retorno = $resultado['SUM(DepositoEconomiaValor)'];

    echo $resultado;