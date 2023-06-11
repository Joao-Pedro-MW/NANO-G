<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Logs</title>
	<link rel="stylesheet" type="text/css" href="css\menu\header.css">
	<link rel="stylesheet" type="text/css" href="css\logs\logs.css">
	<script type="text/javascript" src="js\menu.js"></script>
</head>
<body>
	<?php require 'menu_lateral.html' ?>
   	<div class="base">
	<h1>Registros de Entrada/Saída</h1>
	<div class="menu_botoes">
		<button type="button" id="saida" class="botao">Saída</button>
		<button type="button" id="entrada" class="botao">Entrada</button>
		<input type="date" name="data_inicio" id="data_inicio" class="botao" data-placeholder="Data Inicial">
		<input type="date" name="data_fim" id="data_fim" class="botao" placeholder="Data Final">
		<button type="button" class="botao" id="botao_filtro">
			<p>Filtrar Dados</p>
			<img id="imagem_filtro" src="imagens\imagem_filtro.svg" alt="imagem de filtro">
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
	</table>
	</div>
</body>
</html>
