<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menu</title>
	<link rel="stylesheet" type="text/css" href="css\menu\header.css">
	<link rel="stylesheet" type="text/css" href="css\tela_remocao_itens.css">
	<script type="text/javascript" src="js\menu.js"></script>
</head>

<style type="text/css">
	#combobox select{
		width:20%;
		margin: auto;
		border: 1px solid black;
		border-radius: 10px;
		padding: 5px;
		margin-left: 40%;
	}

	#combobox label{
		width:20%;
		margin: auto;
		padding: 5px;
		margin-left: 40%;
	}

	#table{
	    margin-top: 30px;
	    width: 100%;
	    text-align: center;
	    border-collapse: collapse;
	    margin-left: 10%;
	}

	th{
	    background-color:var(--dodger-blue-600);
	    color: var(--branco);
	}

	td, th {
	    width: 10em;
	    height: 3em;
	    border: 1px solid var(--dodger-blue-500);
	}

	tr:nth-child(even){background-color:var(--dodger-blue-100)}

	#checkbox{
		margin-top: 6px;
		width: 20px;
		height: 20px;
		border: solid white;
		border-width: 0 2px 2px 0;);
		margin-right: 5px;
	}

	#botao{
		background-color: #de1839;
		color: white;
		font-weight: bold;
		font-size: 15px;
		border-radius: 5px;
		border: 1px solid #de1839;
		width: 17vw;
		height: 6vh;
		margin-left: 41%;
		margin-top: 2%;
	}

	#checkbox_inutil{
		border: 0px solid white;
		text-align: right; 
		padding: 0px;
		background-color: white;
	}
</style>

<body>
	<?php require 'menu_lateral.html' ?>
	<div id="combobox">
		<label for="itens">Item</label><br>
		<select name="itens" id="itens" autofocus required class="combobox">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
		</select>
	</div>

	<div id="table">
		<table>
			<tr>
				<th id="checkbox_inutil"></th>
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
		</table>	
	</div>
	<button id="botao">Remover Item</button>	
</body>
</html>