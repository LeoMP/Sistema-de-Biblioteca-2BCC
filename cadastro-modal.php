<?php require_once("cabecalho.php"); ?>
<div class="container">
  <h1>Cadastro</h1>
    <form action="cadastro-usuario.php" method="post">
        <tr>
            <td>Email</td>
            <td><input type="email" class="form-control" name="email" ></td>
        </tr>
            <td>Senha</td>
            <td><input type="password" class="form-control" name="senha" id="senha"></td>
        </tr>
        <tr>
            <td>Confirmação de Senha</td>
            <td><input onkeyup="validarSenha();" type="password" class="form-control" name="senha2" id="senha2"></td>
        </tr>
        <tr>
            <td><p id="resultado"></p></td>
        </tr>
        <tr>
            <td>
                <button class="btn btn-primary">Cadastrar</button>
            </td>
       </tr>
    </form>
</div>
<?php require_once("rodape.php"); ?>