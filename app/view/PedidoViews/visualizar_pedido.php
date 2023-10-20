<!DOCTYPE html>
<html>
<head>
    <title>Detalhes do Pedido</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Detalhes do Pedido</h1>
        <p><strong>Data do Pedido:</strong> <?php echo $pedido['DataPedido']; ?></p>
        <p><strong>ID do Cliente:</strong> <?php echo $pedido['IDCliente']; ?></p>
        <p><strong>Total:</strong> <?php echo $pedido['Total']; ?></p>
        <a href="editar_pedido.php?id=<?php echo $pedido['ID']; ?>" class="btn btn-primary">Editar Pedido</a>
        <a href="remover_pedido.php?id=<?php echo $pedido['ID']; ?>" class="btn btn-danger">Remover Pedido</a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
