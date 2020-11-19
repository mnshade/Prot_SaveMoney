<?php

    // require 'app/Model/Connection.php';

    // $conn = new Connection();
    // echo $conn->Connect();

    require 'app/Model/Deposito.php';

    $deposito = new Deposito();
    print_r($deposito->Read('Usuario_UsuarioID', 1));