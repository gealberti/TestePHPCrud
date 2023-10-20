<!DOCTYPE html>
<html>
<head>
    <title>Itens de Pedido</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Itens de Pedido</h2>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID do Pedido</th>
                    <th>ID do Produto</th>
                    <th>Quantidade</th>
                    <th>Preço Unitário</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($itensPedido as $item) : ?>
                    <tr>
                        <td><?php echo $item['IDPedido']; ?></td>
                        <td><?php echo $item['IDProduto']; ?></td>
                        <td><?php echo $item['Quantidade']; ?></td>
                        <td><?php echo $item['PrecoUnitario']; ?></td>
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
