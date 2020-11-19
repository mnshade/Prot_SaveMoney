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