<?php require 'lock.php';
	require 'data_functions/notebook_functions.php';

	function redirect($msg, $page = 'gerenciar.php')
	{
		header('location:'.$page.'?msg='.$msg);

		die();
	}

	try
	{
		$note = getNotebookById($_GET['id']);

		deleteNotebook($note['id']);

		redirect('successDelete');
	}
	catch (Exception $exc)
	{
		redirect(urlencode($exc->getMessage()));
	}