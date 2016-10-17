<?php

$email = $_POST["email"];
$senha = $_POST["senha"];
require_once("conecta.php");
require_once("class/UsuarioDao.php");
require_once("logica-usuario.php");

$usuarioDao = new UsuarioDao($conexao);
$usuario = $usuarioDao->buscaUsuario($email, $senha);

if($usuario == null) {
	$_SESSION["danger"] = "Usuário ou senha inválido.";
	header("Location: index.php");
} else {
	$_SESSION["success"] = "Usuário logado com sucesso.";
	logaUsuario($usuario["email"]);
	header("Location: index.php");
}
die();