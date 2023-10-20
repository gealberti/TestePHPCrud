<?php
require 'model/UsuarioModel.php';

class UsuarioController {
    private $model;

    public function __construct($db) {
        $this->model = new UsuarioModel($db);
    }

    public function registrarUsuario($nomeUsuario, $senha) {
        $senhaHash = password_hash($senha, PASSWORD_BCRYPT);
        $this->model->registrarUsuario($nomeUsuario, $senhaHash);
        header('Location: login.php');
    }

    public function autenticarUsuario($nomeUsuario, $senha) {
        $usuario = $this->model->buscarUsuarioPorNomeUsuario($nomeUsuario);
        if ($usuario && password_verify($senha, $usuario['Senha'])) {
            session_start();
            $_SESSION['usuario_id'] = $usuario['ID'];
            header('Location: main.php');
        } else {
            header('Location: login.php');
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: login.php');
    }
}
?>
