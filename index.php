<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<title>Notebook Story</title>
	</head>
	<body class="container">
		
		<?php include 'menu.php'; ?>

		<div class="row">
			<div class="col">
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
										<a href="exibir.php?id=<?php echo $notebook['id']; ?>">
											<h4><?php echo $notebook['marca']; ?></h4>
											<p class="text-dark">
												<b>Cor</b>: <?php echo $notebook['cor']; ?><br>
												<b>Ram</b>: <?php echo $notebook['ram']; ?><br>
												<b>Processador</b>: <?php echo $notebook['proc']; ?><br>
												<b>HD</b>: <?php echo $notebook['hd']; ?><br>
											</p>
										</a>
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