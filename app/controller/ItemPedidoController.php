<?php
require __DIR__ . '/../model/ItemPedidoModel.php';
require __DIR__ . '/../config.php';

class ItemPedidoController {
    private $model;

    public function __construct($db) {
        $this->model = new ItemPedidoModel($db);
    }

    public function listarItensPedido() {
        $itensPedido = $this->model->listarItensPedido();
        require 'listar_itens_pedido.php';
    }

    public function adicionarItemPedido() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $idPedido = $_POST['idPedido'];
            $idProduto = $_POST['idProduto'];
            $quantidade = $_POST['quantidade'];
            $precoUnitario = $_POST['precoUnitario'];
            
            $errors = array();

            if (empty($idPedido) || empty($idProduto) || empty($quantidade) || empty($precoUnitario)) {
                $errors[] = "Todos os campos são obrigatórios.";
            }
            if (!is_numeric($idPedido) || !is_numeric($idProduto) || !is_numeric($quantidade) || !is_numeric($precoUnitario)) {
                $errors[] = "Os campos devem ser numéricos.";
            }

            if (empty($errors)) {
                if ($this->model->adicionarItemPedido($idPedido, $idProduto, $quantidade, $precoUnitario)) {
                    header('Location: listar_itens_pedido.php');
                } else {
                    $errors[] = "Erro ao adicionar o item de pedido. Tente novamente.";
                }
            }
        }

        require 'formulario_item_pedido.php';
    }

    public function visualizarItemPedido($id) {
        $itemPedido = $this->model->buscarItemPedidoPorID($id);
        require 'visualizar_item_pedido.php';
    }

    public function editarItemPedido($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $idPedido = $_POST['idPedido'];
            $idProduto = $_POST['idProduto'];
            $quantidade = $_POST['quantidade'];
            $precoUnitario = $_POST['precoUnitario'];

            $errors = array();

            if (empty($idPedido) || empty($idProduto) || empty($quantidade) || empty($precoUnitario)) {
                $errors[] = "Todos os campos são obrigatórios.";
            }
            if (!is_numeric($idPedido) || !is_numeric($idProduto) || !is_numeric($quantidade) || !is_numeric($precoUnitario)) {
                $errors[] = "Os campos devem ser numéricos.";
            }

            if (empty($errors) && $this->model->atualizarItemPedido($id, $idPedido, $idProduto, $quantidade, $precoUnitario)) {
                header('Location: visualizar_item_pedido.php?id=' . $id);
            }
        } else {
            $itemPedido = $this->model->buscarItemPedidoPorID($id);
            require 'editar_item_pedido.php';
        }
    }

    public function removerItemPedido($id) {
        if ($this->model->removerItemPedido($id)) {
            header('Location: listar_itens_pedido.php');
        }
    }
}
?>
