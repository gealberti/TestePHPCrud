<?php
class UsuarioModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function registrarUsuario($nomeUsuario, $senha) {
        $senhaHash = password_hash($senha, PASSWORD_BCRYPT);
        $stmt = $this->conn->prepare("INSERT INTO Usuario (NomeUsuario, Senha) VALUES (?, ?)");
        $stmt->bind_param("ss", $nomeUsuario, $senhaHash);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function buscarUsuarioPorNomeUsuario($nomeUsuario) {
        $query = "SELECT * FROM Usuario WHERE NomeUsuario = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("s", $nomeUsuario);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
}
?>
