<?php
class ClienteModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function listarClientes() {
        $query = "SELECT * FROM Cliente";
        $result = $this->conn->query($query);
        $clientes = $result->fetch_all(MYSQLI_ASSOC);
        return $clientes;
    }

    public function adicionarCliente($nome, $email, $endereco, $telefone) {
        $stmt = $this->conn->prepare("INSERT INTO Cliente (Nome, Email, Endereco, Telefone) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nome, $email, $endereco, $telefone);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function buscarClientePorID($id) {
        $query = "SELECT * FROM Cliente WHERE ID = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function atualizarCliente($id, $nome, $email, $endereco, $telefone) {
        $stmt = $this->conn->prepare("UPDATE Cliente SET Nome = ?, Email = ?, Endereco = ?, Telefone = ? WHERE ID = ?");
        $stmt->bind_param("ssssi", $nome, $email, $endereco, $telefone, $id);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function removerCliente($id) {
        $stmt = $this->conn->prepare("DELETE FROM Cliente WHERE ID = ?");
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>
