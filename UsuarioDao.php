<?php

class UsuarioDao{

private $conexao;

function __construct($conexao){
	$this->conexao = $conexao;
}

function buscaUsuario($email, $senha) {

	$senhaMd5 = md5($senha);
	$email = mysqli_real_escape_string($this->conexao, $email);
	$query = "select * from usuarios where email='{$email}' and senha='{$senhaMd5}'";
	$resultado = mysqli_query($this->conexao, $query);
	$usuario = mysqli_fetch_assoc($resultado);
	return $usuario;
}

function cadastraUsuario($email, $senha){
	$senha_crip = $senha;
	$emailc = $email;
	$query = "insert into usuarios (email, senha) values ('{$emailc}', '{$senha_crip}')";
	return mysqli_query($this->conexao, $query);
}

}