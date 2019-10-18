<?php
session_start();
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
						<a href="#"> Dashboard</a>
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
		<div class="frase"> <strong>Cadastro de Eleitores</strong></div>
	</div>

<!-- INICIO DO FORMULARIO -->
<form method="POST" action="cadastrar_eleitor.php" class="shadow-sm p-3 mb-5 bg-white rounded">		
<!-- LINHA 1-->
<div class="form-row">
			  		<div class="form-group col-md-6">
				      <label for="nome">Nome:</label>
				      <input type="text" name="nome" class="form-control form-control-md" id="nome" placeholder="Digite seu nome...">
				    </div>
				    <div class="form-group col-md-6">
				      <label for="email">E-mail:</label>
				      <input type="email" name="email" class="form-control form-control-md" id="email" placeholder="Digite seu e-mail...">
				    </div>
</div>
<!-- LINHA 1-->
<!-- LINHA 2--> 			
<div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="cidade">Cidade:</label>
				      <input type="text" name="cidade" class="form-control form-control-md" id="cidade" placeholder="Digite sua cidade...">
				    </div>
				    <div class="form-group col-md-6">
				      <label for="estado">Estado:</label>
				      <select name="estado" id="estado" class="form-control form-control-md">
				        <option selected>Selecione...</option>
					    <option value="Acre">Acre</option> 
					    <option value="Alagoas">Alagoas</option> 
					    <option value="Amazonas">Amazonas</option> 
					    <option value="Amapá">Amapá</option> 
					    <option value="Bahia">Bahia</option> 
					    <option value="Ceará">Ceará</option> 
					    <option value="Distrito Federal">Distrito Federal</option> 
					    <option value="Espírito Santo">Espírito Santo</option> 
					    <option value="Goiás">Goiás</option> 
					    <option value="Maranhão">Maranhão</option> 
					    <option value="Mato Grosso">Mato Grosso</option> 
					    <option value="Mato Grosso do Sul">Mato Grosso do Sul</option> 
					    <option value="Minas Gerais">Minas Gerais</option> 
					    <option value="Pará">Pará</option> 
					    <option value="Paraíba">Paraíba</option> 
					    <option value="Paraná">Paraná</option> 
					    <option value="Pernambuco">Pernambuco</option> 
					    <option value="Piauí">Piauí</option> 
					    <option value="Rio de Janeiro">Rio de Janeiro</option> 
					    <option value="Rio Grande do Norte">Rio Grande do Norte</option> 
					    <option value="Rondônia">Rondônia</option> 
					    <option value="Rio Grande do Sul">Rio Grande do Sul</option> 
					    <option value="Roraima">Roraima</option> 
					    <option value="Santa Catarina">Santa Catarina</option> 
					    <option value="Sergipe">Sergipe</option> 
					    <option value="São Paulo">São Paulo</option> 
					    <option value="Tocantins">Tocantins</option> 
				      </select>
				    </div>
</div>
<!-- LINHA 2-->
<!-- LINHA 3--><div class="form-row">
		  			<div class="form-group col-md-6">
				      <label for="cep">Cep</label>
				      <input type="text" name="cep" class="form-control form-control-md" id="cep" placeholder="Digite seu cep...">
				    </div>
				    <div class="form-group col-md-6">
				      <label for="bairro">Bairro</label>
				      <input type="text" name="bairro" class="form-control form-control-md" id="bairro" placeholder="Digite seu bairro...">
				  	</div>
<!-- LINHA 3--></div>
<!-- LINHA 4-->
<div class="form-row"> 
			  	<div class="form-group col-md-6">	
				  		<label>
		 						Quais demandas devem ser resolvidas com mais urgência na sua região?
		 				</label> <br/>
					    <div class="form-check form-check form-check-inline">
							    <input class="form-check-input" type="checkbox" value="Segurança" name="demandas[]" id="seguranca">
							    <label class="form-check-label" for="seguranca"> Segurança </label>
					    </div>
					    <div class="form-check form-check form-check-inline">
							    <input class="form-check-input" type="checkbox" value="Saúde" name="demandas[]" id="saude">
							    <label class="form-check-label" for="saude"> Saúde </label>
					    </div>
					    <div class="form-check form-check form-check-inline">
							    <input class="form-check-input" type="checkbox" value="Educação" name="demandas[]" id="educacao">
							    <label class="form-check-label" for="educacao"> Educação </label>
					    </div>
					    <div class="form-check form-check form-check-inline">
							    <input class="form-check-input" type="checkbox" value="Poluição" name="demandas[]" id="poluicao">
							    <label class="form-check-label" for="poluicao"> Poluição </label>
					    </div>
					    <div class="form-check form-check form-check-inline">
							    <input class="form-check-input" type="checkbox" value="Pavimento" name="demandas[]" id="pavimento">
							    <label class="form-check-label" for="pavimento"> Pavimento </label>
					    </div>
					    <div class="form-check form-check form-check-inline">
							    <input class="form-check-input" type="checkbox" value="Iluminação" name="demandas[]" id="iluminacao">
							    <label class="form-check-label" for="iluminacao"> Iluminação </label>
					    </div>
				</div>
			  	<div class="form-group col-md-6">	
    					<label >Sexo:</label> <br/>

						<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="sexo" id="masc" value="Masculino">
								<label class="form-check-label" for="masc">Masculino</label>
						</div>

						<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="sexo" id="fem" value="Feminino">
								<label class="form-check-label" for="fem">Feminino</label>
						</div>

    			</div>
</div>
<!-- LINHA 4-->
<!-- LINHA 5-->
<div class="form-row">
			 	<div class="form-group col-md-12">
					<label for="textArea">Envie seus comentários: </label>
					 <textarea name="comentarios" class="form-control" id="textArea" rows="4" placeholder="Nos diga o que você pensa..."></textarea>
			  	</div>
</div>
<!-- LINHA 5-->
				<button type="submit" class="btn btn-success " name="submit" id="button-index">Finalizar Cadastro</button>
				<button type="reset" class="btn btn-danger" id="button-index">Cancelar</button>

				<?php
					if (isset($_SESSION['msg'])) {
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}

					if (isset($_SESSION['campos_vazios'])) {
						echo $_SESSION['campos_vazios'];
						unset($_SESSION['campos_vazios']);
					}
				?>
</form>
<!-- FIM DO FORMULARIO -->	
</div>
<footer>
	<div style="margin-left: 10px;"><strong> Caça ao Eleitor 2018 - Albert Alves ©</strong></div>
	<div style="margin-right: 10px;"><strong>Versão</strong> Beta 1.0</div>
</footer>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/popper.js" ></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>