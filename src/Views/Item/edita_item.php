<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro itens</title>
    <link rel="stylesheet" type="text/css" href="..\css\menu\header.css">
    <link rel="stylesheet" type="text/css" href="..\css\cadastro_item\cadastro_item.css">
    <script type="text/javascript" src="..\js\menu.js"></script>
</head>

<body>
<?php require __DIR__ . '..\..\..\menu_lateral.php'; ?>
<div class="main_div">
    <form method="POST" id="form_edita_item" class="content_div">
        <label for="nome">Nome</label>
        <input id="nome" type="text" class="input" value=" <?= $dadosItem['ITEM_NOME'] ?> " name="nome_item">
        <label for="categoria">Categoria</label>
        <select name="categoria_item" id="unidade_medida" class="input">
            <?php foreach ($listaCategorias as $categoria): ?>
                <option
                    <?php echo ($dadosItem['ID_CATEGORIA'] === $categoria['ID_CATEGORIA']) ? 'selected' : ""; ?>
                        name="categoria_item"
                        value="<?= $categoria['ID_CATEGORIA'] ?>"
                >
                    <?= $categoria['CATEGORIA_NOME'] ?>
                </option>
            <?php endforeach ?>
        </select>
        <label for="unidade_medida">Unidade de medida</label>


        <select name="unidade_medida_item" id="unidade_medida" class="input">
            <?php foreach ($listaUnidadesMedida as $unidade_medida): ?>
                <option
                    <?php echo ($dadosItem['ID_UN_MEDIDA'] === $unidade_medida['ID_UNIDADE_MEDIDA']) ? 'selected' : '' ?>
                        name="unidade_medida_item"
                        value="<?= $unidade_medida['ID_UNIDADE_MEDIDA'] ?>"
                >
                    <?= $unidade_medida['UNIDADE_NOME'] ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button form="form_edita_item" class="botao">Cadastrar item</button>
    </form>
</div>
</body>
</html>