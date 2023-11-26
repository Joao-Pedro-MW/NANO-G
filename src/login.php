<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="/imagens/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Acesso ao Nano-G</title>
    <meta name="description" content="Pagina de login para o sistema NANO-G">
    <meta name="author" content="JAV" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="css\login\login_style.css">
    <link rel="stylesheet" href="css\cores.css">
    <script defer src="libs\particulas\particles.js"></script>
    <script defer src="js\login_particulas.js"></script>
</head>
<body>
<!-- fundo de particulas -->
<div id="particles-js">
    <div id="painel_login">
        <form method="post" id="form_login">

            <img src="\imagens\logo_png.png" id="logo" alt="Logo">
            <h2>Nano-G</h2>
            <?php
            if(array_key_exists('usuario_desativado',$_GET)){
                echo "<p class='aviso'>Seu usuário foi desativado</p>";
            };?>
            <?php
            if(array_key_exists('erro',$_GET)){
                echo "<p class='aviso'>Login ou senha incorreto</p>";
            };?>
            <label for="usuario">Usuário:</label>
            <input id="usuario" type="email" name="usuario" required>

            <label for="senha">Senha:</label>
            <input id="senha" type="password" name="senha_usuario" required>
            <input type="submit" form="form_login" value="Entrar" id="bt_login">
        </form>
    </div>
</div>
</body>
</html>