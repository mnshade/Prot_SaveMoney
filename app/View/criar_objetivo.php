<!DOCTYPE html>
<?php session_start(); ?>
<html lang='pt-br'>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>SaveMovey - Plataforma</title>
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
		<!-- CSS -->
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel='stylesheet' href='css/style.css' />
	</head>
	<body class="fadeIn">
			<div class="navbar">
				<nav class="nav__mobile"></nav>
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
								<h3 class="app__main__title">Cadastro de Objetivo</h3>
								<?PHP
								if(isset($_SESSION['msg'])){
									//print_r($_SESSION);
									echo "<div class='alert alert-primary' role='alert' style='color: green;'>{$_SESSION['msg']}</div>";								
									//session_unset();
								}							
								?>
								<p>Digite os dados do seu novo Objetivo!</p>
								
								<form method="POST" action="../Controller/cadastro_objetivo.php">
									<div class="form-group">
										<label for="objetivo">Nome do Objetivo</label>
										<input type="text" class="form-control" name="objetivo" id="objetivo" placeholder="Insira o nome do Objetivo">
									</div>
									<div class="form-row">
									  <div class="form-group col-sm-4">
										<label for="data_inicio">Data de Inicio</label>
										<input type="date" class="form-control" id="data_inicio" name="data_inicio">
									  </div>
									  <div class="form-group col-sm-4">
										<label for="data_final">Data Final</label>
										<input type="date" class="form-control" id="data-final" name="data-final">
									  </div>
									  <div class="form-group col-sm-4">
										<label for="valor">Valor</label>
										<input type="text" class="form-control" id="valor" name="Valor">
									  </div>
									  <label for="valor">Descrição:</label>
									  <textarea name="desc" id="" cols="4" rows="3"></textarea>
									</div>
									<button type="submit" class="btn btn-primary">Cadastrar</button>
								</form>							
							</div>
						</div>
					
								
							
			<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

			<footer>
				<!-- jQuery and JS bundle w/ Popper.js -->
				<script type="text/javascript" src="js/materialize.min.js"></script>
				<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
				<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
				<script src='js/app.min.js'></script>
			</footer>
	</body>
</html>