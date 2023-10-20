<!DOCTYPE html>
<html>
<head>
    <title>Lista de Pedidos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Lista de Pedidos</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Data do Pedido</th>
                    <th>ID do Cliente</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pedidos as $pedido) : ?>
                    <tr>
                        <td><?php echo $pedido['ID']; ?></td>
                        <td><?php echo $pedido['DataPedido']; ?></td>
                        <td><?php echo $pedido['IDCliente']; ?></td>
                        <td><?php echo $pedido['Total']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
