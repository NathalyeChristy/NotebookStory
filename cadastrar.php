<?php require 'lock.php'; ?>
<!DOCTYPE html>
<html lang="pt-br"> 
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Cadastro Notebook</title>
</head>
<body class="container">

	<?php include 'menu.php'; ?>

	<div class="row">
		<div class="col">
		<?php 
			if (!empty($_GET['msg'])) {
				if ($_GET['msg'] == 'CadastradoSucesso'){

				echo '<div class="alert alert-success" role="alert">';
				echo '<h4 class="alert-heading">Cadastrado com Sucesso!</h4><hr></div>';
				
				}
				else if ($_GET['msg'] =='Erroaocadastrar')
			{
				echo '<div class="alert alert-danger" role="alert">';
				echo '<h4 class="alert-heading">Atenção:</h4><hr>';
				echo '<p>Preencha todo o Formulario.</p></div>';
			}

			}


		 ?>
		</div>
	</div>
	
	<br><h2 class="text-info col-md-4 offset-md-4">Cadastro Notebook</h2>
<div class="col-md-9 offset-md-1">
	<form name="form_cadastro" action="validar.php" method="post">
		
		
		<p class="container  ">
			<label>Marca:</label>
			<input class="form-control" type="text" name="marca" placeholder="marca">
		</p>
		<p class="container">
			<label>Cor:</label>
			<input class="form-control" type="text" name="cor" placeholder="cor">
		</p>
		<p class="container">
			<label>Ram:</label>
			<input class="form-control" type="number" name="ram" placeholder="Ram">
		</p>
		<p class="container">
			<label>Processador:</label>
			<input class="form-control" type="number" step="0.01" name="processador" placeholder="Processador">
		</p>
		<p class="container">
			<label>HD</label>
			<input class="form-control" type="number" step="0.001" name="hd" placeholder="HD">
		</p>
		<p class="container">
			<button type="submit" class="btn btn-success">Cadastrar</button>
			<button type="reset" class="btn btn-danger">Limpar</button>
		</p>
	</form>
	</div>
</body>
</html>