<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Item de Pedido</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-color: white;">
    <div class="container mt-5">
        <h2>Adicionar Item de Pedido</h2>
        <form action="index.php?acao=adicionarItemPedido" method="POST" onsubmit="return validarFormulario();">
            <div class="form-group">
                <label for="idPedido">ID do Pedido:</label>
                <input type="text" name="idPedido" id="idPedido" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="idProduto">ID do Produto:</label>
                <input type="text" name="idProduto" id="idProduto" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="quantidade">Quantidade:</label>
                <input type="number" name="quantidade" id="quantidade" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="precoUnitario">Preço Unitário:</label>
                <input type="number" name="precoUnitario" id="precoUnitario" step="0.01" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Adicionar Item de Pedido</button>
        </form>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <script>
        function validarFormulario() {
            var idPedido = document.getElementById("idPedido").value;
            var idProduto = document.getElementById("idProduto").value;
            var quantidade = document.getElementById("quantidade").value;
            var precoUnitario = document.getElementById("precoUnitario").value;

            if (isNaN(idPedido) || isNaN(idProduto) || isNaN(quantidade) || isNaN(precoUnitario)) {
                alert("Por favor, insira valores numéricos válidos.");
                return false;
            }

            return true;
        }
    </script>
</body>
</html>
