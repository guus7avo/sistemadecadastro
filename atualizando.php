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
?>

<div>
	<meta charset="UTF-8"/>
	<meta name=”viewport” content=”width=device-width, initial-scale=1, shrink-to-fit=no”>
	<link rel="stylesheet" href="css\bootstrap\bootstrap\css\bootstrap.css">
	<link rel="stylesheet" href="css\estilo.css">
</div>

<div class="container-fluid">
	<div id="box" class="col-md-8 mt-5 offset-2">
	<br>
	<p id="texto">Dados alterados com sucesso</p>

		<div id="botao">
			<a class="btn btn-primary" href="menu.php" role="button">Voltar para o menu inicial	</a>
			<a class="btn btn-light" onClick="history.go(-2)" role="button">Voltar</a>
		</div>
		<br>
	</div>
</div>