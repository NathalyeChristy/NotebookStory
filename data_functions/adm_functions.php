<?php
	require_once 'conn.php';

	function GetAdmByEmail($email)
	{
		$sql = "SELECT id, nome, email, senha FROM tb_adms WHERE email LIKE '$email'";

		$user = selectOneRegister($sql);

		if (!$user)
			throw new Exception('E-mail não encontrado.');

		return $user;
	}