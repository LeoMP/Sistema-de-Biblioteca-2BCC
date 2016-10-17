<?php require_once("cabecalho.php"); ?>
<div class="container">
  <h1>Login</h1>
    <form action="login.php" method="post">
        <table class="table">
           <tr>
                <td>Email</td>
                <td><input class="form-control" type="text" name="email"></td>
            </tr>
            <tr>
                <td>Senha</td>
                <td><input class="form-control" type="password" name="senha"></td>
            </tr>
            <tr>
                <td><button class="btn btn-primary">Login</button></td>
            </tr>
        </table>
    </form>
</div>
      
<?php require_once("rodape.php"); ?>