<!DOCTYPE html>
<html>
<head>
    <title>Editar Produto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Editar Produto</h1>
        <form method="post" action="editar_produto.php?id=<?php echo $produto['ID']; ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control" value="<?php echo $produto['Nome']; ?>" required>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input type="text" name="descricao" id="descricao" class="form-control" value="<?php echo $produto['Descricao']; ?>">
            </div>
            <div class="form-group">
                <label for="preco">Preço:</label>
                <input type="number" step="0.01" name="preco" id="preco" class="form-control" value="<?php echo $produto['Preco']; ?>" required>
            </div>
            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <input type="text" name="categoria" id="categoria" class="form-control" value="<?php echo $produto['Categoria']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
