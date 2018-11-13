<?php
	// Constantes de conexão com bd.
	define('DB_SERVERNAME', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_NAME', 'bd_tarefas');

	// Cria conxão com o banco.
	$conn = mysqli_connect(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

	// Verifica se não foi possível se conectar com o banco
	if (!$conn)
	{
		// "mata" a execução dos scripts PHP desta instancia (deste acesso).
		die('Erro ao conectar: ' . mysqli_connect_error());
	}