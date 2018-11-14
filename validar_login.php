<?php
	require 'data_functions/adm_functions.php';

	function redirect($msg, $page = 'login.php')
	{
		header('location:'.$page.'?msg='.$msg);

		die();
	}

	if (!isset($_POST['btn_submit']))
		redirect('invalidRequest');

	if (empty($_POST['email']) || empty($_POST['senha']))
		redirect('emptyFields');

	$email = $_POST['email'];
	$senha = $_POST['senha'];

	try
	{
		$user = GetAdmByEmail($email);

		if ($user['senha'] != $senha)
			redirect('invalidLogin');

		session_start();

		$_SESSION['nome'] = $user['nome'];

		redirect('successLogin', 'index.php');
	}
	catch (Exception $exc)
	{
		redirect(urlencode($exc->getMessage()));
	}