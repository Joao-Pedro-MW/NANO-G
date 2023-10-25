<?php
declare(strict_types=1);
require_once __DIR__ . '/../vendor/autoload.php';
use src\Repository\Usuario\UsuarioRepository;
use src\Repository\Produtos\ProdutosRepository;
use src\Controller\ {
  Controller,
  NovoUsuarioController,
  EditaUsuarioController,
  RemoveUsuarioController,
  ListarUsuarioController
};

$pdo = new PDO('oci:dbname=//localhost:1521/XEPDB1', 'system', '12345');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$rotas = require_once __DIR__ .  '\..\config\rotas.php';

//$usuarioRepository = new UsuarioRepository($pdo);

$rotaSolicitada = $_SERVER['PATH_INFO'] ?? "/";
$meioHTTP = $_SERVER['REQUEST_METHOD'];
$chave = "$meioHTTP|$rotaSolicitada";


$repositorioNecessario = ucfirst(explode('/',$rotaSolicitada)[1]) . 'Repository';

switch ($repositorioNecessario){
    case 'ProdutosRepository':
        $repositorioNecessario = new ProdutosRepository($pdo);
        break;
    case 'UsuariosRepository':
        $repositorioNecessario = new UsuarioRepository($pdo);
        break;
}

if(array_key_exists($chave,$rotas)) {
    $classeControlador = $rotas["$meioHTTP|$rotaSolicitada"];
    $controlador = new $classeControlador($repositorioNecessario);
} else {
    $controlador = new \src\Controller\Erro404Controller();
}

$controlador->processaRequisicao();