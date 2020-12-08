

<!DOCTYPE html>

<html lang='pt-br'>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>SaveMovey - Plataforma</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
		<!-- CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel='stylesheet' href='css/style.css' />
	</head>
	<body class="fadeIn">
			<div class="navbar">

				<div class="container">
					<div class="navbar__inner">
						<a href="dashboard.php" class="navbar__logo">SaveMoney</a>						
						<div class="navbar__menu-mob"><a href="" id='toggle'><svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z" class=""></path></svg></a></div>
					</div>
				</div>
			</div>
			<br>
			<br>
			<div class="app">
				<div class="container">
					<div class="app__inner">
						<div class="app__menu">
						<div class="vertical-menu">
						<a href="index.html" class="active">Visão Geral</a>
						<a href="#">Histórico de Depósito</a>						
						<a href="criar_objetivo.php">Criar Objetivos</a>
						<a href="listar_objetivos.php">Listar Objetivos</a>
						
					</div>
						</div>
						<div class="app__main">
							<div class="text-container">
								<h3 class="app__main__title">Lista de Objetivos</h3>
								<p>Logo abaixo está listado seus objetivos.</p>
								<div class="container-fluid border rounded shadow">
									<table class="table">
										<thead>
										  <tr>
											<th scope="col">Título</th>
											<th scope="col">Início</th>
											<th scope="col">Fim</th>
											<th scope="col">Descrição</th>	
											<th scope="col">Valor</th>
											<th scope="col">Ação</td>
																	
										  </tr>
										</thead>
										<tbody>
										  <?php 
										  
												require '../Model/Connection.php';
												session_start();
												$iduser = $_SESSION['user'];
												
												$sql = "SELECT * FROM objetivousuario WHERE Usuario_UsuarioID ='".$iduser."';";
												$conn = new Connection();
												$pdo = $conn->Connect();
												$stmt = $pdo->prepare($sql);
												$stmt->execute();
												while($dado = $stmt->fetch(PDO::FETCH_OBJ)){
																				  										 
										 ?>
											<tr>
											    
												<td><?php echo $dado->NomeObjetivo;?></td>	
												<td><?php echo date("d/m/Y",strtotime($dado->DataObjetivoIni));?></td>
												<td><?php echo date("d/m/Y", strtotime($dado->DataObejtivoFim));?></td>
												<td><?php echo $dado->ObjetivoDesc;?></td>
												<td><?php echo $dado->ObjetivoValor;?></td>
												
											     
												<td><a href="#" style="color:orange;text-decoration:none">Editar</a>|<a href="../Controller/deletar_objetivo.php" style="color:red;text-decoration:none">Deletar</a>
												
												</td> 
											</tr>
												<?php } ?>
										</tbody>
									  </table>
								</div>							
							</div>
						</div>
<<<<<<< HEAD
					<!--	
					<div class="modal2">						
							<div class="modal3>
								<form>
								<label for="titulo">Título:</label><br>
								<input type="text" id="titulo" name="titulo"><br>
								<label for="inicio">Início</label><br>
								<input type="date" id="Início" name="Início">
								<label for="Fim">Fim</label><br>
								<input type="date" id="Fim" name="Fim">
								<label for="Descrição">Descrição</label><br>
								<input type="text" id="Descrição" name="Descrição">
								<label for="Valor">Valor</label><br>
								<input type="number" id="Valor" name="Valor">	
								<label for="Ação">Ação</label><br>
								<input type="text" id="Ação" name="Ação">
								</form>
							</div>
												-->		
						

					</div>

							
=======
					
>>>>>>> 29af49d4ae3d9de8cbbb84545f4218b71c069012
			<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

			<footer>
				<!-- jQuery and JS bundle w/ Popper.js -->
				<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
				<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
				<script src='js/app.min.js'></script>
			</footer>
		
	    
	</body>
</html>