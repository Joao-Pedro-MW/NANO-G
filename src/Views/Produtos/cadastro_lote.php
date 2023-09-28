<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro lote</title>
	<link rel="stylesheet" type="text/css" href="..\css\menu\header.css">
	<link rel="stylesheet" type="text/css" href="..\css\cadastro_lote\cadastro_lote.css">
	<script type="text/javascript" src="..\js\menu.js"></script>
</head>

<body>
	<?php require __DIR__ . '..\..\..\menu_lateral.php' ?>
	<div class="linha" id="main_div">
		<div id="content_div">
			<div class="coluna">
				<div>
					<label for="itens">Nome do Item</label>
					<select name="itens" id="itens" autofocus required> 
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>

				</div>
				<div class="junto">
					<div class="div_left">
						<label for="unidade">Unidade</label>
						<input type="number" name="unidade" id="unidades" placeholder="Unidade">
					</div>
					
					<div class="div_left">
						<label for="un_medida">Unidade de Medida</label>
						<select name="un_medida" id="un_medida" placeholder="XX" readonly>
							<option disabled selected>XX</option>
						</select>
					</div>
				</div>
				<div>
					<label for="valor">Valor</label>
					<input type="number" name="valor" id="valor" placeholder="Valor">
				</div>
			</div>
				
			<div class="coluna">
				<div>
					<label for="validade">Validade do Produto</label>
				<input type="date" name="validade" id="validade" placeholder="Data de Validade"><br>
				</div>
				<div>
					<label for="lote" id="label">Lote (Automático)</label>
					<input type="text" name="lote" id="lote" placeholder="XXXXXX" readonly><br>
				</div>
				<div>
					<label for="botao" id="label_inv">.</label>
					<button id="botao">Cadastrar Lote</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>