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
        $retorno = $usr->Login($email, md5($password));

        // var_dump($retorno);

        if($retorno['rowCount'] === 1){
            $_SESSION['user'] = $retorno['ID'];
            $resultado = $usr->Read('UsuarioID',$retorno['ID']);
            $_SESSION['nome'] = $resultado['NomeUsuario'];

            // var_dump($usr->Read($retorno['ID']));            
            
            header('Location: ../View/dashboard.php');
        }else{
            $_SESSION['msg'] = "Usuário ou senha incorreto. Prencha novamente.";
            header('Location: ../View/login.php');
        }
        
    }

