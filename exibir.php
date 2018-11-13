<?php
	require 'data_functions/notebook_functions.php';

	try {
		$note = getNotebookById($_GET['id']);
	}
	catch (Exception $e)
	{
		header('location:index.php?msg='.$e->getMessage());		
	}
?>
<!DOCTYPE html>
<html lang="pt-br"> 
	<head>
		<meta charset="utf-8">

		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

		<title>Exibir Notebook</title>
	</head>
	<body class="container">

		<?php include 'menu.php'; ?>
		<?php include 'msgs.php'; ?>

		<div class="row">
		
			<br><h2 class="text-info col-md-4 offset-md-4">Notebook</h2>
			<div class="col-md-9 offset-md-1">		
					<p>
						<b>Marca:</b>
						<?php echo $note['marca'] ?>
					</p>
					<p>
						<b>Cor:</b>
						<?php echo $note['cor'] ?>
					</p>
					<p>
						<b>Ram:</b>
						<?php echo $note['ram'] ?>
					</p>
					<p>
						<b>Processador:</b>
						<?php echo $note['proc'] ?>
					</p>
					<p>
						<b>HD</b>
						<?php echo $note['hd'] ?>
					</p>

			</div>

		</div>
	</body>
</html>