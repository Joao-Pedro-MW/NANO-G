<?php

namespace src\Repository\Usuario;
use PDOException;
use src\Entity\Usuario;
USE PDO;
class UsuarioRepository
{
    public function __construct(private readonly PDO $pdo)
    {
    }

    public function TodosUsuarios():array
    {
        $sql = 'SELECT id_usuario , nome,flag_ativo,
        DECODE (tipo_usuario,\'AD\', \'Administrador\',\'CM\',\'Usuário Comum\') as tipo_usuario FROM n_usuario ' ;
        $ListaUsuarios = $this->pdo->query($sql);
        return $ListaUsuarios->fetchAll(PDO::FETCH_ASSOC);
        
    }

    public function RetornaUsuario(int $idUsuario)
    {
        try {
            $sql = "SELECT id_usuario , nome, cpf, dt_nascimento, tipo_usuario, email FROM n_usuario WHERE id_usuario = $idUsuario";
            $dadosUsuario = $this->pdo->query($sql);
        } catch (PDOException $e){
            return "error";
        }
        return $dadosUsuario->fetch(PDO::FETCH_ASSOC);

    }

    public function RetornaDadosLogin(string $emailusuario):array
    {
        $sql = "SELECT * FROM N_USUARIO where EMAIL = :email";
        $query = $this->pdo->prepare($sql);
        $query->bindValue(':email',$emailusuario);
        $query->execute();
        $dadosDBLogin = $query->fetch(PDO::FETCH_ASSOC);
        if(!$dadosDBLogin){
            return [];
        } else {
            return $dadosDBLogin;
        }
    }
    public function RetornaSenha(int $idUsuario):string
    {
        $sql = "SELECT senha FROM N_USUARIO where ID_USUARIO = :idUsuario";
        $query = $this->pdo->prepare($sql);
        $query->bindValue(':idUsuario',$idUsuario);
        $query->execute();
        return implode($query->fetch(PDO::FETCH_ASSOC));

    }
    public function CriaUsuario(Usuario $usuario):bool
    {
        $sql = "INSERT INTO N_USUARIO (id_usuario, nome, dt_nascimento, tipo_usuario, flag_ativo, login, cpf, email, senha) 
                VALUES (s_user_id.nextval, :nome, TO_DATE(:data_nascimento, 'YYYY-MM-DD'), :tipo_usuario, '1', '0', :cpf, :email, :user_senha)";
        $query = $this->pdo->prepare($sql);
        $query->bindValue(':nome', $usuario->nome);
        $query->bindValue(':data_nascimento', $usuario->data_nascimento);
        $query->bindValue(':tipo_usuario', $usuario->tipo_usuario);
        $query->bindValue(':email', $usuario->email);
        $query->bindValue(':cpf', $usuario->cpf);
        $query->bindValue(':user_senha', $usuario->user_senha);
        return $query->execute();
    }

    public function RemoveUsuario(int $id): void
    {
        $sql = 'DELETE FROM n_usuario WHERE ID_USUARIO = :id';
        $query = $this->pdo->prepare($sql);
        $query->bindValue(':id',$id);
        $query->execute();
    }

    public function AtualizaUsuario(array $dadosUsuario)
    {

        try {
            $sql = "UPDATE n_usuario SET nome = :nome, cpf = :cpf, email = :email, dt_nascimento = TO_DATE(:dt_nascimento,'YYYY-MM-DD'), 
                      tipo_usuario = :tipo_usuario WHERE id_usuario = :id_usuario";
            $query = $this->pdo->prepare($sql);
            $query->bindValue(':id_usuario', (int)$dadosUsuario['ID_USUARIO']);
            $query->bindValue(':nome', $dadosUsuario['NOME']);
            $query->bindValue(':cpf', $dadosUsuario['CPF']);
            $query->bindValue(':email', $dadosUsuario['EMAIL']);
            $query->bindValue(':dt_nascimento', $dadosUsuario['DT_NASCIMENTO']);
            $query->bindValue(':tipo_usuario', $dadosUsuario['TIPO_USUARIO']);
            $query->execute();
            return $query->fetchColumn();
        } catch (PDOException $e){
            return $e;
        }
    }


    public function AtualizaSenha(int $idUsuario,string $novaSenha):void
    {
        $sql = "UPDATE N_USUARIO SET SENHA = :novaSenha WHERE ID_USUARIO = :idUsuario";
        $query = $this->pdo->prepare($sql);
        $query->bindValue(':novaSenha',$novaSenha);
        $query->bindValue(':idUsuario',$idUsuario);
        $query->execute();
    }

    public function DesativaUsuario(int $idUsuario)
    {
        $sql = "UPDATE N_USUARIO SET FLAG_ATIVO = 0 WHERE ID_USUARIO = :idUsuario";
        $query = $this->pdo->prepare($sql);
        $query->bindValue(':idUsuario',$idUsuario);
        $query->execute();
    }
    public function AtivaUsuario(int $idUsuario)
    {
        $sql = "UPDATE N_USUARIO SET FLAG_ATIVO = 1 WHERE ID_USUARIO = :idUsuario";
        $query = $this->pdo->prepare($sql);
        $query->bindValue(':idUsuario',$idUsuario);
        $query->execute();
    }
    public function AtivaLogin(int $idUsuario):void
    {
        $sql = "UPDATE N_USUARIO SET LOGIN = 1  WHERE ID_USUARIO = :idUsuario";
        $query = $this->pdo->prepare($sql);
        $query->bindValue(':idUsuario',$idUsuario);
        $query->execute();
    }


}