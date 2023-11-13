<?php
declare(strict_types=1);
require_once __DIR__ . '/../vendor/autoload.php';
use src\Repository\Usuario\UsuarioRepository;
use src\Repository\Itens\ItensRepository;
use src\Controller\ {
  Controller,
  NovoUsuarioController,
  EditaUsuarioController,
  RemoveUsuarioController,
  ListarUsuarioController, Erro404Controller
};
ini_set('display_errors', 0);
ini_set('log_errors', 1);
$rotas = require_once __DIR__ .  '\..\config\rotas.php';
session_set_cookie_params(3600,'/','localhost',true,true);
$pdo = new PDO('oci:dbname=//localhost:1521/XEPDB1', 'system', '12345');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$rotaSolicitada = $_SERVER['PATH_INFO'] ?? "/";
$meioHTTP = $_SERVER['REQUEST_METHOD'];
$rotaLogin = $rotaSolicitada === "/";

session_start();
if(!array_key_exists('AUTENTICADO',$_SESSION) && !$rotaLogin){
    header('Location: /');
    return;
}

$chave = "$meioHTTP|$rotaSolicitada";
$repositorioNecessario = ucfirst(explode('/',$rotaSolicitada)[1]) . 'Repository';

switch ($repositorioNecessario){

    case 'ItensRepository':
        $repositorioNecessario = new ItensRepository($pdo);
        break;
    case 'UsuariosRepository' OR 'Repository':
        $repositorioNecessario = new UsuarioRepository($pdo);
        break;
}
if(array_key_exists($chave,$rotas)) {
    $classeControlador = $rotas["$meioHTTP|$rotaSolicitada"];
    $controlador = new $classeControlador($repositorioNecessario);
} else {
    $controlador = new Erro404Controller();
}
$controlador->processaRequisicao();