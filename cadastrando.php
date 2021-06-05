<?php
	$host = "localhost";
	$user = "root";
	$pass = "password";
	$banco = "sistemacadastro";
	$conexao = mysqli_connect($host, $user, $pass, $banco) or die(mysqli_error());
	mysqli_select_db($conexao, $banco) or die(mysqli_error());

	$nomecompleto=$_POST['nomecompleto'];
	$datanasc=$_POST['datanasc'];
	$rm=$_POST['rm'];
	$ra=$_POST['ra'];
	$nomemae=$_POST['nomemae'];
	$telefone=$_POST['telefone'];
	$endereco=$_POST['endereco'];


	$sql = mysqli_query ($conexao, " INSERT INTO aluno (nomecompleto, datanasc, rm, ra, nomemae, telefone, endereco) 
		VALUES ('$nomecompleto', '$datanasc', '$rm', '$ra', '$nomemae', '$telefone', '$endereco') ");

	header("Location: index.php");

?>	
