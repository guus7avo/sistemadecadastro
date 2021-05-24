<!DOCTYPE html>
<html>
<head>

	<div>
		<meta charset="UTF-8"/>
		<meta name=”viewport” content=”width=device-width, initial-scale=1, shrink-to-fit=no”>
		<link rel="stylesheet" href="css\bootstrap\bootstrap\css\bootstrap.css">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js">
		<link rel="stylesheet" href="css\estilo.css">

		<title>Resultado</title>
	</div>

</head>

<body>

<?php
	$host = "localhost";
	$user = "root";
	$pass = "password";
	$banco = "sistemacadastro";
	$conexao = mysqli_connect($host, $user, $pass, $banco) or die(mysqli_error($host));
    
    $pesquisar = $_POST['pesquisar'];
    $query = "SELECT * FROM aluno WHERE nomecompleto LIKE '%$pesquisar%' LIMIT 5";
    $result = mysqli_query($conexao, $query);
    
?>

	<div class="container-fluid">
		<div id="" class="col-md-10 mt-5 mb-2 offset-1">
			
			<table class="table table-light table-striped table-bordered border border-dark">
			<thead class="thead-default">
				<tr>
				<th scope="col">Nome do aluno</th>
				<th scope="col">Data de nascimento</th>
				<th scope="col">RM</th>
				<th scope="col">RA</th>
				<th scope="col">Nome da mãe</th>
				<th scope="col">Telefone</th>
				<th scope="col">Endereço</th>
				<th scope="col">Editar</th>
				<th scope="col">Apagar</th>
				</tr>
			</thead>
			<tbody>
			
				<?php 
				while($row = mysqli_fetch_array($result)){
					$nomecompleto = $row['nomecompleto'];
					$datanasc = $row['datanasc'];
					$rm = $row['rm'];
					$ra = $row['ra'];
					$nomemae = $row['nomemae'];
					$telefone = $row['telefone'];
					$endereco = $row['endereco']; ?>
				<tr>
					<td><?php echo $nomecompleto ?></td>
					<td><?php echo $datanasc ?></td>
					<td><?php echo $rm ?></td>
					<td><?php echo $ra ?></td>
					<td><?php echo $nomemae ?></td>
					<td><?php echo $telefone ?></td>
					<td><?php echo $endereco ?></td>
					<td><a href="atualiza.php?id=<?php echo $row['idaluno'];?>">Editar</a></td>
			        
			        <td><a href="deleta.php?id=<?php echo $row['idaluno'];?>">Apagar</a></td>
				</tr> 
				<?php } ?>

			</tbody>
			</table>

			<div id="botao">
				<a class="btn btn-light" onClick="history.go(-1)" role="button">Voltar</a>
			</div>
			<br>
		</div>
		
	</div>

</body>

</html>
