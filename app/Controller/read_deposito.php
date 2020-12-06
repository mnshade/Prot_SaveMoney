<?php

    require '../Model/Deposito.php';

    $deposito = new Deposito();

    $json = $_POST['data'];

    $data = json_decode($json, true);

    // var_dump($data);

    if(isset($data['saldo'])){
        $resultado = $deposito->Read($data['param'], $data['id'], $data['saldo']);
        echo $resultado;
    }else{
        $resultados = $deposito->Read($data['param'], $data['id']);
        $return = json_encode($resultados);

        echo $return;
        // foreach($resultados as $resultado){
        //     for($i=0; $i<count($resultado)/2;$i++){
        //         echo $resultado[$i];
        //         // var_dump($resultado[$i]);
        //     }
            // var_dump(count($resultado));
            // var_dump($resultado);
        // }
    }

    // $retorno = $resultado['SUM(DepositoEconomiaValor)'];

    // echo $resultado;