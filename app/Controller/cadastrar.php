<?php

    require '../Model/User.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($nome) || empty($email) || empty($password)){
        $_SESSION['msg'] = 'Algum campo não está preenchido incorretamente. Prencha novamente.';
        header("Location: ../View/cadastro.php");
    }
    else{

        $user = new User();
        $user->Create($nome, $email, $password);

        // var_dump($user->Create($nome, $email, $password), $email);

    }