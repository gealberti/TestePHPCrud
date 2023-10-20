<!DOCTYPE html>
<html>
<head>
    <title>Adicionar/Editar Cliente</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-color: white;">
    <div class="container">
        <h1 class="mt-5">Adicionar/Editar Cliente</h1>
        <form method="post" action="adicionar_cliente.php" onsubmit="return validarFormulario();">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço">
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Telefone">
            </div>
            <button type="submit" class="btn btn-primary">Salvar Cliente</button>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function validarFormulario() {
            var nome = document.getElementById("nome").value;
            var email = document.getElementById("email").value;

            if (nome.trim() === "") {
                alert("Por favor, insira o nome.");
                return false;
            }

            if (email.trim() === "" || !validateEmail(email)) {
                alert("Por favor, insira um email válido.");
                return false;
            }

            return true;
        }

        function validateEmail(email) {
            var re = /\S+@\S+\.\S+/;
            return re.test(email);
        }
    </script>
</body>
</html>
