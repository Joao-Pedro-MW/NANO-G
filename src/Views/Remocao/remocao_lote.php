<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Remover item</title>
	<link rel="stylesheet" type="text/css" href="..\css\menu\header.css">
	<link rel="stylesheet" type="text/css" href="..\css\remocao_lote\remocao_lote.css">
	<link rel="stylesheet" type="text/css" href="..\css\tabelas.css">
	<script type="text/javascript" src="..\js\menu.js"></script>
</head>
<body>
	<?php require __DIR__ . '..\..\..\menu_lateral.php' ?>

	<div class="container">
		<button id="remocao" class="remocao" type="submit" form="form_remocao">Remover Lote</button>
		<button id="pesquisa" class="pesquisa" type="button">Pesquisar</button>
	</div>
	<div class="base">
        <form method="post" name="form_remocao" id="form_remocao">
            <table id="tabela_dados">
                <tr>
                    <th class="item">lote
                        <select autofocus class="combobox">
                            <?php /* foreach ($listaLotes as $lote): ?>
                            <option class="opcao" id="pesquisa_lote"><?= $lote["CATEGORIA"]?></option>
                            <?php endforeach;*/?>
                        </select>
                    </th>
                    <th class="item">item
                        <select autofocus class="combobox">
                            <?php /* foreach ($listaLotes as $lote): ?>
                                <option class="opcao" id="pesquisa_nome_item"><?=$lote["NOME_ITEM"]?></option>
                            <?php endforeach;*/?>
                        </select>
                    </th>
                    <th class="item">Quantidade
                        <select id="quantidade" autofocus class="combobox">
                            <?php /* foreach ($listaLotes as $lote): ?>
                                <option class="opcao" id="pesquisa_quantidade"><?= $lote["QUANTIDADE"]?></option>
                            <?php endforeach;*/?>
                        </select>
                    </th>
                    <th class="item">Unidade Medida
                        <select autofocus class="combobox">
                            <?php /* foreach ($listaLotes as $lote): ?>
                                <option class="opcao" id="pesquisa_un_medida"><?= $lote["UNIDADE_MEDIDA"]?></option>
                            <?php endforeach;*/?>
                        </select>
                    </th>
                    <th class="item">Valor por Item
                        <select autofocus class="combobox">
                            <?php /* foreach ($listaLotes as $lote): ?>
                                <option class="opcao" id="pesquisa_valor"><?= $lote["VALOR_ITEM"]?></option>
                            <?php endforeach;*/?>
                        </select>
                    </th>
                    <th class="item">Validade
                        <select autofocus class="combobox">
                            <?php /* foreach ($listaLotes as $lote): ?>
                                <option class="opcao" id="pesquisa_data_validade"><?= $lote['DATA_VALIDADE']?></option>
                            <?php endforeach;*/?>
                        </select>
                    </th>
                    <th class="item">Operações</th>
                </tr>
                <?php /* foreach ($listaLotes as $lote): */?>
                <tr>
                    <td class="item" id="lote_item"></td>
                    <td class="item" id="nome_item"></td>
                    <td class="item" id="quantidade_item"></td>
                    <td class="item" id="unidade_medida_item"></td>
                    <td class="item" id="valor_item"></td>
                    <td class="item" id="validade_lote"></td>
                    <td id="lixeira">
                        <a href="">
                            <img src="..\imagens\imagem_lixeira.svg">
                        </a>
                        
                    </td>
                </tr>
                <?php /*endforeach;*/?>
            </table>
        </form>
	</div>

</body>
</html>