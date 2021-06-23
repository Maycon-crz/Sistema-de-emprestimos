<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desafio Serasa</title>
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">    
    <link rel="stylesheet" type="text/css" href="css/estilo.css">    
</head>
<body>	
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Código para todxs</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0 text-center">						
					<li class="nav-item dropdown pt-2">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Empréstimos e Serviços</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="#linhaDinamicaDeEmprestimos">Empréstimo Automático</a></li>
							<li><a class="dropdown-item" href="#linhaDinamicaDeEmprestimos">Empréstimo Consignado</a></li>							
							<li><hr class="dropdown-divider"></li>
							<li><a class="dropdown-item" href="#">Simulação de empréstimo</a></li>
						</ul>
					</li>
																	
					<?php		
						$nome = $_SESSION['nome'] ?? "";
						$sobrenome = $_SESSION['sobrenome'] ?? "";
						if($nome != NULL){								
							echo "<li class='nav-item pt-3'><u>".$nome." ".$sobrenome."</u></li>";
							echo "<li class='nav-item pt-3'><button type='button' class='btn btn-outline-danger p-0 pe-5 ps-5 ms-1' id='btSair'>Sair</button></li>";
						}else{ echo "<li class='nav-item pt-2'><button type='button' class='btn btn-outline-primary form-control' data-bs-toggle='modal' data-bs-target='#ModalContaDigital' id='btModalContaDigital'>Conta Digital</button></li>"; }
					?>
					</li>
				</ul>
				<form class="d-flex">
					<input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
					<button class="btn btn-outline-success" type="submit">🔍</button>
				</form>
			</div>
		</div>
	</nav>