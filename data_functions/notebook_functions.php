<?php
	require_once 'conn.php';

	function getAllNotebooks()
	{
		$sql = "SELECT id, marca, cor, ram, proc, hd FROM tb_notes";
 
		return selectAsArray($sql);
	}

	function getNotebookById($id)
	{
		if (!is_numeric($id))
			throw new Exception('Notebook não pode ser encontrado.');

		$sql = "SELECT id, marca, cor, ram, proc, hd FROM tb_notes WHERE id = $id";

		$note = selectOneRegister($sql);

		if (!$note)
			throw new Exception('Notebook não encontrado.');

		return $note;
	}

	function updateNotebook($id, $marca, $cor, $ram, $proc, $hd)
	{
		$sql = "UPDATE tb_notes SET 
					marca = '$marca',
					cor = '$cor',
					ram = $ram,
					proc = $proc,
					hd = $hd
				WHERE id = $id";

		update($sql);
	}

	function deleteNotebook($id)
	{
		$sql = "DELETE FROM tb_notes WHERE id = $id";

		delete($sql);
	}