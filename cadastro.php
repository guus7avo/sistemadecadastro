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
	<div class="container-fluid">

		<div id="box" class="col-md-8 mt-5 offset-2">	
			<br>
			<p id="texto">E.M TIRSI ANNA</p>
			<p id="texto">CADASTRAR ALUNOS</p>

			<!-- <form id="formulario" method="post" action="cadastrando.php">
				Nome completo: 			<input class="field" name="nomecompleto" placeholder="" size="30" /> <br> <br>
				Data de nascimento: 	<input class="field" name="datanasc" placeholder="" size="30" /> <br> <br>
				RM: 					<input class="field" name="rm" placeholder="" size="30" maxlength="4"/> <br> <br>
				RA: 					<input class="field" name="ra" placeholder="" size="30" maxlength="10"/> <br> <br>
				Nome da mãe: 			<input class="field" name="nomemae" placeholder="" size="30"/> <br> <br>
				Telefone: 				<input class="field" name="telefone" placeholder="" size="30" maxlength="11"/> <br> <br>
				Endereço: 				<input class="field" name="endereco" placeholder="" size="30"/> <br> <br> <br>				

				<div id="botao">
					<input class="btn btn-primary" type="submit" value="Cadastrar">
					<a class="btn btn-primary" href="menu.php" role="button">Voltar</a>
				</div>
			</form> -->

			<form method="post" action="cadastrando.php">
				<br>
				<div class="form-row">
					<div class="form-group col-md-8">
						<label for="nomecompleto">Nome completo</label>
						<input type="text" class="form-control" name="nomecompleto" placeholder="Nome completo do aluno">
					</div>
					<div class="form-group col-md-4">
						<label for="datanasc">Data de nascimento</label>
						<input type="text" class="form-control" name="datanasc" placeholder="aaaa-mm-dd">
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-9">
					<label for="endereco">Endereço</label>
					<input type="text" class="form-control" name="endereco" placeholder="Endereço">
					</div>
					<div class="form-group col-md-1">
					<label for="rm">RM</label>
					<input type="text" class="form-control" name="rm" placeholder="0000" maxlength="4">
					</div>
					<div class="form-group col-md-2">
					<label for="ra">RA</label>
					<input type="text" class="form-control" name="ra" placeholder="0000000000" maxlength="10">
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-8">
					<label for="nomemae">Nome da mãe</label>
					<input type="text" class="form-control" name="nomemae" placeholder="Nome completo da mãe">
					</div>
					<div class="form-group col-md-4">
					<label for="telefone">Telefone</label>
					<input type="text" class="form-control" name="telefone" placeholder="11900000000" maxlength="11">
					</div>
				</div>
				<br>

				<div id="botao">
					<input class="btn btn-primary" type="submit" value="Cadastrar">
					<a class="btn btn-light" onClick="history.go(-1)" role="button">Voltar</a>
				</div>
				<br>
				
			</form>

		</div>

	</div>
	
			

</body>

</html>