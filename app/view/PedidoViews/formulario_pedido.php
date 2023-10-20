<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Pedido</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Adicionar Pedido</h2>
        <form action="index.php?acao=adicionarPedido" method="POST" id="adicionarPedidoForm">
            <div class="form-group">
                <label for="dataPedido">Data do Pedido:</label>
                <input type="date" name="dataPedido" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="idCliente">ID do Cliente:</label>
                <input type="text" name="idCliente" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="total">Total:</label>
                <input type="number" name="total" step="0.01" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Adicionar Pedido</button>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.19.2/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.19.2/additional-methods.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#adicionarPedidoForm').validate();
        });
    </script>
</body>
</html>
