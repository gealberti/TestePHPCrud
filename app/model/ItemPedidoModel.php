<?php
class ItemPedidoModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function listarItensPedido() {
        $query = "SELECT * FROM ItemPedido";
        $result = $this->conn->query($query);
        $itensPedido = $result->fetch_all(MYSQLI_ASSOC);
        return $itensPedido;
    }

    public function adicionarItemPedido($idPedido, $idProduto, $quantidade, $precoUnitario) {
        $stmt = $this->conn->prepare("INSERT INTO ItemPedido (IDPedido, IDProduto, Quantidade, PrecoUnitario) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("dddd", $idPedido, $idProduto, $quantidade, $precoUnitario);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function buscarItemPedidoPorID($id) {
        $query = "SELECT * FROM ItemPedido WHERE ID = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function atualizarItemPedido($id, $idPedido, $idProduto, $quantidade, $precoUnitario) {
        $stmt = $this->conn->prepare("UPDATE ItemPedido SET IDPedido = ?, IDProduto = ?, Quantidade = ?, PrecoUnitario = ? WHERE ID = ?");
        $stmt->bind_param("iiidi", $idPedido, $idProduto, $quantidade, $precoUnitario, $id);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function removerItemPedido($id) {
        $stmt = $this->conn->prepare("DELETE FROM ItemPedido WHERE ID = ?");
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>
