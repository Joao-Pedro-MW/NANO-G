<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="..\imagens\favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nano-G | Criar Usuário</title>
    <link rel="stylesheet" type="text/css" href="..\css\menu\header.css">
    <link rel="stylesheet" type="text/css" href="..\css\cria_usuario\cria_usuario.css">
    <script type="text/javascript" src="..\js\menu.js"></script>
</head>
<script>
    function mudaTipo(){
        document.getElementById('data_nascimento').type = 'date';
    }
</script>
<body>
    <?php require __DIR__ . '..\..\..\menu_lateral.php' ?>
    <h1 style="margin-left:10vw; height: 7vh;margin-right: 60vw;">Editar Usuário</h1>
    <div class="div_horizontal" id="main_div">
        <img src="../imagens/imagem_usuario.svg" class="perfil">
        <form id="form_edita_usuario" method="POST">
            <div class="div_vertical" id="div_dados">
                <div class="div_horizontal">
                    <div class="div_vertical">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" value="<?=$dadosUsuario['NOME']?>" required>
                        <label for="cpf">CPF</label>
                        <input type="number" id="cpf" name="cpf" value="<?=$dadosUsuario['CPF']?>" required>
                    </div>
                    <div class="div_vertical">
                        <label for="email" id="label_direita">Email</label>
                        <input type="email" id="email" name="email" value="<?=$dadosUsuario['EMAIL']?>" required>
                        <label for="data_nascimento" id="label_direita">Data de Nascimento</label>
                        <input type="text" id="data_nascimento" max="2013-12-31" name="data_nascimento" onclick="mudaTipo()"  value="<?=$dadosUsuario['DT_NASCIMENTO']?>" required>
                    </div>
                </div>
                <div class="div_horizontal" id="low_div">
                    <div id="lower_div">
                        <p id="p">Tipo de Permissão</p>
                        <div id="lowest_div">
                            <label for="admin" style="margin-left: 0.5vw">Administrador</label>
                            <input <?php echo ($dadosUsuario['TIPO_USUARIO'] == 'AD') ? 'checked' : '' ?> type="radio" name="tipo_usuario" value="AD" id="admin">
                        </div>
                        <div id="lowest_div">
                            <label for="user" style="margin-left: 0.5vw">Usuário</label>
                            <input <?php echo ($dadosUsuario['TIPO_USUARIO'] == 'CM') ? 'checked' : '' ?> type="radio" name="tipo_usuario" value="CM" id="user">
                        </div>
                    </div>
                    <button form="form_edita_usuario" class="botao_salvar">Salvar</button>
                </div>
            </div>
        </form>
    </div>

</body>
</html>