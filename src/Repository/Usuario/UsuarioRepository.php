<?php

namespace src\Repository\Usuario;

use src\Entity\Usuario;
USE PDO;
class UsuarioRepository

{
    public function __construct(private PDO $pdo)
    {
    }
    public function CriaUsuario(Usuario $usuario): void 
    {
        $sql = "INSERT INTO n_usuario (id_usuario, nome, dt_nascimento, tipo_usuario, flag_ativo, user_login, senha) 
        VALUES (1, :nome, TO_DATE(:data_nascimento,'YYYY-MM-DD'), :tipo_usuario, 'S', :user_login, :user_senha)";
        //(:nome, :data_nascimento, :tipo_usuario, :user_login, :user_senha)
        
        $query = $this->pdo->prepare($sql);
        
        // Vincule os valores aos parâmetros
        $query->bindValue(':nome', $usuario->nome);
        $query->bindValue(':data_nascimento', $usuario->data_nascimento);
        $query->bindValue(':tipo_usuario', $usuario->tipo_usuario);
        $query->bindValue(':user_login', $usuario->user_login);
        $query->bindValue(':user_senha', $usuario->user_senha);
        $resultado = $query->execute();
    }

    public function RemoveUsuario(int $id): void
    {
        $sql = 'DELETE FROM n_usuario WHERE ID_USUARIO = :id';
        $query = $this->pdo->prepare($sql);
        $query->bindValue(':id',$id);
        $query->execute();
        $sql = "commit";
        $query = $this->pdo->query($sql);
    }

    public function AtualizaUsuario(array $dadosUsuario): void
    {
        $sql = 'UPDATE n_usuario SET nome = :nome, user_login = :user_login, dt_nascimento = TO_DATE(:dt_nascimento), tipo_usuario = :tipo_usuario WHERE id_usuario = :id_usuario';
        $query = $this->pdo->prepare($sql);
        $query->bindValue(':id_usuario',(int) $dadosUsuario['ID_USUARIO']);
        $query->bindValue(':nome',$dadosUsuario['NOME']);
        $query->bindValue(':dt_nascimento',$dadosUsuario['DT_NASCIMENTO']);
        $query->bindValue(':tipo_usuario',$dadosUsuario['TIPO_USUARIO']);
        $query->bindValue(':user_login',$dadosUsuario['USER_LOGIN']);
        $query->execute();
    }


    public function TodosUsuarios():array
    {
        $sql = 'SELECT id_usuario , nome,
       DECODE (tipo_usuario,\'AD\', \'Administrador\',\'CM\',\'Usuário Comum\') as tipo_usuario FROM n_usuario ' ;
        $ListaUsuarios = $this->pdo->query($sql);
        $ListaUsuarios = $ListaUsuarios->fetchAll(PDO::FETCH_ASSOC);
        return $ListaUsuarios;
        
    }
    public function RetornaUsuario(int $idUsuario):array
    {
        $sql = "SELECT id_usuario , nome, dt_nascimento, tipo_usuario, user_login FROM n_usuario WHERE id_usuario = $idUsuario" ;
        $dadosUsuario = $this->pdo->query($sql);
        $dadosUsuario = $dadosUsuario->fetch(PDO::FETCH_ASSOC);
        return $dadosUsuario;        
    }
}