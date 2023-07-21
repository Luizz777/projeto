<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario em php</title>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
	
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="index.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Cadastrar
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="?page=novo">Novo usuário</a></li>
						<li><a class="dropdown-item" href="?page=listar">Listar usuário</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
<?php
include("config.php");
switch (@$_REQUEST['page']) {
	case 'novo':
		 include("novo-usuario.php");
		break;
	case 'listar':
		 include("listar-usuario.php");
		break;
	case 'salvar':
			include("salvar-usuario.php");
		break;
	case 'editar':
			include("editar-usuario.php");
		break;    
	default:
		echo "Bem vindos";
		break;
}
?>
</body>
</html>
