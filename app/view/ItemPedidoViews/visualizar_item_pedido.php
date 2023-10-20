<!DOCTYPE html>
<html>
<head>
    <title>Detalhes do Item de Pedido</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Detalhes do Item de Pedido</h1>
        <p><strong>ID do Pedido:</strong> <?php echo $itemPedido['IDPedido']; ?></p>
        <p><strong>ID do Produto:</strong> <?php echo $itemPedido['IDProduto']; ?></p>
        <p><strong>Quantidade:</strong> <?php echo $itemPedido['Quantidade']; ?></p>
        <p><strong>Preço Unitário:</strong> <?php echo $itemPedido['PrecoUnitario']; ?></p>
        <a href="editar_item_pedido.php?id=<?php echo $itemPedido['ID']; ?>" class="btn btn-primary">Editar Item de Pedido</a>
        <a href="remover_item_pedido.php?id=<?php echo $itemPedido['ID']; ?>" class="btn btn-danger">Remover Item de Pedido</a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
