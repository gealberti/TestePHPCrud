<?php
require __DIR__ . '/../model/ProdutoModel.php';
require __DIR__ . '/../config.php';

class ProdutoController {
    private $model;

    public function __construct($db) {
        $this->model = new ProdutoModel($db);
    }

    public function listarProdutos() {
        $produtos = $this->model->listarProdutos();
        require 'listar_produtos.php';
    }

    public function adicionarProduto() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $preco = $_POST['preco'];
            $categoria = $_POST['categoria'];

            if ($this->model->adicionarProduto($nome, $descricao, $preco, $categoria)) {
                header('Location: listar_produtos.php');
            }
        } else {
            require 'formulario_produto.php'; 
        }
    }

    public function visualizarProduto($id) {
        $produto = $this->model->buscarProdutoPorID($id);
        require 'visualizar_produto.php';
    }

    public function editarProduto($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $preco = $_POST['preco'];
            $categoria = $_POST['categoria'];

            if ($this->model->atualizarProduto($id, $nome, $descricao, $preco, $categoria)) {
                header('Location: visualizar_produto.php?id=' . $id);
            }
        } else {
            $produto = $this->model->buscarProdutoPorID($id);
            require 'editar_produto.php'; 
        }
    }

    public function removerProduto($id) {
        if ($this->model->removerProduto($id)) {
            header('Location: listar_produtos.php');
        }
    }
}
?>
