<?php session_start();

	if (empty($_SESSION['nome']))
	{
		header('location:login.php?msg=loginFirst');

		die();
	}