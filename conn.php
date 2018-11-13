<?php
	// Constantes de conexão com bd.
	define('DB_SERVERNAME', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_NAME', 'bd_notebookstory');

	// Cria conxão com o banco.
	$conn = mysqli_connect(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

	// Verifica se não foi possível se conectar com o banco
	if (!$conn)
	{
		// "mata" a execução dos scripts PHP desta instancia (deste acesso).
		die('Erro ao conectar: ' . mysqli_connect_error());
	}

	/**
	 * Executa um comando sql utilizando a conexão aberta
	 *
	 * @return null em caso de erro no sql, ou o retornno da função mysqli_query($conn, $query);
	 */
	function doQuery($sql)
	{
		global $conn;

		$resultado = mysqli_query($conn, $sql);

		if (!$resultado)
		{
			throw new Exception('Houve um erro no instrução para o banco de dados.');
			return null;
		}

		return $resultado;
	}

	function select($sql)
	{
		global $conn;

		$resultado = doQuery($sql);

		// Se há mais de um resultado retorne todos em um array de array associativos.
		if (mysqli_affected_rows($conn) > 1)
		{
			while ($linha = mysqli_fetch_assoc($resultado))
			{
				$dados[] = $linha;
			}

			return $dados;
		}

		// Senão retorne apenas o array associativo.
		return mysqli_fetch_assoc($resultado);
	}