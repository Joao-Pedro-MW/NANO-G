<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Remover item</title>
	<link rel="stylesheet" type="text/css" href="..\css\menu\header.css">
	<link rel="stylesheet" type="text/css" href="..\css\remocao_itens\remocao_itens.css">
	<script type="text/javascript" src="..\js\menu.js"></script>
</head>

<body>
	<?php require '..\menu_lateral.php' ?>
	<div class="container">
		
		<button id="" class="pesquisa">Pesquisar</button>
	</div>
	
	<div id="tabela">
		<table>
			<tr>
				<th style="background-color:white;border:none">
				<button id="" class="remocao">Remover Item</button></th>
			    <th class="item">Produto 
					<select name="itens" id="itens" autofocus required class="combobox">
						<option></option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</th>
			    <th class="item">Qtd.
					<select name="itens" id="itens" autofocus required class="combobox">
						<option></option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</th>
			    <th class="item">Tipo
					<select name="itens" id="itens" autofocus required class="combobox">
						<option></option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</th>
			    <th class="item">Valor
					<select name="itens" id="itens" autofocus required class="combobox">
						<option></option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</th>
			    <th class="item">Lote
					<select name="itens" id="itens" autofocus required class="combobox">
						<option></option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>  
				</th>  
				<th class="item">Validade
					<select name="itens" id="itens" autofocus required class="combobox">
						<option></option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</th>
			</tr>
			<tr>
				<th id=""><input type="checkbox" id="checkbox"></th>	
				<td class="item"></td>
				<td class="item"></td>
				<td class="item"></td>
				<td class="item"></td>
				<td class="item"></td>
				<td class="item"></td>
			</tr>
		</table>	
	</div>
</body>
</html>