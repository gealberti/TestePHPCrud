<!DOCTYPE html>
<html>
<head>
    <title>Remover Item de Pedido</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Remover Item de Pedido</h1>
        <p>Tem certeza de que deseja remover o item de pedido com ID: <?php echo $itemPedido['ID']; ?>?</p>
        <form method="post" action="remover_item_pedido.php?id=<?php echo $itemPedido['ID']; ?>">
            <button type="submit" class="btn btn-danger">Sim, remover</button>
            <a href="listar_itens_pedido.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
