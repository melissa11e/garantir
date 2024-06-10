<!DOCTYPE html>
<head>
<meta charset="UTF-8">
    <title> Login </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="estiloLogin.css"/>

</style>
</head>
<body>
<?php require_once "loginAdmFunc.php"; 

if (isset($_POST['acessar'])){
    login($connect);
}
?>

<div class="login-form p-5 my-5 bg-info text-white">
<h1> Administrador </h1></br>
    <form action='' method='post'>
    <input type="email" name="emailAdmin" placeholder="Digite seu email">
    <input type="password" name="senhaAdmin" placeholder="Digite sua senha">
</br>
    <input type="submit" name="acessar" value="Acessar" class="btn btn-light mt-3">
</form>
</div>
<div class="conteinerlink">
<a href="insertFormAdm.php" > Não possui acesso? Crie um aqui. </a>
</div>
</body>

