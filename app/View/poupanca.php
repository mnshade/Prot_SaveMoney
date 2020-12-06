<?php

	session_start();

	if(empty($_SESSION['user'])){
		header("Location: login.php");
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
					<a href="index.html" class="navbar__logo">SaveMoney</a>						
					<div class="navbar__menu-mob"><a href="" id='toggle'><svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z" class=""></path></svg></a></div>
				</div>
			</div>
		</div>
		<div class="app">
			<div class="container">
				<div class="app__inner">
					<div class="app__menu m-0 py-0">
						<ul class="vMenu pt-4 text-centered">
							<li>
								<p>Inicio</p>
								<ul>										
									<li><a href="dashboard.php">Visão Geral</a></li>
								</ul>
							</li>									
							<li>
								<p class="bolder">Poupança</p>
								<ul>
									<li><a href="#">Histórico de Depósito</a></li>
									<li><a href="#"></a></li>
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
						<div class="text-container">
							<h3 class="app__main__title">Bem vindo(a) de volta!</h3>
							<p>Logo abaixo segue seu planejamento referente ao mês atual.</p>
							<div class="card text-center">
								<div class="container">
									<table class="table table-hover">
										<thead>
											<tr>
												<th scope="col">Id</th>
												<th scope="col">Valor</th>
												<th scope="col">Data</th>
												<th scope="col">Observação</th>
												<th scope="col">Alterar</th>
												<th scope="col">Excluir</th>
											</tr>
										</thead>
										<tbody id="body-table">
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>	
		</div>
	</body>

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<!-- jQuery and JS bundle w/ Popper.js -->
	
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<!-- <script src='js/app.min.js'></script> -->
	<script src="js/jquery.js"></script>
	<script>

		$(document).ready(function(){

			var poupanca = {
				'id': <?php echo $_SESSION['user'];?>,
				'param': 'Usuario_UsuarioID'
			}

			var dados = JSON.stringify(poupanca);

			$.ajax({
				url: '../Controller/read_deposito.php',
				type: 'POST',
				data: {data: dados},
				success: function(result){

					var json = JSON.parse(result)

					for(var i=0;i<(json.length);i++){
						$('#body-table').append('<tr id="row-table'+i+'"></tr>')
						for(var j=0;j<6;j++){
							if(j<4)
								$("#row-table"+i).append('<td scope="col">'+json[i][j]+'</td>');
							else if(j==4)	
								$("#row-table"+i).append('<td scope="col"><button type="button" class="btn btn-info">Alterar</button></td>');
							else
								$("#row-table"+i).append('<td scope="col"><button type="button" class="btn btn-danger">Excluir</button></td>');

						}
					}
					
					// console.log(json.length)
												
				},
				error: function(jqXHR, textStatus, errorThrown) {
				console.log(textStatus, erroThorwn);
				
				}

			})
		})

	</script>
		
</html>