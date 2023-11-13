<?php
require_once __DIR__ . '/../database/conexao.php';


class CategoriaDAO
{
    private $dbh;

    public function __construct()
    {
        $this->dbh = Conexao::getConexao();
    }

    public function getAll()
    {
        $query = "SELECT * FROM categorias;";

        $stmt = $this->dbh->query($query);
        $rows = $stmt->fetchAll();
        $this->dbh = null;

        return $rows;
    }

    public function getById(int $id)
    {
        $query = "SELECT * FROM categorias WHERE id = :id;";

        $stmt = $this->dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_BOTH);
        $this->dbh = null;

        return $row;
    }

    public function delete(int $id): int
    {
        try {
            $query = "DELETE FROM categorias WHERE id = :id;";

            $stmt = $this->dbh->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $result = (int) $stmt->rowCount();
            $this->dbh = null;

            return $result;
        } catch (\PDOException $e) {
            return 0;
        }
    }

    public function save(Categoria $categoria): int
    {
        try {
            $query = "INSERT INTO categorias (nome, descricao, nome_url) 
                VALUES (:nome, :descricao, :nome_url);";

            $stmt = $this->dbh->prepare($query);
            $stmt->bindValue(':nome', $categoria->getNome());
            $stmt->bindValue(':descricao', $categoria->getDescricao());
            $stmt->bindValue(':nome_url', $categoria->getNomeUrl());

            $result = (int) $stmt->execute();
            $this->dbh = null;
            return $result;
        } catch (\PDOException $e) {
            return 0;
        }
    }

    public function update(Categoria $categoria): int
    {
        try {
            $query = "UPDATE categorias SET 
                nome = :nome,
                descricao = :descricao,
                nome_url = :nome_url
                WHERE id = :id;";

            $stmt = $this->dbh->prepare($query);
            $stmt->bindValue(':nome', $categoria->getNome());
            $stmt->bindValue(':descricao', $categoria->getDescricao());
            $stmt->bindValue(':nome_url', $categoria->getNomeUrl());
            $stmt->bindValue(':id', $categoria->getId());

            $result = $stmt->execute();
            $this->dbh = null;

            return $result;
        } catch (\PDOException $e) {
            return 0;
        }
    }
}
