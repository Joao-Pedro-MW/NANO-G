<?php $imagens_url = '..' . DIRECTORY_SEPARATOR . 'imagens' . DIRECTORY_SEPARATOR ?>

<div class="titulo_sistema">
    <div id="menu_lateral" class="menu_lateral">
        <!-- primeiro botão para FECHAR o menu -->
        <a class="closebtn" onclick="closeNav()">
            <div class="menu-botao-claro" onclick="closeNav()">
                <img id="botao_menu_branco" onclick="closeNav()" src="<?php echo $imagens_url . "botao_menu_branco.svg"?> " alt="Caixa">
                <p>Fechar</p>
            </div>
        </a>
        <div class="menu_container">
            <div class="menu_classe">
                <h1 class="classe_titulo">Logs</h1>
                <a href="\logs">Consulta de Logs</a>
                
            </div>
            <div class="menu_classe">
                <h1 class="classe_titulo">Estoque</h1>
                <a href="\itens">Menu Itens</a>
                <a href="\itens\cadastro_item">Cadastro de itens</a>
                <a href="\itens\cadastro_lote">Cadastro de lote</a>

            </div>
            <div class="menu_classe">
                <h1 class="classe_titulo">Saída</h1>
                <a href="\itens\remocao">Saída de estoque</a>
                <a href="\itens\excluir_lote">Excluir Lote</a>
            </div>
            <div class="menu_classe">
                <h1 class="classe_titulo">Usuarios</h1>
                <a href="\usuarios">Menu usuarios</a>
                <a href="\usuarios\cria_usuario">Cadastro de usuários</a>
            </div>

        </div>
    </div>
    <!-- primeiro botão para ABRIR o menu -->
    <div>
        <a class="closebtn" onclick="openNav()">
            <div id="botao_div" ">
                <img id="botao_menu" src="<?php echo $imagens_url . 'botao_menu.svg'?>">
                <p>Menu</p>
            </div>
    </div>
    <h2>NANO-G</h2>
    <div id="logout">
        <div id="usuario" class="usuario" >
            <p><?= $_SESSION['USUARIO']?></p>
            <img src="<?php echo $imagens_url . 'imagem_usuario.svg'?>" alt="imagem do usuario">
        </div>
        <div id="sair">
            <a href="">
                <button class="button">Sair</button>
            </a>
        </div>
    </div>
</div>