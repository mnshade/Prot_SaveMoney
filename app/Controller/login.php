<?php

    require '../Model/User.php';

    session_start();

    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($email) || empty($password)){
        header("Location: ../View/login.php");
        $_SESSION['msg'] = "Algum campo está vazio";
    }else{

        // var_dump($user, $password);
        $usr = new User();
        $retorno = $usr->Login($email, $password);

        // var_dump($retorno);

        if($retorno['rowCount'] === 1){
            $_SESSION['user'] = $resultado['EmailUsuario'];
            header('Location: ../View/dashboard.php');
        }
        
    }

