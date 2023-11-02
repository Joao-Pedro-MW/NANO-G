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
						<!-- Pega os itens da tabela itens/produtos -->
					</select>
				</div>
				<div class="junto">
					<div class="div_left">
						<label for="unidade">Quantidade</label>
						<input type="number" min="1" name="quantidade" id="quantidade" placeholder="quantidade">
					</div>
					<div class="div_left">
						<label for="un_medida">Unidade de Medida</label>
                        <input type="text" name="un_medida" id="un_medida" placeholder="ZX" readonly><br>
					</div>
				</div>
				<div>
					<label for="valor">Valor</label>
					<input type="number" min="0" name="valor" id="valor" placeholder="R$ Reais">
				</div>
			</div>
			<div class="coluna">
				<div>
					<label for="validade">Validade do Produto</label>
				<input type="date" name="validade" id="validade" placeholder="Data de Validade"><br>
				</div>
				<div>
					<label for="lote" id="label">Lote (Automático)</label>
                    <!--Necessario ser validado pela Alynne-->
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