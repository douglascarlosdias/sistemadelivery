<?php
require_once __DIR__ . '/../database/conexao.php';


class ProdutoDAO
{
    private $dbh;

    public function __construct()
    {
        $this->dbh = Conexao::getConexao();
    }

    public function getAll()
    {
        $query = "SELECT produtos.id, produtos.nome, produtos.descricao, produtos.imagem, produtos.valor, 
                    produtos.categoria as categoriaId, categorias.nome as categoria
                    FROM produtos
                    INNER JOIN categorias ON categorias.id = produtos.categoria;
        ";

        $stmt = $this->dbh->query($query);
        $rows = $stmt->fetchAll();
        $this->dbh = null;

        return $rows;
    }

    public function getById(int $id)
    {
        $query = "SELECT produtos.id, produtos.nome, produtos.descricao, produtos.imagem produtos.valor, 
                    produtos.categoria as categoriaId, categorias.nome as categoria
                    FROM produtos
                    INNER JOIN categorias ON categorias.id = produtos.categoria
                    WHERE produtos.id = :id;";

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
            $query = "DELETE FROM produtos WHERE id = :id;";

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

    public function save(Produto $produto): int
    {
        try {
            $query = "INSERT INTO produtos (nome, descricao, valor, categoria, imagem) 
                VALUES (:nome, :descricao, :valor, :categoria, :imagem);";

            $stmt = $this->dbh->prepare($query);
            $stmt->bindValue(':nome', $categoria->getNome());
            $stmt->bindValue(':descricao', $categoria->getDescricao());
            $stmt->bindValue(':valor', $categoria->getValor());
            $stmt->bindValue(':categoria', $categoria->getCategoria());
            $stmt->bindValue(':imagem', $categoria->getImagem());
            
            $result = (int) $stmt->execute();
            $this->dbh = null;
            return $result;
        } catch (\PDOException $e) {
            return 0;
        }
    }

    public function update(Produto $produto): int
    {
        try {
            $query = "UPDATE produtos SET 
                nome = :nome,
                descricao = :descricao,
                valor = :valor,
                categoria = :categoria
                WHERE id = :id;";

            $stmt = $this->dbh->prepare($query);
            $stmt->bindValue(':nome', $categoria->getNome());
            $stmt->bindValue(':descricao', $categoria->getDescricao());
            $stmt->bindValue(':valor', $categoria->getValor());
            $stmt->bindValue(':categoria', $categoria->getCategoria());
            $stmt->bindValue(':id', $categoria->getId());

            $result = $stmt->execute();
            $this->dbh = null;

            return $result;
        } catch (\PDOException $e) {
            return 0;
        }
    }
}
