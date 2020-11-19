<?php

    require '../Model/User.php';

    $json = $_POST['data'];

    $data = json_decode($json, true);

    // var_dump($data);

    // $email = $_POST['email'];
    // $password = $_POST['password'];

    $email = $data['email'];
    $password = $data['password'];

    if(empty($email) || empty($password)){
        return "Algum campo está vazio. Preencha corretamento por favor.";
        // header("Location: ../View/login.php");
    }else{

        $usr = new User();
        if($retorno = $usr->Login($email, md5($password))){
            // var_dump($retorno);

            if($retorno['rowCount'] === 1){
                $_SESSION['user'] = $retorno['ID'];
                $resultado = $usr->Read('UsuarioID',$retorno['ID']);
                $_SESSION['nome'] = $resultado['NomeUsuario'];

                // var_dump($usr->Read($retorno['ID']));   
            
                echo true;                
                // header('Location: ../View/dashboard.php');
            }else
                echo "Usuário ou senha incorreto. Prencha novamente.";

        }else
                echo "Usuário ou senha incorreto. Prencha novamente.";
                // header('Location: ../View/login.php');

        
    }

