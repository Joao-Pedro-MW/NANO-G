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
	<div class="linha">
		<div class="coluna">
			<div>
				<label for="itens">Nome do Item</label><br>
				<select name="itens" id="itens" autofocus required style="width:16vw"> 
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
			</div>
			<div class="junto">
				<div style="float:left;">
					<label for="unidade">Unidade</label>
					<input type="" name="unidade" id="unidades">
				</div>
				
				<div style="float:left;">
					<label for="un_medida">Unidade de Medida</label>
					<input type="" name="un_medida" id="un_medida">
				</div>
			</div>
			<div>
				<label for="valor">Valor</label>
				<input type="" name="valor" id="valor" style="width:16vw">
			</div>
		</div>
			
		<div class="coluna">
			<div>
				<label for="validade">Validade do Produto</label>
			<input type="date" name="validade" id="validade" style="width:16vw"><br>
			</div>
			<div>
				<label for="lote" id="label">Lote</label>
				<input type="text" name="lote" id="lote" style="width:16vw"><br>
			</div>
			<div>
				<button id="botao" style="width:16vw">Cadastrar Lote</button>
			</div>
		</div>
	</div>
</body>
</html>