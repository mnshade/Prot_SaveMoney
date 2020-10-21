

<!DOCTYPE html>
<html lang='pt-br'>
<head>
	<meta class="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>SaveMoney - Login</title>
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel='stylesheet' href='css/style.css' />
</head>
<body class="fadeIn">
	<div class="navbar">
		<nav class="nav__mobile"></nav>
		<div class="container">
			<div class="navbar__inner">
				<a href="index.html" class="navbar__logo">SaveMoney</a>
				<nav class="navbar__menu">
					<ul>
						<li><a href="index.html">Início</a></li>
					</ul>
				</nav>
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
				<div>
                <?php
                    $e_mail = $_GET['e_mail'];
                    $senha = $_GET['senha'];
                    echo 'Login efetuado';


                ?>
                </div>
			</div>
		</div>
	</div>
<script src='js/app.min.js'></script>
</body>
</html>