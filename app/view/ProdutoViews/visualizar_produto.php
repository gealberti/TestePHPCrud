<!DOCTYPE html>
<html>
<head>
    <title>Detalhes do Produto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Detalhes do Produto</h1>
        <p><strong>Nome:</strong> <?php echo $produto['Nome']; ?></p>
        <p><strong>Descrição:</strong> <?php echo $produto['Descricao']; ?></p>
        <p><strong>Preço:</strong> <?php echo $produto['Preco']; ?></p>
        <p><strong>Categoria:</strong> <?php echo $produto['Categoria']; ?></p>
        <a href="editar_produto.php?id=<?php echo $produto['ID']; ?>" class="btn btn-primary">Editar Produto</a>
        <a href="remover_produto.php?id=<?php echo $produto['ID']; ?>" class="btn btn-danger">Remover Produto</a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
