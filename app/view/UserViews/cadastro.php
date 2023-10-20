<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Cadastro</div>
                    <div class="card-body">
                        <form action="autenticacao.php" method="post">
                            <div class="form-group">
                                <label for="nomeUsuario">Nome de Usuário:</label>
                                <input type="text" class="form-control" name="nomeUsuario" id="nomeUsuario" required>
                            </div>
                            <div class="form-group">
                                <label for="senha">Senha:</label>
                                <input type="password" class="form-control" name="senha" id="senha" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </form>
                    </div>
                </div>
                <p class="mt-3">Já tem uma conta? <a href="login.php">Faça login</a></p>
            </div>
        </div>
    </div>
</body>
</html>
