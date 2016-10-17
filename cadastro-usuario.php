<?php require_once("cabecalho.php");

 $email = $_POST["email"];
 $senha = $_POST["senha"];
  
 $senha_crip = md5($senha);
 $usuarioDao = new UsuarioDao($conexao);

		if($usuarioDao->cadastraUsuario($email, $senha_crip)) { ?>
	 		<p class="text-sucess">Cadastro realizado com sucesso !</p>
	 		<?php } else {
	 		$msg = mysqli_error($conexao);
	 		?>
	 		<p class="text-danger">Usuario não cadastrado: <?=$msg?></p>
 		<?php
	}
mysqli_close($conexao);
include("rodape.php");
?>