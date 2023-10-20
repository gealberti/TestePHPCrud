<!DOCTYPE html>
<html>
<head>
    <title>Editar Item de Pedido</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-color: white;">
    <div class="container mt-5">
        <h1>Editar Item de Pedido</h1>
        <form method="post" action="editar_item_pedido.php?id=<?php echo $itemPedido['ID']; ?>">
            <div class="form-group">
                <label for="idPedido">ID do Pedido</label>
                <input type="number" name="idPedido" id="idPedido" class="form-control" value="<?php echo $itemPedido['IDPedido']; ?>" required>
            </div>
            <div class="form-group">
                <label for="idProduto">ID do Produto</label>
                <input type="number" name="idProduto" id="idProduto" class="form-control" value="<?php echo $itemPedido['IDProduto']; ?>" required>
            </div>
            <div class="form-group">
                <label for="quantidade">Quantidade</label>
                <input type="number" name="quantidade" id="quantidade" class="form-control" value="<?php echo $itemPedido['Quantidade']; ?>" required>
            </div>
            <div class="form-group">
                <label for="precoUnitario">Preço Unitário</label>
                <input type="number" step="0.01" name="precoUnitario" id="precoUnitario" class="form-control" value="<?php echo $itemPedido['PrecoUnitario']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
