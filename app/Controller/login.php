<?php

    require '../Model/User.php';

    session_start();

    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($email) || empty($password)){
        $_SESSION['msg'] = "Algum campo está vazio. Preencha corretamento por favor.";
        header("Location: ../View/login.php");
    }else{

        $usr = new User();
        $retorno = $usr->Login($email, $password);

        // var_dump($retorno);

        if($retorno['rowCount'] === 1){
            $_SESSION['user'] = $retorno['EmailUsuario'];
            header('Location: ../View/dashboard.php');
        }else{
            $_SESSION['msg'] = "Usuário ou senha incorreto. Prencha novamente.";
            header('Location: ../View/login.php');
        }
        
    }

