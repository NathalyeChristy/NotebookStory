<?php require 'lock.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<title>Gerenciar</title>
	</head>
	<body class="container">
		
		<?php include 'menu.php'; ?>

		<?php include 'msgs.php'; ?>

		<div class="row">
			<div class="col">

				<div class="row pb-2">
					<div class="col">
						<a class="btn btn-primary" href="cadastrar.php">Adicionar novo notebook</a>
						<hr>
					</div>
				</div>

				<?php
					require 'data_functions/notebook_functions.php';

					try
					{
						$notebooks = getAllNotebooks();

						if (!empty($notebooks))
						{
							?>
							<ul class="list-group">
								<?php

								foreach ($notebooks as $notebook)
								{ 
									?>
									<li class="list-group-item">
										<div class="row">
											<div class="col-md-7">
												<h4><?php echo $notebook['marca']; ?></h4>
												<p class="text-dark">
													<b>Cor</b>: <?php echo $notebook['cor']; ?><br>
													<b>Ram</b>: <?php echo $notebook['ram']; ?><br>
													<b>Processador</b>: <?php echo $notebook['proc']; ?><br>
													<b>HD</b>: <?php echo $notebook['hd']; ?><br>
												</p>
											</div>
											<div class="col-md-2 offset-md-2 text-center pt-4">
												<div class="btn-group-vertical btn-group-lg">
													<a class="btn btn-warning" href="editar.php?id=<?php echo $notebook['id']; ?>">Editar</a>
													<a class="btn btn-danger" href="deletar.php?id=<?php echo $notebook['id']; ?>">Deletar</a>
												</div>
											</div>
										</div>
									</li>
								<?php
								}
								?>

							</ul>

							<?php
						}
					}
					catch (Exception $exc)
					{ ?>
						<div class="alert alert-danger">
							<?php echo $exc->getMessage(); ?>
						</div>
						
					<?php
					}
				?>
			</div>
		</div>

	</body>
</html>