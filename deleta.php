<?php
	$host = "localhost";
	$user = "root";
	$pass = "password";
	$banco = "sistemacadastro";
	$conexao = mysqli_connect($host, $user, $pass, $banco) or die(mysqli_error());
	mysqli_select_db($conexao, $banco) or die(mysqli_error());

	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
	if(!empty($id)){
		$result = "DELETE FROM aluno WHERE idaluno='$id'";
		$resultado = mysqli_query($conexao, $result);
		if(mysqli_affected_rows($conexao)){
			$_SESSION['msg'] = "<p style='color:green;'>Usuário apagado com sucesso</p>";

			
		}else{
		
			$_SESSION['msg'] = "<p style='color:red;'>Erro o usuário não foi apagado com sucesso</p>";
			
		}
	}else{	
		$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar um usuário</p>";
		
	}
?>

<div>
	<meta charset="UTF-8"/>
	<meta name=”viewport” content=”width=device-width, initial-scale=1, shrink-to-fit=no”>
	<link rel="stylesheet" href="css\bootstrap\bootstrap\css\bootstrap.css">
	<link rel="stylesheet" href="css\estilo.css">
</div>

<br>
<br>
<br>
<div class="container-sm">
	<div id="box" class="col-md-6 mt-5 offset-3">
	<br>
	<p id="texto">Registro excluído com sucesso</p>

		<div id="botao">
			<a class="btn btn-primary" href="menu.php" role="button">Menu inicial</a>
			<a class="btn btn-light" onClick="history.go(-1)" role="button">Voltar</a>
		</div>
		<br>
	</div>
</div>
<!-- 
<div class="container">
		<div class="jumbotron">
			<h2>Usuário excluído com sucesso</h2>

			<form name="pesquisa" method="post" action="cadastro.php">
				<div id="botao">
					<input class="field" type="submit" value="Cadastrar Alunos"/>
				</div>
			</form>

			<form name="pesquisa" method="post" action="pesquisa.php">
				<div id="botao">
					<input class="field" type="submit" value="Pesquisar Alunos"/>
				</div>
			</form>	
			
		</div>
	</div> -->