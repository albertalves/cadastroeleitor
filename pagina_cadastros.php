<?php
session_start();
include_once("conecta_banco.php");
?>
<!DOCTYPE html>
<html>
	<head>
	<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no " />
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/style.css">
			<title>Caça ao Eleitor</title>
	</head>
<body>
<div class="conteiner-fluid">

	<div class="sidebar">
			<div class="menu">
				<ul>
					<li>
						<img src="assets/images/menu.png" />
						<a href="#"> Menu</a>
					</li>
					<li>
						<img src="assets/images/home.png" />
						<a href="index.php"> Dashboard</a>
					</li>
					
					<li>
						<img src="assets/images/cadastrados.png" />
						<a href="pagina_cadastros.php">Cadastrados</a>
					</li>

					<li>
						<img src="assets/images/logout.png" />
						<a href="login.php"> Sair</a>
					</li>
				</ul>
			</div>
	</div>
	<div class="faixa shadow">
		<div class="frase">Cadastro de Eleitores</div>
	</div>
	<div class="table_conteiner">
					<table class="table table-bordered table-hover table-sm">
					<thead  style="background-color: #ededed; color:#485053;" >
						<tr>
							<th>Id</th>
							<th>Nome</th>
							<th>E-mail</th>
							<th>Cidade</th>
							<th>Estado</th>
							<th>Cep</th>
							<th>Bairro</th>
							<th>Demandas</th>
							<th>Sexo</th>
							<th>Comentarios</th>
							<th>Editar</th>
							<th>Excluir</th>
						</tr>
					</thead>
					<tbody style="background-color: #fff ">
					<?php 
					include_once("listar_cadastros.php");
					?>
					<tbody>
						
				</table>
				<?php
					if (isset($_SESSION['msg'])) {
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}
					
				?>

				
	</div>


</div>

<footer>
	<div style="margin-left: 10px;"><strong>Caça ao Eleitor 2018 - Albert Alves ©</strong></div>
	<div style="margin-right: 10px;"><strong>Versão</strong> Beta 1.0</div>
</footer>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/popper.js" ></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>
