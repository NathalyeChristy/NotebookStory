<?php
	function showError($msg)
	{
		echo '<div class="alert alert-danger">'.$msg.'</div>';
	}

	function showAlert($msg)
	{
		echo '<div class="alert alert-warning">'.$msg.'</div>';
	}

	function showSuccess($msg)
	{
		echo '<div class="alert alert-success">'.$msg.'</div>';
	}
	?>
	<div class="row">
		<div class="col">
			<?php
			if (!empty($_GET['msg']))
			{
				switch ($_GET['msg']) {
					case 'invalidRequest':
						showError('Requisição inválida.');
						break;
					case 'emptyFields':
						showError('Alguns campos estão vazios.');
						break;
					case 'invalidLogin':
						showError('Desculpe, este login é inválido.');
						break;
					
					case 'successLogin':
						showSuccess('Logado com sucesso.');
						break;

					case 'loginFirst':
						showAlert('Você deve se logar primeiro.');
						break;

					default:
						showAlert(urldecode($_GET['msg']));
						break;
				}
			}
			?>
		</div>
	</div>