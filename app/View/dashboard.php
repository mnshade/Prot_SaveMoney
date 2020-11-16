<?php

	session_start();

	if(empty($_SESSION['user'])){
		header('Location: login.php');
	}	

?>

<!DOCTYPE html>
<html lang='pt-br'>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>SaveMovey - Plataforma</title>
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
		<!-- CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel='stylesheet' href='css/style.css' />
	</head>
	<body class="fadeIn">
			<div class="navbar">
				<nav class="nav__mobile"></nav>
				<div class="container">
					<div class="navbar__inner">
						<a href="#" class="navbar__logo">SaveMoney</a>						
						<div class="navbar__menu-mob">
							<a href="" id='toggle'><svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z" class=""></path></svg>
						</a></div>
					</div>
				</div>
			</div>
			<div class="app">
				<div class="container my-4">
					<div class="app__inner">
						<div class="app__menu m-0 py-0">
							<ul class="vMenu pt-4">
								<li>
									<p>Inicio</p>
									<ul>										
										<li><a href="#">Visão Geral</a></li>
									</ul>
								</li>									
								<li>
									<p class="bolder">Poupança</p>
									<ul>
										<li><a href="criar_objetivo.php">Criar Objetivo</a></li>
										<li><a href="listar_objetivo">Listar Objetivo</a></li>
									</ul>
								</li>
								<li>
									<p class="bolder">Objetivo</p>
									<ul>
										<li><a href="criar_objetivo.php">Criar Objetivos</a></li>
										<li><a href="listar_objetivos.php">Listar Objetivos</a></li>
										
									</ul>
								</li>
							</ul>
						</div>
						<div class="app__main">
							<div class="text-container ml-3">
								<h2 class="app__main__title">Bem vindo(a) de volta!</h3>
								<p>Logo abaixo segue seu planejamento referente ao mês atual.</p>
								<hr>
								<div class="container-fluid">
									<div class="form-row">
										<div class="col-sm border-right">
											<h4 class="text-success m-0 p-0">Seu saldo</h4>
											<h5 class="display-2 m-0 p-0 text-success">R$00,00</h5>
											
											<!-- Button trigger modal -->
											<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
											Depositar
											</button>

											<!-- Modal -->
											<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h2 class="modal-title" id="exampleModalLabel">Depósito</h2>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
															</button>
														</div>
													<div class="modal-body">
														<form action="" method="POST"></form>
													</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
															<button type="button" class="btn btn-success">Depositar</button>
														</div>
													</div>
												</div>
											</div>

										</div>
										<div class="col-sm ">
											<h4 class="text-success m-0 p-0 pl-2 ml-2">Investido</h4>
											<h5 class="display-2 m-0 p-0 pl-2 ml-2 text-success">R$00,00</h5>

											<!-- Button trigger modal -->
											<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
											Invertir
											</button>

											<!-- Modal -->
											<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h2 class="modal-title" id="exampleModalLabel">Investimento</h2>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
															</button>
														</div>
													<div class="modal-body">
														<form action="" method="POST"></form>
													</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
															<button type="button" class="btn btn-success">Depositar</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>							
								</div>
								<hr class="mb-4">
								
								<div class="card-deck">
									<div class="card">
									  <img src="images/poupanca.png" class="card-img-top p-3" alt="...">
									  <div class="card-body">
										<h5 class="card-title">Poupança</h5>
										<p class="card-text">Fazer uma imagem ou algo tipo que altere coma entrada e saída do valor</p>
										<p class="card-text"><small class="text-muted"><a href="poupanca.html"><button>Acessar</button></a> </small></p>
									  </div>
									</div>
									<div class="card">
									  <img src="images/objetivo2.png" class="card-img-top p-3" alt="...">
									  <div class="card-body">
										<h5 class="card-title">Sonhos</h5>
										<p class="card-text">Fazer uma imagem ou algo tipo que altere coma entrada e saída do valor</p>
										<p class="card-text"><small class="text-muted"><a href="sonho.html"><button>Acessar</button></a> </small></p>
									  </div>
									</div>
									<div class="card">
									  <img src="images/money4.png" class="card-img-top p-3" alt="...">
									  <div class="card-body">
										<h5 class="card-title">Total</h5>
										<p class="card-text">Fazer uma imagem ou algo tipo que altere coma entrada e saída do valor</p>
										<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
									  </div>
									</div>
								</div>
							
							</div>
						</div>
					</div>
				</div>
						
								
							
			<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
			<!-- jQuery and JS bundle w/ Popper.js -->
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
			<script src='js/app.min.js'></script>
		
		
		
	</body>
</html>