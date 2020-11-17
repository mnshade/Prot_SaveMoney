<?php
    require '../Model/Objetivo.php';
    session_start();
    $obj = new Objetivo($_POST["objetivo"], $_POST["data_inicio"], $_POST["data-final"], $_POST["Valor"], $_POST["desc"]);
    $obj->Create();
?>