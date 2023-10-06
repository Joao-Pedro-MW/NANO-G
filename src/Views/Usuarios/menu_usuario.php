<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF8" >
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menu usuários</title>
	<link rel="stylesheet" type="text/css" href="..\css\menu\header.css">
	<link rel="stylesheet" type="text/css" href="..\css\menu_usuarios\menu_usuarios.css">
	<script type="text/javascript" src="..\js\menu.js"></script>
</head>

<body>
	<?php require __DIR__ . '..\..\..\menu_lateral.php' ?>
	<div id="top">
		<h1 id="top_h1">Usuários</h1>
		<button id="top_btn"class="novo_usuario">Novo Usuário</button>
	</div>
    <!-- INICIO | DIV DE CADA USUÁRIO -->
    <?php foreach ($usuarioLista as $usuario): ?>
	<div class="tab_usuario">
		<img src="/imagens/imagem_usuario.svg" alt="Foto de perfil" class="perfil" >

		<div class="nome">	
			<p class="nome">Nome: <?= $usuario["NOME"] ?> </p>
            <p class="nome">Tipo: <?= $usuario["TIPO_USUARIO"] ?> </p>
		</div>

		<label for="switch" id="label_switch">Ativado</label>
		<label id="switch" class="switch">
			<input type="checkbox">
			<span class="slider round"></span>
		</label>

		<a style="float:right;" class="botao_editar" href="/usuarios/editar_usuario?id=<?= $usuario["ID_USUARIO"] ?>"> Editar </a>
		<a style="float:right;" class="botao_lixeira" href="/usuarios/remove_usuario?id=<?= $usuario["ID_USUARIO"] ?>"><img src="/imagens/imagem_lixeira.svg" width="50vw" height="50vh" style="transform: scale(0.7)"></a>
	</div>
    <?php endforeach ?>
    <!-- FIM | DIV DE CADA USUÁRIO -->>
</body>
</html>