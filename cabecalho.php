<?php

function carregaClasse($nomeDaClasse) {
	require_once("class/".$nomeDaClasse.".php");
}

spl_autoload_register("carregaClasse");

error_reporting(E_ALL ^ E_NOTICE);
require_once("logica-usuario.php");
require_once("class/UsuarioDao.php"); 
require_once("mostra-alerta.php");
require_once("conecta.php"); ?>
<html>
<head>
	<meta charset="utf-8">
	<title>Livraria Laraiva</title>
	<link href="css/loja.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
	<header>
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php">Laraiva</a>
				</div>
				<div>
					<ul class="nav navbar-nav">
						<li><a href="produto-lista.php">Livros</a></li>
						<li><a href="produto-formulario.php">Adicionar produtos</a></li>
					</ul>
				</div>
				<?php if(!usuarioEstaLogado()){  ?>
				<div class="collapse navbar-collapse navbar-right">
	                <ul class="nav navbar-nav">
	                    <li><a href="login-modal.php" class="btn">Entrar</a></li>
	                    <li><a href="cadastro-modal.php" class="btn">Cadastrar</a></li>                      
	                </ul>
	            </div>
	            <?php } else {?>
	            <div class="collapse navbar-collapse navbar-right">
	            	<ul>
			            <li><a href="logout.php" class="btn btn-primary">Sair</a></li>        
	            	</ul>
				</div>
	            	<?php } ?>
			</div>
		</div>
	</header>

	<div class="container">
		<div class="principal">
			<?php  mostraAlerta("success"); ?>
			<?php mostraAlerta("danger"); ?>