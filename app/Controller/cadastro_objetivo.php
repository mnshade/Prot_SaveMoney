
<?php
    
    require '../Model/Objetivo.php';
    
    $iduser = $_SESSION['user'];
    $obj = new Objetivo($_POST["objetivo"], $_POST["data_inicio"], $_POST["data-final"], $_POST["Valor"], $_POST["desc"], $iduser);
    $obj->Create();
?>