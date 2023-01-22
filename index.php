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
					  <a class="btn btn-outline-primary me-2" href="inclusao.php">Incluir</a>
				  </li>
				  <li id="btConsulta" class="nav-item">
					  <a class="btn btn-outline-primary me-2" href="#">Consultar</a>
				  </li>
				</ul>
			  </div>
			</div>
		  </nav>

		<script language=javascript type="text/javascript">
			function newPopup(id){
        //alert(id);
				var resultado = confirm("Tem certeza que deseja excluir o contato?");
				if (resultado == true) {
					//alert("O contato será excluído da lista!");
          
          $.ajax({
            type: "POST",
            url : "excluir.php",
            async: false,
            data : {
              usuario_id: id,                                       
            },
            success : function(resultado) {
              if (resultado == 1){
                alert("Contato excluído com sucesso!");
                location.reload();
              }else{
                alert("Erro ao excluir!");
              }
            }
          });

				}
				else{
					alert("Você desistiu de excluir o contato da lista!");
				}
			}
		</script>

	</header>

	<section>
		<div class="d-flex justify-content-center align-items-center mt-5"><h2>Lista de Contatos</h2></div>
        
        <?php
            $con=mysqli_connect("127.0.0.1","root","","super");
            // Check connection
            if (mysqli_connect_errno())
            {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

           
            if (empty($_GET)) {
              $p = 0;
            } else {
              $p = $_GET['p'];
            }

            $total_reg = 5;
            $inicial = $p*$total_reg;
            $result = mysqli_query($con,"SELECT * FROM contatos LIMIT " . $inicial . ", " . $total_reg);
            $todos_registros = mysqli_query($con,"SELECT * FROM contatos");
            $total = mysqli_num_rows($todos_registros);
            $paginas = $total / $total_reg;

            echo "<div class='container'><div class='row justify-content-md-center mt-5'>
            <table class='table table-striped table-light col-md-6'>
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>MCI</th>
                        <th scope='col'>Nome</th>
                        <th scope='col'>E-mail</th>
                        <th scope='col'>Telefone</th>
                        <th scope='col'>Ações</th>
                    </tr>
                </thead>";

            while($row = mysqli_fetch_array($result))
            {
                echo "<tr>";
                echo "<td>" . $row['usuario_id'] . "</td>";
                echo "<td>" . $row['mci'] . "</td>";
                echo "<td>" . $row['nome'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['telefone'] . "</td>";
                echo "<td><a href='javascript:newPopup(" . $row['usuario_id'] . ")'><button type='button' class='btn btn-danger'>Excluir</button></a>";
                echo " <a href='edicao.php?s=&id=" . $row['usuario_id'] . "'><button type='button' class='btn btn-warning'>Editar</button></a>";
                echo "</tr>";
            }
            echo "</table></div>";
            
            if ($p <= 1){
              $p1 = 0;
              $p2 = 1;
              $p3 = 2;
              $p4 = 3;
              $class_p = 'disabled';
              $class_n = '';
            } else{
              $p1 = $p - 1;
              $p2 = $p1 + 1;
              $p3 = $p2 + 1;
              $p4 = $p3 + 1;
              $class_p = '';
              $class_n = '';
            }
            
            $previous = $p - 1;

            if ($previous < 0){
              $previous = 0;
            }

            $next = $p + 1;
            
            if ($p == 0){
              $active1 = 'active';
              $active2 = '';
            } else {
              $active1 = '';
              $active2 = 'active';
            }

            echo "
            <div class='row'>
              <nav aria-label=''>
                <ul class='pagination'>
                  <li class='page-item " . $class_p . "'>
                    <a class='page-link' href='index.php?p=" . $previous . "' aria-label='Previous'>
                      <span aria-hidden='true'>&laquo;</span>
                    </a>
                  </li>
                  <li class='page-item " . $active1 . "'><a class='page-link' href='index.php.?p=" . $p1 . "'>" . $p2 . "</a></li>
                  <li class='page-item " . $active2 . "'><a class='page-link' href='index.php.?p=" . $p2 . "'>" . $p3  . "</a></li>";
            
                  if ($total - $inicial < $total_reg){
                    $p3 = $p;
                    $p4 = $p3 + 2;
                    $next = $p;
                    $class_n = 'disabled';
                  }
            
            echo "
                  <li class='page-item " . $class_n . "'><a class='page-link' href='index.php.?p=" . $p3 . "'>" . $p4 . "</a></li>
                  <li class='page-item " . $class_n . "'>
                    <a class='page-link' href='index.php?p=" . $next . "' aria-label='Next'>
                      <span aria-hidden='true'>&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
            ";

            echo "</div>";            

            mysqli_close($con);
        ?>
	</section>

</body>

</html>