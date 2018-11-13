<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">

		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

		<title>Login</title>
	</head>
	<body class="container">

		<?php include 'menu.php'; ?>

		<div class="row">
			<div class="col-md-4 offset-md-4">
				<h3>Logar</h3>
				<form name="form_login" method="post" action="validar_login.php">
					<div class="form-group">
						<label>E-mail</label>
						<input class="form-control" type="email" name="email" required>
					</div>

					<div class="form-group">
						<label>Senha</label>
						<input class="form-control" type="password" name="senha" required>
					</div>

					<div class="form-group">
						<button class="btn btn-secondary" type="submit" name="btn_submit">Logar</button>
					</div>
				</form>
			</div>
		</div>

	</body>
</html>