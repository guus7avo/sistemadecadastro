<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8"/>
	<meta name=”viewport” content=”width=device-width, initial-scale=1, shrink-to-fit=no”>
	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
	<link rel="stylesheet" href="css\style.css">

	<title>Sistema de cadastro de alunos</title>


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>

<?php
	$host = "localhost";
	$user = "root";
	$pass = "password";
	$banco = "sistemacadastro";
	$conexao = mysqli_connect($host, $user, $pass, $banco) or die(mysqli_error($host));


	if(isset($_GET['page']))
	{
		$page = $_GET['page'];
	}
	else
	{
		$page = 1;
	}

	$nporpagina = 8;
	$inicio = ($page-1)*$nporpagina;

    $query = "SELECT * FROM aluno limit $inicio, $nporpagina";
    $result = mysqli_query($conexao, $query);

	if(isset($_POST['pesquisar'])){
		$pesquisar = $_POST['pesquisar'];
    	$query = "SELECT * FROM aluno WHERE nomecompleto LIKE '%$pesquisar%' limit $inicio, $nporpagina";
    	$result = mysqli_query($conexao, $query);
	}
    

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  	<a class="navbar-brand" href="#">
      <img src="../img/iconschool1.png" alt="" width="30" height="24" class="d-inline-block align-text-bottom">
        Escola Municipal
    </a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav pull-right">
        <!-- <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> -->
      </div>
    </div>
  </div>
</nav>

<div class="container-fluid">

	<div id="top" class="row">
		<div class="col-sm-3">
			<h4>Registro de alunos</h4>
		</div>
		<div class="col-sm-6">

			<form name="search" method="post" action="index.php">
				
				<div class="input-group">
					<input type="text" name="pesquisar" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Pesquisar aluno (por nome)">
					<span class="input-group-btn">
					<button class="btn btn-primary" type="submit">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span>
				</div>			
			</form>
		</div>
		<div class="col-sm-3">
			<button data-id="cadastrar" class="add btn btn-primary pull-right">Novo registro</button>
		</div>
	</div>
	<br>

	<div id="list" class="row">

		<div class="table-responsive col-md-12 offset-0	">
			<table class="table table-striped" cellspacing="0" cellpadding="0">
				<thead class="thead-default">
					<tr>
					<th scope="col">ID</th>
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
						$idaluno = $row['idaluno'];
						$nomecompleto = $row['nomecompleto'];
						$datanasc = $row['datanasc'];
						$rm = $row['rm'];
						$ra = $row['ra'];
						$nomemae = $row['nomemae'];
						$telefone = $row['telefone'];
						$endereco = $row['endereco']; ?>
					<tr>
						<td><?php echo $idaluno ?></td>
						<td><?php echo $nomecompleto ?></td>
						<td><?php echo $datanasc ?></td>
						<td><?php echo $rm ?></td>
						<td><?php echo $ra ?></td>
						<td><?php echo $nomemae ?></td>
						<td><?php echo $telefone ?></td>
						<td><?php echo $endereco ?></td>
						
						<td><button 
						data-id="<?php echo $row['idaluno'];?>" 
						data-nomecompleto="<?php echo $row['nomecompleto'];?>"
						data-datanasc="<?php echo $row['datanasc'];?>"
						data-rm="<?php echo $row['rm'];?>"
						data-ra="<?php echo $row['ra'];?>"
						data-nomemae="<?php echo $row['nomemae'];?>"
						data-telefone="<?php echo $row['telefone'];?>"
						data-endereco="<?php echo $row['endereco'];?>"
						class="alterar btn btn-sm btn-warning">Editar</button></td>

						<td><button data-id="<?php echo $row['idaluno'];?>" class="deletar btn btn-sm btn-danger">Apagar</button>

					</tr>
					<?php } ?>

				</tbody>
			</table>
	</div>
</div>

<!-- Modal -->
<!-- Adicionar -->
<div id="modaladd" class="modal fade" role="dialog">
	<div class="modal-dialog modal-xl" style="width:100%">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Adicionar registro</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
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
					
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				<input class="btn btn-primary add-yes" type="submit" value="Cadastrar">
			</div>
			</form>
		</div>
	</div>
