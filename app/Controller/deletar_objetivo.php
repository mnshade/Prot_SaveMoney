<?php
  require '../Model/Connection.php';
  session_start();

  $conn = new Connection();
  $pdo = $conn->Connect();

  $id = $_SESSION['user'];
  $stmt = $pdo->prepare('DELETE FROM objetivousuario WHERE Usuario_UsuarioID = :id');
  $stmt->bindParam(':id', $id);
  $stmt->execute();

  header("Location: ../View/listar_objetivos.php");
  

?>

