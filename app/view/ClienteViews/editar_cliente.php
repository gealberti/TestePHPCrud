<!DOCTYPE html>
<html>
<head>
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-color: white;">
    <div class="container">
        <h1 class="mt-5">Editar Cliente</h1>
        <form method="post" action="editar_cliente.php?id=<?php echo $cliente['ID']; ?>" onsubmit="return validarFormulario();">
            <div class="form-group">
                <input type="text" name="nome" class="form-control" value="<?php echo $cliente['Nome']; ?>" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" value="<?php echo $cliente['Email']; ?>" required>
            </div>
            <div class="form-group">
                <input type="text" name="endereco" class="form-control" value="<?php echo $cliente['Endereco']; ?>">
            </div>
            <div class="form-group">
                <input type="tel" name="telefone" class="form-control" value="<?php echo $cliente['Telefone']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function validarFormulario() {
            var nome = document.getElementsByName("nome")[0].value;
            var email = document.getElementsByName("email")[0].value;

            if (nome.trim() === "") {
                alert("O campo 'Nome' é obrigatório.");
                return false;
            }

            if (email.trim() === "") {
                alert("O campo 'Email' é obrigatório.");
                return false;
            }

            if (!validarEmail(email)) {
                alert("Por favor, insira um endereço de email válido.");
                return false;
            }

            return true;
        }

        function validarEmail(email) {
            var re = /\S+@\S+\.\S+/;
            return re.test(email);
        }
    </script>
</body>
</html>
