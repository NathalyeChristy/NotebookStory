<?php
	if (session_status() == PHP_SESSION_NONE)
	{
		session_start();
	}

	$uri = $_SERVER['REQUEST_URI'];

	$index = preg_match('/index/', $uri);
	$login = preg_match('/login/', $uri);
?>

<div class="row pb-3">
	<div class="col border-bottom">
		<ul class="nav">

			<li class="nav-item <?php if ($index) { echo 'bg-light'; } ?>">
				<a class="nav-link <?php if ($index) { echo 'text-dark'; } ?>" href="index.php">Notebooks</a>
			</li>

			<?php if (empty($_SESSION['nome'])) { ?>
				<li class="nav-item <?php if ($login) { echo 'bg-light'; } ?>">
					<a class="nav-link <?php if ($login) { echo 'text-dark'; } ?>" href="login.php">Login</a>
				</li>
			<?php }
			else {
				$gerenciar = preg_match('/(gerenciar)*(cadastrar)/', $uri);
			?>
				<li class="nav-item <?php if ($gerenciar) { echo 'bg-light'; } ?>">
					<a class="nav-link <?php if ($gerenciar) { echo 'text-dark'; } ?>" href="gerenciar.php">Gerenciar</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="logout.php">Logout</a>
				</li>
			<?php } ?>
		</ul>
	</div>
</div>