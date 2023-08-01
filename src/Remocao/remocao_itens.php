<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menu</title>
	<link rel="stylesheet" type="text/css" href="css\menu\header.css">
	<link rel="stylesheet" type="text/css" href="css\remocao_itens\remocao_itens.css">
	<script type="text/javascript" src="js\menu.js"></script>
</head>

<body>
	<?php require 'menu_lateral.html' ?>
	<div>
		<div id="combobox">
			<select name="itens" id="itens" autofocus required class="combobox">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
			</select>
		</div>
		<button id="botao_pesquisa">Pesquisar</button>
		<button id="botao">Remover Item</button>
	</div>
	
	<div id="tabela">
		<table>
			<tr>
				<th>Checkbox</th>
			    <th>Prod.</th>
			    <th>Qtd.</th>
			    <th>Tipo</th>
			    <th>Valor</th>
			    <th>Lote</th>
			    <th>Validade</th>
			</tr>

			
			<tr>
				<th id="checkbox_inutil"><input type="checkbox" id="checkbox"></th>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<th id="checkbox_inutil"><input type="checkbox" id="checkbox"></th>				
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<th id="checkbox_inutil"><input type="checkbox" id="checkbox"></th>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<th id="checkbox_inutil"><input type="checkbox" id="checkbox"></th>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<th id="checkbox_inutil"><input type="checkbox" id="checkbox"></th>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<th id="checkbox_inutil"><input type="checkbox" id="checkbox"></th>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<th id="checkbox_inutil"><input type="checkbox" id="checkbox"></th>	
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<th id="checkbox_inutil"><input type="checkbox" id="checkbox"></th>	
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<th id="checkbox_inutil"><input type="checkbox" id="checkbox"></th>	
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<th id="checkbox_inutil"><input type="checkbox" id="checkbox"></th>	
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<th id="checkbox_inutil"><input type="checkbox" id="checkbox"></th>	
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</table>	
	</div>
</body>
</html>