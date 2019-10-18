<?php 
session_start();
include_once("conecta_banco.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$editar = "SELECT * FROM cadastro_eleitor WHERE id = '$id' ";
$editar_resultado = mysqli_query ($conexao, $editar);
$linha = mysqli_fetch_assoc($editar_resultado);

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
						<a href="index.php"> Menu</a>
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
						<a href="#"> Sair</a>
					</li>
				</ul>
			</div>
	</div>
	<div class="faixa shadow">
		<div class="frase"> <strong>Cadastro de Eleitores</strong></div>
	</div>

<!-- INICIO DO FORMULARIO -->
<form method="POST" action="editar.php" class="shadow-sm p-3 mb-5 bg-white rounded" id="form_padina_editar">		
<!-- LINHA 1-->
<div class="form-row">
			  		<div class="form-group col-md-6">
			  		<input type="hidden" name="id" value="<?php echo $linha['id']; ?>">	

				      <label for="nome">Nome:</label>
				      <input type="text" name="nome" class="form-control form-control-md" id="nome" placeholder="Digite seu nome..." value="<?php echo $linha['nome']; ?>">
				    </div>
				    <div class="form-group col-md-6">
				      <label for="email">E-mail:</label>
				      <input type="email" name="email" class="form-control form-control-md" id="email" placeholder="Digite seu e-mail..." value="<?php echo $linha['email']; ?>">
				    </div>
</div>

				<button type="submit" class="btn btn-success " name="submit" id="button-index">Editar Cadastro</button>
				<button type="reset" class="btn btn-danger" id="button-index">Cancelar</button>
				<?php
				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
				?>

	
</form>
<!-- FIM DO FORMULARIO -->	
</div>
<footer>
	<div style="margin-left: 10px;"><strong>CEFAB - Caça ao Eleitor - Fábio, Albert, Bernardo.</strong></div>
	<div style="margin-right: 10px;"><strong>Versão</strong> Beta 1.0</div>
</footer>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/popper.js" ></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>