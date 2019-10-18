<?php 
session_start();
include_once("conecta_banco.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);



if(!empty($id))	{

	$excluir = " DELETE FROM cadastro_eleitor WHERE id = '$id' ";
	$excluir_resultado = mysqli_query($conexao, $excluir) ;

			if(mysqli_affected_rows($conexao))
			{
				$_SESSION['msg'] = "
							<div class='alert alert-success alert-dismissible fade show' role= 'alert'>
							<h5 class='alert-heading'>Feito!</h5>
							Usuário deletado com sucesso
							<button class='close' data-dismiss='alert' aria-label='Fechar'>
							<span aria-hidden='true'>&times;</span>
							</button>
							</div>
							";
				header("Location: pagina_cadastros.php");
			}else
			{
				$_SESSION['msg'] = "
							<div class='alert alert-danger alert-dismissible fade show' role= 'alert'>
							<h5 class='alert-heading'>Oooops... :(</h5>
							Erro o usuário não foi deletado com sucesso
							<button class='close' data-dismiss='alert' aria-label='Fechar'>
							<span aria-hidden='true'>&times;</span>
							</button>
							</div>
							";
				header("Location: pagina_cadastros.php");
			}

}else
{	
	$_SESSION['msg'] = "
				<div class='alert alert-warning alert-dismissible fade show' role= 'alert'>
				<h5 class='alert-heading'>Opa ! Opa !</h5>
				Necessário selecionar um usuário
				<button class='close' data-dismiss='alert' aria-label='Fechar'>
				<span aria-hidden='true'>&times;</span>
				</button>
				</div>
					";
	header("Location: pagina_cadastros.php");
}


 ?>