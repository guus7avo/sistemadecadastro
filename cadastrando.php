<!DOCTYPE html>
<html>
<head>

	<div>
		<meta charset="UTF-8"/>
		<meta name=”viewport” content=”width=device-width, initial-scale=1, shrink-to-fit=no”>
		<link rel="stylesheet" href="css\bootstrap\bootstrap\css\bootstrap.css">
		<link rel="stylesheet" href="css\estilo.css">

		<title>Cadastrando...</title>

	</div>

</head>

<body>

	<?php
	$host = "localhost";
	$user = "root";
	$pass = "password";
	$banco = "sistemacadastro";
	$conexao = mysqli_connect($host, $user, $pass, $banco) or die(mysqli_error());
	mysqli_select_db($conexao, $banco) or die(mysqli_error());
	?>

	<?php
	$nomecompleto=$_POST['nomecompleto'];
	$datanasc=$_POST['datanasc'];
	$rm=$_POST['rm'];
	$ra=$_POST['ra'];
	$nomemae=$_POST['nomemae'];
	$telefone=$_POST['telefone'];
	$endereco=$_POST['endereco'];


	$sql = mysqli_query ($conexao, " INSERT INTO aluno (nomecompleto, datanasc, rm, ra, nomemae, telefone, endereco) 
		VALUES ('$nomecompleto', '$datanasc', '$rm', '$ra', '$nomemae', '$telefone', '$endereco') ");

	?>	

	<br>
	<br>
	<br>
	<div class="container-sm">
		<div id="box" class="col-md-6 mt-5 offset-3">
			<br>
			<p id="texto">Cadastro realizado com sucesso</p>

			<div id="botao">
				<a class="btn btn-primary" href="cadastro.php" role="button">Realizar novo cadastro	</a>
				<a class="btn btn-light" href="menu.php" role="button">Voltar para o menu inicial	</a>
			</div>
			<br>
		</div>
	</div>
	

</body>

</html>

