<!DOCTYPE html>

<html>
    <head>
    <meta charset="UTF-8">
        <title> Formulário de Cadastro </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="estiloLogin.css"/>
    </head>
    <body>
        <div class="login-form p-5 my-5 bg-info text-white">
        <form action='cadastroacao.php' method='post'>
            <strong style="margin-right: 145px;"> Nome </strong></br>
            <input type="text" name="nome"  placeholder="Digite seu nome"/><br/>
            <strong style="margin-right: 160px;"> CPF </strong></br>
            <input type="text" name="cpf"  placeholder="Digite seu CPF"/><br/>
            <strong style="margin-right: 145px;"> Email </strong></br>
            <input type="text" name="email" placeholder="Digite seu email"/><br/>
            <strong style="margin-right: 125px;"> Telefone </strong></br>
            <input type="text" name="telefone" placeholder="Digite seu telefone"/><br/>
            <strong style="margin-right: 140px;"> Senha </strong></br>
            <input type="text" name="senha" placeholder="Digite sua senha"/><br/>
            <input type="submit" value="enviar" class="btn btn-light mt-3"/>
        </form>
</div>
    </body>
</html>