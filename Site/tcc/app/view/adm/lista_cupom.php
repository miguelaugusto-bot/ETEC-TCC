<?php



    if (!isset($_SESSION)) session_start(); //saber se há sessão e iniciar



    	$nivel_necessario = "ADM"; //nivel de acesso que pode entrar



	//saber se não é diferente o email e o acesso

    if (!isset($_SESSION['EMAIL']) OR ($_SESSION['ACESSO'] != $nivel_necessario)) { 

        session_destroy();

        header('Location: login.html'); exit;

    }

?>





<!DOCTYPE html>

<html lang="pt-br">



<head>

	<meta charset="UTF-8">

	<title>Visualizar</title>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<link rel="shortcut icon" href="../../lib/img/favicon/favicon.ico" />

	<style>

		.menuAjuste {

			margin: 0 auto;

			float: none;

			margin-bottom: 10px;

			margin-top: 55px;

		}

	</style>

</head>



<body>



	<div class="fixed-top">

		<div class="collapse" id="navbarToggleExternalContent">

			<div class="bg-dark p-3">

				<h5 class="text-white h4">

					<a href="adm.php">

						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house" fill="White" xmlns="http://www.w3.org/2000/svg">

							<path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />

							<path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />

						</svg>

					</a>Home

				</h5><br>

				<a href="gerar.php"><span class="text-white bg-dark">Criar Cupom</span></a><br><br>

				<a href="lista_cupom.php"><span class="text-white bg-dark">Visualizar Cupom</span></a><br><br>

				<a href="../../controllers/php/logout.php"><span class="text-white bg-dark">Logout</span></a>

			</div>

		</div>



		<nav class="navbar navbar-dark bg-dark">

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">

				<span class="navbar-toggler-icon"></span>

			</button>

		</nav>

	</div>

	<div class="menuAjuste">

		<table class="table">

			<h3> Visualizar Cupons</h3>

			<thead>

				<tr>

					<th scope="col">Cupom</th>

					<th scope="col">valor</th>

					<th scope="col">Pontos</th>

					<th scope="col">Expiração</th>

					<th scope="col" coldspan="2">Ações</th>

				</tr>

			</thead>

			<tbody>

				<?php

				include_once "../../lib/php/connect/conexao.php";



				$listar = "SELECT * FROM cupom";



				foreach ($sql->query($listar) as $coluna) {

					$id = $coluna['ID_CUPOM'];

					$cupom = $coluna['CODIGO'];

					$valor = $coluna['DESCONTO'];

					$pontos = $coluna['META'];

					$expiracao = $coluna['VALIDADE'];



					echo "

								<tr>

									<th hidden>$id</th>

									<th>$cupom</th>

									<th>$valor</th>

									<th>$pontos</th>

									<th>$expiracao</th>

									<th><a href='../../../app/controllers/php/excluir.php?ID_CUPOM=$id'>[Deletar]</a></th>

									<th>Alterar</th>

								</tr>";

				}

				?>

			</tbody>

		</table>

	</div>



	<script type='text/javascript' src="../../../public/js/Funcoescupom.js"></script>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>



</html>