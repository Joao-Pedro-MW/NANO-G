<?php $imagens_url = '..' . DIRECTORY_SEPARATOR . 'imagens' . DIRECTORY_SEPARATOR ?>

<div class="titulo_sistema">
    <div id="mySidenav" class="sidenav">
        <!-- primeiro botão para FECHAR o menu -->
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
          <div class="menu-botao-claro">
            <img id="botao_menu_branco" src="<?php echo $imagens_url . "botao_menu_branco.svg"?> ">
            <p>Fechar</p>
          </div>
        </a>
        
        <div class="menu_container">
            <div class="menu_classe">
                <h1>Logs</h1>
                <a href="\logs\logs.php">Consulta de Logs</a>
                
            </div>
            <div class="menu_classe">
                <h1>Produtos</h1>
                <a href="\produtos\cadastro_lote.php">Cadastro de lote</a>
                <a href="\produtos\menu_produtos.php">Menu produtos</a>
                
            </div>
            <div class="menu_classe">
                <h1>Saída</h1>
                <a href="\remocao\remocao_item.php">Saída de estoque</a>
            </div>
            <div class="menu_classe">
                <h1>Usuarios</h1>
                <a href="\usuarios\cadastro_usuario.php">Cadastro de usuários</a>
                <a href="\usuarios\atualiza_usuario.php">Configurar usuários</a>
                <a href="\usuarios\menu_usuario.php">Menu usuarios</a>
            </div>

        </div>
        
    </div>
    <!-- primeiro botão para ABRIR o menu -->
    <span class="menu-botao-escuro" onclick="openNav()">
        <!-- <img id="botao_menu" src="<?php echo __DIR__ . 'imagens' . DIRECTORY_SEPARATOR . 'botao_menu.svg'?>" -->
        <img id="botao_menu" src="<?php echo $imagens_url . 'botao_menu.svg'?>">
    <p>Menu</p></span>
    <h2>NANO-G</h2>
        <div id="usuario" class="usuario">
            <p>Usuário</p>
            <img src="<?php echo $imagens_url . 'imagem_usuario.svg'?>" alt="imagem do usuario">
        </div>
</div>