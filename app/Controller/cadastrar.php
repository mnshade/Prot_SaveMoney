<?php

    require '../Model/User.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($nome) || empty($email) || empty($password)){
        $_SESSION['msg'] = 'Algum campo está vazio. Preencha novamente!';
        header("Location: ../View/login.php");
    }
    else{

        $user = new User();
        $user->Create($name, $email, $password);

    }