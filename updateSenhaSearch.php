<!DOCTYPE html>
<html>
<head>
    <title>Editar cadastro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="estiloLogin.css"/>
    <script>
        function validarFormulario() {
            var cpf = document.getElementsByName("cpf")[0].value;
            if (cpf.trim() === "") {
                alert("Por favor, digite um CPF.");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <div class="login-form p-5 my-5 bg-info text-white">
        <h1> Redefinir senha</h1><br>
        <form action="updateSenhaForm.php" method="post" onsubmit="return validarFormulario()">
            <input type="text" name="cpf" placeholder="Digite seu CPF"><br>
            <input type="submit" name="Continuar" value="Continuar" class="btn btn-light mt-3"/>
        </form>
    </div>
</body>
</html>

