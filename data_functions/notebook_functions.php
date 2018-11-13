<?php
	require_once 'conn.php';

	function getAllNotebooks()
	{
		$sql = "SELECT id, marca, cor, ram, proc, hd FROM tb_notes";

		return selectAsArray($sql);
	}