<?php

    // require 'app/Model/Connection.php';

    // $conn = new Connection();
    // echo $conn->Connect();

    require 'app/Model/Deposito.php';

    // $deposito = new Deposito();
    // print_r($deposito->Read('Usuario_UsuarioID', $_SESSION['user']));
    
    // session_start();
    // var_dump($_SESSION);

    session_destroy();
    session_unset();    

    // $ch = curl_init();
    // curl_setopt($ch, CURLOPT_URL, 'https://moat.ai/api/task/');
    // curl_setopt($ch, CURLOPT_HTTPHEADER,array('Basic: ZGV2ZWxvcGVyOlpHVjJaV3h2Y0dWeQ=='));
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // $result = curl_exec($ch);
    // $resultado = json_decode($result);
    // $retorno = $resultado->data;

    // curl_close($ch);
    // print_r($result);
