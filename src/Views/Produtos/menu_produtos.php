<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menu produtos</title>
	<link rel="stylesheet" type="text/css" href="..\css\menu\header.css">
    <link rel="stylesheet" type="text/css" href="..\css\menu_produtos\css_produtos.css">
	<script type="text/javascript" src="..\js\menu.js"></script>
</head>
<body>
	<?php require __DIR__ . '..\..\menu_lateral.php' ?>
   	<div class="base">
        <h1>Consulta de produtos</h1>
        <button type="button" class="botao">Cadastrar novo produto</button>
        <table class="tabela_dados" id="tabela_dados">
			<tr>
				<th>Nome</th>
				<th>Unidade de Medida</th>
				<th>Tipo</th>
				<th>Operações</th>
			</tr>
			<tr>
				<td class="td_produto">Produto 1</td>
				<td class="td_un_medida">Kg</td>
				<td class="td_tipo">Materia-Prima</td>
				<td class="td_opcoes">
                    <img src="..\imagens\imagem_lapis_edicao.svg" alt="Lapis" id="icones">
                    <img src="..\imagens\imagem_lixeira.svg" alt="Lixeira" id="icones">
                </td>
			</tr>
            <tr>
				<td class="td_produto">Produto 1</td>
				<td class="td_un_medida">Kg</td>
				<td class="td_tipo">Materia-Prima</td>
				<td class="td_opcoes">
                    <img src="..\imagens\imagem_lapis_edicao.svg" alt="Lapis" id="icones">
                    <img src="..\imagens\imagem_lixeira.svg" alt="Lixeira" id="icones">
                </td>
			</tr>
            <tr>
				<td class="td_produto">Produto 1</td>
				<td class="td_un_medida">Kg</td>
				<td class="td_tipo">Materia-Prima</td>
				<td class="td_opcoes">
                    <img src="..\imagens\imagem_lapis_edicao.svg" alt="Lapis" id="icones">
                    <img src="..\imagens\imagem_lixeira.svg" alt="Lixeira" id="icones">
                </td>
			</tr>
            <tr>
				<td class="td_produto">Produto 1</td>
				<td class="td_un_medida">Kg</td>
				<td class="td_tipo">Materia-Prima</td>
				<td class="td_opcoes">
                    <img src="..\imagens\imagem_lapis_edicao.svg" alt="Lapis" id="icones">
                    <img src="..\imagens\imagem_lixeira.svg" alt="Lixeira" id="icones">
                </td>
			</tr>
        </table>
    </div>
</body>
</html>
