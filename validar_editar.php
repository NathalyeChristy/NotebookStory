<?php require 'lock.php';
	require 'data_functions/notebook_functions.php';

	function redirect($msg, $page = 'gerenciar.php')
	{
		header('location:'.$page.'?msg='.$msg);

		die();
	}

	if (!isset($_POST['btn_editar']))
		redirect('invalidRequest');

	if (empty($_POST['marca']) || empty($_POST['cor'])|| empty($_POST['ram'])||empty($_POST['processador'])|| empty($_POST['hd']))
		redirect('emptyFields');

	$id = $_POST['id'];
	$marca = $_POST['marca'];
	$cor = $_POST['cor'];
	$ram = $_POST['ram'];
	$processador = $_POST['processador'];
	$hd = $_POST['hd'];

	try
	{
		$note = getNotebookById($id);

		updateNotebook($id, $marca, $cor, $ram, $processador, $hd);

		redirect('successEdit');
	}
	catch (Exception $exc)
	{
		redirect(urlencode($exc->getMessage()));
	}