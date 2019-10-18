<?php
//Receber o número da página
$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
//Setar a quantidade de itens por pagina
$qnt_result_pg = 10;
//calcular o inicio visualização
$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;




// selecionando todas as linhas da tabela cadastro e limitar paginação
$listar = "SELECT * FROM cadastro_eleitor LIMIT $inicio, $qnt_result_pg";
// nova query que irá juntar a conexão com o banco e a query acima
$listar_cadastro = mysqli_query($conexao, $listar) or die ("Não foi possível realizar a consulta ao banco de dados");

// enquanto houver linha no  banco 
while ($linha = mysqli_fetch_assoc($listar_cadastro))
{
	$id   			=  $linha['id'];
	$nome 			=  $linha['nome'];
	$email 			=  $linha['email'];
	$cidade 		=  $linha['cidade'];
	$estado 		=  $linha['estado'];
	$cep			=  $linha['cep'];
	$bairro			=  $linha['bairro'];
	$demandas		=  $linha['demandas'];
	$sexo		  	=  $linha['sexo'];
	$comentarios  	=  $linha['comentarios'];			
// imprimir as linhas						
	echo "			<tr>";
	echo "			<td>$id <br></td>";
	echo "			<td>$nome<br></td>	";
	echo "			<td>$email<br></td>";
	echo "			<td>$cidade<br></td>";
	echo "			<td>$estado<br></td>";
	echo "			<td>$cep</td>";
	echo "			<td>$bairro</td>";
	echo "			<td>$demandas</td>";
	echo "			<td>$sexo</td>";
	echo "			<td>$comentarios</td>";
	echo "<td><a class='btn btn-warning' href='pagina_editar.php?id=" . $linha['id'] . "'><img src='assets/images/edit.png' ></a></td>";
	echo "<td><a class='btn btn-danger' href='excluir.php?id= ".$linha['id']." '><img src='assets/images/delete.png'></a></td>";

	//<button class='btn btn-danger'>Excluir</button>
	echo "			</tr>";				

}		

//Paginção - Somar a quantidade de usuários
$result_pg = "SELECT COUNT(id) AS num_result FROM cadastro";
$resultado_pg = mysqli_query($conexao, $result_pg);
$row_pg = mysqli_fetch_assoc($resultado_pg);
//echo $row_pg['num_result'];
//Quantidade de pagina 
$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
		
//Limitar os link antes depois
$max_links = 2;

echo "<ul class='pagination'>";
echo "<li class='page-item'><a href='pagina_cadastros.php?pagina=1' class='page-link'>Primeira</a></li> ";
for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
	if($pag_ant >= 1){
		echo "<li class='page-item'><a href='pagina_cadastros.php?pagina=$pag_ant'  class='page-link'>$pag_ant</a></li>";
	}
}	
echo "<li class='page-item active'> <a href='pagina_cadastros.php?pagina=$pagina_atual'  class='page-link'>$pagina</li>";
for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
	if($pag_dep <= $quantidade_pg){
		echo "<li class='page-item'> <a href='pagina_cadastros.php?pagina=$pag_dep'  class='page-link'>$pag_dep</a></li>";
	}
}
echo "<li class='page-item'> <a href='pagina_cadastros.php?pagina=$quantidade_pg' class='page-link'>Ultima</a></li>";
echo "</ul>";
				
?>