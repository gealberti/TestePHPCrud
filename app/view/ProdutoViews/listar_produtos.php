<!DOCTYPE html>
<html>
<head>
    <title>Listagem de Produtos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Listagem de Produtos</h1>
        <ul class="list-group">
            <?php foreach ($produtos as $produto) { ?>
                <li class="list-group-item"><?php echo $produto['Nome']; ?></li>
            <?php } ?>
        </ul>
        <a href="adicionar_produto.php" class="btn btn-primary mt-3">Adicionar Produto</a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
