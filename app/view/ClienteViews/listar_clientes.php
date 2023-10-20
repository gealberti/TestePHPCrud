<!DOCTYPE html>
<html>
<head>
    <title>Listagem de Clientes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-color: white;">
    <div class="container">
        <h1 class="mt-5">Listagem de Clientes</h1>
        <ul class="list-group mt-3">
            <?php foreach ($clientes as $cliente) { ?>
                <li class="list-group-item">
                    <?php echo $cliente['Nome']; ?>
                    <a href="visualizar_cliente.php?id=<?php echo $cliente['ID']; ?>" class="btn btn-primary btn-sm float-right">Ver</a>
                    <a href="remover_cliente.php?id=<?php echo $cliente['ID']; ?>" class="btn btn-danger btn-sm float-right" onclick="return confirm('Tem certeza de que deseja remover o cliente: <?php echo $cliente['Nome']; ?>?')">Remover</a>
                </li>
            <?php } ?>
        </ul>
        <a href="adicionar_cliente.php" class="btn btn-success mt-3">Adicionar Cliente</a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
