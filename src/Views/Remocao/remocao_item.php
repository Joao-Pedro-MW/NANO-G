<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Remover item</title>
	<link rel="stylesheet" type="text/css" href="..\css\menu\header.css">
	<link rel="stylesheet" type="text/css" href="..\css\remocao_itens\remocao_itens.css">
	<link rel="stylesheet" type="text/css" href="..\css\tabelas.css">
	<script type="text/javascript" src="..\js\menu.js"></script>
</head>
<body>

	<?php require __DIR__ . '..\..\..\menu_lateral.php' ?>
	<div class="container">
		<button id="remocao" class="remocao">Remover Item</button>
		<button id="pesquisa" class="pesquisa">Pesquisar</button>
	</div>
	
	<div class="base">
		<table id="tabela_dados">
			<tr>

				<th style="background-color:white;border:none"></th>
				
			    <th class="item">Produto 
					<select name="itens" id="itens" autofocus required class="combobox">
						<option></option>
					</select>
				</th>

			    <th class="item">Qtd.</th>

			    <th class="item">Tipo
					<select name="itens" id="itens" autofocus required class="combobox">
						<option></option>
					</select>
				</th>

			    <th class="item">Valor
					<select name="itens" id="itens" autofocus required class="combobox">
						<option></option>
					</select>
				</th>

			    <th class="item">Lote
					<select name="itens" id="itens" autofocus required class="combobox">
						<option></option>
					</select>  
				</th>  

				<th class="item">Validade
					<select name="itens" id="itens" autofocus required class="combobox">
						<option></option>
					</select>
				</th>

			</tr>
			<tr>

				<td id="select" >
                    <input type="number">
                    <input type="checkbox" id="checkbox">
                </td>

				<td class="item"></td>
				<td class="item"></td>
				<td class="item"></td>
				<td class="item"></td>
				<td class="item"></td>
				<td class="item"></td>

			</tr>
			<tr>

				<td id="select" >
                    <input type="number">
                    <input type="checkbox" id="checkbox">
                </td>

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