<?php
	$host = "localhost";
	$user = "root";
	$pass = "password";
	$banco = "sistemacadastro";
	$conexao = mysqli_connect($host, $user, $pass, $banco) or die(mysqli_error());
	mysqli_select_db($conexao, $banco) or die(mysqli_error());

	$nome = $_POST['nomecompleto'];
	$datanasc = $_POST['datanasc'];
	$rm = $_POST['rm'];
	$ra = $_POST['ra'];
	$nomemae = $_POST['nomemae'];
	$telefone = $_POST['telefone'];
	$endereco = $_POST['endereco'];
	$idaluno = $_POST['idaluno'];

	$result = "UPDATE aluno 
	SET nomecompleto = '$nome',
	datanasc = '$datanasc',
	rm = '$rm',
	ra = '$ra', 
	nomemae = '$nomemae',
	telefone = '$telefone',
	endereco = '$endereco' 
	WHERE idaluno = '$idaluno'";
	
	$resultado = mysqli_query($conexao, $result);

	header("Location: index.php");
?>