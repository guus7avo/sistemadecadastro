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

	header("Location: index.php");
?>