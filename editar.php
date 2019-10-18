<?php  
session_start();	
include_once("conecta_banco.php");

	$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);




$editar = "UPDATE cadastro_eleitor SET nome='$nome', email='$email' WHERE id='$id' ";
$editar_usuario = mysqli_query($conexao, $editar);




	if (mysqli_affected_rows($conexao)) {
			$_SESSION['msg'] = "
				<div class='alert alert-success alert-dismissible fade show' role= 'alert'>
				<h5 class='alert-heading'>Feito!</h5>
				Usuário editado com sucesso.
				<button class='close' data-dismiss='alert' aria-label='Fechar'>
				<span aria-hidden='true'>&times;</span>
				</button>
				</div>
			";
			header("Location: pagina_editar.php");
		} else
		{
			$_SESSION['msg'] = "


				<div class='alert alert-danger alert-dismissible fade show' role= 'alert'>
				<h5 class='alert-heading'>Oooops... :(</h5>
				Usuário não foi editado com sucesso.
				<button class='close' data-dismiss='alert' aria-label='Fechar'>
				<span aria-hidden='true'>&times;</span>
				</button>
				</div>

			";
			header("Location:pagina_editar.php?id=$id");
		}
	

?>