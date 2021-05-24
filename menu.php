<!DOCTYPE html>
<html>
<head>

	<div>
		<meta charset="UTF-8"/>
		<meta name=”viewport” content=”width=device-width, initial-scale=1, shrink-to-fit=no”>
		<link rel="stylesheet" href="css\bootstrap\bootstrap\css\bootstrap.css">
		<link rel="stylesheet" href="css\estilo.css">

		<title>Sistema de Cadastro</title>	

	</div>

</head>

<body>
	<br>
	<br>
	<br>
	<div class="container-fluid">

		<div id="box" class="col-md-4 mt-5 offset-4">
			<br>
			<p id="texto">E.M TIRSI ANNA</p>
			<p id="texto">MENU</p>

			<div class="mt-5">

				<form id="create" method="post" action="cadastro.php">	
					<div id="botao">
						<input class="btn btn-primary" type="submit" value="Cadastrar alunos"> <br>
					</div>
				</form>
				<br>
				<form name="read" method="post" action="pesquisa.php">
					<div id="botao">
						<input class="btn btn-primary" type="submit" value="Pesquisar alunos"/>
					</div>
				</form>	
				<br>
				<form name="sair" method="post" action="">
					<div id="botao">
						<input class="btn btn-primary" type="submit" value="Sair"/>
					</div>
				</form>	
				<br>
				<br>
			</div>	
		</div>

	</div>

</body>

</html>
