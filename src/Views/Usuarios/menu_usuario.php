<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF8" >
    <link rel="icon" type="image/x-icon" href="..\imagens\favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nano-G | Menu usuários</title>
	<link rel="stylesheet" type="text/css" href="..\css\menu\header.css">
	<link rel="stylesheet" type="text/css" href="..\css\menu_usuarios\menu_usuarios.css">
	<script type="text/javascript" src="..\js\menu.js"></script>
    <script type="text/javascript" defer src="\..\js\jquery.js"></script>
    <script type="text/javascript" defer src="..\js\desativar_usuario.js"></script>
</head>
<body>
	<?php require __DIR__ . '..\..\..\menu_lateral.php' ?>
	<div id="top">
		<h1 id="top_h1">Usuários</h1>
		<a href="/usuarios/cria_usuario" class="a">
			<button id="top_btn" class="novo_usuario">Novo Usuário</button>
		</a>
	</div>
    <!-- INICIO | DIV DE CADA USUÁRIO -->
    <?php foreach ($usuarioLista as $usuario): ?>
	<div class="tab_usuario">
		<img src="/imagens/imagem_usuario.svg" alt="Foto de perfil" class="perfil" >
		<div class="sub_tab">
			<div class="nome">	
				<p class="nome_usuario"><?= $usuario["NOME"] ?> </p>
				<p class="tipo_usuario">Tipo: <?= $usuario["TIPO_USUARIO"] ?> </p>
			</div>
			<div class="gerenciar">
				<label class="switch">
					<input type="checkbox" data-dado-usuario="<?= $usuario["ID_USUARIO"] ?>" id="switch_flag_<?= $usuario["ID_USUARIO"] ?>" <?php echo ($usuario['FLAG_ATIVO'] == 1) ? "checked" : ""; ?> value="<?= $usuario["ID_USUARIO"] ?>" >
					<span class="slider round"></span>
				</label>
				<a class="a" href="/usuarios/edita_usuario?id=<?= $usuario["ID_USUARIO"] ?>">
					<button class="botao_editar">Editar</button>
				</a>
				<a href="/usuarios/remove_usuario?id=<?= $usuario["ID_USUARIO"] ?>" class="botao_lixeira">
					<img title="Excluir Usuário" src="/imagens/imagem_lixeira.svg" width="50vw" height="50vh" style="transform: scale(0.7)">
				</a>
			</div>
		</div>
		

	</div>
    <?php endforeach ?>
    <!-- FIM | DIV DE CADA USUÁRIO -->
</body>
</html>