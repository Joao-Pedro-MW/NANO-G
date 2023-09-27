<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Criar Usuário</title>
	<link rel="stylesheet" type="text/css" href="..\css\menu\header.css">
	<link rel="stylesheet" type="text/css" href="..\css\cria_usuario\cria_usuario.css">
	<script type="text/javascript" src="..\js\menu.js"></script>
</head>

<body>
	<?php require __DIR__ . '..\..\..\menu_lateral.php' ?>
	<h1 style="margin-left:10vw; height: 7vh;margin-right: 60vw;">Criar Usuário</h1>

	<div class="div_horizontal" id="main_div">
		<img src="" class="perfil">

		<div class="div_vertical" id="div_dados">
			<div class="div_horizontal">
				<div class="div_vertical">

					<label for="nome">Nome</label>
					<input type="text" id="nome">

					<label for="cpf">CPF</label>
					<input type="number" id="cpf">

				</div>
				<div class="div_vertical">

					<label for="email" id="label_direita">Email</label>
					<input type="email" id="email">

					<label for="data_nascimento" id="label_direita">Data de Nascimento</label>
					<input type="date" id="data_nascimento">

				</div>
			</div>
			<div class="div_horizontal" id="low_div">
				<!--<div" id="lower_div">
					
					<p>Tipo de Permissão</p>

					<label for="admin">Administrador</label>
					<input type="checkbox" id="admin">

					<label for="user">Usuário</label>
					<input type="checkbox" id="user">
					
				</div> -->
				<button class="botao_salvar">Salvar</button>
			</div>
			
		</div>
	</div>

</body>
</html>