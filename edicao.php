<!DOCTYPE HTML>
 <html lang="pt-br">

<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <title>SUPER ADM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<script src="lib/js/jquery-3.5.1.min.js"></script>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container-fluid">
			  <div class="navbar-brand text-white">Agenda de Contatos</div>
			  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
				<ul class="navbar-nav">
				  <li class="nav-item">
					<a class="btn btn-outline-primary me-2" href="inclusao.php">Incluir</a>
				  </li>
				  <li class="nav-item">
					<a class="btn btn-outline-primary me-2" href="index.php">Consultar</a>
				  </li>
				</ul>
			  </div>
			</div>
		  </nav>

	</header>

	<section>
		
		<div class="d-flex justify-content-center align-items-center mt-5"><h2>Editar Contato</h2></div>
		<form class="row g-3 mx-5 mt-5" action="editar.php" method="POST">
			<?php
				$success = $_GET['s'];
				if ($success == 1) {
					echo "
						<div id='divdesaparecer' class='alert alert-success' role='alert'>
							<b>Sucesso!</b>
						</div>
					";
				}
			?>

			<div class="col-md-4">
				<label for="" class="form-label">ID</label>
				<?php
					$id = $_GET['id'];
					echo "<input name='id' type='text' class='form-control' id='' placeholder='' value='" . $id . "' readonly>";
				?>
			</div>

			<div class="col-md-4">
				<label for="" class="form-label">Nome</label>
				<input name="nome" type="text" class="form-control" id="" placeholder="" value="Nome novo" required>
			</div>

			<div class="col-12">
				<div class="col-8">
					<label for="" class="form-label">Observação</label>
					<textarea name="observacao" class="form-control" placeholder="Escreva a observação aqui..." id="floatingTextarea2" style="height: 100px"></textarea>
				</div>
			</div>
			
			<div class="col-12">
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
					Confirmar
				</button>
			</div>

			<!-- The Modal -->
			<div class="modal" id="myModal">
				<div class="modal-dialog">
					<div class="modal-content">

					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title">Confirmação</h4>
						<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
					</div>

					<!-- Modal body -->
					<div class="modal-body">
						Tem certeza que deseja atualizar?
					</div>

					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary" type="submit">Ok</button>
						<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
					</div>

					</div>
				</div>
			</div>

		</form>

	</section>

    <script type="text/javascript">
    $(document).ready(function () {
        setTimeout(function () {
            $('#divdesaparecer').fadeOut(1000);
        }, 2000);
    });
    </script>

</body>

</html>