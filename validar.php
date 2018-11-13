<?php
	if(empty($_POST['marca']) || empty($_POST['cor'])|| empty($_POST['ram'])||empty($_POST['processador'])|| empty($_POST['hd']));
	{
		//redireciona para a pagina de login com ms de erro
		header('location:login.php?msg-emptyFields');
	}
	else
	{
		$marca = $_POST['marca'];
		$cor = $_POST['cor'];
		$ram = $_POST['ram'];
		$processador = $_POST['processador'];
		$hd = $_POST['hd'];
		include 'conn.php';
		
		
		//$resultado = mysqli_query($conn, $sql);

		//if()
		//{
		//	$login = mysqli_fetch_assoc($resultado);

		//	session_start();
		//	$_SESSION['usuario'] = $login['usuario'];
		//	$_SESSION['senha']   = $login['senha'];

		//	header('location:perfil.php');
		//}
		//else
		//{
		//	header('location:login.php?msg=loginError');
		//}
	//}




?>