<?php
//criando conexão
$conexao = mysqli_connect("localhost","u259295667_alb","091018","u259295667_projetos") or die ("Configuração de Banco de Dados Errada!". mysqli_error());

//permite passar acentuação
mysqli_set_charset($conexao, 'utf8');

?>
