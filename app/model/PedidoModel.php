<?php
class PedidoModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function listarPedidos() {
        $query = "SELECT * FROM Pedido";
        $result = $this->conn->query($query);
        $pedidos = $result->fetch_all(MYSQLI_ASSOC);
        return $pedidos;
    }

    public function adicionarPedido($dataPedido, $idCliente, $total) {
        $stmt = $this->conn->prepare("INSERT INTO Pedido (DataPedido, IDCliente, Total) VALUES (?, ?, ?)");
        $stmt->bind_param("sdd", $dataPedido, $idCliente, $total);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function buscarPedidoPorID($id) {
        $query = "SELECT * FROM Pedido WHERE ID = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function atualizarPedido($id, $dataPedido, $idCliente, $total) {
        $stmt = $this->conn->prepare("UPDATE Pedido SET DataPedido = ?, IDCliente = ?, Total = ? WHERE ID = ?");
        $stmt->bind_param("sdi", $dataPedido, $idCliente, $total, $id);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function removerPedido($id) {
        $stmt = $this->conn->prepare("DELETE FROM Pedido WHERE ID = ?");
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>
