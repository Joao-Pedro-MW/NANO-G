<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menu</title>
	<link rel="stylesheet" type="text/css" href="css\menu\header.css">
	<link rel="stylesheet" type="text/css" href="css\cadastro_lote\cadastro_lote.css">
	<script type="text/javascript" src="js\menu.js"></script>
</head>

<body>
	<?php require 'menu_lateral.html' ?>

	<table>
		<tr>
			<td>
				<label for="itens">Nome do Item</label><br>
				<select name="itens" id="itens" autofocus required class="combobox">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
			</td>
			<th></th>
			<td>
				<label for="validade">Validade do Produto</label>
				<input type="date" name="validade" id="validade" class="input"><br>
			</td>
		</tr>
		<tr>
			<td>
				<label for="unidades">Unidades</label><label for="un_medida">Unidade de Medida</label>
				<input type="" name="unidade" id="unidades" class="junto"><input type="" name="un_medida" id="un_medida" readonly class="junto"></td>
				
				
			<th></th>
			<td>
				<label for="lote">Lote</label>
				<input type="text" name="lote" id="lote" class="input"><br>
			</td>
		</tr>
		<tr>
			<td>
				<label for="valor">Valor</label>
				<input type="" name="valor" id="valor" class="input">
			</td>
			<th></th>
			<td>
				<button id="botao">Cadastrar Lote</button>	
			</td>
		</tr>

	</table>


	

	

	

	

	
</body>
</html>