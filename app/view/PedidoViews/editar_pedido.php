<!DOCTYPE html>
<html>
<head>
    <title>Editar Pedido</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Editar Pedido</h1>
        <form method="post" action="editar_pedido.php?id=<?php echo $pedido['ID']; ?>" id="editarPedidoForm">
            <div class="form-group">
                <label for="dataPedido">Data do Pedido:</label>
                <input type="date" name="dataPedido" class="form-control" value="<?php echo $pedido['DataPedido']; ?>" required>
            </div>
            <div class="form-group">
                <label for="idCliente">ID do Cliente:</label>
                <input type="number" name="idCliente" class="form-control" value="<?php echo $pedido['IDCliente']; ?>" required>
            </div>
            <div class="form-group">
                <label for="total">Total:</label>
                <input type="number" name="total" step="0.01" class="form-control" value="<?php echo $pedido['Total']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        </form>
    </div>

  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.19.2/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.19.2/additional-methods.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#editarPedidoForm').validate();
        });
    </script>
</body>
</html>
