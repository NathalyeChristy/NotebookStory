<?php require 'lock.php';
	require 'data_functions/notebook_functions.php';

	try {
		$note = getNotebookById($_GET['id']);
	}
	catch (Exception $e)
	{
		header('location:gerenciar.php?msg='.$e->getMessage());		
	}
?>
<!DOCTYPE html>
<html lang="pt-br"> 
	<head>
		<meta charset="utf-8">

		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

		<title>Editar Notebook</title>
	</head>
	<body class="container">

		<?php include 'menu.php'; ?>
		<?php include 'msgs.php'; ?>

		<div class="row">
		
			<br><h2 class="text-info col-md-4 offset-md-4">Editar Notebook</h2>
			<div class="col-md-9 offset-md-1">

				<form name="form_editar" action="validar_editar.php" method="post">
					
					
					<div class="form-group">
						<label>Marca:</label>
						<input class="form-control" type="text" name="marca" placeholder="marca" required value="<?php echo $note['marca'] ?>" >
					</div>
					<div class="form-group">
						<label>Cor:</label>
						<input class="form-control" type="text" name="cor" placeholder="cor" required value="<?php echo $note['cor'] ?>">
					</div>
					<div class="form-group">
						<label>Ram:</label>
						<input class="form-control" type="number" name="ram" placeholder="Ram" required value="<?php echo $note['ram'] ?>">
					</div>
					<div class="form-group">
						<label>Processador:</label>
						<input class="form-control" type="number" step="0.01" name="processador" placeholder="Processador" required value="<?php echo $note['proc'] ?>">
					</div>
					<div class="form-group">
						<label>HD</label>
						<input class="form-control" type="number" step="0.001" name="hd" placeholder="HD" required value="<?php echo $note['hd'] ?>">
					</div>

					<input type="hidden" name="id" value="<?php echo $note['id'] ?>">

					<div class="form-group">
						<button type="submit" class="btn btn-warning" name="btn_editar">Ediar</button>
					</div>
				</form>
			</div>

		</div>
	</body>
</html>