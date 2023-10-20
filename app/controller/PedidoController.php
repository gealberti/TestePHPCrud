<?php
require __DIR__ . '/../model/PedidoModel.php';
require __DIR__ . '/../config.php';
class PedidoController {
    private $model;

    public function __construct($db) {
        $this->model = new PedidoModel($db);
    }

    public function listarPedidos() {
        $pedidos = $this->model->listarPedidos();
        require 'listar_pedidos.php'; 
    }

    public function adicionarPedido() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dataPedido = $_POST['dataPedido'];
            $idCliente = $_POST['idCliente'];
            $total = $_POST['total'];

            if ($this->model->adicionarPedido($dataPedido, $idCliente, $total)) {
                header('Location: listar_pedido.php');
            }
        } else {
            require 'formulario_pedido.php'; 
        }
    }

    public function visualizarPedido($id) {
        $pedido = $this->model->buscarPedidoPorID($id);
        require 'visualizar_pedido.php'; 
    }

    public function editarPedido($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dataPedido = $_POST['dataPedido'];
            $idCliente = $_POST['idCliente'];
            $total = $_POST['total'];

            if ($this->model->atualizarPedido($id, $dataPedido, $idCliente, $total)) {
                header('Location: visualizar_pedido.php?id=' . $id);
            }
        } else {
            $pedido = $this->model->buscarPedidoPorID($id);
            require 'editar_pedido.php';
        }
    }

    public function removerPedido($id) {
        if ($this->model->removerPedido($id)) {

            header('Location: listar_pedidos.php');
        }
    }
}
?>
