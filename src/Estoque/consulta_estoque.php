<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Consulta estoque</title>
	<link rel="stylesheet" type="text/css" href="..\css\menu\header.css">
	<link rel="stylesheet" type="text/css" href="..\css\tabelas.css">
	<link rel="stylesheet" type="text/css" href="..\css\estoque\estoque.css">
	<script type="text/javascript" src="..\js\menu.js"></script>
</head>
<body>
<?php require "..\menu_lateral.php" ?>
   	<div class="base">
		<h1>Consulta de estoque</h1>
		<div class="menu_botoes">
			<label for="nome_item">Nome do produto:</label>
			<input type="text" id="nome_item"></input>
			<label for="valor_item">Valor:</label>
			<input type="number" id="valor_item"></input>
			<label for="quantidade_itens">Quantidade:</label>
			<input type="number" id="quantidade_itens"></input>
			<label for="data_vencimento">Vencimento em:</label>
			<input type="date" name="data_inicio" id="data_vencimento" class="botao" placeholder="Data Inicial do Vencimento">
			<label for="data_fim">até vencimento em:</label>
			<input type="date" name="data_fim" id="data_fim" class="botao" placeholder="Data Final do Vencimento">
			<button type="submit" class="botao" id="botao_filtro">Filtrar Dados
				<!--<img id="imagem_filtro" src="imagens\imagem_filtro.svg" alt="imagem de filtro">-->
			</button>
		</div>
		<table class="tabela_dados" id="tabela_dados">
			<tr>
				<th>Nome</th>
				<th>Valor</th>
				<th>Quantidade</th>
				<th>Vencimento</th>
				<th>Lote</th>
			</tr>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
			</tr>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
			</tr>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
			</tr>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
			</tr>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
			</tr>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
			</tr>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
			</tr>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
			</tr>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
			</tr>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
			</tr>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
			</tr>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
			</tr>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
			</tr>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
			</tr>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
			</tr>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
			</tr>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
			</tr>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
			</tr>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
			</tr>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
			</tr>
	</table>
	</div>
</body>
</html>