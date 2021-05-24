<?php
	$host = "localhost";
	$user = "root";
	$pass = "password";
	$banco = "sistemacadastro";
	$conexao = mysqli_connect($host, $user, $pass, $banco) or die(mysqli_error());
	mysqli_select_db($conexao, $banco) or die(mysqli_error());


	$id = $_GET['id'];
	$result = "SELECT * FROM aluno WHERE idaluno='$id'";
	$resultado = mysqli_query($conexao, $result);
	$row = mysqli_fetch_assoc($resultado);
?>

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

<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

	<div class="container-fluid">
		<div id="box" class="col-md-8 mt-5 offset-2">
			<br>
			<p id="texto">E.M TIRSI ANNA</p>
			<p id="texto">ATUALIZAR DADOS</p>

			<form method="post" action="atualizando.php">
				<br>
				<div class="form-row">
				<input type="hidden" name="idaluno" value="<?php echo $row['idaluno']; ?>">
					<div class="form-group col-md-8">
						<label for="nomecompleto">Nome completo</label>
						<input type="text" class="form-control" name="nomecompleto" placeholder="Nome completo do aluno" value="<?php echo $row['nomecompleto']; ?>">
					</div>
					<div class="form-group col-md-4">
						<label for="datanasc">Data de nascimento</label>
						<input type="text" class="form-control" name="datanasc" placeholder="aaaa-mm-dd" value="<?php echo $row['datanasc']; ?>">
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-9">
					<label for="endereco">Endereço</label>
					<input type="text" class="form-control" name="endereco" placeholder="Endereço" value="<?php echo $row['endereco']; ?>">
					</div>
					<div class="form-group col-md-1">
					<label for="rm">RM</label>
					<input type="text" class="form-control" name="rm" placeholder="0000" maxlength="4" value="<?php echo $row['rm']; ?>">
					</div>
					<div class="form-group col-md-2">
					<label for="ra">RA</label>
					<input type="text" class="form-control" name="ra" placeholder="0000000000" maxlength="10" value="<?php echo $row['ra']; ?>">
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-8">
					<label for="nomemae">Nome da mãe</label>
					<input type="text" class="form-control" name="nomemae" placeholder="Nome completo da mãe" value="<?php echo $row['nomemae']; ?>">
					</div>
					<div class="form-group col-md-4">
					<label for="telefone">Telefone</label>
					<input type="text" class="form-control" name="telefone" placeholder="11900000000" maxlength="11" value="<?php echo $row['telefone']; ?>">
					</div>
				</div>
				<br>

				<div id="botao">
					<input class="btn btn-primary" type="submit" value="Atualizar">
					<a class="btn btn-light" onClick="history.go(-1)" role="button">Voltar</a>
				</div>
				<br>
				
			</form>

			<!-- <form class="form-horizontal" action="atualizando.php" method="POST">
				<div class="form-group">
						NOME <input type="text" name="nomecompleto" class="form-control" placeholder="Nome Completo" value="<?php echo $row['nomecompleto']; ?>">
				</div>
				<input type="hidden" name="idaluno" value="<?php echo $row['idaluno']; ?>">

				<div class="form-group">
						RM <input type="text" name="rm" class="form-control" placeholder="RM" value="<?php echo $row['rm']; ?>">
				</div>
				
				<div class="form-group">
						RA <input type="text" name="ra" class="form-control" placeholder="RA" value="<?php echo $row['ra']; ?>">

				</div>
				
				<div class="form-group">
						NOME DA MÃE <input type="text" name="nomemae" class="form-control" placeholder="NOME DA MÃE" value="<?php echo $row['nomemae']; ?>">
				</div>
				
				<div class="form-group">
						TELEFONE <input type="text" name="telefone" class="form-control" placeholder="TELEFONE" value="<?php echo $row['telefone']; ?>">
				</div>
				
				<div class="form-group">
						ENDEREÇO <input type="text" name="endereco" class="form-control" placeholder="ENDEREÇO" value="<?php echo $row['endereco']; ?>">
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-danger">Alterar</button>
					</div>
				</div>

			</form> -->

		</div>

	</div>

</body>

</html>
