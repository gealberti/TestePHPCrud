<?php
require __DIR__ . '/../model/ClienteModel.php';
require __DIR__ . '/../config.php';

class ClienteController {
    private $model;

    public function __construct($db) {
        $this->model = new ClienteModel($db);
    }

    public function listarClientes() {
        $clientes = $this->model->listarClientes();
        require 'listar_clientes.php';
    }

    public function adicionarCliente() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $endereco = $_POST['endereco'];
            $telefone = $_POST['telefone'];
            
            $errors = array();

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "O email inserido não é válido.";
            }
            if (!preg_match("/^\d{10}$/", $telefone)) {
                $errors[] = "O telefone deve conter 10 dígitos numéricos.";
            }

            if (empty($errors)) {
                if ($this->model->adicionarCliente($nome, $email, $endereco, $telefone)) {
                    header('Location: listar_clientes.php');
                } else {
                    $errors[] = "Erro ao adicionar o cliente. Tente novamente.";
                }
            }
        }

        require 'formulario_cliente.php';
    }

    public function visualizarCliente($id) {
        $cliente = $this->model->buscarClientePorID($id);
        require 'visualizar_cliente.php'; 
    }

    public function editarCliente($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $endereco = $_POST['endereco'];
            $telefone = $_POST['telefone'];

            $errors = array();

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "O email inserido não é válido.";
            }
            if (!preg_match("/^\d{10}$/", $telefone)) {
                $errors[] = "O telefone deve conter 10 dígitos numéricos.";
            }

            if (empty($errors) && $this->model->atualizarCliente($id, $nome, $email, $endereco, $telefone)) {
                header('Location: visualizar_cliente.php?id=' . $id);
            }
        } else {
            $cliente = $this->model->buscarClientePorID($id);
            require 'editar_cliente.php'; 
        }
    }

    public function removerCliente($id) {
        if ($this->model->removerCliente($id)) {
            header('Location: listar_clientes.php');
        }
    }
}
?>
