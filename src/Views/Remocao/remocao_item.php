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
		<button id="remocao" class="remocao" form="form_remocao">Remover Item</button>
		<button id="pesquisa" class="pesquisa">Pesquisar</button>
	</div>
	<div class="base">
        <?php ?>
        <form method="post" name="form_remocao" id="form_remocao">
		<table id="tabela_dados">
			<tr>

				<th style="background-color:white;border:none"></th>
				
			    <th class="item">Item
					<select name="itens" id="itens" autofocus class="combobox">
						<option></option>
					</select>
				</th>

			    <th class="item">Qtd.</th>

			    <th class="item">Valor
					<select name="itens" id="itens" autofocus class="combobox">
						<option></option>
					</select>
				</th>

			    <th class="item">Lote
					<select name="itens" id="itens" autofocus class="combobox">
						<option></option>
					</select>  
				</th>  

				<th class="item">Validade
					<select name="itens" id="itens" autofocus class="combobox">
						<option></option>
					</select>
				</th>

			</tr>
            <?php var_dump($listaItens);foreach ($listaLotes as $lote): ?>
			<tr>

				<td id="select" >
                    <input type="number">
                    <input type="checkbox" id="checkbox">
                </td>
				<td class="item" id="nome_item"><?=$lote["NOME_ITEM"]?></td>
				<td class="item" id="quantidade_item"><?= $lote["QUANTIDADE"]?></td>
				<td class="item" id="valor_item">Valor Item</td>
				<td class="item" id="lote_item"><?= $lote['ID_LOTE']?></td>
				<td class="item" id="validade_lote"><?= $lote['DATA_VALIDADE'] ?></td>
			</tr>
            <?php endforeach;?>
		</table>
        </form>
	</div>
</body>
</html>