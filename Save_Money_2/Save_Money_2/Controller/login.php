<?php

    require '../Model/User.php';

    $user = $_POST['user'];
    $password = $_POST['password'];

    if(empty($user) || empty($password)){
        header("Location: ../View/login.php");
        $_SESSION['msg'] = "Algum campo está vazio";
    }else{
        $usr = new User();
        $user->Login($user, $password);

        // echo $retorno;
    }

