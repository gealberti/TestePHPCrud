<!DOCTYPE html>
<html>
<head>
    <title>Remover Produto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Remover Produto</h1>
        <p>Tem certeza de que deseja remover o produto: <?php echo $produto['Nome']; ?>?</p>
        <form method="post" action="remover_produto.php?id=<?php echo $produto['ID']; ?>">
            <button type="submit" class="btn btn-danger">Sim, remover</button>
            <a href="listar_produtos.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
