<?php
require 'config.php';
require 'controller/ClienteController.php';
require 'controller/ProdutoController.php';
require 'controller/PedidoController.php';
require 'controller/ItemPedidoController.php';
require 'controller/UsuarioController.php';

$clienteController = new ClienteController($conn);
$produtoController = new ProdutoController($conn);
$pedidoController = new PedidoController($conn);
$itemPedidoController = new ItemPedidoController($conn);
$usuarioController = new UsuarioController($conn);

if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];
    switch ($acao) {
        case 'listarClientes':
            $clienteController->listarClientes();
            break;
        case 'adicionarCliente':
            $clienteController->adicionarCliente();
            break;
        case 'listarProdutos':
            $produtoController->listarProdutos();
            break;
        case 'adicionarProduto':
            $produtoController->adicionarProduto();
            break;
        case 'editarProduto':  
            $produtoController->editarProduto($_GET['id']);
            break;
        case 'removerProduto':  
            $produtoController->removerProduto($_GET['id']);
            break;
        case 'listarPedidos':
            $pedidoController->listarPedidos();
            break;
        case 'adicionarPedido':
            $pedidoController->adicionarPedido();
            break;
        case 'editarPedido':  
            $pedidoController->editarPedido($_GET['id']);
            break;
        case 'removerPedido':
            $pedidoController->removerPedido($_GET['id']);
            break;
        case 'listarItensPedido':
            $itemPedidoController->listarItensPedido();
            break;
        case 'adicionarItemPedido':
            $itemPedidoController->adicionarItemPedido();
            break;
        case 'editarItemPedido': 
            $itemPedidoController->editarItemPedido($_GET['id']);
            break;
        case 'removerItemPedido':  
            $itemPedidoController->removerItemPedido($_GET['id']);
            break;
        case 'login':
            include 'login.php';
            break;
        case 'cadastro':
            include 'cadastro.php';
            break;
            
            case 'registrarUsuario': 
                $usuarioController->registrarUsuario($_POST['nomeUsuario'], $_POST['senha']);
                break;
            case 'autenticarUsuario': 
                $usuarioController->autenticarUsuario($_POST['nomeUsuario'], $_POST['senha']);
                break;
            case 'logout':
                $usuarioController->logout();
                break;
            default:
                echo "Ação desconhecida.";
        }
    } else {
        $clienteController->listarClientes();
    }

$conn->close();
?>
