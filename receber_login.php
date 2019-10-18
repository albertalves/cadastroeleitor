<?php
session_start();	
if ( isset ($_POST['usuario']) ) // verificar se enviou
{
		if ( !empty($_POST['usuario']) && !empty($_POST['senha']) && !empty($_POST['confirm_senha'])) // se os campos foram preenchidos 
		{
					$nome = $_POST['usuario']; 
					$senha = $_POST['senha']; 					
					$confirm_senha = $_POST['confirm_senha']; 
						

					if ($senha == $confirm_senha) 
					{
						header("Location:index.php");
					}
					else 
					{	
						$_SESSION['msg'] = "
								
								<h5><strong>Ooops!</strong></h5>
								Senha não confirmada!
								
							";
						header("Location:login.php");
					}
		}
		else 
		{
						$_SESSION['msg'] = "
								
								<h5><strong>Ooops!</strong></h5>
								Preencha todos os campos!
								
							";
						header("Location:login.php");
		}




}

		

	





?>