<?php

	session_start();

?>

<!DOCTYPE html>
<html lang='pt-br'>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>SaveMoney - Login</title>
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel='stylesheet' href='css/style.css' />
</head>
<body class="fadeIn">
	<div class="navbar">
		<nav class="nav__mobile"></nav>
		<div class="container">
			<div class="navbar__inner">
				<a href="SAVE_MONEY/index.html" class="navbar__logo">SaveMoney</a>
				
				<div class="navbar__menu-mob"><a href="" id='toggle'><svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z" class=""></path></svg></a></div>
			</div>
		</div>
	</div>
	<div class="auth">
		<div class="container">
			<div class="auth__inner">
				<div class="auth__media">
					<img src="./images/undraw_Access.svg">
				</div>
				<div class="auth__auth">
					<h1 class="auth__title">Login</h1>
					<!-- -->
					<p>Entre com seu usuário e senha:</p>
					<form>
						<input name="user" class="fakefield">
						<label>E-mail ou Usuário</label>
						<input type="text" name="email" id="email" placeholder="Seu usuário">
						<label>Senha</label>
						<input type="password" name="password" id='password' placeholder="Sua senha" autocomplete="off">
						<div id="resposta"></div>
						<?php

							if(isset($_SESSION['msg'])){
								echo "<div class='alert alert-danger' role='alert'>{$_SESSION['msg']}</div>";
								session_unset();
							}

						?>
						<input type="button" id='enviar' class="button button__accent" value="Entrar">
						<a href="cadastro.php" class="button button__accent">Cadastrar</a>
						<a><h6 class="left-align">Esqueceu sua senha?</h6></a>
					</form>					
				</div>
			</div>
		</div>
	</div>
</body>
	<script src='js/app.min.js'></script>
	<script src='js/jquery.js'></script>
	<script>

		$('#enviar').click(function(){

			var email = $('#email').val()
			var password = $('#password').val()

			if( (email==='') || (password==='')){
				$('#resposta').html("<div class='alert alert-danger' role='alert'>Algum campo está vazio. Preencha corretamento por favor.</div>")
			}else{

				var acesso = {
					'email': email,
					'password': password
				}

				var dados = JSON.stringify(acesso)

				// console.log(acesso)

				$.ajax({
					url:'../Controller/login_usuario.php',
					type: 'POST',
					data: {data: dados},
					beforeSend: function(){
						$('#resposta').html('<div class=" text-success" role="status"><span class="sr-only">Loading...</span></div>')
					},
					success: function(result){
						if(result === '1'){
							// console.log(result)
							$(document).ready(function(){ window.location.href ="dashboard.php"; });
						}else{
							// console.log(typeof(result))
							$('#resposta').html('<div class="alert alert-danger" role="alert">'+result+'</div>')
						}

					},
					error: function(result){
						$('#resposta').html('<div class="alert alert-danger" role="alert">'+result+'</div>')

					}
				})
			}

		})

	</script>
</html>