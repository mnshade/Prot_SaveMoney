<?php

    require '../Model/Connection.php';

    $user = $_POST['user'];
    $password = $_POST['password'];

    if(empty($user) || empty($password)){
        header("Location: ../View/login.php");
        $_SESSION['msg'] = "Algum campo está vazio";
    }else{
        $conn = new Connetction();

        $returno = $conn->Connect();

        echo $retorno;
    }

