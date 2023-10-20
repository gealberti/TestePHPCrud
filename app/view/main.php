<!DOCTYPE html>
<html>
<head>
    <title>Página Principal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <h1 class="mt-5 text-center">Bem-vindo à Página Principal</h1>
    <h3 class="mt-5 text-center">Selecione o que deseja fazer hoje</h3>
    <div class="container mt-4">
        <div class="row">
            <div class="col-3">
                <a href="../controller/ClienteController.php" class="btn btn-primary btn-block">Clientes</a>
            </div>
            <div class="col-3">
                <a href="../controller/PedidoController.php" class="btn btn-primary btn-block">Pedidos</a>
            </div>
            <div class="col-3">
                <a href="../controller/ProdutoController.php" class="btn btn-primary btn-block">Produtos</a>
            </div>
            <div class="col-3">
                <a href="../controller/ItemPedidoController.php" class="btn btn-primary btn-block">ItensPedidos</a>
            </div>
        </div>
    </div>
    
    <div class="container mt-4">
        <a href="../controller/UsuarioController.php?acao=logout" class="btn btn-danger btn-block">Logout</a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
