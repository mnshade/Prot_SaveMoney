<?php

    require '../Model/Deposito.php';

    $valor = floatval($_POST['valor']);
    $descricao = $_POST['descricao'];
    $date = Date('Y-m-d');

    // echo $_SESSION['user'];

    $deposito = new Deposito();
    $retorno = $deposito->Create($valor, $descricao, $date, $_SESSION['user']);

    // var_dump($valor, $descricao, $date, $_SESSION['user']);

    // var_dump($retorno);

    if($retorno){
        $_SESSION['msg'] = 'Deposito realizado com sucesso.';
        header("Location: ../View/dashboard.php");
    }else{
        $_SESSION['msg'] = 'Ocorreu algum erro. Tente mais tarde.';
        header("Location: ../View/dashboard.php");
    }