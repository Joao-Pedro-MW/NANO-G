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

<body>
	<?php require __DIR__ . '..\..\..\menu_lateral.php' ?>
	<h1 style="margin-left:10vw; height: 7vh;margin-right: 60vw;">Criar Usuário</h1>
	<div class="div_horizontal" id="main_div">
		<img src="../imagens/imagem_usuario.svg" class="perfil">
		<form id="form_cria_usuario" method="POST">
			<div class="div_vertical" id="div_dados">
				<div class="div_horizontal">
					<div class="div_vertical">
						<label for="nome">Nome</label>
						<input type="text" id="nome"  name="nome">
						<label for="cpf">CPF</label>
						<input type="text" id="cpf" name="cpf" maxlength="14">
					</div>
					<div class="div_vertical">
						<label for="email" id="label_direita">Email</label>
						<input type="email" id="email"  name="email">
						<label for="data_nascimento" id="label_direita">Data de Nascimento</label>
						<input type="date" id="data_nascimento" max="2013-12-31" name="data_nascimento">
					</div>
				</div>
				<div class="div_horizontal" id="low_div">
					<div id="lower_div">
						<p id="p">Tipo de Permissão</p>
						<div id="lowest_div">
							<label for="admin" style="margin-left: 0.5vw">Administrador</label>
							<input type="radio" name="tipo_usuario" value="AD" id="admin">
						</div>
						<div id="lowest_div">
							<label for="user" style="margin-left: 0.5vw">Usuário</label>
							<input type="radio" name="tipo_usuario" value="CM" id="user">	
						</div>
					</div>
					<button form="form_cria_usuario" class="botao_salvar">Salvar</button>
				</div>		
			</div>
        </form>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
	<script>
		$('#cpf').mask('000.000.000-00', { reverse: true });
	</script>
</body>
</html>