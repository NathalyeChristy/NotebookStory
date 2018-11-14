<?php require 'lock.php';
	if(empty($_POST['marca']) || empty($_POST['cor'])|| empty($_POST['ram'])||empty($_POST['processador'])|| empty($_POST['hd']))
	{
		//redireciona para a pagina de login com ms de erro
		header('location:cadastrar.php?msg=emptyFields');
	}
	else
	{
		$marca = $_POST['marca'];
		$cor = $_POST['cor'];
		$ram = $_POST['ram'];
		$processador = $_POST['processador'];
		$hd = $_POST['hd'];
		include 'conn.php';
		
		$sql = "INSERT INTO tb_notes (marca, cor, ram, proc, hd) VALUES('$marca','$cor',$ram,$processador, $hd)"; 
		
		$resultado = mysqli_query($conn, $sql);

		if(mysqli_affected_rows($conn) > 0)
		{
			header('location:cadastrar.php?msg=CadastradoSucesso');
		}
		else
		{
			var_dump(mysqli_error($conn));
			die();

			header('location:cadastrar.php?msg=Erroaocadastrar');
		}
	}




?>