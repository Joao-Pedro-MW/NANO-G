<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="..\imagens\favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nano-G | Trocar senha</title>
    <link rel="stylesheet" type="text/css" href="..\css\menu\header.css">
    <link rel="stylesheet" type="text/css" href="..\css\troca_senha\troca_senha.css">
    <script type="text/javascript" src="..\js\menu.js"></script>
</head>
<body>
<?php require __DIR__ . '..\..\..\menu_lateral.php' ?>
<div class="main_div">
    <form method="POST" id="form_cria_item" class="content_div">
        <?php
        if(array_key_exists('erro',$_GET)){
            echo "<p class='aviso'>Senhas incorretas</p>";
        };?>
        <label for="senha_antiga">Senha atual</label>
        <input type="password" class="input" id="senha_antiga" name="senha_atual" required>

        <label for="senha">Nova Senha</label>
        <input type="password" class="input" id="senha" name="nova_senha" required>

        <label for="senha_confirmar">Confirmar Senha</label>
        <input type="password" class="input" id="senha_confirmar" name="confirma_senha" required>

        <button form="form_cria_item" class="botao">Alterar Senha</button>
    </form>
</div>
</body>
</html>