<!DOCTYPE html>
<html>
<head>
	<title>Área Restrita</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/eventos.css">
	<link rel="stylesheet" href="css/login.css">
</head> 
<body>
	<div class="container">
		<h1>Login</h1>
		<br>

		<form action="valida.php" method="POST" class="contactForm">
			Login:<br>
			<input type="text" class="form-control" name="login" required><br>
			Senha:<br>
			<input type="password" class="form-control" name="senha" required><br>
			
			<input type="submit"  name="enviar" class="btn btn-primary">
			<?php
				if(isset($_GET['falha']) &&
					$_GET['falha'] == 'erro'){
			?>

			<div class="erro"><strong>Usuario ou senha inválidos</strong></div>
			<?php }?>
		</form>
	</div>
</body>
</html>