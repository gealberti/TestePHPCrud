<!DOCTYPE html>
<html>
<head>
    <title>Detalhes do Cliente</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-color: white;">
    <div class="container mt-5">
        <h1>Detalhes do Cliente</h1>
        <p><strong>Nome:</strong> <?php echo $cliente['Nome']; ?></p>
        <p><strong>Email:</strong> <?php echo $cliente['Email']; ?></p>
        <p><strong>Endereço:</strong> <?php echo $cliente['Endereco']; ?></p>
        <p><strong>Telefone:</strong> <?php echo $cliente['Telefone']; ?></p>
        <a href="editar_cliente.php?id=<?php echo $cliente['ID']; ?>" class="btn btn-primary">Editar Cliente</a>
        <a href="remover_cliente.php?id=<?php echo $cliente['ID']; ?>" class="btn btn-danger">Remover Cliente</a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
