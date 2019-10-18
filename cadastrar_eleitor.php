<?php
// para exibir mensagem após cadastrar eleitor
session_start();	

	$nome 			=  $_POST['nome'];
	$email 			=  $_POST['email'];
	$cidade 		=  $_POST['cidade'];
	$estado 		=  $_POST['estado'];
	$cep			=  $_POST['cep'];
	$bairro			=  $_POST['bairro'];
	$demandas = implode(', ', $_POST['demandas']); 
	$sexo		  	=  $_POST['sexo'];
	$comentarios  	=  $_POST['comentarios'];

if (empty($nome) || empty($email) || empty($cidade) || empty($estado) || empty($cep) || empty($bairro) || empty($demandas) || empty($sexo) || empty($comentarios) ) {

			$_SESSION ['campos_vazios'] = "


			<div class='alert alert-danger alert-dismissible fade show' role= 'alert'>
				<h5 class='alert-heading'>Oooops... :(</h5>
				Preencha todos os campos!
				<button class='close' data-dismiss='alert' aria-label='Fechar'>
					<span aria-hidden='true'>&times;</span>
				</button>
			</div>


			";
			header("Location:index.php");
}
else {


		// preparando a consulta
		$sql = " INSERT INTO cadastro_eleitor (nome, email, cidade, estado, cep, bairro, demandas, sexo, comentarios) 
				 VALUES  ('$nome', '$email', '$cidade', '$estado','$cep', '$bairro', '$demandas', '$sexo', '$comentarios')";
		// chamando conecta.php para conectar com o banco de dados
		include_once("conecta_banco.php");
		// inserindo os dados da conexão e a consulta
		$sql = mysqli_query($conexao, $sql) or die ("Houve erro na gravação dos dados, por favor, clique em voltar e verifique os campos obrigatórios!");
		// exibir mensagem após cadastro
		if (mysqli_insert_id($conexao)) {
			$_SESSION ['msg'] = "

			<div class='alert alert-success alert-dismissible fade show' role= 'alert'>
				<h5 class='alert-heading'>Feito!</h5>
				Cadastro efetuado com sucesso.
				<button class='close' data-dismiss='alert' aria-label='Fechar'>
					<span aria-hidden='true'>&times;</span>
				</button>
			</div>


			";
			header("Location:index.php");
		} 


}



?>