</div>
<!-- Alterar -->
<div id="modalalterar" class="modal fade" role="dialog">
		<div class="modal-dialog modal-xl" style="width:100%">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Alterar registro <span class="nome"></span></h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<form method="post" action="atualizando.php">
						<br>
						<div class="form-row">
						<input type="hidden" id="id" name="idaluno" value="<?php echo $row['idaluno']; ?>">
							<div class="form-group col-md-8">
								<label for="nomecompleto">Nome completo</label>
								<input type="text" class="form-control" id="nomecompleto" name="nomecompleto" placeholder="Nome completo do aluno" value="">
							</div>
							<div class="form-group col-md-4">
								<label for="datanasc">Data de nascimento</label>
								<input type="text" class="form-control" id="datanasc" name="datanasc" placeholder="aaaa-mm-dd" value="">
							</div>
						</div>

						<div class="form-row">
							<div class="form-group col-md-9">
							<label for="endereco">Endereço</label>
							<input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço" value="">
							</div>
							<div class="form-group col-md-1">
							<label for="rm">RM</label>
							<input type="text" class="form-control" id="rm" name="rm" placeholder="0000" maxlength="4" value="">
							</div>
							<div class="form-group col-md-2">
							<label for="ra">RA</label>
							<input type="text" class="form-control" id="ra" name="ra" placeholder="0000000000" maxlength="10" value="">
							</div>
						</div>

						<div class="form-row">
							<div class="form-group col-md-8">
							<label for="nomemae">Nome da mãe</label>
							<input type="text" class="form-control" id="nomemae" name="nomemae" placeholder="Nome completo da mãe" value="">
							</div>
							<div class="form-group col-md-4">
							<label for="telefone">Telefone</label>
							<input type="text" class="form-control" id="telefone" name="telefone" placeholder="11900000000" maxlength="11" value="">
							</div>
						</div>
						<br>

						<!-- <div id="botao">
							<input class="btn btn-primary" type="submit" value="Atualizar">
							<a class="btn btn-light" onClick="history.go(-1)" role="button">Voltar</a>
						</div>
						<br> -->
					
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					<input class="btn btn-primary altera-yes" type="submit" value="Atualizar">
				</div>
				</form>
		</div>
	</div>
</div>
<!-- Deletar -->
<div id="modaldeletar" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Excluir registro</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				Deseja mesmo apagar o registro  <span class="nome"></span>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				<a href="#" type="button" class="btn btn-danger deleta-yes">Apagar</a>
			</div>
		</div>
	</div>
</div>
<!-- /.modal -->

<script type="text/javascript" src="../js/modal.js"></script>

<?php

	if(isset($_POST['pesquisar'])){
		$pesquisar = $_POST['pesquisar'];
		$pr_query = "SELECT * FROM aluno WHERE nomecompleto LIKE '%$pesquisar%'";
		$pr_result = mysqli_query($conexao, $pr_query);
		$total_record = mysqli_num_rows($pr_result);

		$total_page = ceil($total_record/$nporpagina);

		if($page>1){
			echo "<a href='index.php?page=".($page-1)."' class='btn btn-outline-danger btn-floating'>Anterior</a>";
			
		}

		for($i=1;$i<=$total_page;$i++){
			echo "<a href='index.php?page=".$i."' class='btn btn-outline-primary btn-floating'>$i</a>";
		}

		if($i>$page){
			if($page!=$total_page){
				echo "<a href='index.php?page=".($page+1)."' class='btn btn-outline-danger btn-floating'>Próximo</a>";
			}
		}
	}
	else {
		$pr_query = "select * from aluno";
		$pr_result = mysqli_query($conexao, $pr_query);
		$total_record = mysqli_num_rows($pr_result);

		$total_page = ceil($total_record/$nporpagina);

		if($page>1){
			echo "<a href='index.php?page=".($page-1)."' class='btn btn-outline-danger btn-floating'>Anterior</a>";
		}

		for($i=1;$i<=$total_page;$i++){
			echo "<a href='index.php?page=".$i."' class='btn btn-outline-primary btn-floating'>$i</a>";
		}

		if($i>$page){
			if($page!=$total_page){
				echo "<a href='index.php?page=".($page+1)."' class='btn btn-outline-danger btn-floating'>Próximo</a>";
			}
		}
	}

	

?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
	<!--
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	-->
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->

</body>

<!-- Footer -->
<footer class="bg-light	text-left text-dark">
  <!-- Grid container -->
  <div class="container">
    <!-- Section: Social media -->
    <section class="mt-2">
      <!-- Facebook -->
      <!-- <a class="btn btn-outline-primary btn-floating m-1" href="#!" role="button" target="_blank"
        ><i class="fab fa-facebook-f"></i
      ></a> -->

      <!-- Twitter -->
      <!-- <a class="btn btn-outline-primary btn-floating m-1" href="#!" role="button" target="_blank"
        ><i class="fab fa-twitter"></i
      ></a> -->

      <!-- Google -->
      <a class="btn btn-outline-primary btn-floating m-1" href="mailto:ps.gustavo19@gmail.com?subject=Dúvida:%20Sistema%20de%20cadastro%20de%20alunos" role="button" target="_blank"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-primary btn-floating m-1" href="https://www.instagram.com/guus7avo/" role="button" target="_blank"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-primary btn-floating m-1" href="https://www.linkedin.com/in/gustavo-nascimento-dos-santos/" role="button" target="_blank"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-primary btn-floating m-1" href="https://github.com/guus7avo" role="button" target="_blank"
        ><i class="fab fa-github"></i
      ></a>

	  <!-- Github -->
	<!-- Section: Social media -->  
	
    <!-- Section: Text -->
        <i class="mt-3 pull-right">Desenvolvido por: Gustavo Nascimento</i
      >
        </section>
    <!-- Section: Text -->
 
  </div>
  <!-- Grid container -->

</footer>
<!-- Footer -->

</html>
