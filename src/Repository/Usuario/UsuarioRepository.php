<?php

namespace src\Repository\Usuario;

use mysql_xdevapi\Exception;
use src\Entity\Usuario;
USE PDO;
class UsuarioRepository

{
    public function __construct(private readonly PDO $pdo)
    {
    }
    public function CriaUsuario(Usuario $usuario): void 
    {
        $sql = "INSERT INTO n_usuario (id_usuario, nome, dt_nascimento, tipo_usuario, flag_ativo, cpf, email, senha) 
        VALUES (s_user_id.nextval, :nome, TO_DATE(:data_nascimento,'YYYY-MM-DD'), :tipo_usuario, 'S',:cpf, :email, :user_senha)";
        //(:nome, :data_nascimento, :tipo_usuario, :user_login, :user_senha)
        
        $query = $this->pdo->prepare($sql);
        // Vincule os valores aos parâmetros
        $query->bindValue(':nome', $usuario->nome);
        $query->bindValue(':data_nascimento', $usuario->data_nascimento);
        $query->bindValue(':tipo_usuario', $usuario->tipo_usuario);
        $query->bindValue(':email', $usuario->email);
        $query->bindValue(':cpf', $usuario->cpf);
        $query->bindValue(':user_senha', $usuario->user_senha);
        $resultado = $query->execute();
    }

    public function RemoveUsuario(int $id): void
    {
        $sql = 'DELETE FROM n_usuario WHERE ID_USUARIO = :id';
        $query = $this->pdo->prepare($sql);
        $query->bindValue(':id',$id);
        $query->execute();
    }

    public function AtualizaUsuario(array $dadosUsuario): void
    {
        $sql = "UPDATE n_usuario SET nome = :nome, cpf = :cpf, email = :email, dt_nascimento = TO_DATE(:dt_nascimento,'YYYY-MM-DD'), 
                      tipo_usuario = :tipo_usuario WHERE id_usuario = :id_usuario";
        $query = $this->pdo->prepare($sql);
        $query->bindValue(':id_usuario',(int) $dadosUsuario['ID_USUARIO']);
        $query->bindValue(':nome',$dadosUsuario['NOME']);
        $query->bindValue(':cpf',$dadosUsuario['CPF']);
        $query->bindValue(':email',$dadosUsuario['EMAIL']);
        $query->bindValue(':dt_nascimento',$dadosUsuario['DT_NASCIMENTO']);
        $query->bindValue(':tipo_usuario',$dadosUsuario['TIPO_USUARIO']);
        $query->execute();
    }


    public function TodosUsuarios():array
    {
        $sql = 'SELECT id_usuario , nome,
        DECODE (tipo_usuario,\'AD\', \'Administrador\',\'CM\',\'Usuário Comum\') as tipo_usuario FROM n_usuario ' ;
        $ListaUsuarios = $this->pdo->query($sql);
        return $ListaUsuarios->fetchAll(PDO::FETCH_ASSOC);
        
    }

    public function RetornaUsuario(int $idUsuario):array
    {
        $sql = "SELECT id_usuario , nome, cpf, dt_nascimento, tipo_usuario, email FROM n_usuario WHERE id_usuario = $idUsuario" ;
        $dadosUsuario = $this->pdo->query($sql);
        return $dadosUsuario->fetch(PDO::FETCH_ASSOC);
    }

    public function RetornaDadosLogin(string $emailusuario):array
    {
        $sql = "SELECT nome, cpf, senha, email FROM N_USUARIO where EMAIL = :email";
        $query = $this->pdo->prepare($sql);
        $query->bindValue(':email',$emailusuario);
        var_dump($sql);
        $query->execute();

        return $query->fetch(PDO::FETCH_ASSOC);
    }
}