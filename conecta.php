<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "sistemacadastro";
	$conexao = mysqli_connect($host, $user, $pass, $banco) or die(mysqli_error());
	mysqli_select_db($conexao, $banco) or die(mysqli_error());
?>