<?php

namespace src\Repository;

use src\Entity\Usuario;
USE PDO;
class UsuarioRepo
{
    public function __construct(private PDO $pdo)
    {
    }

    public function CriaUsuario(Usuario $usuario):void
    {
        $sql = 'INSERT INTO n_usuario VALUES ()';
        $query = $this->pdo->prepare($sql);
        $query->execute();
        $usuario->intval($this->pdo->LastInsertId());

    }

    public function RemoveUsuario(int $id): void
    {
        $sql = 'DELETE FROM videos WHERE id = ?';
        $query = $this->pdo->prepare($sql);
        $query->bindValue(1,$id);
        $query->execute();
    }

    public function TodosUsuarios()
    {
        $ListaUsuarios = $this->pdo->query('SELECT * FROM n_usuarios;')->fetchAll(PDO::FETCH_ASSOC);
        return array_map(
            function (array $DadosUsuarios){
                $usuario  = new Usuario(...$DadosUsuarios);
                return $usuario;
                }
            ,
            $ListaUsuarios);


    }
}