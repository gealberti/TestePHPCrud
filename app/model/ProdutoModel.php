<?php
class ProdutoModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function listarProdutos() {
        $query = "SELECT * FROM Produto";
        $result = $this->conn->query($query);
        $produtos = $result->fetch_all(MYSQLI_ASSOC);
        return $produtos;
    }

    public function adicionarProduto($nome, $descricao, $preco, $categoria) {
        $stmt = $this->conn->prepare("INSERT INTO Produto (Nome, Descricao, Preco, Categoria) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssds", $nome, $descricao, $preco, $categoria);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function buscarProdutoPorID($id) {
        $query = "SELECT * FROM Produto WHERE ID = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function atualizarProduto($id, $nome, $descricao, $preco, $categoria) {
        $stmt = $this->conn->prepare("UPDATE Produto SET Nome = ?, Descricao = ?, Preco = ?, Categoria = ? WHERE ID = ?");
        $stmt->bind_param("ssdsi", $nome, $descricao, $preco, $categoria, $id);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function removerProduto($id) {
        $stmt = $this->conn->prepare("DELETE FROM Produto WHERE ID = ?");
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>
