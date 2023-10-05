<?php

namespace src\Repository\Usuario;

use src\Entity\Usuario;
USE PDO;
class UsuarioRepository

{
    public function __construct(private PDO $pdo)
    {
    }
    public function CriaUsuario(Usuario $usuario):void
    {
        $sql = 'INSERT INTO n_usuario (nome, data_nascimento, tipo_usuario, user_login, user_senha) VALUES (:nome,:data_nascimento,:tipo_usuario,:user_login,:user_senha)';
        $query = $this->pdo->prepare($sql);
        query->bindValue();
        $resultado = $query->execute();
        $usuario->setId(intval($this->pdo->LastInsertId()));

    }

    public function RemoveUsuario(int $id): void
    {
        $sql = 'DELETE FROM n_usuario WHERE ID_USUARIO = :id';
        $query = $this->pdo->prepare($sql);
        $query->bindValue(':id',$id);
        $query->execute();
        $sql = "commit";
        $query = $this->pdo->query($sql);
        echo "<script>alert('Usuário Removido com sucesso!')</script>";
    }
    public function AtualizaUsuario(Usuario $usuario): void
    {
        $sql = 'UPDATE n_usuario SET id = :id, nome = :nome, data_nascimento = :data_nascimento, tipo_usuario = :tipo_usuario';
        $query = $this->pdo->prepare($sql);
        $query->bindValue(':nome',$usuario->nome);
        $query->bindValue(':data_nascimento',usuario->data_nascimento);
        $query->bindValue(':tipo_usuario',usuario->tipo_usuario);
        $query->bindValue(':user_login',usuario->user_login);
        $query->bindValue(':user_senha',usuario->user_senha);
        $query->execute();
    }


    public function TodosUsuarios():array
    {
        $sql = 'SELECT id_usuario , nome,
       DECODE (tipo_usuario,\'AD\', \'Administrador\',\'CM\',\'Usuário Comum\') as tipo_usuario FROM n_usuario ' ;
        $ListaUsuarios = $this->pdo->query($sql);
        $ListaUsuarios = $ListaUsuarios->fetchAll(PDO::FETCH_ASSOC);
        return $ListaUsuarios;
        /*foreach($ListaUsuarios as $usuario)
        {
            switch ($usuario['TIPO_USUARIO'])
            {
                case 'AD':
                    $usuario['TIPO_USUARIO'] = 'ADMINISTRADOR';
                    break;
                case 'CM':
                    $usuario['TIPO_USUARIO'] = 'COLABORADOR';
                    break;
            }
        }*/
    }
}