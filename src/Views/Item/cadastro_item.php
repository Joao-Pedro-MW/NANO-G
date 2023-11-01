<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro itens</title>
    <link rel="stylesheet" type="text/css" href="..\css\menu\header.css">
    <link rel="stylesheet" type="text/css" href="..\css\cadastro_item\cadastro_item.css">
    <script type="text/javascript" src="..\js\menu.js"></script>
</head>

<body>
	<?php require __DIR__ . '..\..\..\menu_lateral.php' ?>

    <div class="main_div">
        <form action="" method="GET" id="form_item">

            <div class="content_div">
                    <label for="nome">Nome</label>
                    <input id="nome" type="text" class="input">

                    <label for="categoria">Categoria</label>
                    <input id="categoria" type="text" class="input">

                    <label for="unidade_medida">Unidade de medida</label>
                    <select id="unidade_medida" class="input_combo">
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                    </select>

                    <input type="submit" value="Cadastrar item" class="botao">
            </div>

        </form>
    </div>
</body>
</html>