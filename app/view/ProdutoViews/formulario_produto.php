<!DOCTYPE html>
<html>
<head>
    <title>Adicionar/Editar Produto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-color: white;">
    <div class="container mt-5">
        <h1>Adicionar/Editar Produto</h1>
        <form method="post" action="adicionar_produto.php" onsubmit="return validarFormulario();">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
                <div id="nomeError" class="text-danger"></div>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea class="form-control" id="descricao" name="descricao" placeholder="Descrição"></textarea>
            </div>
            <div class="form-group">
                <label for="preco">Preço:</label>
                <input type="number" class="form-control" id="preco" name="preco" step="0.01" placeholder="Preço" required>
                <div id="precoError" class="text-danger"></div>
            </div>
            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Categoria">
            </div>
            <button type="submit" class="btn btn-primary">Salvar Produto</button>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function validarFormulario() {
            document.getElementById('nomeError').textContent = '';
            document.getElementById('precoError').textContent = '';
            
            const nome = document.getElementById('nome').value;
            const preco = document.getElementById('preco').value;
            
            let valido = true;

            if (nome.trim() === '') {
                document.getElementById('nomeError').textContent = 'O nome é obrigatório';
                valido = false;
            }

            if (preco <= 0) {
                document.getElementById('precoError').textContent = 'O preço deve ser maior que zero';
                valido = false;
            }

            return valido;
        }
    </script>
</body>
</html>
