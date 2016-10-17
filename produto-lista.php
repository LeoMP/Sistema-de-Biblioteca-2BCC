<?php
require_once("cabecalho.php");
?>

<table id="tabela" class="table table-striped table-bordered">
	<thead>
        <tr>
            <th>Nome</th>
            <th>Valor</th>
            <th>Descricao</th>
            <th>Categoria</th>
        </tr>
        <tr>
            <th><input type="text" id="txtColuna1"/></th>
            <th><input type="text" id="txtColuna2"/></th>
            <th><input type="text" id="txtColuna3"/></th>
            <th><input type="text" id="txtColuna4"/></th>
        </tr>            
    </thead>
	<?php
	$produtoDao = new ProdutoDao($conexao);
	$produtos = $produtoDao->listaProdutos();
	foreach($produtos as $produto) :
	?>
		
		<tr>
			<td><?= $produto->getNome() ?></td>
			<td><?= $produto->getPreco() ?></td>
			
			<td><?= substr($produto->getDescricao(), 0, 40) ?></td>
			<td><?= $produto->getCategoria()->getNome() ?></td>
			
			<td>
				<a class="btn btn-primary" 
					href="produto-altera-formulario.php?id=<?=$produto->getId()?>">
					Alterar
				</a>
			</td>
			<td>
				<form action="remove-produto.php" method="post">
					<input type="hidden" name="id" value="<?=$produto->getId()?>">
					<button class="btn btn-danger">Remover</button>
				</form>
			</td>
		</tr>
		
	<?php
	endforeach
	?>	
</table>

<?php include("rodape.php"); ?>