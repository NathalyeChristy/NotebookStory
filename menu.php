<?php
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


			<li class="nav-item <?php if ($login) { echo 'bg-light'; } ?>">
				<a class="nav-link <?php if ($login) { echo 'text-dark'; } ?>" href="login.php">Login</a>
			</li>
		</ul>
	</div>
</div>