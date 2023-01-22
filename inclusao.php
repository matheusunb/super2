<!DOCTYPE HTML>
 <html lang="pt-br">

<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <title>SUPER ADM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<script src="lib/js/jquery-3.5.1.min.js"></script>
</head>

<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container-fluid">
			  <div class="navbar-brand text-white">Agenda de Contatos</div>
			  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
				<ul class="navbar-nav">
				  <li class="nav-item">
					<a class="btn btn-outline-primary me-2" href="#">Incluir</a>
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
		
		<div class="d-flex justify-content-center align-items-center mt-5"><h2>Adicionar Contato</h2></div>
		<form class="row g-3 mx-5 mt-5" action="incluir.php" method="POST">

			<div class="col-md-4">
				<label for="" class="form-label">MCI</label>
				<input name="mci" type="text" class="form-control" id="" placeholder="Digite o MCI..." required autofocus>
			</div>

			<div class="col-md-4">
				<label for="" class="form-label">Nome</label>
				<input name="nome" type="text" class="form-control" id="" placeholder="Digite o nome..." required>
			</div>

			<div class="col-md-4">
				<label for="validationEmail" class="form-label">E-mail</label>
				<div class="input-group">
				<span class="input-group-text" id="">@</span>
				<input name="email" type="email" class="form-control" id="validationEmail" placeholder="Digite o e-mail..." required>
				</div>
			</div>

			<div class="col-md-4">
				<label for="" class="form-label">Telefone</label>
				<input name="telefone" type="text" class="form-control" id="" placeholder="(xx)9xxxx-xxxx" required>
			</div>
			
			<div class="col-12">
				<button type="submit" class="btn btn-primary" type="submit">Adicionar</button>
			</div>

		</form>

	</section>

</body>

</html>